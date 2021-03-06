<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Directory</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/all.min.css')}}" rel="stylesheet">

    @yield('styles')
    </head>
    <body style="background-color:#ac740d">
    <main class="container py-5">
        @yield('content')
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
    
    
    @yield('scripts')

    </body>
</html>
