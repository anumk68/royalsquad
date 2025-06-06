@extends('includes.app')
@section('content')
<div class="banner-area banner_slider shadow heading-border dark bg-cover text-light">
    <div class="owl-carousel slider_banner owl-theme"> <!-- Add owl-carousel class here -->
        <div class="item-box"  style="background-image: url(public/assets/img/banner_royalsuead_1.webp);" alt="Computer repair services ">
            <div class="item">
                <div class="container">
                    <div class="row align-center">
                        <div class="col-lg-6">
                            <div class="content">
                                <h1 class="wow fadeInUp">Premium Security Solutions</h1>
                                <p class="wow fadeInLeft">
                                    From executive protection to event security, Royal Squad delivers top-tier safety solutions tailored to your needs. Trust the experts.
                                </p>
                                <a class="btn btn-light effect btn-md wow fadeInUp btn-standard button_effect" href="{{ route('contact') }}" >Get A Quote</a>
                            </div>
                        </div>
                        <div class="col-lg-6 appoinment">
                            <div class="appoinment-box text-center">
                                <div class="heading">
                                    <h4>Get a Free Quote</h4>
                                    <p>
                                    Need IT solutions? Get a free quote today for customized services that optimize your business's technology and improve efficiency.
                                    </p>
                                </div>
                                @include('frontend.common_form.form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-box" style="background-image: url(public/assets/img/banner_royalsquad_2.webp);" alt="network and support ">
            <div class="item">
                <div class="container">
                    <div class="row align-center">
                        <div class="col-lg-6">
                            <div class="content">
                                <h2 class="wow fadeInUp">Trained & Experienced Professionals </h2>
                                <p class="wow fadeInLeft">
                                    Our highly trained security professionals are ready to safeguard your business, events and assets. Experience security done right!
                                </p>
                                <a class="btn btn-light effect btn-md wow fadeInUp btn-standard button_effect" href="{{ route('contact') }}">Get A Quote</a>
                            </div>
                        </div>
                        <div class="col-lg-6 appoinment">
                            <div class="appoinment-box text-center">
                                <div class="heading">
                                    <h4>Get a Free Quote</h4>
                                    <p>
                                    Need IT solutions? Get a free quote today for customized services that optimize your business's technology and improve efficiency.
                                    </p>
                                </div>
                                @include('frontend.common_form.form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-box" style="background-image: url(public/assets/img/royal_squad_3.webp);" alt="network and support ">
            <div class="item">
                <div class="container">
                    <div class="row align-center">
                        <div class="col-lg-6">
                            <div class="content">
                                <h2 class="wow fadeInUp">Security Tailored for You </h2>
                                <p class="wow fadeInLeft">
                                    We provide corporate, residential and personal security solutions designed to meet your unique requirements. Your safety is our mission!
                                </p>
                                <a class="btn btn-light effect btn-md wow fadeInUp btn-standard button_effect" href="{{ route('contact') }}" >Get A Quote</a>
                            </div>
                        </div>
                        <div class="col-lg-6 appoinment">
                            <div class="appoinment-box text-center">
                                <div class="heading">
                                    <h4>Get a Free Quote</h4>
                                    <p>
                                    Need IT solutions? Get a free quote today for customized services that optimize your business's technology and improve efficiency.
                                    </p>
                                </div>
                                @include('frontend.common_form.form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="thumb-services-area carousel-shadow default-padding bg-gray bg-cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2 class="title">24/7 support for all tech needs.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="services-items services-carousel owl-carousel owl-theme text-center">
            <div class="item">
                <div class="icon">
                    <img src="{{asset('public/assets/img/services/system.svg')}}" alt="Remote IT support ">
                </div>
                <div class="info"> 
                    <h4>Always Available</h4>
                    <p> Our home support specialists can assist you anytime, ensuring a hassle-free experience..</p>
                    <a href="{{ route('contact') }}">Discover More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="{{asset('public/assets/img/services/team.svg')}}" alt="Small business IT support ">
                </div>
                <div class="info">
                    <h4>Comprehensive Support</h4>
                    <p> We cover all your home service needs with expert care, from maintenance to emergency fixes. </p>
                    <a href="{{ route('contact') }}">Discover More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="{{asset('public/assets/img/services/desk.svg')}}" alt="IT support services">
                </div>
                <div class="info">
                    <h4>Year-Round Service </h4>
                    <p>Enjoy uninterrupted home support, available 365 days a year—because your comfort matters. </p>
                    <a href="{{ route('contact') }}">Discover More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="{{asset('public/assets/img/services/expert.svg')}}" alt="Computer repair services ">
                </div>
                <div class="info">
                    <h4>Expert Assistance</h4>
                    <p>Get professional help for cleaning, repairs, and more—ensuring a stress-free home environment.</p>
                    <a href="{{ route('contact') }}">Discover More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-area faq-area inc-shape default-padding-bottom">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <div class="thumb">
                    <img src="{{asset('public/assets/img/about/1.webp')}}" alt="network and support">
                    <img src="{{asset('public/assets/img/about/2.webp')}}" alt="it solutions and services">
                    <div class="overlay">
                        <div class="content">
                            <h4><strong>20</strong> years of experience</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 info  about_home">
                <h2 class="title">Reliable Home Support for All Your Needs</h2>
                <p>At Royal Squad Home Support, we keep your home humming smoothly with specialized expertise dedicated to serving your daily needs. Partner with thousands of happy customers who trust us with an unconditional promise to bring timely and consistent home support solutions to the door. Our specialists are always within a phone call or a click, available to instantly respond to problems and ease your life. We mean it when we tell you that we take care of all your home support requirements. Our staff is trained to handle various services, from appliance repair to smart home installation, <a href="{{ route('homenetworking') }}">best home network setup</a>, IT support services, electrical and plumbing repairs, home security installation, and regular maintenance.
                From installing your Wi-Fi to repairing a broken connection or offering hands-on assistance for home automation, we make sure your home runs at its optimal level.
                In addition, we provide 24/7 remote and on-site support, so help is always at hand whenever you need it. No more waiting around or hassle—just quick, efficient solutions from our experienced technicians.
                With Royal Squad Home Support, professional home support is just a call, chat or email away. Enjoy convenience like never before!</p>
                <div class="faq-content accordion" id="accordionExample">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Is Home Support Right for You? </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Having your home function flawlessly has never been simpler. Our professional crew is here to help with maintenance, troubleshooting, and more, making home care a breeze.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Why Royal Squad Home Support? </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Enjoy hassle-free help designed for you. Our 24/7 professional support assists you in efficiently and professionally addressing home-related concerns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How Soon Can We Help You?
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our staff is always at hand, ready to offer instant intervention. Whether it's a minor repair or a major problem, we ensure that your home remains operational without unnecessary delays.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service-area default-padding bottom-less bg-cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4>SERVICES WE PROVIDE</h4>
                    <h2>Comprehensive Tech Support for Your Home </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="service-items text-center">
            <div class="row">
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Complete Virus & Malware Removal</h4>
                            <p> Eliminate threats and safeguard your system with our expert malware and virus removal service. </p>
                            <a class="btn-standard" href="{{ route('virusmalwareremoval') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>PC Performance Optimization</h4>
                            <p>Keep your computer running at peak efficiency with our expert tune-up services. </p>
                            <a class="btn-standard" href="{{ route('computertuneups') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Seamless Home Networking Solutions</h4>
                            <p> We resolve Wi-Fi and router issues to ensure smooth connectivity across all your devices. </p>
                            <a class="btn-standard" href="{{ route('homenetworking') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Email Setup & Troubleshooting</h4>
                            <p>Configure, manage, and secure your emails, calendars, and contacts with expert support. </p>
                            <a class="btn-standard" href="{{ route('emailservices') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Reliable Internet Connectivity Support</h4>
                            <p>Get your devices online with our expert troubleshooting for stable and fast internet.
                            </p>
                            <a class="btn-standard" href="{{ route('internentconectivity') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Wi-Fi Setup & Security</h4>
                            <p>Optimize, secure, and troubleshoot your wireless network for seamless performance.</p>
                            <a class="btn-standard" href="{{ route('wificonnectivity') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Data Backup Services</h4>
                            <p>Protect your valuable files with our reliable cloud data backup services. </p>
                            <a class="btn-standard" href="{{ route('databackupsservices') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Fix Software Errors & System Crashes</h4>
                            <p> Resolve frustrating application crashes and system issues quickly with expert guidance.</p>
                            <a class="btn-standard" href="{{ route('programerrorscrashes') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Windows OS Support & Troubleshooting</h4>
                            <p>From XP to Windows 11, we ensure your system is updated and running smoothly. </p>
                            <a class="btn-standard" href="{{ route('microsoftwindows') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Mac OS Support & Optimization</h4>
                            <p>Expert solutions for all Mac OS X versions, ensuring smooth performance and reliability.</p>
                            <a class="btn-standard" href="{{ route('applemacios') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Printer & Device Setup Assistance</h4>
                            <p>Quick setup, troubleshooting, and support for printers, scanners, and multifunction devices. </p>
                            <a class="btn-standard" href="{{ route('printermultifunction') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Personalized Training & Tech Guidance</h4>
                            <p> Learn how to use your devices with ease through step-by-step expert guidance. </p>
                            <a class="btn-standard" href="{{ route('trainingguidence') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Software Installation & Support</h4>
                            <p>Get expert help for Microsoft Office, gaming apps, and all essential software programs.</p>
                            <a class="btn-standard" href="{{ route('softwareapplication') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Antivirus & Security Solutions</h4>
                            <p>Strengthen your device security with our expert-recommended antivirus and protection services.</p>
                            <a class="btn-standard" href="{{ route('anitvirussecuritysoftware') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Smartphone & Tablet Assistance </h4>
                            <p>From setup to troubleshooting, we ensure your mobile devices work seamlessly.
                            </p>
                            <a class="btn-standard" href="{{ route('smartphonestablet') }}">Discover now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pricing_plan default-padding bottom-less bg-cover service-area pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 single-item">
                 <div class="site-heading text-center">
                    <h2>Pricing Plan</h2>
                 </div>
            </div>
        </div>
    </div> 
    <div class="container">
        <div class="service-items text-center">
        <div class="row">
            <div class="col-lg-4 col-md-6 single-item">
                <div class="item">
                    <div class="info">
                        <h3> 1 Year </h3>
                        <div class="listing">
                        <ul>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Computer Cleanup</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Computer Servicing</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Antivirus Check & Update</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>24/7 Technical Support</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Malware Scan & Removal</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Monthly Routine Checkup</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Firewall Security Update</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>System Optimization</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Network Device Malware Protection</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Wi-Fi Network Setup & Troubleshooting</li>
                        </ul> 
                        </div>
                    
                        <a class="btn-standard" href="{{route('checkout')}}">Buy Now</a>
                    </div>
                </div>        
            </div>
            <div class="col-lg-4 col-md-6 single-item">
                <div class="item">
                    <div class="info">
                        <h3> 3-5 Year </h3>
                        <div class="listing">
                        <ul>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Computer Cleanup</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Computer Servicing</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Antivirus Check & Update</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>24/7 Technical Support</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Malware Scan & Removal</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Monthly Routine Checkup</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Firewall Security Update</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>System Optimization</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Network Device Malware Protection</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Wi-Fi Network Setup & Troubleshooting</li>
                        </ul> 
                        </div>
                        <a class="btn-standard" href="{{route('checkout')}}">Buy Now</a>
                    </div>
                </div>        
            </div>
            <div class="col-lg-4 col-md-6 single-item">
                <div class="item">
                    <div class="info">
                        <h3>Lifetime</h3>
                        <div class="listing">
                        <ul>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Computer Cleanup</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Computer Servicing</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Antivirus Check & Update</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>24/7 Technical Support</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Malware Scan & Removal</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Monthly Routine Checkup</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Firewall Security Update</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>System Optimization</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Network Device Malware Protection</li>
                            <li class="plans"><i class="fa-solid fa-circle-check " style="color:#2b4dff;"></i>Wi-Fi Network Setup & Troubleshooting</li>
                        </ul> 
                        </div>
                        <a class="btn-standard" href="{{route('checkout')}}">Buy Now</a>
                    </div>
                </div>        
            </div>
        </div>
        </div>
    </div>
</div>
<div class="service-area default-padding bottom-less bg-cover servce-o">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4>Our Services</h4>
                    <h2>Innovative IT Services to Drive Your Success</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="service-items text-center">
            <div class="row">
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('public/assets/img/services/mobile.webp')}}" alt="Remote IT support ">
                        </div>
                        <div class="info">
                            <h4>App Development </h4>
                            <p>Make ideas into powerful applications through our advanced development skills. </p>
                            <a class="btn-standard" href="{{ route('appdevelopment') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('public/assets/img/services/ux.webp')}}" alt="Small business IT support ">
                        </div>
                        <div class="info">
                            <h4>UI/UX Design</h4>
                            <p>Create intuitive and visually impressive designs for frictionless user experiences.</p>
                            <a class="btn-standard" href="{{ route('uiuxdesign') }}">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('public/assets/img/services/qa.webp')}}" alt="IT support services   ">
                        </div>
                        <div class="info">
                            <h4>QA & Testing</h4>
                            <p>Provide defect-free software through our comprehensive quality assurance and testing. </p>
                            <a class="btn-standard" href="#">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('public/assets/img/services/stock.webp')}}" alt="Computer repair services ">
                        </div>
                        <div class="info">
                            <h4>IT Consultancy</h4>
                            <p>Unleash business growth with IT expertise and innovative solutions. </p>
                            <a class="btn-standard" href="#">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('public/assets/img/services/web.webp')}}" alt="network and support ">
                        </div>
                        <div class="info">
                            <h4>Dedicated Team</h4>
                            <p>Collaborate with a talented, dedicated team dedicated to the success of your project's project's success.</p>
                            <a class="btn-standard" href="#">Discover now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('public/assets/img/services/desktop.webp')}}" alt="it solutions and services">
                        </div>
                        <div class="info">
                            <h4>Web Development</h4>
                            <p>Create high-performance websites with our market-leading development skills.  </p>
                            <a class="btn-standard" href="#">Discover now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="video-area extra-padding text-center default-padding faq-area bg-gray bg-fixed shadow dark text-light" style="background-image: url(public/assets/img/banner/2.webp);">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h5>Why Choose Us</h5>
                    <h2>Why Choose Us for Your IT Services?</h2>
                    <a class="popup-youtube relative video-play-button" href="https://www.youtube.com/watch?v=owhuBrGIOsE"> <i class="fa fa-play"></i>  </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-shape-bottom">
        <img src="{{asset('public/assets/img/shape/9.webp')}}" alt="Remote IT support ">
    </div>
</div>
<div class="choose-us-area default-padding-bottom">
    <div class="container">
        <div class="items-box">
            <div class="row">
                <div class="single-item col-lg-6 col-md-6">
                    <div class="item bg-gradient text-light">
                        <div class="info">
                            <h4>24/7 Customer Support</h4>
                            <p>Get round-the-clock assistance from our expert team, ensuring seamless solutions for all your tech needs. We're always here to help! </p>
                        </div>
                    </div>
                </div>
                <div class="single-item col-lg-6 col-md-6">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <div class="info">
                            <h4>Smart solutions</h4>
                            <p>Leverage cutting-edge technology to optimize processes, enhance productivity, and drive innovation. Our intelligent solutions are designed to adapt, evolve, and deliver seamless efficiency. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonials-area carousel-shadow default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4>Testimonials</h4>
                    <h2>What People Say</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="testimonial-items">
            <div class="testimonial-carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="thumb">
                                <img src="{{asset('public/assets/img/teams/1.webp')}}" alt="Small business IT support  ">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="info col-lg-7">
                            <p>The team provided outstanding tech support, resolving my issues quickly and efficiently. Highly recommended!" </p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="provider">
                                <h4> Michael R.</h4>
                                <span>Exceptional IT Support!</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="thumb">
                                <img src="{{asset('public/assets/img/teams/2.webp')}}" alt="IT support services">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="info col-lg-7">
                            <p>Their IT expertise streamlined our operations—an exceptionally reliable and trusted partner! </p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="provider">
                                <h4>Sarah L.   </h4>
                                <span>Reliable & Professional Service  </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="thumb">
                                <img src="{{asset('public/assets/img/teams/3.webp')}}" alt="Computer repair services ">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="info col-lg-7">
                            <p>Royal Squad swiftly fixed WiFi, ensuring seamless network connectivity.</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="provider">
                                <h4>James T., Happy Customer  </h4>
                                <span>Exceptional Home Support Service </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-area overflow-hidden default-padding bg-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 contact-form-box">
                <div class="content home_contact_page">
                    <div class="heading">
                        <h2 class="title">Need Help?</h2>
                        <p>Reach out to the world’s most reliable IT services.</p>
                    </div>
                    {{-- <form action="{{ route('message') }}" method="post" class="contact-form"> --}}
                    <form action="{{ route('message') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" >
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email*" >
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" >
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="Please describe what you need."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit" class="btn-standard button_effect home_btn_bottom"> 
                                    Submit Query
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 info">
                <div class="contact-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab_1" data-bs-toggle="tab" data-bs-target="#tabs_1" type="button" role="tab" aria-controls="tabs_1" aria-selected="true">US Address</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs_1" role="tabpanel" aria-labelledby="tab_1">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p><strong>Our Location</strong>2501 148TH AVE SE APT F5 BELLEVUE,  <br>WA 98007, USA,</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            <strong>Send Us Mail</strong>
                                            Info@royalsquad.us
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    console.log("Owl Carousel is initializing...");

    $(".slider_banner").owlCarousel({
        items: 1,
        loop: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: false,
        dots: true,
        smartSpeed: 1000,
    });
});
</script>
@endsection