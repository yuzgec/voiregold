<!DOCTYPE html>
<html lang="tr">
    <head>
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        @include(config('app.tema').'/frontend.layout.css')
        @yield('customCSS')

    </head>
    <body class="">
    @include('backend.layout.alert')

    <div class="page-wrapper">
            @include(config('app.tema').'/frontend.layout.header')

            <main class="main">
                @yield('content')
            </main>

            @include(config('app.tema').'/frontend.layout.footer')

            @include(config('app.tema').'/frontend.layout.mobile-menu')

            @include(config('app.tema').'/frontend.layout.js')

            @yield('customJS')
        </div>
    </body>
</html>
