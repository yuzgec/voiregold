@extends('frontend.layout.app')
@section('content')
    @include('backend.layout.alert')

    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb bb-no">
                <li><a href{{ route('home') }}>Anasayfa</a></li>
                <li>{{ $Detay->title }}</li>
            </ul>
        </div>
    </nav>


    <div class="page-content mb-10 mt-5">
        <div class="container">
            <div class="shop-content row gutter-lg">
                <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
                    <div class="sidebar-overlay"></div>
                    <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                    <div class="sidebar-content scrollable">
                        <div class="sticky-sidebar">
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><span>KATEGORİLERİMİZ</span></h3>
                                <ul class="widget-body filter-items search-ul">
                                    @foreach($Product_Categories as $item)
                                        <li><a href="{{ route('kategori', [$item->slug,'id' => $item->id]) }}" class="font-size-lg">{{ $item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </aside>

                <div class="main-content">
                    <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6 br-xs"
                         style="background-image: url(/frontend/images/shop/banner1.jpg); background-color: #FFC74E;">
                        <div class="banner-content">
                            <h4 class="banner-subtitle font-weight-bold">Voire Gold</h4>
                            <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-10">{{ $Detay->title }}</h3>
                            <a href="shop-banner-sidebar.html"
                               class="btn btn-dark btn-rounded btn-icon-right">Discover Now<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End of Shop Banner -->

                    <nav class="toolbox sticky-toolbox sticky-content fix-top">
                        <div class="toolbox-left">
                            <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle
                                        btn-icon-left d-block d-lg-none"><i
                                    class="w-icon-category"></i><span>Filtrele</span></a>
                            <div class="toolbox-item toolbox-sort select-box text-dark">
                                <label>Sıralama :</label>
                                <select name="orderby" class="form-control">
                                    <option value="default" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price-low">Sort by pric: low to high</option>
                                    <option value="price-high">Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>
                        <div class="toolbox-right">

                            <div class="toolbox-item toolbox-layout">
                                <a href="shop-boxed-banner.html" class="icon-mode-grid btn-layout active">
                                    Ürün Listelendi
                                </a>
                            </div>
                        </div>
                    </nav>
                    <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">

                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/shop/1.jpg" alt="Product" width="300"
                                             height="338" />
                                    </a>
                                    <div class="product-action-horizontal">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Compare"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quick View"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="#">Electronics</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="#">3D Television</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">
                                            $220.00 - $230.00
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


