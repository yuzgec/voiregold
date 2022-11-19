<header class="header">
    <div class="header-top">
        <div class="container">
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                </a>
                <a href="{{ route('home') }}" class="logo ml-lg-0">
                    <img src="/frontend/images/logo.png" alt="{{ config('app.name') }}" width="200"  />
                </a>

                <form action="{{ route('search') }}" method="GET"
                      class="input-wrapper header-search hs-expanded hs-round d-none d-md-flex">
                    <div class="select-box">
                        <select id="category" name="category">
                            <option value="">Tüm Kategoriler</option>
                            @foreach($Product_Categories->where('parent_id' , 0) as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="text" class="form-control" name="q" id="search" placeholder="Ürün Adı veya kodu giriniz..."
                           required />
                    <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                    </button>
                </form>
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call"></a>
                    <div class="call-info d-lg-show">
                        <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                            <a href="mailto:#" class="text-capitalize">Sipariş Hattı</a></h4>
                        <a href="tel:#" class="phone-number font-weight-bolder ls-50">0 212 222 22 22</a>
                    </div>
                </div>

                <a class="wishlist label-down link d-xs-show" href="wishlist.html">
                    <i class="w-icon-user"></i>
                    <span class="wishlist-label d-lg-show">Giriş Yap</span>
                </a>

                <a class="wishlist label-down link d-xs-show" href="wishlist.html">
                    <i class="w-icon-heart"></i>
                    <span class="wishlist-label d-lg-show">Favori</span>
                </a>

                <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <span class="cart-count">2</span>
                        </i>
                        <span class="cart-label">Sepet</span>
                    </a>
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>Sepetim</span>
                            <a href="#" class="btn-close">Kapat<i class="w-icon-long-arrow-right"></i></a>
                        </div>

                        <div class="products">
                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="product-default.html" class="product-name">Beige knitted
                                        elas<br>tic
                                        runner shoes</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$25.68</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/cart/product-1.jpg" alt="product" height="84"
                                             width="94" />
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close" aria-label="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>


                        </div>

                        <div class="cart-total">
                            <label>Ara Toplam:</label>
                            <span class="price">$58.67</span>
                        </div>

                        <div class="cart-action">
                            <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">Sepetim</a>
                            <a href="checkout.html" class="btn btn-primary  btn-rounded">Sipariş Tamamla</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-content fix-top sticky-header">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <div class="dropdown category-dropdown gold {{ (request()->segment(1)) ? 'show' : 'show-dropdown' }}" data-visible="true">
                        <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="true" data-display="static"
                           title="Browse Categories">
                            <i class="w-icon-category"></i>
                            <span>KATEGORİLERİMİZ </span>
                        </a>

                        <div class="dropdown-box">

                            <ul class="menu vertical-menu category-menu">
                                @foreach($Product_Categories as $item)
                                <li><a href="{{ route('kategori', [$item->slug,'id' => $item->id]) }}">{{ $item->title }}</a></li>
                                @endforeach
                                <li><a href="{{ route('home') }}">Kampanyalı Ürünler</a></li>
                                <li><a href="{{ route('home') }}">İndirimli Ürünler</a></li>
                                <li><a href="{{ route('home') }}">Çok Satanlar</a></li>
                                <li><a href="{{ route('home') }}">69TL Altı Ürünler</a></li>
                            </ul>
                        </div>
                    </div>
                    <nav class="main-nav ml-4">
                        <ul class="menu active-underline">
                            <li class="active"><a href="{{ route('home') }}">Anasayfa</a></li>
                            <li class=""><a href="{{ route('home') }}">Hakkımızda</a></li>
                            <li class=""><a href="{{ route('home') }}">Sizden Gelenler</a></li>
                            <li class=""><a href="{{ route('kargosorgulama') }}">Kampanyalarımız</a></li>
                            <li class=""><a href="{{ route('iletisim') }}">Bize Ulaşın</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <a href="{{ route('kargosorgulama') }}" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Kargo Sorgulama</a>
                    <a href="#"><i class="w-icon-sale"></i>Günün Fırsatı</a>
                </div>
            </div>
        </div>
    </div>

</header>
