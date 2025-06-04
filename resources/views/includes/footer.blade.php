  <!-- Start Footer 

    ============================================= -->

    <footer class="bg-dark text-light">

        <!-- Fixed Shape -->

        <div class="fixed-shape">

            <img src="{{ asset('public/assets/img/map.svg') }}" alt="Logo">
        </div>

        <!-- Fixed Shape -->

        <div class="container">
   
            <div class="f-items default-padding">

                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">

                            <img src="{{ asset('public/assets/img/Royalsquad.us_head.webp') }}" alt="Logo">

                            <p>
                                RoyalSquad offers expert IT solutions, web design, digital marketing, and app development to help businesses grow. Enhance your online presence with our professional services.

                           </p>

                            <form action="#">

                                <input type="email" placeholder="Your Email" class="form-control" name="email">

                                <button type="submit"> <i class="fa fa-paper-plane"></i></button>  

                            </form>

                        </div>

                    </div>

                    <div class="col-lg-2 col-md-6 item">

                        <div class="f-item link">

                            <h4 class="widget-title">Tech Services</h4>

                            <ul>

                                <li>

                                    <a href="{{ route('computertuneups') }}">Computer Tune-Ups</a>

                                </li>

                                <li>

                                    <a href="{{ route('homenetworking') }}">Home Networking</a>

                                </li>

                                <li>

                                    <a href="{{ route('emailservices') }}">Email Services</a>

                                </li>

                                <li>

                                    <a href="{{ route('internentconectivity') }}">Internet Connectivity</a>

                                </li>

                                <li>

                                    <a href="{{ route('microsoftwindows') }}">Microsoft Windows</a>

                                </li>

                               

                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-2 col-md-6 item">

                        <div class="f-item link">

                            <h4 class="widget-title">IT Services</h4>

                            <ul>

                                <li>

                                    <a href="{{ route('webdevelopment') }}">Web Development</a>

                                </li>

                                <li>

                                    <a href="{{ route('appdevelopment') }}">App Development</a>

                                </li>

                                <!-- <li>

                                    <a href="{{ route('webagency') }}">Web Agency</a>

                                </li> -->

                                <li>

                                    <a href="{{ route('digitalmarketing') }}">Digital Marketing</a>

                                </li>

                                <li>

                                    <a href="{{ route('uiuxdesign') }}">UI/UX Design</a>

                                </li>

                                

                            </ul>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6 item">

                        <div class="f-item">

                            <h4 class="widget-title">Contact Info</h4>

                            <div class="address">

                                <ul>

                                    <li>

                                        <strong>Address:</strong>

                                        2501 148TH AVE SE APT F5 BELLEVUE, WA 98007, USA

                                    </li>

                                    <li>

                                        <strong>Email:</strong>

                                        <a href="mailto:Info@royalsquad.us">Info@royalsquad.us</a>

                                    </li>
                                     <li>

                                        <strong>Phone NUmber:</strong>

                                        <a href="tel:8889107098">+1 8889107098</a>

                                    </li>

                                </ul>

                            </div>

                         

                        </div>

                    </div>



                </div>

            </div>

        </div>

        <!-- Start Footer Bottom -->

        <div class="footer-bottom">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-md-4">

                        <p>© 2025, Royalsquad.us All Rights Reserved.</p>

                    </div>

                    <div class="col-md-4 text-start link">

                        <ul>

                        

                            <li>

                                <a href="{{ route('privacypolicy') }}">Privacy Policy</a>

                            </li>
                            <li>

                                <a href="{{ route('refundpolicy') }}">Refund policy</a>

                                </li>
                            <li>

                                <a href="{{ route('terms') }}">Terms & Conditions</a>

                            </li>

                        </ul>

                    </div>

                    <div class="col-lg-4">
                        <div class="card_f">
                        <img src="{{ asset('public/assets/img/footer_card.webp') }}" alt="">
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- End Footer Bottom -->

    </footer>

    <!-- End Footer -->



