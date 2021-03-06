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
    //return 'Hello Classe 60';
    return view('welcome');
});


Route::get('/about-me', function(){
    $name = 'Fabio Pacifici';
    $job = 'Teacher';
    $posts = ['Learn PHP', 'Learn Laravel', 'Learn Js', 'Learn Vuejs'];

    return view('about-me', compact('name', 'job', 'posts'));
});
