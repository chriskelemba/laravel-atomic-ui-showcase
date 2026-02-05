<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'showcase.overview')->name('showcase.overview');
Route::view('/showcase/buttons', 'showcase.buttons')->name('showcase.buttons');
Route::view('/showcase/inputs', 'showcase.inputs')->name('showcase.inputs');
Route::view('/showcase/forms', 'showcase.forms')->name('showcase.forms');
Route::view('/showcase/navigation', 'showcase.navigation')->name('showcase.navigation');
Route::view('/showcase/data', 'showcase.data')->name('showcase.data');
Route::view('/showcase/overlays', 'showcase.overlays')->name('showcase.overlays');
Route::view('/showcase/feedback', 'showcase.feedback')->name('showcase.feedback');
Route::view('/showcase/lists', 'showcase.lists')->name('showcase.lists');
Route::view('/showcase/sidebar', 'showcase.sidebar')->name('showcase.sidebar');
Route::view('/showcase/utilities', 'showcase.utilities')->name('showcase.utilities');
Route::view('/showcase/display', 'showcase.display')->name('showcase.display');
Route::view('/showcase/visuals', 'showcase.visuals')->name('showcase.visuals');
