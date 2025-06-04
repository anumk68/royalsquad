@extends('includes.app')

@section('content')

    <div class="banner-area shadow theme bg-fixed text-light" style="background-image: url(public/assets/img/banner/Web_agency_banner.jpg);">

        <div class="container">

            <div class="row align-center">

                <div class="col-lg-6">

                    <h1>Top Web Development Agency in the USA

                    </h1>
                    <p>Seeking the best web development company in the USA? We provide state-of-the-art, bespoke websites optimized for your business requirements. Obtain creative designs, smooth functionality, and professional development. Enhance your web presence with our winning services now!
                    </p>
                    <a class="btn btn-light effect btn-md wow fadeInUp" href="{{ route('contact') }}">Get A Quote</a>
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
    <div class="works-about-area overflow-hidden">

        <div class="container">

            <div class="works-about-items default-padding">

                <div class="row align-center">

                    <div class="col-lg-6 info">

                    <h2>Top-Ranked Web Development Agency in the USA</h2>

                        <p>At Royal Squad, we assist companies in flourishing through high-performance, scalable, and easy-to-use web development solutions. Our skilled team excels in building websites that are not only beautiful but also results-driven, promoting long-term success for your business.
                    </p>
                        <p>We adopt a strategic process that begins with thoroughly examining your business objectives and target market. Our designers meticulously design each aspect of your website with a well-defined vision, providing a smooth user experience and optimal engagement.</p>
                        <p>With an eye on innovation, we incorporate next-generation technologies to maximize performance, security, and functionality. Our development team works tirelessly to make every feature perfectly integrated and the resultant product completely optimized for success.</p>
                        <p>Join forces with Royal Squad to take your online presence and experience exponential growth. Let's create something extraordinary together!</p>
                    
                    </div>

                    <div class="col-lg-6">

                        <div class="thumb">

                            <img src="https://royalsquad.us/public/assets/img/web_devlopment_about.jpg" alt="Thumb">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="services-details-area default-padding">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 content">
                    <div class="site-heading text-center">

                        <h4>eCommerce Development</h4>

                        <h2>Professional Web Development Services

                        </h2>
                        <p>We develop personalized eCommerce websites with secure payment systems, responsive layouts, and sophisticated inventory management. Our SEO-friendly platforms maximize visibility, and we integrate third-party APIs for extended functionality. Scalable and robust, our solutions evolve with your business, supported by ongoing maintenance and support for uninterrupted operations.</p>

                    </div>

                    <div class="container">

                        <div class="service-items text-center">

                            <div class="row">

                                         <div class="col-lg-6 col-md-6 single-item service-box">

                                    <div class="item ">

                                    <div class="icon">

                                    <img src="{{asset('public/assets/img/services/agency_1.png')}}" alt="">

                                    </div>

                                        <div class="info">

                                            <h4>WordPress Development </h4>
                                            <p>Our WordPress development capabilities encompass bespoke themes, plugins, and WooCommerce integration for e-commerce. We develop SEO-friendly, responsive, high-performance websites with secure and scalable solutions. Our experts offer website migration, performance optimization, API integrations, and maintenance to keep your WordPress site up-to-date, fast, and safe.</p>

                                           

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 single-item service-box">

                                    <div class="item ">

                                        <div class="icon">

                                            <img src="{{asset('public/assets/img/services/agency_3.png')}}" alt="">

                                        </div>

                                        <div class="info">

                                            <h4>PHP Core Development</h4>

                                           <p>We design tailored PHP applications with secure and scalable backend solutions. Our technical skills cover database integration, MVC architecture, and RESTful API construction. We improve performance with optimized coding and third-party integrations. Our continuous support and updates guarantee long-term security, efficiency, and functionality in PHP-based applications.


                                           </p>

                                           

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 single-item service-box">

                                    <div class="item ">

                                        <div class="icon">

                                            <img src="{{asset('public/assets/img/services/agency_4.png')}}" alt="">

                                        </div>

                                        <div class="info">

                                            <h4>Shopify Development</h4>

                                         <p>We create and build personalized Shopify stores with mobile-responsive, SEO-friendly themes. Our solutions involve secure payment gateways, Shopify app integration, and store performance optimization. We also offer multi-currency support and smooth migration to ensure a hassle-free user experience and regular maintenance and support for long-term success.



                                         </p>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 single-item service-box">

                                    <div class="item ">

                                        <div class="icon">

                                            <img src="{{asset('public/assets/img/services/agency_5.png')}}" alt="">

                                        </div>

                                        <div class="info">

                                            <h4>Laravel Development</h4>

                                          <p>Our Laravel development services center on creating scalable, high-performance applications with RESTful APIs and secure authentication. We implement MVC architecture for organized development, incorporate third-party APIs, and provide optimized database management. We keep Laravel applications secure, efficient, and updated with cloud deployment and maintenance support.



                                          </p>

                                           

                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-6 single-item service-box">

                                    <div class="item ">

                                        <div class="icon">

                                            <img src="{{asset('public/assets/img/services/agency_6.png')}}" alt="">

                                        </div>

                                        <div class="info">

                                            <h4>Full Stack Web Development</h4>
                                        <p>We offer complete web development in a full stack with front-end and backend technologies. We provide responsive web applications, database management, API integrations, and cloud deployment. We design for high-performance, fast-loading, and scalable solutions and provide ongoing maintenance and support for long-term growth and reliability.



                                        </p>

                                        <a class="btn btn-light effect btn-md wow fadeInUp services_btn" href="{{ route('contact') }}">Get a Free Consultation</a>

                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

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

                            <li><a href="{{ route('appdevelopment') }}">App Development</a></li>
    
                            <li><a class="active" href="{{ route('webagency') }}">Web Agency</a></li>
    
                            <li><a href="{{ route('digitalmarketing') }}">Digital Marketing</a></li>
   
                            <li><a href="{{ route('uiuxdesign') }}">UI/UX Design</a></li>
    
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection