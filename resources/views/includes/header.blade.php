    <!-- Start Header Top 

    ============================================= -->

    <div class="top-bar-area inc-pad bg-theme text-light">

        <div class="container">

            <div class="row align-center">

                <div class="col-lg-6 info">

                    <ul>

                        <li>
                            <i class="fas fa-map-marker-alt"></i> 2501 148TH AVE SE APT F5 BELLEVUE, WA 98007 USA
                        </li>

                        <li>

                            <i class="fas fa-envelope-open"></i> Info@royalsquad.us

                        </li>

                    </ul>

                </div>

                <div class="col-lg-6 text-end item-flex">

                    <div class="info">
                        <ul>
                            <li>

                                <i class="fas fa-clock"></i> Office Hours: 8:00 AM – 7:45 PM

                            </li>
                            <a href="tel:8889107098">
                            <li class="fas fa-phone">
                                        +1 8889107098
                            </li>
                            </a>

                        </ul>

                    </div>

                    <div class="social">

                        <ul>

                            <li>

                                <a href="https://www.facebook.com/royalsquadusa">

                                    <i class="fab fa-facebook-f"></i>

                                </a>

                            </li>

                            <li>

                                <a href="https://x.com/royalsquad_usa">

                                    <i class="fab fa-twitter"></i>

                                </a>

                            </li>

                            <li>

                                <a href="https://www.youtube.com/@RoyalSquadUSA">

                                <i class="fab fa-brands fa-youtube"></i>

                                </a>

                            </li>
                            <li>

                            <a href="https://www.instagram.com/royalsquadusa/">

                            <i class="fab fa-brands fa-instagram"></i>

                            </a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- End Header Top -->



    <!-- Header 

    ============================================= -->

    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs">
            <div class="container d-flex justify-content-between align-items-center">
               <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('public/assets/img/Royalsquad.us_head.webp') }}" class="logo" alt="Logo">

                    </a>

                </div>

                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <div class="collapse-header">
                        <img src="{{ asset('public/assets/img/Royalsquad.us_head.webp') }}" alt="Logo">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a class="smooth-menu" href="{{ route('home') }}">Home Support</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="{{ route('about') }}">About</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="{{ route('blogs') }}">Blog</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Tech Services </a>

                            <ul class="dropdown-menu tec">

                                <div class="main sub-menu">

                                    <div class="sub-menu">

                                        <li><a href="{{ route('virusmalwareremoval') }}">Virus & Malware Removal</a></li>

                                        <li><a href="{{ route('computertuneups') }}">Computer Tune-Ups</a></li>

                                        <li><a href="{{ route('homenetworking') }}">Home Networking</a></li>

                                        <li><a href="{{ route('emailservices') }}">Email Services</a></li>

                                        <li><a href="{{ route('internentconectivity') }}">Internet Connectivity</a></li>

                                    </div>

                                    <div class="sub-menu">

                                        <li><a href="{{ route('wificonnectivity') }}">WiFi Connectivity</a></li>

                                        <li><a href="{{ route('programerrorscrashes') }}">Program Errors & Crashes</a></li>

                                        <li><a href="{{ route('microsoftwindows') }}">Microsoft Windows</a></li>

                                        <li><a href="{{ route('smartphonestablet') }}">Smartphones & Tablets</a></li>
                                        <li><a href="{{ route('applemacios') }}">Apple Mac OS</a></li>
                                    </div>

                                    <div class="sub-menu">

                                

                                        <li><a href="{{ route('printermultifunction') }}">Printers & Multifunctions</a></li>

                                        <li><a href="{{ route('trainingguidence') }}">Training & Guidance</a></li>

                                        <li><a href="{{ route('softwareapplication') }}">Software Applications</a></li>

                                        <li><a href="{{ route('anitvirussecuritysoftware') }}">Antivirus & Security Software</a></li>



                                    </div>

                                </div>

                            </ul>

                        </li>



                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> IT Services </a>

                            <ul class="dropdown-menu">

                                <li><a href="{{ route('webdevelopment') }}">Web Development</a></li>

                                <li><a href="{{ route('appdevelopment') }}">App Development</a></li>

                                <!-- <li><a href="{{ route('webagency') }}">Web Agency</a></li> -->

                                <li><a href="{{ route('digitalmarketing') }}">Digital Marketing</a></li>

                                <!-- <li><a href="wordpress-theme-it.php">WordPress Theme</a></li> -->

                                <li><a href="{{ route('uiuxdesign') }}">UI/UX Design</a></li>

                                </ul>

                        </li>


                        <!-- <li>

                            <a class="smooth-menu" href="#blog">Blog</a>

                        </li> -->

                        <li>

                            <a class="smooth-menu" href="{{ route('contact') }}">Contact</a>

                        </li>
                        <!-- <li>

                            <a class="smooth-menu" href="">eCheque</a>

                        </li> -->

                    </ul>

                </div>
       



            </div>

            <!-- Overlay screen for menu -->

            <div class="overlay-screen"></div>

            <!-- End Overlay screen for menu -->

        </nav>

        <!-- End Navigation -->

    </header>

    <!-- End Header -->