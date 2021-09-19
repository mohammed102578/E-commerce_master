@extends('layouts.admin')

@section('content')

<hr>
<div class="app-content content">
    <div class="content-wrapper">

        <h1 style="margin-bottom:60px" class="text-center m-b-70px">Admin Detailes</h1>


    <div class="row bg-dark text-light">
  		<div class="col-sm-3"><!--left col-->


      <div class="text-center">
        <img  style="max-width:29%" src="http://localhost/e-commerce/assets/{{ Auth::guard('admin')->user()->photo}}" class="avatr img-circle img-responsive  h-100px w-100px" alt="avatar">


      </div></hr><br>



          <ul class="list-group">
            <li class="list-group-item text-muted"><h1>Admin Info </h1><i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Name</strong></span> {{ Auth::guard('admin')->user()->name}} :</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Email</strong></span> {{ Auth::guard('admin')->user()->email}} :</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Mobile</strong></span> {{ Auth::guard('admin')->user()->mobile}} :</li>
          </ul>



        </div><!--/col-3-->


    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#messages" ><h1 class="text-light">Edit profile</h1></a></li>
                <li><a data-toggle="tab" href="#settings"><h1 class="text-light">Change Password</h1></a></li>
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
                            <label for="first_name"><h4 class="text-light">photo</h4></label>
                    <input type="file" class="text-center center-block file-upload"  name="photo">

                </div>
                @error('photo')
               <span class="text-danger">{{$message}}</span>
               @enderror
            </div>





                      <div class="form-group">

                          <div class="col-xs-6 offset-3">
                              <label for="name"><h4 class="text-light" class="text-light">name</h4></label>
                              <input type="text" class="form-control" name="name" id="name"
                               value="{{Auth::guard('admin')->user()->name}}">
                          </div>
                          @error('name')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>


                      <div class="form-group">
                          <div class="col-xs-6 offset-3">
                             <label for="mobile"><h4 class="text-light">Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile"
                              title="enter your mobile number if any."name="photo" value="{{Auth::guard('admin')->user()->mobile}}">
                          </div>
                          @error('mobile')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6 offset-3">
                              <label for="email"><h4 class="text-light">Email</h4></label>
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
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
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
                              <label for="password"><h4 class="text-light">Current password</h4></label>
                              <input type="password" name="current_password" class="form-control" id="location" title="enter a location">
                          </div>
                          @error('current-password')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6 offset-3 offset-3">
                              <label for="New_password"><h4 class="text-light">New Password</h4></label>
                              <input type="password" class="form-control" name="New_password" id="New_password" itle="enter your New_password.">
                          </div>
                          @error('New_password')
               <span class="text-danger">{{$message}}</span>
               @enderror
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6 offset-3 offset-3">
                            <label for="confirm_New_password"><h4 class="text-light">Verify-password</h4></label>
                              <input type="password" class="form-control" name="confirm_New_password" id="confirm_New_password" title="enter your confirm_New_password.">
                          </div>
                          @error('confirm_New_password')
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
