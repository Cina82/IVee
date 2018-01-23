<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8" /><!-- 
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Thumbtack</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!--     Fonts and icons     -->
        
        <!-- CSS Files -->
        <link href="{{ URL::to('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  -->
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- <link href="assets/font/bootstrap.min.css" rel="stylesheet" /> -->

        <style>
        @import url('https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&subset=cyrillic,cyrillic-ext,latin-ext');
        </style> 
    
        <!-- Latest compiled and minified JavaScript -->
        
        <style type="text/css">
            html{
                position: relative;
                min-height: 100%;
            }

        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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
            <!-- <link rel="stylesheet" type="text/css" href="{{ $theme->link }}"> -->
        @endif

        @yield('head')

        @yield('css')
</head>
    <body>
    
    <div class="row row-centered">

            @include('partials.nav')

            @include('partials.header')
            
            @yield('content')
            
            @include('partials.footer')
    </div>
    
            @yield('footer_scripts')

    </body>
</html>