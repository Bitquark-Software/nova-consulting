@props([
    'posts',
])

@php
    $lineCount = $posts->isNotEmpty() ? ($posts->count() * 4) + 10 : 14;
@endphp

<aside {{ $attributes->class(['blog-ide-sidebar lg:sticky lg:top-[calc(5.25rem+1rem)] lg:self-start']) }} aria-labelledby="blog-ide-sidebar-title">
    <p class="sr-only">{{ __('blog.editorial.sidebar_title') }}</p>
    <div class="blog-ide-sidebar__titlebar">
        <span class="blog-ide-sidebar__dot blog-ide-sidebar__dot--close" aria-hidden="true"></span>
        <span class="blog-ide-sidebar__dot blog-ide-sidebar__dot--min" aria-hidden="true"></span>
        <span class="blog-ide-sidebar__dot blog-ide-sidebar__dot--max" aria-hidden="true"></span>
        <span id="blog-ide-sidebar-title" class="truncate">{{ __('blog.editorial.sidebar_filename') }}</span>
    </div>
    <div class="blog-ide-sidebar__body">
        <div class="blog-ide-sidebar__gutter" aria-hidden="true">
            @for ($line = 1; $line <= $lineCount; $line++)
                <div>{{ $line }}</div>
            @endfor
        </div>
        <pre class="blog-ide-sidebar__code"><code>@if ($posts->isNotEmpty())<span class="blog-ide-kw">&lt;?php</span>

<span class="blog-ide-cm">{{ __('blog.editorial.sidebar_comment') }}</span>

<span class="blog-ide-var">$relatedPosts</span> <span class="blog-ide-kw">=</span> [
@foreach ($posts as $related)
    <span class="blog-ide-str">'{{ e($related->slug) }}'</span> <span class="blog-ide-kw">=&gt;</span> <span class="blog-ide-str">'{{ e(\Illuminate\Support\Str::limit($related->title, 48)) }}'</span>,
@endforeach
<span class="blog-ide-kw">]</span>;

<span class="blog-ide-kw">foreach</span> (<span class="blog-ide-var">$relatedPosts</span> <span class="blog-ide-kw">as</span> <span class="blog-ide-var">$slug</span> <span class="blog-ide-kw">=&gt;</span> <span class="blog-ide-var">$title</span>) {
@foreach ($posts as $related)
    <span class="blog-ide-fn">read</span>(<a href="{{ route('blog.show', $related) }}" wire:navigate class="blog-ide-link">{{ $related->slug }}</a>); <span class="blog-ide-cm">// {{ e(\Illuminate\Support\Str::limit($related->title, 36)) }}</span>
@endforeach
}
@else<span class="blog-ide-kw">&lt;?php</span>

<span class="blog-ide-cm">{{ __('blog.editorial.sidebar_empty_comment') }}</span>

<span class="blog-ide-kw">throw new</span> <span class="blog-ide-exc">{{ __('blog.editorial.sidebar_empty_exception') }}</span><span class="blog-ide-kw">(</span>
    <span class="blog-ide-str">'{{ __('blog.editorial.sidebar_empty_message') }}'</span>
<span class="blog-ide-kw">);</span>

<span class="blog-ide-cm">// {{ __('blog.editorial.sidebar_empty_hint') }}</span>
<a href="{{ route('blog.index') }}" wire:navigate class="blog-ide-link">{{ __('blog.editorial.sidebar_empty_link') }}</a><span class="blog-ide-kw">;</span>
<span class="blog-ide-kw">exit</span><span class="blog-ide-kw">(</span><span class="blog-ide-num">404</span><span class="blog-ide-kw">);</span>
@endif</code></pre>
    </div>
</aside>
