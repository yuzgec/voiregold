@extends(config('app.tema').'/frontend.layout.app')
@section('content')
    <div class="intro-section">
        <div class="swiper-container swiper-theme nav-inner pg-inner animation-slider pg-xxl-hide pg-show nav-xxl-show nav-hide"
             data-swiper-options="{
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 4000,
                        'disableOnInteraction': false
                    }
                }">
            <div class="swiper-wrapper row gutter-no cols-1">
                <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                     style="background-image: url(assets/images/demos/demo2/slides/slide-1.jpg); background-color: #f1f0f0;">
                    <div class="container">
                        <figure class="slide-image floating-item slide-animate" data-animation-options="{
                                    'name': 'fadeInDownShorter', 'duration': '1s'
                                }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}"
                                data-child-depth="0.2">
                            <img src="assets/images/demos/demo2/slides/ski.png" alt="Ski" width="729"
                                 height="570" />
                        </figure>
                        <div class="banner-content text-right y-50 ml-auto">
                            <h5 class="banner-subtitle text-uppercase font-weight-bold mb-2 slide-animate"
                                data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">Deals And Promotions</h5>
                            <h3 class="banner-title ls-25 mb-6 slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">Fashion <span class="text-primary">Skiwears</span> for the ardent Sports
                                devotees
                            </h3>
                            <a href="shop-banner-sidebar.html"
                               class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                               data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">
                                Shop Now<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
                <!-- End of .intro-slide1 -->

                <div class="swiper-slide banner banner-fixed intro-slide intro-slide2"
                     style="background-image: url(assets/images/demos/demo2/slides/slide-2.jpg); background-color: #d9ddd9;">
                    <div class="container">
                        <figure class="slide-image floating-item slide-animate" data-animation-options="{
                                    'name': 'fadeInUpShorter', 'duration': '1s'
                                }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}"
                                data-child-depth="0.2">
                            <img src="assets/images/demos/demo2/slides/woman.png" alt="Ski" width="865"
                                 height="732" />
                        </figure>
                        <div class="banner-content y-50">
                            <h5 class="banner-subtitle text-uppercase font-weight-bold mb-2 slide-animate"
                                data-animation-options="{
                                        'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.5s'
                                    }">News And Inspiration</h5>
                            <h3 class="banner-title ls-25 mb-2 text-uppercase lh-1 slide-animate"
                                data-animation-options="{
                                        'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.7s'
                                    }">Natural Sound</h3>
                            <div class="banner-price-info font-weight-bold text-dark ls-25 slide-animate"
                                 data-animation-options="{
                                        'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.9s'
                                    }">Sale up to
                                <span class="text-primary font-weight-bolder text-uppercase ls-normal">30%
                                            Off</span></div>
                            <p class="font-weight-normal text-default ls-25 slide-animate"
                               data-animation-options="{
                                        'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '1.1s'
                                    }">Free returns extended to 30 days after delivery</p>
                            <a href="shop-banner-sidebar.html"
                               class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                               data-animation-options="{
                                        'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '1.3s'
                                    }">
                                Shop Now<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
                <!-- End of .intro-slide2 -->

                <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                     style="background-image: url(assets/images/demos/demo2/slides/slide-3.jpg); background-color: #d0cfcb;">
                    <div class="container">
                        <figure class="slide-image floating-item slide-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter', 'duration': '1s'
                                }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}"
                                data-child-depth="0.2">
                            <img src="assets/images/demos/demo2/slides/man.png" alt="Ski" width="527"
                                 height="481" />
                        </figure>
                        <div class="banner-content y-50">
                            <h5 class="banner-subtitle text-uppercase font-weight-bold slide-animate"
                                data-animation-options="{
                                        'name': 'fadeInRightShorter', 'duration': '1s'
                                    }">Top Monthly Seller</h5>
                            <h4 class="banner-title ls-25 slide-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter', 'duration': '1s'
                                    }">Sumsung 52 Inches Full HD <span class="text-primary">Smart LED</span> TV</h4>
                            <p class="font-weight-normal text-dark slide-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter', 'duration': '1s'
                                    }">Only until the end of this week.</p>
                            <a href="shop-banner-sidebar.html"
                               class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                               data-animation-options="{
                                        'name': 'fadeInRightShorter', 'duration': '1s'
                                    }">Shop Now<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
                <!-- End of .intro-slide3 -->
            </div>
            <div class="swiper-pagination"></div>
            <button class="swiper-button-next"></button>
            <button class="swiper-button-prev"></button>
        </div>
    </div>

    <div class="container">
        <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm mt-6 mb-10"
                     data-swiper-options="{
                        'loop': true,
                        'slidesPerView': 1,
                        'autoplay': {
                            'delay': 4000,
                            'disableOnInteraction': false
                        },
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '768': {
                                'slidesPerView': 3
                            },
                            '1200': {
                                'slidesPerView': 4
                            }
                        }
                    }">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                                <span class="icon-box-icon icon-shipping">
                                    <i class="w-icon-truck"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                                <span class="icon-box-icon icon-payment">
                                    <i class="w-icon-bag"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                                <span class="icon-box-icon icon-money">
                                    <i class="w-icon-money"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                                <span class="icon-box-icon icon-chat">
                                    <i class="w-icon-chat"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>

        <h2 class="title title-categories title-center pt-1 appear-animate">KATEGORİLERİMİZ</h2>
        <div class="categories-wrapper swiper-container shadow-swiper swiper-theme appear-animate"
             data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 5
                            },
                            '992': {
                                'slidesPerView': 7
                            },
                            '1200': {
                                'slidesPerView': 6
                            },
                            '1400': {
                                'slidesPerView': 6
                            },
                            '1600': {
                                'slidesPerView': 6
                            }
                        }
                    }">
            <div class="swiper-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                @foreach($Product_Categories->where('parent_id' , 0) as $item)
                <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                    <a href="demo13-shop.html">
                        <figure class="category-media">
                            <img src="assets/images/demos/demo13/category/category-1.jpg" alt="Category"
                                 width="174" height="200" />
                        </figure>
                    </a>
                    <div class="category-content">
                        <h4 class="category-name">{{ $item->title }}</h4>
                        <a href="demo13-shop.html" class="btn btn-primary btn-link btn-underline">Ürünleri İncele</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
