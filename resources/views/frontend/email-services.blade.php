@extends('includes.app')
@section('content')
    <div class="banner-area shadow theme bg-fixed text-light" style="background-image: url(public/assets/img/banner/email-se.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <h1>Email Services</h1>
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
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 content">
                    <div class="thumb">
                        <img src="{{asset('public/assets/img/banner/email_services.jpg')}}" alt="best email services">
                    </div>
                    <h2>Reliable & Secure Email Solutions</h2>
                    <p>Simplify your communication with our expert email services for security and efficiency. We offer effortless email setup, spam filtering, and encrypted messaging for uninterrupted workflow. Our solutions provide quick and secure email delivery for business and personal use. Stay safe from cyber attacks with our premium security features. Enjoy effortless email management with our expert assistance!</p>
                    <div class="service-items text-center pb-4 ser-d">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4 single-item">
                                <div class="item">
                                <div class="icon">
                                    <i class="fal fa-cogs"></i>
                                </div>
                                    <div class="info">
                                        <h4>Business Email Services</h4>
                                        <p>Enhance your professional communication with our secure and reliable business email solutions. We provide customized email setups, spam protection, and seamless integration to ensure smooth operations. Stay connected with a professional email system tailored to your needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 single-item">
                                <div class="item">
                                    <div class="icon">
                                        <i class="fal fa-scanner-touchscreen"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Cloud-Based Email Services</h4>
                                        <p>Access your emails anytime, anywhere with our cloud-based email solutions. We offer secure, scalable, high-performance email services that keep your business running smoothly. Enjoy automatic backups, enhanced security, and effortless collaboration.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 single-item">
                                <div class="item">
                                    <div class="icon">
                                        <i class="fal fa-bolt"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Enterprise Email Services</h4>
                                        <p>Our enterprise-grade email solutions deliver robust security, high deliverability, and seamless integration with business tools. We ensure advanced threat protection, efficient email management, and reliable performance for large-scale operations. Keep your organization’s communication secure and efficient.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Essential Features of Leading Email Services
                    </h3>
                    <p>Best email services provide safe, quick, and dependable communication with sophisticated spam filtering and encryption. With <a href="{{ route('home') }}">IT support and services</a>, they integrate smoothly with business applications for increased productivity. Cloud-based access makes emails accessible anywhere, anytime. Automated backup and strong security features safeguard against cyber attacks. Enjoy efficient and trouble-free email management with state-of-the-art technology!
                    </p>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-md-4">
                            <h5>Technologies</h5>
                            <ul class="checked-list mt-1">
                                <li>Webmail Interfaces </li>
                                <li>POP (Post Office Protocol) and IMAP </li>
                                <li>SMTP (Simple Mail Transfer Protocol)</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <h5>Types</h5>
                            <ul class="checked-list mt-1">
                                <li>Business Email Services</li>
                                <li>Secure Email Services</li>
                                <li>Cloud-Based Email Services</li>
                            </ul>
                        </div>
                    </div>
                    <h3>How Our Email Services Work </h3>
                    <p>Our safe and reliable email services provide uninterrupted communication for companies and individuals. We set up professional email accounts with sophisticated spam filtering and encryption. Our cloud-based system enables easy access from any device, providing reliability and security. Your data is secured by automated backups, and real-time monitoring stops cyber attacks. Enjoy smooth, trouble-free email management with our expert assistance! </p>
                </div>
                <div class="col-lg-4 sidebar">
                    <h4>Tech Services </h4>
                    <div class="sidebar-item link">
                        <ul>
                            <li><a href="{{ route('virusmalwareremoval') }}">Virus & Malware Removal</a></li>
                            <li><a  href="{{ route('computertuneups') }}">Computer Tune-Ups</a></li>
                            <li><a  href="{{ route('homenetworking') }}">Home Networking</a></li>
                            <li><a class="active" href="{{ route('emailservices') }}">Email Services</a></li>
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