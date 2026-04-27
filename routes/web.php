<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\AdminMiddleware;


// Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/aboutus', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{id}', [PageController::class, 'blogDetail'])->name('blogs.detail');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/geographics', [PageController::class, 'geographics'])->name('geographics');
Route::get('/servicesdetail/{slug}', [PageController::class, 'servicesdetail'])->name('servicesdetail');

// Contact Form Submit
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');