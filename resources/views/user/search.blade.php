@extends('layouts.sitewithoutcenter')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@section('content')
<div class="container">


    <div class="row">
        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    <section id="main">



    <section id="products">

    <div id="nav-top">

      <div id="js-product-list-top" class="row products-selection">
    <div class="col-md-6 col-xs-6">
    <div class="change-type">
    <span class="grid-type active" data-view-type="grid"><i class="fa fa-th-large"></i></span>
    <span class="list-type" data-view-type="list"><i class="fa fa-bars"></i></span>
    </div>
    <div class="hidden-sm-down total-products">
        <p class="latief">يوجد {{  $productCount}} منتجات.</p>
    </div>
    </div>
    <div class="col-md-6 col-xs-6">
    <div class="d-flex sort-by-row justify-content-end">

    <span class="hidden-sm-down sort-by">Sort by:</span>
    <div class="products-sort-order dropdown">
    <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="latief">أفضل تطابق</span>
    <i class="material-icons pull-xs-right"></i>
    </a>
    <div class="dropdown-menu text-right">

    <a rel="nofollow"    href="{{ route('mainpage.product_discount') }}" class="latief " style="display: inline-block;">
    المنتجات المخفضة
    </a>
    <a rel="nofollow"  href="{{ route('mainpage.product_new') }}" class="latief " style="display: inline-block;">
   المنتجات الجديدة
    </a>
    <a rel="nofollow"  href="{{ route('mainpage.product_low') }}" class="latief " style="display: inline-block;">
    السعر: منخفض إلى مرتفع
    </a>
    <a rel="nofollow"  href="{{ route('mainpage.product_high') }}" class="latief " style="display: inline-block;">
    السعر: عالي إلى منخفض
    </a>
    </div>
    </div>

    </div>
    </div>
    </div>

    </div>


    <div id="categories-product">

      <div id="js-product-list">
    <div class="products product_list grid row" data-default-view="grid">



































@foreach ($products as $product )

<div class="item  col-lg-4 col-md-6 col-xs-12 text-center no-padding">
    <div class="product-miniature js-product-miniature item-one" data-id-product="2" data-id-product-attribute="60" itemscope="" itemtype="http://schema.org/Product">
    <div class="thumbnail-container">


<?php

$photo=explode(',',$product->photo) ;

?>


    <a href="{{ route('mainpage.product_page',$product->id) }}" class="thumbnail product-thumbnail two-image">

    <img class="img-fluid image-cover" src="{{ $photo[0] }}" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">

    <img class="img-fluid image-secondary" src="http://localhost/E-commerce/assets/{{ $photo[1] }}" width="600" height="600">













        </a>




















              <div class="product-flags new">New</div>


    </div>
    <div class="product-description">
    <div class="product-groups">

    <div class="category-title">
        <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html">
            </a></div>

    <div class="group-reviews">
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
      <span class="latief">
      {{ $product->title }}
      </span>
    </a>
    </p>

    <div class="info-stock ml-auto">
                  <label class="control-label latief">
                     متوفر

                  </label>
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>
                  in stock
                </div>
    </div>

    <div class="product-title" itemprop="name">
        <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">
            {{ $product->description }}</a></div>

    <div class="product-group-price">

              <div class="product-price-and-shipping">



      <span itemprop="price" class="price">{{ $product->price }}&nbsp;SD£</span>






    </div>

    </div>
    <div class="product-desc" itemprop="desciption"></div>
    </div>
    <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                          <form action="" method="post" class="formAddToCart">
    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
    <input type="hidden" name="id_product" value="2">
    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span class="latief">أضف للسلة</span></a>
    </form>

    <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;">
    <i class="fa fa-heart"></i>
    <span>أضف الى قائمة الامنيات</span>
    </a>
          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
    <i class="fa fa-search"></i><span class="latief"> نظرة سريعة</span>
    </a>
    </div>
    </div>
    </div>
    </div>

@endforeach




















    </div>


    <div id="js-product-list-bottom">

    <nav class="pagination row justify-content-around">
    <div class="col col-xs-12 col-lg-6 col-md-12">

    <span class="showing">
    Showing 1-12 of 23 item(s)
    </span>

    </div>
    <div class="col col-xs-12 col-lg-6 col-md-12">

    <ul class="page-list">
        <li class="current">
                <a rel="nofollow" href="http://demo.bestprestashoptheme.com/savemart/ar/2-%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9" class="disabled js-search-link">
                        1
                    </a>
            </li>
        <li>
                <a rel="nofollow" href="http://demo.bestprestashoptheme.com/savemart/ar/2-%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9?page=2" class="js-search-link">
                        2
                    </a>
            </li>
        <li>
                <a rel="next" href="http://demo.bestprestashoptheme.com/savemart/ar/2-%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9?page=2" class="next js-search-link">
                        التالي
                    </a>
            </li>
    </ul>

    </div>
    </nav>

    </div>


    </section>

    </section>

        </div>
    </div>



</div>
@endsection
