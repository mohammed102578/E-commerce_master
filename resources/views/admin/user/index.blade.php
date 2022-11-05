@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title" style="font-family:'Lateef', serif;font-size:22px"> المستخدمين </h3>
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
                                    <h4 class="card-title" style="font-family:'Lateef', serif;font-size:22px">المستخدمين </h4>
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
                                                <th style="font-family:'Lateef', serif;font-size:18px"> الرقم</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px"> الصورة</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px"> الاسم</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الهاتف</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">المدينة</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الجنس</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">E-mail</th>

                                                <th style="font-family:'Lateef', serif;font-size:18px">الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($user)
                                                @foreach($user as $users)
                                                    <tr>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$users -> id}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px"><img style="width: 75px; height: 75px;"
                                                            src="http://localhost/E-commerce/assets/{{$users -> photo}}"></td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$users -> name}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$users -> mobile}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$users -> city}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$users -> gender}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$users -> email}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">

                                                                <a href="{{route('admin.user.delete',$users->id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>


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
