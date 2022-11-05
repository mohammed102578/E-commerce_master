@extends('layouts.site')

@section('content')
<style>
@import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
.logheader{
border-color:#ffffff;
border:0px solid;
font-family: 'Lateef', serif;


}
.registerloginForm label.error {
		margin-left: 10px;
		width: auto;
		display: inline;
        font-size: 18px;
	}






.logbtn{
    background-image: linear-gradient(to right,#21a2fd 0%,#7967fe 100%);
    width: 160px;
    color:#fff;
    height: 43px;

}

.card-header{
    background-image: linear-gradient(to right,#21a2fd 0%,#7967fe 100%);
color: #fff;
text-align: center;
font-style: normal;
font-size: 2em;
box-shadow: 0 0 10px 0 rgba(0,0,0,.26);
}
.card-header:first-child{
    border-radius: 20px,20px,0px,0px;

}
.card-body{
padding: 26px;
box-shadow: 0 0 10px 0 rgba(0,0,0,.26);
border-color: #21a2fd;
border-width:4px;
}
input{
    box-shadow: 0 0 10px 0 rgba(0,0,0,.26);

}
.span-size {

    font-size: 18px;
    font-family: 'Lateef', serif;

}
select{
    box-shadow: 0 0 10px 0 rgba(0,0,0,.26);
    height: 48px;
    padding: 5px;

}
</style>
<div class="container">
    <br>
    <br>
    <br>
    <br>
    @include('vendor.includes.alerts.success')
    @include('vendor.includes.alerts.errors')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card logheader">
                <div class="logheader card-header">{{ __('تسجيل جديد ') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.register') }}" id="registerForm" class="registerloginForm">
                        @csrf


                        <div class="form-group row">
                            <div class="span-size  col-md-6">
                                                       <i class="fa fa-user"></i>
                                                       <label for="name" class="col-form-label text-md-right bold">{{ __('الاسم') }}</label>
                           </div >
                                                       <div class="col-md-12">

                                                           <input id="name" type="text" class="form-control"  name="name" autocomplete="name" autofocus>
                                                           <label for="name" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                                                        </div >
                                                           @error("name")
                                                            <span class="text-danger"> <strong>{{ $message }}</strong></span>
                                                            @enderror
                                                       </div>




                        <div class="form-group row">
 <div class="span-size  col-md-6">
    <i class="fa fa-envelope-square"></i>
                            <label for="email" class="col-form-label  text-md-right bold">{{ __('البريد الالكتروني') }}</label>
</div >
                            <div class="col-md-12">

                                <input id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                <label for="email" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                                @error("email")
                                <span class="text-danger"> <strong>{{ $message }}</strong></span>
                                 @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 span-size">
                                <i class="fa fa-key"></i>
                            <label for="password" class="col-form-label  text-md-right">{{ __('كلمة المرور') }}</label>
                            </div>
                            <div class="col-md-12">
                                <span>
                                <input id="password" type="password" class="form-control"  name="password" autocomplete="current-password">
                                </span>
                                <label for="password" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                                @error("password")
                                <span class="text-danger"> <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6 span-size">
                                <i class="fa fa-key"></i>
                            <label for="confirmpassword" class="col-form-label  text-md-right">{{ __('تأكيد كلمة المرور ') }}</label>
                            </div>
                            <div class="col-md-12">
                                <span>
                                <input id="confirmpassword" type="password" class="form-control"  name="confirmpassword" autocomplete="current-confirmpassword">
                                </span>
                                <label for="confirmpassword" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                                @error('confirmpassword')
                                <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                        <div class="span-size  col-md-6">
                            <i class="fa fa-phone-square"></i>
                                                   <label for="mobile" class="col-form-label  text-md-right bold">{{ __('رقم الهاتف') }}</label>
                       </div >
                                                   <div class="col-md-12">

                                                       <input id="mobile" type="text" class="form-control" name="mobile" mobile="mobile"autocomplete="mobile" autofocus>
                                                       <label for="mobile" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                                                       @error('mobile')
                                                       <span class="text-danger">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                                   </div>
                                               </div>






                        <div class="form-group row">
                            <div class="span-size  col-md-6">
                                <i class="fa fa-phone-square"></i>
                                                       <label for="city" class="col-form-label  text-md-right bold">{{ __(' المدينة الحالية ') }}</label>
                           </div >
                                                       <div class="col-md-12">


                                                        <select name="city" class="form-control " style="font-size:13px;  height: 45px;
                                                        padding: 5px;">
                                                            <option selected>اختر المدينة من هنا</option>
                                                            <option>الخرطوم</option>
                                                            <option>امدرمان</option>
                                                            <option>كسلا</option>
                                                            <option>بورتسودان </option>
                                                            <option>القضارف</option>
                                                            <option>الدمازين </option>
                                                            <option>كوستي </option>
                                                            <option>خرطوم بحري </option>
                                                            <option>عطبرة</option>
                                                            <option>دنقلا</option>
                                                            <option>كادوقلي</option>
                                                            <option>الابيض</option>
                                                            <option>الفولة</option>
                                                            <option>الفاشر</option>
                                                            <option>نيالا</option>
                                                            <option>الجنينة</option>
                                                            <option>زالنجي</option>
                                                            <option>الضعين</option>
                                                        </select>
                                                           <label for="city" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                                                           @error('city')
                                                           <span class="text-danger">
                                                                   <strong>{{ $message }}</strong>
                                                               </span>
                                                           @enderror
                                                       </div>
                                                   </div>





                                               <div class="form-group row">
                                                <div class="span-size  col-md-6">
                                                    <i class="fa fa-users"></i>
                                                                           <label for="gender" class="col-form-label text-md-right bold">{{ __('الجنس ') }}</label>
                                               </div >
                                                                           <div class="col-md-12">


                                                                            <div class="form-check pull-left">
                                                                                <label class="form-check-label">
                                                                                  <input type="radio" class="form-check-input" value="male" name="gender">
                                                                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="span-size">ذكر</span>
                                                                                </label>
                                                                              </div>
                                                                              <div class="form-check pull-right ">
                                                                                <label class="form-check-label ">
                                                                                  <input type="radio" class="form-check-input" value="female" name="gender">
                                                                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="span-size">انثى</span>
                                                                                </label>
                                                                                <label for="gender" class="col-form-label error  m-0 text-danger text-md-right bold"></label>
                                                                              </div>





                                                                           </div>

                                                                           @error('gender') <span class="text-danger"> <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                        </div>







                        <div class="form-group row mb-0">
                            <div class="col-md-8">

                                <button type="submit" class="logbtn btn   pull-left">
                                    <span class="span-size">
                                    {{ __('تسجيل') }}
                                </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
@endsection
