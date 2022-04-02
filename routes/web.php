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

Route::get('/c', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/UI', function () {
//     return view('UI_Scan_Logs_view');
// });

Route::get('/ui01','Frontendcontroller@indexUI01');
Route::get('/ui02','Frontendcontroller@indexUI02');
Route::get('/map','Frontendcontroller@map');
Route::get('/ui04','Frontendcontroller@indexUI04');
Route::get('/ui05','Frontendcontroller@indexUI05');

Route::get('/tableView','Frontendcontroller@tableView');

Route::get('/d', function () {
    return 'welcome to dashboard!';
});