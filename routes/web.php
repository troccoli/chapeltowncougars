<?php

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
    return view('home');
})->name('home');
Route::get('/induction', function () {
    return view('induction');
})->name('induction');
Route::get('/registration', function () {
    return view('registration');
})->name('registration');
Route::get('/volunteering', function () {
    return view('volunteering');
})->name('volunteering');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/who-is-who', function () {
    return view('who-is-who');
})->name('who-is-who');
Route::get('/safeguarding', function () {
    return view('safeguarding');
})->name('safeguarding');
Route::get('/code-of-conduct', function () {
    return view('code-of-conduct');
})->name('code-of-conduct');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/newsletter', function () {
    return view('newsletter');
})->name('newsletter');
