@if (! empty($splineUrl))
    @include('partials.home-hero-spline', ['splineUrl' => $splineUrl])
@else
    @include('partials.home-hero-fallback')
@endif
