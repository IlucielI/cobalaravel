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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

// Route::get('/', 'App\Http\Controllers\PagesController@home');
// // Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
// Route::get('/students', 'App\Http\Controllers\StudentsController@index');
// Route::post('/students', 'App\Http\Controllers\StudentsController@store');
// Route::get('/students/create', 'App\Http\Controllers\StudentsController@create');
// Route::get('/students/{student}', 'App\Http\Controllers\StudentsController@show');
// Route::patch('/students/{student}', 'App\Http\Controllers\StudentsController@update');
// Route::get('/students/{student}/edit', 'App\Http\Controllers\StudentsController@edit');
// Route::delete('/students/{student}', 'App\Http\Controllers\StudentsController@destroy');
Route::resource('students', 'App\Http\Controllers\StudentsController');
