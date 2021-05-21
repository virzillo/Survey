<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="/main.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
       @auth
         @include('layouts.header')
       @endauth




        <div class="app-main">
            @auth
                @include('layouts.sidebar')
            @endauth

           @yield('content')
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    @include('layouts.script')
    @stack('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
            @if(Session::has('message'))
        var type = "{{ Session::get('alert-type') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
        </script>
</body>

</html>
