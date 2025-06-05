@extends('includes.app')

@section('content')

<div class="banner-area shadow theme bg-fixed text-light"

    style="background-image: url(public/assets/img/banner/Smartphones_tablets_banner.jpg);">

    <div class="container">

        <div class="row align-center">

            <div class="col-lg-6">

                <h1>Expert Smartphone and Tablet Technical Support

                </h1>
                <p>Experience top-notch Smartphone and Tablet Technical Support in the USA with Royal Squad. Expert troubleshooting, repairs, and setup assistance.
                </p>
                <a class="btn btn-light effect btn-md wow fadeInUp btn-standard button_effect" href="{{ route('contact') }}">Get A Quote</a>
            </div>

            <div class="col-lg-6  appoinment">
                <div class="appoinment-box text-center">
                    <div class="heading">
                        <h4>Appointment</h4>
                        <p>
                        Easily schedule your appointment and let our team ensure a seamless and personalized experience for you. </p>
                    </div>
                    @include('frontend.common_form.form')
                </div>

        
            </div>

        </div>

    </div>

</div>

<!-- End Breadcrumb -->



<!-- Start Services Details 

    ============================================= -->

<div class="services-details-area default-padding">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 content">

                <div class="thumb">

                    <img src="{{asset('public/assets/img/banner/Smartphones_tablets_services.jpg')}}" alt="Smartphone support
                    ">

                </div>

                <h2>Reliable Support for Smartphones and Tablets</h2>

                <p>Our certified tech team is fully armed with the latest tools and knowledge to help you fix smartphone and tablet hardware or software problems. We offer expert solutions to get your device back on track from slow performance, battery drain, or connectivity issues.</p>
                <p>At Royal Squad, we not only repair issues; we also teach you more about your device. Our experts will guide you through the troubleshooting process, recommend the best repair solution, and instruct you on how to avoid future problems.</p>

                <div class="service-items text-center pb-4 ser-d">

                    <div class="row">

                        <!-- Single item -->

                        <div class="col-lg-4 col-md-6 mb-4 single-item">

                            <div class="item">

                                <div class="icon">

                                    <i class="fal fa-cogs"></i>

                                </div>

                                <div class="info">

                                    <h4>Remote Assistance
                                    </h4>
                                    <p>Expert help for troubleshooting issues via secure remote access and guidance.
                                    </p></div>

                            </div>

                        </div>

                        <!-- End Single item -->

                        <!-- Single item -->

                        <div class="col-lg-4 col-md-6 mb-4 single-item">

                            <div class="item">

                                <div class="icon">

                                    <i class="fal fa-scanner-touchscreen"></i>

                                </div>

                                <div class="info">

                                    <h4>In-Store Support</h4>

                                    <p>Personalized assistance for device setup, repairs, and technical consultations.</p>
                                </div>

                            </div>

                        </div>

                        <!-- End Single item -->

                        <!-- Single item -->

                        <div class="col-lg-4 col-md-6 mb-4 single-item">

                            <div class="item">

                                <div class="icon">

                                    <i class="fal fa-bolt"></i>

                                </div>

                                <div class="info">

                                    <h4>On-Site Support</h4>

                                    <p>Certified technicians visit your location for hands-on troubleshooting solutions.</p>
                                </div>

                            </div>

                        </div>

                        <!-- End Single item -->
                         <!-- Single item -->
                         </div>

                </div>
                <h3>Troubleshoot Phone and Tablet Problems</h3>

                <p>  Our skilled team quickly identifies and resolves software bugs, connectivity problems, and <a href="{{ route('home') }}">Tablet Technical Support</a> performance issues. Using the latest tools, we ensure your smartphone and tablet function flawlessly, reducing downtime and enhancing the user experience.
               </p>
               <h3>Secure Your Smartphone and Tablet with Our Help</h3>

                <p>We also provide high-quality security solutions, including virus protection, data encryption, and backup services. Our specialists implement effective measures to safeguard your devices, ensuring privacy, reliability, and smooth performance in today's digital landscape.</p>
                <a class="btn btn-light effect btn-md wow fadeInUp services_btn btn-standard button_effect" href="{{ route('contact') }}">Get A Quote</a>

            </div>

            <div class="col-lg-4 sidebar">

                <h4>Tech Services </h4>

                <div class="sidebar-item link">

                    <ul>
                        <li><a href="{{ route('virusmalwareremoval') }}">Virus & Malware Removal</a></li>

                        <li><a  href="{{ route('computertuneups') }}">Computer Tune-Ups</a></li>

                        <li><a  href="{{ route('homenetworking') }}">Home Networking</a></li>

                        <li><a  href="{{ route('emailservices') }}">Email Services</a></li>

                        <li><a href="{{ route('internentconectivity') }}">Internet Connectivity</a></li>

                        <li><a href="{{ route('wificonnectivity') }}">WiFi Connectivity</a></li>

                        <li><a href="{{ route('databackupsservices') }}">Data Backup Services</a></li>

                        <li><a href="{{ route('programerrorscrashes') }}">Program Errors & Crashes</a></li>

                        <li><a href="{{ route('microsoftwindows') }}">Microsoft Windows</a></li>

                        <li><a class="active" href="{{ route('smartphonestablet') }}">Smartphones & Tablets</a></li>

                         <li><a href="{{ route('applemacios') }}">Apple Mac OS</a></li>

                       <li><a href="{{ route('printermultifunction') }}">Printers & Multifunctions</a></li>

                        <li><a href="{{ route('trainingguidence') }}">Training & Guidance</a></li>

                        <li><a href="{{ route('softwareapplication') }}">Software Applications</a></li>

                       <li><a href="{{ route('anitvirussecuritysoftware') }}">Antivirus & Security Software</a></li>
                    </ul>

                </div>
                <h4> IT Services </h4>

                <div class="sidebar-item link">

                    <ul>

                        <li><a href="{{ route('webdevelopment') }}">Web Development</a></li>

                        <li><a href="{{ route('appdevelopment') }}">App Development</a></li>

                        <!-- <li><a href="{{ route('webagency') }}">Web Agency</a></li> -->

                        <li><a href="{{ route('digitalmarketing') }}">Digital Marketing</a></li>

                        <!-- <li><a href="wordpress-theme-it.php">WordPress Theme</a></li> -->

                        <li><a href="{{ route('uiuxdesign') }}">UI/UX Design</a></li>
                    </ul>

                </div>
            </div>

        </div>

    </div>

</div>

<!-- End Services Details -->



@endsection