@extends(config('app.tema').'/frontend.layout.app')
@section('content')
    <div class="container">
        <div class="intro-section">
            <div class="row">
                <div class="intro-wrapper col-lg-9">
                    <div class="swiper-container swiper-theme pg-inner pg-white animation-slider"
                         data-swiper-options="{
                                'spaceBetween': 0,
                                'slidesPerView': 1
                            }">
                        <div class="swiper-wrapper row gutter-no cols-1">
                            <div class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm mt-4">
                                <a href="https://www.voiregold.com/kategori/kolyeler?id=2">
                                    <img src="/frontend/images/{{ config('app.tema') }}/kolyebanner.jpg" class="img-fluid" alt="{{config('app.name')}}"/>
                                </a>
                            </div>
                            <div class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm  mt-4">
                                <a href="https://www.voiregold.com/kategori/yuzukler?id=3">
                                    <img src="/frontend/images/{{ config('app.tema') }}/yuzukbanner.jpg" class="img-fluid" alt="{{config('app.name')}}"/>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="intro-banner-wrapper col-lg-3 mt-4">
                    <div class="banner banner-fixed intro-banner br-sm mb-4">
                        <figure class="br-sm">
                            <img src="/kapidaodeme.jpg" alt="{{config('app.name')}}"/>
                        </figure>

                    </div>
                    <div class="banner banner-fixed intro-banner intro-banner2 br-sm mb-4">
                        <figure class="br-sm">
                            <img src="/kargo.jpg" alt="{{config('app.name')}}"/>
                        </figure>
                    </div>
                </div>
            </div>
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

        <div class="category-banner-wrapper2 row cols-md-3 appear-animate fadeIn appear-animation-visible" style="animation-duration: 1.2s;">
            @foreach($Product_Categories as $item)
            <div class="banner banner-1 banner-fixed br-sm mb-4">
                <figure class="banner-media br-sm">
                    <a href="{{ route('kategori', [$item->slug, 'id' => $item->id]) }}">
                        <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/frontend/images/'.config('app.tema').'/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb')}}" alt="Category Banner" class="img-fluid" style="background-color: #31343B;">
                    </a>
                </figure>
                <div class="banner-content y-50">
                    <h4 class="banner-subtitle text-dark text-uppercase font-weight-bold">{{ config('app.name') }}</h4>
                    <h3 class="banner-title text-dark ls-25">{{ $item->title }} </h3>
                    <a href="{{ route('kategori', [$item->slug, 'id' => $item->id]) }}" class="btn btn-dark btn-link btn-slide-right btn-icon-right btn-infinite">
                        Ürünleri İncele<i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

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
    <div class="container">

        @foreach($Product_Categories->where('status' , 1) as $row)
            <div class="title-link-wrapper title-deals appear-animate mb-2 d-flex justify-content-between">
                <h2 class="title title-link">{{ $row->title }}</h2>
                <a href="{{  route('kategori', [$row->slug, 'id' => $row->id]) }}" class="ml-0">Hepsini Görüntüle<i class="w-icon-long-arrow-right"></i></a>
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
                    @foreach($ProductList as $item)
                        <div class="swiper-slide product-wrap">
                            <x-shop.product-item :item="$item"/>
                        </div>
                    @endforeach
                </div>
            </div>

            @if ($loop->index == 3)
                <div class="row category-banner-2cols cols-md-2 appear-animate">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="/arabanner1.jpg" alt="{{ config('app.name') }}" />
                            </figure>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="/arabanner2.jpg" alt="{{ config('app.name') }}" />

                            </figure>

                        </div>
                    </div>
                </div>
            @endif

        @endforeach
    </div>
@endsection
