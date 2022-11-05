<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
<style>
    @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
    body {
        font-family: 'Lateef', serif;
    }</style>
<nav style="background-color: #DD1197;"

class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-#DD1197 navbar-shadow">

<div class="navbar-wrapper">
        <div class="navbar-header " style="background-color: #DD1197;">
            <ul class="nav navbar-nav ">
                <li class="nav-item mobile-menu d-md-none mr-auto">
                    <a  class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                        <i  class="ft-menu font-large-1"></i></a></li>


                <li class="nav-item d mobile-menu  mr-auto">
                    <a class="navbar-brand p-5px" href="{{ route('admin.dashboard') }}">
                        <img style="display:inline-block" class="brand-logo" alt="modern admin logo"
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
            <div class="" id="navbar-mobile">
                <ul class="nav navbar-nav  float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav  float-right" >
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">

                  <span
                      class="user-name text-bold-700">{{Auth::guard('admin')->user()->name}}</span>

                            <span class="avatar avatar-online">
                  <img  style="height: 35px;"src="http://localhost/E-commerce/assets/{{ Auth::guard('admin')->user()->photo}}" alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ route('admin.profile.edit',Auth::guard('admin')->user()->id) }}"><i
                                    class="ft-user"></i> تعديل الملف الشحصي </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="ft-power"></i> تسجيل
                                الخروج </a>
                        </div>
                    </li>



                    <li>
                        <i class="fa fa-sms "style="font-size:30px;margin:20px;  color:#9da0a6;" data-toggle="modal" data-target="#myModal"></i>
                    </li>

                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                            <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">{{ $notificationCount }}</span>
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
                                class="ficon ft-mail"> </i>
                                <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow" id="data-count">{{ $messageCount }}</span>

                            </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Messages</span>
                                </h6>
                                <span
                                    class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                            </li>
                            <li class="scrollable-container media-list w-100">
                                @foreach ($message as $messages )


                                <a  data-toggle="modal" data-target="#replayModal">
                                    <div class="media">
                                        <div class="media-left">
                                <span class="avatar avatar-sm avatar-online rounded-circle">
                                <img src="{{$messages->photo}}"
                                alt="avatar"><i></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">{{ $messages->vendor_name }}</h6>
                                            <p class="notification-text font-small-3 text-muted">{{ $messages->message }}</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">
                                                      {{$messages->created_at }}
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>



                                @endforeach



                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- BEGIN VENDOR JS-->

