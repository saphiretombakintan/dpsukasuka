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

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/dummy', function () {
    return view('prosess.dummy');
});



Route::get('/dashboard', ["uses"=>"DashboardController@index", "as"=> "dashboard"]);
Route::get('/listkonsumen', ["uses"=>"KonsumenController@index", "as"=> "listkonsumen"]);
Route::post('/search', ["uses"=>"KonsumenController@cari", "as"=> "carikonsumen"]);
Route::get('/listkonsumen/{id}', ["uses"=>"KonsumenController@detail", "as"=> "detailkonsumen"]);
Route::get('/angsuran/{id}', ["uses"=>"KonsumenController@angsuran", "as"=> "angsuran"]);
Route::get('/konsumen', ["uses"=>"KonsumenController@konsumen", "as"=> "konsumen"]);


Route::get('/tagihan', ["uses"=>"TagihanController@index", "as"=> "tagihan"]);
Route::get('tagihan/create/{id}', ["uses"=>"TagihanController@addtagihan", "as"=> "createtagihan"]);
Route::get('/tabel', ["uses"=>"TagihanController@showtabel", "as"=> "tabeltagihan"]);

Route::post('/createtagihan', ["uses"=>"TagihanController@store", "as"=> "createtagihan"]);

route::get('/tabledit', ["uses"=>"TableController@index", "as"=>"tabledit"]);
Route::post('tabledit/action', 'TableController@action')->name('tabledit.action');




