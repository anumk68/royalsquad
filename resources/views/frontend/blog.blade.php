@extends('includes.app')
@section('content')
    <div class="breadcrumb-area shadow dark bg-fixed text-light center_heading"
        style="background-image: url(public/assets/img/contact.jpg);">
        <div class="container">
            <div class="row align-center text-center">
                <div class="col-lg-12">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_heading">
        <div class="container">
            <div class="site-heading text-center">
                <h2>Latest Blog & Articles</h2>
                <p>Explore the latest insights on technology. Stay informed with expert articles and trending topics at
                    Global Care Web.</p>
            </div>
            <div class="row">

                @foreach($data as $data)
                    <div class="col-lg-4 mb-4">
                        <div class="blog_single">
                            <div class="blog_img">
                                <a href="{{ route('blog_details', $data->slug) }}"><img
                                        src="{{ asset('public/' . $data->meta_img) }}" alt="it support"></a>
                            </div>
                            <div class="blog_content">
                                <li class="fas fa-clock m-1" style="font-weight:130;"> {{ date('d M,Y', strtotime($data->created_at)) }} </li>
                                <a href="{{ route('blog_details', $data->slug) }}" class="mt-3">
                                    <h3>
                                        {{ Str::limit(strip_tags($data->title), 52, '..') }}
                                    </h3>
                                </a>
                                <a href="{{ route('blog_details', $data->slug) }}">
                                    <p style="margin-top:0;">{{ Str::limit(strip_tags($data->description), 140, '..') }}</p>
                                </a>
                                <div class="text-center">
                                    <a class="btn-standard mt-0" href="{{ route('blog_details', $data->slug) }}" style="border:1px solid #2b4dff;">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>





    </div>
    </div>

@endsection