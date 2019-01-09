<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontendController@index');
Route::get('blog', 'FrontendController@index');
Route::get('gallery', 'FrontendController@gallery');
Route::get('gallery/detail/{id}', 'FrontendController@galleryDetail');
Route::get('post/{id}', 'FrontendController@singlePost');
Route::get('post/{id}/{slug}', 'FrontendController@singlePost');

Route::get('admin/blog_tag/{id}', [
    'as' => 'admin_blog_tag', 'uses' => 'BackendController@admin_blog_tag'
]);
