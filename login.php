

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Login - Welcome Back </title>
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- nice select - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- popup images & videos - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">

    <!-- jquery ui - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>


<body>


    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div class="backtotop bg_default_red">
        <a href="#" class="scroll">
				<i class="far fa-arrow-up"></i>
			</a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader - start -->
    <!-- <div id="preloader"></div> -->
    <!-- preloader - end -->


    <!-- header_section - start
		================================================== -->
     <header class="header_section classic_ecommerce_header sticky_header clearfix">
        <div class="header_top bg_black text-white clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <span class="offer_text">Free Shipping on Domestic Orders over ₹500</span>
                    </div>
                    <div class="col-lg-6">
                        <ul class="primary_social_links ul_li_right clearfix">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-google-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_bottom clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="brand_logo">
                            <a class="brand_link" style="color:white;">
                                    <img src="images/logo.png" srcset="images/logo.png 1x" alt="logo_not_found" height="70px" width="90px">
                                </a>

                            <ul class="mh_action_btns ul_li clearfix">
                                <li>
                                    <button type="button" class="search_btn" data-toggle="collapse" data-target="#search_body_collapse" aria-expanded="false" aria-controls="search_body_collapse">
                                            <i class="fal fa-search"></i>
                                        </button>
                                </li>
                                <li>
                                    <button type="button" class="cart_btn">
                                            <i class="fal fa-shopping-cart"></i>
                                            <span class="btn_badge">2</span>
                                        </button>
                                </li>
                                <li><button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <nav class="main_menu clearfix">
                            <ul class="ul_li_center clearfix">
                                <li ><a href="#!" style="color:#ffffff;text-shadow: 1px 1px #de5327f5;">Home</a></li>
                                <li><a href="#!"  style="color:#ffffff;text-shadow: 1px 1px #de5327f5;">Shop</a></li>
                                <li><a href="#!"  style="color:#ffffff;text-shadow: 1px 1px #de5327f5;">About us</a></li>
                                <li><a href="#!" style="color:#ffffff;text-shadow: 1px 1px #de5327f5;">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>

               
                </div>
            </div>
        </div>

        <div id="search_body_collapse" class="search_body_collapse collapse">
            <div class="search_body">
                <div class="container">
                    <form action="#">
                        <div class="form_item mb-0">
                            <input type="search" name="search" placeholder="Type here...">
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- header_section - end
		================================================== -->


    <!-- main body - start
		================================================== -->
    <main>


      


        <!-- breadcrumb_section - start
			================================================== -->
        <!-- <section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="assets/images/breadcrumb/bg_01.jpg">
            <div class="overlay" data-bg-color="#1d1d1d"></div>
            <div class="container">
                <h1 class="page_title text-white">Login Page</h1>
                <ul class="breadcrumb_nav ul_li_center clearfix">
                    <li><a href="#!">Home</a></li>
                    <li>Pages</li>
                    <li>Login</li>
                </ul>
            </div>
        </section> -->
        <!-- breadcrumb_section - end
			================================================== -->


        <!-- register_section - start
			================================================== -->
        <section class="register_section sec_ptb_140 has_overlay parallaxie clearfix" data-background="https://i.pinimg.com/originals/60/50/fb/6050fb25503091494ece133f932097fe.gif">
            <div class="overlay" data-bg-color="rgba(55, 55, 55, 0.75)"></div>
            <div class="container">
                <div class="reg_form_wrap login_form" data-background="images/about1.png" >
                  <form action='login.php' method='post'>
                        <div class="reg_form">
                            <h2 class="form_title text-uppercase text-center">Login</h2>
                            <div class="form_item">
                                <input id="username_input" type="text"  name="username" placeholder="hari" required>
                                <label for="username_input"><i class="fal fa-user"></i></label>
                            </div>
                            <div class="form_item">
                                <input id="password_input" type="password" name="password" placeholder="143" required> 
                                <label for="password_input"><i class="fal fa-unlock-alt"></i></label>
                            </div>
                            <a class="forget_pass text-uppercase mb_30" href="#!">Forgot password?</a>
                                 <div class='alert alert-success'>Account Verified Successfully,You Can Login Now  .</div>  
                            <a href="index.html" style="color:white"><button type="submit" class="custom_btn bg_default_red text-uppercase mb_50">Login</a></button>


                            <div class="social_wrap mb_100">
                                <h4 class="small_title_text mb_15 text-center text-uppercase">Or Login With</h4>
                                <ul class="circle_social_links ul_li_center clearfix">
                                    <li><a data-bg-color="#3b5998" href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a data-bg-color="#1da1f2" href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a data-bg-color="#ea4335" href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>


                            <div class="create_account text-center">
                                <h4 class="small_title_text text-center text-uppercase">Have not account yet?</h4>
                                <a class="create_account_btn text-uppercase" href="signup.html">Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- register_section - end
			================================================== -->


    </main>
    <!-- main body - end
		================================================== -->


    <!-- footer_section - start
		================================================== -->
        <footer class="footer_section ecommerce_footer bg_black text-white clearfix" style="background-color:black;">
        <div class="footer_widget_area sec_ptb_100 clearfix">
            <div class="container">
                <div class="row justify-content-lg-between">

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widget footer_about">
                            <div class="brand_logo mb_15">
                                <a href="index.html">
                                        <img src="images/logo.png" srcset="images/logo.png 2x" alt="logo_not_found" height="80px" width="90px">
                                    </a>
                            </div>

                            <p class="mb_50">
                                Normally, we rely on touching and feeling to understand the value, but diamonds are exceptional—they attract attention right away without the need for touch. 
                            </p>

                            <div class="payment_methods">
                                <img src="assets/images/payment_methods_01.png" alt="image_not_found">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widget footer_useful_links clearfix">
                            <h3 class="footer_widget_title text-white">Find it Fast</h3>
                            <ul class="ul_li_block">
                                <li>
                                    Shree Choco, VR Mall, Anna Nagar
                                </li>
                                <li>Phone: 9039292922</li>
                                <li>E-Mail: shree_choco@gmail.com</li>
                            </ul>
                        </div>
                    </div>

                   
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widget footer_useful_links clearfix">
                            <h3 class="footer_widget_title text-white">Contact</h3>
                            <ul class="ul_li_block">
                                <li><a href="#!">Follow Us On Instagram</a></li>
                                <li><a href="#!">Add to Facebook</a></li>
                                <li><a href="#!">Pinterest</a></li>
                                <li><a href="#!">Follow us on Twitter</a></li>
                                <li><a href="#!">Google</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer_bottom text-center d-flex align-items-center clearfix">
            <div class="container">
                <p class="copyright_text mb-0">© <a href="#!" class="author_link text-white">ShreeChoco</a> - All rights Reserved @ 2024 | Hariharan </p>
            </div>
        </div>
    </footer>
    <!-- footer_section - end
		================================================== -->


    <!-- fraimwork - jquery include -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- mobile menu - jquery include -->
    <script src="assets/js/mCustomScrollbar.js"></script>

    <!-- google map - jquery include -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="assets/js/gmaps.min.js"></script>

    <!-- animation - jquery include -->
    <script src="assets/js/parallaxie.js"></script>
    <script src="assets/js/wow.min.js"></script>

    <!-- nice select - jquery include -->
    <script src="assets/js/nice-select.min.js"></script>

    <!-- carousel - jquery include -->
    <script src="assets/js/slick.min.js"></script>

    <!-- countdown timer - jquery include -->
    <script src="assets/js/countdown.js"></script>

    <!-- popup images & videos - jquery include -->
    <script src="assets/js/magnific-popup.min.js"></script>

    <!-- filtering & masonry layout - jquery include -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- jquery ui - jquery include -->
    <script src="assets/js/jquery-ui.js"></script>

    <!-- custom - jquery include -->
    <script src="assets/js/custom.js"></script>
      <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycby-HKWWxeRXl0d8t4J3MeJeNpcWh2sXMZcYm5Sezoswv_DLyAtK-nrkKR2UebrHUP6H/exec'
        const form = document.forms['google-sheet']
        
        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => $("#form_alerts").html("<div class='alert alert-success'>Check Out Successful,We shortly contact You .</div>"))
            .catch(error => $("#form_alerts").html("<div class='alert alert-danger'>Online Store Closed...We let You Know shortly,As soon as we are available .</div>"))
        })
    </script>


</body>

</html>