@include('admin.includes.Header')
@include('admin.includes.Sidebar')
@extends('layouts.Admin')
@section('content')
    <!-- Main content -->
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    <style>

       @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
    body {
        font-family: 'Lateef', serif;
         font-size:18px;
    }

        }</style>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{App\Models\MainCategory::defaultCategory()->count()}}</h3>

                <p  style="font-family:'Lateef', serif;  font-size:18px">الاقسام الرئيسية</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('admin.MainCategory') }}" class="small-box-footer" style="font-family:'Lateef', serif;font-size:18px">عرض المزيد .... <i class="fas fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{App\Models\SubCategory::count()}}<sup style="font-size: 20px"></sup></h3>

                <p style="font-family:'Lateef', serif;font-size:18px">الاقسام الفرعية</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('admin.SubCategory') }}" class="small-box-footer" style="font-family:'Lateef', serif;font-size:18px">عرض المزيد .... <i class="fas fa-arrow-circle-left"></i></a>
            </div>
          </div>


          <!-- ./col -->
          <div class="col-lg-3 col-6" style="color:white">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="font-size: 25px;color:#fff">{{App\Models\Vendor::count()}}<sup style="font-size: 20px"></sup></h3>

                <p style="font-family:'Lateef', serif;font-size:18px;color:white"> المتاجر </p>
              </div>

              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('admin.vendors') }}" class="small-box-footer" style="font-family:'Lateef', serif;font-size:18px;color:#fff"><span style="font-family:'Lateef', serif;font-size:18px;color:#fff">عرض المزيد .... <i class="fas fa-arrow-circle-left"></i></span></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{App\User::count()}}</h3>

                <p style="font-family:'Lateef', serif;font-size:18px">المستخدمين</p>
              </div>


              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ route('admin.user') }}" class="small-box-footer" style="font-family:'Lateef', serif;font-size:18px">عرض المزيد .... <i class="fas fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title pull-right" style="font-family:'Lateef', serif;font-size:18px">
                  <i class="fas fa-chart-pie mr-1"></i>
                  المبيعات في كل شهر
                </h3>
 <!-- card tools -->
 <div class="card-tools" style="float: left">

    <button type="button" class="btn btn-primary btn-sm " data-card-widget="collapse" title="Collapse">
      <i class="fas fa-minus pull-left"></i>
    </button>
  </div>
  <!-- /.card-tools -->
              </div><!-- /.card-header -->
              <div class="card-body">

                <canvas id="myAreaChart" width="100%" height="58" style="font-family:'Lateef', serif;font-size:18px">


              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->




<!--start pie-->



            <div class="card">
                <div class="card-header bg-dark p-3">
                  <h3 class="card-title pull-right" style="font-family:'Lateef', serif;font-size:18px">

                    <i class="fas fa-male mr-1"></i>
                   النسبة المئوية للجنس
                  </h3>
 <!-- card tools -->
 <div class="card-tools" style="float: left">

    <button type="button" class="btn btn-primary btn-sm " data-card-widget="collapse" title="Collapse">
      <i class="fas fa-minus pull-left"></i>
    </button>
  </div>
  <!-- /.card-tools -->
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->

                    <div id="pie_chart" style="width:400px; height:470px;" style="font-family:'Lateef', serif;font-size:18px">


                  </div>
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
<!--End of the pie chart-->



            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-6 connectedSortable">

                  <!-- bar chart-->
                  <div class="card bg-gradient-light">
                    <div class="card-header border-1 bg-dark" >
                      <h3 class="card-title pull-right" style="font-family:'Lateef', serif;font-size:18px">
                        <i class="fas fa-cart-arrow-down mr-0 "></i>
                        المدن الأكثر شرائا
                      </h3>
                      <!-- card tools -->
                      <div class="card-tools" style="float: left">

                        <button type="button" class="btn btn-primary btn-sm " data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus pull-left"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <div class="card-body">
                        <div class="card-body"><canvas id="myBarChart" style="font-family:'Lateef', serif;font-size:18px" width="100%" height="55"></canvas></div>
                    </div>
                    <!-- /.card-body-->

                  </div>
                  <!-- /.card -->

            <!-- solid sales graph -->

            <!-- LTS UISER -->

                 <!-- USERS LIST -->
                 <div class="card">
                    <div class="card-header bg-dark p-2.3">
                      <h3 class="card-title float-right"  style="font-family:'Lateef', serif;font-size:18px">اخر الأعضاء</h3>

                      <div class="card-tools float-left">
                        <span class="badge badge-danger"  style="font-family:'Lateef', serif;font-size:18px">8 الأعضاء الجدد</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <ul class="users-list clearfix">


@foreach ($users as $user )
<li>
    <div  class="card-body" style="  height:130px;position:relative; overflow:hidden ">
    <img class="img-fluid" src="http://localhost/E-commerce/assets/{{ $user->photo }}" alt="User Image" style="max-width: 100%; height:100px" ></div>
    <a class="users-list-name" href="#"  style="font-family:'Lateef', serif;font-size:18px">{{ $user->name }}</a>
    <span class="users-list-date" style="font-family:'Lateef', serif;font-size:18px">{{  $user->city}}</span>
  </li>

@endforeach



                      </ul>
                      <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                      <a href="{{ route('admin.user') }}"style="font-family:'Lateef', serif;font-size:18px">عرض كل المستخدمين</a>
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!--/.card -->
           <!--LTS USER-->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->




      </div><!-- /.container-fluid -->


































    </section>

    @endsection

