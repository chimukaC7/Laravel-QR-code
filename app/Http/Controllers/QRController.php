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

//        QrCode::generate('Make me into a QrCode!', public_path('qrcodes/qrcode.svg'));

//        QrCode::format('png')
//            ->merge(public_path('img/Instagram_480px.png'), 0.5, true)
//            ->size(500)
//            ->errorCorrection('H')//The more error correction used; the bigger the QrCode becomes and the less data it can store
//            //    L	7% of codewords can be restored.
//            //    M	15% of codewords can be restored.
//            //    Q	25% of codewords can be restored.
//            //    H	30% of codewords can be restored.
//            ->generate('A simple example of QR code!', public_path('qrcodes/qrcode.png'));
        //==============================================================================================================


        $BEGIN = "BEGIN:VCARD \n";
        $VERSION = "VERSION:3.0 \n";
        $N = "N:Lastname;Firstname \n";
        $FN = "FN:Firstname Lastname \n";
        $TITLE = "TITLE:JobTitle \n";
        $ORG = "ORG:CompanyName \n";
        $URL = "URL:http://website.com \n";
        $TEL_WORK = "TEL;WORK;VOICE:1234567890 \n";
        $TEL_CELL = "TEL;CELL:Mobile \n";
        $TEL_FAX = "TEL;FAX: \n";
        $EMAIL_WORK = "EMAIL;WORK;INTERNET:foo@email.com \n";
        $ADR = "ADR:;;123 Sesame St;SomeCity;CA;12345;USA \n";
        $END = "END:VCARD";

        $vcard = $BEGIN . $VERSION . $N . $FN . $TITLE . $ORG . $URL . $TEL_WORK . $TEL_CELL . $TEL_FAX . $EMAIL_WORK . $ADR . $END;

        return view('QRCode.index', compact('vcard'));
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
