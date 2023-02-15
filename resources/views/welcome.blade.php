
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generate a QR code with Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row text-center border mt-2 ml-1 mr-1 py-3 shadow">
            <h1 class="text-primary  font-weight-bold ">Generate BarCode in Laravel </h1>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 p-1">
                <div class="card text-center text-center">
                    <div class="card-header bg-primary text-white">
                     use BarcodeGeneratorHTML()
                    </div>
                    <div class="card-body text-center mx-auto">

                        {!! $generator->getBarcode('2161245259636', $generator::TYPE_CODE_128) !!}
                        2161245259636
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-1">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                      use  BarcodeGeneratorPNG()
                    </div>
                    <div class="card-body">
                        <img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode('2161242259636', $generatorPNG::TYPE_CODE_128)) }}">
                        <br>
                        2161242259636
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>


