@extends('includes.app')
@section('content')
<div class="banner-area shadow heading-border dark bg-cover text-light"
    style="background-image: url(public/assets/img/banner/antivirus_security_software_banner.jpg);">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h1>Antivirus & Security Software Support | Royal Squad</h1>
            </div>
            <div class="col-lg-6  appoinment">
                <div class="appoinment-box text-center">
                    <div class="heading">
                        <h4>Appointment</h4>
                        <p>Easily schedule your appointment and let our team ensure a seamless and personalized experience for you. </p>
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
                    <img src="{{asset('public/assets/img/banner/antivirus_security_software_service.jpg')}}" alt="security software">
                </div>
                <h2>Effective Antivirus & Security Software Support by Royal Squad</h2>
              <p>​With the increasing use of technology in everyday life, securing your devices from viruses, malware, and cyber attacks is necessary. Royal Squad provides professional Antivirus and Security Software Support to provide real-time protection, <a href="{{ route('softwareapplication') }}">software application support,</a> update software, and optimize performance. Our experts offer 24/7 support to ensure your systems are safe and operate smoothly.</p>
                <div class="service-items text-center pb-4 ser-d">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4 single-item">
                            <div class="item">
                                <div class="icon">
                                    <i class="fal fa-cogs"></i>
                                </div>
                                <div class="info">
                                    <h4>Detailed Security Solutions </h4>
                                  <p>Guard your devices with the Antivirus & Security Software Support of Royal Squad. We do the installation, updates, and monitoring to protect your systems.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 single-item">
                            <div class="item">
                                <div class="icon">
                                    <i class="fal fa-scanner-touchscreen"></i>
                                </div>
                                <div class="info">
                                    <h4>Real-Time Threat Detection</h4>
                                 <p>DOutsmart cyber attacks with the latest security software. Our experts ensure your antivirus is always up to date and running at maximum levels of protection. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 single-item">
                            <div class="item">
                                <div class="icon">
                                    <i class="fal fa-bolt"></i>
                                </div>
                                <div class="info">
                                    <h4>24/7 Expert Help</h4>
                                  <p>Are you having issues? Our security experts are available 24/7 to fix security problems and maintain the smooth operation of your systems.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h5>Key Advantages of Our Antivirus & Security Software Support</h5>
                        <ul class="checked-list mt-1">
                            <li><strong>Advanced Threat Protection :</strong> Protect your devices from viruses, malware, and cyberattacks.</li>
                            <li><strong>Real-Time Monitoring & Updates :</strong> Remain secure with the most current security patches and updates.</li>
                            <li><strong>Seamless Installation & Configuration:</strong> Enjoy professional setup and optimization for your antivirus software.</li>
                            <li><strong>Performance Optimization :</strong> Keep your system safe without sacrificing speed and efficiency.</li>
                            <li><strong>24/7 Technical Support :</strong> Enjoy dependable help whenever you need it.</li>
                        </ul>
                    </div>
                </div>
                <h3>Secure Your Devices with Royal Squad – Call Us Today!</h3>
               <p>Protect your business and personal devices with Royal Squad's professional Antivirus & Security Software Support. We provide real-time protection, software updates, and 24/7 professional support to safeguard you from cyber attacks.</p>
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
                        <li><a href="{{ route('smartphonestablet') }}">Smartphones & Tablets</a></li>
                        <li><a href="{{ route('applemacios') }}">Apple Mac OS</a></li>
                        <li><a href="{{ route('printermultifunction') }}">Printers & Multifunctions</a></li>
                        <li><a href="{{ route('trainingguidence') }}">Training & Guidance</a></li>
                        <li><a href="{{ route('softwareapplication') }}">Software Applications</a></li>
                        <li><a class="active" href="{{ route('anitvirussecuritysoftware') }}">Antivirus & Security Software</a></li>
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