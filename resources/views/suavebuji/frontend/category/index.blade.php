@extends(config('app.tema').'/frontend.layout.app')
@section('content')
    @include('backend.layout.alert')

    <div class="page-content mb-10 mt-5">
        <div class="container">
            <div class="shop-content row gutter-lg">
                <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
                    <div class="sidebar-overlay"></div>
                    <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                    <div class="sidebar-content scrollable" style="border:1px solid #f4f4f4">
                        <div class="sticky-sidebar">
                            <ul class="menu vertical-menu category-menu">
                              @include(config('app.tema').'/frontend.layout.sidemenu')
                            </ul>

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

                    <nav class="toolbox sticky-toolbox sticky-content fix-top">
                        <div class="toolbox-left">
                            <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle
                                        btn-icon-left d-block d-lg-none"><i
                                    class="w-icon-category"></i><span>Filtrele</span></a>
                            <div class="toolbox-item toolbox-sort select-box text-dark">
                                <select name="sortby" id="sortby" class="form-control" onchange="location = this.options[this.selectedIndex].value">
                                    <option value="">Sıralama</option>
                                    <option value="{{ url()->current() }}?id={{ $Detay->id }}&fiyat=asc" {{ (request('fiyat') == 'asc') ? 'selected' : null }}>Fiyat Artan</option>
                                    <option value="{{ url()->current() }}?id={{ $Detay->id }}&fiyat=desc" {{ (request('fiyat') == 'desc') ? 'selected' : null }}>Fiyat Azalan</option>
                                    <option value="{{ url()->current() }}?id={{ $Detay->id }}&yeni=asc" {{ (request('basimtarihi') == 'asc') ? 'selected' : null }}>Yeni Eklenenler</option>
                                    <option value="{{ url()->current() }}?id={{ $Detay->id }}&coksatan=1" {{ (request('basimtarihi') == 'asc') ? 'selected' : null }}>Çok Satanlar</option>
                                    <option value="{{ url()->current() }}?id={{ $Detay->id }}&indirim=1" {{ (request('indirim') == 1) ? 'selected' : null }}>İndirimdeki Ürünler</option>
                                </select>
                            </div>
                        </div>
                        <div class="toolbox-right">

                            <div class="toolbox-item toolbox-layout">
                                <a href="#" class="icon-mode-grid btn-layout active">
                                    ({{$ProductList->count()}}) adet ürün listelenmiştir.
                                </a>
                            </div>
                        </div>
                    </nav>
                    <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                        @foreach($ProductList as $item)
                        <div class="product-wrap">
                            <x-shop.product-item :item="$item"/>
                        </div>
                        @endforeach
                    </div>

                    <div class="row ">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            {{ $ProductList->appends(['id'=> $Detay->id,'siralama' => 'urunler' ]) }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection


