<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 
         <link  href="/path/to/viewer.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <style>
            body {
                margin: 0;
                font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
                /* background-color: #3b4465; */
            }
        </style>
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
        <script src="/path/to/viewer.js"></script>
    </body>
</html>