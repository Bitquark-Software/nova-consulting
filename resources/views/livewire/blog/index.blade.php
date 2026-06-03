<main class="w-full">
    <section class="px-margin-mobile pt-stack-sm md:px-margin-desktop md:pt-stack-lg max-w-container-max mx-auto">
        <div class="mb-stack-md flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
            <div>
                <h1 class="font-headline-xl-mobile text-headline-xl-mobile md:font-headline-xl md:text-headline-xl text-primary">
                    {{ __('blog.editorial.hero_title') }}
                </h1>
                <p class="font-body-md text-body-md text-secondary mt-2">
                    {{ __('blog.editorial.hero_subtitle') }}
                </p>
            </div>
        </div>

        @if ($this->featuredPosts->isNotEmpty())
            <div class="masonry-container">
                @foreach ($this->featuredPosts as $post)
                    <x-blog.masonry-card
                        :post="$post"
                        :aspect-class="$masonryAspectClasses[$loop->index % count($masonryAspectClasses)]"
                        :headline-class="$loop->first ? 'font-headline-md text-headline-md' : 'font-headline-sm text-headline-sm'"
                    />
                @endforeach
            </div>
        @else
            <div class="border border-primary bg-surface-container-lowest p-stack-sm text-center">
                <p class="font-body-md text-body-md text-secondary">{{ __('blog.editorial.empty_featured') }}</p>
            </div>
        @endif
    </section>

    @if ($this->archivePosts->isNotEmpty())
        <section id="archives" class="bg-surface-container-low mt-stack-lg border-t border-primary">
            <div class="px-margin-mobile py-stack-lg md:px-margin-desktop max-w-container-max mx-auto">
                <div class="flex justify-between items-end mb-stack-sm">
                    <h2 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-primary">
                        {{ __('blog.editorial.archives_title') }}
                    </h2>
                    <a
                        href="#archives"
                        class="font-label-md text-label-md text-primary pb-2 flex items-center gap-2 cursor-pointer group"
                    >
                        {{ __('blog.editorial.view_all') }}
                        <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-0 border-l border-t border-primary">
                    @foreach ($this->archivePosts as $post)
                        <x-blog.archive-card
                            :post="$post"
                            :hidden-on-mobile="$loop->index >= 8"
                        />
                    @endforeach
                </div>
            </div>
        </section>
    @elseif ($this->posts->isNotEmpty())
        <section class="px-margin-mobile pb-stack-lg md:px-margin-desktop max-w-container-max mx-auto">
            <p class="font-body-md text-body-md text-secondary">{{ __('blog.editorial.no_archives') }}</p>
        </section>
    @endif
</main>
