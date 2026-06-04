<?php

namespace App\Models;

use App\Enums\BlogPostStatus;
use Filament\Forms\Components\RichEditor\RichContentRenderer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Throwable;

class BlogPost extends Model
{
    public const DEFAULT_COVER_ASSET = 'assets/blog/nova_news.png';

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'cover_image',
        'tags',
        'status',
        'published_at',
        'meta_title',
        'meta_description',
        'focus_keyword',
        'canonical_url',
        'robots',
    ];

    protected function casts(): array
    {
        return [
            'tags' => 'array',
            'status' => BlogPostStatus::class,
            'published_at' => 'datetime',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (BlogPost $post): void {
            if (blank($post->slug) && filled($post->title)) {
                $post->slug = static::uniqueSlug(Str::slug($post->title), $post->id);
            }

            if ($post->status === BlogPostStatus::Published && $post->published_at === null) {
                $post->published_at = now();
            }

            if (filled($post->slug)) {
                $post->canonical_url = static::canonicalUrlForSlug($post->slug);
            }

            if (is_array($post->tags)) {
                $post->tags = static::normalizeTags($post->tags);
            }
        });
    }

    /**
     * @param  array<int, string>|null  $tags
     * @return list<string>
     */
    public static function normalizeTags(?array $tags): array
    {
        return collect($tags ?? [])
            ->map(fn (mixed $tag): string => Str::lower(trim((string) $tag)))
            ->filter()
            ->unique()
            ->values()
            ->all();
    }

    /**
     * @return Collection<int, string>
     */
    public function normalizedTags(): Collection
    {
        return collect(static::normalizeTags($this->tags));
    }

    /**
     * @return Collection<int, BlogPost>
     */
    public function relatedPosts(int $limit = 8): Collection
    {
        $tags = $this->normalizedTags();

        if ($tags->isEmpty()) {
            return $this->fallbackRelatedPosts($limit);
        }

        $candidates = static::query()
            ->published()
            ->whereKeyNot($this->getKey())
            ->where(function (Builder $query) use ($tags): void {
                foreach ($tags as $tag) {
                    $query->orWhereJsonContains('tags', $tag);
                }
            })
            ->get(['id', 'title', 'slug', 'published_at', 'tags']);

        $related = $candidates
            ->map(function (BlogPost $candidate) use ($tags): BlogPost {
                $sharedCount = collect(static::normalizeTags($candidate->tags))
                    ->intersect($tags)
                    ->count();

                $candidate->setAttribute('shared_tags_count', $sharedCount);

                return $candidate;
            })
            ->filter(fn (BlogPost $candidate): bool => (int) $candidate->getAttribute('shared_tags_count') > 0)
            ->sort(function (BlogPost $a, BlogPost $b): int {
                $byShared = ((int) $b->getAttribute('shared_tags_count')) <=> ((int) $a->getAttribute('shared_tags_count'));

                if ($byShared !== 0) {
                    return $byShared;
                }

                return ($b->published_at?->getTimestamp() ?? 0) <=> ($a->published_at?->getTimestamp() ?? 0);
            })
            ->take($limit)
            ->values();

        if ($related->isNotEmpty()) {
            return $related;
        }

        return $this->fallbackRelatedPosts($limit);
    }

    /**
     * @return Collection<int, BlogPost>
     */
    public function fallbackRelatedPosts(int $limit = 8): Collection
    {
        return static::query()
            ->published()
            ->whereKeyNot($this->getKey())
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->limit($limit)
            ->get(['id', 'title', 'slug', 'published_at', 'tags']);
    }

    public static function canonicalUrlForSlug(?string $slug): ?string
    {
        if (blank($slug)) {
            return null;
        }

        return rtrim((string) config('app.url'), '/').'/blog/'.ltrim($slug, '/');
    }

    public static function plainTextFromContent(mixed $content): string
    {
        if (blank($content)) {
            return '';
        }

        if (is_string($content)) {
            $decoded = json_decode($content, true);

            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                $content = $decoded;
            }
        }

        try {
            return Str::squish(RichContentRenderer::make($content)->toText());
        } catch (Throwable) {
            return Str::squish(strip_tags(html_entity_decode((string) $content, ENT_QUOTES | ENT_HTML5, 'UTF-8')));
        }
    }

    public static function metaDescriptionFromContent(mixed $content, int $length = 500): string
    {
        return mb_substr(static::plainTextFromContent($content), 0, $length);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query
            ->where('status', BlogPostStatus::Published)
            ->where(function (Builder $query): void {
                $query
                    ->whereNull('published_at')
                    ->orWhere('published_at', '<=', now());
            });
    }

    public function resolveRouteBinding($value, $field = null): ?Model
    {
        return static::query()
            ->published()
            ->where($field ?? $this->getRouteKeyName(), $value)
            ->firstOrFail();
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getFormattedPublishedDateAttribute(): ?string
    {
        return $this->published_at?->format('M j, Y');
    }

    public function getPrimaryTagAttribute(): ?string
    {
        $tags = $this->tags ?? [];

        return filled($tags) ? (string) ($tags[0] ?? null) : null;
    }

    public function renderedContent(): string
    {
        if (blank($this->content)) {
            return '';
        }

        try {
            return RichContentRenderer::make($this->content)->toHtml();
        } catch (Throwable) {
            return (string) $this->content;
        }
    }

    public static function defaultCoverImageUrl(): string
    {
        return static::absoluteAssetUrl(asset(self::DEFAULT_COVER_ASSET));
    }

    public static function absoluteAssetUrl(string $url): string
    {
        if (preg_match('#^https?://#i', $url)) {
            return $url;
        }

        return url($url);
    }

    public function getCoverImageUrlAttribute(): string
    {
        if (blank($this->cover_image)) {
            return static::defaultCoverImageUrl();
        }

        return static::absoluteAssetUrl(Storage::disk('public')->url($this->cover_image));
    }

    public function getOgImageUrlAttribute(): string
    {
        return $this->cover_image_url;
    }

    public function hasUploadedCoverImage(): bool
    {
        return filled($this->cover_image);
    }

    public function getEffectiveMetaTitleAttribute(): string
    {
        return $this->meta_title ?: $this->title;
    }

    public function getEffectiveMetaDescriptionAttribute(): ?string
    {
        return $this->meta_description ?: $this->excerpt;
    }

    public static function uniqueSlug(string $base, ?int $ignoreId = null): string
    {
        $slug = $base;
        $counter = 1;

        while (
            static::query()
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->where('slug', $slug)
                ->exists()
        ) {
            $slug = "{$base}-{$counter}";
            $counter++;
        }

        return $slug;
    }
}
