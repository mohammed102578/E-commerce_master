@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection









<div class="owl-item cloned active firstActiveItem" style="width: 234px;"><div class="item  text-center">
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
</div></div>
