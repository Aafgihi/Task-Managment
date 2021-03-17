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


Route::get('/login', 'UserAdminController@SighnIn' );

Route::get('/index', 'ProjectController@index' );
Route::get('/control', 'ProjectController@control' );

Route::get('/project/{project}', 'ProjectController@show' );
Route::post('/project/{user}', 'ProjectController@store' );
Route::get('/deleteProject/{project}', 'ProjectController@delete' );
Route::get('/updateProject/{project}', 'ProjectController@updatePage' );
Route::get('/afterupdateProject/{project}', 'ProjectController@update' );
Route::get('/create', 'ProjectController@create' );


Route::post('/project/{project}/task', 'TaskController@store' );
Route::get('/deleteTask/{task}', 'TaskController@delete' );
Route::get('/afterupdateTask/{task}', 'TaskController@update' );
Route::get('/updateTask/{task}', 'TaskController@updateTask' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
