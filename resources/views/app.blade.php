<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Fonts -->
        <link href="{{asset('assets/css/fonts.css')}}" rel="stylesheet" />
        
        <!-- icons -->
        <link href="{{asset('assets/icons/boxicons.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/icons/materialicons.min.css')}}" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
