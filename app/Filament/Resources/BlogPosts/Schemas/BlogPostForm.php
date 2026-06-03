<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use App\Enums\BlogPostStatus;
use App\Models\BlogPost;
use App\Models\User;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogPostForm
{
    public static function syncSeoFromSlug(callable $set, ?string $slug): void
    {
        $set('canonical_url', BlogPost::canonicalUrlForSlug($slug));
    }

    public static function syncSeoFromTitle(callable $set, callable $get, ?string $title): void
    {
        $title = (string) $title;

        if (blank($get('meta_title')) || $get('meta_title') === $get('_seo_meta_title_auto')) {
            $set('meta_title', $title);
        }

        $set('_seo_meta_title_auto', $title);
        self::syncSeoFromSlug($set, $get('slug'));
    }

    public static function syncSeoFromContent(callable $set, callable $get, mixed $content): void
    {
        $description = BlogPost::metaDescriptionFromContent($content);

        if (blank($get('meta_description')) || $get('meta_description') === $get('_seo_meta_description_auto')) {
            $set('meta_description', $description);
        }

        $set('_seo_meta_description_auto', $description);
    }

    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('_seo_meta_title_auto')
                    ->dehydrated(false),
                Hidden::make('_seo_meta_description_auto')
                    ->dehydrated(false),

                Grid::make(3)
                    ->schema([
                        Section::make('Article')
                            ->description('Title, URL slug, excerpt, and body content.')
                            ->icon('heroicon-o-document-text')
                            ->columnSpan(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set, callable $get, ?string $operation): void {
                                        if ($operation === 'create' && blank($get('slug'))) {
                                            $set('slug', Str::slug((string) $state));
                                        }

                                        self::syncSeoFromTitle($set, $get, $state);
                                    })
                                    ->columnSpanFull(),

                                TextInput::make('slug')
                                    ->label('URL slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(BlogPost::class, 'slug', ignoreRecord: true)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => self::syncSeoFromSlug($set, $state))
                                    ->helperText('Used in the public article URL. Auto-generated from title on create.')
                                    ->columnSpanFull(),

                                Textarea::make('excerpt')
                                    ->label('Excerpt')
                                    ->rows(3)
                                    ->maxLength(500)
                                    ->helperText('Short summary for listings and fallback meta description.')
                                    ->columnSpanFull(),

                                RichEditor::make('content')
                                    ->label('Content')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set, callable $get) => self::syncSeoFromContent($set, $get, $state))
                                    ->toolbarButtons([
                                        'attachFiles',
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'codeBlock',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'undo',
                                    ])
                                    ->extraInputAttributes(['style' => 'min-height: 420px;'])
                                    ->columnSpanFull(),
                            ]),

                        Section::make('Publishing')
                            ->description('Cover image, status, schedule, and author.')
                            ->icon('heroicon-o-photo')
                            ->columnSpan(1)
                            ->schema([
                                FileUpload::make('cover_image')
                                    ->label('Cover image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('blog/covers')
                                    ->visibility('public')
                                    ->imageEditor()
                                    ->maxSize(5120)
                                    ->helperText('Thumbnail and social preview image.')
                                    ->columnSpanFull(),

                                Select::make('status')
                                    ->label('Status')
                                    ->options(BlogPostStatus::class)
                                    ->default(BlogPostStatus::Draft)
                                    ->required()
                                    ->native(false),

                                DateTimePicker::make('published_at')
                                    ->label('Publish date')
                                    ->seconds(false)
                                    ->helperText('Set when scheduling or backdating a published post.'),

                                Select::make('user_id')
                                    ->label('Author')
                                    ->options(
                                        User::query()
                                            ->whereIn('type', ['super_admin', 'employee'])
                                            ->pluck('name', 'id')
                                    )
                                    ->searchable()
                                    ->default(fn () => Auth::id())
                                    ->required(),

                                TagsInput::make('tags')
                                    ->label('Tags')
                                    ->placeholder('Add tag')
                                    ->splitKeys(['Tab', ','])
                                    ->columnSpanFull(),

                                Placeholder::make('created_at')
                                    ->label('Created')
                                    ->content(fn (?BlogPost $record) => $record?->created_at?->diffForHumans() ?? 'New article'),
                            ]),
                    ]),

                Section::make('SEO')
                    ->description('Auto-filled from title and content. Edit any field to keep your custom value.')
                    ->icon('heroicon-o-magnifying-glass')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('meta_title')
                                ->label('Meta title')
                                ->maxLength(70)
                                ->live(onBlur: true)
                                ->helperText('Synced from title until you change it.'),

                            TextInput::make('focus_keyword')
                                ->label('Focus keyword')
                                ->maxLength(100)
                                ->helperText('Primary keyword for this article.'),
                        ]),
                        Textarea::make('meta_description')
                            ->label('Meta description')
                            ->rows(3)
                            ->maxLength(500)
                            ->live(onBlur: true)
                            ->helperText('First 500 characters of content until you change it.')
                            ->columnSpanFull(),
                        Grid::make(2)->schema([
                            TextInput::make('canonical_url')
                                ->label('Canonical URL')
                                ->disabled()
                                ->dehydrated()
                                ->helperText('Generated from slug and APP_URL (/blog/{slug}).'),

                            Select::make('robots')
                                ->label('Robots directive')
                                ->options([
                                    'index,follow' => 'Index, follow',
                                    'noindex,follow' => 'No index, follow',
                                    'index,nofollow' => 'Index, no follow',
                                    'noindex,nofollow' => 'No index, no follow',
                                ])
                                ->default('index,follow')
                                ->required()
                                ->native(false),
                        ]),
                    ]),
            ]);
    }
}
