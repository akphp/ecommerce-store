<!doctype html>
<html class="no-js" lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">  --}}
  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400&display=swap" rel="stylesheet">
   
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('website/img/logo.png') }}">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('website/css/font-awesome.min.css') }}">
    <!-- Ionicons css -->
    <link rel="stylesheet" href="{{ asset('website/css/ionicons.min.css') }}">

    {{--  <link rel="stylesheet" href="{{ url('/') }}/website/css/bb.css">  --}}

    <link rel="stylesheet" href="{{ asset('website/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">

    <link rel="stylesheet" href="{{ asset('website/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/past-color.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('/') }}/website/css/bb.css">
    <link rel="stylesheet" href="{{ asset('website/cu/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style01.css') }}">
    <link rel="stylesheet" href="{{ asset('website/notify/css/notifIt.css') }}">
    {{--  <link href="{{ asset('css/public.css') }} " rel="stylesheet">  --}}
    @yield('css')

    <style>
        body {
            font-family: 'Tajawal', sans-serif !important;
            font-weight: 400;
            color: #232323;
            font-size: 16px;
            background: #f7f7f7;
            line-height: 1.25em;
                direction: rtl;
            text-align: right;
        }
        a{
            text-decoration: none !important;
        }
    </style>
    <!-- Modernizer js -->
    <script src="{{ asset('website/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>


</head>
<body>

    <!-- Main Wrapper Start Here -->
    <div class="wrapper white-bg">
        <!-- Main Header Area Start Here -->
        @include('layouts.site.header' , ['categories' => $categories ])
        <!-- Main Header Area End Here -->          

        {{-- body   --}}
        @include('layouts.site.error')
         @yield('content')
        {{--  end body    --}}
        <!-- Footer Area Start Here -->
       @include('layouts.site.footer')
        <!-- Footer Area End Here -->
        <!-- Quick View Content Start -->
        <div class="main-product-thumbnail quick-thumb-content">
            <div class="container">
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <!-- Main Thumbnail Image Start -->
                                    <div class="col-lg-5 col-md-6 col-sm-5">
                                        <!-- Thumbnail Large Image start -->
                                        <div class="tab-content">
                                            <div id="thumb1" class="tab-pane fade show active">
                                                <a data-fancybox="images" href="img/products/35.jpg"><img
                                                        src="img/products/35.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb2" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/products/13.jpg"><img
                                                        src="img/products/13.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb3" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/products/15.jpg"><img
                                                        src="img/products/15.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb4" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/products/4.jpg"><img
                                                        src="img/products/4.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb5" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/products/5.jpg"><img
                                                        src="img/products/5.jpg" alt="product-view"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Large Image End -->
                                        <!-- Thumbnail Image End -->
                                        <div class="product-thumbnail">
                                            <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                                <a class="active" data-toggle="tab" href="#thumb1"><img
                                                        src="img/products/35.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb2"><img src="img/products/13.jpg"
                                                        alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb3"><img src="img/products/15.jpg"
                                                        alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb4"><img src="img/products/4.jpg"
                                                        alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb5"><img src="img/products/5.jpg"
                                                        alt="product-thumbnail"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail image end -->
                                    </div>
                                    <!-- Main Thumbnail Image End -->
                                    <!-- Thumbnail Description Start -->
                                    <div class="col-lg-7 col-md-6 col-sm-7">
                                        <div class="thubnail-desc fix mt-sm-40">
                                            <h3 class="product-header">Printed Summer Dress</h3>
                                            <div class="pro-price mtb-30">
                                                <p class="d-flex align-items-center"><span
                                                        class="prev-price">16.51</span><span
                                                        class="price">$15.19</span><span class="saving-price">save
                                                        8%</span></p>
                                            </div>
                                            <p class="mb-20 pro-desc-details">Long printed dress with thin adjustable
                                                straps. V-neckline and wiring under the bust with ruffles at the bottom
                                                of the dress.</p>
                                            <div class="product-size mb-20 clearfix">
                                                <label>Size</label>
                                                <select class="">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="color mb-20">
                                                <label>color</label>
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
                                                <a class="add-cart" href="cart.html">add to cart</a>
                                            </div>
                                            <div class="pro-ref mt-15">
                                                <p><span class="in-stock"><i class="ion-checkmark-round"></i> IN
                                                        STOCK</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Description End -->
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="custom-footer">
                                <div class="socila-sharing">
                                    <ul class="d-flex">
                                        <li>share</li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-official"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick View Content End -->


    </div>
    <!-- Main Wrapper End Here -->
    <!-- jquery 3.2.1 -->
    <script src="{{ asset('website/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Countdown js -->
    <script src="{{ asset('website/js/jquery.countdown.min.js') }}"></script>
    <!-- Mobile menu js -->
    <script src="{{ asset('website/js/jquery.meanmenu.min.js') }}"></script>
    <!-- ScrollUp js -->
    <script src="{{ asset('website/js/jquery.scrollUp.js') }}"></script>
    <!-- Nivo slider js -->
    <script src="{{ asset('website/js/jquery.nivo.slider.js') }}"></script>
    <!-- Fancybox js -->
    <script src="{{ asset('website/js/jquery.fancybox.min.js') }}"></script>
    <!-- Jquery nice select js -->
    <script src="{{ asset('website/js/jquery.nice-select.min.js') }}"></script>
    <!-- Jquery ui price slider js -->
    <script src="{{ asset('website/js/jquery-ui.min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ url('website/js/owl.carousel.min.js') }}"></script>
    <!-- Bootstrap popper js -->
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('website/js/bootstrap1.min.js') }}"></script>
    <!-- Plugin js -->
    <script src="{{ asset('website/js/plugins.js') }}"></script>
    <!-- Main activaion js -->


    <script src="{{ asset('website/notify/js/notifIt.js') }}"></script>
    <script src="{{ asset('website/notify/js/notifit-custom.js') }}"></script>                
     @yield('js')
    <script src="{{ asset('website/js/main.js') }}"></script>
    <script src="{{ asset('website/js/main2.js') }}"></script>




</body>
</html>