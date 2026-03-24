@php
    $g = trans('guides.' . $guideKey);
    $paths = config('guides.paths.' . $guideKey);
    $loc = app()->getLocale();
    $canonical = url($paths[$loc]);
    $htmlLang = $loc === 'en' ? 'en' : 'es-MX';

    $relatedOut = [];
    foreach ($g['related'] ?? [] as $item) {
        if (isset($item['guide'])) {
            $relatedOut[$item['label']] = url(config('guides.paths.' . $item['guide'] . '.' . $loc));
        } else {
            $relatedOut[$item['label']] = url($item['path']);
        }
    }

    $seo_overrides = [
        'title' => $g['seo']['title'],
        'description' => $g['seo']['description'],
        'keywords' => $g['seo']['keywords'],
        'og' => [
            'title' => $g['seo']['og_title'],
            'description' => $g['seo']['og_description'],
            'type' => 'article',
            'url' => $canonical,
            'image' => asset('images/og-default.png'),
        ],
        'hreflang' => [
            'es' => url($paths['es']),
            'en' => url($paths['en']),
        ],
    ];

    $articleJsonLd = [
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $g['headline'],
        'author' => ['@type' => 'Organization', 'name' => 'Nova Consulting'],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'Nova Consulting',
            'logo' => ['@type' => 'ImageObject', 'url' => asset('images/Web_inverted.svg')],
        ],
        'datePublished' => '2026-03-24',
        'dateModified' => '2026-03-24',
        'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $canonical],
        'description' => $g['seo']['description'],
    ];
@endphp
@extends('layouts.marketing')

@section('nav_ga_section', config('guides.nav_ga.' . $guideKey))

@section('content')
    @include('guides.partials.shell', [
        'h1' => $g['h1'],
        'lede' => $g['lede'] ?? [],
        'sections' => $g['sections'] ?? [],
        'faqs' => $g['faqs'] ?? [],
        'related' => $relatedOut,
        'leadSource' => $g['lead_source'] ?? 'guide',
        'articleJsonLd' => $articleJsonLd,
    ])
@endsection
