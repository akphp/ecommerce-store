@extends('layouts.site.master')
@section('title')
   @lang('admin.wishlist')
@endsection
@section('content')



<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>@lang('admin.profile') </h1>
                    <ul>
                        <li><a href="#">@lang('admin.home') </a> /</li>
                        <li> @lang('admin.wishlist') </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Wish List Start -->
<div class="cart-main-area wish-list ptb-45">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Form Start -->
                <form action="#">
                    <!-- Table Content Start -->


                    <h3 class="product-header text-dark ">
                        المفضلة 
                      </h3>
                    <h3 class="product-header">
                      احفظ فيها منتجاتك المفضلة وامنياتك الخاصة التى تود شرائها قريبا 
                    </h3>

                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-remove">حذف</th>
                                    <th class="product-thumbnail">الصور</th>
                                    <th class="product-name">المنتج</th>
                                    <th class="product-price">السعر  </th>
                                    <th class="product-quantity">
                                        حالة الرصيد، وضع مخزون</th>
                                    <th class="product-subtotal">اضف الى السلة </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($favorite)
                                @foreach($favorite as $item)
                                    
                                <tr>
                                    <td class="product-remove"> <a href="{{ route('favorite.delete' , $item['id']) }}">
                                        <i class="fa fa-times" aria-hidden="true"></i></a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="{{ $item['imagefullpath']}}" alt="{{ $item['name_ar'] }}" /></a>
                                    </td>
                                    <td class="product-name"><a href="#"> {{ $item['name_ar'] }}</a></td>
                                    <td class="product-price"><span class="amount">${{ $item['price'] }} </span></td>
                                    <td class="product-stock-status"><span> {{ $item['product_status']['name'] == "Enabled" ? "متاح " : "غير متاح " }}  </span></td>
                                    <td class="product-add-to-cart "><a class="bdred" href="#">أضف إلى السلة</a></td>
                                </tr>
                                @endforeach

                                @else
                                <h4> لا يوجد منتجات مضافة بعد </h4>
                                @endif
                             
                            </tbody>
                        </table>
                    </div>
                    <!-- Table Content Start -->
                </form>
                <!-- Form End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
</div>
<!-- Wish List End -->


@endsection