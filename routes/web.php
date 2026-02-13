<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuotationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('new-home-page');
});

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
});

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

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
