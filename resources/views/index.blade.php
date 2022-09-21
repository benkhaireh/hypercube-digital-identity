<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">

    <title>HyperCube - Together, Beyond The Limits</title>
    <meta name="title" content="HyperCube - Together, Beyond The Limits">
    <meta name="description" content="HyperCube, A leading ICT integrator with leading edge technology and a comprehensive portfolio.">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hypercube.dj/">
    <meta property="og:title" content="HyperCube - Together, Beyond The Limits">
    <meta property="og:description" content="HyperCube, A leading ICT integrator with leading edge technology and a comprehensive portfolio.">
    <meta property="og:image" content="">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://hypercube.dj/">
    <meta property="twitter:title" content="HyperCube - Together, Beyond The Limits">
    <meta property="twitter:description" content="HyperCube, A leading ICT integrator with leading edge technology and a comprehensive portfolio.">
    <meta property="twitter:image" content="">

    @vite('resources/js/app.js')
</head>

<body>
    <div id="app"></div>
</body>

</html>