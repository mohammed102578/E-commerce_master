
@extends('layouts.siteuser')

@section('content')

<div id="wrapper-site">

    <nav data-depth="1" class="breadcrumb-bg">
<div class="container no-index">
<div class="breadcrumb">

<ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
  <a itemprop="item" href="http://demo.bestprestashoptheme.com/savemart/ar/">
    <span itemprop="name">الصفحة الرئيسية</span>
  </a>
  <meta itemprop="position" content="1">
</li>
  </ol>

</div>
</div>
</nav>



<div class="container no-index">
<div class="row">
      <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<section id="main">
<h1 class="page-title">سلة الشراء</h1>
<div class="cart-grid row">

<!-- Left Block: cart product informations & shpping -->
<div class="cart-grid-body col-xs-12 col-lg-9">

<!-- cart products detailed -->
<div class="cart-container">



<div class="cart-overview js-cart" data-refresh-url="//demo.bestprestashoptheme.com/savemart/ar/عربة التسوق?ajax=1&amp;action=refresh">




<!--  product left content: image-->

<!--  product left body: description -->


<div class="table-responsive">

<table class="table table-striped table-bordered text-center latief"dir="rtl">
    <thead>
      <tr  class="table-primary">
        <th scope="col">الصورة</th>
        <th scope="col">الاسم</th>
        <th scope="col"> سعر المنتج</th>
        <th scope="col">الخصم</th>
        <th scope="col">الكمية</th>
        <th scope="col">اجمالي السعر</th>
        <th scope="col"> السعر بعد الخصم</th>
        <th scope="col"> الحذف</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $total_price=array();
        $total_quantity=array();
        $detail=array();
        ?>
        @foreach ($cart as $carts)
      <tr>
        <?php
        $totlprice = $carts->quantity*$carts->product->price ;
         $totalpricediscount=$totlprice-($totlprice*$carts->product->discount/100);

          $photo=explode(',',$carts->product->photo) ;

          ?>







        <td><img class="img-fluid" src="{{ $photo[0] }}" alt="no picture" style="width: 100px; height:100px;"></td>
        <td>{{ $carts->product->title}}</td>
        <td>{{ $carts->product->price }}&nbsp;SD£</td>
        <td>{{ $carts->product->discount }}&nbsp;%</td>
        <td>{{ $carts->quantity}}</td>
        <td>{{ $totlprice}}&nbsp;SD£</td>
        <td>{{$totalpricediscount}}&nbsp;SD£</td>
        <td><a class="remove-from-cart" rel="nofollow" href="{{ route('mainpage.delete',$carts->id )}}" >
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </a></td>
      </tr>


      <?php
      $total_price[]=$totalpricediscount;
      $total_quantity[]=$carts->quantity;
      $detail[]=$carts->product->title;
    ?>
@endforeach
<?php
$sum=array_sum($total_price);
$sum_quantity=array_sum($total_quantity);
$details=implode(' , ',$detail);
$taotal=round($sum);
?>
    </tbody>
  </table>

</div>


</div>


</div>


  <a class="label btn btn-primary" href="{{ route('user.mainpage') }}">
    الاستمرار في التسوق
  </a>




<!-- shipping informations -->



</div>

<!-- Right Block: cart subtotal & cart total -->
<div class="cart-grid-right col-xs-12 col-lg-3">


  <div class="cart-summary">







<div class="cart-detailed-totals">
<div class="cart-summary-products">
<div class="summary-label latief"></div>
</div>

<div class="">
          <div class="cart-summary-line" id="cart-subtotal-products">
  <span class="label js-subtotal latief">
              إجمالي المنتجات:   {{ $sum_quantity }}&nbsp;&nbsp;منتج&nbsp;
              </span>

          </div>
                          <div class="cart-summary-line" id="cart-subtotal-shipping">
  <span class="label latief">
    إجمالي الشحن:
              </span>
  <span class="value latief">مجاناً</span>
                <div><small class="value"></small></div>
          </div>
              </div>




<div class="">
<div class="cart-summary-line cart-total">
<span class="label latief">سعر البيع:</span>
<span class="value latief " style="font-size: 20px;
font-color:red"><?php echo $taotal?>&nbsp;SD£ </span>
<span class="value latief ">(شامل للضريبة)<?php echo $details?></span>
</div>

</div>

</div>





<div class="checkout cart-detailed-actions">
  <div class="text-xs-center">

<a href="{{ route('check_out_cart',['amount'=>$taotal,'details'=>$details,'sum_quantity'=>$sum_quantity]) }}" class="btn btn-primary">اتمام الطلب</a>

</div>
</div>



  </div>



  <div class="blockreassurance_product">
    <div>
    <span class="item-product">
                                                <img class="svg" src="/savemart/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png">
                            &nbsp;
    </span>
                  <p class="block-title" style="color:#000000;">Security policy (edit with Customer reassurance module)</p>
            </div>
    <div>
    <span class="item-product">
                                                <img class="svg" src="/savemart/modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png">
                            &nbsp;
    </span>
                  <p class="block-title" style="color:#000000;">Delivery policy (edit with Customer reassurance module)</p>
            </div>
    <div>
    <span class="item-product">
                                                <img class="svg" src="/savemart/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png">
                            &nbsp;
    </span>
                  <p class="block-title" style="color:#000000;">Return policy (edit with Customer reassurance module)</p>
            </div>
<div class="clearfix"></div>
</div>



</div>

</div>
</section>

      </div>
  </div>
</div>



</div>
@endsection
