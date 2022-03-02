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
$params = [
    'navList' => [
        'home' => 'Home',
        'chi_siamo' => 'Chi siamo',
        'contatti' => 'Contatti',
        'blog' => 'Blog'
    ]
];

Route::view('/', 'home',$params)->name('home');
Route::view('/chi-siamo', 'chi-siamo', $params)->name('chi_siamo');
Route::view('/contatti', 'contatti', $params)->name('contatti');
Route::view('/blog', 'blog', $params)->name('blog');
