<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-542MRMRQ');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$title?? ''}}</title>
    <link rel="icon" type="image/png" href="{{asset('./assets/images/symbol.png')}}"/>
    <meta name="description" content="{{$description?? ''}}">
    
    @if (!isset($query) || $query !="admin")
       <meta name="robots" content="index,follow">
    @else
    <meta name="robots" content="noindex,nofollow">
    @endif
    
    

    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- //google-fonts -->

    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{asset('assets/css/style-liberty.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">

</head>

<body>

<!-- top header -->
<section class="w3l-top-header">
    <div class="container">
        <div class="top-content-w3ls d-flex align-items-center justify-content-between">
            <div class="top-headers">
                <ul>
                    <li>
                        <i class="fa fa-map-marker-alt"></i><a href="#address">apprendre facilement</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i><a href="mailto:contact@developpeur-junior.com">{{config('mail.from')['address']}}</a>
                    </li>
                </ul>
            </div>
            <div class="top-headers top-headers-2">
                <ul>
                    <li>
                        <a href="https://web.facebook.com/profile.php?id=61553495863067&locale=fr_FR" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a>
                    </li>
                    
                    <li>
                        <a href="#twitter"><span class="fab fa-twitter"></span></a>
                    </li>
                    <li>
                        <a href="#instagram"><span class="fab fa-instagram"></span></a>
                </li>
                <li class=" mr-0">
                        <a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- //top header -->

<!--header-->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <h1>
                <a class="navbar-brand" href="{{url("/")}}" style="color: rgb(50,154,135)" id="title-first">
                    <span ><img src="{{asset('./assets/images/symbol.png')}}" alt="developpeur-junior" height="29px"></span> developpeur-junior
                </a>
            </h1>
            <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.html">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
            <button class="navbar-toggler collapsed bg-gradient" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-lg-auto">
                   
                    <li class="nav-item {{$active?? ''}}">
                        <a class="nav-link" href="{{route('accueil')}}">Accueil <span class="sr-only">(current)</span></a>
                    </li>  
                    
                    @auth
                    <li class="nav-item @if (!empty($query)) {{ $query=='cours'? 'active': ''}}  @endif ">
                        <a class="nav-link" href="{{route('user.cours')}}">Cours</a>
                    </li>
                    @endauth
                    @if (Auth::check() && auth()->user()->role=="admin")
                    <li class="nav-item @if (!empty($query)) {{ $query=='admin'? 'active': ''}}  @endif ">
                        <a class="nav-link" href="{{route('admin.cours')}}">admin</a>
                    </li>
                    @endif
                    
                    <li class="nav-item  @if (!empty($query)) {{ $query=='formation'? 'active': ''}}  @endif">
                        <a class="nav-link" href="{{route('formation')}}">Formation</a>
                    </li>
                   

                    @auth
                    <li class="nav-item @if (!empty($query)) {{ $query=='profil'? 'active': ''}}  @endif">
                        <a class="nav-link" href="{{route('profile.edit')}}">Profile</a>
                    </li>
                    @endauth

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Connexion</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('register')}}">Inscription</a>
                    </li>
                    @endguest
                   
                    <li class="nav-item  @if (!empty($query)) {{$query=='contact'? 'active': ''}}  @endif">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    @auth
                    <li class="nav-item ">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <input type="submit" value="Deconnexion">
                        </form>
                    </li>
                    @endauth
                   

                    <!--/search-right-->
                   
                    <!--//search-right-->
                </ul>
            </div>

            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!--//header-->


@yield('content')

<!-- footer block -->
<footer class="w3l-footer-29-main">
    <div class="footer-29 pt-5 pb-4">
        <div class="container pt-md-4">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 footer-list-29">
                    <h6 class="footer-title-29">Contact Info </h6>
                    <p class="mb-2">{{config('mail.from')['address']}}</p>
                </div>
                <div class="col-lg-2 col-md-3 col-6 footer-list-29 mt-md-0 mt-4">
                    <ul>
                        <h6 class="footer-title-29">Lien(s)</h6>
                        <li><a href="{{route('contact')}}">Nous Contacter</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-6 ps-lg-5 ps-lg-4 footer-list-29 mt-md-0 mt-4">
                    <ul>
                        <h6 class="footer-title-29">developpeur-junior</h6>
                        <li><a href="#blog">apprendre facilement</a></li>
                        <li><img src="{{asset('./assets/images/symbol.png')}}" alt="" height="29px"></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-list-29 mt-lg-0 mt-4 ps-lg-5">
                    <h6 class="footer-title-29">S'abonner</h6>
                    <form action="{{ route('subscription.store') }}" class="subscribe d-flex" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="Adresse Email" >
                        @error('email')
                            <div class="error position">{{$message}}</div>
                        @enderror
                        @if (!empty(session('success')))
                          <div class="success">{{session('success')}}</div>
                        @endif
                        <button class="button-style"><span class="fa fa-paper-plane"
                            aria-hidden="true"></span></button>
                    </form>
                    <p class="mt-4">Abonnez-vous à notre liste de diffusion et recevez des mises à jour dans votre boîte de réception e-mail</p>
                </div>
            </div>
            <!-- copyright -->
            <p class="copy-footer-29 text-center mt-5 pb-2">© 2023 developpeur-junior. All rights reserved. </p>
            <!-- //copyright -->
        </div>
    </div>
</footer>
<!-- //footer block -->




<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- //move top -->

<!-- common jquery plugin -->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<!-- //common jquery plugin -->

<!-- theme switch js (light and dark)-->
<script src="{{asset('assets/js/theme-change.js')}}"></script>
<!-- //theme switch js (light and dark)-->

<!--/stats-number-counter-->
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();

</script>
<!--//stats-number-counter-->

<!--/owlcarousel-->
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<!-- //tesimonials-->
<script>
    $(document).ready(function() {
        $("#owl-demo1").owlCarousel({
            loop: true,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                736: {
                    items: 1,
                    nav: false
                }
            }
        })
    })

</script>
<!-- //tesimonials-->

<!-- MENU-JS -->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- //bootstrap-->
<!-- //Js scripts -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-542MRMRQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>

</html>