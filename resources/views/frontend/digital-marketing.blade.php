@extends('includes.app')
@section('content')
    <div class="banner-area shadow theme bg-fixed text-light" style="background-image: url(public/assets/img/banner/Digital_marketing_agency_banner.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <h1>Best Digital Marketing Agency in the USA</h1>
                    <p>At Royal Squad, we're a top USA Digital Marketing Agency committed to enhancing businesses online. Whether you are a startup, a minor, or a mature company, our tailored approaches give you maximum exposure, interaction, and conversions.</p>
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
                    <h4>Best Digital Marketing Agency</h4>
                    <h2>Top Digital Marketing Services in the USA: Your Trusted Partner</h2>
                        <p>Are you seeking professional <a href="{{ route('home') }}">digital marketing services</a> to grow your business? Our agency is one of the top digital marketing companies in the USA, providing practical strategies to make brands successful in the cutthroat online market.
                    </p>
                        <p>Wherever your business is based—New York, Los Angeles, Chicago, Houston, Miami, or anywhere else—we offer personalized digital marketing solutions specific to your requirements. Our experts have expertise in developing innovative campaigns that build growth, engagement, and brand awareness.
                        </p>
                        <p>With a robust emphasis on data-driven solutions and innovative marketing strategies, we empower businesses to maximize their online presence and achieve measurable success.
                        </p>
                        <h3>Here are the Digital Marketing Services we offer:</h3>
                       <ul>
                        <li>
                            PPC (Pay-Per-Click Advertising)
                        </li>
                        <li>SEO (Search Engine Optimization)</li>
                        <li> SMM (Social Media Marketing)</li>
                        <li>CMS (Content Management & Marketing)</li>
                       </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumb">
                            <img src="https://royalsquad.us/public/assets/img/digital_marketing_about.jpg" alt="digital marketing agency usa">
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
                   <h4>Leading Digital Marketing Agency in the USA</h4>
                   <h2>Why Your Business Needs a Top Advertising Agency in the USA</h2>
                </div>
                   <p>A solid online presence is key to business success in the current competitive business environment. Our ad agency focuses on developing strong brand stories and executing data-backed marketing strategies that create engagement and growth.</p>
                   <p>With the know-how of advanced marketing strategies, we create specialized campaigns that connect with your target audience and deliver maximum visibility across various digital platforms. Whether social media marketing, search engine optimization, or content marketing, we enable businesses to compete in a busy marketplace.</p>
                   <p>Our strategy is centered on boosting brand awareness, building customer loyalty, and establishing your company as a market leader. Let us guide you through contemporary marketing with customized strategies for long-term success.</p>
                    <div class="site-heading text-center">
                        <h4>Our Services</h4>
                        <h2>Best Digital Marketing Services In The USA</h2>
                
                    </div>
                    <div class="container">
                        <div class="service-items text-center">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                    <div class="icon">
                                    <img src="{{asset('public/assets/img/services/P1.png')}}" alt="best digital marketing agency in usa">
                                    </div>
                                        <div class="info">
                                            <h4>SEO Services </h4>
                        <p>Improve your online visibility with professional SEO solutions! We optimize websites for increased rankings, more traffic, and improved conversions. From keyword research to technical SEO, our approaches deliver results. Outshine competitors with customized solutions crafted for long-term success. Let us assist your business in growing—begin your SEO journey today!
                        </p>                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                        <div class="icon">
                                            <img src="{{asset('public/assets/img/services/P2.png')}}" alt="top digital marketing agency in usa">
                                        </div>
                                        <div class="info">
                                            <h4>SMO Services</h4>
                                         <p>Update your online brand presence with SMO Services! Social Media Optimization boosts interaction, visibility, and traffic to your site. Our seasoned strategies optimize reach on Facebook, Instagram, and Twitter. Be one step ahead of competitors with niche-specific content, audience understanding, and outcome-oriented campaigns. Level up your social media game now! </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                        <div class="icon">
                                            <img src="{{asset('public/assets/img/services/P3.png')}}" alt="top digital marketing agency in usa">
                                        </div>
                                        <div class="info">
                                            <h4>PPC Services</h4>
                                     <p>We create Google AdWords and social media campaigns, Keyword Optimization, Advertising copywriting, and Advertising Account reporting. We also provide PPC focusing on quality traffic, quality leads, and quality conversions to guarantee that your company achieves its marketing goals.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                        <div class="icon">
                                            <img src="{{asset('public/assets/img/services/P4.png')}}" alt="digital marketing services in usa ">
                                        </div>
                                        <div class="info">
                                            <h4>Content Management Services</h4>
                                      <p>CMS is an excellent way to control your online presence and streamline your work. We specialize in content design and content promotion for websites, blogs, and social media interactive posts. Our CMS package includes content planning, content generation, and content optimization for Search Engine Optimization, as well as fresh content updates so that people stay interested and updated. Enjoy the difference that our content management services will make to boost your audience's exposure and engagement with your brand.
                                      </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                        <div class="icon">
                                            <img src="{{asset('public/assets/img/services/P5.png')}}" alt="digital marketing services ">
                                        </div>
                                        <div class="info">
                                            <h4>Web Development</h4>
                                    <p>We specialize in creating visually appealing, user-friendly websites that can assist you in enhancing your sales online. Custom website design and development are among the best sites in the industry. Our web development services help you have a website that is tailored to suit your business and that visitors will be able to use without any problems.
                                    </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 single-item service-box">
                                    <div class="item ">
                                        <div class="icon">
                                            <img src="{{asset('public/assets/img/services/web.png')}}" alt="digital marketing agency usa">
                                        </div>
                                        <div class="info">
                                            <h4>Web Design</h4>
                                  <p>Web design is the creation of a well-designed and informative website that is in line with the company's requirements and facilitates the company's branding and marketing policies. We design great, interactive designs to create an appealing layout. Our approach is to employ excellent UI and layouts that are not only visually appealing but also functional and easy to navigate
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
                            <li><a href="{{ route('webagency') }}">Web Agency</a></li>
                            <li><a class="active" href="{{ route('digitalmarketing') }}">Digital Marketing</a></li>
                            <li><a href="{{ route('uiuxdesign') }}">UI/UX Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection