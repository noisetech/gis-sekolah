<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('fe/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fe/assets/css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{ asset('fe/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('fe/assets/css/owl.css') }}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo font-weight-bold" style="color: #000000;">
                          GIS SEKOLAH BANDAR LAMPUNG
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#services">Peta</a></li>
                            <li class="scroll-to-section"><a href="#about">Dashboard</a></li>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div id="modal" class="popupContainer" style="display:none;">
        <div class="popupHeader">
            <span class="header_title">Login</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
        </div>

        <section class="popupBody">
            <!-- Social Login -->
            <div class="social_login">
                <div class="">
                    <a href="#" class="social_box fb">
                        <span class="icon"><i class="fab fa-facebook"></i></span>
                        <span class="icon_title">Connect with Facebook</span>

                    </a>

                    <a href="#" class="social_box google">
                        <span class="icon"><i class="fab fa-google-plus"></i></span>
                        <span class="icon_title">Connect with Google</span>
                    </a>
                </div>

                <div class="centeredText">
                    <span>Or use your Email address</span>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                    <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                </div>
            </div>

            <!-- Username & Password Login form -->
            <div class="user_login">
                <form>
                    <label>Email / Username</label>
                    <input type="text" />
                    <br />

                    <label>Password</label>
                    <input type="password" />
                    <br />

                    <div class="checkbox">
                        <input id="remember" type="checkbox" />
                        <label for="remember">Remember me on this computer</label>
                    </div>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn"><i
                                    class="fa fa-angle-double-left"></i> Back</a></div>
                        <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                    </div>
                </form>

                <a href="#" class="forgot_password">Forgot password?</a>
            </div>

            <!-- Register Form -->
            <div class="user_register">
                <form>
                    <label>Full Name</label>
                    <input type="text" />
                    <br />

                    <label>Email Address</label>
                    <input type="email" />
                    <br />

                    <label>Password</label>
                    <input type="password" />
                    <br />

                    <div class="checkbox">
                        <input id="send_updates" type="checkbox" />
                        <label for="send_updates">Send me occasional email updates</label>
                    </div>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn"><i
                                    class="fa fa-angle-double-left"></i> Back</a></div>
                        <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1>Sistem Informasi Geografis <br> Sebaran Sekolah</h1>
                                        <p class="mt-2">Sistem ini bertujuan untuk menampilkan sebaran sekolah yang ada di sekitar kota Bandar Lampung, sehingga nantinya membantu untuk mengetahui sekolah apa saja yang ada.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('fe/img/map2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-item first-service">
                        <div class="icon"></div>
                        <h4>Pemeliharan sistem</h4>
                        <p>Hal ini bertujuan untuk memastikan sistem berjalan dengan baik ketika digunakan.</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item second-service">
                        <div class="icon"></div>
                        <h4>Pemetaan Sebaran Sekolah</h4>
                        <p>Hal ini bermaksud menampilkan sebaran sekolah yang ada di sekitar kota Bandar Lampung</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item third-service">
                        <div class="icon"></div>
                        <h4>GIS SISTEM</h4>
                        <p>Pengembangan sistem menggunakan Framework Laravel dan juga Leaflet</p>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h4>Hal yang tersedia</h4>
                        <img src="{{ asset('fe/assets/images/heading-line-dec.png') }}" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="javascript:void(0)">Maintance Problems</a></h4>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="javascript:void(0)">24/7 Support &amp; Help</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="javascript:void(0)">Fixing Issues</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="javascript:void(0)"></a>Open Source</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image">
                        <img src="{{ asset('fe/assets/images/about-right-dec.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>





    <footer id="newsletter">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <div class="copyright-text">

                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('fe/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('fe/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('fe/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('fe/assets/js/animation.js') }}"></script>
    <script src="{{ asset('fe/assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('fe/assets/js/popup.js') }}"></script>
    <script src="{{ asset('fe/assets/js/custom.js') }}"></script>
</body>

</html>
