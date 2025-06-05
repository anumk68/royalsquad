@extends('includes.app')
@section('content')
    <div class="banner-area shadow theme bg-fixed text-light" style="background-image: url(public/assets/img/banner/App_devlopment_agency_banner.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <h1>App Devlopment Agency in USA</h1>
                    <p>As a USA-award-winning mobile application and <a class="web_main" href="{{ route('webdevelopment') }}">web development company</a>, we drive results through knowledge, innovation, and professionalism. We craft strong, effective business solutions that improve experiences, fuel growth, and realize measurable success industries-wide.
                    </p>
                    <a class="btn btn-light effect btn-md wow fadeInUp btn-standard button_effect" href="{{ route('contact') }}">Get A Quote</a>
                </div>
            <div class="col-lg-6  appoinment">
                <div class="appoinment-box text-center">
                    <div class="heading">
                        <h4>Appointment</h4>
                        <p>Easily schedule your appointment and let our team ensure a seamless and personalized experience for you.</p>
                    </div>
                    @include('frontend.common_form.form')
                </div>        
            </div>
            </div>
        </div>
    </div>
<section class="about_app_devlop default-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about_app_img">
                    <img src="https://royalsquad.us/public/assets/img/app_devlopment_aboutmain.jpg" alt="mobile app development company in usa">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content_devlop_app">
                    <h2>iOS App Development</h2>
                    <p>Here at Royal Squad, we specialize in developing high-performance iOS apps to fulfill contemporary enterprises' changing requirements. Through more than a decade of experience, we have led the way in iOS app development, constantly innovating to provide hassle-free and efficient solutions.</p>
                    <p>Our team is dedicated to building user-friendly, feature-rich applications that run flawlessly across all Apple devices and ensure compatibility with the latest iOS versions.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about_app_devlop default-padding pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="content_devlop_app">
                    <h2>Android App Development</h2>
                    <p>At Royal Squad, we are committed to providing high-performance Android apps customized to suit your business requirements. Our team of experienced and talented Android developers is skilled at creating innovative, user-friendly, and feature-packed mobile apps that can make a difference in today's competitive world.</p>
                    <p>We use the most current Android technologies to stay ahead of industry trends. Our applications deliver smooth functionality and an excellent user experience. We thoroughly examine every concept from idea to rollout, designing technical solutions that meet today's business needs.</p>
                    <a class="btn btn-light effect btn-md wow fadeInUp services_btn btn-standard button_effect" href="{{ route('contact') }}">Learn More</a>    
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_app_img">
                    <img src="https://royalsquad.us/public/assets/img/represent_main_ios.jpg" alt="mobile app development services">
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 content">                 
                    <div class="site-heading text-center">
                      <h2>Our Mobile App Development Services in USA</h2>
                    </div>
                    <div class="container">
                        <div class="service-items text-center">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                    <div class="icon">
                                    <img src="{{asset('public/assets/img/services/mobile.png')}}" alt="mobile app development company">
                                    </div>
                                        <div class="info">
                                            <h4>iOS App Development
                                            </h4>
                                            <p>Harness the strength of iOS with our state-of-the-art iOS app development services. We are experts in developing high-performance, visually appealing, intuitive applications that enable businesses to grow in the competitive US market. Our solutions provide a smooth user experience on Apple devices.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                        <div class="icon">
                                            <img src="{{asset('public/assets/img/services/ux.png')}}" alt="mobile application development">
                                        </div>
                                        <div class="info">
                                           <h4>Android App Development</h4>
                                           <p>Maximize your reach with our robust Android app development. We develop scalable, modular, and feature-rich Android apps aligned with your business objectives. Our skilled team makes your app shine with innovative designs and seamless performance.
                                           </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                        <div class="icon">
                                            <img src="{{asset('public/assets/img/services/qa.png')}}" alt="app development agency">
                                        </div>
                                        <div class="info">
                                            <h4>Java Mobile App Development</h4>
                                         <p>Leverage the power of Java for secure and scalable mobile apps. Our Java mobile app development services are geared towards providing dependable, high-performance business apps that conform to industry standards and increase user engagement.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                        <div class="icon">
                                            <img src="{{asset('public/assets/img/services/stock.png')}}" alt="mobile application development">
                                        </div>
                                        <div class="info">
                                            <h4>Flutter App Development</h4>
                                          <p>Build cross-platform apps easily using our Flutter app development solutions. We design high-performance, single-codebase applications that run smoothly on iOS and Android, providing companies with cost-efficient and time-saving solutions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                        <div class="icon">
                                            <img src="{{asset('public/assets/img/services/web.png')}}" alt="mobile app development company in usa">
                                        </div>
                                        <div class="info">
                                            <h4>Swift Mobile App Development</h4>
                                        <p>Boost your Apple ecosystem with our Swift mobile app development solutions. We develop high-speed, seamless, intuitive applications for iPhones and iPads, providing best-in-class performance with Apple's cutting-edge programming language.</p>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                        <div class="icon">
                                            <img src="{{asset('public/assets/img/services/desktop.png')}}" alt="mobile app development services">
                                        </div>
                                        <div class="info">
                                          <h4>React Native App Development</h4>
                                          <p>Leverage our React Native mobile app development expertise to build practical cross-platform applications. We offer quick, budget-friendly, and scalable solutions that operate flawlessly on Android and iOS, enabling enterprises to cut development time without diminishing quality.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           <a class="btn btn-light effect btn-md wow fadeInUp services_btn btn-standard button_effect" href="{{ route('contact') }}">Get a Free Consultation</a>    
                    </div>

                 
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
                            <li><a href="{{ route('anitvirussecuritysoftware') }}">Antivirus & Security Software</a></li>
                        </ul>
                    </div>
                    <h4> IT Services </h4>
                    <div class="sidebar-item link">
                        <ul>
                            <li><a href="{{ route('webdevelopment') }}">Web Development</a></li>
                            <li><a class="active" href="{{ route('appdevelopment') }}">App Development</a></li>
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