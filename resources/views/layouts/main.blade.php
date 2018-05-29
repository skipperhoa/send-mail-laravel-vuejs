<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta https-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel Vuejs</title>
        <!-- Fonts -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            
        </div>
    </body>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</html>
