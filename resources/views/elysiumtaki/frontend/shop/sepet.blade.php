@extends(config('app.tema').'/frontend.layout.app')
@section('content')
    <div class="page-content" style="margin-top:50px">
        <div class="container">
            <div class="row gutter-lg mb-10">
                <div class="col-lg-8 pr-lg-4 mb-6">
                    <table class="shop-table cart-table">
                        <thead>
                        <tr>
                            <th class="product-name"><span>Ürün</span></th>
                            <th></th>
                            <th class="product-price"><span>Fiyat</span></th>
                            <th class="product-quantity"><span>Adet</span></th>
                            <th class="product-subtotal"><span>Toplam</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Cart::instance('shopping')->content() as $cart)
                        <tr>
                            <td class="product-thumbnail">
                                <div class="p-relative">
                                        <a href="{{ route('urun', $cart->options->url) }}">
                                            <figure>
                                            <img src="{{ $cart->options->image }}" alt="{{ $cart->name }}">
                                            </figure>
                                        </a>
                                    <button type="submit" class="btn btn-close"><i
                                            class="fas fa-times"></i></button>
                                </div>
                            </td>
                            <td class="product-name">
                                <a href="{{ route('urun', $cart->options->url) }}">
                                    {{ $cart->name }}
                                </a>
                            </td>
                            <td class="product-price"><span class="amount">{{ $cart->price }}</span></td>
                            <td class="product-quantity">
                                <div class="input-group">
                                    <input class="quantity form-control" type="number" min="1" max="100000">
                                    <button class="quantity-plus w-icon-plus"></button>
                                    <button class="quantity-minus w-icon-minus"></button>
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="amount">$40.00</span>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="cart-action mb-6">
                        <a href="#" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                        <button type="submit" class="btn btn-rounded btn-default btn-clear" name="clear_cart" value="Clear Cart">Clear Cart</button>
                        <button type="submit" class="btn btn-rounded btn-update disabled" name="update_cart" value="Update Cart">Update Cart</button>
                    </div>

                    <form class="coupon">
                        <h5 class="title coupon-title font-weight-bold text-uppercase">Coupon Discount</h5>
                        <input type="text" class="form-control mb-4" placeholder="Enter coupon code here..." required />
                        <button class="btn btn-dark btn-outline btn-rounded">Apply Coupon</button>
                    </form>
                </div>

                <div class="col-lg-4 sticky-sidebar-wrapper">
                    <div class="sticky-sidebar">
                        <div class="cart-summary mb-4">
                            <h3 class="cart-title text-uppercase">Cart Totals</h3>
                            <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                <label class="ls-25">Subtotal</label>
                                <span>$100.00</span>
                            </div>

                            <hr class="divider">

                            <form action="{{ route('kaydet') }}" method="POST" class="form checkout-form">
                                @csrf()
                                <div class="row">
                                    <div class="col-lg-12">
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

                                                <div class="col-md-6">
                                                    <label class="form-label"> İl <span class="text-danger">*</span></label>
                                                    <select class="form-control @if($errors->has('province')) is-invalid @endif" name="province">
                                                        <option value="">İl Seçiniz</option>
                                                        @foreach($Province as $item)
                                                            <option value="{{ $item->sehir_title }}" {{ (old('province') == $item->sehir_title) ? 'selected' : null }} }}>{{ $item->sehir_title }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('province'))
                                                        <div class="invalid-feedback">{{$errors->first('province')}}</div>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">İlçe <span class="text-danger">*</span></label>
                                                    <input value="{{old('city')}}" type="text" class="form-control @if($errors->has('city')) is-invalid @endif"  name="city" placeholder="İlçe">
                                                    @if($errors->has('city'))
                                                        <div class="invalid-feedback">{{$errors->first('city')}}</div>
                                                    @endif
                                                </div>

                                                <div class="form-group mt-1"><label class="form-label"> Sipariş Notu </label>
                                                    <textarea class="form-control p-5" rows="2" name="note" placeholder="Açık Adresinizi Yazınız">{{old('note')}}</textarea>
                                                </div>

                                                <div class="form-group place-order">
                                                    <button type="submit" class="btn btn-dark btn-block btn-rounded">SİPARİŞİ TAMAMLA</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
