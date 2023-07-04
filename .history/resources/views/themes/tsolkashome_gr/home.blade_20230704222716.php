@extends('layouts.public')
@section('title','Tsolkas Home Eshop')
@push('meta')
<meta name="description" content="Στο Tsolkas Home Eshop θα βρείτε είδη σπιτιού,σκεύη κουζίνας, ηλεκτρικές συσκευές, είδη διακόσμησης, έπιπλα κήπου και πολλά άλλα!">
 <meta name="keywords" content="υαλικά,φωτιστικά,είδη οικιακής χρήσης,δώρα,έπιπλα,ηλεκτρικές συσκευές,είδη σπιτιού,είδη κήπου,είδη παραλίας,είδη εξοχής,camping">
@endpush

@push('open-graph')
<meta property="og:title" content="Tsolkas Home Eshop">
<meta property="og:description" content="Στο Tsolkas Home Eshop θα βρείτε είδη σπιτιού,σκεύη κουζίνας, ηλεκτρικές συσκευές, είδη διακόσμησης, έπιπλα κήπου και πολλά άλλα!">
<meta property="og:image" content="https://example.com/image.jpg">
<meta property="og:url" content="{{ url()->current() }}">
@endpush
@push('twitter-card')
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@YourTwitterHandle">
<meta name="twitter:title" content="Your page title">
<meta name="twitter:description" content="Your page description">
<meta name="twitter:image" content="https://example.com/image.jpg">
@endpush
@push('json-ld')
    <!-- JSON-LD Script -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Tsolkas Home Eshop",
            "url": "{{ url()->current() }}",
            "description": "Στο Tsolkas Home Eshop θα βρείτε είδη σπιτιού,σκεύη κουζίνας, ηλεκτρικές συσκευές, είδη διακόσμησης, έπιπλα κήπου και πολλά άλλα!"> <meta name="keywords" content="υαλικά,φωτιστικά,είδη οικιακής χρήσης,δώρα,έπιπλα,ηλεκτρικές συσκευές,είδη σπιτιού,είδη κήπου,είδη παραλίας,είδη εξοχής,camping"
            // Additional properties as needed
        }
        </script>
@endpush
@section('content')
    <!--================= Box Catagory Section Start Here =================-->
    <div class="rts-box-catagory-section">
        <div class="box-catagory-inner">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box1">
                        <a href="category.html" class="picture"><img src="assets/images/post/cata1.png" alt="box-picture"></a>
                        <a href="category.html" class="view-collection-btn">View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="assets/images/icons/bell.png" alt=""></div>
                            <h2 class="box-heading">Stationary &
                                Gift Card</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box2">
                        <a href="category.html" class="picture"><img src="assets/images/post/cata2.png" alt="box-picture"></a>
                        <a href="category.html" class="view-collection-btn">View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="assets/images/icons/pins.png" alt=""></div>
                            <h2 class="box-heading">Handmade
                                Teapots & Mugs</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box3">
                        <a href="category.html" class="picture"><img src="assets/images/post/cata3.png" alt="box-picture"></a>
                        <a href="category.html" class="view-collection-btn">View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="assets/images/icons/tape.png" alt=""></div>
                            <h2 class="box-heading">Furniture Decor
                                Objects</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box4 last-child">
                        <a href="category.html" class="picture"><img src="assets/images/post/cata4.png" alt="box-picture"></a>
                        <a href="category.html" class="view-collection-btn">View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="assets/images/icons/tub.png" alt=""></div>
                            <h2 class="box-heading">Vases & <br>
                                Plant Pots</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Box Catagory Section End Here =================-->



    <!--================= Recent Products Section Start Here =================-->
    <div class="rts-recent_products-section section-gap">
        <div class="container">
            <div class="recent-products-header section-header section-header3">
                <span class="section-pretitle section-pretitle2 mb--15">Featured</span>
                <span class="section-title-2 mb--5
                ">Wood Crafted Products</span>
                <div class="section-line mb-0"><img src="assets/images/items/curlyline.png" alt="line"></div>
            </div>
            <div class="products-area products-area3">
                <div class="row justify-content-center">
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item3">
                            <a href="product-details.html" class="product-image">
                                <img src="assets/images/products/home3/1.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="product-details.html" class="product-name">Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a href="cart.html" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="wishlist.html" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item2">
                            <a href="product-details.html" class="product-image image-slider-variations image-slider-variations3">
                                <div class="swiper productSlide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img src="assets/images/products/home3/2.jpg" alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img src="assets/images/products/home3/7.jpg" alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-buttons">
                                    <div class="button-prev slider-btn"><i class="fal fa-long-arrow-left"></i></div>
                                    <div class="button-next slider-btn"><i class="fal fa-long-arrow-right"></i></div>
                                </div>
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="product-details.html" class="product-name">Wooden Handicraft</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00 <span class="old-price">$43.00</span></span>
                                    <a href="cart.html" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="new-tag product-tag">NEW</div>
                                <div class="discount-tag product-tag">-35%</div>
                            </div>
                            <div class="product-actions">
                                <a href="wishlist.html" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item3 popular">
                            <a href="product-details.html" class="product-image image-gallery-variations image-gallery-variations3">
                                <div class="swiper productGallerySlide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img src="assets/images/products/home3/3.jpg" alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img src="assets/images/products/home3/9.jpg" alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="thumbs-area">
                                <div class="swiper productGallerySlideThumb">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img src="assets/images/products/home3/3.jpg" alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img src="assets/images/products/home3/9.jpg" alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="product-details.html" class="product-name">Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a href="cart.html" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="wishlist.html" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="product-details.html" class="product-image">
                                <img src="assets/images/products/home3/4.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="product-details.html" class="product-name">Modern Handicraft</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a href="cart.html" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="wishlist.html" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="product-details.html" class="product-image">
                                <img src="assets/images/products/home3/5.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <a href="product-details.html" class="product-name">Modern Glasses Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a href="cart.html" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="new-tag product-tag">NEW</div>
                                <div class="hot-tag product-tag">HOT</div>
                            </div>
                            <div class="product-actions">
                                <a href="wishlist.html" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="product-details.html" class="product-image">
                                <img src="assets/images/products/home3/6.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <a href="product-details.html" class="product-name">Adapt Camo Seamless Shorts</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a href="cart.html" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="wishlist.html" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="product-details.html" class="product-image">
                                <img src="assets/images/products/home3/7.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="product-details.html" class="product-name">Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a href="cart.html" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="wishlist.html" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="product-details.html" class="product-image">
                                <img src="assets/images/products/home3/8.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <a href="product-details.html" class="product-name">Adapt Camo Seamless Shorts</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00 <span class="old-price">$43.00</span></span>
                                    <a href="cart.html" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="hot-tag product-tag">HOT</div>
                                <div class="discount-tag product-tag">-35%</div>
                            </div>
                            <div class="product-actions">
                                <a href="wishlist.html" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="product-details.html" class="product-image">
                                <img src="assets/images/products/home3/9.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="product-details.html" class="product-name">Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a href="cart.html" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="wishlist.html" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="product-details.html" class="product-image">
                                <img src="assets/images/products/home3/10.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="product-details.html" class="product-name">Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a href="cart.html" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="wishlist.html" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="shop.html" class="all-products-link">All products <i class="fal fa-long-arrow-right ml--10"></i></a>
            </div>
        </div>
    </div>
    <!--================= Recent Products Section End Here =================-->


    <!--================= Newsletter Section Start Here =================-->
    <div class="newsletter-banner newsletter-banner3 section-space mb-0">
        <div class="container">
            <div class="newsletter-contents">
                <span class="section-title-2 mb--5">Join Our Newsletter</span>
                <div class="section-line mb--20"><img src="assets/images/items/woodline.png" alt="line"></div>

                <div class="newsletter-input">
                    <div class="icon"><i class="fal fa-envelope"></i></div>
                    <input type="email" placeholder="Enter email address">
                    <button type="submit" class="subscribe-btn">
                        Newsletter <i class="fal fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--================= Newsletter Section End Here =================-->


    <!--================= New Collection Section Start Here =================-->
    <div class="rts-wood-products-section section-space">
        <div class="container">
            <div class="section-header section-header3 text-start">
                <div class="wrapper d-flex flex-column">
                    <span class="section-pretitle mb--15">Hand-Picked</span>
                    <span class="section-title-2 mb--5
                ">Wood Crafted Products</span>
                    <div class="section-line mb-0"><img src="assets/images/items/woodline.png" alt="line"></div>
                </div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev slider-btn prev"><i class="fal fa-angle-left"></i>Prev</div>
                    <div class="swiper-button-next slider-btn next">Next<i class="fal fa-angle-right"></i></div>
                </div>
            </div>
            <div class="slider-div">
                <div class="swiper rts-sixSlide-over">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="product-details.html"><img src="assets/images/products/home3/1.jpg" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Painting Handicraft</a>
                                    <div class="action-wrap">
                                        <span class="product-price">$31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="product-details.html"><img src="assets/images/products/home3/2.jpg" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Wooden Handicraft</a>
                                    <div class="action-wrap">
                                        <span class="product-price">$31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="product-details.html"><img src="assets/images/products/home3/3.jpg" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Balli Handicraft</a>
                                    <div class="action-wrap">
                                        <span class="product-price">$31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="product-details.html"><img src="assets/images/products/home3/4.jpg" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Minimalist Beard Mug</a>
                                    <div class="action-wrap">
                                        <span class="product-price">$31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="product-details.html"><img src="assets/images/products/home3/5.jpg" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Minimalist Beard Mug</a>
                                    <div class="action-wrap">
                                        <span class="product-price">$31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="product-details.html"><img src="assets/images/products/home3/6.jpg" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Classic Handicraft</a>
                                    <div class="action-wrap">
                                        <span class="product-price">$31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Heading Section Start Here =================-->


    
    <!--================= brands Section Start Here =================-->
    <div class="rts-brands-section">
        <div class="container">
            <div class="recent-products-header section-header section-header2">
                <span class="section-pretitle mb--10">Sponsors</span>
                <span class="section-title-2">100+ Happy Users</span>
                <div class="section-line mb-0"><img src="assets/images/items/curlyline.png" alt="line"></div>
            </div>
            <div class="brands-section-inner">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="assets/images/brands/1.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="assets/images/brands/2.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="assets/images/brands/3.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="assets/images/brands/4.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="assets/images/brands/5.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="assets/images/brands/6.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="assets/images/brands/7.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="assets/images/brands/8.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="assets/images/brands/9.png" alt="brand"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= brands Section End Here =================-->


    <!--================= Newsletter Popup Start Here =================-->
    <div class="rts-newsletter-popup">
        <div class="newsletter-close-btn"><i class="fal fa-times"></i></div>
        <div class="newsletter-inner">
            <h3 class="newsletter-heading">Get Weekly Newsletter</h3>
            <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack
                PS23. It is a completely modern design</p>
            <form>
                <div class="input-area">
                    <div class="input-div"><input type="text" placeholder="Your name">
                        <div class="input-icon"><i class="far fa-user"></i></div>
                    </div>
                    <div class="input-div"><input type="email" placeholder="Email address" required="">
                        <div class="input-icon"><i class="far fa-envelope"></i></div>
                    </div>
                </div>
                <button type="submit" class="subscribe-btn">Subscribe Now <i class="fal fa-long-arrow-right ml--5"></i></button>
            </form>
        </div>
    </div>
    <!--================= Newsletter Popup End Here =================-->


    <!--================= Product-details Section Start Here =================-->
    <div class="product-details-popup-wrapper">
        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
            <div class="product-details-popup">
                <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
                <div class="details-product-area">
                    <div class="product-thumb-area">
                        <div class="cursor"></div>
                        <div class="thumb-wrapper one filterd-items figure">
                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/products/product-details.jpg)"><img src="assets/images/products/product-details.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/products/product-filt2.jpg)"><img src="assets/images/products/product-filt2.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/products/product-filt3.jpg)"><img src="assets/images/products/product-filt3.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img src="assets/images/products/product-filt1.jpg" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img src="assets/images/products/product-filt2.jpg" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img src="assets/images/products/product-filt3.jpg" alt="product-thumb-filter"></div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Dress</span>
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                <span>10 Reviews</span>
                            </div>
                        </div>
                        <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                        <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                        <p>
                            Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                            completely modern design and you feel comfortable to put on this hijab.
                            Buy it at the best price.
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button minus"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01">
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="cart.html" class="addto-cart-btn action-item"><i class="rt-basket-shopping"></i>
                                Add To
                                Cart</a>
                            <a href="wishlist.html" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                        </div>
                        <div class="product-uniques">
                            <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                            <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                            <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                        </div>
                        <div class="share-social">
                            <span>Share:</span>
                            <a class="platform" href="../../../index.htm" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="../../../index-1.htm" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="platform" href="../../../index-2.htm" target="_blank"><i class="fab fa-behance"></i></a>
                            <a class="platform" href="../../../index-3.htm" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a class="platform" href="../../../index-4.htm" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Product-details Section End Here =================-->
@endsection