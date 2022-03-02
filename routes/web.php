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
    '/' => 'Home',
    'chi-siamo' => 'Chi siamo',
    'contatti' => 'Contatti',
    'blog' => 'Blog'
];

Route::view('/', 'home',  ['navList' => $navlist]);
Route::view('chi-siamo', 'chi-siamo', ['navList' => $navlist]);
Route::view('contatti', 'contatti', ['navList' => $navlist]);
Route::view('blog', 'blog', ['navList' => $navlist]);
