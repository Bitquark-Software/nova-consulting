<?php

namespace App\Livewire\Blog;

use App\Models\BlogPost;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    /** @var list<string> */
    public array $masonryAspectClasses = [
        '',
        'aspect-[3/4]',
        'aspect-[16/9]',
        'aspect-square',
    ];

    #[Computed]
    public function posts(): Collection
    {
        return BlogPost::query()
            ->published()
            ->with('author')
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->get();
    }

    #[Computed]
    public function featuredPosts(): Collection
    {
        return $this->posts->take(4);
    }

    #[Computed]
    public function archivePosts(): Collection
    {
        return $this->posts->skip(4)->take(16);
    }

    public function render()
    {
        return view('livewire.blog.index')
            ->layout('layouts.blog-editorial', [
                'navGaSection' => 'nav-blog-index',
                'seo_overrides' => [
                    'title' => __('blog.editorial.seo_title'),
                    'description' => __('blog.editorial.seo_description'),
                    'keywords' => __('blog.editorial.seo_keywords'),
                    'og' => [
                        'title' => __('blog.editorial.seo_title'),
                        'description' => __('blog.editorial.seo_description'),
                        'type' => 'website',
                        'url' => route('blog.index'),
                        'image' => BlogPost::defaultCoverImageUrl(),
                        'alt' => __('blog.editorial.seo_title'),
                    ],
                ],
            ]);
    }
}
