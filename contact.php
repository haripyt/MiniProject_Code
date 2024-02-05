<?php
$submit=false;
if(isset($_POST['name']))
{
   $server="localhost";
   $username="root";
   $password="";

   $con =mysqli_connect($server,$username,$password);
   if(!$con){
     die("Connect failed due to" .mysqli_connect_error());

   }
   // echo "sucessfull";

   $name=$_POST['name'];
   $email=$_POST['email'];
   $sub=$_POST['subject'];
   $msg=$_POST['message'];
  
   $sql="INSERT INTO `shreechoco`.`feedback` (`name`, `email`, `sub`, `msg`) VALUES ('$name', '$email', '$sub', '$msg')";
   
  
   // echo $sql;

   if($con->query($sql)== true){
      $submit = true;
   }
   else{
      echo"ERROR: $sql <br> $con->error";
   }
   $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Contact Us - ShreeChoco</title>
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
                                <li ><a href="index.html" style="color:#ffffff;text-shadow: 1px 1px #de5327f5;">Home</a></li>
                                <li><a href="shop.html"  style="color:#ffffff;text-shadow: 1px 1px #de5327f5;">Shop</a></li>
                                <li><a href="about.html"  style="color:#ffffff;text-shadow: 1px 1px #de5327f5;">About us</a></li>
                                <li><a href="contact.html" style="color: #de5327f5;">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-3">
                        <ul class="action_btns_group ul_li_right clearfix">
                            <li>
                                <button type="button" class="search_btn" data-toggle="collapse" data-target="#search_body_collapse" aria-expanded="false" aria-controls="search_body_collapse">
                                        <i class="fal fa-search"></i>
                                    </button>
                            </li>
                            <li>
                                <button type="button" class="user_btn" data-toggle="collapse" data-target="#use_deropdown" aria-expanded="false" aria-controls="use_deropdown">
                                        <i class="fal fa-user"></i>
                                    </button>
                              <div id="use_deropdown" class="collapse_dropdown collapse">
                                    <div class="dropdown_content">
                                        <div class="profile_info clearfix">
                                            <div class="user_thumbnail">
                                                <img src="images/user.jpg" alt="thumbnail_not_found">
                                            </div>
                                            <div class="user_content">
                                                <h4 class="user_name">HariHaran</h4>
                                                <span class="user_title">Gold Member</span>
                                            </div>
                                        </div>
                                        <ul class="settings_options ul_li_block clearfix">
                                            <li><a href="profile.html"><i class="fal fa-user-circle"></i> Profile</a></li>
                                            <li><a href="orders.html"><i class="fal fa-user-cog"></i> Orders</a></li>
                                            <li><a href="login.html"><i class="fal fa-sign-out-alt"></i> Logout</a></li>
                                        </ul>
                                    </div>
                            </li>
                            <li>
                                <button type="button" class="cart_btn">
                                        <i class="fal fa-shopping-cart"></i>
                                        <span class="btn_badge">2</span>
                                    </button>
                            </li>
                        </ul>
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


        <!-- sidebar mobile menu & sidebar cart - start
			================================================== -->
         <div class="sidebar-menu-wrapper">
            <div class="cart_sidebar">
                <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

                <ul class="cart_items_list ul_li_block mb_30 clearfix">
                    <li>
                        <div class="item_image">
                            <img src="images/bar3.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">Dark Choco Bars</h4>
                              <span class="item_price"><strong>₹35</strong> <del>₹45</del></span>
                        </div>
                        <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                    </li>
                    <li>
                        <div class="item_image">
                            <img src="images/pouch1_2.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">Combo Pouch</h4>
                           <span class="item_price"><strong>₹45</strong> <del>₹50</del></span>
                        </div>
                        <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                    </li>
                    
                </ul>

                <ul class="total_price ul_li_block mb_30 clearfix">
                    <li>
                        <span>Subtotal:</span>
                        <span class="item_price"><strong>₹70</strong> <del>₹95</del></span>
                    </li>
                     <li>
                        <span>Discount 10%:</span>
                        <span>- ₹15</span>
                    </li>
                    <li>
                        <span>GST 18%:</span>
                        <span>Included</span>
                    </li>
                   
                     <li>
                        <span>After Discount:</span>
                        <span> ₹70</span>
                    </li>
                    <li>
                        <span>Delivery Applicable:</span>
                        <span> ₹30</span>
                    </li>
                    <li>
                        <span>Total:</span>
                        <span>₹100</span>
                    </li>
                </ul>

                <ul class="btns_group ul_li_block clearfix">
                    <li><a href="cart.html">View Cart</a></li>
                    <li><a href="checkout1.html">Checkout</a></li>
                </ul>
            </div>

            <div class="sidebar_mobile_menu">
                <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

                <div class="msb_widget brand_logo text-center">
                    <a href="index.html">
                            <img src="assets/images/logo/logo_25_1x.png" srcset="assets/images/logo/logo_25_2x.png 2x" alt="logo_not_found">
                        </a>
                </div>

                <div class="msb_widget mobile_menu_list clearfix">
                    <h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu List</h3>
                    <ul class="ul_li_block clearfix">
                        <li class="active dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                           
                        </li>
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a> 
                        </li>
                       
                        <li><a href="contact.html">Conatct</a></li>
                    </ul>
                </div>

                <div class="user_info">
                    <h3 class="title_text mb_30 text-uppercase"><i class="fas fa-user mr-2"></i> User Info</h3>
                    <div class="profile_info clearfix">
                        <div class="user_thumbnail">
                            <img src="assets/images/meta/img_01.png" alt="thumbnail_not_found">
                        </div>
                        <div class="user_content">
                            <h4 class="user_name">Shreesha</h4>
                            <span class="user_title">Seller</span>
                        </div>
                    </div>
                    <ul class="settings_options ul_li_block clearfix">
                        <li><a href="#!"><i class="fal fa-user-circle"></i> Profile</a></li>
                        <li><a href="#!"><i class="fal fa-user-cog"></i> Settings</a></li>
                        <li><a href="#!"><i class="fal fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>

            <div class="overlay"></div>
        </div>
        <!-- sidebar mobile menu & sidebar cart - end
			================================================== -->


        <!-- breadcrumb_section - start
			================================================== -->
        <section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="images/banner3.jpg">
            <div class="overlay" data-bg-color="#1d1d1d"></div>
            <div class="container">
                <h1 class="page_title text-white">Contact Us</h1>
                <ul class="breadcrumb_nav ul_li_center clearfix">
                    <li><a href="#!">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb_section - end
			================================================== -->


        <!-- map_section - start
			================================================== -->
        <div class="map_section clearfix">
            <div id="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="12" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
            </div>
        </div>
        <!-- map_section - end
			================================================== -->


        <!-- main_contact_section - start
			================================================== -->
        <section class="main_contact_section sec_ptb_100 clearfix">
            <div class="container">
                <div class="row justify-content-lg-between">

                    <div class="col-lg-5">
                        <div class="main_contact_content">
                            <h3 class="title_text mb_15">Get In Touch</h3>
                            <p class="mb_50">
                                If you are interested in working with us, please get in touch.
                            </p>
                            <ul class="main_contact_info ul_li_block clearfix">
                                <li>
                                    <span class="icon">
											<i class="fal fa-map-marked-alt"></i>
										</span>
                                    <p class="mb-0">
                                     Shree Choco, VR Mall, Anna Nagar
                                    </p>
                                </li>
                                <li>
                                    <span class="icon">
											<i class="fal fa-phone-volume"></i>
										</span>
                                    <p class="mb-0">9039292922 - Central Office</p>
                                </li>
                                <li>
                                    <span class="icon">
											<i class="fal fa-paper-plane"></i>
										</span>
                                    <p class="mb-0">shree_choco@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="main_contact_form">
                            <h3 class="title_text mb_30">FeedBack</h3>
                            <form action='contact.php' method='post'>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form_item">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form_item">
                                            <input type="email" name="email" placeholder="Your Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form_item">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>

                                <div class="form_item">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                             
                                <?php
             if($submit == true){
             echo"<div class='alert alert-success'>Thank You for your feedback. Happy to deliver you in future. Explore Summer Offer.</div>";
             }
             ?> 
                <button type="submit" class="custom_btn bg_default_red text-uppercase" style="background-color:black">Send Feedback</button>  
                <button type="submit" class="custom_btn bg_default_red text-uppercase"><a href="index.html" style="color:white">Return to homepage</a></button>  
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- main_contact_section - end
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

                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widget footer_useful_links clearfix">
                            <h3 class="footer_widget_title text-white">Information</h3>
                            <ul class="ul_li_block">
                                <li><a href="#!">About Us</a></li>
                                <li><a href="#!">FAQ Page</a></li>
                                <li><a href="#!">Wish List</a></li>
                                <li><a href="#!">Contact Us</a></li>
                                <li><a href="#!">Work With Us</a></li>
                                <li><a href="#!">Offices</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widget footer_useful_links clearfix">
                            <h3 class="footer_widget_title text-white">Discover</h3>
                            <ul class="ul_li_block">
                                <li><a href="#!">BARs</a></li>
                                <li><a href="#!">POUCHs</a></li>
                                <li><a href="#!">GIFTs</a></li>
                                <li><a href="#!">WRAPs</a></li>
                                <li><a href="#!">LIMITEDs</a></li>
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


</body>

</html>