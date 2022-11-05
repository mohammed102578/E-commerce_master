@extends('layouts.vendor')



<style>
    @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
    body {
        font-family: 'Lateef', serif;
    }
    .table-responsive {
    display: table;
}

</style>
@section('content')
<div class="app-content content">
    <div class="content-wrapper">

            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" style="font-family:'Lateef', serif;font-size:25px;float: right;">جميع المنتجات </h4>
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



                                    <div class="card-body">
                                    <div class="table-responsive">

                                        <table
                                        class="table table-bordered  table-light ">

                                            <thead class="thead-dark">
                                            <tr>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الاسم</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px"> الصورة</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">القسم</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">السعر</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">المخزون</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الخصم</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px"> ألحالة </th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الإجراءات</th>
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
                                                            <td><img style="width: 75px; height: 80px;"
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
                                                                       class="btn btn-outline-primary  box-shadow-1 mr-1 mb-1">تعديل</a>


                                                                    <a href="{{ route('vendor.Product.delete',$product-> id) }}"
                                                                       class="btn btn-outline-danger  box-shadow-1 mr-1 mb-1">حذف</a>




                                                                    <a href="{{ route("vendor.Product.changestatus",$product-> id) }}"
                                                                        class="btn btn-outline-warning  box-shadow-1 mr-1 mb-1">
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












