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
                            <h4 class="icon-box-title text-white text-uppercase font-weight-bold">{{ config('app.name') }} Abone Bülteni</h4>
                            <p class="text-white">Kampanya ve yeni gelen ürünlerimizden ilk siz haberdar olun
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                    <form action="{{ route('mailsubcribes') }}" method="POST" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                        @csrf
                        <input type="email" value="{{old('email')}}" class="form-control mr-2 bg-white" name="email" id="email" placeholder="Email Adresinizi Giriniz" />
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
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <div class="widget widget-about">
                            <img src="/frontend/images/{{ config('app.tema') }}/logo_footer.png" alt="{{ config('app.name') }}" width="250"  />
                        <div class="widget-body">
                            <a href="tel:18005707777" class="widget-about-call">{{ config('settings.telefon1') }}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
