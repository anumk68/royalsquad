@extends('includes.app')

@section('content')

<div class="banner-area shadow theme bg-fixed text-light"

    style="background-image: url(public/assets/img/banner/Web_devlopment_company_banner.jpg);">

    <div class="container">

        <div class="row align-center">

            <div class="col-lg-6">

                <h1>Web Development Company in the USA</h1>
                <p>Are you looking for a high-quality web development firm in the USA with highly experienced teams in custom website development? Enjoy world-class web services with Royal Squad.
                </p>
                <a class="btn btn-light effect btn-md wow fadeInUp" href="{{ route('contact') }}">Get A Quote</a>
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
<div class="works-about-area overflow-hidden">

<div class="container">

    <div class="works-about-items default-padding">

        <div class="row align-center">

            <div class="col-lg-6 info">

            <h2>Royal Squad Web Development Company in the USA</h2>

                <p>At Royal Squad, we develop premium web applications to assist businesses in expanding and thriving in the online world. Being a reliable web development agency in the USA, we offer <a href="{{ route('uiuxdesign') }}">UI/UX design services </a>and design fast, responsive, and user-friendly web solutions to suit your particular requirements.
            </p>
                <p>Our team is expert in front-end as well as back-end development to ensure that your web application provides a smooth user experience with excellent performance. We are always on the cutting edge of trends and employ the most advanced technologies to develop applications that are secure, scalable, and future-proof.
                </p>
                <p>We also bring together robust technologies that enable organizations to streamline their operations, become more efficient, and make fact-based decisions. You may want a bespoke web application, an online store, or a high-end enterprise-level solution – our skills are the ones you can trust to take your idea into action.
                </p>
                <p>Here at Royal Squad, we pride ourselves on crafting quality solutions affordably, ensuring that startups as well as enterprises get more mileage. Let's make something wonderful together.
                </p>
            
            </div>

            <div class="col-lg-6">

                <div class="thumb">
                    <img src="https://royalsquad.us/public/assets/img/web_dv_main.jpg" alt="web development company
                    ">
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

                    <h4>Our Services</h4>

                    <h2>Reliable Partner for Web Development Services in the USA</h2>

                </div>

                <div class="container">

                    <div class="service-items text-center">

                        <div class="row">

                            <div class="col-lg-6 col-md-6 single-item service-box">

                                <div class="item ">

                                    <div class="icon">

                                        <img src="{{asset('public/assets/img/services/maintain_1.png')}}" alt="web development company in usa
                                        ">

                                    </div>

                                    <div class="info">

                                        <h4>Backend Development

                                        </h4>
                                        <p>Increase your web presence with our professional backend development solutions. Our experts are skilled in creating strong, scalable, secure backend frameworks for your business requirements. We provide smooth functionality, efficiency, and performance to enable your web applications.
                                        </p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6 single-item service-box">

                                <div class="item ">

                                    <div class="icon">

                                        <img src="{{asset('public/assets/img/services/maintain_2.png')}}" alt="web development services
                                        ">

                                    </div>

                                    <div class="info">

                                        <h4>Front End Development</h4>

                                        <p>Develop visually stunning and highly interactive user interfaces with our frontend development skills. We utilize the newest frontend technologies to design responsive, intuitive, and interactive websites that maximize user experience and engage visitors from the first click.

                                        </p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6 single-item service-box">

                                <div class="item ">

                                    <div class="icon">

                                        <img src="{{asset('public/assets/img/services/maintain_3.png')}}" alt="web development services in usa
                                        ">

                                    </div>

                                    <div class="info">

                                        <h4>Full-Stack Development</h4>

                                        <p>Enjoy the benefits of both worlds with our full-stack development. We merge frontend and backend technologies flawlessly to develop engaging, high-performing web solutions. Our full-stack specialists deliver an integrated, scalable,  easy-to-use digital experience to match your objectives.

                                        </p>



                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6 single-item service-box">

                                <div class="item ">

                                    <div class="icon">

                                        <img src="{{asset('public/assets/img/services/maintain_4.png')}}" alt="web development company
                                        ">

                                    </div>

                                    <div class="info">

                                        <h4>Design</h4>
                                        <p>Bring your concepts to life in beautiful web designs that reflect your brand personality. Our design specialists concentrate on developing visually appealing, user-focused, and practical designs that make a lasting impact. We emphasize easy navigation and contemporary UI/UX trends for an effortless experience.


                                        </p>

                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 single-item service-box">

                                <div class="item ">

                                    <div class="icon">

                                        <img src="{{asset('public/assets/img/services/maintain_5.png')}}" alt="web development company in usa
                                        ">

                                    </div>

                                    <div class="info">

                                        <h4>JavaScript Development</h4>

                                        <p>Tap into JavaScript's capabilities to develop dynamic and interactive web applications. Our JavaScript development services emphasize building engaging user experiences using up-to-date frameworks and technologies that boost performance, responsiveness, and scalability.



                                        </p>



                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6 single-item service-box">

                                <div class="item ">

                                    <div class="icon">

                                        <img src="{{asset('public/assets/img/services/maintain_6.png')}}" alt="web development services
                                        ">

                                    </div>

                                    <div class="info">

                                        <h4>Maintenance & Support</h4>

                                        <p>Keep your website current and optimized with our specialized maintenance and support services. We offer periodic updates, security patches, and performance enhancements to keep your site in top working condition and guarantee long-term online success.

                                        </p>

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

                <div class="sidebar-item link">

                    <ul>

                            <li><a class="active" href="{{ route('webdevelopment') }}">Web Development</a></li>

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