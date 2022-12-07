<footer class="footer footer-dark appear-animate" data-animation-options="{
            'name': 'fadeIn'
        }">
    <div class="footer-newsletter gold">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="icon-box icon-box-side text-white">
                        <div class="icon-box-icon d-inline-flex">
                            <i class="w-icon-envelop3"></i>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-white text-uppercase font-weight-bold">{{ config('app.tema') }} Abone Bülteni</h4>
                            <p class="text-white">Kampanya ve yeni gelen ürünlerimizden ilk siz haberdar olun
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                    <form action="{{ route('mailsubcribes') }}" method="POST" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                        @csrf
                        <input type="email" value="{{old('email_address')}}" class="form-control mr-2 bg-white" name="email_address" id="email" requeired placeholder="Email Adresinizi Giriniz" />
                        <button class="btn btn-dark btn-rounded" type="submit">Abonel Ol<i class="w-icon-long-arrow-right"></i></button>

                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget widget-about">
                            <a href="{{ route('home') }}" class="logo-footer">
                                <img src="/frontend/images/{{ config('app.tema') }}/logo_footer.png" alt="{{ config('app.name') }}" width="250"/>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget widget-about">
                            <h3 class="widget-title text-white">{{ config('app.name') }}</h3>
                            <div class="widget-body">
                                <p class="widget-about-title text-wihte">Müşteri Hizmetleri</p>
                                <a href="tel:{{ config('settings.telefon1') }}" class="widget-about-call">{{ config('settings.telefon1') }}</a>
                                <p class="widget-about-desc text-white">Telefon numaramızdan ürünler ve siparişlerinizle alakalı destek alabilirsiniz.
                                </p>

                                <div class="social-icons social-icons-colored">
                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                    <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                    <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                    <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title text-white">Kurumsal</h4>
                            <ul class="widget-body">
                                <li><a href="{{ route('home') }}">Anasayfa</a></li>
                                <li><a href="{{ route('home').'/kurumsal/hakkimizda' }}">Hakkımızda</a></li>
                                <li><a href="{{ route('home').'/kurumsal/sizden-gelenler' }}">Sizden Gelenler</a></li>
                                <li><a href="{{ route('kargosorgulama') }}">Kampanyalarımız</a></li>
                                <li><a href="{{ route('iletisim') }}">Bize Ulaşın</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title text-white">Ürün Kategorileri</h4>
                            <ul class="widget-body">

                                @foreach($Product_Categories->where('parent_id' , 0) as $item)
                                    <li><a href="{{ route('kategori', [$item->slug, 'id' => $item->id]) }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-left">
                    <p class="copyright text-white">Copyright © {{ date('Y') }} {{ config('app.name') }}. Sitedeki resimleri izinsiz kullanmak yasaktır.</p>
                </div>
                <div class="footer-right">
                    <figure class="payment bg-white">
                        <img src="/iyzico.png" alt="payment" width="500"/>
                    </figure>
                </div>
            </div>
        </div>


    </div>
</footer>
