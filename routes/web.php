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



$navlist = [
    'home' => 'Home',
    'chi_siamo' => 'Chi siamo',
    'contatti' => 'Contatti',
    'blog' => 'Blog'
];

Route::view('/', 'home', ['navList' => $navlist])->name('home');
Route::view('/chi-siamo', 'chi-siamo', ['navList' => $navlist])->name('chi_siamo');
Route::view('/contatti', 'contatti', ['navList' => $navlist])->name('contatti');
Route::view('/blog', 'blog', ['navList' => $navlist])->name('blog');
