<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

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

// Route::get('/home', function () {
//     return view('home', ['name' => 'Achmad Rachmandika']);
// });

// Auth::routes();
// Route::get('/home', function () {
//     echo "aa";
// })->name('home');


Route::get('/home', function(){
    return view('home');
});

Route::prefix('product')->group(function () {
    Route::get('marbel-edu-games', [ProductController::class, 'eduGames']);
    Route::get('marbel-and-friends-kids-games', [ProductController::class, 'kidsGames']);
    Route::get('riri-story-books', [ProductController::class, 'storyBooks']);
    Route::get('kolak-kids-games', [ProductController::class, 'kidsSongs']);
});

Route::get('news/{title}', function(){
    return view('news');
});

Route::prefix('program')->group(function () {
    Route::get('karir', [ProgramController::class, 'karir']);
    Route::get('magang', [ProgramController::class, 'magang']);
    Route::get('kunjungan', [ProgramController::class, 'kunjungan']);
});

Route::resource('contact-us', ContactController::class) -> only([
    'index',
]);

Route::get('/about', function(){
    return view('about');
});