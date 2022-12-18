<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/about_us.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/contact_us.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/faq.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/services.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{URL::asset('css/toaster.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/css/aos.css') }}" >


    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link rel="shortcut icon" href="images/logo-main.png.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body onload="myFunction()">


    <div class="preloader"><img src="images/preloader.gif" alt=""></div>

    <nav class="awesome-nav">
        <div data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-out" class="logo">
            <a href="{{URL('/')}}"><img src="images/logo.png" alt="Logo"></a>
        </div>
        <!-- <input type="checkbox" id="toggle-menu"> -->
        <ul data-aos="fade-down" data-aos-delay="400" data-aos-duration="1000" data-aos-easing="ease-in-out"
            data-aos-once="true" id="menu" class="menu">
            <li><a href="{{URL('/')}}">Home</a></li>
            <li><a href="{{URL('/about')}}">About Us</a></li>
            <li><a href="{{URL('/contact')}}">Contact Us</a></li>
            <li><a href="{{URL('/services')}}">Our Services</a></li>
            <li><a href="{{URL('/job')}}">Job Section</a></li>
            <li><a href="{{URL('/faq')}}">FAQ</a></li>
        </ul>
        <label data-aos="fade-down" data-aos-delay="400" data-aos-duration="1000" data-aos-easing="ease-in-out"
            data-aos-once="true" for="toggle-menu" id="toggle" class="toggle"></label>
    
        <div class="header-for-mobile">
            <div class="menu-btn">
                <i class="fas fa-bars" aria-hidden="true"></i>
            </div>
            <div class="close-btn">
                <i class="fas fa-times" aria-hidden="true"></i>
            </div>

            <div class="side-bar">
                <ul>
                    <li><a href="{{URL('/')}}">Home</a></li>
                    <li><a href="{{URL('/about')}}">About Us</a></li>
                    <li><a href="{{URL('/contact')}}">Contact Us</a></li>
                    <li><a href="{{URL('/services')}}">Our Services</a></li>
                    <li><a href="{{URL('/job')}}">Job Section</a></li>
                    <li><a href="{{URL('/faq')}}">FAQ</a></li>
                </ul>
            </div>
        </div>
        
    </nav>

    <header>

        <!-- Algorithem -->
        <div class="header-top" id="toTop">
            <p>আপন সেবা - Apon Seba</p>
        </div>
        <div class="header-top" id="toTop">
            <p>আপন সেবা - Apon Seba</p>
        </div>


        <!-- Algorithem -->
        <div class="header-middle">
            <div class="logo"><img style="width: 120px; border-radius: 50%;" src="images/logo-main.png.jpg" alt=""></div>
            <div class="title"><span>আপন সেবা</span> - <span>Apon Seba</span></div>
            <div class="icons">
                <a href="https://www.facebook.com/aponseheba/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/messages/t/304654760235466" target="_blank"><i class="fab fa-facebook-messenger" aria-hidden="true"></i></a>
                <a href=""><i class="fab fa-whatsapp"></i></a>
                <a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fab fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>


        <div class="header-bottom">
            <div class="navbar-custom">
                <ul>
                    <li><a href="{{URL('/')}}">Home</a></li>
                    <li><a href="{{URL('/about')}}">About Us</a></li>
                    <li><a href="{{URL('/contact')}}">Contact Us</a></li>
                    <li><a href="{{URL('/services')}}">Our Services</a></li>
                    <li><a href="{{URL('/job')}}">Job Section</a></li>
                    <li><a href="{{URL('/faq')}}">FAQ</a></li>
                </ul>
            </div>
        </div>

        {{-- <div class="cover-pic">

        </div> --}}

        
        
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{URL::asset('images/banner2.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{URL::asset('images/banner3.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{URL::asset('images/banner4.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{URL::asset('images/banner2.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{URL::asset('images/banner3.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{URL::asset('images/banner4.jpg') }}" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- Initialize Swiper -->

        <div class="current-navigation">
            <span><a style="color: #e4405f;" href="{{URL('/')}}">Home</a></span>
            <i>/</i>
            <span>
                @yield('destination-form')
            </span>
        </div>

    </header>



    @yield('content')



    
    <footer>
        <div class="footer-top">
            <h2>Apon Seba Homecare</h2>
            <hr>
            <p>
            "বৃদ্ধাশ্রম নয় নিজ গৃহ-ই হোক প্রিয় আপনজনদের শেষ আশ্রয়স্থল " - আর এই লক্ষ্যেই " আপন সেবা " দীর্ঘ তিন বছর ধরে সফলতার সাথে সেবা প্রদান করে আসছে।  
            আপনার আপনজন যেন নিজ ঘরে নার্সিং কেয়ার সহ সকল স্বাস্থ্য সেবা পায় তা নিশ্চিত করাই আপন সেবা হোম কেয়ার সার্ভিস এর মূল লক্ষ্য।
            নিজ বাসায় সকল প্রকার সেবার জন্য আপন সেবা আপনার বিশ্বস্ত
            সহযোগী। ২০১৯ সাল থেকে এখন পর্যন্ত আপন সেবা পরিবার কোনো প্রকার অভিযোগ ছাড়া ২০০ + পরিবারের সেবায় নিজেকে
            নিয়জিত রেখেছে এবং ইনশাল্লাহ এই ধারা অব্যাহত রাখবে।
            আর এই সেবা যাত্রায় আপনাদের দোয়া ও বিশ্বাস কামনা করছি।
            </p>
        </div>

        <div class="footer-middle">
            <h3>আমাদের ফেসবুক পেইজ</h3>
            <hr>

            <div class="fb-page-plug">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Faponseheba&tabs&width=280&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
            
            <div class="contact-infos">
                <p>যেকোনো প্রয়োজনে মেসেজ করুন আমাদের ফেসবুক পেইজে </p>
                <p>অথবা ফোন করুন <a href="tel:+8801617799750">+880 1617-799750</a> নম্বরে।</p>
                <p>অথবা ইমেইল করুন <a href="mailto:aponsebahomecare@gmail.com">aponsebahomecare@gmail.com</a> এই ঠিকানায়।</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&#x000A9;2021 আপন সেবা - Apon Seba. All rights reserved.</p>
        </div>
    </footer>



<script src="{{URL::asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="{{URL::asset('js/aos.js')}}"></script>
<script src="{{URL::asset('js/tata.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/axios.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/form.js')}}"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    
</script>


<script>

    AOS.init();


    function myFunction(){
        document.querySelector(".preloader").style.display="none";
    };


    window.addEventListener("scroll", () => {
      document.querySelector("nav").classList.toggle("sticky", window.scrollY > 50)
    });


</script>

<script type="text/javascript">
    $(document).ready(function(){
        //jquery for expand and collapse the sidebar
        $('.menu-btn').click(function(){
            $('.side-bar').addClass('active-menu');
            $('.close-btn').addClass('visible');
            $('.close-btn').css("visibility", "visible");
            $('.menu-btn').css("visibility", "hidden");
        });

        $('.close-btn,li,section,footer').click(function(){
            $('.side-bar').removeClass('active-menu');
            $('.close-btn').removeClass('visible');
            $('.menu-btn').css("visibility", "visible");
            $('.close-btn').css("visibility", "hidden");
        });
    });
</script>


</body>
</html>