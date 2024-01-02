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
                <div class="mb-5">{!! DNS2D::getBarcodeHTML("$productCode", 'QRCODE') !!}</div>
                <div class="mb-5">{!! DNS2D::getBarcodeSVG('4445645656', 'QRCODE') !!}</div>
                <div class="mb-5">{!! DNS2D::getBarcodePNGPath('4445645656', 'PDF417')  !!}</div>
                <div class="mb-5">{!!  DNS2D::getBarcodeHTML('4445645656', 'QRCODE',10,10,'blue', true);  !!}</div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="container mt-4">
                <div class="mb-5">{!! DNS2D::getBarcodeHTML("$productCode", 'QRCODE') !!}</div>
                <div class="mb-5">{!! DNS2D::getBarcodeHTML("$productCode", 'DATAMATRIX') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'C39') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'C39+') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'C39E') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'C39E+') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'C93') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'S25') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'S25+') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'I25') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'I25+') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'C128') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'C128A') !!}</div>
                <div class="mb-5">{!! DNS1D::getBarcodeHTML("$productCode", 'C128B') !!}</div>
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
