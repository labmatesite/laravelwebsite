<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'Home@index');
Route::get('/search', 'Home@search');
Route::get('/contact-us', 'Home@contact_us');
Route::get('/about-us', 'Home@about_us');
Route::get('/login', 'Home@login');
Route::get('/register', 'Home@register');
Route::get('/catalogs/{sku?}', 'Home@download_catalogs');
Route::get('/compare', 'Home@compare');
Route::get('{category?}', 'Home@routes');
Route::get('{category?}/{sub_cat?}', 'Home@routes');
Route::get('{category?}/{sub_category?}/{child_category?}', 'Home@routes');
Route::get('{category?}/{sub_category?}/{child_category?}/{sku?}', 'Home@routes');
