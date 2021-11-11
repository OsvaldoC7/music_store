<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('plantilla/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plantilla/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plantilla/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plantilla/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plantilla/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plantilla/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plantilla/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plantilla/css/style.css')}}" type="text/css">
    @livewireStyles
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        
        <div class="offcanvas__logo">
            <a href="/"><img src="{{asset('plantilla/img/logo.png')}}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="/"><img src="{{asset('plantilla/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/shop">Shop</a></li>
                            <li><a href="/product">Product Details</a></li>
                            <li><a href="/cart">Cart</a></li>
                            <li><a href="/checkout">Checkout</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                    <li><a href="#">Women’s</a></li>
                                    <li><a href="#">Men’s</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right header__menu">
                        <ul class="header__right__widget">
                            <li>
                                <a href="#"><span class=""></span>
                                    <ion-icon name="person-outline"></ion-icon>
                                </a>
                                <!--Autentificacion-->
                                <ul class="dropdown">

                                    @if(Route::has('login'))
                               
                                        @auth
                                            @if(Auth::user()->utype === 'ADM')

                                                <li><a href="#">Mi cuenta ({{Auth::user()->name}})</a></li>
                                                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                                <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                </form>
                                                
                                            @else
                                                <li><a href="#">Mi cuenta ({{Auth::user()->name}})</a></li>
                                                <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                                                <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                </form>
                                            @endif
                                        @else
                                            <li><a href="{{route('login')}}">Login</a></li>
                                            <li><a href="{{route('register')}}">Register</a></li>
                                        @endif

                                    @endif
                                </ul>
                                
                            </li>
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            
                        </ul>
                    
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    {{$slot}}

    <!-- Instagram Begin -->
    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{asset('plantilla/img/instagram/insta-1.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@music_store</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{asset('plantilla/img/instagram/insta-2.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@music_store</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{asset('plantilla/img/instagram/insta-3.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@music_store</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{asset('plantilla/img/instagram/insta-4.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@music_store</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{asset('plantilla/img/instagram/insta-5.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@music_store</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{asset('plantilla/img/instagram/insta-6.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@music_store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="{{asset('plantilla/img/logo.png')}}" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        cilisis.</p>
                        <div class="footer__payment">
                            <a href="#"><img src="{{asset('plantilla/img/payment/payment-1.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('plantilla/img/payment/payment-2.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('plantilla/img/payment/payment-3.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('plantilla/img/payment/payment-4.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('plantilla/img/payment/payment-5.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget">
                        <h6>Quick links</h6>
                        <ul>
                            <li><a href="{{route('index')}}">About</a></li>
                            <li><a href="{{route('index')}}">Blogs</a></li>
                            <li><a href="{{route('index')}}">Contact</a></li>
                            <li><a href="{{route('index')}}">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="footer__widget">
                        <h6>Account</h6>
                        <ul>
                            <li><a href="{{route('index')}}">My Account</a></li>
                            <li><a href="{{route('index')}}">Orders Tracking</a></li>
                            <li><a href="{{route('index')}}">Checkout</a></li>
                            <li><a href="{{route('index')}}">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-8">
                    <div class="footer__newslatter">
                        <h6>NEWSLETTER</h6>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{asset('plantilla/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('plantilla/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('plantilla/js/mixitup.min.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('plantilla/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('plantilla/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('plantilla/js/main.js')}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @livewireScripts
</body>

</html>