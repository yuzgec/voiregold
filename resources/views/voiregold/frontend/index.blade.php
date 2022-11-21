@extends(config('app.tema').'/frontend.layout.app')
@section('content')
    <div class="container">
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

    @foreach($Product_Categories as $row)
    <div class="title-link-wrapper title-deals appear-animate mb-2 d-flex justify-content-between">
        <h2 class="title title-link">{{ $row->title }}</h2>
        <a href="{{  route('kategori', [$row->slug, 'id' =>$row->id]) }}" class="ml-0">Hepsini Görüntüle<i class="w-icon-long-arrow-right"></i></a>
    </div>
    <div class="swiper-container swiper-theme appear-animate mb-2" data-swiper-options="{
            'spaceBetween': 10,
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
            @foreach($Product as $item)
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
                                @foreach($Product->take(1) as $item)
                                <div class="swiper-slide">
                                    <div class="product product-single row">
                                        <div class="col-md-6">
                                            <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb')}}">
                                                            </figure>
                                                        </div>

                                                    </div>

                                                    <div class="product-label-group">
                                                        <label class="product-label gold">%{{ abs(round( $item->price * 100 /$item->old_price - 100)) }} indirim</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-details scrollable pl-0">
                                                <h2 class="product-title mb-1">
                                                    <a href="{{ route('urun' , $item->slug)}}" title="{{ $item->title }}">
                                                        {{ $item->title }}
                                                    </a>
                                                </h2>

                                                <hr class="product-divider">

                                                <div class="product-price">
                                                    <ins class="new-price ls-50"> {{ $item->price }}₺ -
                                                        <del>@convert($item->old_price)₺</del>
                                                    </ins>
                                                </div>

                                                <div class="product-countdown-container flex-wrap">
                                                    <label class="mr-2 text-default">Kampanya Bitiş Tarihi:</label>
                                                </div>
                                                @if($item->get_comment_count > 0)
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="{{ route('urun' , $item->slug)}}" title="{{ $item->title }}" class="rating-reviews">({{ $item->get_comment_count }} yorum)</a>
                                                </div>
                                                @endif

                                                <div class="product-short-desc lh-2 short">
                                                    {!! $item->short !!}
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
                                                        <span>Ürünü İncele</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-4">
                <div class="widget widget-products widget-products-bordered h-100">
                    <div class="widget-body br-sm h-100">
                        <h4 class="title title-link font-weight-bold">En Çok Satanlar</h4>
                        <div class="swiper">
                            <div class="swiper nav-top">
                                <div class="swiper-container swiper-theme nav-top" data-swiper-options = "{
                                                'slidesPerView': 1,
                                                'spaceBetween': 20,
                                                'navigation': {
                                                    'prevEl': '.swiper-button-prev',
                                                    'nextEl': '.swiper-button-next'
                                                }
                                            }">
                                    <div class="swiper-wrapper">
                                        <div class="widget-col swiper-slide">
                                            @foreach($Product->where('bestselling', 1) as $item)
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="{{ route('urun' , $item->slug)}}" title="{{ $item->title }}">
                                                            <img class="img-fluid" src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'small') }}" alt="{{ $item->title }}" width="150" height="150">
                                                            @foreach($item->getMedia('gallery')->take(1) as $img)
                                                                {{ $img->img('small')->attributes(['class' => 'product-image-hover', 'alt' => $item->title]) }}
                                                            @endforeach
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="{{ route('urun' , $item->slug)}}" title="{{ $item->title }}">{{ $item->title }}</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">@convert($item->price)₺ - <del>@convert($item->old_price)₺</del></div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
