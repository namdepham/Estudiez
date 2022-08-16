<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\ParentController;
use App\Http\Controllers\User\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("user.home");
});

Route::namespace('User')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('user.login');
    Route::get('/register', [HomeController::class, 'showRegisterForm'])->name('user.register');
    Route::post('/register', [HomeController::class, 'register'])->name('register');
    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
    Route::post('/send/feedbacks', [HomeController::class, 'sendFeedBack'])->name('send.feedback')->middleware('auth');

    Route::middleware('auth')->group(function () {
        //Student control
        Route::get('/logout', [HomeController::class, 'logout'])->name('user.logout');
        Route::get('/view/score', [StudentController::class, 'viewScore'])->name('view.score');
        Route::get('/view/score', [StudentController::class, 'viewScore'])->name('view.score');
        Route::get('/view/score', [StudentController::class, 'viewScore'])->name('view.score');
        Route::get('/view/resource', [StudentController::class, 'viewResource'])->name('view.resource');
        Route::get('/view/revision', [StudentController::class, 'viewRevision'])->name('view.revision');

        //Parent control
        Route::get('/search/children', [ParentController::class, 'searchChildren'])->name('search.children');
        Route::post('/search/children', [ParentController::class, 'search'])->name('search');
        Route::get('view/details/{id}', [ParentController::class, 'viewDetail'])->name('view.details');

    });
});

