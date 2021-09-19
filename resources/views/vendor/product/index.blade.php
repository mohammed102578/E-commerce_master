@extends('vendor.layouts.vendor')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> المنتجات </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">

                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع منتجات  المتجر </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('vendor.includes.alerts.success')
                                @include('vendor.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <tr>
                                                <th> الاسم</th>
                                                <th> الصورة</th>
                                                <th>القسم</th>
                                                <th>السعر</th>
                                                <th>المخزون</th>
                                                <th>الخصم</th>
                                                <th>الحالة</th>


                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($products)
                                                @foreach($products  as $product)
                                                    <tr>
<?php

   $photo=explode(',',$product->photo) ;

?>



                                                        <td>{{$product -> title}}</td>
                                                        <td><img style="width: 180px; height: 100px;"
                                                            src="{{$photo[0]}}"></td>



                                                        <td>{{$product->subcategory->name}}</td>

                                                        <td>${{$product-> price}}</td>
                                                        <td>{{$product-> stock}}</td>
                                                        <td>%{{$product-> discount}}</td>
                                                        <td>{{$product -> getActive()}}</td>

                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{ route('vendor.Product.edit',$product-> id) }}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                                <a href="{{ route('vendor.Product.delete',$product-> id) }}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>




                                                                <a href="{{ route("vendor.Product.changestatus",$product-> id) }}"
                                                                    class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                                    @if ($product->active==1)
                                                                     الغاء تفعيل

                                                                    @else
                                                                    تفعيل

                                                                    @endif




                                                                 </a>


                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
