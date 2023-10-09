<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/careers', function () {
    return view('Careers');
});
Route::get('/contact-us', function () {
    return view('Contact-Us');
});

Route::get('/research-blog', [BlogPostController::class, 'index']);

// Route::get('/research-blog', function () {
//     return view('Research-Blog');
// });
Route::get('/product', function () {
    return view('Product');
});
Route::get('/company', function () {
    return view('Company');
});
// Route::get('/posts', function () {
//     return view('posts');
// });

Route::get('/contact-us', [ContactController::class, 'showContactForm']);
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');

Route::get('/posts/{id}', [BlogPostController::class, 'readMorePost'])->name('posts.readMore');

Route::post('/login', 'AuthController@login')->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/store-post', [BlogPostController::class,'store'])->name('store-post');
    // Team Admin Routes

    Route::get('create-admin', [RegisteredUserController::class, 'create'])->name('admin.create');
    Route::post('register-admin', [RegisteredUserController::class, 'store'])->name('admin.store');

});

require __DIR__.'/auth.php';
