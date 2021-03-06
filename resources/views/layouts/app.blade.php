<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Directory</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
        
    @yield('styles')
    </head>

    
    <body style="background-color:#6e4904">
       <div class=''> @include('pages.nav')</div>
        <main class="container py-5">
        @yield('content')
    </main>
    
    <script src="{{ asset('js/app.js') }}"></script>
    
    
    @yield('scripts')

    <script>
        function goBack() {
            window.history.back();
        }

       
    </script>
    </body>
</html>
