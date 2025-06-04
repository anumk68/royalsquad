@extends('includes.app')
@section('content')
    <div class="banner-area shadow theme bg-fixed text-light" style="background-image: url(public/assets/img/banner/data_backup_banner.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <h1>Modern Data Backup Solutions by Royal Squad
                    </h1>
                    <p>Royal Squad provides secure WiFi and data backup solutions to protect your business from threats and data loss</p>
                </div>
                <div class="col-lg-6  appoinment">
                    <div class="appoinment-box text-center">
                        <div class="heading">
                            <h4>Appointment</h4>
                            <p>
                                Country man his pressed shewing. No gate dare rose he. Eyes year if miss he as upon
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
                        <img src="{{asset('public/assets/img/banner/data_backup_service.jpg')}}" alt="Thumb">
                    </div>
                    <h2>Why Choose Royal Squad’s Modern Data Backup Solutions?
                    </h2>
                    <p> Royal Squad’s Modern Data Backup Solutions ensure your business data stays secure, accessible, and protected from cyber threats, accidental loss, or system failures. With reliable cloud storage, automated backups, and quick recovery options, we help you safeguard critical information effortlessly. Trust Royal Squad for seamless data protection and peace of mind.
                    </p>
                    <div class="service-items text-center pb-4 ser-d">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                <div class="icon">
                                    <i class="fal fa-cogs"></i>
                                </div>
                                    <div class="info">
                                        <h4>Automated & Secure Backups
                                        </h4>
                                        <p> Never lose essential files with scheduled, encrypted backups.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                    <div class="icon">
                                        <i class="fal fa-scanner-touchscreen"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Cloud & On-Premises Storage </h4>
                                        <p>Store your data securely in the cloud or local servers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                    <div class="icon">
                                        <i class="fal fa-bolt"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Disaster Recovery Solutions
                                        </h4>
                                        <p>Recover data quickly in case of accidental loss or cyberattacks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <h3>Royal Squad’s Key Data Backup Features
                </h3>
                <p>Royal Squad provides advanced data backup solutions to safeguard your business from data loss, cyber threats, and system failures. Our services include:
                </p>
                <div class="row mt-4">
                    <div class="col-lg-12 col-md-4">
                        <h5>Technology</h5>
                        <ul class="checked-list mt-1">
                            <li> Automated Backups  </li>
                            <li>Cloud & On-Premises Storage
                            </li>
                            <li>Fast Data Recovery
                            </li>
                            <li>End-to-End Encryption 
                            </li>
                            <li>24/7 Monitoring & Support</li>
                        </ul>
                    </div>
                </div>
                <h3>Secure Your Business Data with Royal Squad!
                </h3>
                  <p>Don’t risk losing your valuable files! Royal Squad provides WiFi Connectivity Services and Modern Data Backup Solutions, ensuring safe storage, disaster recovery, and 24/7 expert support. </p>
                  <a class="btn btn-light effect btn-md wow fadeInUp services_btn" href="{{ route('contact') }}">Call Now Today </a>
                </div>
                <div class="col-lg-4 sidebar">
                    <h4>Tech Services </h4>
                    <div class="sidebar-item link">
                        <ul>
                            <li><a href="{{ route('virusmalwareremoval') }}">Virus & Malware Removal</a></li>
                            <li><a  href="{{ route('computertuneups') }}">Computer Tune-Ups</a></li>
                            <li><a  href="{{ route('homenetworking') }}">Home Networking</a></li>
                            <li><a href="{{ route('emailservices') }}">Email Services</a></li>
                            <li><a href="{{ route('internentconectivity') }}">Internet Connectivity</a></li>
                            <li><a href="{{ route('wificonnectivity') }}">WiFi Connectivity</a></li>
                            <li><a class="active" href="{{ route('databackupsservices') }}">Data Backup Services</a></li>
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
                    <div class="sidebar-item banner">
                        <div class="thumb">
                            <img src="{{asset('public/assets/img/banner/services_main_10.jpg')}}" alt="Thumb">
                            <div class="content">
                                <h5>Have Additional Questions?</h5>
                                <h3><i class="fas fa-phone"></i> +123 456 7890</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection