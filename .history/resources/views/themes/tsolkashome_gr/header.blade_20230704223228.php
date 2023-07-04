{{-- 
<div class="relative sm:flex sm:justify-center sm:items-center  bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
@if (Route::has('login'))
<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
    @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
    @endauth
</div>
@endif
<div class="flex justify-center">
    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
    </svg>
</div>
</div>
</div> --}}
<!--================= Preloader Section Start Here =================-->
<div id="weiboo-load">
    <div class="preloader-new">
        <svg class="cart_preloader" role="img" aria-label="Shopping cart_preloader line animation" viewbox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="8">
                <g class="cart__track" stroke="hsla(0,10%,10%,0.1)">
                    <polyline points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80"></polyline>
                    <circle cx="43" cy="111" r="13"></circle>
                    <circle cx="102" cy="111" r="13"></circle>
                </g>
                <g class="cart__lines" stroke="currentColor">
                    <polyline class="cart__top" points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" stroke-dasharray="338 338" stroke-dashoffset="-338"></polyline>
                    <g class="cart__wheel1" transform="rotate(-90,43,111)">
                        <circle class="cart__wheel-stroke" cx="43" cy="111" r="13" stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68"></circle>
                    </g>
                    <g class="cart__wheel2" transform="rotate(90,102,111)">
                        <circle class="cart__wheel-stroke" cx="102" cy="111" r="13" stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68"></circle>
                    </g>
                </g>
            </g>
        </svg>
    </div>
</div>

<div class="anywere anywere-home"></div>

<!--================= Header Section Start Here =================-->
<header id="rtsHeader">
    <div class="header-topbar header-topbar2 header-topbar3">
        <div class="container">
            <div class="header-top-inner">
                <h3 class="welcome-text"><i class="rt-truck"></i> Free shipping for all orders of <span class="value">150$</span></h3>
                <div class="topbar-action">
                    <a href="#" class="action-item mr--40"><i class="rt-store"></i> Store Location<span class="separator"></span></a>
                    <a href="#" class="action-item"><i class="rt-location-dot"></i> Track Order</a>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-part navbar-part navbar-part3">
            <div class="container">
                <div class="navbar-inner navbar-inner2">
                    <a href="index.html" class="logo"><img src="assets/images/logo7.svg" alt="umart-logo"></a>
                    <div class="navbar-search-area">
                        <div class="search-input-inner">
                            <select class="custom-select">
                                <option value="hide">All Catagory</option>
                                <option value="all">All</option>
                                <option value="men">Men</option>
                                <option value="women">Women</option>
                                <option value="shoes">Shoes</option>
                                <option value="shoes">Glasses</option>
                                <option value="shoes">Bags</option>
                                <option value="shoes">Assesories</option>
                            </select>
                            <div class="input-div">
                                <div class="search-input-icon"><i class="rt-search mr--10"></i>Search</div>
                                <input class="search-input input4" type="text" placeholder="Keyword here...">
                            </div>
                        </div>
                    </div>
                    <div class="navbar-select-area">
                        <select class="topbar-select custom-select">
                            <option value="eng">Eng</option>
                            <option value="esp">esp</option>
                            <option value="ban">Ban</option>
                        </select>
                        <select class="topbar-select custom-select last-child">
                            <option value="usd">USD</option>
                            <option value="eur">Euro</option>
                            <option value="tk">Taka</option>
                        </select>
                    </div>
                    <div class="header-action-items header-action-items1">
                        <div class="search-part">
                            <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                            <div class="search-input-area">
                                <div class="container">
                                    <div class="search-input-inner inner-2">
                                        <div class="input-div">
                                            <input class="search-input input4" type="text" placeholder="Search by keyword or #">
                                        </div>
                                        <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart action-item">
                            <div class="cart-nav">
                                <div class="cart-icon icon"><i class="rt-cart"></i><span class="wishlist-dot icon-dot">3</span></div>
                            </div>
                        </div>
                        <div class="wishlist action-item">
                            <div class="favourite-icon icon"><a href="wishlist.html"><i class="rt-heart"></i></a>
                            </div>
                        </div>
                        <a href="login.html" class="account"><i class="rt-user-2"></i></a>
                    </div>
                    <div class="hamburger"><span></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-sticky lower-navbar-sticky">
        <div class="navbar-part navbar-part2 lower-navbar">
            <div class="container">
                <div class="navbar-inner">
                    <a href="index.html" class="logo"><img src="assets/images/logo3.svg" alt="umart-logo"></a>
                    <div class="catagory-select-area">
                        <select class="custom-select">
                            <option value="hide">All Catagory</option>
                            <option value="all">All</option>
                            <option value="men">Men</option>
                            <option value="women">Women</option>
                            <option value="shoes">Shoes</option>
                            <option value="shoes">Glasses</option>
                            <option value="shoes">Bags</option>
                            <option value="shoes">Assesories</option>
                        </select>
                    </div>
                    <div class="rts-menu">
                        <nav class="menus menu-toggle">
                            <ul class="nav__menu">
                                <li class="has-dropdown"><a class="menu-item active1" href="#">Home <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link" href="index.html">Main
                                            Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-two.html">Fashion
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-nine.html">Fashion
                                                Home Two</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-three.html">Furniture
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link active" href="index-four.html">Decor
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-five.html">Electronics
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-six.html">Grocery
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-seven.html">Footwear
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-eight.html">Gaming
                                            Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-ten.html">Sunglass
                                            Home</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a class="menu-item" href="#">Shop <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul mega-dropdown">
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link" href="shop.html">Shop</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="slidebar-left.html">Left Sidebar Shop</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="slidebar-right.html">Right Sidebar Shop</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="full-width-shop.html">Full Width Shop</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link" href="product-details.html">Single Product Layout
                                                        One</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="product-details2.html">Single Product Layout
                                                        Two</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="variable-products.html">Variable Product</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="grouped-products.html">Grouped Product</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li last-child">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link" href="cart.html">Cart</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="checkout.html">Checkout</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="account.html">My Account</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a class="menu-item" href="#">Pages <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link" href="about.html">About</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="faq.html">FAQ's</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="error.html">Error 404</a></li>
                                    </ul>
                                </li>

                                <li class="has-dropdown"><a class="menu-item" href="#">Blog <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link" href="news.html">Blog</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="news-grid.html">Blog Grid</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="news-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a class="menu-item" href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="quick-contact">
                        <a href="tel:123456789" class="phone contact-item"><i class="rt-phone-flip"></i> 568. 685. 350. 56 <span class="separator"></span></a>
                        <a href="mailto:info@webexample.com" class="email contact-item"><i class="rt-envelope"></i> info@webexample.com</a>
                    </div>
                    <div class="hamburger"><span></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-bar">
        <div class="cart-header">
            <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/slider/image1.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Parachute Jacket</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">3 ×</span>
                            <span class="product-price">$198.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="3">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/slider/image2.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Narrow Trouser</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">2 ×</span>
                            <span class="product-price">$88.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item last-child">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/slider/image5.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Bellyless Hoodie</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">1 ×</span>
                            <span class="product-price">$289.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bottom-area">
            <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
                FOR FREE SHIPPING</span>
            <span class="total-price">TOTAL: <span class="price">$556</span></span>
            <a href="checkout.html" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
            <a href="cart.html" class="view-btn cart-btn">VIEW CART</a>
        </div>
    </div>
    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="offset-sidebar">
            <a class="hamburger-1 mobile-hamburger-1 mobile-hamburger-2 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
        </div>
        <!-- offset-sidebar start -->
        <div class="offset-sidebar-main">
            <div class="offset-widget mb-40">
                <div class="info-widget">
                    <img src="assets/images/logo7.svg" alt="">
                    <p class="mb-30">
                        We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                    </p>
                </div>
                <div class="info-widget info-widget2">
                    <h4 class="offset-title mb-20">Get In Touch </h4>
                    <ul>
                        <li class="info phone"><a href="tel:78090790890208806803">780 907 908 90, 208 806 803</a></li>
                        <li class="info email"><a href="email:info@webmail.com">info@webmail.com</a></li>
                        <li class="info web"><a href="www.webexample.com">www.webexample.com</a></li>
                        <li class="info location">13/A, New Pro State, NYC</li>
                    </ul>
                    <div class="offset-social-link">
                        <h4 class="offset-title mb-20">Follow Us </h4>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- offset-sidebar end -->
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu side-mobile-menu1 side-mobile-menu2">
            <ul id="mobile-menu-active">
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="index.html">Home <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Main Home</a></li>
                        <li><a href="index-two.html">Fashion Home</a></li>
                        <li><a href="index-nine.html">Fashion Home Two</a></li>
                        <li><a href="index-three.html">Furniture Home</a></li>
                        <li><a href="index-four.html">Decor Home</a></li>
                        <li><a href="index-five.html">Electronics Home</a></li>
                        <li><a href="index-six.html">Grocery Home</a></li>
                        <li><a href="index-seven.html">Footwear Home</a></li>
                        <li><a href="index-eight.html">Gaming Home</a></li>
                        <li><a href="index-ten.html">Sunglass Home</a></li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="shop.html">Shop <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mega-dropdown-mobile">
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show">
                                <li class="dropdown-li"><a class="dropdown-link" href="shop.html">Shop</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="slidebar-left.html">Left Sidebar
                                        Shop</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="slidebar-right.html">Right Sidebar
                                        Shop</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="full-width-shop.html">Full
                                        Width Shop</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show">
                                <li class="dropdown-li"><a class="dropdown-link" href="product-details.html">Single Product
                                        Layout
                                        One</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="product-details2.html">Single Product Layout
                                        Two</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="variable-products.html">Variable Product</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="grouped-products.html">Grouped Product</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show">
                                <li class="dropdown-li"><a class="dropdown-link" href="cart.html">Cart
                                        </a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="checkout.html">Checkout</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="account.html">My
                                        Account</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="index.html">Pages <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="faq.html">FAQ's</a></li>
                        <li><a href="error.html">Error 404</a></li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="news.html">Blog <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="news.html">Blog</a></li>
                        <li><a href="news-grid.html">Blog Grid</a></li>
                        <li><a href="news-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a class="mm-link" href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <div class="header-action-items header-action-items1 header-action-items-side">
            <div class="search-part">
                <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                <div class="search-input-area">
                    <div class="container">
                        <div class="search-input-inner">
                            <select id="custom-select">
                                <option value="hide">All Catagory</option>
                                <option value="all">All</option>
                                <option value="men">Men</option>
                                <option value="women">Women</option>
                                <option value="shoes">Shoes</option>
                                <option value="shoes">Glasses</option>
                                <option value="shoes">Bags</option>
                                <option value="shoes">Assesories</option>
                            </select>
                            <div class="input-div">
                                <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                <input class="search-input" type="text" placeholder="Search by keyword or #">
                            </div>
                            <div class="search-close-icon"><i class="rt-xmark"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart action-item">
                <div class="cart-nav">
                    <div class="cart-icon icon"><i class="rt-cart"></i><span class="wishlist-dot icon-dot">3</span>
                    </div>
                </div>
            </div>
            <div class="wishlist action-item">
                <div class="favourite-icon icon"><i class="rt-heart"></i><span class="cart-dot icon-dot">0</span>
                </div>
            </div>
            <a href="login.html" class="account"><i class="rt-user-2"></i></a>
        </div>
        <!-- side-mobile-menu end -->
    </aside>
    <!--================= Banner Section Start Here =================-->
    <div class="banner banner-3">
        <div class="swiper bannerSlide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-single bg-image bg-image-3">
                        <div class="container">
                            <div class="single-inner">
                                <div class="contents">
                                    <span class="banner-pretitle-box">Hot Deal In This Week</span>
                                    <h1 class="banner-heading mb--30">Elegance <br>
                                        Hand Craft</h1>
                                    <div class="banner-action">
                                        <a class="banner-btn banner-btn2" href="product-details.html"><i class="rt-cart-shopping"></i>Shop
                                            Now</a>
                                        <div class="banner-review">
                                            <div class="review">
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fal fa-star"></i></div>
                                            </div>
                                            <span class="review-text"><span class="value">100+</span> Review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-product-thumb"><img src="assets/images/products/banner-product.jpg" alt="banner-product"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-single bg-image bg-image-3">
                        <div class="container">
                            <div class="single-inner">
                                <div class="contents">
                                    <span class="banner-pretitle-box">Hot Deal In This Week</span>
                                    <h1 class="banner-heading mb--30">Modern <br>
                                        Hand Craft</h1>
                                    <div class="banner-action">
                                        <a class="banner-btn banner-btn2" href="#0"><i class="rt-cart-shopping"></i>Shop
                                            Now</a>
                                        <div class="banner-review">
                                            <div class="review">
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fal fa-star"></i></div>
                                            </div>
                                            <span class="review-text"><span class="value">100+</span> Review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-product-thumb"><img src="assets/images/products/banner-product2.png" alt="banner-product"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-navigation">
                <div class="swiper-button-prev slider-btn prev"><i class="fal fa-long-arrow-up"></i></div>
                <div class="swiper-button-next slider-btn next"><i class="fal fa-long-arrow-down"></i>
                </div>
            </div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->
</header>
<!--================= Header Section End Here =================-->