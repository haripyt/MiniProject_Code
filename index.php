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

   $email=$_POST['email'];
  
   $sql="INSERT INTO `shreechoco`.`feedback` (`email`) VALUES ('$email')";
   
  
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

    <title>Shree Choco</title>
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


<body class="home_classic_ecommerce">


    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div class="backtotop" data-bg-color="#000000">
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
                            <li><a href="404.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="404.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="404.html"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="404.html"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="404.html"><i class="fab fa-google-play"></i></a></li>
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
                            <a class="brand_link" style="color:white;" href="404.html">
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
                                <li ><a href="index.html" style="color: #de5327f5;">Home</a></li>
                                <li><a href="shop.html"  style="color:#ffffff;text-shadow: 1px 1px #de5327f5;">Shop</a></li>
                                <li><a href="about.html"  style="color:#ffffff;text-shadow: 1px 1px #de5327f5;">About us</a></li>
                                <li><a href="contact.html" style="color:#ffffff;text-shadow: 1px 1px #de5327f5;">Contact us</a></li>
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


        <!-- slider_section - start
			================================================== -->
        <section class="slider_section classic_ecommerce_slider position-relative clearfix" >
            <div class="main_slider clearfix" data-slick='{"arrows": false}' >
                <div class="item d-flex align-items-center clearfix" data-background="https://i.pinimg.com/originals/aa/09/8b/aa098bfb3557f9c8b19ab6622ec9a086.gif">

                    <div class="container">     <div style="margin-left:750px;margin-bottom: -500px;"><img src="images/about21.png" width="700px" height="800px"></div>
                        <div class="slider_content" >

                            <h3 data-animation="fadeInUp" data-delay=".6s" style="color:#f2f2f2">New Arrival Collections.</h3>
                            <p data-animation="fadeInUp" data-delay=".8s" style="color:#f2f2f2">
                                Dazzling Diamonds, Divine Chocolates: Elevate Your Moments with Sweet Elegance!.
                            </p>
                            <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                <a href="shop.html" class="custom_btn bg_white text-uppercase" >Collection</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="item d-flex align-items-center clearfix" data-background="https://i.pinimg.com/originals/60/50/fb/6050fb25503091494ece133f932097fe.gif">
                    
                    <div class="container">  <div style="margin-left:750px;margin-bottom: -500px;"><img src="images/about2.png" width="700px" height="800px"></div>
                        <div class="slider_content">
                            <h3 data-animation="fadeInUp" data-delay=".6s" style="color:#f2f2f2">Luxury Treats.</h3>
                            <p data-animation="fadeInUp" data-delay=".8s" style="color:#f2f2f2">
                                Diamonds and Chocolates: Because Every Moment Deserves Glamour.
                            </p>
                            <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                <a href="shop.html" class="custom_btn bg_white text-uppercase">Collection</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item d-flex align-items-center clearfix" data-background="https://i.pinimg.com/originals/ec/bb/89/ecbb892889d2275ced5e3ace2dde122d.gif">
                    <div class="container">   <div style="margin-left:750px;margin-bottom: -500px;"><img src="images/about2.png" width="700px" height="800px"></div>
                        <div class="slider_content">
                            <h3 data-animation="fadeInUp" data-delay=".6s" style="color:#f2f2f2">Divine Temptations.</h3>
                            <p data-animation="fadeInUp" data-delay=".8s" style="color:#f2f2f2">
                               Where Diamonds Shine and Chocolates Delight: Your Sweetest Escape!.
                            </p>
                            <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                <a href="shop.html" class="custom_btn bg_white text-uppercase">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>

            <!-- slider progress -->
            <div class="slick-progress" >
                <span></span>
            </div>
        </section>
        <!-- slider_section - end
			================================================== -->


        <!-- policy_section - start
			================================================== -->
        <section class="classic_ecommerce_policy d-flex align-items-center clearfix" data-bg-color="#f8f8f8">
            <div class="container">
                <div class="row mt__50">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ecommerce_policy_item">
                            <div class="item_icon">
                                <img src="assets/images/policy/classic_ecommerce/icon_01.png" alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">All Over India Shipping</h3>
                                <p>Get free shipping over ₹500.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ecommerce_policy_item">
                            <div class="item_icon">
                                <img src="assets/images/policy/classic_ecommerce/icon_02.png" alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Free Returns</h3>
                                <p>2-days free return policy.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ecommerce_policy_item">
                            <div class="item_icon">
                                <img src="assets/images/policy/classic_ecommerce/icon_03.png" alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Secured payments</h3>
                                <p>Accept all major payments .</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- policy_section - end
			================================================== -->


        <!-- category_section - start
			================================================== -->
        <section class="category_section sec_ptb_100 pb-0 clearfix">
            <div class="container">
                <div class="ecommerce_category_masonry grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item w_66">
                        <div class="ce_offer_carousel position-relative clearfix">
                            <div class="slideshow1_slider" data-slick='{"dots": false}'>
                                <div class="item">
                                    <div class="ce_offer_fullimage2 offer_fullimage text-white">
                                        <img src="https://img.choice.com.au/-/media/cd5641426b244a05ac1e65fcabd6c692.ashx?w=660&jq=80%20660w" alt="image_not_found">

                                        <div class="item_content">
                                            <h3 class="item_title text-white">Special Offer</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet domin Quaequ e an mea
                                            </p>
                                            <a class="custom_btn bg_white text-uppercase" href="shop.html">View Collection</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ce_offer_fullimage2 offer_fullimage text-white">
                                        <img src="https://img.choice.com.au/-/media/cd5641426b244a05ac1e65fcabd6c692.ashx?w=660&jq=80%20660w" alt="image_not_found">
                                        <div class="item_content">
                                            <h3 class="item_title text-white">Choco Pouch</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet domin Quaequ e an mea
                                            </p>
                                            <a class="custom_btn bg_white text-uppercase" href="shop.html">View Collection</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ce_offer_fullimage2 offer_fullimage text-white">
                                        <img src="https://img.choice.com.au/-/media/cd5641426b244a05ac1e65fcabd6c692.ashx?w=660&jq=80%20660w" alt="image_not_found" height="150px">
                                        <div class="item_content">
                                            <h3 class="item_title text-white">Choco Bars</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet domin Quaequ e an mea
                                            </p>
                                            <a class="custom_btn bg_white text-uppercase" href="shop.html">View Collection</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel_nav clearfix">
                                <button type="button" class="left_arrow"><i class="fal fa-angle-left"></i></button>
                                <button type="button" class="right_arrow"><i class="fal fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div class="ecommerce_category_fullimage" >
                            <img src="images/ip2.png" alt="image_not_found" >
                            <h3 class="item_title">
                                <a href="shop.html">Choco Pouch</a>
                            </h3>
                        </div>
                    </div>

                    <div class="grid-item" style="margin-top: 45px;">
                        <div class="ecommerce_category_fullimage">
                            <img src="images/ip1.jpeg" alt="image_not_found">
                            <h3 class="item_title">
                                <a href="shop.html">Choco Bars</a>
                            </h3>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div class="ecommerce_category_fullimage">
                            <img src="https://imgcdn.floweraura.com/DSC_6823_1.jpg" alt="image_not_found">
                            <h3 class="item_title">
                                <a href="shop.html">Choco Gifts & Wraps</a>
                            </h3>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div class="ecommerce_category_fullimage">
                            <img src="images/ip3.png" alt="image_not_found">
                            <h3 class="item_title">
                                <a href="shop.html">Combo Packs </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category_section - end
			================================================== -->


        <!-- product_section - start
			================================================== -->
        <section class="product_section sec_ptb_100 clearfix">
            <div class="container">
                <div class="row mb_30 align-items-center justify-content-lg-between">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="ecommerce_section_title">
                            <h2 class="title_text mb-0">Popular Products</h2>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <ul class="button-group filters-button-group ul_li_right clearfix">
                            <li><button class="active" data-filter="*">All</button></li>
                            <li><button data-filter=".fall">Bars</button></li>
                            <li><button data-filter=".blouse">Pouch</button></li>
                            <li><button data-filter=".dresses">Cake</button></li>
                            <li><button data-filter=".tops">Gifts</button></li>
                            <!-- <li><button data-filter=".bodysuits">Bodysuits</button></li> -->
                            <li><span class="filter_sidebar_btn" data-bg-color="#f9f9f9"><i class="far fa-bars"></i> FILTER</span></li>
                        </ul>
                    </div>
                </div>

                <div class="element-grid column4_element_grid mb_50">
                    <div class="element-item fall " data-category="fall">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#93be2b">New</li>
                            </ul>
                            <div class="tab-content">
                                <div id="ptab1_1" class="tab-pane fade active">
                                    <div class="item_image">
                                        <img src="images/bar1.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab1_2" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="images/bar1_1.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab1_3" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="images/product8 3.png" alt="image_not_found">
                                    </div>
                                </div>
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Cart" href="cart.html"><i class="fal fa-shopping-basket"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Rasamalai Choco Bar</a>
                                </h3>
                                <ul class="product_color ul_li nav clearfix">
                                    <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab1_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab1_2"></a></li>
                                    <li><a class="pbg_gray" data-toggle="tab" href="#ptab1_3"></a></li>
                                </ul>
                                <span class="item_price"><strong>₹35</strong> <del>₹45</del></span>
                            </div>
                        </div>
                    </div>

                    <div class="element-item blouse " data-category="blouse">
                        <div class="ecommerce_product_grid">
                                                        <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#808080">Out of Stock</li>
                            </ul>
                            <div class="tab-content">
                                <div id="ptab2_1" class="tab-pane fade active">
                                    <div class="item_image">
                                        <img src="images/pouch1_2.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab2_2" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="images/pouch1_1.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab2_3" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="images/pouch1.png" alt="image_not_found">
                                    </div>
                                </div>
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Combo Pouch</a>
                                </h3>
                                <ul class="product_color ul_li nav clearfix">
                                    <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab1_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab2_2"></a></li>
                                    <li><a class="pbg_gray" data-toggle="tab" href="#ptab2_3"></a></li>
                                </ul>
                                <span class="item_price"><strong>₹45</strong> <del>₹50</del></span>
                            </div>
                        </div>
                    </div>

                    <div class="element-item dresses " data-category="dresses">
                        <div class="ecommerce_product_grid">
                             <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#de5327f5">Limited</li>
                            </ul>
                            <div class="tab-content">
                                <div id="ptab3_1" class="tab-pane fade active">
                                    <div class="item_image">
                                        <img src="https://floursandfrostings.com/wp-content/uploads/2017/01/IMG_20170104_003650_972-1.jpg" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab3_2" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="https://www.mystore.in/s/62ea2c599d1398fa16dbae0a/6516c7ee487159cd31074d17/eck4r8gbabbuycgiypr13xz5xv6nafr36tqvnilhrovnxkjfht8aswrcy3_wqp7ul-qf0qyaqhed7aox9anqdr1v4y7svpbhxuq5mvw-.jpg" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab3_3" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="assets/images/shop/classic_ecommerce/img_05.png" alt="image_not_found">
                                    </div>
                                </div>
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Cart" href="cart.html"><i class="fal fa-shopping-basket"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Choco Lava Cake</a>
                                </h3>
                                <ul class="product_color ul_li nav clearfix">
                                    <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab3_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab3_2"></a></li>
                                    <li><a class="pbg_gray" data-toggle="tab" href="#ptab3_3"></a></li>
                                </ul>
                                <span class="item_price"><strong>₹85</strong> <del>₹100</del></span>
                            </div>
                        </div>
                    </div>

                    <div class="element-item tops " data-category="tops">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#93be2b">New</li>
                            </ul>
                            <div class="tab-content">
                                <div id="ptab4_1" class="tab-pane fade active">
                                    <div class="item_image">
                                        <img src="https://assets.winni.in/product/primary/2023/4/84368.jpeg?dpr=1&w=500" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab4_2" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="https://imgcdn.floweraura.com/DSC_6823_1.jpg" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab4_3" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="https://perfectgiftadda.com/wp-content/uploads/2022/06/87B8034C-C973-489D-B101-681649B2E1B8.jpeg" alt="image_not_found">
                                    </div>
                                </div>
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Cart" href="cart.html"><i class="fal fa-shopping-basket"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Gift Bouquet - Customizable</a>
                                </h3>
                                <ul class="product_color ul_li nav clearfix">
                                    <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab4_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab4_2"></a></li>
                                    <li><a class="pbg_gray" data-toggle="tab" href="#ptab4_3"></a></li>
                                </ul>
                                <span class="item_price"><strong>Price Varies Upon Needs</strong> <del>₹700</del></span>
                            </div>
                        </div>
                    </div>

                  
                    <div class="element-item tops " data-category="tops">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                  <li data-bg-color="#de5327f5">Limited</li>
                            </ul>
                            <div class="tab-content">
                                <div id="ptab9_1" class="tab-pane fade active">
                                    <div class="item_image">
                                        <img src="https://pastrypalace.co.in/wp-content/uploads/2021/05/8de258365ec056e82f1d4b9ec4e398c0.jpg" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab9_2" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="https://choconnuts.in/wp-content/uploads/2021/01/chocolate-delight-box.jpg" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab9_3" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="https://theootychocolates.com/cdn/shop/products/standardgift.jpg?v=1627913213" alt="image_not_found">
                                    </div>
                                </div>
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Cart" href="cart.html"><i class="fal fa-shopping-basket"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Customizable Choco Box</a>
                                </h3>
                                <ul class="product_color ul_li nav clearfix">
                                    <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab9_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab9_2"></a></li>
                                    <li><a class="pbg_gray" data-toggle="tab" href="#ptab9_3"></a></li>
                                </ul>
                                <span class="item_price"><strong>Price Varies Upon Need</strong> <del>₹1200</del></span>
                            </div>
                        </div>
                    </div>

                    <div class="element-item bodysuits " data-category="bodysuits">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#808080">Out of Stock</li>
                            </ul>
                            <div class="tab-content">
                                <div id="ptab10_1" class="tab-pane fade active">
                                    <div class="item_image">
                                        <img src="images/combo.png" alt="image_not_found">
                                    </div>
                                </div>
                                
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                  
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Bar Combo</a>
                                </h3>
                                <ul class="product_color ul_li nav clearfix">
                                    <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab10_1"></a></li>
                                    
                                </ul>
                                <span class="item_price"><strong>₹165</strong> <del>₹225</del></span>
                            </div>
                        </div>
                    </div>

                    <div class="element-item fall " data-category="fall">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#93be2b">New</li>
                            </ul>
                            <div class="tab-content">
                                <div id="ptab11_1" class="tab-pane fade active">
                                    <div class="item_image">
                                        <img src="images/bar3.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab11_2" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="images/bar3_1.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab11_3" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="images/bar3_2.png" alt="image_not_found">
                                    </div>
                                </div>
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Cart" href="cart.html"><i class="fal fa-shopping-basket"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Dark Choco Bar</a>
                                </h3>
                                <ul class="product_color ul_li nav clearfix">
                                    <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab11_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab11_2"></a></li>
                                    <li><a class="pbg_gray" data-toggle="tab" href="#ptab11_3"></a></li>
                                </ul>
                                <span class="item_price"><strong>₹35</strong> <del>₹45</del></span>
                            </div>
                        </div>
                    </div>

                    <div class="element-item blouse " data-category="blouse" style="margin-top: -10px;">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#93be2b">New</li>
                            </ul>
                            <div class="tab-content">
                                <div id="ptab12_1" class="tab-pane fade active">
                                    <div class="item_image">
                                        <img src="images/pouch2.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab12_2" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="images/pouch2_1.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div id="ptab12_3" class="tab-pane fade">
                                    <div class="item_image">
                                        <img src="images/pouch2_3.png" alt="image_not_found">
                                    </div>
                                </div>
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Cart" href="cart.html"><i class="fal fa-shopping-basket"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Pistachio Pouch</a>
                                </h3>
                                <ul class="product_color ul_li nav clearfix">
                                    <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab12_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab12_2"></a></li>
                                    <li><a class="pbg_gray" data-toggle="tab" href="#ptab12_3"></a></li>
                                </ul>
                                <span class="item_price"><strong>₹35</strong> <del>₹45</del></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="load_more text-center clearfix">
                    <a class="custom_btn bg_gray text-uppercase" href="shop.html">Load More</a>
                </div>
            </div>
        </section>

        <div class="sidebar-menu-wrapper">
            <div class="filter_sidebar">
                <button type="button" class="close_btn mb_50"><i class="fal fa-times"></i></button>
                <div class="fs_widget fs_category_list">
                    <h3 class="fs_widget_title text-uppercase">Top Categories</h3>
                    <ul class="ul_li_block clearfix">
                        <li><a href="#!"><span><i class="fab fa-black-tie"></i></span>Choco Bars</a></li>
                        <li><a href="#!"><span><i class="fal fa-tshirt"></i></span>Choco Pouchs</a></li>
                        <li><a href="#!"><span><i class="fal fa-watch"></i></span>Choco Wraps</a></li>
                        <li><a href="#!"><span><i class="fal fa-compact-disc"></i></span>Gift Boxes</a></li>
                        <li><a href="#!"><span><i class="fas fa-gem"></i></span>Choco Bouquet</a></li>
                        <li><a href="#!"><span><i class="fal fa-bicycle"></i></span>Special Gifts</a></li>
                        <li><a href="#!"><span><i class="far fa-laptop"></i></span>Customized Wraps></li>
                        <li><a href="#!"><span><i class="fas fa-mobile-alt"></i></span>Valentine Week</a></li>
                        <li><a href="#!"><span><i class="fab fa-black-tie"></i></span>Limited </a></li>
              
                    </ul>
                </div>

                <div class="fs_widget fs_price_list">
                    <h3 class="fs_widget_title text-uppercase">Price filter</h3>
                    <form action="#">
                        <ul class="ul_li_block clearfix">
                            <li>
                                <input id="fs_price_1" type="radio" name="fs_price_wroup" checked>
                                <label for="fs_price_1">₹35 - ₹50</label>
                            </li>
                            <li>
                                <input id="fs_price_2" type="radio" name="fs_price_wroup">
                                <label for="fs_price_2">₹50 - ₹70</label>
                            </li>
                            <li>
                                <input id="fs_price_3" type="radio" name="fs_price_wroup">
                                <label for="fs_price_3">₹75 - ₹100</label>
                            </li>
                            <li>
                                <input id="fs_price_4" type="radio" name="fs_price_wroup">
                                <label for="fs_price_4">₹100 - ₹150</label>
                            </li>
                           
                        </ul>
                    </form>
                </div>

                <div class="fs_widget fs_color_list">
                    <h3 class="fs_widget_title text-uppercase">Color filter</h3>
                    <form action="#">
                        <ul class="ul_li clearfix">
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#ffa037"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#6c7ae0"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#f23226"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#828664"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#68a3c2"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#009122"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#0099f7"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#bb8c80"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#ffa037"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#875546"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#f74877"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#1f1e29"></li>
                            <li><input type="radio" name="fs_color_froup" data-bg-color="#dddddd"></li>
                        </ul>
                    </form>
                </div>

                <div class="fs_widget fs_size_list">
                    <h3 class="fs_widget_title text-uppercase">Size filter</h3>
                    <form action="#">
                        <ul class="ul_li clearfix">
                            <li>
                                <label for="fs_size_1"><input id="fs_size_1" type="radio" name="fs_size_group">Small</label>
                            </li>
                            <li>
                                <label for="fs_size_2"><input id="fs_size_2" type="radio" name="fs_size_group">Large</label>
                            </li>
                            <li>
                                <label for="fs_size_3"><input id="fs_size_3" type="radio" name="fs_size_group">Medium</label>
                            </li>
                           
                        </ul>
                    </form>
                </div>

                <div class="fs_widget fs_realted_post">
                    <h3 class="fs_widget_title text-uppercase">Your may also like</h3>
                    <div class="small_blog">
                        <a href="blog_details.html" class="item_image" style="height:75px;width: 75px;">
								<img src="images/bar1.png" alt="image_not_found" >
							</a>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="blog_details.html">
										Treat Your Loved Ones
									</a>
                            </h3>
                            <span class="post_date">Jan 24, 2024</span>
                        </div>
                    </div>

                    <div class="small_blog" style="margin-top:20px">
                        <a href="blog_details.html" class="item_image" style="height:75px;width: 75px;">
								<img src="images/pouch1_2.png" alt="image_not_found">
							</a>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="blog_details.html">
										Treat Your Loved Ones
									</a>
                            </h3>
                            <span class="post_date">Feb 11, 2024</span>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
        <!-- product_section - end
			================================================== -->


        <!-- offer_section - start
			================================================== -->
        <section class="offer_section clearfix">
            <div class="container-fluid p-0">
                <div class="row no-gutters justify-content-lg-between">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ce_offer_fullimage offer_fullimage text-white text-center" style="height:500px">
                            <img src="https://img.freepik.com/premium-photo/focus-cook-hands-using-spoon-silicone-dessert-mold-with-melted-black-chocolate-from-glass-bowl-handmade-sweet-cocoa-fill-heart-shape-pieces-chocolate-plate-wooden-table-kitchen_678158-1379.jpg" alt="image_not_found">
                            <div class="item_content">
                                <h3 class="item_title text-white mb_15">Read The Blog</h3>
                                <a class="text_btn text-uppercase" href="#!"><span>View all posts</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ce_offer_fullimage offer_fullimage text-white text-center" style="height:500px">
                            <img src="https://www.sharmispassions.com/wp-content/uploads/2021/02/homemadechocolate_step16.jpg" alt="image_not_found">
                            <div class="item_content">
                                <h3 class="item_title text-white mb_15">Follow Us On Instagram</h3>
                                <a class="text_btn text-uppercase" href="#!"><span>@shree_choco</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- offer_section - end
			================================================== -->


        <!-- newsletter_section - start
			================================================== -->
        <section class="newsletter_section ecommerce_newsletter sec_ptb_100 clearfix">
            <div class="container">
                <div class="form_wrap text-center">
                    <form action="index.php"  >
                        <h2>Start of Summer Up to 15% off on all items</h2>
                        <div class="form_item">
                            <input type="email" name="email" placeholder="Your email address">
                            <button type="submit" class="bg_black">Subscribe</button>
                        </div>
                        <p class="mb-0">
                            <?php
             if($submit == true){
             echo"<div class='alert alert-success'>Thank You for your feedback. Happy to deliver you in future. Explore Summer Offer.</div>";
             }
             ?> 
                        </p>
                    </form>
                </div>
            </div>
        </section>
        <!-- newsletter_section - end
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


    <!-- product quick view - start -->
    <div class="quickview_modal modal fade" id="quickview_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content clearfix">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
                <div class="item_image" >
                    <img src="images/bar1_4.png" alt="image_not_found" height="150px">
                </div>
                <div class="item_content">
                    <h2 class="item_title mb_15">Rasamalai Chocolate Bar</h2>
                    <div class="rating_star mb_30 clearfix">
                        <ul class="float-left ul_li mr-2">
                            <li class="active"><i class="las la-star"></i></li>
                            <li class="active"><i class="las la-star"></i></li>
                            <li class="active"><i class="las la-star"></i></li>
                            <li class="active"><i class="las la-star"></i></li>
                            <li><i class="las la-star"></i></li>
                        </ul>
                        <span class="review_text">(12+ Reviews)</span>
                    </div>
                          <span class="item_price"><strong>₹35</strong> <del>₹45</del></span>
                    <p class="mb_30">
                       Chocolate made with fresh choco flavour, with a own made flavour,handmade and preserved.
                    </p>
                    <div class="quantity_form mb_30 clearfix">
                        <strong class="list_title">Quantity:</strong>
                        <div class="quantity_input">
                            <form action="#">
                                <span class="input_number_decrement">–</span>
                                <input class="input_number" type="text" value="1">
                                <span class="input_number_increment">+</span>
                            </form>
                        </div>
                    </div>
                    <ul class="btns_group ul_li mb_30 clearfix">
                        <li><a href="cart.html" class="custom_btn bg_carparts_red">Add to Cart</a></li>
                        <li><a href="shop_d.html" class="custom_btn bg_carparts_red">View in Detail </a></li>
                      
                        <li><a href="#!" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add To Wishlist"><i class="fal fa-heart"></i></a></li>
                    </ul>
                    <ul class="info_list ul_li_block clearfix">
                        <li><strong class="list_title">Category:</strong> <a href="#!">Chocolate Bars</a></li>
                        <li class="social_icon">
                            <strong class="list_title">Share:</strong>
                            <ul class="ul_li clearfix">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- product quick view - end -->
    <!-- shop_section - end
			================================================== -->

</body>

</html>