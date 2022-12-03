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
                     style="background-image: url('/bannerbacksuvare.jpg'); background-color: #f1f0f0;">
                    <div class="container">
                        <figure class="slide-image floating-item slide-animate" data-animation-options="{
                                    'name': 'fadeInDownShorter', 'duration': '1s'
                                }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}"
                                data-child-depth="0.2">
                            <img src="/suavebanner.png" alt="Ski" width="729"
                                 height="570" />
                        </figure>
                        <div class="banner-content text-right y-50 ml-auto">
                            <h5 class="banner-subtitle text-uppercase font-weight-bold mb-2 slide-animate"
                                data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">Suave Bujiteri & Aksesuar</h5>
                            <h3 class="banner-title ls-25 mb-6 slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">İDDALIYIZ<br> En Moda Takı ve Aksesuarlarda
                                <span class="text-primary">%50 İndirim Fırsatı </span>
                            </h3>
                            <a href="{{ url('kategori/bileklikler?id=1') }}"
                               class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                               data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">
                                ALIŞVERİŞE BAŞLA<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide banner banner-fixed intro-slide intro-slide1" style="background-image: url('/bannerbacksuvare.jpg'); background-color: #f1f0f0;">
                    <div class="container">
                        <div class="banner-content text-right y-50 ml-auto">
                            <h5 class="banner-subtitle text-uppercase font-weight-bold mb-2 slide-animate"
                                data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">Suave Bujiteri & Aksesuar</h5>
                            <h3 class="banner-title ls-25 mb-6 slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">İDDALIYIZ<br> En Moda Takı ve Aksesuarlarda
                                <span class="text-primary">%50 İndirim Fırsatı </span>
                            </h3>
                            <a href="{{ url('kategori/bileklikler?id=1') }}"
                               class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                               data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">
                                ALIŞVERİŞE BAŞLA<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <figure class="slide-image floating-item slide-animate" data-animation-options="{
                                    'name': 'fadeInDownShorter', 'duration': '1s'
                                }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}"
                                data-child-depth="0.2">
                            <img src="/suavebanner.png" alt="Ski" width="729" height="570" />
                        </figure>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <button class="swiper-button-next"></button>
            <button class="swiper-button-prev"></button>
        </div>
    </div>

    <div class="container">

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
                    <a href="{{ route('kategori', [$item->slug, 'id' => $item->id]) }}">
                        <figure class="category-media">
                            <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/frontend/images/'.config('app.tema').'/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb')}}" title="{{ $item->title }}" width="200" height="200" alt="{{ $item->title }}">
                        </figure>
                    </a>
                    <div class="category-content">
                        <h4 class="category-name">{{ $item->title }}</h4>
                        <a href="{{ route('kategori', [$item->slug, 'id' => $item->id]) }}" class="btn btn-primary btn-link btn-underline">Ürünleri İncele</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm mt-6 mb-3"
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
                                'slidesPerView': 3
                            }
                        }
                    }">
            <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                <div class="swiper-slide icon-box icon-box-side text-dark">
                    <span class="icon-box-icon icon-shipping">
                        <i class="w-icon-truck"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Ücretsiz Kargo</h4>
                        <p class="text-default">100₺ ve Üzeri Alışverişlerinizde</p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side text-dark">
                    <span class="icon-box-icon icon-payment">
                        <i class="w-icon-bag"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Güvenli Ödeme</h4>
                        <p class="text-default">Kapıda Ödeme Seçeneği</p>
                    </div>
                </div>

                <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                    <span class="icon-box-icon icon-chat">
                        <i class="w-icon-chat"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Müşteri Hizmetleri</h4>
                        <p class="text-default">7/24 Müşteri Destek Hattı</p>
                    </div>
                </div>
            </div>
        </div>


        @foreach($Product_Categories as $row)
            <div class="title-link-wrapper title-deals appear-animate mb-2 d-flex justify-content-between">
                <h2 class="title title-link">{{ $row->title }}</h2>
                <a href="{{  route('kategori', [$row->slug, 'id' => $row->id]) }}" class="ml-0">Hepsini Görüntüle<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row product-grid appear-animate">

            @php
                $ProductList = \App\Models\Product::with(['getCategory'])
                ->join('product_category_pivots', 'product_category_pivots.product_id', '=', 'products.id' )
                ->join('product_categories', 'product_categories.id', '=', 'product_category_pivots.category_id')
                ->where('product_category_pivots.category_id',  $row->id)
                ->select('products.id','products.title','products.rank','products.slug','products.price','products.old_price','products.slug','products.sku','product_category_pivots.category_id', 'product_categories.parent_id')
                ->where('products.status', 1)
                ->orderBy("products.created_at", 'asc')
                ->get();
            @endphp

            @foreach($ProductList->take(9) as $item)
                <div class="product-wrap @if($loop->index == 2 ) ? grid-item3 : null @endif">
                    <x-shop.product-item :item="$item"/>
                </div>



            @endforeach
        </div>
            @if($loop->index == 1 )

                <div class="sale-banner banner br-sm appear-animate fadeIn appear-animation-visible" style="animation-duration: 1.2s;">
                    <div class="banner-content">
                        <h4 class="content-left banner-subtitle text-uppercase mb-8 mb-md-0 mr-0 mr-md-4 text-secondary ls-25">
                            <span class="text-dark font-weight-bold lh-1 ls-normal">Voire
                                <br>Gold</span>50% İNDİRİM!</h4>
                        <div class="content-right">
                            <h3 class="banner-title text-uppercase font-weight-normal mb-4 mb-md-0 ls-25 text-dark">
                                <span>TÜM ÜRÜNLERİMİZDE
                                    <strong class="mr-10 pr-lg-10">%50'ye varan İndirim Fırsatı</strong>
                                    TÜM ÜRÜNLERİMİZDE
                                    <strong class="mr-10 pr-lg-10">%50'ye varan İndirim Fırsatı</strong>
                                    TÜM ÜRÜNLERİMİZDE
                                    <strong class="mr-10 pr-lg-10">%50'ye varan İndirim Fırsatı</strong>
                                </span>
                            </h3>
                        </div>
                    </div>
                </div>

            @endif

            @if($loop->index == 3 )
                <div class="row deals-wrapper appear-animate mb-8">
                    <div class="col-xl-9 mb-4">
                        <div class="single-product h-100 br-sm">
                            <h4 class="title-sm title-underline font-weight-bolder ls-normal ml-3 mt-3">
                              Günün İndirimli Ürünleri
                            </h4>
                            <div class="swipe">
                                <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options = "{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1
                                        }">
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                        @foreach($Product->where('opportunity', 1) as $item)
                                            <div class="swiper-slide">
                                                <div class="product product-single row">
                                                    <div class="col-md-6">
                                                        <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                            <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                                <div class="swiper-wrapper row cols-1 gutter-no">
                                                                    <div class="swiper-slide" style="border:1px solid #f4f4f4;border-radius:5px">
                                                                        <figure class="product-image">
                                                                            <img title="{{ $item->title }}" src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb')}}">
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

                                                            @if($item->get_comment_count > 0)
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full">
                                                                        <span class="ratings" style="width: 100%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                    <a href="{{ route('urun' , $item->slug)}}" title="{{ $item->title }}" class="rating-reviews">({{ $item->get_comment_count }} yorum)</a>
                                                                </div>
                                                            @endif

                                                            <div class="product-short-desc lh-2 short" style="font-size: 16px">
                                                                {!! $item->short !!}
                                                            </div>

                                                            <div class="product-form pt-4">
                                                                <a href="{{ route('urun' , $item->slug)}}" class="btn btn-primary" title="{{ $item->title }}">
                                                                    <i class="w-icon-cart"></i>
                                                                    <span>Ürünü İncele</span>
                                                                </a>
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
                                <h4 class="title title-link font-weight-bold ml-3 mt-1">En Çok Satanlar</h4>
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
            @endif
        @endforeach
    </div>
@endsection
