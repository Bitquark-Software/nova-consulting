<?php

namespace App\Livewire\Blog;

use App\Models\BlogPost;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Show extends Component
{
    public BlogPost $post;

    public function mount(BlogPost $post): void
    {
        $this->post = $post->load('author');
    }

    #[Computed]
    public function relatedPosts()
    {
        return $this->post->relatedPosts(8);
    }

    public function render()
    {
        return view('livewire.blog.show')
            ->layout('layouts.blog-editorial', [
                'navGaSection' => 'nav-blog-article',
                'seo_overrides' => [
                    'title' => $this->post->effective_meta_title,
                    'description' => $this->post->effective_meta_description,
                    'keywords' => implode(', ', $this->post->tags ?? []),
                    'canonical' => $this->post->canonical_url,
                    'robots' => $this->post->robots,
                    'og' => [
                        'title' => $this->post->effective_meta_title,
                        'description' => $this->post->effective_meta_description,
                        'type' => 'article',
                        'url' => $this->post->canonical_url,
                        'image' => $this->post->cover_image_url,
                    ],
                ],
            ]);
    }
}
