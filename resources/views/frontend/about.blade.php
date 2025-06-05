@extends('includes.app')
@section('content')
    <div class="breadcrumb-area shadow dark bg-fixed text-light about_banner" style="background-image: url(public/assets/img/about_img.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-12">
                  <h1>About Royal Squad</h1>
                   <h4>Royal Squad is a trusted technology solutions provider offering top-tier IT support, cybersecurity, and innovative digital solutions. Our expert team ensures seamless technology integration, security, and efficiency for businesses and individuals.
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="works-about-area overflow-hidden">
        <div class="container">
            <div class="works-about-items default-padding">
               <div class="row align-center">
                    <div class="col-lg-6 info"> 
                        <h5>ROYAL SQUAD</h5>
                        <h2>Comprehensive IT Solutions Tailored for Your Success</h2>
                        <p>
                        We provide end-to-end IT solutions to enhance efficiency, security, and scalability. From cutting-edge technology support to seamless integration, our expert team ensures your business stays ahead in a rapidly evolving digital landscape.
                        </p>
                        <a href="{{ route('contact') }}" class="btn btn-theme effect btn-sm btn-standard button_effect">Contact</a>
                    </div>
                    <div class="col-lg-6">
                      <div class="thumb">
                         <img src="{{asset('public/assets/img/experiyns.jpg')}}" alt="it support">
                           <div class="fun-fact">
                                <div class="timer" data-to="5" data-speed="5000"></div>
                                <span class="medium">5 Years Of Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="work-process-area overflow-hidden default-padding">
        <div class="container-full">
            <div class="work-pro-items">
                <div class="row">
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="item-inner">
                                <div class="icon">
                                    <i class="flaticon-select"></i>
                                    <span>01</span>
                                </div>
                                <h5>Custom IT Solutions for Your Business</h5>
                                <p>We examine your business requirements to deliver tailored, effective, scalable IT solutions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="item-inner">
                                <div class="icon">
                                    <i class="flaticon-video-call"></i>
                                    <span>02</span>
                                </div>
                                <h5>Collaborative Growth & Innovation</h5>
                                <p>Join hands with us for an active strategy for data security, IT management, and business growth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="item-inner">
                                <div class="icon">
                                    <i class="flaticon-strategy"></i>
                                    <span>03</span>
                                </div>
                                <h5>Round-the-Clock IT Support</h5>
                                <p>
                                Our dedicated support staff works 24/7 to provide seamless operations and fast resolution of issues.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-services-area services-style-eleven-area ">
        <div class="fixed-shape-left-top">
            <img src="{{asset('public/assets/img/shape/7.png')}}" alt="tech support">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 ">
                    <div class="services-style-eleven">
                        <div class="item about_item">
                            <div class="icon about_i">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="info">
                                <h5>Warranty Management Solutions
                                </h5>
                                <p>
                                Maximizing customer satisfaction with robust, efficient, and end-to-end warranty management solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="services-style-eleven">
                        <div class="item about_item">
                            <div class="icon about_i">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="info">
                                <h5>Product Innovation & Enhancement</h5>
                                <p>Ever-evolving testing, updates, and enhancements to provide better and changing product releases.</p>
                            </div>
                        </div>
                    </div>
                     <div class="services-style-eleven">
                        <div class="item about_item">
                            <div class="icon about_i">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="info">
                                <h5>Advanced Quality Assurance</h5>
                                <p>Reliability, consistency, and customer confidence through our stringent quality control mechanisms.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 ">
                    <div class="services-style-eleven">
                        <div class="item about_item">
                            <div class="icon about_i">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="info">
                                <h5>Seamless Infrastructure Integration</h5>
                                <p>Transforming digitally with integrated and holistic modernization solutions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="services-style-eleven">
                        <div class="item about_item">
                            <div class="icon about_i">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="info">
                                <h5>Robust Information Security</h5>
                                <p>Securing your sensitive data with best-in-class security controls and practices. </p>
                            </div>
                        </div>
                    </div>
                    <div class="services-style-eleven">
                        <div class="item about_item">
                            <div class="icon about_i ">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="info">
                                <h5>Expert IT Professionals</h5>
                                <p>Our extensively trained and seasoned team brings excellence to each project.</p>
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
                                    <img src="{{asset('public/assets/img/teams/1.jpg')}}" alt="it support ">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                            <div class="info col-lg-7">
                                <p>Royal Squad has been a game-changer for our business. Their 24/7 support and expert solutions have kept our systems running smoothly without downtime.</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="provider">
                                    <h4>Michael R., Business Owner</h4>
                                    <span>Exceptional IT Support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="thumb">
                                    <img src="{{asset('public/assets/img/teams/2.jpg')}}" alt="tech support ">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                            <div class="info col-lg-7">
                                <p>The team at Royal Squad is highly professional and knowledgeable. Their security solutions gave us peace of mind, knowing our data is always protected.</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="provider">
                                    <h4>Sarah L., IT Manager</h4>
                                    <span>Reliable & Secure Services</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="thumb">
                                    <img src="{{asset('public/assets/img/teams/3.jpg')}}" alt="it support">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                            <div class="info col-lg-7">
                                <p> Royal Squad’s expertise and prompt service have been invaluable to our business. Their team is always ready to assist, ensuring our systems run flawlessly.</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="provider">
                                    <h4>David M., CEO</h4>
                                    <span>Outstanding Tech Support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection