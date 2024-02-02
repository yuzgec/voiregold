@extends(config('app.tema').'/frontend.layout.app')
@section('title', 'Siparişi Tamamla | '.config('app.name'))
@section('content')

    <div class="page-content" style="margin-top:50px">
        <div class="checkout">
            <div class="container">

                <form action="{{ route('kaydet') }}" method="POST" class="form checkout-form">
                    @csrf()
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="pb-2 mb-2">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Adınız<span class="text-danger">*</span> </label>
                                        <input value="{{old('name')}}" type="text" class="form-control  @if($errors->has('name')) is-invalid @endif" name="name" placeholder="Adınız" autocomplete="off">
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback">{{$errors->first('name')}}</div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label"> Soyadınız <span class="text-danger">*</span></label>
                                        <input value="{{old('surname')}}" type="text" class="form-control @if($errors->has('surname')) is-invalid @endif" name="surname" placeholder="Soyadınız" autocomplete="off">
                                        @if($errors->has('surname'))
                                            <div class="invalid-feedback">{{$errors->first('surname')}}</div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label"> Email Adresiniz</label>
                                        <input value="{{old('email')}}" type="text" class="form-control @if($errors->has('email')) is-invalid @endif"  name="email" placeholder="Email Zorunlu Değildir">
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">{{$errors->first('email')}}</div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Telefon Numaranız <span class="text-danger">*</span></label>
                                        <input value="{{old('phone')}}" type="text" class="form-control @if($errors->has('phone')) is-invalid @endif" name="phone" placeholder="Telefon Numaranız">
                                        @if($errors->has('phone'))
                                            <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">
                                            Açık Adresiniz<span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control p-5 @if($errors->has('address')) is-invalid @endif" rows="3" name="address" placeholder="Açık Adresinizi Yazınız">{{old('address')}}</textarea>
                                        @if($errors->has('address'))
                                            <div class="invalid-feedback">{{$errors->first('address')}}</div>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label"> İl <span class="text-danger">*</span></label>
                                        <select class="form-control @if($errors->has('province')) is-invalid @endif" id="city-select" name="province">
                                            <option value="">İl Seçiniz</option>
                                            @foreach($Province as $item)
                                                <option value="{{ $item->id }}" 
                                                    {{ (old('province') == $item->sehir_title) ? 'selected' : null }}>
                                                    {{ $item->sehir_title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('province'))
                                            <div class="invalid-feedback valid">{{$errors->first('province')}}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">İlçe <span class="text-danger">*</span></label>
                                         <select id="district-select" class="form-control" >
                                        </select>   
                                    </div>


                                    <div class="form-group place-order">
                                        <button type="submit" class="btn btn-dark btn-block btn-rounded">SİPARİŞİ TAMAMLA</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                            <div class="order-summary-wrapper sticky-sidebar">
                                <h3 class="title text-uppercase ls-10">SİPARİŞ SEPETİNİZ  </h3>
                                <div class="order-summary">
                                    <table class="order-table">
                                        <thead>

                                        <tr>
                                            <th colspan="2">
                                                <b>Ürün</b>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(Cart::instance('shopping')->content() as $cart)
                                        <tr class="bb-no">
                                            <td class="product-name">{{ $cart->name }} <i
                                                    class="fas fa-times"></i> <span
                                                    class="product-quantity">{{ $cart->qty }}</span></td>
                                            <td class="product-total">{{ $cart->price }}</td>
                                        </tr>
                                        @endforeach

                                        <tr class="cart-subtotal bb-no">
                                            <td>
                                                <b>Ara Toplam</b>
                                            </td>
                                            <td>
                                                <b>{{ money(Cart::instance('shopping')->subtotal()) }}₺</b>
                                            </td>
                                        </tr>
                                        </tbody>

                                        <tr class="cart-subtotal bb-no">
                                            <td>
                                                <b>Kargo Ücreti</b>
                                            </td>
                                            <td>
                                                <b>{{ cargo(Cart::instance('shopping')->total()) }}</b>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="order-total">
                                            <th>
                                                <b>Toplam</b>
                                            </th>
                                            <td>
                                                <b>{{cargoToplam(Cart::instance('shopping')->total())}}₺</b>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('customJS')


    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $(document).ready(function() {
            $('#city-select').on('change', function() {
                var cityId = $(this).val();
                $.ajax({
                    url: '/districts/' + cityId,
                    type: 'GET',
                    success: function(districts) {
                        var districtSelect = $('#district-select');
                        districtSelect.empty();

                        $.each(districts, function(key, district) {
                            districtSelect.append($('<option></option>').attr('value', district.ilce_title).text(district.ilce_title));
                        });
                    },
                    error: function(request, status, error) {
                        console.error('AJAX Error:', error);
                    }
                });
            });
        });

    </script>
@endsection
