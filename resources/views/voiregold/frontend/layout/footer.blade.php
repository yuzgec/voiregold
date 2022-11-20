<footer class="footer footer-dark appear-animate" data-animation-options="{
            'name': 'fadeIn'
        }">
    <div class="footer-newsletter gold">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="icon-box icon-box-side text-white">
                        <div class="icon-box-icon d-inline-flex">
                            <i class="w-icon-envelop3"></i>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-white text-uppercase font-weight-bold">VoireGold Abone Bülteni</h4>
                            <p class="text-white">Kampanya ve yeni gelen ürünlerimizden ilk siz haberdar olun
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                    <form action="{{ route('mailsubcribes') }}" method="POST" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                        @csrf
                        <input type="email" value="{{old('email')}}" class="form-control mr-2 bg-white" name="email" id="email" placeholder="Email Adresinizi Giriniz" />
                        <button class="btn btn-dark btn-rounded" type="submit">Abonel Ol<i class="w-icon-long-arrow-right"></i></button>

                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-about">
                            <img src="/frontend/images/logo_footer.png" alt="{{ config('app.name') }}" width="250"  />
                        <div class="widget-body">
                            <p class="widget-about-title">Müşteri Hizmetleri</p>
                            <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                            <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                & coupons ster now toon.
                            </p>
                            <div class="product-details-footer">
                                <div class="addthis_inline_share_toolbox"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h3 class="widget-title">Company</h3>
                        <ul class="widget-body">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#">Team Member</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="#">Affilate</a></li>
                            <li><a href="#">Order History</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4>
                        <ul class="widget-body">
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="cart.html">View Cart</a></li>
                            <li><a href="login.html">Sign In</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="wishlist.html">My Wishlist</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4>
                        <ul class="widget-body">
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back guarantee!</a></li>
                            <li><a href="#">Product Returns</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Term and Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-left">
                <p class="copyright">Copyright © {{ date('Y') }} {{ config('app.name') }}. Tüm Hakları Saklıdır.</p>
            </div>
            <div class="footer-right">
                <span class="payment-label mr-lg-8">Kapıda Ödeme - Güvenli Alışveriş</span>
                <figure class="payment">
                    <img src="/frontend/images/payment.png" alt="payment" width="159" height="25" />
                </figure>
            </div>
        </div>
    </div>
</footer>
