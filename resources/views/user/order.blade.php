
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
<h1 class="page-title latief">الطلبات السابقة</h1>
<div class="cart-grid row">

<!-- Left Block: cart product informations & shpping -->
<div class="cart-grid-body col-xs-12 col-lg-12">

<!-- cart products detailed -->
<div class="cart-container">



<div class="cart-overview js-cart" data-refresh-url="//demo.bestprestashoptheme.com/savemart/ar/عربة التسوق?ajax=1&amp;action=refresh">




<!--  product left content: image-->

<!--  product left body: description -->


<div class="table-responsive">

<table class="table table-striped table-bordered text-center latief"dir="rtl">
    <thead>
      <tr  class="table-primary">

        <th scope="col">المنتجات</th>
        <th scope="col">السعر الاجمالي</th>
        <th scope="col">الكمية</th>
        <th scope="col">مكان الاستلام</th>
        <th scope="col">رقم الطلب</th>
        <th scope="col">التاريخ</th>
        <th scope="col"> الحذف</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($order as $orders)
      <tr>









        <td>{{ $orders->details}}</td>
        <td>{{ $orders->total_price}}&nbsp;SD£</td>
        <td>{{ $orders->quantity}}</td>
        <td>{{ $orders->city}}</td>
        <td>{{ $orders->number_order}}</td>
        <td>{{ $orders->created_at}}</td>
        <td><a class="remove-from-cart" rel="nofollow" href="{{ route('mainpage.orderDelete',$orders->id )}}" >
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </a></td>
      </tr>



@endforeach

    </tbody>
  </table>

</div>


</div>


</div>





<!-- shipping informations -->



</div>

<!-- Right Block: cart subtotal & cart total -->

</div>
</section>

      </div>
  </div>
</div>



</div>
@endsection
