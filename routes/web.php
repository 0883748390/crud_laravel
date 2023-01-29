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

use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('main');
});

// Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');

// Route::get('/tasks', function () {
//     return view('tasks');
// });

// Route::resource('tasks','TaskController');
// Route::resource('tasks','TaskController');
// Route::get('/','HomeController@index' );

Route::get('/index','TaskController@index' );
Route::get('/tasks/create','TaskController@create' );
Route::post('/tasks/store','TaskController@store' );

Route::get('/index/edit/{id}','TaskController@edit' );


Route::put('/tasks/update/{id}','TaskController@update' );

Route::delete('/tasks/destroy/{id}','TaskController@destroy' );
// Route::get('/','PagesController@index' );
// Route::get('/about','PagesController@about' );
// Route::get('/contact','PagesController@contact' );

// Route::get('/','PagesController@services' );