@extends('layouts.marketing')

@section('nav_ga_section', 'nav-coming-soon')

@section('content')
    <section class="relative min-h-[70vh] flex flex-col items-center justify-center px-4 pt-28 sm:pt-32 pb-20">
        <div class="max-w-3xl mx-auto text-center space-y-8">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-gray-200 shadow-sm">
                <div class="h-2 w-2 rounded-full bg-black animate-pulse"></div>
                <span class="text-sm text-gray-600 font-medium">Status: en desarrollo</span>
            </div>

            <div class="space-y-4">
                <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold tracking-tight text-black leading-[1.1]">
                    while(true) {
                    <span class="block text-gray-500"> building…</span>
                    <span class="block"> }</span>
                </h1>
                <p class="text-xl sm:text-2xl text-gray-600 font-light">
                    Estamos compilando algo increíble
                </p>
                <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Nuestros desarrolladores están cafeinados al máximo
                    <span class="whitespace-nowrap">(Promise: resolvemos más rápido que un console.log)</span>
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4">
                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
                    <div class="text-3xl mb-2" aria-hidden="true">🚀</div>
                    <p class="text-sm text-gray-600">
                        Bugs eliminados: <span class="font-semibold text-black">∞ − 1</span>
                    </p>
                </div>
                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
                    <div class="text-3xl mb-2" aria-hidden="true">☕</div>
                    <p class="text-sm text-gray-600">
                        Cafés consumidos: <span class="font-semibold text-black">Error: overflow</span>
                    </p>
                </div>
                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm sm:col-span-1">
                    <div class="text-3xl mb-2 font-mono" aria-hidden="true">&lt;/&gt;</div>
                    <p class="text-sm text-gray-600">
                        Líneas de código: <span class="font-semibold text-black">NaN (pero muchas)</span>
                    </p>
                </div>
            </div>

            <p class="text-sm text-gray-500 italic pt-4 max-w-xl mx-auto leading-relaxed">
                “Any fool can write code that a computer can understand. Good programmers write code that humans can understand.”
                <span class="block not-italic text-xs text-gray-400 mt-2">— Martin Fowler</span>
            </p>

            <div class="pt-4">
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-black text-white font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all">
                    Volver al inicio
                </a>
            </div>
        </div>
    </section>
@endsection
