@extends('layouts.site.master')
@section('title')
   @lang('admin.register')
@endsection
@section('content')




<!-- register Page Start -->
<div class="log-in ptb-45">
    <div class="container">
        <div class="row">

            <!-- Returning Customer Start -->
            <div class="col-md-12">
                    <div style="margin-top: 40px;">
                        <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <a href="{{ route('register') }}">
                             <i class="fa fa-users"  style="font-size: 150px;color: #1e2352;"></i>
                                </a>
                              <h3>
                                <a href="{{ route('register') }}"> أشخاص </a>
                             </h3>
                            </div>
                          </div>
                        </div>

                          <div class="col-md-6">
                          <div class="card">
                            <div class="card-body text-center">
                                <a href="{{ route('register') }}">
                                 <i class="fa fa-building" style="font-size: 150px;color: #1e2352;"></i>
                                </a>
                                <h3>
                               <a href="{{ route('register') }}">     شركات </a>
                                 </h3>
                            </div>
                          </div>
                          </div>
                        </div>


            </div>
            <!-- Returning Customer End -->


            <!-- New Customer Start -->
            <div class="col-md-12">
                <div class="text-center mt-5">
                    <img src="{{ url('/') }}/website/img/logo/logo.png">

                    <h6 class="h3 text-center mt-4 text-black">
                        لديك حساب بالفعل ؟
                    </h6>
                    <h6> انضم الينا وتسوق الان </h6>
                    <a class="return-customer-btn bdred" href="login.html">تسجيل الدخول </a>
                </div>
            </div>
            <!-- New Customer End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- LogIn Page End -->



@endsection
  