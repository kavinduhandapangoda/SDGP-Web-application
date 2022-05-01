<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontendcontroller;
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
    return view('dashboard');
});

Route::get('/report','Frontendcontroller@reportView');
Route::get('/map','Frontendcontroller@map');
Route::get('/tableView','Frontendcontroller@tableView');
Route::get('/reportLog/{location}/{disease}','Frontendcontroller@reportLog');
Route::get('/mapViewSelected/{data}','Frontendcontroller@tableViewSelected')->name('mapViewSelected');
Route::get('/reportViewSelected/{data}','Frontendcontroller@reportViewSelected')->name('reportViewSelected');