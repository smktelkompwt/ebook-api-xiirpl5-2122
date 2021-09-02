<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/json', function () {
    // VERSI 1
    // return [
    //     "status"=>"200",
    //     "message" => "sukses"
    // ];
    // VERSI 2
    $data = [
        "status" => "200",
        "message" => "sukses versi 2"
    ];

    return $data;
});

Route::post('/json', function () {
    // VERSI 3
    $data = [
        "status" => "200",
        "message" => "sukses versi 3 - post"
    ];

    return $data;
});

// Route::post('/profil', 'NamaController@namaFungsi');
Route::post('/profil', 'App\Http\Controllers\ProfileController@index');

// Route::get('nama', 'App\Http\Controllers\NamaFullController@index');
// Route::post('nama', 'App\Http\Controllers\NamaFullController@store');
// Route::get('nama/{id}', 'App\Http\Controllers\NamaFullController@show');
// Route::put('nama/{id}', 'App\Http\Controllers\NamaFullController@update');
// Route::delete('nama/{id}', 'App\Http\Controllers\NamaFullController@destroy');

Route::resource('nama','App\Http\Controllers\NamaFullController')->except('create','edit');

Route::resource('wongtuas', 'App\Http\Controllers\ParentController');


