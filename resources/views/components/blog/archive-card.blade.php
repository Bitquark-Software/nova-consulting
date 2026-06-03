@props([
    'post',
    'hiddenOnMobile' => false,
])

<a
    href="{{ route('blog.show', $post) }}"
    wire:navigate
    {{ $attributes->class([
        'p-6 border-r border-b border-primary hover:bg-white transition-colors cursor-pointer group block',
        'hidden md:block' => $hiddenOnMobile,
    ]) }}
>
    @if ($post->primary_tag)
        <span class="inline-block bg-surface-container-highest px-2 py-1 font-caption text-caption text-primary mb-4 uppercase tracking-wider">
            {{ $post->primary_tag }}
        </span>
    @endif
    <h4 class="font-headline-sm text-headline-sm text-primary leading-snug group-hover:underline decoration-1">
        {{ $post->title }}
    </h4>
</a>
