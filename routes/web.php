<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarObatController;


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
    return view('home');
});

Route::get('/obat', function () {
    return view('obat');
});

Route::get('/obat', [DaftarObatController::class, 'index']);











