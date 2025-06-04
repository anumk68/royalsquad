@extends('includes.app')
@section('content')
    <div class="banner-area shadow theme bg-fixed text-light" style="background-image: url(public/assets/img/banner/inter-net.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <h1>Comprehensive Internet Connectivity Solutions </h1>
                    <p>Enjoy fast, secure, and reliable internet connectivity solutions that boost productivity, streaming, gaming, and smooth online experiences for everyone.</p>
                    <a class="btn btn-light effect btn-md wow fadeInUp" href="{{ route('contact') }}">Get A Quote</a>
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
                        <img src="{{asset('public/assets/img/banner/Internet_Connectivity_service.jpg')}}" alt="internet Connectivity ">
                    </div>
                    <h2>Why Choose Royal Squad for Internet Connectivity?</h2>
                    <p>We provide best-in-class internet solutions to cater to our customers' varied needs. With lightning speed, you can enjoy smooth browsing, streaming, and gaming with less lag or buffering. Our stable connection provides uninterrupted access, supported by a strong infrastructure.
                    </p>
                    <div class="service-items text-center pb-4 ser-d">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                <div class="icon">
                                    <i class="fal fa-cogs"></i>
                                </div>
                                    <div class="info">
                                        <h4>Broadband</h4>
                                        <p>Fast and dependable internet allows you to stream, play games, and browse smoothly. It also provides fast connectivity to homes and businesses, enabling productivity and efficiency.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                    <div class="icon">
                                        <i class="fal fa-scanner-touchscreen"></i>
                                    </div>
                                    <div class="info">
                                        <h4>DSL (Digital Subscriber Line)</h4>
                                        <p>Quick internet through telephone lines, offering faster connection speeds than dial-up, suitable for homes and home businesses.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                    <div class="icon">
                                        <i class="fal fa-bolt"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Dial-up</h4>
                                        <p>Analog internet from phone lines is slower, but I tried and tested for essential internet and email if only limited options are available.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <h3>The Importance of Internet Connectivity in Business Growth </h3>
                <p>Learn about how stable internet connection revolutionizes companies in the USA. From effortless communication to increased productivity, learn the advantages of RoyalSquad. Remain competitive and innovative with solid online solutions designed for contemporary businesses. <a href="{{ route('wificonnectivity') }}">WiFi Connectivity Services </a>ensure seamless connectivity for optimal business performance. </p>
                    <h3>Future Trends in Internet Connectivity Services </h3>
                    <p>Be ahead of the rest with internet connectivity innovations in the USA. At RoyalSquad, learn how advanced technologies influence the future of internet experiences. Find solutions for quicker, safer, and more stable connections.</p>
                    <a class="btn btn-light effect btn-md wow fadeInUp services_btn" href="{{ route('contact') }}">Get a Free Consultation</a>
                </div>
                <div class="col-lg-4 sidebar">
                    <h4>Tech Services </h4>
                    <div class="sidebar-item link">
                        <ul>
                            <li><a href="{{ route('virusmalwareremoval') }}">Virus & Malware Removal</a></li>
                            <li><a  href="{{ route('computertuneups') }}">Computer Tune-Ups</a></li>
                            <li><a  href="{{ route('homenetworking') }}">Home Networking</a></li>
                            <li><a  href="{{ route('emailservices') }}">Email Services</a></li>
                            <li><a class="active" href="{{ route('internentconectivity') }}">Internet Connectivity</a></li>
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
                    <div class="sidebar-item link">
                        <ul>
                            <li><a href="{{ route('webdevelopment') }}">Web Development</a></li>
                            <li><a href="{{ route('appdevelopment') }}">App Development</a></li>
                            <li><a href="{{ route('webagency') }}">Web Agency</a></li>
                            <li><a href="{{ route('digitalmarketing') }}">Digital Marketing</a></li>
                            <li><a href="{{ route('uiuxdesign') }}">UI/UX Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection