@extends('layouts.admin')

@section('content')
<style>
    *{
    font-family:'Lateef', serif;
    font-size:18px;
    }


    </style>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-sm-12 mb-2">
                    <h3 class="content-header-title">  الرسائل </h3>

                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">


                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <div >
                                        <table
                                        class="table display nowrap table-striped table-bordered  table-light
                                        table-responsive w-100 d-block d-md-table">


                                        <thead class="thead-dark">
                                            <tr>
                                                <th style="font-family:'Lateef', serif;font-size:18px"> الاسم</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px"> الصورة</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">العنوان</th>
                                                <th style="font-family:'Lateef', serif;font-size:18px">الرسالة</th>

                                                <th style="font-family:'Lateef', serif;font-size:18px">الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($message)
                                                @foreach($message as $messages)
                                                    <tr>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$messages ->vendor_name}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px"><img style="width: 180px; height: 100px;"
                                                            src="{{$messages -> photo}}"></td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$messages ->title}}</td>
                                                        <td style="font-family:'Lateef', serif;font-size:18px">{{$messages ->message}}</td>


                                                        <td style="font-family:'Lateef', serif;font-size:18px">
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{ route('admin.message.delete',$messages ->id) }}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تم الرد</a>


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
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
