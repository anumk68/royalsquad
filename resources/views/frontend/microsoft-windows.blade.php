@extends('includes.app')
@section('content')

<!-- Start Breadcrumb ============================================= -->
<div class="banner-area shadow theme bg-fixed text-light"
style="background-image: url(public/assets/img/banner/Microsoft_windows_banner.jpg);">
<div class="container">
    <div class="row align-center">
        <div class="col-lg-6">
            <h1>Microsoft Windows Technical Support</h1>
            <p>Need reliable Microsoft Windows Technical Support in the USA? Royal Squad offers expert assistance for troubleshooting, installation, and optimization.</p>
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
<!-- Start Services Details============================================= -->

<div class="services-details-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 content">
                <div class="thumb">
                    <img src="{{asset('public/assets/img/banner/Microsoft_windows_services.jpg')}}" alt="windows customer support">
                </div>
                <h2>Microsoft Windows Help for Troubleshooting & Assistance</h2>
                <p>At Royal Squad, we specialize in comprehensive Microsoft Windows technical support to ensure your systems operate seamlessly. </p>
                <h3>Our services include:</h3>
                <ul>
                    <li>Expert Troubleshooting</li>
                    <li>Remote and On-Site Assistance
                    </li>
                    <li>Consultation and Advisory Services</li>
                </ul>
                <h2>Expert Microsoft Windows Troubleshooting Services</h2>
                <p>Our professional technicians provide trustworthy Microsoft Windows troubleshooting to efficiently resolve errors, crashes, and performance problems. We make operations smooth, from software bugs to <a href="{{ route('anitvirussecuritysoftware') }}">antivirus software for Windows</a>, start-up issues to system optimization. Hire us for quality assistance to boost your PC's performance and prevent it from stalling with zero downtime.</p>
                <div class="service-items text-center pb-4 ser-d">
                    <div class="row">
                    <!-- Single item -->
                    <div class="col-lg-4 col-md-6 mb-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fal fa-cogs"></i>
                            </div>
                            <div class="info">
                                <h4>24/7 Phone Assistance</h4>
                                <p>Get instant expert help for troubleshooting technical issues anytime.</p>
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
                                <h4>Live Chat Support</h4>
                                <p>Connect with professionals for quick and reliable problem resolution.</p>
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
                                <h4>Comprehensive Knowledge Hub</h4>
                                <p>Explore guides, FAQs, and forums for self-help solutions.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single item -->
                    <!-- Single item -->
                    </div>
                </div>
                <h3>Fast & Easy Fixes for Windows Errors</h3>
                <p>Windows crash troubleshooting is more straightforward and uses a step-by-step method. Begin by examining the error message and logs. Employ debugging tools to identify the problem and correct the code. Deleting buggy sections usually fixes the issue quickly.</p>
                <div class="row mt-4">
                    <div class="col-lg-6 col-md-4">
                        <h5>Technology</h5>
                        <ul class="checked-list mt-1">
                            <li>Remote Desktop Tools </li>
                            <li>Diagnostic and Monitoring Tools</li>
                            <li>Ticketing and Service Management Systems</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <h5>Services offered</h5>
                        <ul class="checked-list mt-1">
                            <li> Remote Assistance</li>
                            <li>On-Site Support</li>
                            <li>Consultation and Advisory Services</li>
                        </ul>
                    </div>
                </div>
                <h3>Expert Windows Support & Troubleshooting</h3>
                <p>A trustworthy tech support team facilitates seamless operations by diagnosing and correcting errors promptly. With sophisticated debugging tools, professionals correct problems such as syntax and runtime errors, reducing downtime and enhancing efficiency with effective, clear communication.</p>
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
                        <li><a class="active" href="{{ route('microsoftwindows') }}">Microsoft Windows</a></li>
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