<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="admin/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/css/slicknav.css">
    <link rel="stylesheet" href="admin/css/flaticon.css">
    <link rel="stylesheet" href="admin/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="admin/css/gijgo.css">
    <link rel="stylesheet" href="admin/css/animate.min.css">
    <link rel="stylesheet" href="admin/css/animated-headline.css">
    <link rel="stylesheet" href="admin/css/magnific-popup.css">
    <link rel="stylesheet" href="admin/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="admin/css/themify-icons.css">
    <link rel="stylesheet" href="admin/css/slick.css">
    <link rel="stylesheet" href="admin/css/nice-select.css">
    <link rel="stylesheet" href="admin/css/style.css">
</head>

<body>


    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="admin/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->


    <main class="login-body" data-video-bg="admin/img/login-bg.mp4">
        <!-- Login Admin -->
        <form class="form-default" action="{{ url('/dangnhap') }}" method="post">

            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="index.html"><img src="admin/img/logo/loder.png" alt=""></a>
                </div>
                <h2>Đăng nhập</h2>
                <div class="form-input">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="form-input">
                    <label for="matkhau">Mật khẩu</label>
                    <input type="password" name="password" placeholder="Mật khẩu">
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="login">
                </div>

                <!-- Forget Password -->
                <a href="#" class="forget">Forget Password?</a>
                <!-- Forget Password -->
                <a href="" class="registration">Registration</a>
            </div>
        </form>
        <!-- /end login form -->
    </main>


    <script src="admin/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="admin/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="admin/js/jquery.slicknav.min.js"></script>

    <!-- Video bg -->
    <script src="admin/js/jquery.video.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="admin/js/owl.carousel.min.js"></script>
    <script src="admin/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="admin/js/wow.min.js"></script>
    <script src="admin/js/animated.headline.js"></script>
    <script src="admin/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="admin/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="admin/js/jquery.nice-select.min.js"></script>
    <script src="admin/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="admin/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="admin/js/jquery.counterup.min.js"></script>
    <script src="admin/js/waypoints.min.js"></script>
    <script src="admin/js/jquery.countdown.min.js"></script>
    <script src="admin/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="admin/js/contact.js"></script>
    <script src="admin/js/jquery.form.js"></script>
    <script src="admin/js/jquery.validate.min.js"></script>
    <script src="admin/js/mail-script.js"></script>
    <script src="admin/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="admin/js/plugins.js"></script>
    <script src="admin/js/main.js"></script>

</body>

</html>