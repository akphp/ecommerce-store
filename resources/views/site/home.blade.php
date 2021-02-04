@extends('layouts.site.master')
@section('title')
   @lang('admin.home')
@endsection
@section('content')
  




        
<!-- Slider Area Start Here -->
<div class="main-page-banner ptb-5">
    <!-- Slider Area Start Here -->
    <div class="">
        <div class="slider-wrapper theme-default">
            <!-- Slider Background  Image Start-->
            <div id="slider" class="nivoSlider">

                    @foreach ($slider_images as $slide)
                    <a href="#">

                    <img src="{{ (string)$slide['image'] }}" alt="" title="#htmlcaption{{ $slide['id'] }}" data-thumb="{{ (string)$slide['image'] }}" />
                </a>

                    @endforeach
              
            </div>
            <div class="slider-progress"></div>
        </div>
    </div>
    <!-- Slider Area End Here -->
</div>
<!-- Slider Area End Here -->


<!-- Categorie Products Start -->
<div class="slider-bottom-product mb-45">
    <div class="">
        <div class="categore-slider-active owl-carousel">

            @foreach ($categories as $category)
            @if($category['top'] == null )

            <!-- Single Categorie Start -->
            <div class="single-categorie">
                <!-- Product Image Start -->
                <div class="cat-img">
                    <a href="#">
                        <img class="primary-img imgRed" src="{{ env('APP1_URL').$category['image'] }}" alt="single-product">

                        {{--  <img class="primary-img" src="{{  env('APP1_URL') . $category['image'] }}" alt="single-product">  --}}
                    </a>
                </div>
                <!-- Product Image End -->

                <div class="cat-content">
                    <h4><a href="#"> 
                        {{ $category['name_'.app()->getLocale()] ??  $category['name'] }}    
                    </a></h4>
                </div>

                <!-- Product Content End -->
            </div>
            <!-- Single Categorie End -->
            @endif
            @endforeach

        </div>
        <!-- Categorie Slider End -->
    </div>
    <!-- Container End -->
</div>
<!-- Categorie Products End -->


<!-- Multiple Banner Area Start Here -->
<div class="multiple-banner multi-banner-style-two pb-45">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Single Banner Start -->
                <div class="single-banner mb-30">
                    <p class="capto111">عروض العائلة </p>
                    <a href="#"><img src="{{ url('/') }}/website/img/banner/ad1.png" alt="single-banner"></a>

                    <a class="capt22" href="#">تسوق </a>
                </div>
                <!-- Single Banner End -->
                <!-- Single Banner Start -->
                <div class="single-banner mt-sm-30">
                    <p class="capto111">عروض الاحذية </p>

                    <a href="#"><img src="{{ url('/') }}/website/img/banner/ad2.png" alt="single-banner"></a>
                    <a class="capt22" href="#">تسوق </a>

                </div>
                <!-- Single Banner End -->
            </div>
            <div class="col-md-4">
                <!-- Single Banner Start -->
                <div class="single-banner  mb-30  mt-sm-30">
                    <p class="capto111"> عروض المقاعد </p>

                    <a href="#"><img src="{{ url('/') }}/website/img/banner/ad5.png" alt="single-banner"></a>
                    <a class="capt22" href="#">تسوق </a>

                </div>
                <!-- Single Banner End -->

                <!-- Single Banner Start -->
                <div class="single-banner mt-sm-30">
                    <p class="capto111">عروض الملابس </p>
                    <a href="#"><img src="{{ url('/') }}/website/img/banner/adv4.png" alt="single-banner"></a>
                    <a class="capt22" href="#">تسوق </a>

                </div>
                <!-- Single Banner End -->
            </div>
            <div class="col-md-4">
                <!-- Single Banner Start -->
                <div class="single-banner mt-sm-30">
                    <p class="capto111"> خصومات على شهر 10 </p>
                    <a href="#"><img src="{{ url('/') }}/website/img/banner/ad3.png" alt="single-banner" height="650px"></a>
                </div>
                <!-- Single Banner End -->

            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Multiple Banner Area End Here -->


<!-- Featured Products Start Here -->
@include('site.includes.product.featured' , ['home_sliders' => $home_sliders])
<!-- Featured Products End Here -->

{{--  <!-- Big Banner Start Here -->
<div class="offer-area1 hidden-after-desk pb-45 mb-50">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="brand-area-box-r mt-20">
                    <a href="#"><img src="{{ url('/') }}/website/img/ad1.png" alt="offer"></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="brand-area-box-l text-center">
                    <span>العودة الدراسية</span>
                    <h1> أقوي خصومات تصل إلي 65% </h1>
                    <p>BACK TO SCHOOL</p>
                    <a href="#" class="btn-shop-now-fill">تسوق الآن</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- Big Banner End Here -->  --}}


<!-- New Products Start Here -->
{{--  @include('site.includes.product.new' , ['products' => $products])  --}}

<!-- New Products End Here -->




  {{--  <!-- Big Banner Start Here -->
  <div class="offer-area1 offer-area22 hidden-after-desk pb-45 mb-50">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="brand-area-box-r mt-20">
                    <a href="#"><img src="{{ url('/') }}/website/img/ad2.png" alt="offer"></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="brand-area-box-l text-center">
                    <span> عروض الموضة </span>
                    <h1> أقوي خصومات تصل إلي 65% </h1>
                    <p>FASHOIN DEALS</p>
                    <a href="#" class="btn-shop-now-fill">تسوق الآن</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- Big Banner End Here -->

<!-- Big Banner Start Here -->
<div class="big-banner pb-45">
    <div class="container">
        <div class="single-banner">
            <img src="{{ url('/') }}/website/img/banner/23.jpg" alt="">
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Big Banner End Here -->

<!-- Featured Products Start Here -->
<div class="second-featured-products more-featured-pro pb-45">
    <div class="container">
        <!-- Post Title Start -->
        <div class="post-title">
            <h2>
                عروض الموضة
            </h2>
        </div>
        <!-- Post Title End -->
        <!-- New Pro Tow Activation Start -->
        <div class="more-fearured-pro-active owl-carousel">
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/36.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/37.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$19.99</span><del class="prev-price">$32.90</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->

            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/19.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/18.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">summer hot dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$22.99</span></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->

            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/37.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/36.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed hot dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$22.45</span><del class="prev-price">$32.60</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/31.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/30.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$27.45</span><del class="prev-price">$30.50</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/9.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/10.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$27.45</span><del class="prev-price">$30.50</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
        </div>
        <!-- New Pro Tow Activation End -->
    </div>
    <!-- Container End -->
</div>
<!-- Featured Products End Here -->

<!-- Featured Products Start Here -->
<div class="second-featured-products more-featured-pro pb-45">
    <div class="container">
        <!-- Post Title Start -->
        <div class="post-title">
            <h2>
                الاكثر رواجا
            </h2>
        </div>
        <!-- Post Title End -->
        <!-- New Pro Tow Activation Start -->
        <div class="more-fearured-pro-active owl-carousel">
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/36.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/37.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$19.99</span><del class="prev-price">$32.90</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->

            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/19.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/18.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">summer hot dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$22.99</span></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->

            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/37.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/36.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed hot dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$22.45</span><del class="prev-price">$32.60</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/31.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/30.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$27.45</span><del class="prev-price">$30.50</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/9.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/10.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$27.45</span><del class="prev-price">$30.50</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
        </div>
        <!-- New Pro Tow Activation End -->
    </div>
    <!-- Container End -->
</div>
<!-- Featured Products End Here -->
  --}}




<!-- Featured Products Start Here -->
<div class="second-featured-products more-featured-pro pb-45">
    <div class="container">
        <!-- Post Title Start -->
        <div class="post-title">
            <h2>
                منتجات متميزة
            </h2>
        </div>
        <!-- Post Title End -->
        <!-- New Pro Tow Activation Start -->
        <div class="more-fearured-pro-active owl-carousel">
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/36.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/37.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$19.99</span><del class="prev-price">$32.90</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->

            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/19.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/18.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">summer hot dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$22.99</span></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->

            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/37.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/36.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed hot dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$22.45</span><del class="prev-price">$32.60</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/31.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/30.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$27.45</span><del class="prev-price">$30.50</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/9.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/10.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$27.45</span><del class="prev-price">$30.50</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
        </div>
        <!-- New Pro Tow Activation End -->
    </div>
    <!-- Container End -->
</div>
<!-- Featured Products End Here -->




<!-- Featured Products Start Here -->
<div class="second-featured-products more-featured-pro pb-45">
    <div class="container">
        <!-- Post Title Start -->
        <div class="post-title">
            <h2>
                منتجات مختارة لك
            </h2>
        </div>
        <!-- Post Title End -->
        <!-- New Pro Tow Activation Start -->
        <div class="more-fearured-pro-active owl-carousel">
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/36.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/37.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$19.99</span><del class="prev-price">$32.90</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->

            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/19.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/18.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">summer hot dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$22.99</span></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->

            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/37.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/36.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed hot dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$22.45</span><del class="prev-price">$32.60</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/31.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/30.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$27.45</span><del class="prev-price">$30.50</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
            <!-- double Product Start -->
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="#">
                            <img class="primary-img" src="{{ url('/') }}/website/img/products/9.jpg" alt="single-product">
                            <img class="secondary-img" src="{{ url('/') }}/website/img/products/10.jpg" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="#">printed summer dress</a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price">$27.45</span><del class="prev-price">$30.50</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->
            </div>
            <!-- double Product End -->
        </div>
        <!-- New Pro Tow Activation End -->
    </div>
    <!-- Container End -->
</div>
<!-- Featured Products End Here -->









<!-- Signup Newsletter Start -->
<div class="newsletter orang-bg mt-50">
    <div class="container">
        <div class="row">

            <div class="col-xl-7 col-lg-6">
                <h3 class="mt-5 text-center">انضم الى نشرتنا البريدية </h3>

                <div class="newsletter-box">
                    <form action="#">

                        <input class="subscribe" placeholder="ادخل البريد الالكترنى  " name="email"
                            id="subscribe" type="text">
                        <button type="submit item-btn btn-shop-now-light2 border-radius45" class="submit">متابعة</button>
                    </form>
                </div>
            </div>

            <div class="col-xl-5 col-lg-6">
                <div class="main-news-desc mb-all-30">
                    <div class="news-desc">
                        <div class="pro-img">
                            <img src="{{ url('/') }}/website/img/22.png" height="250" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Signup-Newsletter End -->


@endsection