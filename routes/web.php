<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
 

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::resource('projects', ProjectController::class)->middleware('auth');
});

//Route::delete('/projects/{project}', 'ProjectController@destroy')->name('projects.destroy');