
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
                                    <h4 class="card-title" style="font-family:'Lateef', serif;font-size:25px">جميع اللغات </h4>
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





                                                <th style="font-family:'Lateef', serif;font-size:18px"> الاسم</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الاختصار</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">اتجاه</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الحالة</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الإجراءات</th>

                                            </tr>
                                            </thead>
                                            <tbody>







                                                @isset($languages)
                                                @foreach($languages as $language)
                                                    <tr>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$language -> name}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$language -> abbr}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$language -> direction}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$language -> getActive()}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.languages.edit',$language -> id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                                <a href="{{route('admin.languages.delete',$language -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>


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
