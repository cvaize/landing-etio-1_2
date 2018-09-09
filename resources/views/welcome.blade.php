<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    @include("layouts.navbar")
    @include("screens.1_main")
    @include("screens.2_1_screen")
    @include("screens.3_1_screen")
    @include("screens.3_screen")
    @include("screens.4_1_screen")
    @include("screens.5_1_screen")
    @include("screens.6_screen")
    @include("screens.7_1_screen")
    <div class="screen--8__pc">
        @include("screens.7_screen")
        @include("screens.8_screen")
    </div>
    @include("screens.9_screen")
    @include("screens.10_screen")
    @include("screens.11_screen")
    @include("screens.12_screen")
    @include("screens.13_screen")
    @include("screens.14_screen")
    @include("screens.15_screen")
    @include("screens.16_screen")
    @include("screens.17_map")
    @include("layouts.footer")
    <script src="/js/app.js"></script>
    </body>
</html>
