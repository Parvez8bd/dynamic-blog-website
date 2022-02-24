<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }} {{ ' | ' . config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{ asset('assets/img/small-logos/logo-asana.svg') }}" type="image/png" sizes="16x16">


        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/material-dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nucleo-svg.css') }}">
        <!-- style stack -->
        @stack('style')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
{{--        <script src="{{ asset('assets/js/material-dashboard.js') }}" defer></script>--}}
    <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('assets/js/material-dashboard.min.js') }}"></script>
        <script src="{{ asset('assets/js/material-dashboard.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
{{--        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>--}}
        <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
{{--            <header class="bg-white shadow">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header }}--}}
{{--                </div>--}}
{{--            </header>--}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <!-- script stack -->
        @stack('script')
    </body>
</html>
