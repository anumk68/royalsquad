@extends('includes.app')
@section('content')
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(public/assets/img/contact.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-area overflow-hidden default-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 contact-form-box">
                <div class="contact_form_main_royal">
                    <div class="appoinment-box text-center">
                        <div class="heading">
                            <h4>Contact Form</h4>
                            <p>Get in touch with us by filling out the form below—we’d love to hear from you!</p>
                        </div>
                         @include('frontend.common_form.form')
                        <!-- <form action="{{ route('appointments') }}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                            type="text">
                                            @error('name')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email"
                                            type="text">
                                            @error('email')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="enter number" name="number" placeholder="Enter Number"
                                            type="text">
                                            @error('number')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="subject" name="subject" placeholder="Enter Subject"
                                            type="text">
                                            @error('subject')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select name="dept">
                                            <option value="Select_Department_to_email">Select Services</option>
                                            <option value="Your_inquiry_about">One</option>
                                            <option value="General_Information_Request">Two</option>
                                            <option value="Partner_Relations">Three</option>
                                        </select>
                                        @error('dept')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select name="dept">
                                            <option value="Select_Department_to_email">IT Services</option>
                                            <option value="Your_inquiry_about">One</option>
                                            <option value="General_Information_Request">Two</option>
                                            <option value="Partner_Relations">Three</option>
                                        </select>
                                        @error('dept')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Submit Query
                                    </button>
                                </div>
                            </div>
                        </form> -->
                </div>
                </div>
                </div>
                <div class="col-lg-6 info">
                    <div class="contact-tabs">
                        <ul id="tabs" class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#" data-target="#tab1" data-toggle="tab" class="active nav-link">
                                    Address
                                </a>
                            </li>
                        </ul>
                        <div id="tabsContent" class="tab-content">
                            <div id="tab1" class="tab-pane fade active show">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="info">
                                            <p> Our Location<span>2501 148TH AVE SE APT F5 BELLEVUE, WA 98007 USA</span> </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope-open"></i>
                                        </div>
                                        <div class="info">
                                            <p>
                                                Send Us Mail
                                                <span><a href="mailto:info@royalsquad.us">Info@royalsquad.us</a></span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection