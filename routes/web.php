<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
Route::get('articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


//registracija
//Route::resource('register', RegisterController::class);
//Route::get('register', [RegisterController::class, 'register']) ->name('register');
//Route::post('profile', [RegisterController::class, 'profile']) ->name('profile');

//Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
//Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('register', [RegisterController::class, 'register'])->name('register');


/* cia pridesiu kad jei vartotojas neprisijunges arba bando laikinti conference tai va nuveda
Route::middleware('auth')->group(function(){
    Route::get('/contact', [HomeController::class, 'contact']) ->name('home.contact');
   //kai svecias eina i contact, ji nuveda i prisijungima
});
*///crud:
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/articles/create', [ArticlesController::class, 'create'])->name('articles.create');
    Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
    Route::post('/articles', [ArticlesController::class, 'store'])->name('articles.store');
    Route::put('/articles/{article}', [ArticlesController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article}', [ArticlesController::class, 'destroy'])->name('articles.destroy');
});

/*palaikinti
Route::post('/articles/{article}/like', 'ArticleController@likeArticle')->name('articles.like');
Route::delete('/articles/{article}/unlike', 'ArticleController@unlikeArticle')->name('articles.unlike');

*/
//Route::view('/profile', 'home.profile') -> name('home.profile');
/*
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'showProfile'])->name('user.profile');
});

Route::post('/articles/{article}/register', [ArticlesController::class, 'register'])
    ->name('articles.register');
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'showProfile'])->name('user.profile');
    Route::post('/articles/{article}/register', [ArticlesController::class, 'register'])->name('articles.register');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
