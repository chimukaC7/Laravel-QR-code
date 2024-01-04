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

        $logo = base64_encode(file_get_contents(public_path("qrcodes/qrcode.png")));

        $LOGO = "LOGO;TYPE=PNG;ENCODING=b:{$logo} \n";


        $properties = [
            "BEGIN:VCARD",//All vCards must start with this property.
            "VERSION:3.0",
            "N:Doe;John;;Dr;",//A structured representation of the name of the person, place or thing associated with the vCard object. Structure recognizes, in order separated by semicolons: Family Name, Given Name, Additional/Middle Names, Honorific Prefixes, and Honorific Suffixes
            "FN:Dr. John Doe",//The formatted name string associated with the vCard object.
            "BDAY:19700310",//Date of birth of the individual associated with the vCard.
            "NOTE:I am proficient in Tiger-Crane Style, and I am more than proficient in the exquisite art of the Samurai sword.",//Specifies supplemental information or a comment that is associated with the vCard.
            "TITLE:JobTitle",
//            "ORG:CompanyName",//The name and optionally the unit(s) of the organization associated with the vCard object. This property is based on the X.520 Organization Name attribute and the X.520 Organization Unit attribute
            "ORG:Google;GMail Team;Spam Detection Squad",
            "URL:http://website.com",
            "GEO:39.95;-75.1667",//Specifies a latitude and longitude.
            "TEL;WORK;VOICE:1234567890",
            "TEL;CELL:Mobile",
            "TEL;FAX:",
            "EMAIL;WORK;INTERNET:foo@email.com",
            "ADR;TYPE=home:;;123 Main St.;Springfield;IL;12345;USA",//A structured representation of the physical delivery address for the vCard object.
            "END:VCARD",//All vCards must end with this property.
        ];

        $vcard = implode("\n", $properties);


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
