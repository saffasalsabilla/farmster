<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();


// Route::group(['middleware' => 'auth'], function(){

// });
Route::get('/', 'BlogController@index')->middleware(['auth', 'isAdmin']);;
// Route::get('/content-blog', function(){
//     return view('blog.content_blog');
// });

Route::get('/content_blog/{slug}', 'BlogController@content_blog')->name('blog.content');
Route::get('/list_blog', 'BlogController@list')->name('blog.list');
Route::get('/list_category{category}', 'BlogController@list_category')->name('blog.category');
Route::get('/search', 'BlogController@search')->name('blog.search');
Route::get('/about', 'BlogController@about')->name('blog.about');
Route::get('/contact', 'BlogController@contact')->name('blog.contact');

Route::get('/gmaps', 'BlogController@gmaps')->name('blog.gmaps');

Route::get('/sapi', function () {
    return view('headerblog.sapi');
});
Route::get('/kambing', function () {
    return view('headerblog.kambing');
});
Route::get('/ayam', function () {
    return view('headerblog.ayam');
});



Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category', 'CategoryController');
    Route::resource('/tag', 'TagController');
    Route::get('/post/show_delete', 'PostController@show_delete')->name('post.show_delete');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::delete('/post/deleted/{id}', 'PostController@deleted')->name('post.deleted');
    Route::resource('/post', 'PostController');
    Route::resource('/user', 'UserController');
    Route::get('/post', 'PdfController@pdf')->name('print');
});



// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/landing', function () {
//     return view('landing');
// });
