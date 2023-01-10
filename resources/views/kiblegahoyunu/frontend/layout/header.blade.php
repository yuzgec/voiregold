<header class="header-area">
    <div class="header-middle ptb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo logo-mrg">

                        <a href="{{ route('home') }}" >
                            <img src="/kiblegah/img/{{ config('app.tema') }}/logo.png" alt="{{ config('app.name') }}" width="200"  />
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header-contact-search-wrapper f-right">
                        <div class="header-contact middle-same header-middle-color-9 pt-3">
                            <div class="header-contact-icon">
                                <i class="pe-7s-headphones"></i>
                            </div>
                            <div class="header-contact-content">
                                <p>Müşteri<br>Hizmetleri: {{ config('settings.telefon1') }}</p>
                            </div>
                        </div>
                        <div class="header-search middle-same header-middle-color-9 pt-3">
                            <form class="header-search-form" action="#">
                                <input type="text" placeholder="Ürün adı veya Ürün Kodu ...">
                                <button>
                                    <i class="ion-ios-search-strong"></i>
                                </button>
                            </form>
                        </div>
                        {{--<div class="header-cart middle-same header-middle-color-9 pt-3">
                            <button class="icon-cart">
                                <i class="pe-7s-shopbag cart-bag"></i>
                                <span class="count-amount">$609.00</span>
                                <i class="ion-chevron-down cart-down"></i>
                                <span class="count-style">02</span>
                            </button>
                            <div class="shopping-cart-content">
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Phantom Remote <br>Control 2018 </a></h4>
                                            <h6>Qty: 02</h6>
                                            <span>$260.00</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </li>

                                </ul>
                                <div class="shopping-cart-total">
                                    <h4>Kargo : <span>$20.00</span></h4>
                                    <h4>Toplam : <span class="shop-total">$260.00</span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a class="btn-style btn-hover" href="{{ route('sepet') }}">Sepetim</a>
                                    <a class="btn-style btn-hover" href="{{route('siparis')}}">Ödeme</a>
                                </div>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom theme-bg-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logo mobile-logo">
                        <a href="index.html">
                            <img alt="" src="assets/img/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="{{ route('home') }}"> Anasayfa</a></li>
                                    <li><a href="{{ route('home') }}"> Hakkımızda</a></li>
                                    <li><a href="{{ route('home') }}"> Sizden Gelenler</a></li>
                                    <li><a href="{{ route('home') }}"> Kampanyalarımız</a></li>
                                    <li><a href="{{ route('home') }}"> Bize Ulaşın</a></li>
                                    <li><a href="{{ route('home') }}"> KARGO SORGULAMA</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu main-none menu-limegreen-color">
                <nav>
                    <ul>
                        <li><a href="{{ route('home') }}"> Anasayfa</a></li>
                        <li><a href="{{ route('home') }}"> Hakkımızda</a></li>
                        <li><a href="{{ route('home') }}"> Sizden Gelenler</a></li>
                        <li><a href="{{ route('home') }}"> Kampanyalarımız</a></li>
                        <li><a href="{{ route('home') }}"> Bize Ulaşın</a></li>
                        <li><a href="{{ route('home') }}"> KARGO SORGULAMA</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
