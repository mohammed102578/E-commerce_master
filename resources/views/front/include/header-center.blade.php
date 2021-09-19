<div class="header-center hidden-sm-down">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div id="_desktop_logo" class="contentsticky_logo d-flex align-items-center justify-content-start col-lg-3 col-md-3">
<b><a href="
    @auth
    {{ route('user.mainpage') }}
    @endauth

    @guest
    {{ route('user.home') }}
    @endguest


    ">Makarim ALakhlag</a></b>
                  </div>
        <div class="col-lg-9 col-md-9 header-menu d-flex align-items-center justify-content-end">
          <div class="data-contact d-flex align-items-center">
            <div class="title-icon">support<i class="icon-support icon-address"></i></div>
            <div class="content-data-contact">
              <div class="support">Call customer services :</div>
              <div class="phone-support">
                                  0919977513
                              </div>
            </div>
          </div>
          <div class="contentsticky_group d-flex justify-content-end">
            <div class="header_link_myaccount">
                              <a class="login" href="http://demo.bestprestashoptheme.com/savemart/ar/الحساب الشخصي" rel="nofollow" title="تسجيل الدخول إلى حسابك"><i class="header-icon-account"></i></a>
                          </div>
            <div class="header_link_wishlist">
              <a href="http://demo.bestprestashoptheme.com/savemart/ar/module/novblockwishlist/mywishlist" title="My Wishlists">
                <i class="header-icon-wishlist"></i>
              </a>
            </div>

<!-- begin module:ps_shoppingcart/ps_shoppingcart.tpl -->
<!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_shoppingcart/ps_shoppingcart.tpl --><div id="_desktop_cart">
    <div class="blockcart cart-preview active" data-refresh-url="http://demo.bestprestashoptheme.com/savemart/ar/module/ps_shoppingcart/ajax">
        <div class="header-cart">
                  <div class="cart-left">
                      <a href="
                      @auth
                      {{ route('mainpage.viewAddtocart') }}
                      @endauth

                      @guest
                      {{ route('mainpagenotlogin.viewAddtocart') }}
                      @endguest



                      ">
              <div class="shopping-cart"><i class="zmdi zmdi-shopping-cart"></i></div>
              <div class="cart-products-count">{{ $productcountaddcart }}</div>
            </div>
        </a>
            <div class="cart-right d-flex flex-column align-self-end ml-13">
              <span class="title-cart">سلة الشراء</span>
              <span class="cart-item"> items</span>
            </div>
              </div>
        <div class="cart_block ">
          <div class="cart-block-content">
                      <div class="no-items">
                  No products in the cart
              </div>
                  </div>
        </div>
      </div>
</div><!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_shoppingcart/ps_shoppingcart.tpl -->
<!-- end module:ps_shoppingcart/ps_shoppingcart.tpl -->

          </div>
        </div>
      </div>
    </div>
  </div>
