<!DOCTYPE html>
@include('elements.base')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', setting('description', ''))">
    <meta name="theme-color" content="#3490DC">
    <meta name="author" content="Azuriom">

    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="@yield('type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ favicon() }}">
    <meta property="og:description" content="@yield('description', setting('description', ''))">
    <meta property="og:site_name" content="{{ site_name() }}">
    @stack('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ site_name() }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ favicon() }}">    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('vendor/axios/axios.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <script src="{{theme_asset("js/aos.js")}}"></script>


    <!-- Page level scripts -->
    @stack('scripts')

    <!-- Fonts -->
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('css/aos.css') }}" rel="stylesheet">
    @stack('styles')

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        a {
            text-decoration: none;
        }

        #app {
            flex-shrink: 0;
        }

        .content {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
<div id="app">
    <header>
        @include('elements.navbar')
    </header>
    @yield('app')
</div>

<div class="position-fixed h-100 w-100" id="particles-js"></div >
@if(theme_config('toTop.box.toggle'))
    <a href="#app" class="mt-2 opacity-25 position-fixed end-0 bottom-0 translate-middle">
        <img class="wallNav" src="{{site_logo()}}" alt="">
    </a>
@endif

@if(theme_config('social.box.toggle'))
<div class="d-flex flex-column position-fixed social_link {{ theme_config('social.box.pos') ? "end-0 " : "start-0" }}">
    <ul class="d-flex flex-column justify-content-between p-3">
        @foreach(social_links() as $link)
            <a href="{{ $link->value }}" title="{{ $link->title }}" target="_blank" rel="noopener noreferrer"
               data-bs-toggle="tooltip"
               class="d-inline-block mx-1 p-2 rounded-circle">
                <i class="{{ $link->icon }}"></i>
            </a>
        @endforeach
    </ul>
</div>
@endif


<footer style="background: linear-gradient(0deg, rgba(51,54,41,1) 10%, rgba(0,219,255,0) 100%);"  class="text-center text-secondary-emphasis bg-myText mt-auto d-flex align-items-center flex-column w-100 mt-3">
    <div class="d-flex">
        <img class="wallNav" src="{{site_logo()}}" alt="">
        <ul class="d-flex flex-column rounded-1 justify-content-center mt-3 footerLink">
            <li>
                @foreach(social_links() as $link)
                    <a href="{{ $link->value }}" title="{{ $link->title }}" target="_blank" rel="noopener noreferrer"
                       data-bs-toggle="tooltip"
                       class="d-inline-block mx-1 p-2 rounded-circle">
                        <i class="{{ $link->icon }}"></i>
                    </a>
                @endforeach
            </li>
        </ul>
    </div>
    <hr class="w-100">
    <div class="copyright rounded-1 p-0">
        <div class="container mt-6">
            <p class="fs-6 text-myBackground">{{ setting('copyright') }} | {{ trans('theme::blockworld.config.footer') }}- @lang('messages.copyright')</p>
        </div>
    </div>
</footer>
@include("elements.modal_login")
@include("elements.modal_register")

@if(theme_config('load.box.toggle'))
<div class="page-loader">
    <div class="spinner"></div>
    <div class="txt">{{theme_config("load.text.content")}}</div>
</div>
@endif

@stack('footer-scripts')
<script src="{{theme_asset("js/app.js")}}"></script>
<script src="{{theme_asset("js/particles.js")}}"></script>
</body>
</html>
