@extends('frontend.layout.app')
@section('content')

    <div class="notification-wrapper appear-animate gold mt-2">
        <p class="text-center">Güzelliğinize ışıltı katacak muhteşem tasarımlara sahip takı modellerimiz ile dikkatler üzerinizde olacak.</p>
    </div>

    <div class="page-content" style="margin-top:20px">
            <div class="container">
                <div class="row gutter-lg">
                    <div class="main-content">
                        <div class="product product-single row">

                            <div class="alert alert-success alert-cart-product mb-2">
                                <a href="cart.html" class="btn btn-success btn-rounded">Sepetim</a>
                                <p class="mb-0 ls-normal"> {{ $Detay->title }} adlı ürün sepetinize eklendi</p>
                                <a href="#" class="btn btn-link btn-close" aria-label="button"><i class="close-icon"></i></a>
                            </div>

                            <div class="col-md-6 mb-6">
                                <div class="product-gallery product-gallery-sticky product-gallery-video">
                                    <div class="swiper-container product-single-swiper swiper-theme nav-inner" data-swiper-options="{
                                        'navigation': {
                                            'nextEl': '.swiper-button-next',
                                            'prevEl': '.swiper-button-prev'
                                        }
                                    }">
                                        <div class="swiper-wrapper row cols-1 gutter-no">

                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="{{ (!$Detay->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Detay->getFirstMediaUrl('page', 'img')}}"
                                                         data-zoom-image="{{$Detay->getFirstMediaUrl('page', 'img')}}"
                                                         alt="{{ $Detay->title }}">
                                                </figure>
                                            </div>
                                            @foreach($Detay->getMedia('gallery') as $item)
                                                <div class="swiper-slide">
                                                    <figure class="product-image">
                                                        <img src="{{ $item->getUrl('img') }}"
                                                             data-zoom-image="{{ $item->getUrl('img') }}"
                                                             alt="{{ $Detay->title }}">
                                                    </figure>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                        <a href="#" class="product-gallery-btn product-image-full">
                                            <i class="w-icon-zoom"></i>
                                        </a>
                                        <a href="#" class="product-gallery-btn product-video-viewer" title="Product Video Thumbnail"><i class="w-icon-movie"></i></a>
                                    </div>
                                    <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    }
                                }">
                                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                            <div class="product-thumb swiper-slide">
                                                <img src="{{ (!$Detay->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Detay->getFirstMediaUrl('page', 'small')}}"
                                                     alt="Product Thumb" width="150" height="150">
                                            </div>
                                            @foreach($Detay->getMedia('gallery') as $item)
                                                <div class="product-thumb swiper-slide">
                                                    <img src="{{ $item->getUrl('small') }}"
                                                         alt="{{ $Detay->title }}"
                                                         width="150" height="150">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="product-details">
                                    <h1 class="product-title">{{ $Detay->title }}</h1>
                                    <div class="product-bm-wrapper">
                                        <figure class="brand">
                                            <img src="/frontend/images/logo.png" alt="{{ config('app.name') }}"
                                                 width="105" />
                                        </figure>
                                        <div class="product-meta">
                                            <div class="product-categories">
                                                Kategori:
                                                @foreach($Category as $cat)
                                                    <span class="product-category"><a href="{{ route('kategori',[$cat->slug, 'id' => $cat->id]) }}">{{ $cat->title }}</a></span>
                                                @endforeach
                                            </div>
                                            <div class="product-sku">
                                                Ürün Kodu:
                                                <span>{{ $Detay->sku }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="product-divider">


                                    <div class="product-price">
                                        <ins class="new-price">@convert($Detay->price)₺</ins>
                                        <del>@convert($Detay->old_price)₺</del>
                                        <span class="tip tip-hot" style="font-size: 16px">%{{ abs(round( $Detay->price * 100 /$Detay->old_price - 100)) }} indirim</span>
                                    </div>


                                    <div class="product-short-desc lh-2 short">
                                        {!! $Detay->short !!}
                                    </div>

                                    <hr class="product-divider">

                                    <div class="fix-bottom product-sticky-content sticky-content">
                                        <div class="product-form container">
                                            <div class="product-qty-form">
                                                <div class="input-group">
                                                    <input class="quantity form-control" type="number" min="1"
                                                           max="10">
                                                    <button class="quantity-plus w-icon-plus"></button>
                                                    <button class="quantity-minus w-icon-minus"></button>
                                                </div>
                                            </div>
                                            <button class="btn gold text-white btn-cart">
                                                <i class="w-icon-cart"></i>
                                                <span>Sepete Ekle</span>
                                            </button>
                                        </div>
                                    </div>

                                    <hr class="product-divider">
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings " style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top "></span>
                                        </div>
                                        <a href="#product-tab-reviews" class="rating-reviews">Ürün Yorumları - (3 Yorum)</a>
                                    </div>


                                    <div class="swiper-container shadow-swiper swiper-theme show-code-action" data-swiper-options="{
                                                'slidesPerView': 1,
                                                'spaceBetween': 20,
                                                'breakpoints': {
                                                    '576': {
                                                        'slidesPerView': 2
                                                    },
                                                    '992': {
                                                        'slidesPerView': 2
                                                    }
                                                }
                                            }">
                                        <div class="swiper-wrapper row cols-lg-3 cols-sm-2 cols-1">
                                            <div class="swiper-slide testimonial-wrap">
                                                <div class="testimonial testimonial-centered testimonial-shadow">
                                                    <div class="testimonial-info">
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <blockquote>
                                                        Lorem ipsum dolor sit amet, consectetuered doPellentesque
                                                        aliquet nib Nullam mollis urna.
                                                    </blockquote>
                                                    <cite>
                                                        Victoria Ventura
                                                    </cite>
                                                </div>
                                            </div>
                                            <div class="swiper-slide testimonial-wrap">
                                                <div class="testimonial testimonial-centered testimonial-shadow">
                                                    <div class="testimonial-info">
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <blockquote>
                                                        Lorem ipsum dolor sit amet, consectetuered doPellentesque
                                                        aliquet nib Nullam mollis urna.
                                                    </blockquote>
                                                    <cite>
                                                        Victoria Ventura
                                                    </cite>
                                                </div>
                                            </div>
                                            <div class="swiper-slide testimonial-wrap">
                                                <div class="testimonial testimonial-centered testimonial-shadow">
                                                    <div class="testimonial-info">
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <blockquote>
                                                        Lorem ipsum dolor sit amet, consectetuered doPellentesque
                                                        aliquet nib Nullam mollis urna.
                                                    </blockquote>
                                                    <cite>
                                                        Victoria Ventura
                                                    </cite>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab tab-nav-boxed tab-nav-underline product-tabs mt-3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="#product-tab-description" class="nav-link active">Ürün Açıklaması</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="product-tab-description">
                                    <div class="row mb-4">
                                        <div class="col-md-8 col-12 mb-3 font-size-md">
                                            {!! $Detay->desc !!}
                                        </div>

                                        <div class="col-md-4 col-12 mb-5">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
                        <div class="sidebar-overlay"></div>
                        <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                        <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
                        <div class="sidebar-content scrollable">
                            <div class="sticky-sidebar">

                                <div class="widget widget-products">
                                    <div class="title-link-wrapper mb-2">
                                        <h4 class="title title-link font-weight-bold">En Çok Satanlar</h4>
                                    </div>

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
                                                            <div class="product-price">@convert($Detay->price)₺ - <del>@convert($Detay->old_price)₺</del></div>
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
                    </aside>
                    <!-- End of Sidebar -->
                </div>
            </div>
        </div>

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap" >
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" aria-label="Kapat (Esc)"></button>
                    <button class="pswp__button pswp__button--zoom" aria-label="Yakınlaştır/Uzaklaştır"></button>
                    <div class="pswp__preloader">
                        <div class="loading-spin"></div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button--arrow--left" aria-label="Geri"></button>
                <button class="pswp__button--arrow--right" aria-label="İleri"></button>
                <div class="pswp__caption" >
                    <div class="pswp__caption__center"  ></div>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('customJS')
    </script><script>
        $(document).ready(function() {
            $(".short ul").addClass("list-type-check list-style-none");
        })
    </script>
@endsection
