<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;


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
Route::view('/', 'home.index') -> name('home.index');
//Route::view('/', 'articles.show') -> name('articles.show');


Route::get('/contact', static function () {
    return view('home.contact', []); //rodinio generavimas
})->name('home.contact');


Route::resource('articles', ArticlesController::class);
//Route::get('articles', [ArticlesController::class, 'index'])->name('articles.index');
//Route::get('articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

/*
Route::middleware('auth')->group(function(){
    Route::get('/contact', [HomeController::class, 'contact']) ->name('home.contact');
    Route::get('/calendar', [HomeController::class, 'calendar']) ->name('home.events');
    Route::get('/events', [HomeController::class, 'events']) ->name('home.events');
});
*/

Route::middleware('auth')->group(function () {
    Route::resource('articles.create', ArticlesController::class);
});
