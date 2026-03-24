<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuotationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('new-home-page');
})->name('home');

Route::get('/get-a-quote', function () {
    return view('quotations');
})->name('quotations');

Route::post('/quotation', [QuotationController::class, 'store'])->name('quotation.store');

// Locale switcher route: sets the selected locale in session and redirects back
Route::get('/locale/{locale}', function ($locale) {
    $allowed = ['en', 'es'];
    if (in_array($locale, $allowed)) {
        session(['locale' => $locale]);

        // also set a cookie so AppServiceProvider can read it before session middleware runs
        return redirect()->back()->withCookie(cookie()->forever('locale', $locale));
    }

    return redirect()->back();
})->name('locale.switch');

Route::get('/hiring-services', function () {
    return view('hiring_services');
})->name('hiring_services');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/cuanto-cuesta-una-pagina-web', function () {
    app()->setLocale('es');

    return view('guides.show', ['guideKey' => 'cuanto_pagina_web']);
})->name('guide.cuanto_pagina_web');

Route::get('/how-much-does-a-website-cost', function () {
    app()->setLocale('en');

    return view('guides.show', ['guideKey' => 'cuanto_pagina_web']);
})->name('guide.en.cuanto_pagina_web');

Route::get('/cuanto-cuesta-una-aplicacion', function () {
    app()->setLocale('es');

    return view('guides.show', ['guideKey' => 'cuanto_aplicacion']);
})->name('guide.cuanto_aplicacion');

Route::get('/how-much-does-an-app-cost', function () {
    app()->setLocale('en');

    return view('guides.show', ['guideKey' => 'cuanto_aplicacion']);
})->name('guide.en.cuanto_aplicacion');

Route::get('/que-es-una-landing-page', function () {
    app()->setLocale('es');

    return view('guides.show', ['guideKey' => 'que_es_landing']);
})->name('guide.que_es_landing');

Route::get('/what-is-a-landing-page', function () {
    app()->setLocale('en');

    return view('guides.show', ['guideKey' => 'que_es_landing']);
})->name('guide.en.que_es_landing');

Route::get('/cuanto-cuesta-una-landing-page', function () {
    app()->setLocale('es');

    return view('guides.show', ['guideKey' => 'cuanto_landing']);
})->name('guide.cuanto_landing');

Route::get('/how-much-does-a-landing-page-cost', function () {
    app()->setLocale('en');

    return view('guides.show', ['guideKey' => 'cuanto_landing']);
})->name('guide.en.cuanto_landing');

Route::get('/como-hacer-una-landing-page', function () {
    app()->setLocale('es');

    return view('guides.show', ['guideKey' => 'como_landing']);
})->name('guide.como_landing');

Route::get('/how-to-build-a-landing-page', function () {
    app()->setLocale('en');

    return view('guides.show', ['guideKey' => 'como_landing']);
})->name('guide.en.como_landing');

Route::get('/empresa-software-tuxtla-chiapas', function () {
    return view('empresa-software-tuxtla-chiapas');
})->name('landing.software.tuxtla.chiapas');

Route::get('/diseno-paginas-web-tuxtla-chiapas', function () {
    return view('diseno-paginas-web-tuxtla-chiapas');
})->name('landing.webdesign.tuxtla.chiapas');

Route::get('/empresa-software-guadalajara', function () {
    app()->setLocale('es');

    return view('landings.city-software', ['city' => 'gdl']);
})->name('landing.software.guadalajara');

Route::get('/software-company-guadalajara', function () {
    app()->setLocale('en');

    return view('landings.city-software', ['city' => 'gdl']);
})->name('landing.en.software.guadalajara');

Route::get('/empresa-software-monterrey', function () {
    app()->setLocale('es');

    return view('landings.city-software', ['city' => 'mty']);
})->name('landing.software.monterrey');

Route::get('/software-company-monterrey', function () {
    app()->setLocale('en');

    return view('landings.city-software', ['city' => 'mty']);
})->name('landing.en.software.monterrey');

Route::get('/empresa-software-cdmx', function () {
    app()->setLocale('es');

    return view('landings.city-software', ['city' => 'cdmx']);
})->name('landing.software.cdmx');

Route::get('/software-company-mexico-city', function () {
    app()->setLocale('en');

    return view('landings.city-software', ['city' => 'cdmx']);
})->name('landing.en.software.cdmx');

Route::get('/empresa-software-merida', function () {
    app()->setLocale('es');

    return view('landings.city-software', ['city' => 'merida']);
})->name('landing.software.merida');

Route::get('/software-company-merida', function () {
    app()->setLocale('en');

    return view('landings.city-software', ['city' => 'merida']);
})->name('landing.en.software.merida');

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');

Route::get('/login', function () {
    return redirect('/dashboard/login');
})->name('login');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
