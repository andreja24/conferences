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

Route::resource('articles', ArticlesController::class);//shows every article
Route::get('articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('register', [RegisterController::class, 'register'])->name('register');


//crud for admin:
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/articles/create', [ArticlesController::class, 'create'])->name('articles.create');
    Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
    Route::post('/articles', [ArticlesController::class, 'store'])->name('articles.store');
    Route::put('/articles/{article}', [ArticlesController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article}', [ArticlesController::class, 'destroy'])->name('articles.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'showProfile'])->name('user.profile');
    Route::post('/articles/{article}/register', [ArticlesController::class, 'register'])->name('articles.register');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
