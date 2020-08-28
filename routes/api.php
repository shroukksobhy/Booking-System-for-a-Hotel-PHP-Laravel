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

Auth::routes();

Route::middleware('auth:api')->get('/', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
});
Route::post('/book', 'ApiController@bookRoom');
Route::get('/booking', 'ApiController@index');

Route::get('/check', 'ApiController@check');
Route::post('/check-availability', 'ApiController@checkAvailability');


// Route::get('/admin/roomPDF', 'RoomController@generatePDF');
Route::resource('/rooms', 'RoomController');
Route::resource('/guests', 'GuestController');