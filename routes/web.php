<?php

use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barcode',[\App\Http\Controllers\BarcodeController::class,'index']);
Route::get('/qr-code',[\App\Http\Controllers\QRController::class,'index']);
Route::get('/qrcode-with-image', function () {

    $image = QrCode::format('png')
        ->merge(public_path('img/Instagram_480px.png'), 0.5, true)
        ->size(500)
        ->errorCorrection('H')
        ->generate('A simple example of QR code!');

    return response($image)->header('Content-type','image/png');
});
