<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use JeroenDesloovere\VCard\VCard;
class VcardController extends Controller
{
    public function index()
    {
//       $test =  Vcard::make()
//            ->kind(Kind::INDIVIDUAL)
//            ->gender(Gender::MALE)
//            ->fullName('John Adam Smith')
//            ->name('Smith', 'John', 'Adam')
//            ->email('john.smith@mail.com')
//            ->email('john.smith@company.com', [Email::WORK, Email::INTERNET])
//            ->tel('+1234567890', [Tel::HOME, Tel::VOICE])
//            ->tel('+0987654321', [Tel::WORK, Tel::VOICE])
//            ->tel('+0123456789', [Tel::CELL, Tel::VOICE])
//            ->url('https://johnsmith.com')
//            ->url('https://company.com')
//            ->bday(Carbon::parse('1990-06-24'))
//            ->adr('','','1600 Pennsylvania Ave NW', 'Washington', 'DC', '20500-0003', 'USA')
////            ->photo('data:image/jpeg;base64,'.base64_encode(file_get_contents(__DIR__.'/stubs/photo.jpg')))
//            ->title('V. P. Research and Development')
//            ->role('Executive')
//            ->org('Google', 'GMail Team', 'Spam Detection Squad')
//            ->member('john.smith@company.com', '550e8400-e29b-11d4-a716-446655440000')
//            ->note('Hello world')
//        ;




       //============================================================================================


// define vcard
        $vcard = new VCard();

// define variables
        $lastname = 'Desloovere';
        $firstname = 'Jeroen';
        $additional = '';
        $prefix = '';
        $suffix = '';

// add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);
        $vcard->addBirthday(Carbon::parse('1990-06-24'));

// add work data
        $vcard->addCompany('Google', 'GMail Team', 'Spam Detection Squad');
        $vcard->addJobtitle('Web Developer');
        $vcard->addRole('Data Protection Officer');
        $vcard->addEmail('jeroendesloovere@domain.com','HOME');
        $vcard->addEmail('info@jeroendesloovere.be','WORK');
        $vcard->addPhoneNumber(1234121212, 'PREF;HOME');
        $vcard->addPhoneNumber(123456789, 'WORK');
        $vcard->addPhoneNumber('+0123456789','CELL');
        $vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium','WORK');
        $vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium','HOME');
        $vcard->addLabel('street, worktown, workpostcode Belgium');
        $vcard->addURL('http://www.jeroendesloovere.be');
        $vcard->addNote('Hello world');



//        $vcard->addPhoto(__DIR__ . '/landscape.jpeg');

// return vcard as a string
//return $vcard->getOutput();

// return vcard as a download
        return $vcard->download();

// save vcard on disk
//$vcard->setSavePath('/path/to/directory');
//$vcard->save();



        return view('Vcard.index');
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
