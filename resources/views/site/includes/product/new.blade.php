<div class="second-featured-products more-featured-pro pb-45">
    <div class="container">
        <!-- Post Title Start -->
        <div class="post-title">
            <h2>
              @lang('admin.new')
            </h2>
        </div>
        <!-- Post Title End -->
        <!-- New Pro Tow Activation Start -->
        <div class="more-fearured-pro-active owl-carousel">
            
         
            @foreach ($products as $index=>$product)
            
              @if($index <= 3)               
          
            <div class="double-product">
                <!-- Single Product Start -->
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="{{ route('details' , $product['id']) }}">
                            <img class="primary-img" src="{{ env('APP1_URL').$product['image'] }}" alt="single-product">
                            <img class="secondary-img" src="{{ env('APP1_URL').$product['image'] }}" alt="single-product">
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
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i
                                        class="fa fa-heart-o"></i></a>
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