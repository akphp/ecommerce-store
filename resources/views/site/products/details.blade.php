@extends('layouts.site.master')
@section('title')
   @lang('admin.details') : 
    {{  $details['name'] }}
@endsection
@section('content')
  



<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
  <div class="container">
      <div class="breadcrumb">
          <ul class="d-flex align-items-center">
              <li><a href="{{ route('home') }}"> @lang('admin.home') </a></li>
              <li><a href="#">@lang('admin.shop') </a></li>
              <li class="active"><a href="product.html"> {{  $details['name'] }} </a></li>
          </ul>
      </div>
  </div>
  <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Product Thumbnail Start -->
<div class="main-product-thumbnail ptb-45">
  <div class="container">
      <div class="thumb-bg">
          <div class="row">
              <!-- Main Thumbnail Image Start -->
              <div class="col-lg-5 mb-all-40">
                  <!-- Thumbnail Large Image start -->
                  <div class="tab-content">
                      <div id="thumb1" class="tab-pane fade show active">
                          <a data-fancybox="images" href="{{  env('APP1_URL').$details['image'] }}"><img src="{{  env('APP1_URL').$details['image'] }}" alt="product-view"></a>
                      </div>
                  </div>
                  <!-- Thumbnail Large Image End -->
                  <!-- Thumbnail Image End -->
                  <div class="product-thumbnail">
                      <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                          <a class="active" data-toggle="tab" href="#thumb1">
                              <img src="{{  env('APP1_URL').$details['image'] }}" alt="{{ $details['name'] }}"></a>
                      </div>
                  </div>
                  <!-- Thumbnail image end -->
              </div>
              <!-- Main Thumbnail Image End -->
              <!-- Thumbnail Description Start -->
              <div class="col-lg-7">
                  <div class="thubnail-desc fix">
                      <h3 class="product-header">
                        {{  $details['name'] }}
                      </h3>
                      <h4 class="product-header">
                        by  :  الكاتب 
                      </h4>
                      <div class="rating-summary fix mtb-10">
                          <div class="rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                          </div>
                          <div class="rating-feedback">
                              <a href="#">(1 تقييم )</a>
                              <a href="#">أضف إلى رأيك</a>
                          </div>
                      </div>
                      <div class="pro-price mtb-30">
                          <p class="d-flex align-items-center">
                              <span class="prev-price"> {{  $details['price'] }}</span>
                              <span class="price"> ${{  $details['cost_price'] }}</span>
                              <span class="saving-price">save 8%</span>
                            </p>
                      </div>

                      <div class="mb-20 pro-desc-details">                                      
                          <p class="">
                              @lang('admin.status'):
                              {{ $details['product_status']['name_ar'] ??  $details['product_status']['name'] }}
                          </p>
                      </div>

                      <div class="mb-20 pro-desc-details">                                      
                          <p class="">
                              الفئة : ماركت 
                          </p>
                      </div>


                  <label> @lang('admin.description'): </label>
                  <p class="mb-20 pro-desc-details">
                     {!!  $details['description'] !!}
                  </p>
                      <div class="product-size mb-20 clearfix">
                          <label>الاحجام </label>
                          <select class="">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                          </select>
                      </div>
                      <div class="color clearfix mb-20">
                          <label>الاالوان</label>
                          <ul class="color-list">
                              <li>
                                  <a class="orange active" href="#"></a>
                              </li>
                              <li>
                                  <a class="paste" href="#"></a>
                              </li>
                          </ul>
                      </div>
                      <div class="box-quantity d-flex">
                          <form action="#">
                              <input class="quantity mr-40" type="number" min="1" value="1">
                          </form>
                          <a class="add-cart" href="cart.html">اضف الى السلة </a>
                          <a class="m-2" href="#"><i class="ion-android-favorite-outline"></i> حفظ فى المفضلة </a>
                      </div>
                      <div class="pro-ref mt-15">
                          <p><span class="in-stock"><i class="ion-checkmark-round"></i>في المخزن</span></p>
                      </div>
                      <div class="socila-sharing mt-25">
                          <ul class="d-flex">
                              <li>شارك </li>
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                          </ul>
                      </div>
                      <div class="product-policy mt-20">
                         <p><i class="fa fa-check-square-o" aria-hidden="true"></i>Security policy (edit with Customer reassurance module)
                         <p><i class="fa fa-truck" aria-hidden="true"></i>Delivery policy (edit with Customer reassurance module)
                         <p><i class="fa fa-exchange" aria-hidden="true"></i>Return policy (edit with Customer reassurance module)
                      </div>
                  </div>
              </div>
              <!-- Thumbnail Description End -->
          </div>
          <!-- Row End -->
      </div>
  </div>
  <!-- Container End -->
</div>
<!-- Product Thumbnail End -->
<!-- Product Thumbnail Description Start -->
<div class="thumnail-desc pb-45">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <ul class="main-thumb-desc nav tabs-area" role="tablist">
                  <li><a class="active" data-toggle="tab" href="#dtail">نبذة سريعة  </a></li>
                  <li><a data-toggle="tab" href="#review">التقييم (1)</a></li>
              </ul>
              <!-- Product Thumbnail Tab Content Start -->
              <div class="tab-content thumb-content border-default">
                  <div id="dtail" class="tab-pane fade show active">
                      <p>
                           {!!  $details['description'] !!}
                      </p>
                  </div>
                  <div id="review" class="tab-pane fade">
                      <!-- Reviews Start -->
                      <div class="review border-default universal-padding">
                          <div class="group-title">
                              <h2>رأي العميل</h2>
                          </div>
                          <h4 class="review-mini-title">محمد احمد </h4>
                          <ul class="review-list">
                              <!-- Single Review List Start -->
                              <li>
                                  <span>الجودة</span>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <label>Hastech</label>
                              </li>
                              <!-- Single Review List End -->
                              <!-- Single Review List Start -->
                              <li>
                                  <span>السعر</span>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <label>روجع من قبل <a href="https://themeforest.net/user/hastech">Hastech</a></label>
                              </li>
                              <!-- Single Review List End -->
                              <!-- Single Review List Start -->
                              <li>
                                  <span>القيمة</span>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                                  <label>Posted on 7/20/18</label>
                              </li>
                              <!-- Single Review List End -->
                          </ul>
                      </div>
                      <!-- Reviews End -->
                      <!-- Reviews Start -->
                      <div class="review border-default universal-padding mt-30">
                          <h2 class="review-title mb-30">
                              أنت تراجع:  <br><span>تيشيرت باهت بأكمام قصيرة

                              </span></h2>
                          <p class="review-mini-title">تقييمك</p>
                          <ul class="review-list">
                              <!-- Single Review List Start -->
                              <li>
                                  <span>الجودة</span>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </li>
                              <!-- Single Review List End -->
                              <!-- Single Review List Start -->
                              <li>
                                  <span>السعر</span>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </li>
                              <!-- Single Review List End -->
                              <!-- Single Review List Start -->
                              <li>
                                  <span>القيمة</span>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                              </li>
                              <!-- Single Review List End -->
                          </ul>
                          <!-- Reviews Field Start -->
                          <div class="riview-field mt-40">
                              <form autocomplete="off" action="#">
                                  <div class="form-group">
                                      <label class="req" for="sure-name">الاسم </label>
                                      <input type="text" class="form-control" id="sure-name" required="required">
                                  </div>
                                  <div class="form-group">
                                      <label class="req" for="subject">ملخص</label>
                                      <input type="text" class="form-control" id="subject" required="required">
                                  </div>
                                  <div class="form-group">
                                      <label class="req" for="comments">التقييم </label>
                                      <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                  </div>
                                  <button type="submit" class="customer-btn"> ارسال التقييم </button>
                              </form>
                          </div>
                          <!-- Reviews Field Start -->
                      </div>
                      <!-- Reviews End -->
                  </div>
              </div>
              <!-- Product Thumbnail Tab Content End -->
          </div>
      </div>
      <!-- Row End -->
  </div>
  <!-- Container End -->
</div>
<!-- Product Thumbnail Description End -->
<!-- Realted Products Start Here -->
<div class="second-featured-products related-pro pb-45">
  <div class="container">
     <!-- Post Title Start -->
     <div class="post-title">
         <h2><i class="fa fa-trophy" aria-hidden="true"></i>
         منتجات ذات صلة 
      </h2>
     </div>
     <!-- Post Title End -->
      <!-- New Pro Tow Activation Start -->
      <div class="featured-pro-active owl-carousel">
          <!-- Single Product Start -->
          <div class="single-product">
              <!-- Product Image Start -->
              <div class="pro-img">
                  <a href="product.html">
                      <img class="primary-img" src="img/products/9.jpg" alt="single-product">
                      <img class="secondary-img" src="img/products/10.jpg" alt="single-product">
                  </a>
                  <span class="sticker-new">new</span>
              </div>
              <!-- Product Image End -->
              <!-- Product Content Start -->
              <div class="pro-content">
                  <div class="pro-info">
                      <h4><a href="product.html">printed summer dress</a></h4>
                      <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                      </div>
                      <p><span class="price">$27.45</span></p>
                  </div>
                  <div class="pro-actions">
                      <div class="actions-primary">
                          <a href="cart.html" title="Add to Cart">Add To Cart</a>
                      </div>
                      <div class="actions-secondary">
                          <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                          <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                      </div>
                  </div>
              </div>
              <!-- Product Content End -->
          </div>
          <!-- Single Product End -->
          <!-- Single Product Start -->
          <div class="single-product">
              <!-- Product Image Start -->
              <div class="pro-img">
                  <a href="product.html">
                      <img class="primary-img" src="img/products/14.jpg" alt="single-product">
                      <img class="secondary-img" src="img/products/15.jpg" alt="single-product">
                  </a>
                  <span class="sticker-new">new</span>
              </div>
              <!-- Product Image End -->
              <!-- Product Content Start -->
              <div class="pro-content">
                  <div class="pro-info">
                      <h4><a href="product.html">summer dress</a></h4>
                      <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                      <p><span class="price">$22.12</span></p>
                  </div>
                  <div class="pro-actions">
                      <div class="actions-primary">
                          <a href="cart.html" title="Add to Cart">Add To Cart</a>
                      </div>
                      <div class="actions-secondary">
                          <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                          <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                      </div>
                  </div>
              </div>
              <!-- Product Content End -->
          </div>
          <!-- Single Product End -->
          <!-- Single Product Start -->
          <div class="single-product">
              <!-- Product Image Start -->
              <div class="pro-img">
                  <a href="product.html">
                      <img class="primary-img" src="img/products/4.jpg" alt="single-product">
                      <img class="secondary-img" src="img/products/6.jpg" alt="single-product">
                  </a>
                  <span class="sticker-new">new</span>
              </div>
              <!-- Product Image End -->
              <!-- Product Content Start -->
              <div class="pro-content">
                  <div class="pro-info">
                      <h4><a href="product.html">winter dress</a></h4>
                      <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                      <p><span class="price">$25.45</span><del class="prev-price">$27.12</del></p>
                  </div>
                  <div class="pro-actions">
                      <div class="actions-primary">
                          <a href="cart.html" title="Add to Cart">Add To Cart</a>
                      </div>
                      <div class="actions-secondary">
                          <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                          <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                      </div>
                  </div>
              </div>
              <!-- Product Content End -->
          </div>
          <!-- Single Product End -->
          <!-- Single Product Start -->
          <div class="single-product">
              <!-- Product Image Start -->
              <div class="pro-img">
                  <a href="product.html">
                      <img class="primary-img" src="img/products/34.jpg" alt="single-product">
                      <img class="secondary-img" src="img/products/32.jpg" alt="single-product">
                  </a>
                  <span class="sticker-new">new</span>
              </div>
              <!-- Product Image End -->
              <!-- Product Content Start -->
              <div class="pro-content">
                  <div class="pro-info">
                      <h4><a href="product.html">printed dress</a></h4>
                      <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                      </div>
                      <p><span class="price">$22.45</span><del class="prev-price">$25.20</del></p>
                  </div>
                  <div class="pro-actions">
                      <div class="actions-primary">
                          <a href="cart.html" title="Add to Cart">Add To Cart</a>
                      </div>
                      <div class="actions-secondary">
                          <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                          <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                      </div>
                  </div>
              </div>
              <!-- Product Content End -->
          </div>
          <!-- Single Product End -->
          <!-- Single Product Start -->
          <div class="single-product">
              <!-- Product Image Start -->
              <div class="pro-img">
                  <a href="product.html">
                      <img class="primary-img" src="img/products/8.jpg" alt="single-product">
                      <img class="secondary-img" src="img/products/9.jpg" alt="single-product">
                  </a>
                  <span class="sticker-new">new</span>
              </div>
              <!-- Product Image End -->
              <!-- Product Content Start -->
              <div class="pro-content">
                  <div class="pro-info">
                      <h4><a href="product.html">winter hot dress</a></h4>
                      <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                      </div>
                      <p><span class="price">$30.45</span></p>
                  </div>
                  <div class="pro-actions">
                      <div class="actions-primary">
                          <a href="cart.html" title="Add to Cart">Add To Cart</a>
                      </div>
                      <div class="actions-secondary">
                          <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                          <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                      </div>
                  </div>
              </div>
              <!-- Product Content End -->
          </div>
          <!-- Single Product End -->
          <!-- Single Product Start -->
          <div class="single-product">
              <!-- Product Image Start -->
              <div class="pro-img">
                  <a href="product.html">
                      <img class="primary-img" src="img/products/9.jpg" alt="single-product">
                      <img class="secondary-img" src="img/products/10.jpg" alt="single-product">
                  </a>
                  <span class="sticker-new">new</span>
              </div>
              <!-- Product Image End -->
              <!-- Product Content Start -->
              <div class="pro-content">
                  <div class="pro-info">
                      <h4><a href="product.html">printed small dress</a></h4>
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
                          <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                          <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                      </div>
                  </div>
              </div>
              <!-- Product Content End -->
          </div>
          <!-- Single Product End -->
      </div>
      <!-- New Pro Tow Activation End -->
  </div>
  <!-- Container End -->
</div>
<!-- Realated Products End Here -->



@endsection