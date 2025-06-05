@extends('includes.app')
@section('content')
<div class="banner-area shadow theme bg-fixed text-light"
    style="background-image: url(public/assets/img/banner/Computer.jpg);">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h1>Computer Tune-Up Service</h1>
            </div>
            <div class="col-lg-6  appoinment">
                <div class="appoinment-box text-center">
                    <div class="heading">
                        <h4>Appointment</h4>
                        <p>
                        Easily schedule your appointment and let our team ensure a seamless and personalized experience for you. 
                        </p>
                    </div>
                    @include('frontend.common_form.form')
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services-details-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 content">
                <div class="thumb">
                    <img src="{{asset('public/assets/img/banner/Computer_Tune_services.jpg')}}" alt="computer repair">
                </div>
                <h2>Boost Efficiency: Computer Tune-Up Solutions</h2>
                <p>Slowing the computer can be a frustration and detract from productivity. Computer Tune-Up Solutions maximize performance by clearing out unwanted files, correcting errors, and speeding up the system for efficient and smooth operation. </p>
                <p>Regular tune-ups prevent crashes, enhance security, and extend the life of your device. Our professional services ensure your computer runs at its best for work or leisure. Make the most of your system today and achieve peak performance!
                </p>
                <div class="service-items text-center pb-4 ser-d">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4 single-item">
                            <div class="item">
                                <div class="icon">
                                    <i class="fal fa-cogs"></i>
                                </div>
                                <div class="info">
                                    <h4>Automated & Manual Malware Removal</h4>
                                    <p>We use advanced scripts and tools to scan your website for malware quickly. Additionally, our security experts conduct thorough manual inspections. Our incident response team is ready to handle any security breach effectively.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 single-item">
                            <div class="item">
                                <div class="icon">
                                    <i class="fal fa-scanner-touchscreen"></i>
                                </div>
                                <div class="info">
                                    <h4>Rapid Response & Priority Cleanup</h4>
                                    <p>Need immediate assistance? We offer flexible subscription plans and one-time priority cleanup services to restore your website swiftly. Contact us for fast and reliable malware removal.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 single-item">
                            <div class="item">
                                <div class="icon">
                                    <i class="fal fa-bolt"></i>
                                </div>
                                <div class="info">
                                    <h4>Expert Security Analysts</h4>
                                    <p>Our skilled researchers actively monitor malware threats and attack campaigns. Our extensive expertise ensures thorough and efficient malware elimination to keep your website secure.Let me know if you'd like any further refinements!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Efficient PC Tune-Up Solutions</h4>
                <p>Boost your computer's speed and performance with our expert PC tune-up services. We remove unnecessary files, fix system errors, and optimize settings for smooth and efficient operation. Regular tune-ups enhance security, prevent crashes, and extend your PC's lifespan. Get your system running like new with our professional optimization solutions! </p>
                <div class="row mt-4">
                    <div class="col-md-6 col-md-4">
                        <h5>Types</h5>
                        <ul class="checked-list mt-1">
                            <li>Hardware Diagnostics</li>
                            <li>Registry Cleanup</li>
                            <li>Malware Removal</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-md-4">
                        <h5>Technologies</h5>
                        <ul class="checked-list mt-1">
                            <li>System Optimization Software</li>
                            <li>Automated Maintenance Scripts</li>
                            <li>Hardware Maintenance Tools</li>
                        </ul>
                    </div>
                </div>
                <h3>Complete Computer Tune-Up Service
                </h3>
                <p> Refresh your PC with our complete tune-up package. We remove junk files, correct system faults, and boost performance to lightning-fast levels. Our pros improve security, update programs, and optimize settings to avoid <a href="{{ route('programerrorscrashes') }}">program errors and crashes</a>, ensuring a smoother, more efficient computing experience. Get the performance you deserve today!
                </p>
                <div class="row thumbs">
                    <div class="col-lg-6 col-md-6">
                        <img src="public/assets/img/about/1.jpg" alt="computer repairs and service ">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('public/assets/img/about/2.jpg')}}" alt="computer repair services ">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar">
                <h4>Tech Services </h4>
                <div class="sidebar-item link">
                    <ul>
                        <li><a href="{{ route('virusmalwareremoval') }}">Virus & Malware Removal</a></li>
                        <li><a class="active" href="{{ route('computertuneups') }}">Computer Tune-Ups</a></li>
                        <li><a href="{{ route('homenetworking') }}">Home Networking</a></li>
                        <li><a href="{{ route('emailservices') }}">Email Services</a></li>
                        <li><a href="{{ route('internentconectivity') }}">Internet Connectivity</a></li>
                        <li><a href="{{ route('wificonnectivity') }}">WiFi Connectivity</a></li>
                        <li><a href="{{ route('databackupsservices') }}">Data Backup Services</a></li>
                        <li><a href="{{ route('microsoftwindows') }}">Microsoft Windows</a></li>
                        <li><a href="{{ route('programerrorscrashes') }}">Program Errors & Crashes</a></li>
                        <li><a href="{{ route('applemacios') }}">Apple Mac OS</a></li>
                        <li><a href="{{ route('smartphonestablet') }}">Smartphones & Tablets</a></li>
                        <li><a href="{{ route('trainingguidence') }}">Training & Guidance</a></li>
                        <li><a href="{{ route('printermultifunction') }}">Printers & Multifunctions</a></li>
                        <li><a href="{{ route('anitvirussecuritysoftware') }}">Antivirus & Security Software</a></li>
                        <li><a href="{{ route('softwareapplication') }}">Software Applications</a></li>
                    </ul>
                </div>
                <h4> IT Services </h4>
                <div class="sidebar-item link">
                    <ul>
                        <li><a href="{{ route('webdevelopment') }}">Web Development</a></li>
                        <li><a href="{{ route('appdevelopment') }}">App Development</a></li>
                        <!-- <li><a href="{{ route('webagency') }}">Web Agency</a></li> -->
                        <li><a href="{{ route('digitalmarketing') }}">Digital Marketing</a></li>
                        <li><a href="{{ route('uiuxdesign') }}">UI/UX Design</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection