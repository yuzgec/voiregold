
<div class="sticky-footer sticky-content fix-bottom">
    <a href="demo9.html" class="sticky-link active">
        <i class="w-icon-home"></i>
        <p>Home</p>
    </a>
    <a href="demo9-shop.html" class="sticky-link">
        <i class="w-icon-category"></i>
        <p>Shop</p>
    </a>
    <a href="my-account.html" class="sticky-link">
        <i class="w-icon-account"></i>
        <p>Account</p>
    </a>
    <div class="cart-dropdown dir-up">
        <a href="cart.html" class="sticky-link">
            <i class="w-icon-cart"></i>
            <p>Cart</p>
        </a>
        <div class="dropdown-box">
            <div class="products">
                <div class="product product-cart">
                    <div class="product-detail">
                        <h3 class="product-name">
                            <a href="product-default.html">Beige knitted elas<br>tic
                                runner shoes</a>
                        </h3>
                        <div class="price-box">
                            <span class="product-quantity">1</span>
                            <span class="product-price">$25.68</span>
                        </div>
                    </div>
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="/frontend/images/cart/product-1.jpg" alt="product" height="84" width="94" />
                        </a>
                    </figure>
                    <button class="btn btn-link btn-close" aria-label="button">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="product product-cart">
                    <div class="product-detail">
                        <h3 class="product-name">
                            <a href="product-default.html">Blue utility pina<br>fore
                                denim dress</a>
                        </h3>
                        <div class="price-box">
                            <span class="product-quantity">1</span>
                            <span class="product-price">$32.99</span>
                        </div>
                    </div>
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="/frontend/images/cart/product-2.jpg" alt="product" width="84" height="94" />
                        </a>
                    </figure>
                    <button class="btn btn-link btn-close" aria-label="button">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="cart-total">
                <label>Subtotal:</label>
                <span class="price">$58.67</span>
            </div>

            <div class="cart-action">
                <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
            </div>
        </div>
        <!-- End of Dropdown Box -->
    </div>

    <div class="header-search hs-toggle dir-up">
        <a href="#" class="search-toggle sticky-link">
            <i class="w-icon-search"></i>
            <p>Search</p>
        </a>
        <form action="#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                   required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
    </div>
</div>
<!-- End of Sticky Footer -->

<!-- Start of Scroll Top -->
<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
        version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
    </svg> </a>
<!-- End of Scroll Top -->


<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay"></div>
    <!-- End of .mobile-menu-overlay -->

    <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
    <!-- End of .mobile-menu-close -->

    <div class="mobile-menu-container scrollable">
        <form action="#" method="get" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                   required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
        <!-- End of Search Form -->
        <div class="tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="#main-menu" class="nav-link active">Main Menu</a>
                </li>

            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="main-menu">
                <ul class="mobile-menu">
                    <li><a href="{{ route('home') }}">Anasayfa</a></li>
                    <li><a href="{{ route('home').'/kurumsal/hakkimizda' }}">Hakkımızda</a></li>
                    @foreach($Product_Categories->where('parent_id' , 0) as $item)
                        <li><a href="{{ route('kategori', [$item->slug,'id' => $item->id]) }}">{{ $item->title }}</a></li>
                    @endforeach
                    <li class=""><a href="{{ route('kargosorgulama') }}">Kargo Sorgulama</a></li>
                    <li class=""><a href="{{ route('iletisim') }}">Bize Ulaşın</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
