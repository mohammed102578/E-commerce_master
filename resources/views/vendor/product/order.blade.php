
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
                                    <h4 class="card-title" style="font-family:'Lateef', serif;font-size:25px;float: right;">جميع الطلبات </h4>
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




                                                <th style="font-family:'Lateef', serif;font-size:18px"> التفاصيل</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px"> السعر</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الكمية</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">تاريخ الطلب</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">رقم الطلب</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">مكان الاستلام</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الحالة </th>

                                                <th style="font-family:'Lateef', serif;font-size:18px">الإجراءات</th>



                                            </tr>
                                            </thead>
                                            <tbody>

                                                @isset($order)
                                                    @foreach($order  as $orders)
                                                        <tr>




                                                            <td>{{$orders ->details}}</td>



                                                            <td>${{$orders->total_price}}</td>

                                                            <td>{{$orders->quantity}}</td>
                                                            <td>{{$orders->created_at}}</td>
                                                            <td>{{$orders->number_order}}</td>
                                                            <td>{{$orders->city}}</td>
                                                            <td> @if ($orders->recieve==1)
                                                              تم الاستلام

                                                                @else
                                                                لم يتم الاستلام

                                                                @endif</td>
                                                            <td>




                                                                    <a href="{{ route('vendor.changeRecieve',$orders->id) }}"
                                                                        class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                                        @if ($orders->recieve==1)
                                                                        لم يتم الاستلام

                                                                        @else
                                                                        تم الاستلام

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
