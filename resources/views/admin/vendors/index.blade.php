@extends('layouts.admin')

<style>
    @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
    body {
        font-family: 'Lateef', serif;
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
                                    <h4 class="card-title" style="font-family:'Lateef', serif;font-size:25px">جميع المتاجر </h4>
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

                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">


                                        <table
                                        class="table display nowrap table-striped table-bordered  table-light
                                        table-responsive w-100 d-block d-md-table">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الاسم</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px"> اللوجو</th>

                                                <th style="font-family:'Lateef', serif;font-size:18px">الهاتف</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">العنوان</th>

                                                <th style="font-family:'Lateef', serif;font-size:18px"> ألحالة </th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                       @isset($vendors)
                                                @foreach($vendors as $vendor)
                                                    <tr>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$vendor -> name}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px"><img style="width: 75px; height: 75px;"
                                                                 src="{{$vendor -> logo}}"></td>

                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$vendor -> mobile}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px"> بالقرب من  {{$vendor -> address}}</td>

                                                        <td style="font-family:'Lateef', serif;font-size:18px"> {{$vendor -> getActive()}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.vendors.edit',$vendor -> id)}}"
                                                                   class="btn btn-outline-primary  box-shadow-3 mr-1 mb-1" style="width: 78px;"
                                                                   style="font-family:'Lateef', serif;font-size:18px">تعديل</a>


                                                                <a href="{{ route("admin.vendors.delete",$vendor -> id) }}"
                                                                   class="btn btn-outline-danger  box-shadow-3 mr-1 mb-1" style="width: 78px;"
                                                                   style="font-family:'Lateef', serif;font-size:18px">حذف</a>


                                                                <a href="{{ route("admin.vendors.changestatus",$vendor -> id) }}"
                                                                   class="btn btn-outline-warning  box-shadow-3 mr-1 mb-1" style="width: 78px;"
                                                                   style="font-family:'Lateef', serif;font-size:18px">
                                                                   @if ($vendor->active==1)
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
