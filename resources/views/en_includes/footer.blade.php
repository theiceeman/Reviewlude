<footer class="footer-section">

    <!--footer top start-->
    <div class="footer-top py-5 background-img-2"
         style="background: url('{{ asset('en/img/footer-bg.png')}}')no-repeat center top / cover">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <div class="footer-nav-wrap text-white">
                        <img src="{{ asset('en/img/logo/1.png')}}" alt="footer logo" width="180" class="img-fluid mb-3">
                        <p>Sharing your experiences helps others make better choices and companies up their game. Be heard in our free and open ecosystem.</p>

                        <div class="social-list-wrap">
                            <ul class="social-list list-inline list-unstyled">
                                <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><span
                                        class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><span
                                        class="ti-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"
                                                                title="Instagram"><span class="ti-instagram"></span></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"
                                                                title="printerst"><span class="ti-pinterest"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ml-auto mb-4 mb-lg-0">
                    <div class="footer-nav-wrap text-white">
                        <h5 class="mb-3 text-white">Others Links</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="{{ route('about') }}">About</a></li>
                            <li class="mb-2"><a href="{{ route('terms') }}">Terms & Conditions </a></li>
                            <li class="mb-2"><a href="{{ route('view_categories') }}">Categories</a></li>
                            <li class="mb-2"><a href="{{ route('register_reviewer') }}">Be a Reviewer</a></li>
                            <li class="mb-2"><a href="{{ route('register_business') }}">Register Business</a></li>
                            {{-- <li class="mb-2"><a href="#">Privacy Policy</a></li>
                            <li class="mb-2"><a href="#">Terms and Conditions</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 ml-auto mb-4 mb-lg-0">
                    <div class="footer-nav-wrap text-white">
                        <h5 class="mb-3 text-white">Support</h5>
                        <ul class="list-unstyled support-list">
                            <li class="mb-2 d-flex align-items-center"><span class="ti-location-pin mr-2"></span>
                                121 King Melbourne
                                <br>Australia 3000
                            </li>
                            <li class="mb-2 d-flex align-items-center"><span class="ti-mobile mr-2"></span> <a
                                    href="tel:+61283766284"> +61 2 8376 6284</a></li>
                            <li class="mb-2 d-flex align-items-center"><span class="ti-email mr-2"></span><a
                                    href="mailto:mail@example.com"> support@trustmigo.com</a></li>
                            <li class="mb-2 d-flex align-items-center"><span class="ti-world mr-2"></span><a
                                    href="/"> www.trustmigo.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-nav-wrap text-white">
                        <h5 class="mb-3 text-white">Location</h5>
                        <img src="{{ asset('en/img/map.png')}}" alt="location map" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg pt-4 pb-4">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-6 col-lg-5"><p class="copyright-text pb-0 mb-0">Copyrights © <?php print date('Y') ?> All
                    rights reserved by
                    <a href="/">Trustmigo</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
