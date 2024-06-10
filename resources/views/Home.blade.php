<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{ asset('img/fav-icon.png') }}" type="image/x-icon">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Persuit</title>

        <!-- Icon css link -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/line-icon/css/simple-line-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/elegant-icon/style.css') }}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{ asset('vendors/revolution/css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/revolution/css/layers.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/revolution/css/navigation.css') }}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/bootstrap-selector/css/bootstrap-select.min.css') }}" rel="stylesheet">
        
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Menu Area =================-->
        <header class="shop_header_area carousel_menu_area">
            <div class="carousel_menu_inner">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="{{ route('Home') }}"><img src="img/logo1.png" class="logoku"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown submenu active">
                                    <a class="nav-link dropdown-toggle" href="{{ route('Home') }}"> Home </a>
                                </li>
                                <li class="nav-item dropdown submenu">
                                    <a class="nav-link" href="{{ route('Product') }}"> Product </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('cart.show') }}">Cart</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('Wishlist') }}">Wishlist</a></li>
                            </ul>
                            <ul class="navbar-nav justify-content-end">
                                <li class="search_icon"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('Login') }}"><i class="icon-user icons"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Menu Area =================-->
        
        <!--================Home Carousel Area =================-->
        <section class="home_carousel_area">
            <div class="home_carousel_slider owl-carousel">
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="img/home-carousel/sneakers.jpg" alt="">
                        <div class="carousel_hover">
                            <h3>Sneakers</h3>
                            <h4>We feature the best professional bags </h4>
                            <h5>Including:</h5>
                            <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                            <a class="discover_btn" href="{{ route('Product') }}">Discover Now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="img/home-carousel/boots.jpg" alt="">
                        <div class="carousel_hover">
                            <h3>Boots</h3>
                            <h4>We feature the best professional bags </h4>
                            <h5>Including:</h5>
                            <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                            <a class="discover_btn" href="{{ route('Product') }}">Discover Now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="img/home-carousel/casual.jpg" alt="">
                        <div class="carousel_hover">
                            <h3>Casual</h3>
                            <h4>We feature the best professional bags </h4>
                            <h5>Including:</h5>
                            <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                            <a class="discover_btn" href="{{ route('Product') }}">Discover Now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="img/home-carousel/sport.jpg" alt="">
                        <div class="carousel_hover">
                            <h3>Sport</h3>
                            <h4>We feature the best professional bags </h4>
                            <h5>Including:</h5>
                            <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                            <a class="discover_btn" href="{{ route('Product') }}">Discover Now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="img/home-carousel/slip_on.jpg" alt="">
                        <div class="carousel_hover">
                            <h3>Slip On</h3>
                            <h4>We feature the best professional bags </h4>
                            <h5>Including:</h5>
                            <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                            <a class="discover_btn" href="{{ route('Product') }}">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Carousel Area =================-->
        
        <!--================Special Offer Area =================-->
        <section class="special_offer_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_offer_item">
                            <img class="img-fluid" src="img/feature-add/special-offer-1.jpg" alt="">
                            <div class="hover_text">
                                <h4>Special Offer</h4>
                                <h5>Young Couple</h5>
                                <a class="shop_now_btn" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="special_offer_item2">
                            <img class="img-fluid" src="img/feature-add/special-offer-2.jpg" alt="">
                            <div class="hover_text">
                                <h5>girls bag</h5>
                                <a class="shop_now_btn" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Special Offer Area =================-->
        
        <!--================Latest Product isotope Area =================-->
        <section class="fillter_latest_product">
            <div class="container">
                <div class="single_c_title">
                    <h2>Our Best Seller Product</h2>
                </div>
                <div class="fillter_l_p_inner">
                    <ul class="fillter_l_p">
                        <li class="active" data-filter="*"><a href="#">Sneakers</a></li>
                        <li data-filter=".woman"><a href="#">Boots</a></li>
                        <li data-filter=".acc"><a href="#">Casual</a></li>
                        <li data-filter=".shoes"><a href="#">Sport</a></li>
                        <li data-filter=".bags"><a href="#">Slip On</a></li>
                    </ul>
                    <div class="row isotope_l_p_inner">
                        <div class="col-lg-3 col-md-4 col-sm-6 woman bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <a href=""><img class="img-fluid" src="img/imghagun/DESERT_COAL_STONE_SUEDE.jpg" alt=""></a>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Desert Coal Stone Suede</h4>
                                    <h5>$320.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <a href=""><img class="img-fluid" src="img/imghagun/1460_Nappa_Leather_Lace_Up_Boots.jpg" alt=""></a>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>1460 Nappa Leather Lace Up Boots</h4>
                                    <h5>$280.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <a href=""><img class="img-fluid" src="img/imghagun/Ultraboost_1.0_Shoes_White.jpg" alt=""></a>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>ULTRABOOST 1.0 Shoes</h4>
                                    <h5>$200.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <a href=""><img class="img-fluid" src="img/imghagun/RS-X_Soft.jpg" alt=""></a>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>RS-X Soft</h4>
                                    <h5>$220.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <a href=""><img class="img-fluid" src="img/imghagun/Grand_Crosscourt_Modern.jpg" alt=""></a>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Grand Crosscourt Modern White Floral Tennis</h4>
                                    <h5>$340.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc shoes bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <a href=""><img class="img-fluid" src="img/imghagun/Reebok_Classic_Leather.jpg" alt=""></a>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Reebok Classic Leather</h4>
                                    <h5>$210.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <a href=""><img class="img-fluid" src="img/imghagun/Jazz_Original.jpg" alt=""></a>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Jazz Original</h4>
                                    <h5><del>$200.00</del>  $170.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <a href=""><img class="img-fluid" src="img/imghagun/Chuck_Taylor_All_Star_Canvas.jpg" alt=""></a>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Chuck Taylor All Star Canvas</h4>
                                    <h5><del>$200.00</del>  $180.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Latest Product isotope Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="container">
                <div class="footer_widgets">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-6">
                            <aside class="f_widget f_about_widget">
                                <img src="img/logo.png" alt="">
                                <p>Persuit is a Premium PSD Template. Best choice for your online store. Let purchase it to enjoy now</p>
                                <h6>Social:</h6>
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_pinterest"></i></a></li>
                                    <li><a href="#"><i class="social_instagram"></i></a></li>
                                    <li><a href="#"><i class="social_youtube"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_info_widget">
                                <div class="f_w_title">
                                    <h3>Information</h3>
                                </div>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Delivery information</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Returns & Refunds</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_service_widget">
                                <div class="f_w_title">
                                    <h3>Customer Service</h3>
                                </div>
                                <ul>
                                    <li><a href="#">My account</a></li>
                                    <li><a href="#">Ordr History</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_extra_widget">
                                <div class="f_w_title">
                                    <h3>Extras</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Brands</a></li>
                                    <li><a href="#">Gift Vouchers</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_account_widget">
                                <div class="f_w_title">
                                    <h3>My Account</h3>
                                </div>
                                <ul>
                                    <li><a href="#">My account</a></li>
                                    <li><a href="#">Ordr History</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="footer_copyright">
                    <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</h5>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Rev slider js -->
        <script src="{{ asset('vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <!-- Extra plugin js -->
        <script src="{{ asset('vendors/counterup/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('vendors/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap-selector/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('vendors/image-dropdown/jquery.dd.min.js') }}"></script>
        <script src="{{ asset('js/smoothscroll.js') }}"></script>
        <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendors/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendors/magnify-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('vendors/vertical-slider/js/jQuery.verticalCarousel.js') }}"></script>
        <script src="{{ asset('vendors/jquery-ui/jquery-ui.js') }}"></script>

        <script src="{{ asset('js/theme.js') }}"></script>

    </body>
</html>