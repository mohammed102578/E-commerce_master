<!DOCTYPE html>
<html class="loading" lang="ar" data-textdirection="rtl">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <style>
        @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
        * {
            font-family: 'Lateef', serif;
        }</style>
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    {{-- <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet"> --}}

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
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/app.css')}}">
<!--start google chart -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
<style>

a:hover{
    background-color: none;
}
</style>
</head>
<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->




<nav style="background-color: #DD1197;"

class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-#DD1197 navbar-shadow">

<div class="navbar-wrapper">
        <div class="navbar-header " style="background-color: #DD1197;">
            <ul class="nav navbar-nav ">
                <li class="nav-item mobile-menu d-md-none mr-auto">
                    <a  class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                        <i  class="ft-menu font-large-1"></i></a></li>


                <li class="nav-item d mobile-menu  mr-auto">
                    <a class="navbar-brand p-5px" href="{{ route('vendor.dashboard') }}">
                        <img style="display:inline-block" class="brand-logo" alt="modern vendor logo"
                             src="{{asset('assets/admin/images/logo/logo.png')}}">
                        <h3 class="brand-text text-light">Makrim Elakhlag</h3>
                    </a>
                </li>

                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                            class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>












        <div class="navbar-container content">
            <div class="collapse navbar-collapse " id="navbar-mobile">





                <ul class="nav navbar-nav  float-right">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav   float-left" style="margin-right: 640px;">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">

                  <span
                      class="user-name text-bold-700">{{Auth::guard('vendor')->user()->name}}

                      </span>

                            <span class="avatar avatar-online">
                  <img  style="height: 35px;"src="{{ Auth::guard('vendor')->user()->logo}}" alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ route('vendor.profile.edit',Auth::guard('vendor')->user()->id) }}"><i
                                    class="ft-user"></i> تعديل الملف الشحصي </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('vendor.logout') }}"><i class="ft-power"></i> تسجيل
                                الخروج </a>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-sms "style="font-size:30px;margin:20px;  color:#9da0a6;" data-toggle="modal" data-target="#myModal"></i>
                    </li>


                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                            <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow" id="data-count">{{ $notificationCount }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">الاشعارات</span>
                                </h6>
                                <span
                                    class="notification-tag badge badge-default badge-danger float-right m-0">{{ $notificationCount }} New</span>
                            </li>
                            <li class="scrollable-container media-list w-100" >






@foreach ($notification as $notify)

<a href="javascript:void(0)">
    <div class="media">

        <div class="media-body" style="padding-left: 7rem;">
            <h6 class="media-heading">{{ $notify->userName }} </h6>
            <p class="notification-text font-small-3 text-muted">.
                {{ $notify->notification }}
            </p>
            <small>
                <time class="media-meta text-muted">
                     {{  $notify->created_at }}
                </time>
            </small>
        </div>
        <div class="media-right align-self-center">
            <img class="rounded-circle"  style="width:50px;height:50px;" src="{{ $notify->photo }}">
        </div>
    </div>
</a>


@endforeach





                            </li>

                        </ul>
                    </li>



                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i
                                class="ficon ft-mail"></i>
                                <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow" id="data-count">{{ $messageCount }}</span>
                              </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">الرسائل</span>
                                </h6>
                                <span
                                    class="notification-tag badge badge-default badge-warning float-right m-0">New{{ $messageCount }}</span>
                            </li>
                            <li class="scrollable-container media-list w-100">



@foreach ($message as $messages )


<a  data-toggle="modal" data-target="#replayModal">
    <div class="media">
        <div class="media-left">
<span class="avatar avatar-sm avatar-online rounded-circle">
<img style="height:34px;" src="http://localhost/E-commerce/assets/{{$messages->photo}}"
alt="avatar"><i></i></span>
        </div>
        <div class="media-body">
            <h6 class="media-heading">{{ $messages->vendor_name }}</h6>

            <p class="float-right notification-text font-small-3 text-muted">{{ $messages->message }}</p>
<br/>
            <small>
                <time class="media-meta text-muted"
                     style="margin-top: 30px;" >
                      {{$messages->created_at }}
                </time>
            </small>
        </div>
    </div>
</a>



@endforeach




                        </ul>
                    </li>

                </ul>










            </div>
        </div>
    </div>
</nav>
<!-- BEGIN VENDOR JS-->


<!-- BEGIN VENDOR JS-->


<!-- BEGIN PAGE VENDOR JS-->

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
          <h4 class="modal-title">ارسال رسالة الى المدير</h4>
          <button type="button" style="margin-right: 259px;" class="close " data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">



 <form class="form" action="{{route('vendor.messages')}}" method="post" id="message-">
                                        @csrf


<input type="hidden"  value="{{Auth::guard('vendor')->user()->id}}" name="id">


<div class="form-group">

                                  <div class="col-xs-12">
                                    <label for="title" style="float: right" ><h4 class="text-dark align-right" class="text-dark">العنوان:</h4></label>
                                    <input type="hidden" name="moh" value="3">
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
</body>
</html>
