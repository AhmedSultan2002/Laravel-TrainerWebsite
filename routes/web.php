<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('BaseRoute');

Route::get('/contact', [ContactController::class, 'showForm'])->middleware(['auth', 'verified'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');


Route::get('/about', function() {
    return view('about');
});
Route::get('/blog', function() {
    return view('blog');
});

Route::get('/render-blog/{blognum}', [CommentController::class, 'render_blog'])->name('render.blog');

Route::post('/post-comment', [CommentController::class, 'post_comment']);

Route::get('/services', [ServicesController::class, 'RenderServices'])->middleware(['auth', 'verified']);

Route::post('/update-database', [ServicesController::class, 'update']);

Route::post('delete-item', [ServicesController::class, 'deleteRecord']);

Route::post('/update-record', [ServicesController::class, 'alterRecord']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
