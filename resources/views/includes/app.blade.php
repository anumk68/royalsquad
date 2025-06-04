
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- ========== Page Title ========== -->

@yield('heads')
    <!-- ========== Favicon Icon ========== -->
    <title>{{ $meta_title ?? 'Royalsquad' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Default Description' }}">
    <meta name="keywords" content="{{ $meta_keywords ?? 'Default Keywords' }}">
    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="shortcut icon" href="{{ asset('public/assets/img/Royalsquad-icon.webp')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->

    <link href="{{ asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <link href="{{ asset('public/assets/css/font-awesome.min.css')}}" rel="stylesheet" />

    <link href="{{ asset('public/assets/css/themify-icons.css')}}" rel="stylesheet" />

    <link href="{{ asset('public/assets/css/flaticon-set.css')}}" rel="stylesheet" />

    <link href="{{ asset('public/assets/css/magnific-popup.css')}}" rel="stylesheet" />

    <link href="{{ asset('public/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />

    <link href="{{ asset('public/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />

    <link href="{{ asset('public/assets/css/animate.css')}}" rel="stylesheet" />

    <link href="{{ asset('public/assets/css/validnavs.css')}}" rel="stylesheet" />

    <link href="{{ asset('public/assets/css/helper.css')}}" rel="stylesheet" />

    <link href="{{ asset('public/style.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"> 
    <link href="{{ asset('public/assets/css/responsive.css')}}" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="google-site-verification" content="zzLzW8JRiqknoYO5Rx4TqUcSw8Fu2A-LTL39gCI9kr0" /> 
<!-- Google tag (gtag.js) --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0MCNYEZPKB"></script> 
<script> 
window.dataLayer = window.dataLayer || []; 
function gtag(){dataLayer.push(arguments);} 
gtag('js', new Date()); 

gtag('config', 'G-0MCNYEZPKB'); 
</script>

<meta name="msvalidate.01" content="858205F93B7EB4C43E739357EA1C874D" />
</head>

<body>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Royal Squad",
  "url": "https://royalsquad.us/",
  "logo": "https://royalsquad.us/public/assets/img/Royalsquad.us_head.png",
  "sameAs": [
    "https://www.facebook.com/royalsquadusa",
    "https://www.instagram.com/royalsquadusa/",
    "https://x.com/royalsquad_usa",
    "https://www.youtube.com/@RoyalSquadUSA"
  ],
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "+1 888 875 2997",
      "contactType": "technical support",
      "email": "mailto:info@royalsquad.us",
      "areaServed": "US",
      "availableLanguage": "en"
    }
  ]
}
</script>
 <div class="position-relative overflow-hidden">
  @include('includes.header')

        @yield('content')

        @include('includes.footer')

 </div>

    <!-- jQuery Frameworks

    ============================================= -->

    <script src="{{ asset('public/assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/jquery.appear.js')}}"></script>

    <script src="{{ asset('public/assets/js/jquery.easing.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/owl.carousel.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/wow.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/progress-bar.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/isotope.pkgd.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/imagesloaded.pkgd.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/count-to.js')}}"></script>

    <script src="{{ asset('public/assets/js/YTPlayer.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{ asset('public/assets/js/validnavs.js')}}"></script>

    <script src="{{ asset('public/assets/js/main.js')}}"></script>

   @yield('scripts')
<script>
document.addEventListener("click", function (event) {
    fetch("/log-action", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        },
        body: JSON.stringify({
            action: "Clicked on " + event.target.innerText,
            url: window.location.href
        })
    });
});
</script>
</body>
</html>  