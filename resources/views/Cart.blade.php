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

        <style>
            .cart_items {
    margin-bottom: 30px;
}

/* Style for Image inside the Cart Items */
.cart_items img {
    max-width: 70px; /* Adjust size as needed */
    margin-right: 15px;
    border-radius: 8px;
    cursor: pointer;
}

/* Table Styles */
.table {
    width: 100%;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table th {
    background-color: #f7f7f7;
}

/* Close Icon Styles */
.close-icon {
    width: 20px; /* Adjust size as needed */
    height: 20px;
    cursor: pointer;
    transition: transform 0.2s ease, filter 0.2s ease;
}

.close-icon:hover {
    transform: scale(1.1);
    filter: brightness(0.8);
}

/* Additional Styles for Visual Consistency */
.cart_items img {
    max-width: 70px; /* Adjust size as needed */
    margin-right: 15px;
    border-radius: 8px;
    cursor: pointer;
}

.media {
    display: flex;
    align-items: center;
}

.media .d-flex img {
    max-width: 100px;
    margin-right: 20px;
    border-radius: 8px;
    object-fit: cover; /* Ensures the image covers the container without distortion */
}

.media-body h4 {
    margin: 0;
    font-size: 1em;
    color: #555;
}
        </style>
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
                                <li class="nav-item dropdown submenu ">
                                    <a class="nav-link dropdown-toggle" href="{{ route('Home') }}"> Home </a>
                                </li>
                                <li class="nav-item dropdown submenu">
                                    <a class="nav-link" href="{{ route('Product') }}"> Product </a>
                                </li>
                                <li class="nav-item active"><a class="nav-link" href="{{ route('cart.show') }}">Cart</a></li>
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
        
        <!--================Shopping Cart Area =================-->
        <section class="shopping_cart_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart_items">
                            <h3>Your Cart Items</h3>
                            <div class="table-responsive-md">
                                <table class="table">
                                    <tbody>
                                        @foreach ($cart as $item)
                                            <tr>
                                                <th scope="row">
                                                    <img src="{{ asset('img/icon/close-icon.png') }}" alt="">
                                                </th>
                                                <td>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img src="{{ asset('img/imghagun/' . $item['image']) }}" alt="{{ $item['name'] }}">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4>{{ $item['name'] }}</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><p class="red">${{ number_format($item['price'] / 1000, 2) }}</p></td>
                                                <td>
                                                    <div class="quantity">
                                                        <h6>Quantity</h6>
                                                        <div class="custom">
                                                            <button onclick="var result = document.getElementById('sst{{ $loop->index }}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                                                            <input type="text" name="qty" id="sst{{ $loop->index }}" maxlength="12" value="{{ $item['quantity'] }}" title="Quantity:" class="input-text qty">
                                                            <button onclick="var result = document.getElementById('sst{{ $loop->index }}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="icon_plus"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><p>${{ number_format($item['price'] * $item['quantity'] / 1000, 2) }}</p></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart_totals_area">
                            <h4>Cart Totals</h4>
                            <div class="cart_t_list">
                                <div class="media">
                                    <div class="d-flex">
                                        <h5>Subtotal</h5>
                                    </div>
                                    <div class="media-body">
                                        <h6>${{ number_format($subtotal / 1000, 2) }}</h6>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex">
                                        <h5>Tax</h5>
                                    </div>
                                    <div class="media-body">
                                        <p>10%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="total_amount row m0 row_disable">
                                <div class="float-left">
                                    Total
                                </div>
                                <div class="float-right">
                                    ${{ number_format($total / 1000, 2) }}
                                </div>
                            </div>
                        </div>
                        <button type="submit" value="submit" class="btn subs_btn form-control">Proceed to checkout</button>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Shopping Cart Area =================-->
        
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