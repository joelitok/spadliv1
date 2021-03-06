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

Route::get('/', 'FrontEndController@home')->name('home');
Route::get('/auth', 'FrontEndController@auth')->name('login');


Route::get('/login', 'FrontEndController@login');
Route::get('/register', 'FrontEndController@register');



Route::post('/login', 'FrontEndController@login');
Route::post('/register', 'FrontEndController@register');


Route::group(['prefix' => 'posts', 'middleware' => 'check-auth'], function() {

    
    Route::get('/save', 'PostController@saveAction');
    Route::get('/cancel', 'PostController@cancelAction');
    
    Route::get('add/{listing?}', 'PostController@add');
    Route::post('add/{listing?}', 'PostController@addAction');


    //autre end point
    Route::get('/sale', 'PostController@addSale');
    Route::post('/sale','PostController@addAction');

    Route::get('/publicity', 'PostController@addPublicity');
    Route::post('/publicity','PostController@addAction');

    Route::get('/event', 'PostController@addEvents');
    Route::post('/event','PostController@addAction');

});



Route::get('/posts/detail/{id}', 'PostController@detail')->name('post-detail');
Route::post('/posts/comment/{id}', 'PostController@postComment')->name('post-comment');

Route::get('posts-by-listing/{slug}', 'FrontEndController@postsByListing')->name('posts-by-listing');
Route::get('posts-by-category/{slug}', 'FrontEndController@postsByCategory')->name('posts-by-category');

//Route::get('/', 'SendEmailController@index');

Route::post('/send', 'SendEmailController@send');
Route::get('/contact', 'SendEmailController@contact');
