@extends('layouts.app')

@section('content')

        <x-hero />

        <!-- Banner Section Start -->
        <div class="section section-padding-02 mt-n6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner">
                            <img src="assets/images/banner/banner-01.jpg" alt="Banner">

                            <div class="banner-content">
                                <h3 class="title"><a href="shop-grid-4-column.html">New Ruben Teak <br> Sideboard</a></h3>
                                <span class="discount">30% Off</span>
                                <a class="btn btn-primary btn-hover-dark" href="shop-grid-4-column.html">Shop Now</a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner">
                            <img src="assets/images/banner/banner-02.jpg" alt="Banner">

                            <div class="banner-content">
                                <h3 class="title"><a href="shop-grid-4-column.html">New Reversible <br> Sofa</a></h3>
                                <span class="discount">30% Off</span>
                                <a class="btn btn-primary btn-hover-dark" href="shop-grid-4-column.html">Shop Now</a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner">
                            <img src="assets/images/banner/banner-03.jpg" alt="Banner">

                            <div class="banner-content">
                                <h3 class="title"><a href="shop-grid-4-column.html">New Lamp Light <br> Collection</a></h3>
                                <span class="discount">30% Off</span>
                                <a class="btn btn-primary btn-hover-dark" href="shop-grid-4-column.html">Shop Now</a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!-- New Product Section Start -->
        <div class="section section-padding mt-n10">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner-02 mt-10">
                            <img src="assets/images/banner/banner-04.jpg" alt="Banner">

                            <div class="banner-content">
                                <h3 class="title"><a href="shop-grid-left-sidebar.html">All New Furniture</a></h3>
                                <span class="discount">40% Off</span>
                                <a class="btn btn-primary btn-hover-dark" href="shop-grid-left-sidebar.html">Shop Now</a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-9 ">

                        <x-wrapper :title="'New products'" :wrapper="$newProducts" />

                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Section End -->

        <!-- Call To Action Section Start -->
        <div class="section call-to-action" style="background-image: url(assets/images/bg-1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <!-- Call To Action Content Start -->
                        <div class="call-to-action-content text-center">
                            <h1 class="title">Welcome To Store</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="shop-grid-left-sidebar.html" class="btn btn-primary btn-hover-dark">purchase now</a>
                        </div>
                        <!-- Call To Action Content End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action Section End -->

        <!-- Best Sellers Section Start -->
        <div class="section section-padding-02 mt-n10">
            <div class="container">
                <div class="row flex-row-reverse justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner-02 mt-10">
                            <img src="assets/images/banner/banner-04.jpg" alt="Banner">

                            <div class="banner-content">
                                <h3 class="title"><a href="shop-grid-left-sidebar.html">All New Furniture</a></h3>
                                <span class="discount">40% Off</span>
                                <a class="btn btn-primary btn-hover-dark" href="shop-grid-left-sidebar.html">Shop Now</a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-9">
                        <!-- Product Wrapper Start -->
                        <div class="product-wrapper mt-9 product-active">

                            <!-- Product Top Wrapper Start -->
                            <div class="product-top-wrapper">

                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="title"># Best Sellers</h2>
                                </div>
                                <!-- Section Title End -->

                                <!-- Product Menu Start -->
                                <div class="product-menu">
                                    <ul class="nav">
                                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab4">All Time</button></li>
                                        <li><button data-bs-toggle="tab" data-bs-target="#tab5">This Year</button></li>
                                        <li><button data-bs-toggle="tab" data-bs-target="#tab6">This Month</button></li>
                                    </ul>
                                </div>
                                <!-- Product Menu End -->

                                <!-- Swiper Arrows End -->
                                <div class="swiper-arrows">
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                    <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                                </div>
                                <!-- Swiper Arrows End -->

                            </div>
                            <!-- Product Top Wrapper End -->

                            <!-- Product Tabs Content Start -->
                            <div class="product-tabs-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab4">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <a href="product-details.html"><img src="assets/images/product/product-04.jpg" alt="product"></a>
                                                        <div class="product-content">
                                                            <h4 class="title"><a href="product-details.html">High quality vase bottle</a></h4>
                                                            <div class="price">
                                                                <span class="sale-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <ul class="product-meta">
                                                            <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="swiper-slide">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt="product"></a>
                                                        <div class="product-content">
                                                            <h4 class="title"><a href="product-details.html">Living & Bedroom Chair</a></h4>
                                                            <div class="price">
                                                                <span class="sale-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <ul class="product-meta">
                                                            <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="swiper-slide">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <a href="product-details.html"><img src="assets/images/product/product-06.jpg" alt="product"></a>
                                                        <div class="product-content">
                                                            <h4 class="title"><a href="product-details.html">Herman Arm Grey Chair</a></h4>
                                                            <div class="price">
                                                                <span class="sale-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <ul class="product-meta">
                                                            <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab5">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt="product"></a>
                                                        <div class="product-content">
                                                            <h4 class="title"><a href="product-details.html">Elona bedside grey table</a></h4>
                                                            <div class="price">
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                        <ul class="product-meta">
                                                            <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="swiper-slide">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <a href="product-details.html"><img src="assets/images/product/product-02.jpg" alt="product"></a>
                                                        <div class="product-content">
                                                            <h4 class="title"><a href="product-details.html">Simple minimal Chair</a></h4>
                                                            <div class="price">
                                                                <span class="sale-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <ul class="product-meta">
                                                            <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="swiper-slide">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <a href="product-details.html"><img src="assets/images/product/product-03.jpg" alt="product"></a>
                                                        <div class="product-content">
                                                            <h4 class="title"><a href="product-details.html"> Pendant Chandelier Light</a></h4>
                                                            <div class="price">
                                                                <span class="sale-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <ul class="product-meta">
                                                            <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab6">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <a href="product-details.html"><img src="assets/images/product/product-07.jpg" alt="product"></a>
                                                        <div class="product-content">
                                                            <h4 class="title"><a href="product-details.html">Wooden decorations</a></h4>
                                                            <div class="price">
                                                                <span class="sale-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <ul class="product-meta">
                                                            <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="swiper-slide">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <a href="product-details.html"><img src="assets/images/product/product-08.jpg" alt="product"></a>
                                                        <div class="product-content">
                                                            <h4 class="title"><a href="product-details.html">Herman Seater Sofa</a></h4>
                                                            <div class="price">
                                                                <span class="sale-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <ul class="product-meta">
                                                            <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="swiper-slide">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt="product"></a>
                                                        <div class="product-content">
                                                            <h4 class="title"><a href="product-details.html">Reece Seater Sofa</a></h4>
                                                            <div class="price">
                                                                <span class="sale-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <ul class="product-meta">
                                                            <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                            <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Tabs Content End -->

                        </div>
                        <!-- Product Wrapper End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Best Sellers Section End -->

        <!-- Benefit Section Start -->
        <div class="section section-padding mt-n6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">

                        <!-- Single Benefit Start -->
                        <div class="single-benefit">
                            <img src="assets/images/icon/icon-1.png" alt="Icon">
                            <h3 class="title">Free Shipping</h3>
                            <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                        </div>
                        <!-- Single Benefit End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single Benefit Start -->
                        <div class="single-benefit">
                            <img src="assets/images/icon/icon-2.png" alt="Icon">
                            <h3 class="title">Safe Payment</h3>
                            <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                        </div>
                        <!-- Single Benefit End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single Benefit Start -->
                        <div class="single-benefit">
                            <img src="assets/images/icon/icon-3.png" alt="Icon">
                            <h3 class="title">Online Support</h3>
                            <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                        </div>
                        <!-- Single Benefit End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Benefit Section End -->

        <!-- Sale Product Section Start -->
        <div class="section section-padding bg-color-01">
            <div class="container">
                <div class="">
                    <!-- Product Wrapper Start -->
                    <div class="product-wrapper product-active-02">

                        <!-- Product Top Wrapper Start -->
                        <div class="product-top-wrapper mt-n1">

                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="title"># Sale Products</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Product Menu Start -->
                            <div class="product-menu">
                                <ul class="nav">
                                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab7">All Time</button></li>
                                    <li><button data-bs-toggle="tab" data-bs-target="#tab8">This Year</button></li>
                                    <li><button data-bs-toggle="tab" data-bs-target="#tab9">This Month</button></li>
                                </ul>
                            </div>
                            <!-- Product Menu End -->

                            <!-- Swiper Arrows End -->
                            <div class="swiper-arrows">
                                <!-- Add Arrows -->
                                <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            </div>
                            <!-- Swiper Arrows End -->

                        </div>
                        <!-- Product Top Wrapper End -->

                        <!-- Product Tabs Content Start -->
                        <div class="product-tabs-content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab7">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-07.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Wooden decorations</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-08.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Herman Seater Sofa</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-09.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Reece Seater Sofa</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-10.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Round Swivel Chair</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab8">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-01.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Elona bedside grey table</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-02.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Simple minimal Chair</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-03.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Pendant Chandelier Light</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-04.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">High quality vase bottle</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab9">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-04.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">High quality vase bottle</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-03.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Pendant Chandelier Light</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-01.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Elona bedside grey table</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="#"><img src="assets/images/product/product-10.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Round Swivel Chair</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Tabs Content End -->

                    </div>
                    <!-- Product Wrapper End -->
                </div>
            </div>
        </div>
        <!-- Sale Product Section End -->

        <!-- Product Banner Section Start -->
        <div class="section">
            <div class="products-banner products-banner-active">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!-- Single Products Banner Start -->
                            <div class="single-products-banner">
                                <img src="assets/images/products-banner/products-01.jpg" alt="Products">

                                <div class="products-banner-content">
                                    <div class="banner-content-wrapper">
                                        <h4 class="title"><a href="product-details.html">Drawing Furniture</a></h4>
                                        <span class="products-count">15 Products</span>
                                        <a href="product-details.html" class="arrow"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Products Banner End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Single Products Banner Start -->
                            <div class="single-products-banner">
                                <img src="assets/images/products-banner/products-02.jpg" alt="Products">

                                <div class="products-banner-content">
                                    <div class="banner-content-wrapper">
                                        <h4 class="title"><a href="product-details.html">Drawing Furniture</a></h4>
                                        <span class="products-count">15 Products</span>
                                        <a href="product-details.html" class="arrow"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Products Banner End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Single Products Banner Start -->
                            <div class="single-products-banner">
                                <img src="assets/images/products-banner/products-03.jpg" alt="Products">

                                <div class="products-banner-content">
                                    <div class="banner-content-wrapper">
                                        <h4 class="title"><a href="product-details.html">Drawing Furniture</a></h4>
                                        <span class="products-count">15 Products</span>
                                        <a href="product-details.html" class="arrow"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Products Banner End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Single Products Banner Start -->
                            <div class="single-products-banner">
                                <img src="assets/images/products-banner/products-04.jpg" alt="Products">

                                <div class="products-banner-content">
                                    <div class="banner-content-wrapper">
                                        <h4 class="title"><a href="product-details.html">Drawing Furniture</a></h4>
                                        <span class="products-count">15 Products</span>
                                        <a href="product-details.html" class="arrow"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Products Banner End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Banner Section End -->
@endsection
