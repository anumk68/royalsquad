@extends('includes.app')

@section('content')

<div class="banner-area shadow theme bg-fixed text-light"

    style="background-image: url(public/assets/img/banner/Training_guidance_banner.jpg);">

    <div class="container">

        <div class="row align-center">

            <div class="col-lg-6">

                <h1>Technical Support Professional Training and Certification</h1>

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

                    <img src="{{asset('public/assets/img/banner/Training_guidance_services.jpg')}}" alt="it support certification
                    ">

                </div>

                <h2>Boost Your IT Career with Expert Training & Certification
                </h2>

                <p> Royal Squad offers Technical Support, Professional Training, and Certification programs to equip you with the skills needed for a successful IT career. Our courses cover hardware troubleshooting, network security, <a href="{{ route('softwareapplication') }}">software support</a>, and customer service, ensuring you become a certified tech support professional.

                </p>

                <div class="service-items text-center pb-4 ser-d">

                    <div class="row">

                        <div class="col-lg-4 col-md-6 single-item">

                            <div class="item">

                                <div class="icon">

                                    <i class="fal fa-cogs"></i>

                                </div>

                                <div class="info">

                                    <h4>Technical Support Training Expert</h4>
                                    <p>Through our Technical Support Professional Training, you will gain an in-depth understanding of hardware troubleshooting, network security, and software support. Learn from experts and practice with hands-on experience to establish a solid IT foundation.
                                    </p>



                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-6 single-item">

                            <div class="item">

                                <div class="icon">

                                    <i class="fal fa-scanner-touchscreen"></i>

                                </div>

                                <div class="info">

                                    <h4>Get Certified & Enhance Your Career

                                    </h4>

                                    <p>Gain an industry-certified credential that opens doors to better job opportunities. Our Technical Support Certification proves your expertise and sets you apart in the cutthroat IT job market.
                                    </p>



                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-6 single-item">

                            <div class="item">

                                <div class="icon">

                                    <i class="fal fa-bolt"></i>

                                </div>

                                <div class="info">

                                    <h4>Flexible Learning & Career Support


                                    </h4>
                                     <p>You can select online or in-class training and learn at your own pace. We also offer resume development and job placement services to assist you in finding your ideal IT support position.</p>
                                    </div>

                            </div>

                        </div>

                   </div>

                </div>
                <h3>Comprehensive Training for Technical Support Professionals
                </h3>

                <p>Master the skills needed for a successful IT career with Royal Squad’s Technical Support Training. Our program covers hardware troubleshooting, network security, software support, and customer service. Get hands-on experience, industry-recognized certification, and career support to excel in the tech industry.
                </p>

                <div class="row mt-4">

                    <div class="col-lg-12 col-md-12">

                                   <ul class="checked-list mt-1">

                            <li><strong>Hands-on IT Training</strong> – Learn hardware troubleshooting, network security, and software support. </li>

                            <li><strong> Industry Certification</strong> – Gain recognized credentials to boost your career prospects </li>
                            <li><strong>Flexible Learning</strong> – Choose from online or in-person training to fit your schedule.
                            </li>
                            <li><strong>Career Assistance</strong> –Get resume-building support and job placement guidance.
                            </li>

                        </ul>

                    </div>


                </div>

                <h3>Get Certified with Royal Squad – Boost Your IT Career!



                </h3>

                <p>Take the next step in your tech career with Royal Squad's Technical Support Professional Training and Certification. Learn in-demand skills, get hands-on experience, and an industry-recognized certification to advance your IT support career. Our courses, taught by experts, prepare you for real-world challenges and job prospects.



                </p>

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

                        <li><a class="active" href="{{ route('trainingguidence') }}">Training & Guidance</a></li>

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