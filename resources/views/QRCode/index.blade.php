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
                </div>
                <div class="mb-5">
                    {!!
                        QrCode::size(500)
                         ->email('hardik@itsolutionstuff.com', 'Welcome to ItSolutionStuff.com!', 'This is !.')
                    !!}
                </div>
                <div class="mb-5">
                    {!!
                        QrCode::size(500)
                        ->phoneNumber('111-222-6666')
                    !!}
                </div>
                <div class="mb-5">
                    {!!
                        QrCode::size(500)
                        ->SMS('111-222-6666', 'Body of the message')
                    !!}
                </div>

                <div class="visible-print text-center">
                    {!! QrCode::size(100)->generate('Demo') !!}
                    <p>Scan me to return to the original page.</p>
                </div>
                <div class="mb-5">
                    {!!
                     QrCode::size(300)
                     ->format('png')
                             ->merge(public_path('/img/Instagram_480px.png'), 0.5, true)
//                             ->errorCorrection('H')
                             ->generate('A simple example of QR code!')
                      !!}
                </div>


            </div>
        </div>
        <div class="col-md-6">
            <div class="container mt-4">

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
