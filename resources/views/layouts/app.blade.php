<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Theme Made By www.sapatech.co.ke-->
        <link rel="shortcut icon" href="{{asset('img/logo.png')}}" />
        <title>SapaTech Solutions Kenya </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@sapatechke">
        <meta name="twitter:title" content="SapaTech Solutions Kenya">
        <meta name="twitter:description" content="Sapatech Solutions Kenya Is An IT and Software Service Vendor...">
        <meta name="twitter:image"
            content="https://lab.sapatech.co.ke/logo.png">
        <meta property="og:image" content="https://lab.sapatech.co.ke/logo.png"
            itemprop="thumbnailUrl">
        <meta property="og:title" content="SapaTech Solutions Kenya">
        <meta property="og:url" content="https://sapatech.co.ke">
        <meta property="og:site_name" content="SapaTech Solutions Kenya">
        <meta property="og:description" content="Everything Is Better With Technology">

        {{-- Web styles, fonts and bootstrap --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

        {{-- custom css styles --}}
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
        {{-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css"> --}}

        {{-- Imported scripts and fonts --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/messages.js') }}"></script>
        
        <script data-ad-client="ca-pub-3343469854361741" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <!--CSS Spinner-->
        <div class="spinner-wrapper">
            <div id="i" class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>


        @include('includes.navbar')
        @include('includes.jumbo_home')
        @include('includes.about')


        <div class="special-heading-inner-border" style="border-color:#000;"></div>
        @include('includes.whoarewe')

        <div class="special-heading-inner-border" style="border-color:#000;"></div>
        @include('includes.services')

        <div class="special-heading-inner-border" style="border-color:#000;"></div>
        @include('includes.portfolio')


        <div class="special-heading-inner-border" style="border-color:#000;"></div>
        @include('includes.contacts')
        

        {{-- @yield('content') --}}


        <div class="special-heading-inner-border" style="border-color:#000;"></div>
        <!-- Image of location/map -->

        @include('includes.footer')
        <script>
            $(document).ready(function() {
                //Preloader
                $(window).on("load", function() {
                preloaderFadeOutTime = 2000;
                function hidePreloader() {
                var preloader = $('.spinner-wrapper');
                preloader.fadeOut(preloaderFadeOutTime);
                }
                hidePreloader();
                });
                console.log(document.getElementById('particles'));
                });
        </script>
        <script src="{{ asset('js/canvas.min.js') }}"></script>
    </body>

</html>