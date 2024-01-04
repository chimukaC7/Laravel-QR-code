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
            "VERSION:3.0",//The version of the vCard specification. In version 4.0, this must come right after the BEGIN property.
            "PHOTO;TYPE=JPEG;VALUE=URI:http://example.com/photo.jpg",//An image or photograph of the individual associated with the vCard. It may point to an external URL or may be embedded in the vCard as a Base64 encoded block of text.
            "N:Doe;John;;Dr;",//A structured representation of the name of the person, place or thing associated with the vCard object. Structure recognizes, in order separated by semicolons: Family Name, Given Name, Additional/Middle Names, Honorific Prefixes, and Honorific Suffixes
            "FN:Dr. John Doe",//The formatted name string associated with the vCard object.
            "BDAY:1990-06-24",//Date of birth of the individual associated with the vCard.
            "NOTE:I am proficient in Tiger-Crane Style, and I am more than proficient in the exquisite art of the Samurai sword.",//Specifies supplemental information or a comment that is associated with the vCard.
            "TITLE:JobTitle",//Specifies the job title, functional position or function of the individual associated with the vCard object within an organization.
            "ROLE:Executive",//The role, occupation, or business category of the vCard object within an organization.
//            "ORG:CompanyName",//The name and optionally the unit(s) of the organization associated with the vCard object. This property is based on the X.520 Organization Name attribute and the X.520 Organization Unit attribute
            "ORG:Google;GMail Team;Spam Detection Squad",
            "LOGO;TYPE=PNG:http://example.com/logo.png",//An image or graphic of the logo of the organization that is associated with the individual to which the vCard belongs. It may point to an external URL or may be embedded in the vCard as a Base64 encoded block of text.
            "URL:http://website.com",//A URL pointing to a website that represents the person in some way.
            "GEO:39.95;-75.1667",//Specifies a latitude and longitude.
            "TEL;HOME;VOICE:+1234567890",
            "TEL;WORK;VOICE:+0987654321",
            "TEL;CELL;VOICE:+0123456789",//The canonical number string for a telephone number for telephony communication with the vCard object.
            "EMAIL;WORK;INTERNET:foo@email.com",
            "ADR;TYPE=home:;;123 Main St.;Springfield;IL;12345;USA",//A structured representation of the physical delivery address for the vCard object.
            "SOURCE:http://johndoe.com/vcard.vcf".//A URL that can be used to get the latest version of this vCard.
            "REV:20121201T134211Z",//A timestamp for the last time the vCard was updated.
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
