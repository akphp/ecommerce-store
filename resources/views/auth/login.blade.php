@extends('layouts.site.master')
@section('title')
   @lang('admin.login')
@endsection
@section('content')



<!-- LogIn Page Start -->
<div class="log-in ptb-45">
    <div class="container">
        <div class="row">

            <!-- Returning Customer Start -->
            <div class="col-md-6">
                <div class="well">
                    <div class="return-customer">
                        <div class="mb-40 custom-title text-center">
                            <img src="{{ url('/') }}/website/img/logo/logo.png" height="100" width="100">
                        </div>

                        @if($errors->any())
                        <span class="alert text-danger">
                            <strong> {{$errors->first()}} </strong>
                        </span>
                        @endif
                         
                        <form  action="{{ route('post.login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input required type="email" name="email" placeholder="ادخل البريد الالكترونى "
                                    id="input-email" class="form-control bdred">
{{--  
                                    @if ($errors->has('email'))
                                    <span class="alert text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif  --}}
                            </div>
                            <div class="form-group">

                                <input required  type="password" name="password" placeholder="كلمة المرور " id="input-password"
                                    class="form-control bdred">

                                    {{--  @if ($errors->has('password'))
                                    <span class="alert text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif  --}}
                            </div>
                            <span><input class="float-right" type="checkbox" name="remember">تذكرنى  </span>
                             


                          

                            <p class="float-left" class="lost-password"><a href="forgot-password.html">هل نسيت كلمة المرور </a></p>
                            <input type="submit" value="تسجيل الدخول"
                                class="return-customer-btn btn-block bdred">
                        </form>
                    </div>

                    <h6 class="text-center mt-4 text-black">
                        ليس لديك حساب <a href="{{ route('register.type') }}">انشاء حساب جديد </a>
                    </h6>

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
            <!-- Returning Customer End -->


            <!-- New Customer Start -->
            <div class="col-md-6">
                <div class="pro-img mt-5">
                    <img src="{{ url('/') }}/website/img/22.png">
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
  