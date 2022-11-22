<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
        version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
    </svg> </a>

<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay"></div>
    <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>

    <div class="mobile-menu-container scrollable">
        <form action="{{ route('search') }}" method="get" class="input-wrapper">
            <input type="text" class="form-control" name="q" autocomplete="off" placeholder="Ürün Adı Giriniz"
                   required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>

        <a href="{{ route('home') }}" class="logo ml-lg-0">
            <img src="/frontend/images/{{ config('app.tema') }}/logo_footer.png" alt="{{ config('app.name') }}" width="200"  />
        </a>
        <div class="tab-content">
            <div class="tab-pane active" id="main-menu">
                <ul class="mobile-menu">
                    <li><a href="{{ route('home') }}">Anasayfa</a></li>
                    <li><a href="{{ route('home').'/kurumsal/hakkimizda' }}">Hakkımızda</a></li>
                    @foreach($Product_Categories->where('parent_id' , 0) as $item)
                        <li><a href="{{ route('kategori', [$item->slug,'id' => $item->id]) }}">{{ $item->title }}</a></li>
                    @endforeach
                    <li class=""><a href="{{ route('kargosorgulama') }}">Kargo Sorgulama</a></li>
                    <li class=""><a href="{{ route('iletisim') }}">Bize Ulaşın</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
