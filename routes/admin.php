<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LineController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\ScoreController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use Illuminate\Support\Facades\Route;

Route::namespace('Admin')->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm']);
    Route::get('/login', [LoginController::class, 'showLoginForm']);
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

        //Resources
        Route::get('/resources', [ResourceController::class, 'index'])->name('resource.index');
        Route::get('resources/create', [ResourceController::class, 'create'])->name('resource.create');
        Route::post('resources/create', [ResourceController::class, 'store'])->name('resource.store');
        Route::get('resources/{resource}/edit', [ResourceController::class, 'show'])->name('resource.edit');
        Route::put('resources/{resource}/edit', [ResourceController::class, 'update'])->name('resource.update');
        Route::delete('/{resource}/delete', [ResourceController::class, 'destroy'])->name('resource.destroy');

        //Subjects
        Route::get('/subjects', [SubjectController::class, 'index'])->name('subject.index');
        Route::get('subjects/create', [SubjectController::class, 'create'])->name('subject.create');
        Route::post('subjects/create', [SubjectController::class, 'store'])->name('subject.store');
        Route::get('subjects/{subject}/edit', [SubjectController::class, 'show'])->name('subject.edit');
        Route::put('subjects/{subject}/edit', [SubjectController::class, 'update'])->name('subject.update');
        Route::delete('subjects/{subject}/delete', [SubjectController::class, 'destroy'])->name('subject.destroy');

        //Lines
        Route::get('/lines', [LineController::class, 'index'])->name('line.index');
        Route::get('lines/create', [LineController::class, 'create'])->name('line.create');
        Route::post('lines/create', [LineController::class, 'store'])->name('line.store');
        Route::get('lines/{line}/edit', [LineController::class, 'show'])->name('line.edit');
        Route::put('lines/{line}/edit', [LineController::class, 'update'])->name('line.update');
        Route::delete('lines/{line}/delete', [LineController::class, 'destroy'])->name('line.destroy');

        //Students
        Route::get('/students', [StudentController::class, 'index'])->name('student.index');
        Route::get('students/{student}/edit', [StudentController::class, 'show'])->name('student.edit');
        Route::put('students/{student}/edit', [StudentController::class, 'update'])->name('student.update');
        Route::delete('students/{student}/delete', [StudentController::class, 'destroy'])->name('student.destroy');
        Route::get('students/{student}/edit/mark', [StudentController::class, 'listMark'])->name('list.mark');

        //Score
        Route::get('scores/{score}/edit/mark', [ScoreController::class, 'editMark'])->name('edit.mark');
        Route::put('scores/{score}/update/mark', [ScoreController::class, 'updateMark'])->name('update.mark');

        //Class
        Route::get('/classes', [ClassController::class, 'index'])->name('class.index');
        Route::get('classes/create', [ClassController::class, 'create'])->name('class.create');
        Route::post('classes/create', [ClassController::class, 'store'])->name('class.store');
        Route::delete('classes/{class}/delete', [ClassController::class, 'destroy'])->name('class.destroy');

        //Admins
        Route::get('/admins', [AdminController::class, 'index'])->name('admin.index');
        Route::get('admins/create', [AdminController::class, 'create'])->name('admin.create');
        Route::post('admins/create', [AdminController::class, 'store'])->name('admin.store');
        Route::get('admins/{admin}/edit', [AdminController::class, 'show'])->name('admin.edit');
        Route::put('admins/{admin}/edit', [AdminController::class, 'update'])->name('admin.update');
        Route::delete('admins/{admin}/delete', [AdminController::class, 'destroy'])->name('admin.destroy');

    });
});
