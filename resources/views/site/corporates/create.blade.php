@extends('layouts.site.master')
@section('title')
    @lang('admin.create') :  @lang('admin.corporates')
   
@endsection
@section('content')
  



<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
  <div class="container">
      <div class="breadcrumb">
          <ul class="d-flex align-items-center">
              <li><a href="{{ route('home') }}"> @lang('admin.home') </a></li>
              <li><a href="#">@lang('admin.corporates') </a></li>
              <li class="active"><a href="product.html">   @lang('admin.create')  </a></li>
          </ul>
      </div>
  </div>
  <!-- Container End -->
</div>
<!-- Breadcrumb End -->




<!-- <section style="background:#efefe9;"> -->
    <div class="log-in">
        <div class="board">
            <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
            <div class="board-inner">
                <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                    <li class="active">
                        <a href="#home" data-toggle="tab" title="معلومات صاحب المنشأة<">
                            <span class="round-tabs one">
                                1
                            </span>

                        </a>
                        <p class="h5">معلومات صاحب المنشأة</p>
                    </li>

                    <li><a href="#profile" data-toggle="tab" title="معلومات المنشأة ">
                            <span class="round-tabs two">
                                2
                            </span>
                        </a>
                        <p class="h5">معلومات المنشأة </p>

                    </li>
                    <li><a href="#messages" data-toggle="tab" title="الأشخاص المفوضين ">
                            <span class="round-tabs three">
                                3
                            </span> </a>
                        <p class="h5">الأشخاص المفوضين</p>

                    </li>

                    <li><a href="#settings" data-toggle="tab" title="معلومات البنك ">
                            <span class="round-tabs four">
                                4
                            </span>
                        </a>
                        <p class="h5">معلومات البنك</p>

                    </li>

                    <li><a href="#doner" data-toggle="tab" title="تأكيد الهوية">
                            <span class="round-tabs five">
                                5
                            </span> </a>
                        <p class="h5"> تأكيد الهوية</p>

                    </li>

                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <form action="{{ route('corporates.store') }}" method="POST">
                        @csrf

                    <div class="col-md-8 mr-150">
                        <div class="">
                            <div class="return-customer">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="owner_name" placeholder="اسم صاحب المنشأة "
                                                    id="input-owner_name" class="form-control bdred1">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="civil_registry_no" placeholder="رقم السجل المدني  "
                                                    id="input-civil_registry_no" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="civil_registry_source" placeholder="مصدرها "
                                                    id="input-civil_registry_source" class="form-control bdred1">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="date" name="civil_registry_release_date" placeholder="تاريخ الإصدار"
                                                    id="input-civil_registry_release_date" class="form-control bdred1">
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="date" name="civil_registry_expiry_date" placeholder=" تاريخ الانتهاء"
                                                    id="input-civil_registry_expiry_date" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="owner_telephone" placeholder="ادخل رقم الموبايل     "
                                                    id="input-owner_telephone" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12  text-center mb-3">
                                            <a  href="#profile" data-toggle="tab"  class="return-customer-btn bdred">
                                                حفظ ومتابعة
                                            </a>

                                        </div>
                                        <a class="h4 m-auto mt-5" href="#">
                                            الغاء
                                        </a>


                                    </div>

                            </div>


                        </div>
                    </div>

                </div>



                <div class="tab-pane fade" id="profile">

                    <div class="col-md-8 mr-150">
                        <div class="mb-150">
                            <div class="return-customer">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="اسم  المنشأة "
                                                    id="input-email" class="form-control bdred1">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="city" placeholder="المدينة  "
                                                    id="input-city" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="street" placeholder="الشارع  "
                                                    id="input-street" class="form-control bdred1">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="mail_box" placeholder=" صندوق البريد "
                                                    id="input-mail_box" class="form-control bdred1">
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="postal_code" placeholder="الرمز البريدي "
                                                    id="input-postal_code" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="building_number" placeholder=" رقم المبنى/ الوحدة  "
                                                    id="input-building_number" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="commercial_registration_id" placeholder="رقم السجل التجاري "
                                                    id="input-commercial_registration_id" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="commercial_register_source" placeholder="مصدرها "
                                                    id="input-commercial_register_source" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="date" name="commercial_register_end_date" placeholder="تاريخ الانتهاء "
                                                    id="input-commercial_register_end_date" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="municipal_license_number" placeholder="رقم رخصة بلدية  "
                                                    id="input-municipal_license_number" class="form-control bdred1">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="municipal_license_source" placeholder="مصدرها "
                                                    id="input-municipal_license_source" class="form-control bdred1">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="date" name="municipal_license_end_date" placeholder="تاريخ الانتهاء "
                                                    id="input-municipal_license_end_date" class="form-control bdred1">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="activity_type" placeholder="نوع النشاط  "
                                                    id="input-activity_type" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="email"
                                                    placeholder="عنوان البريد الالكتروني  " id="input-email"
                                                    class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="mobile" placeholder="ادخل رقم الجوال     "
                                                    id="input-mobile" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="telephone" placeholder="ادخل رقم الهاتف     "
                                                    id="input-telephone" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12  text-center mb-3">
                                            <a  href="#messages" data-toggle="tab" title="" data-original-title="الأشخاص المفوضين " aria-expanded="true"  class="return-customer-btn bdred">
                                                حفظ ومتابعة
                                            </a>

                                        </div>
                                        <a class="h4 m-auto mt-5" href="#">
                                            الغاء
                                        </a>


                                    </div>

                            </div>


                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="messages">

                    <div class="col-md-8 mr-150">
                        <div class="">
                            <div class="return-customer">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="الاسم  "
                                                    id="input-email" class="form-control bdred1">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="الوظيفة "
                                                    id="input-email" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="ادخل رقم الدوال      "
                                                    id="input-email" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12  text-center mb-3">
                                            <input type="submit" value="حفظ ومتابعة"
                                                class="return-customer-btn bdred">

                                        </div>
                                        <a class="h4 m-auto mt-5" href="#">
                                            الغاء
                                        </a>


                                    </div>

                            </div>


                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="settings">

                    <div class="col-md-8 mr-150">
                        <div class="">
                            <div class="return-customer">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="البنك الرئيسي   "
                                                    id="input-email" class="form-control bdred1">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="المدينة/الفرع "
                                                    id="input-email" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="اسم صاحب الحساب "
                                                    id="input-email" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="رقم الحساب (ايبان)"
                                                    id="input-email" class="form-control bdred1">
                                            </div>
                                        </div>


                                        <div class="col-md-12  text-center mb-3">
                                            <input type="submit" value="حفظ ومتابعة"
                                                class="return-customer-btn bdred">

                                        </div>
                                        <a class="h4 m-auto mt-5" href="#">
                                            الغاء
                                        </a>


                                    </div>

                            </div>


                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="doner">
                    <div class="text-center">
                        <i class="img-intro icon-checkmark-circle"></i>
                    </div>
                    <h3 class="head text-center">thanks for staying tuned! <span style="color:#f48260;">♥</span>
                        Bootstrap</h3>
                    <p class="narrow text-center">
                        Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt
                        ut, utinam saperet facilisi an vim.
                    </p>
                </div>
                <div class="clearfix"></div>

            </form>
            </div>

        </div>
    </div>
    <!-- </section> -->






@endsection