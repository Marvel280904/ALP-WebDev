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
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        
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

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.add_cart_btn').forEach(function(button) {
                    button.addEventListener('click', function(event) {
                        event.preventDefault();
                        let productId = this.getAttribute('data-id');
                        fetch("{{ route('cart.add') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                product_id: productId
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert(data.message);
                                // Optionally update cart UI here
                            } else {
                                alert('Something went wrong!');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred. Please try again.');
                        });
                    });
                });
            });
        </script>

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
                                <li class="nav-item dropdown submenu">
                                    <a class="nav-link dropdown-toggle" href="{{ route('Home') }}"> Home </a>
                                </li>
                                <li class="nav-item dropdown submenu">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="compare.html">Compare</a></li>
                                        <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout Method</a></li>
                                        <li class="nav-item"><a class="nav-link" href="register.html">Checkout Register</a></li>
                                        <li class="nav-item"><a class="nav-link" href="track.html">Track</a></li>
                                        <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown submenu active">
                                <a class="nav-link" href="{{ route('Product') }}"> Product </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            </ul>
                            <ul class="navbar-nav justify-content-end">
                                <li class="search_icon"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                                <li class="nav-item dropdown submenu">
                                    <a><i class="icon-user icons"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="{{ route('Admin') }}">Admin</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('Login') }}">Customer</a></li>
                                    </ul>
                                </li>
                                <li class="cart_cart"><a href="{{ route('cart.show') }}"><i class="icon-basket icons"></i></a></li>
                                <li class="wishlist"><a href="{{ route('Wishlist') }}"><i class="icon-heart icons"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Menu Area =================-->
        
        <!--================Categories Product Area =================-->
        <section class="categories_product_main p_80">
            <div class="container">
                <div class="categories_main_inner">
                    <div class="row row_disable">
                        <div class="col-lg-9 float-md-right">
                            <div class="showing_fillter">
                                <div class="row m0">
                                    <div class="first_fillter">
                                        <h4>Showing 1 to 12 of 30 total</h4>
                                    </div>
                                    <div class="secand_fillter">
                                        <h4>SORT BY :</h4>
                                        <select class="selectpicker">
                                            <option>Name</option>
                                            <option>Name 2</option>
                                            <option>Name 3</option>
                                        </select>
                                    </div>
                                    <div class="third_fillter">
                                        <h4>Show : </h4>
                                        <select class="selectpicker">
                                            <option>09</option>
                                            <option>10</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="four_fillter">
                                        <h4>View</h4>
                                        <a class="active" href="#"><i class="icon_grid-2x2"></i></a>
                                        <a href="#"><i class="icon_grid-3x3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="categories_product_area">
                                <div class="row">
                                    @foreach($products as $product)
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="l_product_item">
                                                <div class="l_p_img">
                                                <a href="{{ route('ProductDetail', $product->ID_Produk) }}">
                                                    <img src="{{ asset('img/imghagun/' . $product->Image) }}" alt="{{ $product->Nama_Produk }}">
                                                </a>
                                                    @if($product->Harga < 200000)
                                                        <h5 class="new">New</h5>
                                                    @endif
                                                </div>
                                                <div class="l_p_text">
                                                    <ul>
                                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                                        <li><a class="add_cart_btn" href="#" data-id="{{ $product->ID_Produk }}">Add To Cart</a></li>
                                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                                    </ul>
                                                    <h4>{{ $product->Nama_Produk }}</h4>
                                                    <h5>
                                                        @if($product->Harga < 200000)
                                                            <del>$200.00</del> ${{ number_format($product->Harga / 1000, 2) }}
                                                        @else
                                                            ${{ number_format($product->Harga / 1000, 2) }}
                                                        @endif
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="pagination_wrapper">
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                        {{ $products->links('pagination::bootstrap-4') }}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 float-md-right">
                            <div class="categories_sidebar">
                                <aside class="l_widgest l_p_categories_widget">
                                    <div class="l_w_title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Men’s Fashion
                                                <i class="icon_plus" aria-hidden="true"></i>
                                            <i class="icon_minus-06" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Women’s Fashion
                                            <i class="icon_plus" aria-hidden="true"></i>
                                            <i class="icon_minus-06" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="nav-item"><a class="nav-link" href="#">Hoodies & Sweatshirts</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Jackets & Coats</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Blouses & Shirts</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Phone & Accessories 
                                                <i class="icon_plus" aria-hidden="true"></i>
                                            <i class="icon_minus-06" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Electronic Appliance
                                                <i class="icon_plus" aria-hidden="true"></i>
                                            <i class="icon_minus-06" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#">Computer & Networking
                                                <i class="icon_plus" aria-hidden="true"></i>
                                                <i class="icon_minus-06" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#">TV, Audiio & Gaming
                                                <i class="icon_plus" aria-hidden="true"></i>
                                                <i class="icon_minus-06" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#">Office Supplies
                                                <i class="icon_plus" aria-hidden="true"></i>
                                                <i class="icon_minus-06" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#">All Categories
                                                <i class="icon_plus" aria-hidden="true"></i>
                                                <i class="icon_minus-06" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </aside>
                                <aside class="l_widgest l_fillter_widget">
                                    <div class="l_w_title">
                                        <h3>Filter section</h3>
                                    </div>
                                    <div id="slider-range" class="ui_slider"></div>
                                    <label for="amount">Price:</label>
                                    <input type="text" id="amount" readonly>
                                </aside>
                                <aside class="l_widgest l_color_widget">
                                    <div class="l_w_title">
                                        <h3>Color</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </aside>
                                <aside class="l_widgest l_menufacture_widget">
                                    <div class="l_w_title">
                                        <h3>Manufacturer</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Nigel Cabourn.</a></li>
                                        <li><a href="#">Cacharel.</a></li>
                                        <li><a href="#">Calibre (Menswear)</a></li>
                                        <li><a href="#">Calvin Klein.</a></li>
                                        <li><a href="#">Camilla and Marc</a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->
        
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