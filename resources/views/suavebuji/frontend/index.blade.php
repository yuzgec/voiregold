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
                     style="background-image: url(/bannerbacksuvare.jpg); background-color: #f1f0f0;">
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
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <button class="swiper-button-next"></button>
            <button class="swiper-button-prev"></button>
        </div>
    </div>

    <div class="container">
        <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm mt-6"
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

        @endforeach
    </div>
@endsection
