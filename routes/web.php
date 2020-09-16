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
    return view('home');
});

Route::get('generate_qr_code', function () {
    return view('home');
});

Route::post('generate_qr_code', 'QRGeneratorController@generateQr')->name('generate.qr');

Route::get('/download/png', 'DownloadController@getPngDownload')->name('download.png');
Route::get('/download/svg', 'DownloadController@getSvgDownload')->name('download.svg');

Route::get('/shop_one_menu', function() {
    return view('shopOneMenu');
});