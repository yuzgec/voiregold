<!DOCTYPE html>
<html lang="tr">
    <head>
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        @include('frontend.layout.css')
        @yield('customCSS')
    </head>
    <body class="">
        <div class="page-wrapper">

            @include('frontend.layout.header')

            <main class="main">
                <div class="container">
                    @yield('content')
                </div>
            </main>

            @include('frontend.layout.footer')

            @include('frontend.layout.mobile-menu')

            @include('frontend.layout.js')

            @yield('customJS')
        </div>
    </body>
</html>
