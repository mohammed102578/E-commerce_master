<!DOCTYPE html>
<html class="loading" lang="ar" data-textdirection="rtl">
<head>
<!--start dataTable-->
<meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/control.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">

          <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/plugins/animate/animate.css')}}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/pages/chat-application.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/control.css')}}">

    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/timedropper.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/style-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/custom-rtl.css')}}">

    <!-- END Custom CSS-->

    @yield('style')
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@include('admin.includes.header')
<style>
    .user-name {
        margin-bottom: -0.erm;
    }
</style>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admin.includes.sidebar')

@yield('content')

<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admin.includes.footer')
@notify_js
@notify_render

<!-- BEGIN VENDOR JS-->

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('assets/admin/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/tables/datatable/datatables.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('assets/admin/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('assets/admin/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>


<script src="{{asset('assets/admin/js/scripts/tables/datatables/datatable-basic.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{asset('assets/admin/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>











<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">ارسال رسالة الى المتجر</h4>
          <button type="button" style="margin-right: 259px;" class="close " data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">



 <form class="form" action="{{route('admin.messages')}}" method="post" id="message-">
                                        @csrf







                                        <div class="form-group">

<div class="col-xs-12">
  <label for="title" style="float: right" ><h4 class="text-dark align-right" class="text-dark">المتجر:</h4></label>

 <select class="form-control" name="vendor_id">
 @foreach ($allVendor as $vendor)
 <option   value="{{ $vendor->id }}">{{ $vendor->name }}<option>
 @endforeach

 </select>
</div>
@error('title')
<span class="text-danger">{{$message}}</span>
@enderror
</div>






<div class="form-group">

                                  <div class="col-xs-12">
                                    <label for="title" style="float: right" ><h4 class="text-dark align-right" class="text-dark">العنوان:</h4></label>

                                    <input type="text" class="form-control" name="title" id="title"
                                     value="">
                                </div>
                                @error('title')
                     <span class="text-danger">{{$message}}</span>
                     @enderror
                            </div>

                                          <div class="form-group">
                                            <div class="col-xs-12 ">
                                                <label for="messages"  style="float: right"><h4 class="text-dark">الرسالة  :</h4></label>
                                                <textarea type="text" class="form-control"
                                                title="enter your messag." name="message" ></textarea>
                                            </div>
                                            @error('email')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
                                        </div>
                                          <div class="form-group">

                                            <input type="submit" class="btn btn-danger" style="margin-top: 22px;
                                            font-family: 'Lateef', serif;
                                            font-size: 20px;
                                            margin-left: 207px;" value="ارسال">
                                          </div>

        </div>

      </div>
    </div>
  </div>
<!--end the model-->







<!--start the replay message-->
  <div class="modal fade" id="replayModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">ارسال رسالة الى المتجر</h4>
            <button type="button" style="margin-right: 259px;" class="close " data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">



   <form class="form" action="{{route('admin.messages')}}" method="post" id="message-">
                                          @csrf







                                          <div class="form-group">

  <div class="col-xs-12">
    <label for="title" style="float: right" ><h4 class="text-dark align-right" class="text-dark">المتجر:</h4></label>

   <select class="form-control" name="vendor_id">
   @foreach ($allVendor as $vendor)
   <option   value="{{ $vendor->id }}">{{ $vendor->name }}<option>
   @endforeach

   </select>
  </div>
  @error('title')
  <span class="text-danger">{{$message}}</span>
  @enderror
  </div>






  <div class="form-group">

                                    <div class="col-xs-12">
                                      <label for="title" style="float: right" ><h4 class="text-dark align-right" class="text-dark">العنوان:</h4></label>

                                      <input type="text" class="form-control" name="title" id="title"
                                       value="">
                                  </div>
                                  @error('title')
                       <span class="text-danger">{{$message}}</span>
                       @enderror
                              </div>

                                            <div class="form-group">
                                              <div class="col-xs-12 ">
                                                  <label for="messages"  style="float: right"><h4 class="text-dark">الرسالة  :</h4></label>
                                                  <textarea type="text" class="form-control"
                                                  title="enter your messag." name="message" ></textarea>
                                              </div>
                                              @error('email')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                                          </div>
                                            <div class="form-group">

                                              <input type="submit" class="btn btn-danger" style="margin-top: 22px;
                                              font-family: 'Lateef', serif;
                                              font-size: 20px;
                                              margin-left: 207px;" value="ارسال">
                                            </div>

          </div>

        </div>
      </div>
    </div>
  {{--end the replay message--}}




</body>
</html>
