
@foreach ($home_sliders as $item)
    


<div class="second-featured-products more-featured-pro pb-45">
    <div class="container">
        <!-- Post Title Start -->
        <div class="post-title">
            <h2 style="background: {{ $item['color'] ?? "" }}">
             {{  $item['name_'.app()->getLocale()] ??  $item['name']   }}
            </h2>
        </div>
        <!-- Post Title End -->
        <!-- New Pro Tow Activation Start -->
        <div class="more-fearured-pro-active owl-carousel">
            <!-- double Product Start -->

            @foreach ($item['products'] as $index=>$product)
            
              @if($index <= 3)               
          
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="{{ route('details' , $product['id']) }}">
                            <img class="primary-img" src="{{ $product['image'] }}" alt="single-product">
                            <img class="secondary-img" src="{{ $product['image'] }}" alt="single-product">
                        </a>
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="{{ route('details' , $product['id']) }}"> {{  $product['name']   }} </a></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p><span class="price"> $ {{  $product['cost_price'] }} </span>
                                <del class="prev-price">$ {{  $product['price'] }}</del></p>
                        </div>
                        <div class="pro-actions">
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart">Add To Cart</a>
                            </div>
                            <div class="actions-secondary">
                                <a href="{{ route('favorite' ,$product['id'] ) }}"  title="{{ __('admin.addFavorite') }}"><i
                                        class="fa fa-heart-o"></i>
                                    </a>
                                <a href="{{ route('details' , $product['id']) }}" title="Details"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
                <!-- Single Product End -->

            </div>
            <!-- double Product End -->
            @endif
            @endforeach

        </div>
        <!-- New Pro Tow Activation End -->
    </div>
    <!-- Container End -->
</div>



@foreach ($banners as $banner) 
@if($item['id'] == $banner['id'])
<!-- Big Banner Start Here -->
<div class="offer-area1 hidden-after-desk pb-45 mb-50" style="background: {{ $item['color'] ?? "" }}">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="brand-area-box-r mt-20">
                    <a href="#"><img src="{{ $banner['image'] }}" style="width: 100%; height:400px"></a>
                </div>
            </div>

            {{--  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="brand-area-box-l text-center">
                    <span>العودة الدراسية</span>
                    <h1> أقوي خصومات تصل إلي 65% </h1>
                    <p>BACK TO SCHOOL</p>
                    <a href="#" class="btn-shop-now-fill">تسوق الآن</a>
                </div>
            </div>  --}}
           
        </div>
    </div>
</div>
<!-- Big Banner End Here -->
@endif
@endforeach


@endforeach