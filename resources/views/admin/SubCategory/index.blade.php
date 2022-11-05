@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">

            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>جميع اقسام الموقع </h4>
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
                                        <thead class="thead-dark">                                            <tr>
                                               <th style="font-family:'Lateef', serif;font-size:18px"> الاسم</th>
                                               <th style="font-family:'Lateef', serif;font-size:18px"> الصورة</th>
                                               <th style="font-family:'Lateef', serif;font-size:18px">اسم القسم الرئيسي</th>
                                               <th style="font-family:'Lateef', serif;font-size:18px">الحالة</th>


                                               <th style="font-family:'Lateef', serif;font-size:18px">الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($categories)
                                                @foreach($categories as $category)
                                                    <tr>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{ $category -> name}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px"><img style="width: 100px; height: 100px;"
                                                            src="{{$category -> photo}}"></td>



                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{ $category->maincategory-> name}}</td>


                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{ $category -> getActive()}}</td>

                                                        <td style="font-family:'Lateef', serif;font-size:18px">
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{ route('admin.SubCategory.edit',$category-> id) }}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                                <a href="{{ route('admin.SubCategory.delete',$category-> id) }}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>




                                                                <a href="{{ route("admin.SubCategory.changestatus",$category-> id) }}"
                                                                    class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                                    @if ($category->active==1)
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
