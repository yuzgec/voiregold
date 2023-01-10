<footer class="footer-area pt-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget footer-widget-limegreen footer-black-color mb-40">

                    <div class="footer-title footer-title-color-2 mb-30">
                        <h4>Kıblegah Aile Oyunları</h4>
                    </div>

                        <div class="logo logo-mrg">

                            <a href="{{ route('home') }}" >
                                <img src="/kiblegah/img/{{ config('app.tema') }}/logo.png" alt="{{ config('app.name') }}" width="200"  />
                            </a>
                        </div>


                        <div class="social-icon mr-40">
                            <ul>
                                <li><a class="facebook" href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a class="instagram" href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                </div>
            </div>
                <div class="col-lg-4 col-md-6">
                <div class="footer-widget footer-widget-limegreen footer-black-color mb-40">
                    <div class="footer-title footer-title-color-2 mb-30">
                        <h4>Hakkımızda</h4>
                    </div>
                    <div class="footer-about">


                        <p>Kıblegah Aile Oyunları olarak çocuklarımız için eğitici ve öğretici ve eğlenceli vakitler geçirebileceği oyun setleri üretimi yapmaktayız</p>
                    </div>

                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="footer-widget footer-widget-limegreen footer-black-color mb-40">
                    <div class="footer-title footer-title-color-2 mb-30">
                        <h4>Contact Us</h4>
                    </div>
                    <div class="footer-contact">
                        <ul>
                            <li>Address: 123 Main Street, Anytown, CA 12345 - USA.</li>
                            <li>Telephone Enquiry: (012) 800 456 789-987</li>
                            <li>Email: <a href="#">Contact@example.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom border-top-2 pb-25 pt-25">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center copyright-limegreen footer-black-color">
                        <p>Copyright © <a href="#">{{ config('app.name') }}</a>. Tüm hakları saklıdır.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
