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
            <div class="col-md-6">
                <div class="well">
                    <div class="return-customer">
                        <div class="mb-10 custom-title text-center">
                            <!-- <img src="{{ url('/') }}/website/img/logo/logo.png" height="100" width="100"> -->
                            <h3>انشاء حساب جديد </h3>
                            <p>كن اول المنضمين الينا - وبادر بلبتسجيل والتسوق والبيع بسهولة </p>
                        </div>

                        @if($errors->any())
                        <span class="alert text-danger">
                            <strong> {{$errors->first()}} </strong>
                        </span>
                        @endif
                        <form {{ route('post.register') }} method="POST">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input required type="text" name="name" placeholder="ادخل الاسم الاول   "
                                            id="input-name" class="form-control bdred">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input required type="text" name="last_name" placeholder="ادخل اسم العائلة   "
                                            id="input-last_name" class="form-control bdred">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input required type="text" name="email" placeholder="ادخل البريد الالكترونى "
                                            id="input-email" class="form-control bdred">
                                    </div>
                                </div>

                                <div class="col-md-12 mb-10">
                                    <div class="form-group">
                                        <input required type="password" name="password" placeholder="كلمة المرور "
                                            id="password" class="form-control bdred">
                                    </div>
                                </div>

                                <div class="col-md-12 mb-10">
                                    <div class="form-group">
                                        <input required type="text" name="password_confirmation" placeholder=" تاكيد كلمة المرور "
                                            id="password_confirmation" class="form-control bdred">
                                    </div>
                                </div>

                                <div class="col-md-12 mb-10">
                                    <div class="form-group">
                                        <input required type="text" name="telephone" placeholder="ادخل رقم الموبايل     "
                                            id="input-telephone" class="form-control bdred">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="float-md-right">
                                        <span>اوافق على <a href="#" class="agree"><b>الاحكام والشروط
                                                </b></a></span>
                                        <input required type="checkbox" name="agree" value="1"> &nbsp;
                                    </div>
                                </div>

                                <br />
                                <div class="col-md-12">
                                    <div style="    clear: both;">
                                        <span>تلقي النشرات الأخباريه وآخر العروض والمنتجات الجديده</span>
                                        <input required type="checkbox" name="agree" value="1"> &nbsp;
                                    </div>
                                </div>



                                <input type="submit" value=" انشاء حساب "
                                    class="return-customer-btn btn-block bdred">
                                    
                            </div>

                        </form>


                        <h6 class="text-center mt-4 text-black">
                            التسجيل بواسطة 
                      </h6>
                      <div class="col-md-6 text-center m-auto mt-10">
                          <a href=""><img src="{{ url('/') }}/website/img/f.png" /> </a>
                          <a href=""><img src="{{ url('/') }}/website/img/g.png" /> </a>
                          <a href=""><img src="{{ url('/') }}/website/img/t.png" /> </a>
                      </div>
                    </div>


                </div>
            </div>
            <!-- Returning Customer End -->


            <!-- New Customer Start -->
            <div class="col-md-6">
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
  