
@extends('layouts.site')

@section('content')
<style>
@import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
.logheader{
border-color:#ffffff;
border:0px solid;
font-family: 'Lateef', serif;


}


.registerloginForm label.error {
		margin-left: 10px;
		width: auto;
		display: inline;
        font-size: 18px;
        color:#f1020e;
	}
.logbtn{
    background-image: linear-gradient(to right,#21a2fd 0%,#7967fe 100%);
    width: 150px;
    color:#fff;
    height: 43px;

}

.card-header{
    background-image: linear-gradient(to right,#21a2fd 0%,#7967fe 100%);
color: #fff;
text-align: center;
font-style: normal;
font-size: 2em;
box-shadow: 0 0 10px 0 rgba(0,0,0,.25);
}
.card-header:first-child{
    border-radius: 20px,20px,0px,0px;

}
.card-body{
padding: 26px;
box-shadow: 0 0 10px 0 rgba(0,0,0,.25);
border-color: #21a2fd;
border-width:4px;
}
input{
    box-shadow: 0 0 10px 0 rgba(0,0,0,.25);

}
.span-size {

    font-size: 18px;
    font-family: 'Lateef', serif;

}
</style>
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card logheader">
                <div class="logheader card-header">{{ __('اعادة كلمة السر') }}</div>
                <div class="card-body">



@if (Session::has('message'))

<div class="alert alert-success" role="alert">

   {{ Session::get('message') }}
   <button class="close" type="button" data-dimiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
</button>
</div>

@endif







<form action="{{ route('forget.password.post') }}" method="POST"  class="registerloginForm">
                        @csrf

                        <div class="form-group row">
 <div class="span-size  col-md-5">
                            <i class="fa fa-user"></i>
                            <label for="email" class="col-form-label text-md-right bold">{{ __('البريد الالكتروني') }}</label>
</div >
                            <div class="col-md-12">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>








                        <div class="form-group row mb-0">
                            <div class="col-md-8">

                                <button type="submit" class="logbtn btn   pull-left">
                                    <span class="span-size">
                                    {{ __('تأكيد البريد الالكتروني') }}
                                </span>
                                </button>



                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
@endsection
