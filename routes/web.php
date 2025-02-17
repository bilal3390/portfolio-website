<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/index', function () {
    return view('admin.components.index');
})->name('index');

Route::get('/create', function () {
    return view('admin.components.create');
})->name('create');

Route::get('/edit', function () {
    return view('admin.components.edit');
})->name('edit');

Route::get('/view', function () {
    return view('admin.components.view');
})->name('view');