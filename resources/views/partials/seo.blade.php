{{-- Minimal, optimized SEO meta tags partial --}}
{!! \App\Services\SeoService::renderMetaTags(isset($seo_overrides) ? $seo_overrides : []) !!}
