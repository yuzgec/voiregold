<header class="header">
    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                </a>
                <a href="{{ route('home') }}" class="logo ml-lg-0">
                    <img src="/frontend/images/{{ config('app.tema') }}/logo.png" alt="{{ config('app.name') }}" width="200"  />
                </a>
                <nav class="main-nav">
                    <ul class="menu">
                        <li class="active"><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class=""><a href="{{ route('home') }}">Hakkımızda</a></li>
                        <li class=""><a href="{{ route('home') }}">Sizden Gelenler</a></li>
                        <li class=""><a href="{{ route('kargosorgulama') }}">Kampanyalarımız</a></li>
                        <li class=""><a href="{{ route('iletisim') }}">Bize Ulaşın</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call"></a>
                    <div class="call-info d-xl-show">
                        <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                            <a href="#" class="text-capitalize">Sipariş</a> Hattı :</h4>
                        <a href="tel:{{ config('settings.telefon1') }}" class="phone-number font-weight-bolder ls-50">{{ config('settings.telefon1') }}</a>
                    </div>
                </div>
                <a class="wishlist label-down link d-xs-show" href="{{ route('login') }}">
                    <i class="w-icon-user"></i>
                    <span class="wishlist-label d-lg-show">Giriş Yap </span>
                </a>

                <a class="wishlist label-down link d-xs-show" href="{{ route('favori') }}">
                    <i class="w-icon-heart"></i>
                    <span class="wishlist-label d-lg-show">Favori</span>
                </a>

                <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <span class="cart-count">{{ Cart::instance('shopping')->content()->count() }}</span>
                        </i>
                        <span class="cart-label">Sepet</span>
                    </a>
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>Sepetim</span>
                            <a href="#" class="btn-close">Kapat<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        @foreach(Cart::content() as $c)
                            <div class="products">
                                <div class="product product-cart">
                                    <div class="product-detail">
                                        <a href="{{ route('urun', $c->options->url) }}" class="product-name">{{$c->name}}</a>

                                        <div class="price-box">
                                            <span class="product-quantity">{{$c->qty}}</span>
                                            <span class="product-price">{{$c->price}}</span>
                                        </div>
                                    </div>
                                    <figure class="product-media">
                                        <a href="{{ route('urun', $c->options->url) }}" class="product-image">
                                            <img src="{{ $c->options->image }}" alt="{{$c->name}}" height="80px">
                                        </a>
                                    </figure>
                                    <form id="form" method="post" action="{{route('sepetcikar',$c->rowId )}}">
                                        @csrf
                                        <a href="javascript:{}" onclick="document.getElementById('form').submit()" class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                        <div class="cart-total">
                            <label>Ara Toplam:</label>
                            <span class="price">Toplam</span>
                        </div>

                        <div class="cart-action">
                            <a href="{{ route('sepet') }}" class="btn btn-dark btn-outline btn-rounded btn-block">Sepetim</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-content fix-top sticky-header">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left flex-1">

                    <div class="dropdown category-dropdown has-border" data-visible="true">
                        <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="true" data-display="static"
                           title="Browse Categories">
                            <i class="w-icon-category"></i>
                            <span>KATEGORİLERİMİZ </span>
                        </a>

                        <div class="dropdown-box">
                            <ul class="menu vertical-menu category-menu">
                                @include(config('app.tema').'/frontend.layout.sidemenu')
                            </ul>
                        </div>
                    </div>
                    <form method="get" action="#" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper mr-4 ml-4">
                        <input type="text" class="form-control" name="search" id="search"
                               placeholder="Ürün Adı veya Ürün Kodu Giriniz..." required />
                        <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                        </button>
                    </form>
                </div>

                <div class="header-right pr-0 ml-4">
                    <a href="{{ route('kargosorgulama') }}" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Kargo Sorgulama</a>
                    <a href="#"><i class="w-icon-sale"></i>Günün Fırsatı</a>
                </div>

            </div>
        </div>
    </div>
</header>
