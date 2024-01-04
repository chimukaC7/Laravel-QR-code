<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel 8 Barcode Demo - codeanddeploy.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-5">

    <div class="row">
        <div class="col-md-6">
            <div class="container mt-4">
                A barcode consists of bars and spaces of different widths that can be read with an optical barcode
                scanner. It is a machine-readable representation of numerals and characters. These stripes can be seen
                on the back of the products sold at supermarkets, convenience stores, etc.
            </div>
        </div>
        <div class="col-md-6">
            <div class="container mt-4">
                A QR Code consists of numerals, alphabetical characters, symbols, binary data, control codes and other
                forms of data. These are super-efficient in terms of usage. It can be scanned from any angle. Thanks to
                the three-position detection pattern that helps the scanners for a stable, and rapid reading without
                being affected by the background patterns.
            </div>
        </div>
    </div>

</div>

{{--Size--}}
<div class="container mt-5">
    <h1>Size</h1>
    <p>You can change the size of a QrCode by using the size method</p>
    <div class="row">
        <div class="col-md-3">
            {!! QrCode::size(100)->generate('100'); !!}
        </div>
        <div class="col-md-3">
            {!! QrCode::size(200)->generate('100'); !!}
        </div>
        <div class="col-md-3">
            {!! QrCode::size(300)->generate('100'); !!}
        </div>
        <div class="col-md-3">
            {!! QrCode::size(400)->generate('100'); !!}
        </div>
    </div>
</div>
{{--End of Size--}}

{{--Color--}}
<div class="container mt-5">
    <h1>Color</h1>
    <p>All colors must be expressed in RGBA (Red Green Blue Alpha). You can change the color of a QrCode by using the
        following</p>
    <p>Be careful when changing the color of a QrCode, as some readers have a very difficult time reading QrCodes in
        color</p>
    <div class="row">
        <div class="col-md-3">
            {!! QrCode::size(200)->color(255, 0, 0)->generate('100'); !!}
            <p>Red QrCode</p>
        </div>
        <div class="col-md-3">
            {!! QrCode::size(200)->color(255, 0, 0, 25)->generate('100'); !!}
            <p>Red QrCode with 25% transparency</p>
        </div>

    </div>
</div>
{{--End of Color--}}

{{--Background Color--}}
<div class="container mt-5">
    <h1>Background Color</h1>
    <p>You can change the background color of a QrCode by calling the backgroundColor method</p>
    <p>(int $red, int $green, int $blue, int $alpha = null)</p>
    <div class="row">
        <div class="col-md-3">
            {!! QrCode::size(200)->backgroundColor(255, 0, 0)->generate('100'); !!}
            <p>Red background QrCode</p>
        </div>
        <div class="col-md-3">
            {!! QrCode::size(200)->backgroundColor(255, 0, 0, 25)->generate('100'); !!}
            <p>Red background QrCode with 25% transparency</p>
        </div>

    </div>
</div>
{{--End of Background Color--}}

{{--Gradient  Color--}}
<div class="container mt-5">
    <h1>Gradient Color</h1>
    <p>You can apply a gradient to the QrCode by calling the gradient method.</p>
    <p>Gradient $startRed, $startGreen, $startBlue, $endRed, $endGreen, $endBlue, string $type)</p>
    <div class="row">
        <div class="col-md-3">
            {!! QrCode::size(200)->gradient(255, 0, 0,0,0,0,'vertical')->generate('vertical'); !!}
            <p>vertical</p>
        </div>
        <div class="col-md-3">
            {!! QrCode::size(200)->gradient(255, 0, 0, 25,0,0,'horizontal')->generate('horizontal'); !!}
            <p>horizontal</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->gradient(255, 0, 0,0,0,0,'diagonal')->generate('diagonal'); !!}
            <p>diagonal</p>
        </div>
        <div class="col-md-3">
            {!! QrCode::size(200)->gradient(255, 0, 0, 25,0,0,'inverse_diagonal')->generate('inverse_diagonal'); !!}
            <p>inverse_diagonal</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->gradient(255, 0, 0,0,0,0,'radial')->generate('radial'); !!}
            <p>radial</p>
        </div>

    </div>
</div>
{{--End of Gradient  Color--}}

{{--EyeColor --}}
<div class="container mt-5">
    <h1>EyeColor </h1>
    <p>You may change the eye colors by using the eyeColor method.</p>
    <p>EyeColor(int $eyeNumber, int $innerRed, int $innerGreen, int $innerBlue, int $outterRed = 0, int $outterGreen =
        0, int $outterBlue = 0)</p>
    <div class="row">
        <div class="col-md-3">
            {!! QrCode::size(200)->eyeColor(0, 255, 255, 255, 0, 0, 0)->generate('Changes the eye color of eye `0`'); !!}
            <p>Changes the eye color of eye `0`</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->eyeColor(1, 255, 255, 255, 0, 0, 0)->generate('Changes the eye color of eye `1`'); !!}
            <p>Changes the eye color of eye `1`</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->eyeColor(2, 255, 255, 255, 0, 0, 0)->generate('Changes the eye color of eye `2`'); !!}
            <p>Changes the eye color of eye `2`</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->eyeColor(2, 0, 255 , 0, 0, 0, 0)->generate('Changes the eye color of eye `2`'); !!}
            <p>Changes the eye color of eye `2`</p>
        </div>


    </div>
</div>
{{--End of EyeColor --}}


{{--Style --}}
<div class="container mt-5">
    <h1>Style</h1>
    <p>The style can be easily swapped out with square, dot, or round. This will change the blocks within the QrCode.
        The second parameter will affect the size of the dots or roundness..</p>
    <p>Style (string $style, float $size = 0.5)</p>
    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(200)->style('square')->generate('square'); !!}
            <p>vertical</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->style('dot')->generate('dot'); !!}
            <p>dot</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->style('round')->generate('dot'); !!}
            <p>round</p>
        </div>


    </div>
</div>
{{--End of Style --}}

{{--Eye Style --}}
<div class="container mt-5">
    <h1>Eye Style</h1>
    <p>The eye within the QrCode supports two different styles, square and circle</p>
    <p>Eye Style (string $style)</p>
    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(200)->eye('square')->generate('square'); !!}
            <p>square</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->eye('circle')->generate('circle'); !!}
            <p>circle</p>
        </div>


    </div>
</div>
{{--End of Eye Style --}}

{{--Merge  --}}
<div class="container mt-5">
    <h1>Merge </h1>
    <p>The merge method merges an image over a QrCode. This is commonly used to placed logos within a QrCode.</p>
    <p>Merge (string $filepath, float $percentage = .2, bool $absolute = false)</p>
    <p>The merge method only supports PNG at this time.</p>
    <p>The filepath is relative to app base path if $absolute is set to false. Change this variable to true to use
        absolute paths.</p>
    <p>You should use a high level of error correction when using the merge method to ensure that the QrCode is still
        readable. We recommend using errorCorrection('H')</p>
    <div class="row">

        <div class="col-md-3">
            <img src="data:image/png;base64,
                     {!!
                          base64_encode(QrCode::format('png')
                          ->merge(public_path('img/Instagram_480px.png'),.1,true)
                          ->size(200)
                          ->generate('Make me into an QrCode!'))
                     !!} ">

            <p>Generates a QrCode with an image centered in the middle.</p>


        </div>

        <div class="col-md-3">
            <img src="data:image/png;base64,
                     {!!
                          base64_encode(QrCode::format('png')
                          ->merge(public_path('img/facebook_480px.png'), 0.3, true)
                          ->size(200)
                          ->generate('Make me into an QrCode!'))
                     !!} ">
            <p>Generates a QrCode with an image centered in the middle. The inserted image takes up 30% of the
                QrCode</p>


        </div>

        <div class="col-md-3">
            <img src="data:image/png;base64,
                     {!!
                          base64_encode(QrCode::format('png')
                          ->merge(public_path('img/google_480px.png'), 0.3,true)
                          ->size(200)
                          ->generate('Make me into an QrCode!'))
                     !!} ">
            <p>Generates a QrCode with an image centered in the middle. The inserted image takes up 30% of the
                QrCode</p>


        </div>

        <div class="col-md-3">
            <img src="data:image/png;base64,
                     {!!
                          base64_encode(QrCode::format('png')
                          ->merge(public_path('img/whatsapp_480px.png'), 0.5, true)
                          ->size(200)
                          ->errorCorrection('H')
                          ->generate('Make me into an QrCode!'))
                     !!} ">
            <p></p>
            <p>You can display a PNG image without saving the file by providing a raw string and encoding with
                base64_encode.</p>


        </div>


    </div>
</div>
{{--End of Merge  --}}

{{--Helper --}}
<div class="container mt-5">
    <h1>Helper</h1>
    <p>Helpers are an easy way to create QrCodes that cause a reader to perform a certain action when scanned.</p>
</div>
{{--End of Helper --}}

{{--E-Mail --}}
<div class="container mt-5">
    <h1>E-Mail</h1>
    <p>This helper generates an e-mail qrcode that is able to fill in the e-mail address, subject, and body:</p>
    <p>QrCode::email($to, $subject, $body)</p>
    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(200)->email('foo@bar.com'); !!}
            <p>Fills in the to address</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->email('foo@bar.com', 'This is the subject.', 'This is the message body.'); !!}
            <p>Fills in the to address, subject, and body of an e-mail.</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->email(null, 'This is the subject.', 'This is the message body.'); !!}
            <p>Fills in just the subject and body of an e-mail.</p>
        </div>

    </div>
</div>
{{--End of E-Mail --}}

{{--Geo --}}
<div class="container mt-5">
    <h1>Geo</h1>
    <p>This helper generates a latitude and longitude that a phone can read and opens the location in Google Maps or
        similar app.:</p>
    <p>QrCode::geo($latitude, $longitude);</p>
    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(200)->geo(37.822214, -122.481769); !!}
            {{--            <p>Fills in the to address</p>--}}
        </div>


    </div>
</div>
{{--End of E-Geo --}}

{{--Phone Number --}}
<div class="container mt-5">
    <h1>Phone Number</h1>
    <p>This helper generates a QrCode that can be scanned and then dials a number</p>
    <p>QrCode::phoneNumber($phoneNumber);</p>
    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(200)->phoneNumber('555-555-5555'); !!}
            {{--            <p>Fills in the to address</p>--}}
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->phoneNumber('1-800-Laravel'); !!}
            {{--            <p>Fills in the to address</p>--}}
        </div>


    </div>
</div>
{{--End of Phone Number --}}

{{--SMS (Text Messages) --}}
<div class="container mt-5">
    <h1>SMS (Text Messages)</h1>
    <p>This helper makes SMS messages that can be prefilled with the send to address and body of the message:</p>
    <p>QrCode::SMS($phoneNumber, $message);</p>
    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(200)->SMS('555-555-5555'); !!}
            <p>Creates a text message with the number filled in</p>
        </div>


        <div class="col-md-3">
            {!! QrCode::size(200)->SMS('555-555-5555', 'Body of the message'); !!}
            <p>Creates a text message with the number and message filled in</p>
        </div>


    </div>
</div>
{{--End of SMS (Text Messages) --}}

{{--WiFi --}}
<div class="container mt-5">
    <h1>WiFi</h1>
    <p>This helpers makes scannable QrCodes that can connect a phone to a WiFi network::</p>
    <p>WiFi scanning is not currently supported on Apple Products.</p>
    <div class="row">

        <div class="col-md-3">
            {!! QrCode::wiFi([
                'encryption' => 'WPA/WEP',
                'ssid' => 'SSID of the network',
                'password' => 'Password of the network',
                'hidden' => 'Whether the network is a hidden SSID or not.'
                ]); !!}
            <p></p>
        </div>


        <div class="col-md-3">
            {!! QrCode::wiFi([
                    'ssid' => 'Network Name',
                ]); !!}
            <p>Connects to an open WiFi network</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::wiFi([
                'ssid' => 'Network Name',
                'hidden' => 'true'
            ]); !!}
            <p>Connects to an open, hidden WiFi network.</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::wiFi([
                    'ssid' => 'Network Name',
                    'encryption' => 'WPA',
                    'password' => 'myPassword'
                ]); !!}
            <p>Connects to a secured WiFi network.</p>
        </div>


    </div>
</div>
{{--End of WiFi --}}

{{--Common QrCode Usage --}}
<div class="container mt-5">
    <h1>Common QrCode Usage</h1>
    <p>You can use a prefix found in the table below inside the generate section to create a QrCode to store more
        advanced information::</p>
    <p>QrCode::generate('http://www.simplesoftware.io');</p>
    <div class="row">

        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th id="usage">Usage</th>
                    <th id="prefix">Prefix</th>
                    <th id="example">Example</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Website URL</td>
                    <td>http://</td>
                    <td><a href="http://www.simplesoftware.io">http://www.simplesoftware.io</a></td>
                </tr>
                <tr>
                    <td>Secured URL</td>
                    <td>https://</td>
                    <td><a href="https://www.simplesoftware.io">https://www.simplesoftware.io</a></td>
                </tr>
                <tr>
                    <td>E-mail Address</td>
                    <td>mailto:</td>
                    <td><a href="mailto:support@simplesoftware.io">support@simplesoftware.io</a></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>tel:</td>
                    <td>tel:555-555-5555</td>
                </tr>
                <tr>
                    <td>Text (SMS)</td>
                    <td>sms:</td>
                    <td>sms:555-555-5555</td>
                </tr>
                <tr>
                    <td>Text (SMS) With Pretyped Message</td>
                    <td>sms:</td>
                    <td>sms::I am a pretyped message</td>
                </tr>
                <tr>
                    <td>Text (SMS) With Pretyped Message and Number</td>
                    <td>sms:</td>
                    <td>sms:555-555-5555:I am a pretyped message</td>
                </tr>
                <tr>
                    <td>Geo Address</td>
                    <td>geo:</td>
                    <td>geo:-78.400364,-85.916993</td>
                </tr>
                <tr>
                    <td>MeCard</td>
                    <td>mecard:</td>
                    <td>MECARD:Simple, Software;Some Address, Somewhere,
                        20430;TEL:555-555-5555;EMAIL:support@simplesoftware.io;
                    </td>
                </tr>
                <tr>
                    <td>VCard</td>
                    <td>BEGIN:VCARD</td>
                    <td><a href="https://en.wikipedia.org/wiki/VCard">See Examples</a></td>
                </tr>
                <tr>
                    <td>Wifi</td>
                    <td>wifi:</td>
                    <td>wifi:WEP/WPA;SSID;PSK;Hidden(True/False)</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(200)->generate('http://www.simplesoftware.io'); !!}
            <p>Website URL</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->generate('https://www.simplesoftware.io'); !!}
            <p>Secured URL</p>
        </div>


    </div>

    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(200)->generate('mailto:support@simplesoftware.io'); !!}
            <p>E-mail Address</p>
        </div>

    </div>

    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(200)->generate('tel:555-555-5555'); !!}
            <p>Phone Number</p>
        </div>

    </div>

    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(200)->generate('sms:555-555-5555'); !!}
            <p>Text (SMS)</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->generate('sms::I am a pretyped message'); !!}
            <p>Text (SMS) With Pretyped Message</p>
        </div>

        <div class="col-md-3">
            {!! QrCode::size(200)->generate('sms:555-555-5555:I am a pretyped message'); !!}
            <p>Text (SMS) With Pretyped Message and Number</p>
        </div>

    </div>

    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(200)->generate('geo:-78.400364,-85.916993'); !!}
            <p>Geo Address</p>
        </div>

    </div>

    <div class="row">

        <div class="col-md-3">
            {!! QrCode::size(100)->generate('MECARD:Simple, Software;Some Address, Somewhere, 20430;TEL:555-555-5555;EMAIL:support@simplesoftware.io;'); !!}
            <p>MeCard</p>
        </div>

    </div>

    <div class="row">

        <div class="col-md-3">
            {!!
                QrCode::size(300)->generate('BEGIN:VCARD
                 VERSION:4.0
                 FN:Simon Perreault
                 N:Perreault;Simon;;;ing. jr,M.Sc.
                 BDAY:--0203
                 GENDER:M
                 EMAIL;TYPE=work:simon.perreault@viagenie.ca
                END:VCARD');
            !!}
            <p>VCard v4</p>
        </div>

    </div>

    <div class="row">

        <div class="col-md-3">
            {!!
                QrCode::size(300)->generate($vcard);
            !!}
            <p>VCard v3</p>
        </div>

    </div>

    <div class="row">

        {{ base64_encode(file_get_contents(public_path('qrcodes/qrcode.png')))}}

        <div class="col-md-3">
            {{
                QrCode::size(200)->generate("
                BEGIN:VCARD
                VERSION:3.0
                LOGO;TYPE=PNG:http://example.com/logo.png
                N:Lastname;Firstname
                FN:Firstname Lastname
                BDAY:19700310
                ORG:CompanyName
                TITLE:JobTitle
                ADR:;;123 Sesame St;SomeCity;CA;12345;USA
                GEO:39.95;-75.1667
                TEL;WORK;VOICE:1234567890
                TEL;CELL:Mobile
                TEL;FAX:
                EMAIL;WORK;INTERNET:foo@email.com
                URL:https://website.com
                END:VCARD
                ")
            }}
            <p>VCard version 3</p>
        </div>

    </div>
</div>
{{--End of Common QrCode Usage --}}

</body>
</html>
