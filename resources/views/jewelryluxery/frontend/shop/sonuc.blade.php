@extends(config('app.tema').'/frontend.layout.app')
@section('customCSS')
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ config('settings.facebookPixel') }}');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"  src="https://www.facebook.com/tr?id={{ config('settings.facebookPixel') }}&ev=PageView&noscript=1"/></noscript>

    <script>fbq('track', 'Purchase', {value: 1, currency: 'TRY'});</script>
    @endsection
@section('content')
    <div class="page-content mb-10 pb-2" style="margin-top:10px">
        <div class="container">
            <div class="order-success text-center font-weight-bolder text-dark">
                <i class="fas fa-check"></i>
                Siparişiniz başarıyla oluşturulmuştur.
            </div>
            <div class="alert alert-icon alert-inline  mt-2">
                <i class="w-icon-exclamation-triangle"></i>
                <strong>Not: </strong>Tanıtım kampanyamıza başarıyla katıldınız. Müşteri temsilcimiz mesai saatleri içerisinde sizi <b>{{ config('settings.telefon2') }}</b>
                numaralı telefonumuzdan arayıp adres teyidi yapacaktır. Hediyeniz sonra kargoya verilecektir. Adres yetidi yapılmayan başvurular geçersiz sayılacaktır. Lütfen telefonunuzu açınız.
            </div>


        {{--    <ul class="order-view list-style-none">
                <li>
                    <label>Sipariş No</label>
                    <strong>945</strong>
                </li>
                <li>
                    <label>Durumu</label>
                    <strong>Onay Bekliyor</strong>
                </li>
                <li>
                    <label>Toplam</label>
                    <strong>1</strong>
                </li>

            </ul>


            <div class="order-details-wrapper mb-5">
                <table class="order-table">
                    <tbody>
                    <tr>
                        <td>
                            <a href="#">Palm Print Jacket</a>&nbsp;<strong>x 1</strong><br>
                        </td>
                        <td>$40.00</td>
                    </tr>


                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Ara Toplam:</th>
                        <td>$100.00</td>
                    </tr>
                    <tr>
                        <th>Kargo:</th>
                        <td>Flat rate</td>
                    </tr>
                    <tr>
                        <th>Ödeme:</th>
                        <td>Kapıda Ödeme</td>
                    </tr>
                    <tr class="total">
                        <th class="border-no">Toplam:</th>
                        <td class="border-no">$100.00</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
--}}

            <a href="{{ route('home') }}" class="btn btn-dark btn-rounded btn-icon-left btn-back mt-6" title="Anasayfaya Dön"><i class="w-icon-long-arrow-left"></i>Anasayfa</a>

        </div>
    </div>
@endsection
