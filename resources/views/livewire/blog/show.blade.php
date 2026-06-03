<article class="w-full pb-stack-lg">
    {{-- Full-width hero --}}
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="blog-hero-image w-full">
            <img
                src="{{ $post->cover_image_url }}"
                alt="{{ $post->title }}"
                width="1280"
                height="720"
                fetchpriority="high"
                decoding="async"
            />
        </div>

        <nav class="mt-5 mb-6" aria-label="{{ __('blog.editorial.article_nav_aria') }}">
            <ul class="blog-glass-actions" role="list">
                <li>
                    <a
                        href="{{ route('blog.index') }}"
                        wire:navigate
                        class="marketing-nav-pill-link"
                    >{{ __('blog.editorial.all_posts') }}</a>
                </li>
                @if ($post->author)
                    <li>
                        <span class="marketing-nav-pill-link marketing-nav-pill-link--active pointer-events-none">
                            {{ strtoupper($post->author->name) }}
                        </span>
                    </li>
                @endif
                @if ($post->formatted_published_date)
                    <li>
                        <span class="marketing-nav-pill-link pointer-events-none">
                            {{ $post->formatted_published_date }}
                        </span>
                    </li>
                @endif
                @foreach ($post->tags ?? [] as $tag)
                    <li>
                        <span class="marketing-nav-pill-link pointer-events-none">{{ $tag }}</span>
                    </li>
                @endforeach
            </ul>
        </nav>
    </section>

    {{-- Content + IDE sidebar --}}
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_minmax(17rem,22rem)] gap-6 lg:gap-8 items-start">
            <div class="blog-article-surface min-w-0">
                <div class="blog-article-surface__inner px-6 sm:px-8 lg:px-10 py-8 sm:py-10 lg:py-12">
                    <header class="mb-8 sm:mb-10">
                        <h1 class="font-headline-xl-mobile text-headline-xl-mobile md:font-headline-lg md:text-headline-lg text-primary leading-tight">
                            {{ $post->title }}
                        </h1>

                        @if ($post->excerpt)
                            <p class="font-body-lg text-body-lg text-secondary mt-4 max-w-2xl">{{ $post->excerpt }}</p>
                        @endif
                    </header>

                    <div class="blog-article-content font-body-md text-body-md text-on-surface max-w-none">
                        {!! $post->renderedContent() !!}
                    </div>
                </div>
            </div>

            <x-blog.ide-sidebar :posts="$this->relatedPosts" />
        </div>
    </section>
</article>

@push('scripts')
    @vite('resources/js/blogVimCursor.js')
@endpush
