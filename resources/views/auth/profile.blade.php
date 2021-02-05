@extends('layouts.site.master')
@section('title')
   @lang('admin.profile')
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
                        <li> @lang('admin.profile') </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- My Account Page Area Start Here -->
<div class="my-account-page-area">
    <div class="container">               
        <div class="woocommerce">               
            <div class="row">

               

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <nav class="woocommerce-MyAccount-navigation">
                        <ul>
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard active"><a href="#dashboard" data-toggle="tab" aria-expanded="false"><ion-icon name="person-outline"></ion-icon> الملف الشخصى</a></li>
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard"><a href="#orders" data-toggle="tab" aria-expanded="false"><ion-icon  class="ml-2"  name="file-tray-full-outline"></ion-icon>الطلبات</a></li>
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard"><a href="#favorites" data-toggle="tab" aria-expanded="false"><i
                                class="ion-android-favorite-outline ml-2"></i>المفضلة </a></li>
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard"><a href="#addresses" data-toggle="tab" aria-expanded="false"><ion-icon class="ml-2" name="logo-alipay"></ion-icon> الدفع </a></li>
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard"><a href="#details" data-toggle="tab" aria-expanded="false"><ion-icon class="ml-2"  name="map-outline"></ion-icon> عناوين الشحن </a></li>
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard"><a href="#points" data-toggle="tab" aria-expanded="false"><ion-icon class="ml-2" name="logo-alipay"></ion-icon>نقاط</a></li>
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard"><a href="#balance" data-toggle="tab" aria-expanded="false"><ion-icon class="ml-2" name="logo-alipay"></ion-icon> رصيد اجل  </a></li>
                        </ul>
                    </nav>                        
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"> 
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="dashboard">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center m-auto">

                                <h2> @lang('admin.profilrh2') </h2>
                                <p> @lang('admin.profilrp')   </p>
                            </div>

                            <div class="woocommerce-MyAccount-content"> 
                                <p><strong> @lang('admin.infor')</strong></p>
                                <a class="bdred1 text-dark pl-10 pr-10 float-left" href="" >تعديل </a>

                                <p>
                                  @lang('admin.name') : {{ Session::get('user')['name'] . Session::get('user')['last_name'] }}  
                                </p>

                                <p>
                                    @lang('admin.email') : 
                                    {{ Session::get('user')['email'] }}
                                </p>



                                <p>
                                    @lang('admin.phone') : 
                                    {{ Session::get('user')['telephone'] }}
                                </p>

                                <p><strong> معلومات عامة </strong></p>
                                <a class="bdred1 text-dark pl-10 pr-10 float-left" href="" >تعديل </a>

                                <p> الجنس: ذكر </p>
                                <p>تاريخ الميلاد : 01 - 10 - 1997</p>
                                <p>الدولة : المملكة العربية السعودية</p>


                                <p class="mt-10"><strong>  الحماية والآمان </strong></p>
                                <a class="bdred1 text-dark pl-10 pr-10 float-left" href="" >تعديل </a>

                                <p> الرقم السرى : **** </p>


                             
                            </div>
                        </div> 
                        <div class="tab-pane fade" id="orders">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <!-- Form Start -->
                                        <form action="#">
                                            <!-- Table Content Start -->
            
            
                                            <h3 class="product-header text-dark ">
                                                الطلبات 
                                              </h3>
                                            <h3 class="product-header">
                                                قم بالتحكم في إعدادات الحساب الخاصة بك والتعديل عليها في أي وقت وتحديث البيانات الخاصة بك
                                            </h3>

                                            <div class="card m-3">
                                                <div class="card-body">
                                                    <div class="col-md-6">
                                                        <h5> رقم الطلب : 9254112114455141 </h5>
                                                        <h5>تاريخ الطلب : 20/10/2020 </h5>
                                                        <h5>عدد الشحنات : 12</h5>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <h5>المستلم: المستلم</h5>
                                                        <h5>طريقة الدفع : بطاقة الكترونية  </h5>
                                                        <h5>عرض التفاصيل </h5>
                                                    </div>
                                                </div>
                                            </div>
            
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
                                                        <tr>
                                                            <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                                            <td class="product-thumbnail">
                                                                <a href="#"><img src="{{ url('/') }}/website/img/products/6.jpg" alt="cart-image" /></a>
                                                            </td>
                                                            <td class="product-name"><a href="#">Vestibulum suscipit</a></td>
                                                            <td class="product-price"><span class="amount">£165.00</span></td>
                                                            <td class="product-stock-status"><span>في المخزن</span></td>
                                                            <td class="product-add-to-cart "><a class="bdred" href="#">أضف إلى السلة</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                                            <td class="product-thumbnail">
                                                               <a href="#"><img src="{{ url('/') }}/website/img/products/22.jpg" alt="cart-image" /></a>
                                                            </td>
                                                            <td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
                                                            <td class="product-price"><span class="amount">£50.00</span></td>
                                                            <td class="product-stock-status"><span>في المخزن</span></td>
                                                            <td class="product-add-to-cart"><a class="bdred"  href="#">أضف إلى السلة</a></td>
                                                        </tr>
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
                            <!-- <div class="woocommerce-message"><a class="woocommerce-Button button" href="#">الذهاب الى المتجر  </a>
                                لا توجد طلبات بعد 
                            </div>                                     -->
                        </div> 
                        <div class="tab-pane fade" id="favorites">
                          
                            
                                <!-- Wish List Start -->
        <div class="cart-main-area wish-list ptb-45">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
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
                                            <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
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


                        </div>                                      
                        <div class="tab-pane fade" id="addresses">                                    
                            <div class="woocommerce-MyAccount-content"> 
                                <header class="row woocommerce-Address-title title">
                                    <h3 class="col-xs-12 metro-title">الدفع  </h3>
                                    <p>أضف وأستخدم بطاقات الدفع الإلكتروني من علي موقعنا بسهولة</p>
                                </header>   
                                <form class="row woocommerce-EditAccountForm edit-account" action="#" method="post">

                                    <p class="col-md-12 col-sm-12 woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                        <img src="img/card.png" />
                                    </p>
                                    <p class="col-md-12 col-sm-12 woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" value="" placeholder=" أسم مالك البطاقة  ">
                                    </p>
                                    <p class="col-md-12 col-sm-12 woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="" placeholder=" رقم البطاقة ">
                                    </p>
                                    <div class="clear"></div>

                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" value="" placeholder=" تاريخ الأنتهاء   ">
                                    </p>
                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="" placeholder=" CVV كود  ">
                                    </p>
                                    <div class="clear"></div>

                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <input type="submit" value="حفظ" class="return-customer-btn bdred">
                                    </p>

                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <input type="reset" value="الغاء" class="return-customer-btn btn bdred1">
                                    </p>

                                    <div class="clear"></div>

                                    
                                </form>
                            </div>



                            
                        </div>
                        <div class="tab-pane fade" id="details">                                    
                            <div class="woocommerce-MyAccount-content"> 
                                <header class="row woocommerce-Address-title title">
                                    <h3 class="col-xs-12 metro-title">العناوين  </h3>
                                    <p>أضف واستخدم العناوين الخاصه بك من أجل التوصيل السريع </p>
                                </header>   
                                <form class="row woocommerce-EditAccountForm edit-account" action="#" method="post">
                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" value="" placeholder="اسم الاول  ">
                                    </p>
                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="" placeholder="اسم العائلة ">
                                    </p>
                                    <div class="clear"></div>

                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" value="" placeholder=" الحى   ">
                                    </p>
                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="" placeholder=" المدينة  ">
                                    </p>
                                    <div class="clear"></div>

                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" value="" placeholder="العنوان/المنطقة  ">
                                    </p>
                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="" placeholder=" اسم/رقم الشارع   ">
                                    </p>
                                    <div class="clear"></div>


                                    <p class="col-md-12 col-sm-12 woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="" placeholder="رقم الموبايل  ">
                                    </p>

                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                        <textarea cols="30" role="10" class="bdred1 woocommerce-Input woocommerce-Input--text input-text"  placeholder="ملاحظات "></textarea>
                                    </p>
                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <input type="text" class="bdred1 woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="" placeholder="الدولة ">
                                    </p>
                                    <div class="clear"></div>

                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <input type="submit" value="حفظ" class="return-customer-btn bdred">
                                    </p>

                                    <p class="col-md-6 col-sm-12 woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                        <input type="reset" value="الغاء" class="return-customer-btn btn bdred1">
                                    </p>

                                    
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="logout">                                    
                            <div class="woocommerce-message">Are you sure you want to log out? <a href="#">Confirm and log out</a></div>
                            <div class="woocommerce-MyAccount-content wd-myaccount-content-wrapper">    
                                <p>Hello <strong>user-name</strong> (not <strong>user-name</strong>? <a href="#">Log out</a>)</p>
                                <p>From your account dashboard you can view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details</a>.</p>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="points">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right m-auto">

                                <h2>  النقاط  </h2>
                                <p>في كل عملية شراء بالجملة سوف تحصل علي عدد نقاط يمكنك استخدامها في الحصول علي خصم أثناء الشراء مرة آخري</p>
                            </div>

                            <div class="card w-65 text-white">
                                <div class="card-body  bg-dark text-right">
                                        <span class="col-md-3 h5 card-title">
                                            5200
                                            <br/>
                                            النقاط الحالية
                                        </span>

                                    <span class="col-md-3 h5 card-title">
                                      1200
                                      <br/>
                                      النقاط الجديدة
                                    </span>

                                    <span class="col-md-3 h5 card-title">
                                      3000
                                      <br/>
                                      النقاط المستبدلة  
                                    </span>

                                </div>
                                

                                <div class="card-img-bottom text-dark">
                                    <table class="col-md-12 table table-hover mt-5">
                                      <thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>عملية إسترداد</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">2</th>
                                          <td>Jacob</td>
                                          <td>عملية إسترداد</td>
                                          <td>@fat</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">3</th>
                                          <td>Jacob</td>
                                          <td>عملية إستبدال</td>
                                          <td>@twitter</td>
                                        </tr>
  
                                        <tr>
                                          <th scope="row">4</th>
                                          <td>Jacob</td>
                                          <td >عملية إستبدال</td>
                                          <td>@twitter</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>

                              </div>

                   

                            <!-- <div class="woocommerce-message"><a class="woocommerce-Button button" href="#">الذهاب الى المتجر  </a>
                                لا توجد نقاط  بعد 
                            </div>                                     -->
                        </div>

                        <div class="tab-pane fade" id="balance">
                          
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right m-auto">

                                <h2>  رصيد أجل   </h2>
                            </div>

                            <div class="card w-65 text-white">
                                <div class="card-body text-success text-center">
                                       

                                        <div class="progress mt-10">
                                            <h5>الرصيد المتبقى : 30.000 SR</h5>
                                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                          </div>

                                          <h5>
                                            تم استهلاك : <span class="text-danger">10.000 SR</span>
                                          </h5>

                                          <h5>
                                            تاريخ التحصيل 10-11-2020
                                          </h5>

                                          <a class="text-warning return-customer-btn  bdred" href="">دفع الآجل</a>

                                </div>
                                

                                <div class="card-img-bottom text-dark">
                                    <table class="col-md-12 table table-hover mt-5">
                                      <thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>عملية إسترداد</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">2</th>
                                          <td>Jacob</td>
                                          <td>عملية إسترداد</td>
                                          <td>@fat</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">3</th>
                                          <td>Jacob</td>
                                          <td>عملية إستبدال</td>
                                          <td>@twitter</td>
                                        </tr>
  
                                        <tr>
                                          <th scope="row">4</th>
                                          <td>Jacob</td>
                                          <td >عملية إستبدال</td>
                                          <td>@twitter</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>

                              </div>

                                                      
                        </div>
                    </div>
                </div>  
            </div>  
        </div>
    </div>
</div>
<!-- My Account Page Area End Here -->


@endsection