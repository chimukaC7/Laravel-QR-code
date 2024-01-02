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
    <h1>Gradient  Color</h1>
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
    <p>EyeColor(int $eyeNumber, int $innerRed, int $innerGreen, int $innerBlue, int $outterRed = 0, int $outterGreen = 0, int $outterBlue = 0)</p>
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
    <p>The style can be easily swapped out with square, dot, or round. This will change the blocks within the QrCode. The second parameter will affect the size of the dots or roundness..</p>
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
    <p>The filepath is relative to app base path if $absolute is set to false. Change this variable to true to use absolute paths.</p>
    <p>You should use a high level of error correction when using the merge method to ensure that the QrCode is still readable. We recommend using errorCorrection('H')</p>
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
            <p>Generates a QrCode with an image centered in the middle.  The inserted image takes up 30% of the QrCod</p>


        </div>

        <div class="col-md-3">
            <img src="data:image/png;base64,
                     {!!
                          base64_encode(QrCode::format('png')
                          ->merge(public_path('img/google_480px.png'), 0.3,true)
                          ->size(200)
                          ->generate('Make me into an QrCode!'))
                     !!} ">
            <p>Generates a QrCode with an image centered in the middle.  The inserted image takes up 30% of the QrCode..</p>


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


<div class="container mt-5">
    <div class="row">

        <div class="col-md-6">
            <div class="container mt-4">
                <div class="mb-5">
                    {!!
                        QrCode::size(300)->generate('A basic example of QR code!')
                    !!}
                </div>
                <div class="mb-5">
                    {!!
                        QrCode::size(300)
                         ->backgroundColor(255,55,0)
                         ->generate('A simple example of QR code')
                    !!}
                    <p> Laravel Generate QR Code with Color Example.</p>
                </div>
                <div class="mb-5">
                    {!!
                        QrCode::size(300)
                        ->color(255, 0, 0, 25)
                         ->generate('A simple example of QR code')
                    !!}
                    <p> Red QrCode with 25% transparency .</p>
                </div>
                <div class="mb-5">
                    {!!
                        QrCode::size(300)
                        ->backgroundColor(255, 0, 0, 25)
                         ->generate('A simple example of QR code')
                    !!}
                    <p> Red background QrCode with 25% transparency .</p>
                </div>
                <div class="mb-5">
                    {!!
                        QrCode::size(500)
                         ->email('hardik@itsolutionstuff.com', 'Welcome to ItSolutionStuff.com!', 'This is !.')
                    !!}
                    <p> Laravel Generate Email QR Code Example.</p>
                </div>
                <div class="mb-5">
                    {!!
                        QrCode::size(500)
                        ->phoneNumber('111-222-6666')
                    !!}
                    <p> Laravel Generate Phone QR Code Example.</p>
                    <p> Using a phone number helper generates a QR code that can be scanned and then dials a number.</p>
                </div>
                <div class="mb-5">
                    {!!
                        QrCode::size(500)
                        ->SMS('111-222-6666', 'Body of the message')

                    !!}
                    <p> Laravel Generate SMS QR Code Example.</p>
                </div>

                <div class="visible-print text-center">
                    {!! QrCode::size(100)->generate('Demo') !!}
                    <p>Scan me to return to the original page.</p>
                </div>
                <div class="mb-5">
                    {!! public_path('\img\Instagram_480px.png') !!}
                </div>
                <div class="mb-5">
                    {{
                     SimpleSoftwareIO\QrCode\Facades\QrCode::size(300)
//                     ->format('png')
                             ->merge(public_path('img/Instagram_480px.png'), 0.5, true)
                             ->errorCorrection('H')
                             ->generate('A simple example of QR code!')
                      }}
                    <p>test</p>
                </div>


            </div>
        </div>
        <div class="col-md-6">
            <div class="container mt-4">

                <div class="mb-5">
                    {!!
                        QrCode::size(300)
                        ->style('square')
                        ->generate('square')
                    !!}
                    <p> square.</p>
                </div>


                <div class="mb-5">
                    {!!
                        QrCode::size(300)
                        ->style('dot')
                        ->generate('dot')
                    !!}
                    <p> dot.</p>
                </div>

                <div class="mb-5">
                    {!!
                        QrCode::size(300)
                        ->style('round')
                        ->generate('round')
                    !!}
                    <p> round.</p>
                </div>

            </div>
        </div>
    </div>

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
</body>
</html>
