@extends('layouts.admin')

@section('content')
<style>
    @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
    body {
        font-family: 'Lateef', serif;
    }</style>
<hr>
<div class="app-content content">
    <div class="content-wrapper">

        <h1 style="margin-bottom:60px;font-family:'Lateef', serif;  font-size:35px" class="text-center m-b-70px">الصفحة الشخصية لمدير الموقع</h1>


    <div dir="ltr" lang="ar" class="  text-dark col-sm-10 center offset-sm-2" >
  		<div class="col-sm-4" style="margin-right: 10px;box-shadow: 0 0 10px 0 rgba(0,0,0,.25);background-color:white ;border-radius:5px"><!--left col-->


      <div class="text-center" >
        <img  style="max-width:100%;height:140px;" src="http://localhost/E-commerce/assets/{{ Auth::guard('admin')->user()->photo}}" class="avatr img-circle img-responsive  h-100px w-100px" alt="avatar">


      </div></hr><br>



          <ul class="list-group" >
            <li class="list-group-item text-muted"><h1 style="font-family:'Lateef', serif;  font-size:25px">المعلومات الشخصية</h1><i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right" style="font-family:'Lateef', serif;  font-size:18px"> {{ Auth::guard('admin')->user()->name}} <span class="pull-right"><strong>الاسم</strong></span> </li>
            <li class="list-group-item text-right" style="font-family:'Lateef', serif;  font-size:18px">{{ Auth::guard('admin')->user()->email}} <span class="pull-right" ><strong>الايميل</strong></span> </li>
            <li class="list-group-item text-right" style="font-family:'Lateef', serif;  font-size:18px">{{ Auth::guard('admin')->user()->mobile}} <span class="pull-right" ><strong>الهاتف</strong></span> </li>
          </ul>



        </div><!--/col-3-->


    	<div class="col-sm-6 m-10px" style="box-shadow: 0 0 10px 0 rgba(0,0,0,.25);background-color:white ;border-radius:5px">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#messages" ><h1 style="font-family:'Lateef', serif;  font-size:22px"class="text-dark">تعديل الصفحة الشخصية</h1></a></li>
                <li><a data-toggle="tab" href="#settings"><h1 style="font-family:'Lateef', serif;  font-size:22px"class="text-dark">تغيير كلمة السر</h1></a></li>
              </ul>

              @include('admin.includes.alerts.success')
              @include('admin.includes.alerts.errors')
          <div class="tab-content">

             <div class="tab-pane active" id="messages">

               <h2></h2>

               <hr>
                  <form class="form" action="{{route('admin.profile.update',Auth::guard('admin')->user()->id)}}" method="post" id="registrationForm"
                    enctype="multipart/form-data">
                                            @csrf
                  <div class="form-group mt-10px">

                        <div class="col-xs-6 offset-3">
                            <label for="first_name"><h4 class="text-dark" style="font-family:'Lateef', serif;  font-size:22px">الصورة</h4></label>
                    <input type="file" class="text-center center-block file-upload"  name="photo">

                </div>
                @error('photo')
               <span class="text-danger">{{$message}}</span>
               @enderror
            </div>





                      <div class="form-group">

                          <div class="col-xs-6 offset-3">
                              <label for="name"><h4 class="text-dark" class="text-dark" style="font-family:'Lateef', serif;  font-size:22px">الاسم</h4></label>
                              <input type="text" class="form-control" name="name" id="name"
                               value="{{Auth::guard('admin')->user()->name}}">
                          </div>
                          @error('name')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>


                      <div class="form-group">
                          <div class="col-xs-6 offset-3">
                             <label for="mobile"><h4 class="text-dark" style="font-family:'Lateef', serif;  font-size:22px">الهاتف</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile"
                              title="enter your mobile number if any."name="photo" value="{{Auth::guard('admin')->user()->mobile}}">
                          </div>
                          @error('mobile')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6 offset-3">
                              <label for="email"><h4 class="text-dark">البريد الالكتروني</h4></label>
                              <input type="email" class="form-control" name="email" id="email"
                              title="enter your email." name="photo" value="{{ Auth::guard('admin')->user()->email}}">
                          </div>
                          @error('email')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button style="font-family:'Lateef', serif;  font-size:22px"class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> حفظ</button>

                            </div>
                      </div>
              	</form>

             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">


                  <hr>
                  <form class="form" action="{{ route('admin.profile.changePassword',Auth::guard('admin')->user()->id) }}" method="post" id="registrationForm">
                    @csrf
                      <div class="form-group">

                          <div class="col-xs-6 offset-3 offset-3">
                              <label for="password"><h4 style="font-family:'Lateef', serif;  font-size:22px"class="text-dark">كلمة السر الحالي</h4></label>
                              <input type="password" name="current_password" class="form-control" id="location" title="enter a location">
                          </div>
                          @error('current-password')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6 offset-3 offset-3">
                              <label for="New_password"><h4 style="font-family:'Lateef', serif;  font-size:22px" class="text-dark">كلمة السر الجديدة</h4></label>
                              <input type="password" class="form-control" name="New_password" id="New_password" itle="enter your New_password.">
                          </div>
                          @error('New_password')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6 offset-3 offset-3">
                            <label for="confirm_New_password"><h4 style="font-family:'Lateef', serif;  font-size:22px"class="text-dark">تأكيد كلمة السر</h4></label>
                              <input type="password" class="form-control" name="confirm_New_password" id="confirm_New_password" title="enter your confirm_New_password.">
                          </div>
                          @error('confirm_New_password')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success pull-right" type="submit" style="font-family:'Lateef', serif;  font-size:22px"><i class="glyphicon glyphicon-ok-sign"></i> حفظ</button>
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
