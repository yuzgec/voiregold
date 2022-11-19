@extends('frontend.layout.app')
@section('content')

    <div class="intro-wrapper">
        <div class="row">
        <div class="col-md-8 mb-4">
            <div class="swiper-container swiper-theme pg-inner pg-white animation-slider"
                 data-swiper-options="{
                            'slidesPerView': 1,
                            'autoplay': {
                                'delay': 8000,
                                'disableOnInteraction': false
                            }
                        }">
                <div class="swiper-wrapper row gutter-no cols-1">
                    <div class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm"
                         style="background-image: url(/Slider01.png); background-color: #DDE1E2;">
                        <div class="banner-content y-50">
                            <div class="slide-animate" data-animation-options="{
                                            'name': 'zoomIn', 'duration': '1s'
                                        }">

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm"
                         style="background-image: url(/Slider02.png); background-color: #DDE1E2;">
                        <div class="banner-content y-50">
                            <div class="slide-animate" data-animation-options="{
                                            'name': 'zoomIn', 'duration': '1s'
                                        }">

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm"
                         style="background-image: url(/Slider03.png); background-color: #DDE1E2;">
                        <div class="banner-content y-50">
                            <div class="slide-animate" data-animation-options="{
                                            'name': 'zoomIn', 'duration': '1s'
                                        }">

                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm"
                         style="background-image: url(/Slider04.png); background-color: #DDE1E2;">
                        <div class="banner-content y-50">
                            <div class="slide-animate" data-animation-options="{
                                            'name': 'zoomIn', 'duration': '1s'
                                        }">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12 col-sm-6 mb-4">
                    <div class="intro-banner banner banner-fixed overlay-light overlay-zoom br-sm">
                        <figure  style="border:2px solid #1B1612;" >
                            <img src="/resimyok.jpg" />
                        </figure>
                        <div class="banner-content content-bottom">
                            <h5 class="banner-subtitle text-uppercase font-weight-bold mb-0">New In</h5>
                            <h3 class="banner-title text-capitalize text-white ls-25">Smartwatch</h3>
                            <a href="shop-banner-sidebar.html"
                               class="btn btn-white btn-link btn-underline btn-icon-right">
                                Shop Now<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6 mb-4">
                    <div class="intro-banner banner banner-fixed overlay-dark overlay-zoom br-sm">
                        <figure  style="border:2px solid #1B1612;" >
                            <img src="/resimyok.jpg" />
                        </figure>
                        <div class="banner-content content-top">
                            <div
                                class="banner-price-info text-uppercase font-weight-bolder text-uppercase text-dark">
                                Get Up <span class="text-secondary">50%Off</span>
                            </div>
                            <h3 class="banner-title text-capitalize ls-25">Skate Sale</h3>
                            <a href="shop-banner-sidebar.html"
                               class="btn btn-dark btn-link btn-underline btn-icon-right">
                                Shop Now<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="notification-wrapper br-sm mb-10 appear-animate gold mt-2">
        <p class="text-center">Güzelliğinize ışıltı katacak muhteşem tasarımlara sahip takı modellerimiz ile dikkatler üzerinizde olacak.</p>
    </div>

    @foreach($Product_Categories as $item)
    <div class="title-link-wrapper title-deals appear-animate mb-2">
        <h2 class="title title-link">{{ $item->title }}</h2>
        <div
            class="product-countdown-container font-size-sm text-white bg-secondary align-items-center mr-auto">
        </div>
        <a href="{{  route('kategori', [$item->slug, 'id' =>$item->id]) }}" class="ml-0">Hepsini Görüntüle<i class="w-icon-long-arrow-right"></i></a>
    </div>
    <div class="swiper-container swiper-theme appear-animate mb-2" data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 2,
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 4
                },
                '992': {
                    'slidesPerView': 5
                }
            }
        }">
        <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
            @foreach($Product->take(6) as $item)
                <div class="swiper-slide product-wrap">
                    <x-shop.product-item :item="$item"/>
                </div>
            @endforeach
        </div>
    </div>

    @if ($loop->index == 1)
          <div class="swiper-container swiper-theme shadow-swiper pb-10"
               data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        },
                        '1200': {
                            'slidesPerView': 6
                        }
                    }
                }">
              <div class="swiper-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                  <div class="swiper-slide category-wrap">
                      <div class="category category-classic category-absolute overlay-zoom br-sm">
                          <a href="{{ route('home') }}">
                              <figure class="category-media">
                                  <img src="https://st3.myideasoft.com/idea/bm/73/myassets/banner_pictures/banner_278.png?revision=1663115452" alt="Category"/>
                              </figure>
                          </a>
                      </div>
                  </div>

                  <div class="swiper-slide category-wrap">
                      <div class="category category-classic category-absolute overlay-zoom br-sm">
                          <a href="{{ route('home') }}">
                              <figure class="category-media">
                                  <img src="https://st3.myideasoft.com/idea/bm/73/myassets/banner_pictures/banner_278.png?revision=1663115452" alt="Category"/>
                              </figure>
                          </a>
                      </div>
                  </div>

                  <div class="swiper-slide category-wrap">
                      <div class="category category-classic category-absolute overlay-zoom br-sm">
                          <a href="{{ route('home') }}">
                              <figure class="category-media">
                                  <img src="https://st3.myideasoft.com/idea/bm/73/myassets/banner_pictures/banner_278.png?revision=1663115452" alt="Category"/>
                              </figure>
                          </a>
                      </div>
                  </div>

                  <div class="swiper-slide category-wrap">
                      <div class="category category-classic category-absolute overlay-zoom br-sm">
                          <a href="{{ route('home') }}">
                              <figure class="category-media">
                                  <img src="https://st3.myideasoft.com/idea/bm/73/myassets/banner_pictures/banner_278.png?revision=1663115452" alt="Category"/>
                              </figure>
                          </a>
                      </div>
                  </div>

                  <div class="swiper-slide category-wrap">
                      <div class="category category-classic category-absolute overlay-zoom br-sm">
                          <a href="{{ route('home') }}">
                              <figure class="category-media">
                                  <img src="https://st3.myideasoft.com/idea/bm/73/myassets/banner_pictures/banner_278.png?revision=1663115452" alt="Category"/>
                              </figure>
                          </a>
                      </div>
                  </div>

                  <div class="swiper-slide category-wrap">
                      <div class="category category-classic category-absolute overlay-zoom br-sm">
                          <a href="{{ route('home') }}">
                              <figure class="category-media">
                                  <img src="https://st3.myideasoft.com/idea/bm/73/myassets/banner_pictures/banner_278.png?revision=1663115452" alt="Category"/>
                              </figure>
                          </a>
                      </div>
                  </div>

              </div>
              <div class="swiper-pagination"></div>
          </div>
      @endif

    @if ($loop->index == 3)
        <div class="row category-banner-2cols cols-md-2 appear-animate">
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-sm">
                    <figure>
                        <img src="/frontend/images/demos/demo10/banner/1-1.jpg" alt="Category Banner" width="610"
                             height="150" style="background-color: #263032;" />
                    </figure>
                    <div class="banner-content x-50 w-100 y-50 pl-3 pr-3 text-center">
                        <h5 class="banner-subtitle text-capitalize font-weight-bold text-white">Coming Soon</h5>
                        <h3 class="banner-title text-capitalize ls-25 text-white">Black Friday</h3>
                        <div class="banner-price-info text-white text-uppercase font-weight-bold">
                            Discount <strong class="text-primary">50% Off</strong>
                        </div>
                    </div>
                </div>
                <!-- End of Category Banner -->
            </div>
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-sm">
                    <figure>
                        <img src="/frontend/images/demos/demo10/banner/1-2.jpg" alt="Category Banner" width="610"
                             height="150" style="background-color: #F3F3F1;" />
                    </figure>
                    <div class="banner-content x-50 w-100 y-50 pl-3 pr-3 text-center">
                        <h5 class="banner-subtitle text-capitalize font-weight-bold">Coming Soon</h5>
                        <h3 class="banner-title text-capitalize ls-25">Black Friday</h3>
                        <div class="banner-price-info text-uppercase font-weight-bold">
                            Discount <strong class="text-primary">50% Off</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @endforeach

    <div class="row deals-wrapper appear-animate mb-8">
            <div class="col-xl-9 mb-4">
                <div class="single-product h-100 br-sm">
                    <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                        Günün İndirimli Ürünleri
                    </h4>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options = "{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1
                                        }">
                            <div class="swiper-wrapper row cols-1 gutter-no">
                                <div class="swiper-slide">
                                    <div class="product product-single row">
                                        <div class="col-md-6">
                                            <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="/frontend//images/demos/demo3/products/1-1-600x675.jpg"
                                                                     data-zoom-image="/frontend//images/demos/demo3/products/1-1-800x900.jpg"
                                                                     alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="/frontend//images/demos/demo3/products/1-2-600x675.jpg"
                                                                     data-zoom-image="/frontend//images/demos/demo3/products/1-2-800x900.jpg"
                                                                     alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="/frontend//images/demos/demo3/products/1-3-600x675.jpg"
                                                                     data-zoom-image="/frontend//images/demos/demo3/products/1-3-800x900.jpg"
                                                                     alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="/frontend//images/demos/demo3/products/1-4-600x675.jpg"
                                                                     data-zoom-image="/frontend//images/demos/demo3/products/1-4-800x900.jpg"
                                                                     alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-discount">25% Off</label>
                                                    </div>
                                                </div>
                                                <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                                                    'breakpoints': {
                                                                        '992': {
                                                                            'direction': 'vertical',
                                                                            'slidesPerView': 'auto'
                                                                        }
                                                                    }
                                                                }">
                                                    <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="/frontend//images/demos/demo3/products/1-1-600x675.jpg" alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="/frontend//images/demos/demo3/products/1-2-600x675.jpg" alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="/frontend//images/demos/demo3/products/1-3-600x675.jpg" alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="/frontend//images/demos/demo3/products/1-4-600x675.jpg" alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-details scrollable pl-0">
                                                <h2 class="product-title mb-1"><a href="product-default.html">Red
                                                        Cap Sound Marker</a></h2>

                                                <hr class="product-divider">

                                                <div class="product-price"><ins class="new-price ls-50">$129.43 -
                                                        $143.88</ins></div>

                                                <div class="product-countdown-container flex-wrap">
                                                    <label class="mr-2 text-default">Offer Ends In:</label>
                                                    <div class="product-countdown countdown-compact"
                                                         data-until="2022, 12, 31" data-compact="true">
                                                        629 days, 11: 59: 52</div>
                                                </div>

                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                </div>

                                                <div
                                                    class="product-form product-variation-form product-size-swatch mb-3">
                                                    <label class="mb-1">Size:</label>
                                                    <div
                                                        class="flex-wrap d-flex align-items-center product-variations">
                                                        <a href="#" class="size">Small</a>
                                                        <a href="#" class="size">Medium</a>
                                                        <a href="#" class="size">Large</a>
                                                        <a href="#" class="size">Extra Large</a>
                                                    </div>
                                                    <a href="#" class="product-variation-clean">Clean All</a>
                                                </div>

                                                <div class="product-variation-price">
                                                    <span></span>
                                                </div>

                                                <div class="product-form pt-4">
                                                    <div class="product-qty-form mb-2 mr-2">
                                                        <div class="input-group">
                                                            <input class="quantity form-control" type="number"
                                                                   min="1" max="10000000">
                                                            <button class="quantity-plus w-icon-plus"></button>
                                                            <button class="quantity-minus w-icon-minus"></button>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-cart">
                                                        <i class="w-icon-cart"></i>
                                                        <span>Add to Cart</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product product-single row">
                                        <div class="col-md-6">
                                            <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="/frontend//images/demos/demo6/products/2-1-600x675.jpg"
                                                                     data-zoom-image="/frontend//images/demos/demo6/products/2-1-800x900.jpg"
                                                                     alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="/frontend//images/demos/demo6/products/2-2-600x675.jpg"
                                                                     data-zoom-image="/frontend//images/demos/demo6/products/2-2-800x900.jpg"
                                                                     alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="/frontend//images/demos/demo6/products/2-3-600x675.jpg"
                                                                     data-zoom-image="/frontend//images/demos/demo6/products/2-3-800x900.jpg"
                                                                     alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="/frontend//images/demos/demo6/products/2-4-600x675.jpg"
                                                                     data-zoom-image="/frontend//images/demos/demo6/products/2-4-800x900.jpg"
                                                                     alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-discount">25% Off</label>
                                                    </div>
                                                </div>
                                                <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                                                    'breakpoints': {
                                                                        '992': {
                                                                            'direction': 'vertical',
                                                                            'slidesPerView': 'auto'
                                                                        }
                                                                    }
                                                                }">
                                                    <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="/frontend//images/demos/demo6/products/2-1-600x675.jpg"
                                                                 alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="/frontend//images/demos/demo6/products/2-2-600x675.jpg"
                                                                 alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="/frontend//images/demos/demo6/products/2-3-600x675.jpg"
                                                                 alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="/frontend//images/demos/demo6/products/2-4-600x675.jpg"
                                                                 alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-details scrollable pl-0">
                                                <h2 class="product-title mb-1"><a href="product-default.html">White
                                                        School Bag</a></h2>

                                                <hr class="product-divider">

                                                <div class="product-price"><ins class="new-price ls-50">$26.00</ins>
                                                </div>

                                                <div class="product-countdown-container flex-wrap">
                                                    <label class="mr-2 text-default">Offer Ends In:</label>
                                                    <div class="product-countdown countdown-compact"
                                                         data-until="2022, 12, 31" data-compact="true">
                                                        629 days, 11: 59: 52</div>
                                                </div>

                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#product-tab-reviews" class="rating-reviews">(3
                                                        Reviews)</a>
                                                </div>

                                                <div
                                                    class="product-form product-variation-form product-size-swatch mb-3">
                                                    <label class="mb-1">Size:</label>
                                                    <div
                                                        class="flex-wrap d-flex align-items-center product-variations">
                                                        <a href="#" class="size">Small</a>
                                                        <a href="#" class="size">Medium</a>
                                                        <a href="#" class="size">Large</a>
                                                        <a href="#" class="size">Extra Large</a>
                                                    </div>
                                                    <a href="#" class="product-variation-clean">Clean All</a>
                                                </div>

                                                <div class="product-variation-price">
                                                    <span></span>
                                                </div>

                                                <div class="product-form pt-4">
                                                    <div class="product-qty-form mb-2 mr-2">
                                                        <div class="input-group">
                                                            <input class="quantity form-control" type="number"
                                                                   min="1" max="10000000">
                                                            <button class="quantity-plus w-icon-plus"></button>
                                                            <button class="quantity-minus w-icon-minus"></button>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-cart">
                                                        <i class="w-icon-cart"></i>
                                                        <span>Add to Cart</span>
                                                    </button>
                                                </div>

                                                <div class="social-links-wrapper mt-1">
                                                    <div class="social-links">
                                                        <div class="social-icons social-no-color border-thin">
                                                            <a href="#"
                                                               class="social-icon social-facebook w-icon-facebook"></a>
                                                            <a href="#"
                                                               class="social-icon social-twitter w-icon-twitter"></a>
                                                            <a href="#"
                                                               class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                            <a href="#"
                                                               class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                            <a href="#"
                                                               class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                        </div>
                                                    </div>
                                                    <span class="divider d-xs-show"></span>
                                                    <div class="product-link-wrapper d-flex">
                                                        <a href="#"
                                                           class="btn-product gold-icon btn-wishlist w-icon-heart"><span></span></a>
                                                        <a href="#"
                                                           class="btn-product gold-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="swiper-button-next"></button>
                            <button class="swiper-button-prev"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-4">
                <div class="widget widget-products widget-products-bordered h-100">
                    <div class="widget-body br-sm h-100">
                        <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">Top 20 Best
                            Seller</h4>
                        <div class="swiper">
                            <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                                'slidesPerView': 1,
                                                'spaceBetween': 20,
                                                'breakpoints': {
                                                    '576': {
                                                        'slidesPerView': 2
                                                    },
                                                    '1200': {
                                                        'slidesPerView': 3
                                                    },
                                                    '1300': {
                                                        'slidesPerView': 1
                                                    }
                                                }
                                            }">
                                <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="/frontend//images/demos/demo3/products/1-1.jpg"
                                                         alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Fashionable Leather
                                                        Satchel</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$25.68</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="/frontend//images/demos/demo3/products/1-2.jpg"
                                                         alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Mini Wireless Earphone</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$29.99 - $49.00</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="/frontend//images/demos/demo3/products/1-3.jpg"
                                                         alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Women's Comforter</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$24.00</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="/frontend//images/demos/demo1/products/2-4.jpg"
                                                         alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Latest Speaker</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$250.68</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="/frontend//images/demos/demo1/products/2-5.jpg"
                                                         alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Men's Black Wrist Watch</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$135.60</ins><del
                                                        class="old-price">$155.70</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="/frontend//images/demos/demo1/products/2-6.jpg" alt="Product"
                                                         width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Wash Machine</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$215.68</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="/frontend//images/demos/demo1/products/2-7.jpg" alt="Product"
                                                         width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Security Guard</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$320.00</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="/frontend//images/demos/demo1/products/2-8.jpg" alt="Product"
                                                         width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Apple Super Notecom</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$243.30</ins><del
                                                        class="old-price">$253.50</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="/frontend//images/demos/demo1/products/2-9.jpg" alt="Product"
                                                         width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">HD Television</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$450.68</ins><del
                                                        class="old-price">$500.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection
