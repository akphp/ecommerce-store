@extends('layouts.site.master')
@section('title')
   @lang('admin.shop')
@endsection
@section('content')
  



<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
  <div class="container">
      <div class="breadcrumb">
          <ul class="d-flex align-items-center">
              <li><a href="{{ route('home') }}"> @lang('admin.home') </a></li>
              <li><a href="#">@lang('admin.shop') </a></li>
              {{--  <li class="active"><a href="product.html">aaa</a></li>  --}}
          </ul>
      </div>
  </div>
  <!-- Container End -->
</div>
<!-- Breadcrumb End -->


<!-- Shop Page Start -->
<div class="main-shop-page ptb-45">
    <div class="container">
        <!-- Row End -->
        <div class="row">
            <!-- Sidebar Shopping Option Start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="sidebar">
                    <!-- Sidebar Electronics Categorie Start -->
                    <div class="electronics mb-30">
                        <h3 class="sidebar-title e-title">الاقسام الرئيسية </h3>
                        <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
                            <ul>

                                @foreach ($categories as $category)
                                <li  class="has-sub">
                                <a href="{{ route('products' , $category['id'] ) }}">
                                 {{ $category['name_'.app()->getLocale()] ??  $category['name'] }}      
                                 </a>

                                 
                                 <ul class="category-sub">
                                    @foreach ($category['children'] as $parent)
                                            <li>
                                                <a href="{{ route('products' , $parent['id'] ) }}">  {{ $parent['name_'.app()->getLocale()] ??  $parent['name'] }}   1</a>
                                            </li>
                                    @endforeach
                                    
                                    </ul>
                                 </li>                                     
                                 @endforeach
                            </ul>
                        </div>
                        <!-- category-menu-end -->
                    </div>
                    <!-- Sidebar Electronics Categorie End -->
                    <!-- Price Filter Options Start -->
                    <div class="search-filter mb-30">
                        <h3 class="sidebar-title">تصفية حسب السعر</h3>
                        <form action="#" class="sidbar-style">
                            <div id="slider-range"></div>
                            <input type="text" id="amount" class="amount-range" readonly>
                        </form>
                    </div>
                    <!-- Price Filter Options End -->
                    <!-- Sidebar Categorie Start -->
                    <div class="sidebar-categorie mb-30">
                        <h3 class="sidebar-title">التصنيفات</h3>
                        <ul class="sidbar-style">
                            <li class="form-check">
                                <input class="form-check-input" value="#" id="camera" type="checkbox">
                                <label class="form-check-label" for="camera">Cameras (8)</label>
                            </li>

                            
                            @foreach ($categories as $category)
                            <li  class="form-check">
                                <label class="form-check-label" >
                             {{ $category['name_'.app()->getLocale()] ??  $category['name'] }} 
                            </label>     
                             
                            </li>
                            @endforeach
                          
                        </ul>
                    </div>
                    <!-- Sidebar Categorie Start -->
                    <!-- Product Size Start -->
                    <div class="size mb-30">
                        <h3 class="sidebar-title">الاحجام </h3>
                        <ul class="size-list sidbar-style">
                            <li class="form-check">
                                <input class="form-check-input" value="" id="small" type="checkbox">
                                <label class="form-check-label" for="small">S (6)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="" id="medium" type="checkbox">
                                <label class="form-check-label" for="medium">M (9)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="" id="large" type="checkbox">
                                <label class="form-check-label" for="large">L (8)</label>
                            </li>
                        </ul>
                    </div>
                    <!-- Product Size End -->
                    <!-- Product Color Start -->
                    <div class="color mb-30">
                        <h3 class="sidebar-title">الالوان </h3>
                        <ul class="color-option sidbar-style">
                            <li>
                                <span class="white"></span>
                                <a href="#">white (4)</a>
                            </li>
                            <li>
                                <span class="orange"></span>
                                <a href="#">Orange (2)</a>
                            </li>
                            <li>
                                <span class="blue"></span>
                                <a href="#">Blue (6)</a>
                            </li>
                            <li>
                                <span class="yellow"></span>
                                <a href="#">Yellow (8)</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Product Color End -->
                    <!-- Single Banner Start -->
                    <div class="sidebar-banner">
                        <a href="shop.html"><img src="img/banner/10.jpg" alt="slider-banner"></a>
                    </div>
                    <!-- Single Banner End -->
                </div>
            </div>
            <!-- Sidebar Shopping Option End -->
            <!-- Product Categorie List Start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- Grid & List View Start -->
                <div
                    class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                    <div class="grid-list-view  mb-sm-15">
                        <ul class="nav tabs-area d-flex align-items-center">
                            <li><a data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                            <li><a class="active" data-toggle="tab" href="#list-view"><i
                                        class="fa fa-list-ul"></i></a></li>
                            <li><span class="grid-item-list">
                                    يوجد {{ count($products) }} منتجات
                                </span></li>
                        </ul>
                    </div>
                    <!-- Toolbar Short Area Start -->
                    <div class="main-toolbar-sorter clearfix">
                        <div class="toolbar-sorter d-md-flex align-items-center">
                            <label>ترتيب حسب:</label>
                            <select class="sorter wide">
                                <option value="DESC">تصاعدى </option>
                                <option value="ASC">تنازلى </option>
                            </select>
                        </div>
                    </div>
                    <!-- Toolbar Short Area End -->
                </div>
                <!-- Grid & List View End -->
                <div class="main-categorie mb-all-40">
                    <!-- Grid & List Main Area End -->
                    <div class="tab-content border-default fix">
                        <div id="grid-view" class="tab-pane fade ">
                            <div class="row">
                                @if(count($products ) > 0)
                                @foreach ($products as $product)
                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ route('favorite' ,$product['id'] ) }}">
                                                <img class="primary-img" src="{{ $product['imagefullpath'] }}"
                                                    alt="single-product">
                                                <img class="secondary-img" src="{{ $product['imagefullpath'] }}"
                                                    alt="single-product">
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
                                                    <del class="prev-price">$ {{  $product['price'] }}</del></p>                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title=""
                                                        data-original-title="Add to Cart">Add To Cart</a>
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
                                </div>
                                <!-- Single Product End -->
                                @endforeach
                                @else
                            <h4>
                                لا يوجد منتجات  بعد 
                            </h4>
                            @endif
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- #grid view End -->
                        <div id="list-view" class="tab-pane fade show active">
                               @if(count($products ) > 0)
                            @foreach ($products as $product)                          
                          
                            <!-- Single Product Start -->
                            <div class="row single-product">
                                <!-- Product Image Start -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-4">
                                    <div class="pro-img">
                                        <a href="{{ route('details' , $product['id']) }}">
                                            <img class="primary-img" src="{{ $product['imagefullpath'] }}"
                                                alt="single-product">
                                            <img class="secondary-img" src="{{ $product['imagefullpath'] }}"
                                                alt="single-product">
                                        </a>
                                        <span class="sticker-new">new</span>
                                        {{--  <span class="sticker-sale">-8%</span>  --}}
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-8">
                                    <div class="pro-content">
                                        <h4><a href="{{ route('details' , $product['id']) }}">
                                            {{  $product['name']   }}
                                        </a></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p><span class="price">$ $ {{  $product['cost_price'] }}</span>
                                            <del class="prev-price">${{  $product['price'] }}</del>
                                        </p>
                                        <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy
                                            material for a comfortable fit. Accessorize with a straw hat and
                                            youre ready for summer!</p>
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
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                            @endforeach
                            @else
                            <h4>
                                لا يوجد منتجات  بعد 
                            </h4>
                            @endif
                        </div>
                        <!-- #list view End -->
                        <!-- Product Pagination Info -->
                        {{--  <div class="product-pagination mb-20 pb-15">
                            <span class="grid-item-list">Showing 1-8 of 8 item(s)</span>
                        </div>
                        <ul class="blog-pagination ptb-20">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>  --}}
                        <!-- End of .blog-pagination -->
                    </div>
                    <!-- Grid & List Main Area End -->
                </div>
            </div>
            <!-- product Categorie List End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Shop Page End -->


@endsection