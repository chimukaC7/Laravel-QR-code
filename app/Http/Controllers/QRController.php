<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRController extends Controller
{
    public function index()
    {
        //The generate method has a second parameter that will accept a filename and path to save the QrCode.
        //==============================================================================================================
        //Three formats are currently supported; png, eps, and svg. To change the format use the following code:
        QrCode::format('png');  //Will return a png image
        QrCode::format('eps');  //Will return a eps image
        QrCode::format('svg');  //Will return a svg image

        QrCode::generate('Make me into a QrCode!', public_path('qrcodes/qrcode.svg'));

        QrCode::format('png')
            ->merge(public_path('img/Instagram_480px.png'), 0.5, true)
            ->size(500)
            ->errorCorrection('H')
            ->generate('A simple example of QR code!',public_path('qrcodes/qrcode.png'));
        //==============================================================================================================


        return view('QRCode.index');
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
