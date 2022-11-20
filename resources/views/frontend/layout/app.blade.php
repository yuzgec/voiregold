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
   {{-- <form action="{{ route('sepeteekle') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ rand(6,9) }}">
        <button type="submit" class="btn btn-primary btn-rounded btn-shadow btn-block">
            <span><i class="icon-shopping-cart"></i> Sepete Ekle</span>
        </button>
    </form>

--}}

    <div class="page-wrapper">

            @include('frontend.layout.header')

            <main class="main">

                    @yield('content')
            </main>

            @include('frontend.layout.footer')

            @include('frontend.layout.mobile-menu')

            @include('frontend.layout.js')

            @yield('customJS')
        </div>
    </body>
</html>
