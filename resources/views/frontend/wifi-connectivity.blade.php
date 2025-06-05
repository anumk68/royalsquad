@extends('includes.app')

@section('content')

<!-- Start Breadcrumb ============================================= -->
<div class="banner-area shadow theme bg-fixed text-light"
style="background-image: url(public/assets/img/banner/wifi_conectiivity_banner.jpg);">
<div class="container">
    <div class="row align-center">
        <div class="col-lg-6">
            <h1>Fast & Reliable WiFi Connectivity Services Royal Squad</h1>
            <p>Enjoy seamless, secure, and high-speed WiFi for your home or business.</p>
            <a class="btn btn-light effect btn-md wow fadeInUp btn-standard button_effect" href="{{ route('contact') }}">Get A Quote</a>
        </div>
        <div class="col-lg-6  appoinment">
            <div class="appoinment-box text-center">
                <div class="heading">
                    <h4>Appointment</h4>
                    <p>Easily schedule your appointment and let our team ensure a seamless and personalized experience for you. </p>
                </div>
                    @include('frontend.common_form.form')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<!-- Start Services Details ============================================= -->
<div class="services-details-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 content">
                <div class="thumb">
                    <img src="{{asset('public/assets/img/banner/wifi_conect_services.jpg')}}" alt="WiFi Connectivity Services">
                </div>
                <h2>Why Royal Squad’s Small Business WiFi Services?</h2>
                <p>Royal Squad’s small business WiFi services ensure fast, secure, and reliable connectivity to keep your operations running smoothly. With professional installation, advanced security, and 24/7 remote management, we provide customized solutions to meet your business needs. Experience uninterrupted internet access and maximize productivity with Royal Squad’s expert WiFi connectivity services.
                </p>
                <a class="btn btn-light effect btn-md wow fadeInUp services_btn get_service_btn btn-standard button_effect" href="{{ route('contact') }}">Get started today!</a>
                <div class="service-items text-center pb-4 ser-d">
                    <div class="row">
                    <!-- Single item -->
                    <div class="col-lg-4 col-md-6 mb-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fal fa-cogs"></i>
                            </div>
                            <div class="info">
                                <h4>Fast and Reliable Connectivity </h4>
                                <p>Enjoy seamless, high-speed WiFi with minimal downtime. Our secure and stable network ensures smooth browsing, streaming, and business operations.</p>
                            </div>
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
                                <h4>Professional Installation</h4>
                                <p>Our expert technicians provide hassle-free installation, ensuring optimal router placement and maximum coverage for uninterrupted connectivity.</p>
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
                                <h4>Remote Management</h4>
                                <p>Monitor and control your WiFi network anytime, anywhere. We offer 24/7 remote support, troubleshooting, and performance optimization for peak efficiency.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single item -->
                    <!-- Single item -->
                    </div>
                </div>
                <h3>Comprehensive WiFi Connectivity Services by Royal Squad</h3>
                <p>Royal Squad provides fast, secure, and reliable WiFi connectivity services for businesses of all sizes. From custom network setup and secure configurations to <a href="{{ route('internentconectivity') }}">home internet providers</a>, troubleshooting, and router optimization, we ensure seamless connectivity with 24/7 expert support.</p>
                <div class="row mt-4">
                    <div class="col-lg-12 col-md-4">
                        <ul class="checked-list mt-1">
                            <li>Custom Wireless Network Setup</li>
                            <li>Secure Network Implementation</li>
                            <li>Professional Installation & Configuration</li>
                            <li>Troubleshooting & Issue Resolution</li>
                            <li>WiFi Router Optimization</li>
                        </ul>
                    </div>
                </div>
                <h3>Stay Connected with Royal Squad – Get WiFi Solutions Today!</h3>
                <p>Don’t let connectivity issues slow you down! Royal Squad offers fast, secure, and reliable WiFi services tailored to your needs. We provide expert installation, troubleshooting, and 24/7 support for business or home. Upgrade your network today!</p>
                <a class="btn btn-light effect btn-md wow fadeInUp services_btn btn-standard button_effect btn-standard button_effect" href="{{ route('contact') }}">Get started today!</a>
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
                        <li><a class="active" href="{{ route('wificonnectivity') }}">WiFi Connectivity</a></li>
                        <li><a href="{{ route('databackupsservices') }}">Data Backup Services</a></li>
                        <li><a href="{{ route('programerrorscrashes') }}">Program Errors & Crashes</a></li>
                        <li><a href="{{ route('microsoftwindows') }}">Microsoft Windows</a></li>
                        <li><a href="{{ route('smartphonestablet') }}">Smartphones & Tablets</a></li>
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