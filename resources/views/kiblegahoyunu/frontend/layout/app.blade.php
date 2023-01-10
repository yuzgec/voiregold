<!doctype html>
<html class="no-js" lang="tr">
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        @include(config('app.tema').'/frontend.layout.css')
    </head>

    <body>
    @include('backend.layout.alert')

        @include(config('app.tema').'/frontend.layout.header')

            @yield('content')

        @include(config('app.tema').'/frontend.layout.footer')

        @include(config('app.tema').'/frontend.layout.js')

    </body>

</html>
