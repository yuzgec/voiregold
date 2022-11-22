<div class="sticky-footer sticky-content fix-bottom fixed">
    <a href="{{ route('home') }}" class="sticky-link active">
        <i class="w-icon-home"></i>
        <p>Anasayfa</p>
    </a>
    <a href="{{ route('home').'kategori/bileklikler?id=1' }}" class="sticky-link">
        <i class="w-icon-category"></i>
        <p>Kategoriler</p>
    </a>

    <div class="cart-dropdown dir-up">
        <a href="{{ route('sepet') }}" class="sticky-link">
            <i class="w-icon-cart"></i>
            <p>Sepet</p>
        </a>
    </div>

    <div class="header-search hs-toggle dir-up">
        <a href="#" class="search-toggle sticky-link">
            <i class="w-icon-search"></i>
            <p>Arama</p>
        </a>
        <form action="{{ route('search') }}" method="get" class="input-wrapper">
            <input type="text" class="form-control" name="q" autocomplete="off" placeholder="Arama"
                   required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
    </div>
</div>

<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
    </svg>
</a>

<script src="/frontend/vendor/jquery/jquery.min.js"></script>
<script src="/frontend/vendor/sticky/sticky.min.js"></script>
<script src="/frontend/vendor/jquery.plugin/jquery.plugin.min.js"></script>
<script src="/frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/frontend/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/frontend/vendor/photoswipe/photoswipe.js"></script>
<script src="/frontend/vendor/photoswipe/photoswipe-ui-default.min.js"></script>

{{--
<script src="/frontend/vendor/zoom/jquery.zoom.js"></script>
--}}

<script src="/frontend/js/main.js"></script>
