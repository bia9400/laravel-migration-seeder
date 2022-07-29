<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni</title>
</head>

<body>

    <h1>TRENI DATA ODIERNA</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                Azienda:  {{ $train['Azienda'] }} <br>
                StazioneDiPartenza:   {{ $train['StazioneDiPartenza'] }} <br>
                StazioneDiArrivo:   {{ $train['StazioneDiArrivo'] }} <br>
                OrarioPartenza:   {{ $train['OrarioDiPartenza'] }} <br>



            </li>
        @endforeach
    </ul>
</body>

</html>
