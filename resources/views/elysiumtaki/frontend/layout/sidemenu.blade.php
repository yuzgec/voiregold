@foreach($Product_Categories as $item)
    <li><a href="{{ route('kategori', [$item->slug,'id' => $item->id]) }}">{{ $item->title }}</a></li>
@endforeach
{{--<li><a href="{{ route('home') }}">Kampanyalı Ürünler</a></li>
<li><a href="{{ route('home') }}">İndirimli Ürünler</a></li>
<li><a href="{{ route('home') }}">Çok Satanlar</a></li>
<li><a href="{{ route('home') }}">69TL Altı Ürünler</a></li>--}}
