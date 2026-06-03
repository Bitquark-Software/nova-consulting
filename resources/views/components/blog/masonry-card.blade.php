@props([
    'post',
    'aspectClass' => '',
    'headlineClass' => 'font-headline-sm text-headline-sm',
])

@php
    $coverUrl = $post->cover_image_url;
    $imageFrameClass = filled($aspectClass)
        ? "overflow-hidden border border-primary mb-4 {$aspectClass}"
        : 'overflow-hidden border border-primary mb-4';
@endphp

<a
    href="{{ route('blog.show', $post) }}"
    wire:navigate
    {{ $attributes->class(['masonry-item group cursor-pointer block']) }}
>
    <div class="{{ $imageFrameClass }}">
        <img
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 {{ filled($aspectClass) ? '' : 'h-auto' }}"
            src="{{ $coverUrl }}"
            alt="{{ $post->excerpt ?: $post->title }}"
            loading="lazy"
        />
    </div>
    <div class="space-y-2">
        <div class="flex items-center gap-2 font-caption text-caption text-outline uppercase">
            @if ($post->formatted_published_date)
                <span>{{ $post->formatted_published_date }}</span>
            @endif
            @if ($post->formatted_published_date && $post->author)
                <span class="w-1 h-1 bg-outline rounded-full" aria-hidden="true"></span>
            @endif
            @if ($post->author)
                <span>{{ strtoupper($post->author->name) }}</span>
            @endif
        </div>
        <h2 class="{{ $headlineClass }} text-primary leading-tight group-hover:underline decoration-1 underline-offset-4">
            {{ $post->title }}
        </h2>
    </div>
</a>
