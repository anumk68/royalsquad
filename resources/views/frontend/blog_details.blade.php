@extends('includes.app')
  <title>{{ $blog->meta_title ?? 'Royalsquad' }}</title>
    <meta name="description" content="{{ $blog->meta_description ?? 'Default Description' }}">
    <meta name="keywords" content="{{ $blog->meta_keywords ?? 'Default Keywords' }}">
    <link rel="canonical" href="{{ url()->current() }}" />
@section('content')

<!-- // for list styling only -->
 <style>
    li, ul {
        list-style: circle;
    }
 </style>

 <section class="blog-content_hero-wrapper spac">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog_inqury">
                    <div class="container">
                        <div class="row justify-content-center">
                            
                            <div class="col-lg-8 col-md-12  col-sm-12">
                                <div class="single_blog">
                                    <img class="img-fluid tips single_blog_injury single-bloged-opens"
                                         src="{{ asset('public/'.$blog->banner) }}"
                                         alt="{{ $blog->banner_alt }}">
                                    <h1 class="mt-4">{{ $blog->title }}</h1>
                                    <div class="mt-3">{!! $blog->description !!}</div>
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-4">
                              
                                <div class="sticky_bar">
                                    <div class="recent-blog-box">
                                        <div class="blog-header">
                                            <span class="menu-icon">☰</span>
                                            <h2>Recent Blogs</h2>
                                        </div>
                                        <ul class="blog-list">
                                            @foreach($recentBlogs as $recent)
                                                <li style="display:flex;font-size:15px;align-items:center;">
                                                    <img
                                                        class="mr-2"
                                                        src="{{ asset('public/'. $recent->banner) }}"
                                                        alt="{{ $recent->banner_alt }}"
                                                        style="height:76px;width:96px;border-radius:10px;margin-right:8px;">
                                                    <a href="{{ route('blog_details', $recent->slug) }}">
                                                        <h4>{{ \Illuminate\Support\Str::limit($recent->title, 30) }}</h4>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        
                                    </div>
                                </div>



                                <div class="sticky_bar">
                                    <div class="recent-blog-box">
                                        <img src="https://allprintersetup.com/public/blog_image/How to connect Brother Printer with WIFI (1)_1728455153.png"
                                            alt="img">
                                    </div>
                                </div>


                                <div class="sticky_bar">
                                    <div class="recent-blog-box" style="padding:20px;">

                                        <div class="appoinment-box text-center ">
                                            <div class="heading">
                                                <h4>Contact Form</h4>
                                                <p>Get in touch with us by filling out the form below—we’d love to hear
                                                    from you!</p>
                                            </div>
                                            <div class="contact-area">
                                                <form action="{{ route('appointments') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input class="form-control" id="name" name="name"
                                                                    placeholder="Name" type="text">
                                                                @error('name')
                                                                <div class="error">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input class="form-control" id="email" name="email"
                                                                    placeholder="Email" type="text">
                                                                @error('email')
                                                                <div class="error">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input class="form-control" id="enter number"
                                                                    name="number" placeholder="Enter Number"
                                                                    type="text">
                                                                @error('number')
                                                                <div class="error">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input class="form-control" id="subject" name="subject"
                                                                    placeholder="Enter Subject" type="text">
                                                                @error('subject')
                                                                <div class="error">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <select name="dept">
                                                                    <option value="Select_Department_to_email">Select
                                                                        Services</option>
                                                                    <option value="Your_inquiry_about">One</option>
                                                                    <option value="General_Information_Request">Two
                                                                    </option>
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
                                                                    <option value="Select_Department_to_email">IT
                                                                        Services</option>
                                                                    <option value="Your_inquiry_about">One</option>
                                                                    <option value="General_Information_Request">Two
                                                                    </option>
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
                                                </form>
                                            </div>


                                        </div>


                                    </div>


                    <!-- //thankyou modal -->
                     <!-- Modal -->
                     <div class="modal fade" id="thankYouModal" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content text-center p-4">
                                <h5 class="modal-title" id="thankYouModalLabel">Thanks For Contacting Us</h5>
                                <p>We will connect you soon...</p>
                                <button type="button" class="btn btn-primary mt-2" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>


                    <div id="iframeModal" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
                        background-color: rgba(0, 0, 0, 0.7); z-index: 9999; justify-content: center; align-items: center;">
                        <div style="position: relative; width: 90%; max-width: 400px; height: 80%; background: #fff; border-radius: 10px; overflow: hidden;">
                            <button onclick="closeIframeModal()" style="position: absolute; top: 10px; right: 10px; z-index: 10000; background: #ff5a5a; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">X</button>
                            <iframe id="driversIframe" src="" style="width: 95%; height: 98%; border: none;margin-top:5%;justify-content:center;" data-gtm-yt-inspected-8="true"></iframe>
                        </div>
                    </div>

                

                            </div>

                        </div>
                    </div>

                </div>
            </div>
       
        </div>
    </div>
</section>


@endsection