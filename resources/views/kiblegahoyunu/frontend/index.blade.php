@extends(config('app.tema').'/frontend.layout.app')
@section('content')

    <div class="service-area pt-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="shop-service-content-2 text-center mb-20">
                        <h4>Ücretsiz Kargo</h4>
                        <p>99₺ ve üzeri siparişlerinizde</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="shop-service-content-2 text-center mb-20">
                        <h4>Güvenli Ödeme</h4>
                        <p>Kapıda Nakit Ödeme İmkanı</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="shop-service-content-2 text-center border-none mb-20">
                        <h4>Müşteri Hizmetleri</h4>
                        <p>Sipariş ve sorularınız için</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shop-page-area pb-65">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">

                    <div class="tab-content jump">
                        <div class="tab-pane active pb-20" id="product-grid">
                            <div class="row">
                                @foreach($Product as $item)
                                <div class="col-md-3 col-sm-6 col-12 mb-30">
                                    <x-shop.kiblegah-product :item="$item"/>
                                </div>
                                @endforeach
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
