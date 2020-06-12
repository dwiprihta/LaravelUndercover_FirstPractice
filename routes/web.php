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
    return view('welcome');
});

//ROUTE MAHASISWA
Route::get('/cek-object', 'MahasiswaController@cekObject');
Route::get('/insert', 'MahasiswaController@insert');
Route::get('/mass-assignment', 'MahasiswaController@massAssignment');
Route::get('/mass-assignment2', 'MahasiswaController@massAssignment2');
Route::get('/update', 'MahasiswaController@update');
Route::get('/update-where', 'MahasiswaController@updateWhere');
Route::get('/mass-update', 'MahasiswaController@massUpdate');
Route::get('/delete', 'MahasiswaController@delete');
Route::get('/destroy', 'MahasiswaController@destroy');
Route::get('/mass-delete', 'MahasiswaController@massDelete');
Route::get('/all', 'MahasiswaController@all');
Route::get('/all-view', 'MahasiswaController@allView');
Route::get('/get-where', 'MahasiswaController@getWhere');
Route::get('/test-where', 'MahasiswaController@testWhere');Route::get('/first', 'MahasiswaController@first');Route::get('/find', 'MahasiswaController@find');
Route::get('/latest', 'MahasiswaController@latest');Route::get('/limit', 'MahasiswaController@limit');Route::get('/skip-take', 'MahasiswaController@skipTake');Route::get('/soft-delete', 'MahasiswaController@softDelete');Route::get('/with-trashed', 'MahasiswaController@withTrashed');Route::get('/restore', 'MahasiswaController@restore');
Route::get('/force-delete', 'MahasiswaController@forceDelete');
//ROUTE MAHASISWA

Route::get('/{locale?}', 'MahasiswaController@index');
Route::post('/proses-form', 'MahasiswaController@prosesForm');
