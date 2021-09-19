@extends('layouts.siteuser')

@section('content')


<style>
    @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
    .latief{
   font-size: 18px;
    font-family: 'Lateef', serif;


    }
    </style>

  <div class="no-index">
    <div id="content-wrapper">

        <section id="main" itemscope="" itemtype="https://schema.org/Product">
          <meta itemprop="url" content="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">
          <div class="product-detail-top">
            <div class="container">



              <div class="row main-productdetail" data-product_layout_thumb="list_thumb" style="position: relative;">
                <div class="col-lg-5 col-md-4 col-xs-12 box-image">

                    <section class="page-content" id="content">



    <div class="images-container list_thumb">




        <?php

        $photo=explode(',',$products->photo) ;

        ?>




        <div class="product-cover">
          <img class="js-qv-product-cover img-fluid" src="{{ $photo[0]}}" alt="" title="" style="width:100%;" itemprop="image">
          <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
            <i class="fa fa-expand"></i>
          </div>
        </div>





          <div class="js-qv-mask mask only-product">
            <div class="row">

        <?php

        $photo=explode(',',$products->photo) ;

        ?>
        @foreach ( $photo as $photos )
        <div dir="rtl" class="item thumb-container col-md-6 col-xs-12 pt-30">
            <img class="img-fluid thumb js-thumb  selected "
             src="http://localhost/e-commerce/assets/<?php $photos=str_replace('http://localhost/e-commerce/assets/',"",$photos)?>{{  $photos }}" alt="" title="" itemprop="image">
          </div>
        @endforeach





                        </div>
          </div>

    </div>



                    </section>

                </div>

                <div class="col-lg-7 col-md-8 col-xs-12 mt-sm-20">
                  <div class="product-information">
                    <div class="product-actions">

@include('vendor.includes.alerts.errors')
                        <form action="{{ route('mainpage.Addtocart') }}" method="post" id="add-to-cart-or-refresh" class="row">
                       @csrf
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">

                         <input type="hidden" name="product_id" value="{{ $products->id }}" id="product_page_product_id">

                         @auth
                         <input type="hidden" name="id_customization" value="{{ Auth::user()->id }}" id="product_customization_id">
                         @endauth

                          <div class="productdetail-right col-12 col-lg-6 col-md-6">
                            <div class="product-reviews">
                               <div id="product_comments_block_extra">

      <div class="comments_note">
          <span>Review: </span>
          <div class="star_content clearfix">
                                      <div class="star"></div>
                                                  <div class="star"></div>
                                                  <div class="star"></div>
                                                  <div class="star"></div>
                                                  <div class="star"></div>
                              </div>
      </div>


      <div class="comments_advices">
                          <a class="open-comment-form latief" style="font-size:15px;"data-toggle="modal" data-target="#new_comment_form" href="#"><i class="fa fa-edit"></i> اكتب رأيك من فضلك</a>
              </div>
  </div>


  <!--  /Module NovProductComments -->

                            </div>

                            <h1 class="detail-product-name" itemprop="name">{{ $products->title }}</h1>



                            <div class="group-price d-flex justify-content-start align-items-center">

                                  <div class="product-prices">


        <div class="product-price " itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
          <link itemprop="availability" href="https://schema.org/InStock">
          <meta itemprop="priceCurrency" content="GBP">
          <div class="tax-shipping-delivery-label latief" style="font-size: 25px;">
            السعر:
            <span itemprop="price" class="price latief" content="36">{{ $products->price }}&nbsp;SD£</span>
          </div>



        </div>













      <div class="tax-shipping-delivery-label latief">
                شامل للضريبة


      </div>


      <div class="tax-shipping-delivery-label latief" style="font-size: 25px;">
      المواصفات:
          <span class="latief">{{ $products->description }}</span>



</div>
    </div>

                            </div>





                            <div class="in_border end">


                                <div class="tax-shipping-delivery-label latief" style="font-size: 25px; display: ruby">
                                 الاقسام:
                                  <div>



@foreach ( $maincategories as $maincategory)
<span class="latief"><a href="">{{ $maincategory->name }} </a></span>
@endforeach



                   </div>


                              </div>
                                 <div class="pro-tag">
                                  <label class="control-label">Tags:</label>
                                  <div>




@foreach ( $subcategories as $subcategory)
<span><a href="" class="latief">{{ $subcategory->name }} </a></span>
@endforeach





                                                                    </div>
                              </div>
                                                        </div>


                            <div id="_desktop_productcart_detail">
                                <div class="product-add-to-cart in_border">
      <div class="add">
          <button type="submit" class="btn btn-primary add-to-cart" >
              <div class="icon-cart">
                  <i class="shopping-cart"></i>
              </div>
              <span class="latief">أضف للسلة</span>
          </button>
      </div>

















  <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;" style="color: #f20e0e;">
      <i class="fa fa-heart"></i>
      <span class="latief">Add to Wishlist</span>
  </a>

      <div class="clearfix"></div>

      <div id="product-availability" class="info-stock mt-20 latief">
                      <label class="control-label latief">متوفر:</label>
              في المتجر
                              <i class="fa fa-check-square-o" aria-hidden="true"></i>
                          </div>


      <p class="product-minimal-quantity mt-20">
              </p>

  </div>
                            </div>


                              <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="تحديث" style="display: none;">

                          </div>
                          <div class="productdetail-left col-12 col-lg-6 col-md-6">


                                <div class="product-quantity">
                                  <span class="control-label latief">الكميَّة : </span>
                                  <div class="qty">
                                    <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="quantity" id="quantity_wanted" value="1" class="input-group form-control" min="1" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button"><i class="material-icons touchspin-up"></i></button><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button"><i class="material-icons touchspin-down"></i></button></span></div>
                                  </div>
                                </div>




                <div class="product-variants in_border">


                  <div class="product-variants-item">
          <span class="control-label latief">اللون: : </span>
                    <ul id="group_2">
                            <li class="pull-xs-left input-container">
                  <input class="input-color" type="radio" data-product-attribute="2" name="color" value="red">
                  <span class="color" style="background-color: #E84C3D"><span class="sr-only latief">احمر</span></span>
                </li>
                            <li class="pull-xs-left input-container">
                  <input class="input-color" type="radio" data-product-attribute="2" name="color" value="black" checked="checked">
                  <span class="color" style="background-color: #434A54"><span class="sr-only latief">اسود</span></span>
                </li>
                            <li class="pull-xs-left input-container">
                  <input class="input-color" type="radio" data-product-attribute="2" name="color" value="blue">
                  <span class="color" style="background-color: #5D9CEC"><span class="sr-only latief">ازرق</span></span>
                </li>
                            <li class="pull-xs-left input-container">
                  <input class="input-color" type="radio" data-product-attribute="2" name="color" value="brown">
                  <span class="color" style="background-color: #964B00"><span class="sr-only latief">بنّي</span></span>
                </li>
                            <li class="pull-xs-left input-container">
                  <input class="input-color" type="radio" data-product-attribute="2" name="color" value="pink">
                  <span class="color" style="background-color: #FCCACD"><span class="sr-only latief">وردي</span></span>
                </li>
                        </ul>
                </div>

            </div>




                            <div id="_mobile_productcart_detail"></div>

                            <div class="productbuttons">
                                  <div class="tabs">
          <h4 class="buttons_bottom_block latief">
              معلومات عن المتجر
          </h4>
          <div class="seller_info">
              <span class="seller_name latief">
                {{ $products->vendor->name }}
              </span>
                              <div class="average_rating">
                      <a href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/comments" title="View comments about David James">
                                                                                      <div class="star"></div>
                                                                                                                  <div class="star"></div>
                                                                                                                  <div class="star"></div>
                                                                                                                  <div class="star"></div>
                                                                                                                  <div class="star"></div>
                                                      (0)
                      </a>
                  </div>
                      </div>
          <div class="seller_links">
                              <p class="link_seller_profile">
                      <a title="View seller profile" class="latief" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                          <i class="icon-user fa fa-user"></i>
                          عرض بروفايل المتجر
                      </a>
                  </p>
                                          <p class="link_contact_seller">
                      <a title="Contact seller" class="latief" href="http://demo.bestprestashoptheme.com/savemart/ar/module/jmarketplace/contactseller?id_seller=1&amp;id_product=2">
                          <i class="fa fa-comment"></i>
                          اتصال بالمتجر
                      </a>
                  </p>
                                          <p class="link_seller_favorite">
                      <a title="Add to favorite seller" class="latief" href="http://demo.bestprestashoptheme.com/savemart/ar/module/jmarketplace/favoriteseller?id_seller=1&amp;id_product=2">
                          <i class="icon-heart fa fa-heart"></i>
                          اضافة المتجر الى المفضلة
                      </a>
                  </p>
                          <p class="link_seller_products">
                  <a title="View more products of this seller" class="latief" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/products">
                      <i class="icon-list fa fa-list"></i>
                      عرض مزيد من منتجات المتجر
                  </a>
              </p>
          </div>
      </div>
  <script type="text/javascript">
  var PS_REWRITING_SETTINGS = "1";
  </script>


      <div class="dropdown social-sharing">
      <button class="btn btn-link" type="button" id="social-sharingButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share With :</span>
      </button>
      <div class="dropdown-menu" aria-labelledby="social-sharingButton">
                          <a class="dropdown-item" href="http://www.facebook.com/sharer.php?u=http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html" title="مشاركة" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                  <a class="dropdown-item" href="https://twitter.com/intent/tweet?text=Lorem ipsum dolor sit amet ege http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html" title="تغريدة" target="_blank"><i class="fa fa-twitter"></i>تغريدة</a>
                                  <a class="dropdown-item" href="https://plus.google.com/share?url=http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html" title="جوجل +" target="_blank"><i class="fa fa-google-plus"></i>جوجل +</a>
                                  <a class="dropdown-item" href="http://www.pinterest.com/pin/create/button/?media=http://demo.bestprestashoptheme.com/savemart/29/brown-bear-printed-sweater.jpg&amp;url=http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html" title="بنترست" target="_blank"><i class="fa fa-pinterest"></i>بنترست</a>
                    </div>
    </div>


                              <a class="btn btn-link" href="javascript:print();">
                                <span><i class="fa fa-print" aria-hidden="true"></i>Print</span>
                              </a>
                            </div>
                          </div>
                        </form>












































                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-detail-middle">
            <div class="container">
              <div class="row">
                              <div class="tabs col-lg-9 col-md-7 ">
                  <ul class="nav nav-tabs">
                                      <li class="nav-item">
                      <a class="nav-link active latief" data-toggle="tab" href="#description"><span class="latief">الوصف</span></a>
                    </li>
                                      <li class="nav-item">
                      <a class="nav-link latief" data-toggle="tab" href="#product-details"><span class="latief">تفاصيل المنتج</span></a>
                    </li>
                                                        <li class="nav-item">
    <a class="nav-link latief" data-toggle="tab" href="#reviews"><span class="latief">أكتب رأيك</span><span class="count-comment"> (0)</span></a>
  </li>

                  </ul>

                  <div class="tab-content" id="tab-content">
                     <div class="tab-pane fade in active" id="description">

                         <div class="product-description latief"><p>يأتي الهاتف بأبعاد 164×75.8×8.9 ملم مع وزن 205 جرام .
                            الخامات المستخدمة في تصنيع الهاتف تأتي من البلاستيك كما هو معتاد في هذه الفئة مع طبقة طلاء مضادة للتبصيم .
                            يدعم الهاتف شريحتين إتصال من نوع Nano Sim .
                            يدعم شبكات الاتصال الجيل الثاني الـ 2G والجيل الثالث الـ 3G والجيل الرابع الـ 4G .
                            الشاشة تأتي بشكل النوتش وتأتي من نوع PLS IPS بمساحة 6.5 إنش بجودة الـ HD بدقة 720×1600 بكسل بمعدل كثافة بكسلات 264 بكسل وتدعم أبعاد العرض بنسبة 20:9 لعرض محتوى أكبر على شاشة الهاتف سواء أثناء اللعب أو مشاهدة الفيديوهات خلال اليوم عن طريق الهاتف .
                            يتوفر الهاتف بأكثر من إصدار من الذاكرة الصلبة والذاكرة العشوائية على النحو التالي :-
                            – الإصدار الأول يأتي بذاكرة صلبة بسعة 64 جيجا بايت من نوع eMMC 5.1 مع ذاكرة عشوائية بسعة 4 جيجا بايت .
                            – الإصدار الثاني يأتي بذاكرة صلبة بسعة 128 جيجا بايت من نوع eMMC 5.1 مع ذاكرة عشوائية بسعة 4 جيجا بايت ..</p>
  <h3>{{ $products->title }}</h3>
  <div class="image-des"><a href="#"><img class="img-fluid" src="{{ $photo[0] }}" alt="#"></a></div>
  <p>رسومي من نوع PowerVR GE8320 فهو نفس المعالج الموجود في الـ Oppo A54 والـ Huawei Y6s فالهاتف ليس الأقوى من حيث أداء الألعاب إذا كنت تريده لذلك .
    الكاميرا الأمامية تأتي بدقة 8 ميجا بكسل بفتحة عدسة F/2.2 .
    الكاميرا الخلفية تأتي بكاميرا رباعية حيث تأتي الكاميرا الأولى بدقة 48 ميجا بكسل بفتحة عدسة F/2.0 وهي الكاميرا الأساسية أما عن الكاميرا الثانية فتأتي بدقة 5 ميجا بكسل بفتحة عدسة F/2.2
    وهي الكاميرا الخاصة بالتصوير الواسع أما عن الكاميرا الثالثة فتأتي بدقة 2 ميجا بكسل بفتحة عدسة F/2.4 وهي الخاصة بالتصوير الماكرو أما عن الكاميرا الرابعة فتأتي بدقة 2 ميجا بكسل بفتحة عدسة F/2.4 وهي الخاصة بعمل العزل والبورتريه بالإضافة إلى فلاش أحادي .
    يدعم الهاتف الميكروفون الثانوي الخاص بعزل الضوضاء والضجيج أثناء استخدام الهاتف بصفة عامة .
    يدعم الهاتف تصوير الفيديوهات بجودة الـ FHD بدقة 1080 بكسل بمعدل التقاط 30 إطار في الثانية كما يدعم التصوير بجودة الـ HD بدقة 720 بكسل بمعدل التقاط 30 إطار في الثانية .
    البلوتوث يأتي بإصدار 5.0 مع دعمه لخاصيتي الـ A2DP, LE .
    الواي فاي يأتي بترددات الـ b/g/n مع دعمه لخاصيتي الـ Wi-Fi Direct, hotspot .
    يدعم تحديد الموقع الجغرافي الـ GPS مع دعمه لأنظمة الملاحة الأخرى مثل الـ A-GPS, GLONASS, GALILEO, BDS ..</p>
  <div class="image-des"><a href="#"><img class="img-fluid"src="http://localhost/e-commerce/assets/{{ $photo[1] }}"  alt="#"></a></div>
  <p>وسائل الأمان والحماية الموجودة بالهاتف : يدعم الهاتف مستشعر البصمة ويأتي مدمج بزر الباور بالإضافة إلى دعمه لخاصية الـ Face Unlock .
    كما يدعم المستشعرات الأخرى مثل التسارع والقرب .
    يدعم منفذ الـ 3.5 ملم الخاص بسماعات الاذن .
    يدعم الهاتف منفذ الـ USB ويأتي من نوع Type C 2.0 .
    البطارية تأتي بسعة 5000 مللي أمبير مع دعمه للشحن بقوة 15 واط .
    يأتي الهاتف بنظام تشغيل اندرويد 10 مع واجهة سامسونج الـ One UI 2.5 .
    يتوفر الهاتف باللون الأسود وباللون الأبيض وباللون الأزرق ..</p></div>

                     </div>

                       <div class="tab-pane fade" id="product-details" data-product="{&quot;id_shop_default&quot;:&quot;1&quot;,&quot;id_manufacturer&quot;:&quot;1&quot;,&quot;id_supplier&quot;:&quot;0&quot;,&quot;reference&quot;:&quot;demo_3&quot;,&quot;is_virtual&quot;:&quot;0&quot;,&quot;delivery_in_stock&quot;:&quot;&quot;,&quot;delivery_out_stock&quot;:&quot;&quot;,&quot;id_category_default&quot;:&quot;9&quot;,&quot;on_sale&quot;:&quot;0&quot;,&quot;online_only&quot;:&quot;0&quot;,&quot;ecotax&quot;:&quot;0.000000&quot;,&quot;minimal_quantity&quot;:&quot;1&quot;,&quot;low_stock_threshold&quot;:null,&quot;low_stock_alert&quot;:&quot;0&quot;,&quot;price&quot;:&quot;36.00\u00a0UK\u00a3&quot;,&quot;unity&quot;:&quot;&quot;,&quot;unit_price_ratio&quot;:&quot;0.000000&quot;,&quot;additional_shipping_cost&quot;:&quot;0.00&quot;,&quot;customizable&quot;:&quot;0&quot;,&quot;text_fields&quot;:&quot;0&quot;,&quot;uploadable_files&quot;:&quot;0&quot;,&quot;redirect_type&quot;:&quot;404&quot;,&quot;id_type_redirected&quot;:&quot;0&quot;,&quot;available_for_order&quot;:&quot;1&quot;,&quot;available_date&quot;:null,&quot;show_condition&quot;:&quot;0&quot;,&quot;condition&quot;:&quot;new&quot;,&quot;show_price&quot;:&quot;1&quot;,&quot;indexed&quot;:&quot;1&quot;,&quot;visibility&quot;:&quot;both&quot;,&quot;cache_default_attribute&quot;:&quot;60&quot;,&quot;advanced_stock_management&quot;:&quot;0&quot;,&quot;date_add&quot;:&quot;2018-07-13 03:39:59&quot;,&quot;date_upd&quot;:&quot;2018-08-29 04:12:04&quot;,&quot;pack_stock_type&quot;:&quot;3&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;meta_keywords&quot;:&quot;&quot;,&quot;meta_title&quot;:&quot;&quot;,&quot;link_rewrite&quot;:&quot;brown-bear-printed-sweater&quot;,&quot;name&quot;:&quot;Lorem ipsum dolor sit amet ege&quot;,&quot;description&quot;
                        :&quot;<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                             nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. N
                             ulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                             arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                             Aenean massa.<\/p>\r\n<h3>Lorem ipsum dolor sit amet<\/h3>\r\n<div class=\&quot;image-des\&quot;>
                                 <a href=\&quot;#\&quot;><img class=\&quot;img-fluid\&quot; src=\&quot;
                                    http:\/\/images.vinovathemes.com\/prestashop_savemart\/image-product-1.jpg\&quot;
                                     alt=\&quot;#\&quot; \/><\/a><\/div>\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                         Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. <br \/> Donec quam felis, ultricies
                                         nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                         Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem
                                         ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                         eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing
                                         elit.<\/p>\r\n<div class=\&quot;image-des\&quot;><a href=\&quot;#\&quot;>
                                             <img class=\&quot;img-fluid\&quot; src=\&quot;http:\/\/images.vinovathemes.
                                             om\/prestashop_savemart\/image-product-2.jpg\&quot; alt=\&quot;#\&quot; \/>
                                             <\/a><\/div>\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                                 ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br \/> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br \/> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<\/p>&quot;,&quot;description_short&quot;:&quot;<p>Vestibulum varius, massa sed luctus ornare, enim arcu sollicitudin velit, in ornare ex mauris eleifend nibh. Quisque id rhoncus diam, eget elementum nisl. Nam lectus neque, dignissim sit amet efficitur ut, porta quis turpis. Pellentesque eget rutrum lacus, ut mollis nulla. Donec egestas metus tellus, et scelerisque arcu eleifend non. Nunc sit amet lorem placerat, scelerisque elit sit amet, rhoncus ex. Nulla congue libero sit amet laoreet bibendum. Nunc in magna lectus.<\/p>&quot;,&quot;available_now&quot;:&quot;in stock&quot;,&quot;available_later&quot;:&quot;out stock&quot;,&quot;id&quot;:2,&quot;id_product&quot;:&quot;2&quot;,&quot;out_of_stock&quot;:&quot;2&quot;,&quot;new&quot;:&quot;1&quot;,&quot;id_product_attribute&quot;:60,&quot;quantity_wanted&quot;:1,&quot;extraContent&quot;:[],&quot;allow_oosp&quot;:0,&quot;quantity&quot;:92,&quot;id_image&quot;:&quot;2-29&quot;,&quot;category&quot;:&quot;smartphone-tablet&quot;,&quot;category_name&quot;:&quot;Smartphone &amp; Tablet&quot;,&quot;link&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/smartphone-tablet\/2-brown-bear-printed-sweater.html&quot;,&quot;attribute_price&quot;:0,&quot;price_tax_exc&quot;:30,&quot;price_without_reduction&quot;:36,&quot;reduction&quot;:0,&quot;specific_prices&quot;:[],&quot;quantity_all_versions&quot;:1890,&quot;features&quot;:[],&quot;attachments&quot;:[],&quot;virtual&quot;:0,&quot;pack&quot;:0,&quot;packItems&quot;:[],&quot;nopackprice&quot;:0,&quot;customization_required&quot;:false,&quot;attributes&quot;:{&quot;1&quot;:{&quot;id_attribute&quot;:&quot;1&quot;,&quot;id_attribute_group&quot;:&quot;1&quot;,&quot;name&quot;:&quot;\u0635&quot;,&quot;group&quot;:&quot;\u0627\u0644\u062d\u062c\u0645&quot;,&quot;reference&quot;:&quot;&quot;,&quot;ean13&quot;:&quot;&quot;,&quot;isbn&quot;:&quot;&quot;,&quot;upc&quot;:&quot;&quot;},&quot;2&quot;:{&quot;id_attribute&quot;:&quot;11&quot;,&quot;id_attribute_group&quot;:&quot;2&quot;,&quot;name&quot;:&quot;\u0627\u0633\u0648\u062f&quot;,&quot;group&quot;:&quot;\u0627\u0644\u0644\u0648\u0646:&quot;,&quot;reference&quot;:&quot;&quot;,&quot;ean13&quot;:&quot;&quot;,&quot;isbn&quot;:&quot;&quot;,&quot;upc&quot;:&quot;&quot;}},&quot;rate&quot;:20,&quot;tax_name&quot;:&quot;VAT UK 20%&quot;,&quot;ecotax_rate&quot;:0,&quot;unit_price&quot;:&quot;&quot;,&quot;customizations&quot;:{&quot;fields&quot;:[]},&quot;id_customization&quot;:0,&quot;is_customizable&quot;:false,&quot;show_quantities&quot;:true,&quot;quantity_label&quot;:&quot;\u0639\u0646\u0627\u0635\u0631&quot;,&quot;quantity_discounts&quot;:[],&quot;customer_group_discount&quot;:0,&quot;images&quot;:[{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:&quot;1&quot;,&quot;id_image&quot;:&quot;29&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;30&quot;,&quot;position&quot;:&quot;2&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;31&quot;,&quot;position&quot;:&quot;3&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},
                                                    &quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;
                                                http:\/\/demo.bestprestashoptheme.com\/savemart\/32-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;32&quot;,&quot;position&quot;:&quot;4&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;33&quot;,&quot;position&quot;:&quot;5&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]}],&quot;cover&quot;:{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:&quot;1&quot;,&quot;id_image&quot;:&quot;29&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]},&quot;has_discount&quot;:false,&quot;discount_type&quot;:null,&quot;discount_percentage&quot;:null,&quot;discount_percentage_absolute&quot;:null,&quot;discount_amount&quot;:null,&quot;discount_amount_to_display&quot;:null,&quot;price_amount&quot;:36,&quot;unit_price_full&quot;:&quot;&quot;,&quot;show_availability&quot;:true,&quot;availability_date&quot;:null,&quot;availability_message&quot;:&quot;in stock&quot;,&quot;availability&quot;:&quot;available&quot;}">

            <div class="product-manufacturer">
                    <a href="http://demo.bestprestashoptheme.com/savemart/ar/1_lorem-ipsum">
              <img style="height:50px;width:50px" src="{{ $products->vendor->logo }}" class="img img-thumbnail manufacturer-logo">
            </a>
                </div>
                <div class="product-reference">
          <label class="label">المرجع </label>
          <span itemprop="sku">{{ $products->vendor->name }}</span>
        </div>



            <div class="product-quantities">
          <label class="label">المتوفر في المخزن</label>
          <span>{{ $products->stock }} عناصر</span>
        </div>






      <div class="product-out-of-stock">

      </div>






            <section class="product-features">
          <h3>مراجع محددة</h3>
            <dl class="data-sheet">
                        </dl>
        </section>




  </div>





                                       <script type="text/javascript">
  var novproductcomments_controller_url = 'http://demo.bestprestashoptheme.com/savemart/ar/module/novproductcomments/default';
  var confirm_report_message = 'Are you sure that you want to report this comment?';
  var secure_key = 'c0d88cffbca7857951c1805219eba7c2';
  var novproductcomments_url_rewrite = '1';
  var productcomment_added = 'Your comment has been added!';
  var productcomment_added_moderation = 'Your comment has been submitted and will be available once approved by a moderator.';
  var productcomment_title = 'New comment';
  var productcomment_ok = 'OK';
  var moderation_active = 1;
  </script>

  <div class="tab-pane fade in" id="reviews">
                      <p class="text-center mt-10">
              <a id="new_comment_tab_btn" class="open-comment-form" data-toggle="modal" data-target="#new_comment_form" href="#">كن اول من يكتب رأيو !</a>
          </p>

  </div>


  <div class="modal fade in" id="new_comment_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title text-xs-center latief"><i class="fa fa-edit"></i> اكتب رأيك من فضلك</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="material-icons close">close</i>
              </button>
          </div>
          <div class="modal-body">
              <form id="id_new_comment_form" action="{{ route('vendor.notification') }}">
                                  <div class="product row no-gutters">
                      <div class="product-image col-4">
                          <img class="img-fluid" src="{{ $photo[0] }}" alt="Lorem ipsum dolor sit amet ege" width="" height="">
                      </div>
                      <div class="product_desc col-8">
                          <p class="product_name">{{ $products->title}}</p>
                          <p class="latief">    أتي الهاتف بأبعاد 164×75.8×8.9 ملم مع وزن 205 جرام .
                            الخامات المستخدمة في تصنيع الهاتف تأتي من البلاستيك كما هو معتاد في هذه الفئة مع طبقة طلاء مضادة للتبصيم .
                            يدعم الهاتف شريحتين إتصال من نوع Nano Sim .
                            يتوفر الهاتف بأكثر من إصدار من الذاكرة الصلبة والذاكرة العشوائية على النحو التالي :-
                            – الإصدار الأول يأتي بذاكرة صلبة بسعة 64 جيجا بايت من نوع eMMC 5.1 مع ذاكرة عشوائية بسعة 4 جيجا بايت .
                            – الإصدار الثاني يأتي بذاكرة صلبة بسعة 128 جيجا بايت من نوع eMMC 5.1 مع ذاكرة عشوائية بسعة 4 جيجا بايت ..  </p>
                      </div>
                  </div>
                                  <div class="new_comment_form_content">
                      <div id="new_comment_form_error" class="error alert alert-danger">
                          <ul></ul>
                      </div>
                                              <ul id="criterions_list">
                                                      <li>
                                  <label class="latief">الجودة</label>
                                  <div class="star_content">
                                      <input type="hidden" name="criterion[1]" value="5"><div class="cancel"><a title="Cancel Rating"></a></div><div class="star star_on"><a title="1">1</a></div>
                                      <div class="star star_on"><a title="2">2</a></div>
                                      <div class="star star_on"><a title="3">3</a></div>
                                      <div class="star star_on"><a title="4">4</a></div>
                                      <div class="star star_on"><a title="5">5</a></div>
                                  </div>
                                  <div class="clearfix"></div>
                              </li>
                                                  </ul>
                                          <label for="comment_title" class="latief" style="font-size: 20px;">عنوان الرسالة<sup class="required">*</sup></label>
                      <input id="comment_title" name="title" type="text" value="">

                      <label for="content" class="latief" style="font-size: 20px;">رأيك<sup class="required">*</sup></label>
                      <textarea id="content" name="content"></textarea>

                                          <label class="latief" style="font-size: 20px;">اسمك<sup class="required">*</sup></label>
                      <input id="commentCustomerName" name="customer_name" type="text" value="">

                      <div id="new_comment_form_footer">
                          <input id="id_product_comment_send" name="id_product" type="hidden" value="2">
                          <div class="fl"><sup class="required">*</sup> Required fields</div>
                          <div class="fr">
                              <button id="submitNewMessage" data-dismiss="modal" aria-label="Close" class="btn btn-primary " name="submitMessage" type="submit"><span class="latief">ارسل</span></button>
                          </div>
                      </div>
                  </div>
              </form><!-- /end new_comment_form_content -->
          </div>
          </div>
      </div>
  </div>


                                        <div class="tab-pane fade in" id="tab-custom">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies. Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur aliquam magna ac tristique</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies. Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur aliquam magna ac tristique</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies. Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur aliquam magna ac tristique</p>
                      </div>
                                    </div>
                </div>


































                              <div class="col-lg-3 col-md-5">


  <div class="nov-productlist     productlist-liststyle-3  col-xl-12 col-lg-12 col-md-12 col-xs-12 no-padding">
      <div class="block block-product clearfix">
                      <h2 class=" latief" style="color: #222;
                      font-size:25px;
                      font-weight: 700;
                      display: block;
                      padding: 12px 20px 14px 20px;
                      position: relative;
                      margin-bottom: 29px;">
                                  الاكثر مبيعا
              </h2>
                  <div class="block_content">
                              <div id="productlist215605670" class="product_list grid owl-carousel owl-theme multi-row owl-rtl owl-loaded owl-drag" data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="0" data-dots="false" data-nav="true" data-items="1" data-items_large="1" data-items_tablet="1" data-items_mobile="1">


                                  <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 540px;"><div class="owl-item active lastActiveItem" style="width: 270px;"><div class="item  text-center">


                                    @foreach ( $Newproducts as $Newproduct)


                                    <?php

                                    $photo=explode(',',$Newproduct->photo) ;

                                    ?>

                                    <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
                                        <div class="col-12 col-w37 no-padding">
                                            <div class="thumbnail-container">

                                                                    <a href="{{ route('mainpage.product_page',$Newproduct->id) }}" class="thumbnail product-thumbnail two-image">
                                                    <img class="img-fluid image-cover" src="{{ $photo[0] }}" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                                    <img class="img-fluid image-secondary" src="http://localhost/e-commerce/assets/{{ $photo[1] }}" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                                                        </a>

                                                                </div>
                                        </div>
                                        <div class="col-12 col-w63 no-padding">
                                            <div class="product-description">
                                                  <div class="product-groups">
                                                   <div class="product-comments">
                                <div class="star_content">
                                                    <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                            </div>
                                <span>5 review</span>
                            </div>    <p class="seller_name">
                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                        <i class="fa fa-user"></i>
                                       <span class="latief"> {{  $Newproduct->title}}</span>
                                    </a>
                                </p>



                                                   <div class="product-title" itemprop="name"><a href="">{{ $Newproduct->description }}</a></div>

                                                  <div class="product-group-price">

                                                                                  <div class="product-price-and-shipping">



                                                          <span itemprop="price" class="price">{{ $Newproduct->price }}&nbsp;SD£</span>





                                                        </div>

                                                  </div>
                                                  </div>
                                                                  </div>
                                        </div>
                                    </div>

                                    @endforeach




































      </div></div><div class="owl-item" style="width: 270px;"><div class="item  text-center">
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="4" data-id-product-attribute="112" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas vulputate ligula vel</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">18.00&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="5" data-id-product-attribute="134" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/44-home_default/today-is-a-good-day-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/44-large_default/today-is-a-good-day-framed-poster.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/45-home_default/today-is-a-good-day-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/45-large_default/today-is-a-good-day-framed-poster.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Vehicula vel tempus sit amet ulte</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">34.80&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="6" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam tempor orci eu pretium</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">14.28&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
      </div></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
                      </div>
      </div>
  </div>








































  <div class="nov-productlist     productlist-liststyle-3  col-xl-12 col-lg-12 col-md-12 col-xs-12 no-padding">
      <div class="block block-product clearfix">
        <h2 class=" latief" style="color: #222;
        font-size:25px;
        font-weight: 700;
        display: block;
        padding: 12px 20px 14px 20px;
        position: relative;
        margin-bottom: 29px;">
                    حدث الان
</h2>
                  <div class="block_content">
                              <div id="productlist709279232" class="product_list grid owl-carousel owl-theme multi-row owl-rtl owl-loaded owl-drag" data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="0" data-dots="false" data-nav="true" data-items="1" data-items_large="1" data-items_tablet="1" data-items_mobile="1">



                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 540px;"><div class="owl-item active lastActiveItem" style="width: 270px;"><div class="item  text-center">


             @foreach ($Trendproducts as $Trendproduct)


             <?php

             $photo=explode(',',$Trendproduct->photo) ;

             ?>

             <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
                 <div class="col-12 col-w37 no-padding">
                     <div class="thumbnail-container">

                                             <a href="{{ route('mainpage.product_page',$Trendproduct->id) }}" class="thumbnail product-thumbnail two-image">
                             <img class="img-fluid image-cover" src="{{ $photo[0] }}" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                             <img class="img-fluid image-secondary" src="http://localhost/e-commerce/assets/{{ $photo[1] }}" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                                 </a>

                                         </div>
                 </div>
                <div class="col-12 col-w63 no-padding">
                    <div class="product-description">
                          <div class="product-groups">
                           <div class="product-comments">
        <div class="star_content">
                            <div class="star star_on"></div>
                                    <div class="star star_on"></div>
                                    <div class="star star_on"></div>
                                    <div class="star star_on"></div>
                                    <div class="star star_on"></div>
                    </div>
        <span>5 review</span>
    </div>    <p class="seller_name">
            <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                <i class="fa fa-user"></i>
                {{  $Trendproduct->title}}
            </a>
        </p>



                           <div class="product-title" itemprop="name">
                               <a href="">{{  $Trendproduct->description}}</a></div>

                          <div class="product-group-price">

                                                          <div class="product-price-and-shipping">



                                  <span itemprop="price" class="price">{{ $Trendproduct->price }}&nbsp;SD£</span>





                                </div>

                          </div>
                          </div>
                                          </div>
                </div>
            </div>









             @endforeach






      </div></div><div class="owl-item" style="width: 270px;"><div class="item  text-center">
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="4" data-id-product-attribute="112" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas vulputate ligula vel</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">18.00&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="6" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam tempor orci eu pretium</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">14.28&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="7" data-id-product-attribute="155" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/54-home_default/donec-non-lectus-ac-erat-sedei.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/54-large_default/donec-non-lectus-ac-erat-sedei.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/55-home_default/donec-non-lectus-ac-erat-sedei.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/55-large_default/donec-non-lectus-ac-erat-sedei.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر">Donec non lectus ac erat sedei</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">14.28&nbsp;SD£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
      </div></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
                      </div>
      </div>
  </div>
  <div class="nov-html col-xl-12 col-lg-12 col-md-12 policy-product no-padding">
      <div class="block">
                  <div class="block_content">
              <div class="policy-row d-flex">
  <div class="icon-policy"><i class="noviconpolicy noviconpolicy-1">1</i></div>
  <div class="policy-content">
  <div class=" latief">التوصيل مجانا</div>
  <div class=" latief">بدلا من SD£ 2000</div>
  </div>
  </div>
  <div class="policy-row d-flex">
  <div class="icon-policy"><i class="noviconpolicy noviconpolicy-2">2</i></div>
  <div class="policy-content">
  <div class=" latief">ارجاع النقود</div>
  <div class=" latief">ضمان</div>
  </div>
  </div>
  <div class="policy-row d-flex">
  <div class="icon-policy"><i class="noviconpolicy noviconpolicy-3">3</i></div>
  <div class="policy-content">
  <div class=" latief">الموثوقية</div>
  <div class=" latief">100% ضمان</div>
  </div>
  </div>
          </div>
      </div>
  </div>

                </div>
                            </div>
            </div>
          </div>

          <div class="product-detail-bottom">
            <div class="container">

                                <section class="relate-product product-accessories clearfix">
                    <h3 class=" latief" style="color:#000; font-weight:60px;font-size:30px">منتجات ذات صلة</h3>
                    <div class="products product_list grid owl-carousel owl-theme owl-rtl owl-loaded owl-drag" data-autoplay="true" data-autoplaytimeout="6000" data-loop="true" data-items="5" data-margin="0" data-nav="true" data-dots="false" data-items_mobile="2">





                    <div class="owl-stage-outer">

                        <div class="owl-stage" style="transform: translate3d(1638px, 0px, 0px); transition: all 0.25s ease 0s; width: 3510px;">


     <div class="owl-item cloned" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="17" data-id-product-attribute="328" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/5-camera-photo">Camera &amp; Photo</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر">Nam feugiat tellus nec ultrices</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/104-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/104-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/105-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/105-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="17">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_17" href="#" data-rel="17" onclick="WishlistCart('wishlist_block_list', 'add', '17', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div>










      <div class="owl-item cloned" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="19" data-id-product-attribute="383" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/4-home-appliance">Home Appliance</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر">Vivamus non ante quis est rhont</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/115-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/115-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/116-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/116-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="19">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_19" href="#" data-rel="19" onclick="WishlistCart('wishlist_block_list', 'add', '19', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/9-smartphone-tablet">Smartphone &amp; Tablet</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Nullam sed sollicitudin mauris</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/24-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/25-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">24.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                  </div>
      <span>5 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="1">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="2" data-id-product-attribute="60" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/9-smartphone-tablet">Smartphone &amp; Tablet</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem ipsum dolor sit amet ege</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">36.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="2">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item active lastActiveItem" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="13" data-id-product-attribute="254" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/32-audio">Audio</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر">Proin placerat lacus eget auctor</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/84-home_default/proin-placerat-lacus-eget-auctor.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/84-large_default/proin-placerat-lacus-eget-auctor.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/85-home_default/proin-placerat-lacus-eget-auctor.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/85-large_default/proin-placerat-lacus-eget-auctor.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="13">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_13" href="#" data-rel="13" onclick="WishlistCart('wishlist_block_list', 'add', '13', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item active" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="17" data-id-product-attribute="328" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/5-camera-photo">Camera &amp; Photo</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر">Nam feugiat tellus nec ultrices</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/104-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/104-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/105-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/105-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="17">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_17" href="#" data-rel="17" onclick="WishlistCart('wishlist_block_list', 'add', '17', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item active" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="19" data-id-product-attribute="383" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/4-home-appliance">Home Appliance</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر">Vivamus non ante quis est rhont</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/115-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/115-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/116-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/116-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="19">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_19" href="#" data-rel="19" onclick="WishlistCart('wishlist_block_list', 'add', '19', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div>













@foreach ($relateproducts as $relateproduct)




<div class="owl-item cloned active" style="width: 234px;"><div class="item  text-center">
    <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
    <div class="product-cat-content">

            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/9-smartphone-tablet">{{ $relateproduct->subcategory->name }}</a></div>


            <div class="product-title" itemprop="name">
                <a href="{{ route('mainpage.product_page',$relateproduct->id) }}">{{$relateproduct->title  }}</a></div>

    </div>
    <div class="thumbnail-container">


                            <?php

                            $photo=explode(',',$relateproduct->photo) ;

                            ?>

                                                            <a href="{{ route('mainpage.product_page',$relateproduct->id) }}" class="thumbnail product-thumbnail two-image">
                                            <img class="img-fluid image-cover" src="{{ $photo[0] }}" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                            <img class="img-fluid image-secondary" src="http://localhost/e-commerce/assets/{{ $photo[1] }}" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                                                </a>





                    </div>
    <div class="product-description">
        <div class="product-groups">
            <div class="product-group-price">

                                        <div class="product-price-and-shipping">



                    <span itemprop="price" class="price">{{ $relateproduct->price }}&nbsp;SD£</span>





                </div>

            </div>
             <div class="product-comments">
<div class="star_content">
                <div class="star star_on"></div>
                        <div class="star star_on"></div>
                        <div class="star star_on"></div>
                        <div class="star star_on"></div>
                        <div class="star star_on"></div>
        </div>
<span>5 review</span>
</div>    <p class="seller_name">
<a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
    <i class="fa fa-user"></i>
    {{ $relateproduct->vendor->name }}
</a>
</p>

        </div>
        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                        <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                <input type="hidden" name="id_product" value="1">
                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
            </form>

<a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
<i class="fa fa-heart"></i>
<span>Add to Wishlist</span>
</a>
                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                <i class="fa fa-search"></i><span> نظرة سريعة</span>
            </a>
        </div>
    </div>
</div>
</div></div>






@endforeach




















     <div class="owl-item cloned" style="width: 234px;"><div class="item  text-center">


              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="13" data-id-product-attribute="254" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/32-audio">Audio</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر">Proin placerat lacus eget auctor</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/84-home_default/proin-placerat-lacus-eget-auctor.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/84-large_default/proin-placerat-lacus-eget-auctor.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/85-home_default/proin-placerat-lacus-eget-auctor.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/85-large_default/proin-placerat-lacus-eget-auctor.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="13">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_13" href="#" data-rel="13" onclick="WishlistCart('wishlist_block_list', 'add', '13', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item cloned" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="17" data-id-product-attribute="328" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/5-camera-photo">Camera &amp; Photo</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر">Nam feugiat tellus nec ultrices</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/104-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/104-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/105-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/105-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="17">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_17" href="#" data-rel="17" onclick="WishlistCart('wishlist_block_list', 'add', '17', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item cloned" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="19" data-id-product-attribute="383" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/4-home-appliance">Home Appliance</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر">Vivamus non ante quis est rhont</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/115-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/115-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/116-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/116-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="19">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>




































































  <a class="addToWishlist wishlistProd_19" href="#" data-rel="19" onclick="WishlistCart('wishlist_block_list', 'add', '19', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div></div>















    </div>



      <div class="owl-nav disabled"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
                  </section>





            </div>
          </div>


            <div class="modal fade js-product-images-modal" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
                  <figure>
            <img class="js-modal-product-cover product-cover-modal" src="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="600">
          </figure>
          <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">

              <div class="js-modal-mask mask  nomargin ">
                <ul class="product-images js-modal-product-images">
                                    <li class="thumb-container">
                      <img data-image-large-src="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" class="thumb js-modal-thumb" src="http://demo.bestprestashoptheme.com/savemart/29-cart_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="125">
                    </li>
                                    <li class="thumb-container">
                      <img data-image-large-src="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg" class="thumb js-modal-thumb" src="http://demo.bestprestashoptheme.com/savemart/30-cart_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="125">
                    </li>
                                    <li class="thumb-container">
                      <img data-image-large-src="http://demo.bestprestashoptheme.com/savemart/31-large_default/brown-bear-printed-sweater.jpg" class="thumb js-modal-thumb" src="http://demo.bestprestashoptheme.com/savemart/31-cart_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="125">
                    </li>
                                    <li class="thumb-container">
                      <img data-image-large-src="http://demo.bestprestashoptheme.com/savemart/32-large_default/brown-bear-printed-sweater.jpg" class="thumb js-modal-thumb" src="http://demo.bestprestashoptheme.com/savemart/32-cart_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="125">
                    </li>
                                    <li class="thumb-container">
                      <img data-image-large-src="http://demo.bestprestashoptheme.com/savemart/33-large_default/brown-bear-printed-sweater.jpg" class="thumb js-modal-thumb" src="http://demo.bestprestashoptheme.com/savemart/33-cart_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="125">
                    </li>
                                </ul>
              </div>

                    </aside>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



            <footer class="page-footer">

                <!-- Footer content -->

            </footer>


        </section>


    </div>
  </div>




@endsection




