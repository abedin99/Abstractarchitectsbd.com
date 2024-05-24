<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', AboutController::class)->name('about');
Route::get('/contact', ContactController::class)->name('contact');
Route::get('/projects', ProjectController::class)->name('projects');
Route::get('/services', ServiceController::class)->name('services');
Route::resource('/blog', BlogController::class);
