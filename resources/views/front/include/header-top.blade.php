<div class="header-top hidden-sm-down">
    <div class="container">
      <div class="content">
        <div class="row">
          <div class="header-top-left col-lg-6 col-md-6 d-flex justify-content-start align-items-center">
            <div class="detail-email d-flex align-items-center justify-content-center">
              <i class="icon-email"></i>
              <p>Email :  </p>


          <span>
            support@gmail.com
          </span>




                          </div>
            <div class="detail-call d-flex align-items-center justify-content-center">
              <i class="icon-deal"></i>
              <p>Today Deals </p>
            </div>
          </div>


<div class="col-lg-6 col-md-6 d-flex justify-content-end align-items-center header-top-right">


@auth


    <ul class="nav navbar-nav  float-left" >
        <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">

      <span
          class="user-name text-bold-700 latief">{{Auth::user()->name}}</span>

                <span class="avatar avatar-online">
      <img class="rounded-circle" style="height: 35px;"src="http://localhost/e-commerce/assets/{{ Auth::user()->photo}}" alt="avatar"><i></i></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item latief" href="{{ route('user.profile') }}"><i
                        class="ft-user " ></i> تعديل الملف الشحصي </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item latief" href="{{  route('user.logout')  }}"><i class="ft-power"></i> تسجيل
                    الخروج </a>
            </div>
        </li>



    </ul>
















@endauth

@guest

<div class="register-out">
    <i class="zmdi zmdi-account"></i>
    <a style="font-family: 'Lateef', serif;font-size:18px " class="تسجيل جديد" href="{{  route('get.user.register')  }}" data-link-action="display-register-form" >
    تسجيل جديد
    </a>
    <span class="or-text">or</span>
    <a style="font-family: 'Lateef', serif;font-size:18px "class="login" href="{{ route('get.user.login') }}" rel="nofollow" title="تسجيل الدخول إلى حسابك"> تسجيل الدخول</a>
    </div>
@endguest

   <!--


-->









<!-- begin module:ps_currencyselector/ps_currencyselector.tpl -->
<!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_currencyselector/ps_currencyselector.tpl --><div id="_desktop_currency_selector" class="currency-selector groups-selector hidden-sm-down currentcy-selector-dropdown">
  <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="main">
      <span class="expand-more">SDG</span>
  </div>
  <div class="currency-list dropdown-menu">
    <div class="currency-list-content text-left">
                  <div class="currency-item current flex-first">
            <a title="جنيه سوداني" rel="nofollow" href="http://demo.bestprestashoptheme.com/savemart/ar/?home=home_3&amp;SubmitCurrency=1&amp;id_currency=1">SD£ SDG</a>
          </div>
                  <div class="currency-item">
            <a title="دولار أمريكي" rel="nofollow" href="http://demo.bestprestashoptheme.com/savemart/ar/?home=home_3&amp;SubmitCurrency=1&amp;id_currency=2">US$ USD</a>
          </div>
            </div>
  </div>
</div>




<!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_currencyselector/ps_currencyselector.tpl -->
<!-- end module:ps_currencyselector/ps_currencyselector.tpl -->

<!-- begin module:ps_languageselector/ps_languageselector.tpl -->
<!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_languageselector/ps_languageselector.tpl --><div id="_desktop_language_selector" class="language-selector groups-selector hidden-sm-down language-selector-dropdown">

<!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_languageselector/ps_languageselector.tpl -->
<!-- end module:ps_languageselector/ps_languageselector.tpl -->

          </div>
        </div>
      </div>
    </div>
  </div>


