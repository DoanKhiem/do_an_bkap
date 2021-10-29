<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.hasthemes.com/jesco/jesco/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 May 2021 11:55:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>@yield('title')</title>
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{url('user')}}/images/favicon/favicon.ico" type="image/png">


    <!-- vendor css (Icon Font) -->
{{--    <link rel="stylesheet" href="{{url('user')}}/css/vendor/bootstrap.bundle.min.css" />--}}
{{--    <link rel="stylesheet" href="{{url('user')}}/css/vendor/pe-icon-7-stroke.css" />--}}
{{--    <link rel="stylesheet" href="{{url('user')}}/css/vendor/font.awesome.css" />--}}

    <!-- plugins css (All Plugins Files) -->
{{--    <link rel="stylesheet" href="{{url('user')}}/css/plugins/animate.css" />--}}
{{--    <link rel="stylesheet" href="{{url('user')}}/css/plugins/swiper-bundle.min.css" />--}}
{{--    <link rel="stylesheet" href="{{url('user')}}/css/plugins/jquery-ui.min.css" />--}}
{{--    <link rel="stylesheet" href="{{url('user')}}/css/plugins/nice-select.css" />--}}
{{--    <link rel="stylesheet" href="{{url('user')}}/css/plugins/venobox.css" />--}}

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{url('user')}}/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="{{url('user')}}/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="{{url('user')}}/css/style.min.css">

    <!-- Main Style -->
{{--    <link rel="stylesheet" href="{{url('user')}}/css/style.css" />--}}

</head>

<body>

    <!-- Top Bar -->
    <div class="header-to-bar"> HELLO EVERYONE! 25% Off All Products </div>
    <!-- Top Bar -->

    <!-- Header Area Start -->
    @include('user.layouts.header')
    <!-- Header Area End -->

    <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    @include('user.layouts.offcanvas-wishlist')
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    @include('user.layouts.offcanvas-cart')
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>

        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.php"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.php"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li class="title"><a href="#">Shop Page</a></li>
                                    <li><a href="shop-3-column.php">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.php">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.php">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.php">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.php">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.php">Shop List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.php">Product Single</a></li>
                                    <li><a href="single-product-variable.php">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.php">Product Affiliate</a></li>
                                    <li><a href="single-product-group.php">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.php">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.php">Product Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider.php">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.php">Product Gallery Left</a>
                                    </li>
                                    <li><a href="single-product-gallery-right.php">Product Gallery Right</a>
                                    </li>
                                    <li><a href="single-product-sticky-left.php">Product Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.php">Product Sticky Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.php">Cart Page</a></li>
                                    <li><a href="checkout.php">Checkout Page</a></li>
                                    <li><a href="compare.php">Compare Page</a></li>
                                    <li><a href="wishlist.php">Wishlist Page</a></li>
                                    <li><a href="my-account.php">Account Page</a></li>
                                    <li><a href="login.php">Login & Register Page</a></li>
                                    <li><a href="empty-cart.php">Empty Cart Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404.php">404 Page</a></li>
                                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                    <li><a href="faq.php">Faq Page</a></li>
                                    <li><a href="coming-soon.php">Coming Soon Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.php">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar.php">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar.php">Grid Right Sidebar</a></li>
                            <li><a href="blog-single.php">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar.php">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.php">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->

    @yield('master')

    <!-- Footer Area Start -->
    @include('user.layouts.footer')
    <!-- Footer Area End -->

    <!-- Search Modal Start -->
    @include('user.layouts.search-modal')
    <!-- Search Modal End -->

    <!-- Login Modal Start -->
    @include('user.layouts.login-modal')
    <!-- Login Modal End -->

    <!-- Modal -->
    @include('user.layouts.modal')
    <!-- Modal end -->

    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
{{--    <script src="{{url('user')}}/js/vendor/jquery-3.5.1.min.js"></script>--}}

{{--    <script src="{{url('user')}}/js/vendor/bootstrap.bundle.min.js"></script>--}}
{{--    <script src="{{url('user')}}/js/vendor/jquery-migrate-3.3.0.min.js"></script>--}}
{{--    <script src="{{url('user')}}/js/vendor/modernizr-3.11.2.min.js"></script>--}}

    <!--Plugins JS-->
{{--    <script src="{{url('user')}}/js/plugins/swiper-bundle.min.js"></script>--}}
{{--    <script src="{{url('user')}}/js/plugins/jquery-ui.min.js"></script>--}}
{{--    <script src="{{url('user')}}/js/plugins/jquery.nice-select.min.js"></script>--}}
{{--    <script src="{{url('user')}}/js/plugins/countdown.js"></script>--}}
{{--    <script src="{{url('user')}}/js/plugins/scrollup.js"></script>--}}
{{--    <script src="{{url('user')}}/js/plugins/jquery.zoom.min.js"></script>--}}
{{--    <script src="{{url('user')}}/js/plugins/venobox.min.js"></script>--}}
{{--    <script src="{{url('user')}}/js/plugins/ajax-mail.js"></script>--}}

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{url('user')}}/js/vendor/vendor.min.js"></script>
    <script src="{{url('user')}}/js/plugins/plugins.min.js"></script>

    <!-- Main Js -->
    <script src="{{url('user')}}/js/main.js"></script>
</body>


<!-- Mirrored from htmldemo.hasthemes.com/jesco/jesco/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 May 2021 11:56:35 GMT -->
</html>



