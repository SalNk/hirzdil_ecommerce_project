@extends('layouts.app')

@section('content')
    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">My Account</li>
                            </ul>
                            <h1 class="title">Explore All Products</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="assets/images/product/product-45.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Shop Area  -->
        <div class="axil-shop-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="axil-shop-top">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="category-select">

                                        <!-- Start Single Select  -->
                                        <select class="single-select">
                                            <option>Categories</option>
                                            <option>Fashion</option>
                                            <option>Electronics</option>
                                            <option>Furniture</option>
                                            <option>Beauty</option>
                                        </select>
                                        <!-- End Single Select  -->

                                        <!-- Start Single Select  -->
                                        <select class="single-select">
                                            <option>Color</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>Green</option>
                                            <option>Pink</option>
                                        </select>
                                        <!-- End Single Select  -->

                                        <!-- Start Single Select  -->
                                        <select class="single-select">
                                            <option>Price Range</option>
                                            <option>0 - 100</option>
                                            <option>100 - 500</option>
                                            <option>500 - 1000</option>
                                            <option>1000 - 1500</option>
                                        </select>
                                        <!-- End Single Select  -->

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                        <!-- Start Single Select  -->
                                        <select class="single-select">
                                            <option>Sort by Latest</option>
                                            <option>Sort by Name</option>
                                            <option>Sort by Price</option>
                                            <option>Sort by Viewed</option>
                                        </select>
                                        <!-- End Single Select  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row--15">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/electric/product-01.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">3D™ wireless headset</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$30</span>
                                        <span class="price old-price">$30</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/electric/product-02.png" alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">Media remote</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$40</span>
                                        <span class="price old-price">$50</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/electric/product-03.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">30% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">HD camera</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$45</span>
                                        <span class="price old-price">$60</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/electric/product-04.png" alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">Guys Bomber Jacket</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$70</span>
                                        <span class="price old-price">$100</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/electric/product-05.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">15% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">Level 20 RGB Cherry</a>
                                    </h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$38</span>
                                        <span class="price old-price">$50</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/electric/product-06.png" alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">Level 20 RGB Cherry</a>
                                    </h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$25</span>
                                        <span class="price old-price">$40</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/electric/product-07.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">5% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">Logitech Streamcam</a>
                                    </h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$15</span>
                                        <span class="price old-price">$20</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/electric/product-08.png" alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">Bass Meets Clarity</a>
                                    </h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$60</span>
                                        <span class="price old-price">$80</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/fashion/product-9.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">Wall Mount</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$30</span>
                                        <span class="price old-price">$30</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/fashion/product-10.png" alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">MX Master 3</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$40</span>
                                        <span class="price old-price">$50</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/fashion/product-11.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">30% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">Zone Headphone</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$45</span>
                                        <span class="price old-price">$60</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="{{ route('detail_product') }}">
                                    <img src="assets/images/product/fashion/product-12.png" alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route('detail_product') }}">Mice Logitech</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$70</span>
                                        <span class="price old-price">$100</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                </div>
                <div class="text-center pt--30">
                    <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Load more</a>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Shop Area  -->
        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i
                                class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->
    </main>

    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service1.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service2.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service3.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service4.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
