<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
       <meta charset="utf-8" /><!-- 
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>DigiPark</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!--     Fonts and icons     -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="{{ URL::to('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        
        <link href="{{ URL::to('public/assets/css/material-kit.css') }}" rel="stylesheet"/>

        <style type="text/css">
       
        @if (Auth::User() && (Auth::User()->profile) && (Auth::User()->profile->avatar_status == 0))
                .user-avatar-nav {
                    background: url({{ Gravatar::get(Auth::user()->email) }}) 50% 50% no-repeat;
                    background-size: auto 100%;
                }
            @endif

        </style>

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        @if (Auth::User() && (Auth::User()->profile) && $theme->link != null && $theme->link != 'null')
            <link rel="stylesheet" type="text/css" href="{{ $theme->link }}">
        @endif

        @yield('head')
</head>
    <body class="signup-page">
        <div class="wrapper">

            @include('partials.nav')
            
            @yield('content')

            @include('partials.footer')
        </div>
        
        @yield('footer_scripts')

    </body>
</html>