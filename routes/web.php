<?php

use BaconQrCode\Encoder\QrCode;
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

Route::get('shop_one_qr', function () {
    \QrCode::size(500)
            ->format('png')
            ->generate('http://localhost:8000/shop_one_menu', public_path('images/qrcode.png'));
return view('qrCode');
});

Route::get('shop_one_menu', function() {
    return view('shopOneMenu');
});