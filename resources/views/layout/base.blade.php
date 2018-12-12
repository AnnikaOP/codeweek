<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-js" >
<head>
    @include('layout.analytics')
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">


    <link href="{{asset('css/cookiecuttr.css')}}" media="screen" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('css/ext/cache.css')}}" type="text/css" />


    <!-- Theme stylesheets -->
    @if (Route::getCurrentRoute() && Route::getCurrentRoute()->uri() != 'home' && Route::getCurrentRoute()->uri() != '/')
        <link rel="stylesheet" href="{{asset('css/ext/style.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" />
    @else
        <link rel="stylesheet" href="{{asset('css/ext/home.css')}}" type="text/css" />
    @endif
    <link rel="stylesheet" href="{{asset('css/ext/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('css/ext/responsive.css')}}" type="text/css" />

    @if(App::getLocale() == 'lt' || App::getLocale() == 'me' ||
        App::getLocale() == 'rs' || App::getLocale() == 'lv')
        <style>
            body {
                font-family:'Open Sans', sans-serif;
            }
        </style>
    @endif


    <link rel="stylesheet" href="{{asset('css/ext/colors.css')}}" type="text/css" />



    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{asset('css/custom.css') }}" media="screen" rel="stylesheet" />

    @yield('extra-css')


    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check(),
            'url' => url('/')
        ]) !!};


    </script>

    <!-- Title, keywords, description -->
    <meta name="description" content="October 6 - 21, 2018: a week to celebrate coding in Europe, encouraging citizens to learn more about technology, and connecting communities and organizations who can help you learn coding." />


    <title>Europe Code Week</title>


</head>


<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHDNFHF"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Document Wrapper -->
<div id="app">

    @include('layout.top_navigation')


    @yield("content")

    <flash message="{{ session('flash') }}"></flash>

</div>
@include('layout.footer')


<!-- Scripts -->

<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{ asset('lib/jquery/jquery.js') }}"></script>
<script src=//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js charset=utf-8></script>
<script type="text/javascript" src="{{ asset('js/ext/plugins.js') }}"></script>
@include('scripts.countdown')
<script type="text/javascript" src="{{ asset('js/ext/functions.js') }}"></script>

<script src="https://unpkg.com/vue-select@latest"></script>



@stack('scripts')

@yield('extra-js')





</body>
</html>
