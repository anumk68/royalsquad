@extends('includes.app')
@section('content')
<div class="banner-area shadow theme bg-fixed text-light"
    style="background-image: url(public/assets/img/banner/HOME-NET.jpg);">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h1>Home Networking Solutions</h1>
            </div>
            <div class="col-lg-6  appoinment">
                <div class="appoinment-box text-center">
                    <div class="heading">
                        <h4>Appointment</h4>
                        <p> Easily schedule your appointment and let our team ensure a seamless and personalized experience for you.  </p>
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
                    <img src="{{asset('public/assets/img/banner/home_network_services.jpg')}}" alt="Home Networking Solutions ">
                </div>
                <h2>Reliable Home Network Configuration
                </h2>
                <p>Enjoy fast, secure, and uninterrupted connectivity with our professional home network setup. We optimize your Wi-Fi, eliminate dead zones, and enhance network security for seamless performance. Whether for work, streaming, or gaming, we ensure a stable and reliable connection across all your devices. Stay connected without interruptions! </p>
                <div class="service-items text-center pb-4 ser-d">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4 single-item">
                            <div class="item">
                                <div class="icon">
                                    <i class="fal fa-cogs"></i>
                                </div>
                                <div class="info">
                                    <h4>Advanced Network Security</h4>
                                    <p>We use powerful tools and manual analysis to detect and remove threats, ensuring your network stays protected. Our expert incident response team is ready to handle any security breaches effectively.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 single-item">
                            <div class="item">
                                <div class="icon">
                                    <i class="fal fa-scanner-touchscreen"></i>
                                </div>
                                <div class="info">
                                    <h4>Seamless Guest Network Setup</h4>
                                    <p>We make it easy to set up a secure and separate guest network. We help you configure access controls, optimize speed, and ensure a safe browsing experience for your guests.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 single-item">
                            <div class="item">
                                <div class="icon">
                                    <i class="fal fa-bolt"></i>
                                </div>
                                <div class="info">
                                    <h4>Expert Network Troubleshooting</h4>
                                    <p>Are you experiencing connectivity issues? Our specialists diagnose and resolve network problems quickly, ensuring stable and efficient performance for your home or business. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>Effective Home Network Management</h3>
                <p>​​Ensure a fast, secure, and reliable home network with our expert management services. We optimize Wi-Fi performance, enhance security, and eliminate connectivity issues. Our team configures routers, sets up guest networks, <a href="{{ route('internentconectivity') }}">home internet providers</a>, and troubleshoots problems for seamless internet access. Enjoy uninterrupted streaming and gaming, and work with a well-managed network. Stay connected with confidence!
                </p>
                <h3>Comprehensive Home Networking IT Support </h3>
                <p>Ensure a fast, secure, and reliable home network with our expert IT support services. We assist with router setup, Wi-Fi optimization, and troubleshooting connectivity issues. Our team enhances network security, prevents cyber threats, and eliminates dead zones for seamless coverage. We ensure smooth and uninterrupted connectivity for work, streaming, or gaming. We also provide guest network setup and parental controls for added security. Enjoy a hassle-free networking experience with our professional support. Stay connected with confidence!
                </p>
            </div>
            <div class="col-lg-4 sidebar">
                <h4>Tech Services </h4>
                <div class="sidebar-item link">
                    <ul>
                        <li><a href="{{ route('virusmalwareremoval') }}">Virus & Malware Removal</a></li>
                        <li><a  href="{{ route('computertuneups') }}">Computer Tune-Ups</a></li>
                        <li><a class="active" href="{{ route('homenetworking') }}">Home Networking</a></li>
                        <li><a href="{{ route('emailservices') }}">Email Services</a></li>
                        <li><a href="{{ route('internentconectivity') }}">Internet Connectivity</a></li>
                        <li><a href="{{ route('wificonnectivity') }}">WiFi Connectivity</a></li>
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
                <div class="sidebar-item link">  <ul>
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