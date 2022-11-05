@extends('layouts.admin')

@section('content')
<style>


    @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
    body {
        font-family: 'Lateef', serif;
         font-size:18px;
    }


</style>
    <div class="app-content content">
        <div class="content-wrapper">

            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 > تعديل بيانات القسم الفرعي  </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>

                                </div>
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">


                                        <form class="form" action="{{route('admin.SubCategory.update',$subcategory->id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf


                                            <input type="hidden" name="id" value="{{$subcategory-> id}}">
                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img
                                                        src="{{$subcategory->photo}}"
                                                        class="rounded-circle  height-250" alt="صورة القسم  ">
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label> صوره القسم </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> بيانات القسم </h4>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> اسم القسم  </label>
                                                                    <input type="text" value="{{ $subcategory->name }}" id="name"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           name="name">
                                                                    @error("name")
                                                                    <span class="text-danger"> هذا الحقل مطلوب</span>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput2"> أختر القسم </label>
                                                                    <select name="category_id" class="select2 form-control">
                                                                        <optgroup label="من فضلك أختر القسم ">
                                                                            @if($maincategories && $maincategories -> count() > 0)
                                                                                @foreach($maincategories as $maincategory)
                                                                                    <option
                                                                                        value="{{$maincategory -> id }}"
                                                                                        @if($subcategory-> main_category_id == $maincategory-> id  )  selected @endif
                                                                                    >{{$maincategory-> name}}</option>
                                                                                @endforeach
                                                                            @endif
                                                                        </optgroup>
                                                                    </select>
                                                                    @error('category_id')
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>




                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-1">
                                                                    <input type="checkbox" value="1"
                                                                           name="active"
                                                                           id="switcheryColor4"
                                                                           class="switchery" data-color="success"
                                                                           checked/>
                                                                    <label for="switcheryColor4"
                                                                           class="card-title ml-1">الحالة  </label>

                                                                    @error("active")
                                                                    <span class="text-danger"> </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection
