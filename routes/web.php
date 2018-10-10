<?php

use App\Http\Middleware\AuthMiddleWare;

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

//Main Page
Route::get('/', function () {
       return view('admin-login');     
});


//login form
Route::post('login', 'LoginController@getpost');
//new post
Route::post('add-article', 'NewArticle@post');
//update post
Route::post('update-article', 'NewArticle@update');

//-----------------------------------------------------------------------------------------------
//index routes:
Route::get('/index', 'Index@index');
//to index single post
Route::get('index-single-post/{blogid}', 'Index@singlepost');

Route::get('index-post-archive', 'Index@archivepost');

//session middleware - prevent accessing links without session established
Route::group(['middleware' => 'AuthMiddleWare'], function(){

    //single post from admin list
    Route::get('singlepost/{blogid}', 'Singlepost@single');
    //create a new article
    Route::get('new-article', function() {
        return view('admin-post');
    });
    Route::get('admin-list', 'LoginController@adminlist');

    Route::get('update-article', 'NewArticle@update');

    Route::get('add-article', 'NewArticle@post');
    
    Route::get('login', 'LoginController@adminlist');
    
});






