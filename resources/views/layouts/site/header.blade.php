<header>
    <!-- Header Top Start Here -->
    <div class="header-top white-bg header-top-two">
        <div class="container">
            <div class="col-sm-12">
                <div class="row justify-content-md-between justify-content-center">
                    <!-- Header Top Left Start -->
                    <div class="header-top-left">
                        <ul>
                            <li>
                                <a href="#"> <span>شحن سريع</span></a>
                            </li>
                            <li>
                                <a href="#"> <span> دعم متواصل</span></a>
                            </li>
                            <li>
                                <a href="#"> <span> المفضلة لدي</span></a>
                            </li>
                        

                            <li><span>اللغة:</span>
                                <a href="#"><img src="{{ url('/') }}/website/img/header/1.jpg" alt="language-selector">العربية<i
                                        class="ion-arrow-down-b"></i></a>
                                <!-- Dropdown Start -->
                                <ul class="ht-dropdown">
                                    <li><a href="{{ route('lang' , 'en') }}"><img src="{{ url('/') }}/website/img/header/1.jpg"
                                                alt="language-selector">English</a></li>
                                    <li><a href="{{ route('lang' , 'ar') }}"><img src="{{ url('/') }}/website/img/header/2.jpg"
                                                alt="language-selector">العربية</a></li>
                                </ul>
                                <!-- Dropdown End -->
                            </li>
                        </ul>
                    </div>
                    <!-- Header Top Left End -->
                    <!-- Header Top Right Start -->
                    <div class="header-top-right">
                        <ul>
                            <li><a href="#">الانكليزية</a></li>
                        </ul>
                    </div>
                    <!-- Header Top Right End -->
                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Top End Here -->
    <!-- Header Middle Start Here -->
    <div class="header-middle white-bg  ptb-35">
        <div class="container">
            <div class="row align-items-center">

                <div class="additional-menu-area" id="additional-menu-area">
                    <div id="mySidenav" class="sidenav" >
                        <a href="#" class="closebtn">×</a>
                        <div class="sidenav-search">
                            <div class="input-group stylish-input-group">
                                <input type="text" placeholder="Search Here . . ." class="form-control">
                                <span class="input-group-addon">
                                        <button type="submit">
                                            <span class="glyphicon glyphicon-search"></span>
                                </button>
                                </span>
                            </div>
                        </div>
                      
                        <!-- <h3 class="ctg-name-title">Category Name List</h3> -->
                        <ul class="sidenav-nav">
                            <li><a href="shop1.html"><i class="flaticon-dress-1"></i>الصفحة الرئيسية</a></li>

                            @if(Session::get('user'))
                            <li><a href="{{ route('profile') }}"><i class="flaticon-polo"></i>حسابى </a></li>
                            <li><a href="shop3.html"><i class="flaticon-plug"></i>مشترياتى </a></li>
                            @else
                            <li><a href="{{ route('login') }}"><i class="flaticon-polo"></i>تسجيل الدخول  </a></li>
                            @endif

                            {{--  ----------------  --}}
                            <li><a href="shop4.html"><i class="flaticon-necklace"></i>خدمة العملاء </a></li>
                            <li><a href="shop5.html"><i class="flaticon-screen"></i>الفئات </a></li>
                            @foreach ($categories as $category)
                                   {{--  @if($category['parent_id'] == null )  --}}
                                   <li><a href="shop4.html"><i class="flaticon-necklace"></i>    {{ $category['name_'.app()->getLocale()] ??  $category['name'] }}  </a></li>

                                    {{--  @endif  --}}
                             @endforeach
                          

                        </ul>
                        <!-- times-->
                    </div>
                    <span class="side-menu-open side-menu-trigger"><i class="fa fa-bars mt-4" aria-hidden="true"></i></span>
                </div>

                <div class="col-lg-1 col-md-12">
                    <div class="logo mb-all-30"><a href="{{ route('home') }}">
                            <img src="{{ url('/') }}/website/img//logo/logo2.png" alt="logo-image">
                        </a>
                    </div>
                </div>
                <!-- Log End -->
                <!-- Search and Selcting Options Start -->
                <div class="col-xl-6 col-lg-5 col-md-12 d-block d-lg-none">
                    <div class="categorie-search-box">
                        <form action="#">
                            <input type="text" name="search" placeholder="Enter your search key ... ">
                            <button><i class="ion-ios-search"></i></button>
                        </form>
                    </div>
                    <!-- Categorie Search Box End -->
                </div>
                <!-- Search and Selcting Options End -->
                <!-- Categorie Search Box Start Here -->
                <div class="col-xl-6 col-lg-5 col-md-12 d-none d-lg-block">
                    <div class="categorie-search-box cat-search-home-4">
                        <form action="#">
                            <input type="text" name="search" placeholder="عن ماذا تبحث ....">
                            <button><i class="ion-ios-search"></i></button>
                        </form>
                    </div>
                    <!-- Categorie Search Box End -->
                </div>
                <!-- Categorie Search Box End Here -->
                <!-- Cart Box Start Here -->
                <div class="col-lg-4 col-md-12">
                    <div class="cart-box mt-all-30">
                        <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                            @if(Session::get('user'))
                            <li class="mr-20"><span>حسابى </span>
                                <br/>
                                <a href="#"> مرحبا : {{ Session::get('user')['name'] }} </a>
                                <!-- Dropdown Start -->
                                <ul class="ht-dropdown cart-box-width">
                                    <li><a href="{{ route('profile') }}"><ion-icon name="person-outline"></ion-icon>الملف الشخصى </a></li>
                                    <li><a href="#"><ion-icon  class="ml-2"  name="file-tray-full-outline"></ion-icon>الطلبات 
                                    </a></li>
                                    <li><a href="#"><i
                                        class="ion-android-favorite-outline ml-2"></i>المفضلة  
                                    </a></li>
                                    <li><a href="#"><ion-icon class="ml-2" name="logo-alipay"></ion-icon> الدفع  </a></li>
                                    <li><a href="#"><ion-icon class="ml-2"  name="map-outline"></ion-icon> عناوينى </a></li>
                                    <li><a href="{{ route('logout') }}"><ion-icon class="ml-2" name="log-out-outline"></ion-icon>تسجيل الخروج </a></li>
                                </ul>
                                <!-- Dropdown End -->
                            </li>
                            @else
                            <li class="mr-20">
                                <a href="{{ route('login') }}">
                                    تسجيل الدخول 
                                </a>
                            </li>
                            @endif
                              
                            
                            <li><a href="#"><i class="ion-bag"></i><span class="total-pro">2</span><span
                                        class="my-cart"><span>my cart</span><span class="total-price">$
                                            64.95</span></span></a>
                                <ul class="ht-dropdown cart-box-width">
                                    <li>
                                        <!-- Cart Box Start -->
                                        <div class="single-cart-box">
                                            <div class="cart-img">
                                                <a href="#"><img src="img/products/1.jpg" alt="cart-image"></a>
                                                <span class="pro-quantity">1X</span>
                                            </div>
                                            <div class="cart-content">
                                                <h6><a href="#">Printed Summer Red </a></h6>
                                                <span class="cart-price">27.45</span>
                                                <span>Size: S</span>
                                                <span>Color: Yellow</span>
                                            </div>
                                            <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                        </div>
                                        <!-- Cart Box End -->
                                        <!-- Cart Box Start -->
                                        <div class="single-cart-box">
                                            <div class="cart-img">
                                                <a href="#"><img src="img/products/2.jpg" alt="cart-image"></a>
                                                <span class="pro-quantity">1X</span>
                                            </div>
                                            <div class="cart-content">
                                                <h6><a href="#">Printed Round Neck</a></h6>
                                                <span class="cart-price">45.00</span>
                                                <span>Size: XL</span>
                                                <span>Color: Green</span>
                                            </div>
                                            <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                        </div>
                                        <!-- Cart Box End -->
                                        <!-- Cart Footer Inner Start -->
                                        <div class="cart-footer">
                                            <ul class="price-content">
                                                <li>Subtotal <span>$57.95</span></li>
                                                <li>Shipping <span>$7.00</span></li>
                                                <li>Taxes <span>$0.00</span></li>
                                                <li>Total <span>$64.95</span></li>
                                            </ul>
                                            <div class="cart-actions text-center">
                                                <a class="cart-checkout" href="checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                        <!-- Cart Footer Inner End -->
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Cart Box End Here -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Middle End Here -->
    <!-- Header Bottom Start Here -->
    <div class="header-bottom dark-blue-bg header-bottom-two header-sticky">
        <div class="container">
            <div class="row align-items-center">


                <!-- Menu   Start -->
                <div class="col-xl-12 col-lg-12 col-md-12 d-none d-lg-block">
                    <nav class="d-none d-lg-block">
                        <ul class="header-bottom-list d-flex right-content-end">
                            <li class="active"><a href="#">جميع الفئات <i
                                        class="fa fa-angle-down"></i></a>
                                <!-- Home Version Dropdown Start -->
                                <ul class="ht-dropdown">
                                    @foreach ($categories as $category)
                                       {{--  @if($category['parent_id'] == null )  --}}
                                       <li>
                                           <a href="{{ route('products' , $category['id'] ) }}">  {{ $category['name_'.app()->getLocale()] ??  $category['name'] }} </a>
                                        </li>
                                        {{--  @endif  --}}
                                    @endforeach
                                </ul>
                                <!-- Home Version Dropdown End -->
                            </li>


                            @foreach ($categories as $category)
                                <li>
                                <a href="{{ route('products' , $category['id'] ) }}">
                                 {{ $category['name_'.app()->getLocale()] ??  $category['name'] }}
                                
                                 @if($category['children'] != null)
                                 <i class="fa fa-angle-down"></i>
                                  @endif      
                                 </a>

                                 @if($category['children'] != null)
                                    <ul class="ht-dropdown megamenu first-megamenu">
                                    @foreach ($category['children'] as $parent)
                                        <!-- Single Column Start -->
                                        <li class="single-megamenu">
                                            <ul>
                                                <li class="menu-tile">
                                                    <a class="tile1" href="{{ route('products' , $parent['id'] ) }}">
                                                    {{ $parent['name_'.app()->getLocale()] ??  $parent['name'] }}  
                                                </a> </li>
                                                @if($parent['children'] != null)
                                                @foreach ($parent['children'] as $pp)
                                                <li><a href="{{ route('products' , $pp['id'] ) }}">
                                                    {{ $pp['name_'.app()->getLocale()] ??  $pp['name'] }}  
                                                </a></li>
                                                @endforeach
                                                @endif     
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Megamenu Image Start -->
                                        <li class="megamenu-img">
                                            <a href="shop.html"><img src="{{ url('/') }}/website/img/vertical-menu/12.jpg" alt="menu-image"></a>
                                        </li>
                                        <!-- Single Megamenu Image End --> 
                                        @endforeach

                                       
                                    </ul>
                                    {{--  @else  --}}
                                    @endif
                                </li>
                            @endforeach
                            



                            <li><a href="#"> عروض مميزة <i class="fa fa-start"></i> </a>


                                {{--  <ul class="ht-dropdown megamenu first-megamenu">
                                    <!-- Single Column Start -->
                                    <li class="single-megamenu">
                                        <ul>
                                            <li class="menu-tile">Cameras</li>
                                            <li><a href="shop.html">Cords and Cables</a></li>
                                            <li><a href="shop.html">gps accessories</a></li>
                                            <li><a href="shop.html">Microphones</a></li>
                                            <li><a href="shop.html">Wireless Transmitters</a></li>
                                        </ul>
                                        <ul>
                                            <li class="menu-tile">GamePad</li>
                                            <li><a href="shop.html">real game hd</a></li>
                                            <li><a href="shop.html">fighting game</a></li>
                                            <li><a href="shop.html">racing pad</a></li>
                                            <li><a href="shop.html">puzzle pad</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                    <!-- Single Column Start -->
                                    <li class="single-megamenu">
                                        <ul>
                                            <li class="menu-tile">Digital Cameras</li>
                                            <li><a href="shop.html">Camera one</a></li>
                                            <li><a href="shop.html">Camera two</a></li>
                                            <li><a href="shop.html">Camera three</a></li>
                                            <li><a href="shop.html">Camera</a></li>
                                        </ul>
                                        <ul>
                                            <li class="menu-tile">Virtual Reality</li>
                                            <li><a href="shop.html">Reality one</a></li>
                                            <li><a href="shop.html">Reality two</a></li>
                                            <li><a href="shop.html">Reality three</a></li>
                                            <li><a href="shop.html">Reality four</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                    <!-- Single Megamenu Image Start -->
                                    <li class="megamenu-img">
                                        <a href="shop.html"><img src="img/vertical-menu/12.jpg" alt="menu-image"></a>
                                    </li>
                                    <!-- Single Megamenu Image End -->
                                </ul>  --}}
                            </li>

                            


                        </ul>
                    </nav>
                </div>
                <!-- Menu and Selcting Options End -->

                <!-- Mobiel Menu Start -->
                <div class="col-md-12 d-block d-lg-none">
                    <div class="mobile-menu">
                        <nav>
                            <ul>
                               
                                <li class="active"><a href="#">جميع الفئات <i
                                    class="fa fa-angle-down"></i></a>
                            <!-- Home Version Dropdown Start -->
                            <ul class="ht-dropdown">
                                @foreach ($categories as $category)
                                   <li>
                                       <a href="#">  {{ $category['name_'.app()->getLocale()] ??  $category['name'] }}  </a>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- Home Version Dropdown End -->
                        </li>


                        @foreach ($categories as $category)
                            <li><a href="#"> {{ $category['name_'.app()->getLocale()] ??  $category['name'] }} </a>
                            </li>
                        @endforeach
                        



                        <li><a href="#"> عروض مميزة <i class="fa fa-start"></i> </a>
                        </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Mobiel Menu End -->

            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Bottom End Here -->
    <!-- Mobile Vertical Menu Start Here -->
    <div class="container d-block d-lg-none">
        <div class="vertical-menu mt-30">
            <span class="categorie-title mobile-categorei-menu">all Categories <i
                    class="fa fa-angle-down"></i></span>
            <nav>
                <div id="cate-mobile-toggle"
                    class="category-menu sidebar-menu sidbar-style mobile-categorei-menu-list menu-hidden ">
                    <ul>
                        <li class="has-sub"><a href="#">Electronics</a>
                            <ul class="category-sub">
                                <li><a href="#">Cords and Cables</a></li>
                                <li><a href="#">gps accessories</a></li>
                                <li><a href="#">Microphones</a></li>
                                <li><a href="#">Wireless Transmitters</a></li>
                            </ul>
                            <!-- category submenu end-->
                        </li>
                        <li class="has-sub"><a href="#">Fashion</a>
                            <ul class="category-sub">
                                <li><a href="#">Fashion one</a></li>
                                <li><a href="#">Fashion two</a></li>
                                <li><a href="#">Fashion three</a></li>
                                <li><a href="#">Fashion Four</a></li>
                            </ul>
                            <!-- category submenu end-->
                        </li>
                        <li class="has-sub"><a href="#">Home & Kitchen</a>
                            <ul class="category-sub">
                                <li><a href="#">kithen one</a></li>
                                <li><a href="#">kithen two</a></li>
                                <li><a href="#">kithen three</a></li>
                                <li><a href="#">kithen four</a></li>
                            </ul>
                            <!-- category submenu end-->
                        </li>
                        <li class="has-sub"><a href="#">Phones & Tablets</a>
                            <ul class="category-sub">
                                <li><a href="#">phone one</a></li>
                                <li><a href="#">Tablet two</a></li>
                                <li><a href="#">Tablet three</a></li>
                                <li><a href="#">phone four</a></li>
                            </ul>
                            <!-- category submenu end-->
                        </li>
                        <li class="has-sub"><a href="#">TV & Video</a>
                            <ul class="category-sub">
                                <li><a href="#">smart tv</a></li>
                                <li><a href="#">real video</a></li>
                                <li><a href="#">Microphones</a></li>
                                <li><a href="#">Wireless Transmitters</a></li>
                            </ul>
                            <!-- category submenu end-->
                        </li>
                        <li><a href="#">Beauty</a> </li>
                        <li><a href="#">Sport & tourisim</a></li>
                        <li><a href="#">Meat & Seafood</a></li>
                    </ul>
                </div>
                <!-- category-menu-end -->
            </nav>
        </div>
    </div>
    <!-- Mobile Vertical Menu Start End -->
</header>