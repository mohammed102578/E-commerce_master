@extends('layouts.siteuser')

@section('content')
<style>
    @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
    .registerloginForm label.error {
		margin-left: 10px;
		width: auto;
		display: inline;
        font-size: 18px;
	}
    .userDet{
        border-style: solid;
        border-radius: 10px 10px 0px 0px;
        background-image: linear-gradient(to right,#21a2fd,#7967fe 52%,#2b9bfd);
        font-family: 'Lateef', serif;

    }
    .profile{

       padding-left: 37px;
       font-family: 'Lateef', serif;
    }

    .input{

font-size: 18px;
font-family: 'Lateef', serif;
}
.nav-strong{
    font-style:bold;
    font-size: 25px;
font-family: 'Lateef', serif;
}
   .star1{
    width: 125px;
height: 74px;
background-image: linear-gradient(to right,#21a2fd,#7967fe 52%,#2b9bfd);
border-radius: 16%;
margin-right: 699px;
font-family: 'Lateef', serif;
    }
    </style>
<hr>
<div class="app-content content">
    <div class="content-wrapper">

       <div class="star1"> <h1  class="text-center " style="font-family:  'Lateef', serif;">الملف الشخصي</h1></div>


    <div class="row text-light justify-content-center  " >
  		<div class="col-sm-4 userDet"><!--left col-->


      <div class="text-center  ">
        <img class="avatr rounded-circle img-responsive  h-100px w-100px"  style="max-width:29%" src="http://localhost/E-commerce/assets/{{ Auth::user()->photo }}" alt="avatar">


      </div></hr><br>



          <ul class="list-group profile latief">
            <li class="list-group-item text-muted"><h1>User Info </h1><i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>الاسم :  &nbsp</strong></span> {{ Auth::user()->name}} </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>البريد الالكتروني :  &nbsp</strong></span> {{ Auth::user()->email}} </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>رقم الهاتف :  &nbsp</strong></span> {{ Auth::user()->mobile}} </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong> الجنس :  &nbsp</strong></span> {{ Auth::user()->gender}} </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong> المدينة :  &nbsp</strong></span> {{ Auth::user()->city}} </li>
          </ul>



        </div><!--/col-3-->


    	<div class="col-sm-4 userDet">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#messages" ><h1 class="text-light nav-strong">تعديل الملف الشخصي</h1></a></li>&nbsp
                |
                &nbsp
                <li><a data-toggle="tab" href="#settings"><h1 class="text-light nav-strong">تعديل كلمة السر</h1></a></li>
              </ul>

              @include('admin.includes.alerts.success')
              @include('admin.includes.alerts.errors')
          <div class="tab-content ">

             <div class="tab-pane active" id="messages">

               <h2></h2>

               <hr>
                  <form class="form registerloginForm" action="{{route('user.updateprofile',Auth::user()->id)}}" method="post" id="registrationForm"
                    enctype="multipart/form-data">
                                            @csrf
                  <div class="form-group mt-10px">

                        <div class="col-xs-6 offset-3">
                            <label for="first_name"><h4 class="text-light">photo</h4></label>
                    <input type="file" class="text-center center-block file-upload"  name="photo">
                    <label for="photo" class="col-form-label error m-0 text-danger text-md-right bold"></label>

                </div>
                @error('photo')
               <span class="text-danger">{{$message}}</span>
               @enderror
            </div>





                      <div class="form-group">

                          <div class="col-xs-6 offset-3">
                              <label for="name"><h4 class="text-light" class="text-light input">الاسم</h4></label>
                              <input type="text" class="form-control input" name="name" id="name"
                               value="{{Auth::user()->name}}" style="border-radius:9px">
                               <label for="name" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                          </div>
                          @error('name')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>


                      <div class="form-group">
                          <div class="col-xs-6 offset-3">
                             <label for="mobile"><h4 class="text-light input">رقم الهاتف</h4></label>
                              <input type="text" class="form-control input" name="mobile" id="mobile"
                              title="enter your mobile number if any."name="photo" value="{{Auth::user()->mobile}}" style="border-radius:9px">
                              <label for="mobile" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                          </div>
                          @error('mobile')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6 offset-3">
                              <label for="email"><h4 class="text-light input">البريد الالكتروني</h4></label>
                              <input type="email" class="form-control input" name="email" id="email"
                              title="enter your email." name="photo" value="{{ Auth::user()->email}}" style="border-radius:9px">
                              <label for="email" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                          </div>
                          @error('email')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>















                      <div class="col-xs-6 offset-3">
                        <label for="city"><h4 class="text-light input"> المدينة الحالية </h4></label>
                        <br>
                        <select name="city"  class="form-control" value="{{ Auth::user()->city}}" style="border-radius:9px; font-size:13px;  height: 45px">
                            <optgroup label="من فضلك أختر المدينة ">

                     @if(Auth::user()->city ==  'الخرطوم' )  selected @endif
                            >الخرطوم</option>
                            <option  @if(Auth::user()->city == 'امدرمان'  )  selected @endif
                            >امدرمان</option>
                            <option  @if(Auth::user()->city ==  'كسلا' )  selected @endif
                            >كسلا</option>
                            <option  @if(Auth::user()->city ==  'بورتسودان' )  selected @endif
                            >بورتسودان </option>
                            <option  @if(Auth::user()->city ==  'القضارف' )  selected @endif
                            >القضارف</option>
                            <option  @if(Auth::user()->city ==  'الدمازين' )  selected @endif
                            >الدمازين </option>
                            <option  @if(Auth::user()->city ==  'كوستي' )  selected @endif
                            >كوستي </option>
                            <option  @if(Auth::user()->city ==  'خرطوم بحري' )  selected @endif
                            >خرطوم بحري </option>
                            <option  @if(Auth::user()->city ==  'عطبرة' )  selected @endif
                            >عطبرة</option>
                            <option  @if(Auth::user()->city ==  'دنقلا' )  selected @endif
                            >دنقلا</option>
                            <option  @if(Auth::user()->city ==  'كادوقلي' )  selected @endif
                            >كادوقلي</option>
                            <option  @if(Auth::user()->city ==  'الابيض' )  selected @endif
                            >الابيض</option>
                            <option  @if(Auth::user()->city ==  'الفولة' )  selected @endif
                            >الفولة</option>
                            <option  @if(Auth::user()->city ==  'الفاشر' )  selected @endif
                            >الفاشر</option>
                            <option  @if(Auth::user()->city ==  'نيالا' )  selected @endif
                            >نيالا</option>
                            <option  @if(Auth::user()->city ==  'الجنينة' )  selected @endif
                            >الجنينة</option>
                            <option  @if(Auth::user()->city == 'زالنجي'  )  selected @endif
                            >زالنجي</option>
                            <option  @if(Auth::user()->city == 'الضعين'  )  selected @endif
                            >الضعين</option>
                        </select>
                        <label for="city" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                    </div>
                    @error('city')
         <span class="text-danger">{{$message}}</span>
         @enderror























                      <div class="form-group">

                        <div class="col-xs-6 offset-3">
                            <div>

                                                   <label for="email"><h4 class="text-light input">الجنس</h4></label>

                            </div>
                                                    <div class="form-check pull-left">
                                                        <label class="form-check-label">
                                                          <input type="radio" class="form-check-input" value="male" name="gender"

                                                          @if( Auth::user()->gender=='male')
                                                            checked
                                                          @endif


                                                          >
                                                          <label for="gender" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4 class="text-light input">ذكر</h4>
                                                        </label>
                                                      </div>
                                                      <div class="form-check pull-right ">
                                                        <label class="form-check-label ">
                                                          <input type="radio" class="form-check-input" value="female" name="gender"

                                                          @if( Auth::user()->gender=='female')
                                                          checked
                                                        @endif
                                                          >
                                                          <label for="gender" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4 class="text-light input">انثى</h4>
                                                        </label>
                                                        <label for="gender" class="col-form-label error  m-0 text-danger text-md-right bold"></label>
                                                      </div>
                                                   </div>

                                                   @error('gender')
                                                   <span class="text-danger">{{$message}}</span>
                                                   @enderror
                                                          </div>










                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg btn-danger" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>

             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">


                  <hr>
                  <form class="form registerloginForm" action="{{ route('user.changepassword',Auth::user()->id) }}" method="post" id="registrationForm">
                    @csrf
                      <div class="form-group">

                          <div class="col-xs-6 offset-3 offset-3">
                              <label for="password"><h4 class="text-light input">كلمة السر الحالي</h4></label>

                              <input type="password" name="password" class="form-control input" id="location" title="enter a location">
                              <label for="password" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                            </div>
                          @error('current-password')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6 offset-3 offset-3">
                              <label for="New_password"><h4 class="text-light input">كلمة السر الجديدة</h4></label>

                              <input type="password" class="form-control input" name="New_password" id="New_password" itle="enter your New_password.">
                              <label for="New_password" class="col-form-label error m-0 text-danger text-md-right bold"></label>

                            </div>
                          @error('New_password')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6 offset-3 offset-3">
                            <label for="confirmpassword"><h4 class="text-light input input">تأكيد كلمةالمرور</h4></label>
                              <input type="password" class="form-control input" name="confirmpassword" id="confirmpassword" title="enter your confirmpassword.">
                              <label for="confirmpassword" class="col-form-label error m-0 text-danger text-md-right bold"></label>

                            </div>
                          @error('confirmpassword')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
              	</form>
              </div>

              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->








</div>
</div>
    @endsection
