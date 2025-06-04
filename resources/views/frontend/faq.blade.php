@extends('includes.app')
@section('content')
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(public/assets/img/faqs.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-12">
                    <h1>Help & FAQs</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-area default-padding-top">
        <div class="container">
            <div class="info text-center">
                <h5>GENERAL HOME SUPPORT SERVICES INFORMATION </h5>
                <h2 class="title">Frequently Asked questions </h2>
            </div>
            <div class="faq-items">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-content">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <strong>?</strong> Are the technicians at Royal Squad Technology certified?
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <P>While certification is not mandatory, most of our technicians hold industry-standard certificates. However, a technician's competence is not solely determined by their qualifications. Anyone can study and pass a certification exam. We prioritize real-world education, experience, expertise, and aptitude. Our extensive interview process assesses these qualities, along with their communication skills and professionalism. </P>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>?</strong> How can Royal Squad Technology support your company?
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <P> We provide comprehensive IT solutions tailored to your business needs, ensuring seamless operation and support for your technology infrastructure. </P>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <strong>?</strong> What benefits does Royal Squad Technology offer?
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <P> Our services include expert technical support, remote troubleshooting,customized IT solutions, and 24/7 customer assistance, all designed to enhance your business efficiency and productivity.
                                            </P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-content">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFive">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            <strong>?</strong>How is the working process made simpler?
                                        </button>
                                    </div>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExampleFive">
                                        <div class="accordion-body">
                                            <P>To ensure flawless operation and maintain the highest design quality across various mobile devices and browsers, we optimize code by replacing long, erroneous texts with shorter ones and eliminating unnecessary computations. </P>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <strong>?</strong>  What brands of products does Royal Squad Technology support?
                                        </button>
                                    </div>
                                    <div id="collapseSix" class="accordion-collapse collapse"aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <P>We support a wide range of brands that produce hardware, software, peripherals, and consumer electronics. This includes, but is not limited to, Dell, HP, Compaq, Apple, Toshiba, Acer, Gateway, Netgear, Linksys, D-Link, Belkin, Microsoft, McAfee, Symantec (Norton), Kaspersky, Trend Micro, Canon, Lenovo, Samsung, Webroot, and Adobe.</P>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingSeen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeen"   aria-expanded="false" aria-controls="collapseSeen">
                                            <strong>?</strong> Is it possible for Royal Squad Technology to access my computer and fix my issue remotely?
                                        </button>
                                    </div>
                                    <div id="collapseSeen" class="accordion-collapse collapse" aria-labelledby="headingSeen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <P>Yes, we offer remote support at no additional cost. This is the quickest and most effective way to diagnose and resolve issues. A working internet connection is required to connect to your computer. If your internet connection is down, our techs can assist you over the phone. </P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quick-contact-area default-padding-bottom">
        <div class="container">
            <div class="quick-contact-items shadow dark bg-cover text-light" style="background-image: url(public/assets/img/business-ser.jpg);">
                <div class="row align-center">
                    <div class="col-lg-8">
                        <h5>Need help?</h5>
                        <h2>Easy solutions for all <strong>contact@coreitsolutionsuk.com </strong>, keep business safe & ensure high availability.</h2>
                    </div>
                    <div class="col-lg-4 text-right">
                        <a class="btn btn-light effect btn-md">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection