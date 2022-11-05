@extends('layouts.vendor')
@section('content')

<hr>
<div class="app-content content">
    <div class="content-wrapper">

        <h1 style="margin-bottom:60px" class="text-center m-b-70px">الصفحة الشخصية </h1>


    <div class="row bg-dark text-light">
  		<div class="col-sm-3"><!--left col-->


      <div class="text-center">
        <img  style="max-width:29%" src="{{ Auth::guard('vendor')->user()->logo}}" class="avatr img-circle img-responsive  h-100px w-100px" alt="avatar">


      </div></hr><br>



          <ul class="list-group">

            <li class="list-group-item text-muted " ><h1>المعلومات الشخصية</h1><i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right" style="background-color:rgb(236, 236, 225)"><span class="pull-right"><h4>الاسم</h4></span><br><span class="pull-left" style="color: black"> {{ Auth::guard('vendor')->user()->name}} </span></li>
            <li class="list-group-item text-right "><span class="pull-right"><h4>البريد الالكتروني</h4></span> <br><span class="pull-left" style="color: black"> {{ Auth::guard('vendor')->user()->email}} </span></li>
            <li class="list-group-item text-right" style="background-color:rgb(236, 236, 225)"><span class="pull-right"><h4>الهاتف</h4></span><br><span class="pull-left" style="color: black">  {{ Auth::guard('vendor')->user()->mobile}} </span></li>
            <li class="list-group-item text-right " ><span class="pull-right"><h4>المدينة</h4></span> <br><span class="pull-left" style="color: black"> {{ Auth::guard('vendor')->user()->city}} </span></li>
            <li class="list-group-item text-right" style="background-color:rgb(236, 236, 225)"><span class="pull-right"><h4>العنوان</h4></span><br> <span class="pull-left" style="color: black"> {{ Auth::guard('vendor')->user()->address}} </span></li>
          </ul>



        </div><!--/col-3-->


    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#messages" ><h1 class="text-light">تعديل الصفحة الشخصية</h1></a></li>
                <li><a data-toggle="tab" href="#settings"><h1 class="text-light">تغيير كلمة المرور</h1></a></li>
              </ul>

              @include('vendor.includes.alerts.success')
              @include('vendor.includes.alerts.errors')
          <div class="tab-content">

             <div class="tab-pane active" id="messages">

               <h2></h2>

               <hr>
               <form class="form" action="{{route('vendor.profile.update',Auth::guard('vendor')->user()->id)}}" method="post" id="registrationForm"
                enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-10px">

                                            <div class="col-xs-6 offset-5">
                                                <label  style="float: right;" for="first_name"><h4 class="text-light" >اختر صورة</h4></label>
                                        <input type="file" class="text-center center-block file-upload"  name="logo">

                                    </div>
                                    @error('logo')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                                </div>

<input type="hidden" name="id" value="{{  Auth::guard('vendor')->user()->id}}">



                                          <div class="form-group">

                                              <div class="col-xs-6 offset-5">
                                                  <label  style="float: right;" for="name" style="float: right;"><h4 class="text-light pull-right" class="text-light" >الاسم:</h4></label>
                                                  <input type="text" class="form-control" name="name" id="name"
                                                   value="{{Auth::guard('vendor')->user()->name}}">
                                              </div>
                                              @error('name')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                                          </div>


                                          <div class="form-group">
                                              <div class="col-xs-6 offset-5">
                                                 <label  style="float: right;" for="mobile"><h4 class="text-light" >الهاتف:</h4></label>
                                                  <input type="text" class="form-control" name="mobile" id="mobile"
                                                  title="enter your mobile number if any."name="logo" value="{{Auth::guard('vendor')->user()->mobile}}">
                                              </div>
                                              @error('mobile')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                                          </div>
                                          <div class="form-group">

                                              <div class="col-xs-6 offset-5">
                                                  <label  style="float: right;" for="email"><h4 class="text-light" >البريد الالكتروني :</h4></label>
                                                  <input type="email" class="form-control" name="email" id="email"
                                                  title="enter your email." name="logo" value="{{ Auth::guard('vendor')->user()->email}}">
                                              </div>
                                              @error('email')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                                          </div>















                                                                            <div class="col-xs-6 offset-5">
                                                                                <label  style="float: right;" for="city"><h4 class="text-light input" > المدينة الحالية </h4></label>
                                                                                <br>
                                                                                <select name="city"  class="form-control" value="{{ Auth::user()->city}}" style="border-radius:9px; font-size:13px;  height: 45px">
                                                                                    <optgroup label="من فضلك أختر المدينة ">

                                                                                    <option @if(Auth::guard('vendor')->user()->city ==  'الخرطوم' )  selected @endif
                                                                                    >الخرطوم</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city== 'امدرمان'  )  selected @endif
                                                                                    >امدرمان</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'كسلا' )  selected @endif
                                                                                    >كسلا</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'بورتسودان' )  selected @endif
                                                                                    >بورتسودان </option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'القضارف' )  selected @endif
                                                                                    >القضارف</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'الدمازين' )  selected @endif
                                                                                    >الدمازين </option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'كوستي' )  selected @endif
                                                                                    >كوستي </option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'خرطوم بحري' )  selected @endif
                                                                                    >خرطوم بحري </option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'عطبرة' )  selected @endif
                                                                                    >عطبرة</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'دنقلا' )  selected @endif
                                                                                    >دنقلا</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'كادوقلي' )  selected @endif
                                                                                    >كادوقلي</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'الابيض' )  selected @endif
                                                                                    >الابيض</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'الفولة' )  selected @endif
                                                                                    >الفولة</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'الفاشر' )  selected @endif
                                                                                    >الفاشر</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'نيالا' )  selected @endif
                                                                                    >نيالا</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city==  'الجنينة' )  selected @endif
                                                                                    >الجنينة</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city== 'زالنجي'  )  selected @endif
                                                                                    >زالنجي</option>
                                                                                    <option  @if(Auth::guard('vendor')->user()->city== 'الضعين'  )  selected @endif
                                                                                    >الضعين</option>
                                                                                </select>
                                                                                <label  style="float: right;" for="city" class="col-form-label error m-0 text-danger text-md-right bold"></label>
                                                                            </div>
                                                                            @error('city')
                                                                 <span class="text-danger">{{$message}}</span>
                                                                 @enderror




































                                                                            <div class="form-group">
                                                                                <div class="col-xs-6 offset-5">
                                                                                <label  style="float: right;" for="projectinput1"> <h4 class="text-light">العنوان :</h4> </label>
                                                                                <input type="text" id="pac-input"
                                                                                       class="form-control"
                                                                                       placeholder="  " name="address"
                                                                                       value="{{Auth::guard('vendor')->user()-> address}}"
                                                                                >
                                                                            </div>
                                                                                @error("address")
                                                                                <span class="text-danger"> {{$message}}</span>
                                                                                @enderror

                                                                        </div>


                                                                        <div class="form-group">
                                                                            <div class="col-xs-6 offset-5">




                                                                        <div id="map" style="height: 500px;width: 813px;"></div>

                                                                    </div> </div>


                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> حفظ</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> اعادة</button>
                            </div>
                      </div>
              	</form>

             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">


                <hr>
                <form class="form" action="{{ route('vendor.profile.changePassword',Auth::guard('vendor')->user()->id) }}" method="post" id="registrationForm">
                  @csrf
                    <div class="form-group">

                        <div class="col-xs-6 offset-5 offset-5">
                            <label  style="float: right;" for="password"><h4 class="text-light">كلمة السر الحالي</h4></label>
                            <input type="password" name="current_password" class="form-control" id="location" title="enter a location">
                        </div>
                        @error('current-password')
             <span class="text-danger">{{$message}}</span>
             @enderror
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6 offset-5 offset-5">
                            <label  style="float: right;" for="New_password"><h4 class="text-light">كلمة السر الجديدة</h4></label>
                            <input type="password" class="form-control" name="New_password" id="New_password" itle="enter your New_password.">
                        </div>
                        @error('New_password')
             <span class="text-danger">{{$message}}</span>
             @enderror
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6 offset-5 offset-5">
                          <label  style="float: right;" for="confirm_New_password"><h4 class="text-light">تأكيد كلمة السر الحالي</h4></label>
                            <input type="password" class="form-control" name="confirm_New_password" id="confirm_New_password" title="enter your confirm_New_password.">
                        </div>
                        @error('confirm_New_password')
             <span class="text-danger">{{$message}}</span>
             @enderror
                    </div>










                    <div class="form-group">
                         <div class="col-xs-12">
                              <br>
                                <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                 <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                          </div>
                    </div>
                </form>


            </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->


    @section('script')

    <script>

        $("#pac-input").focusin(function() {
            $(this).val('');
        });


        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.

        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        function initAutocomplete() {

            var pos = {lat:   {{ Auth::guard('vendor')->user()->latitude }} ,  lng: {{ Auth::guard('vendor')->user()->longitude }} };

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: pos
            });


            infoWindow = new google.maps.InfoWindow;
            geocoder = new google.maps.Geocoder();

            marker = new google.maps.Marker({
                position: pos,
                map: map,
                title: '{{ Auth::guard('vendor')->user()->name }}'

            });


            infoWindow.setContent('{{ Auth::guard('vendor')->user()->name }}');
            infoWindow.open(map, marker);



            // move pin and current location
            infoWindow = new google.maps.InfoWindow;
            geocoder = new google.maps.Geocoder();

            var geocoder = new google.maps.Geocoder();
            google.maps.event.addListener(map, 'click', function(event) {
                SelectedLatLng = event.latLng;
                geocoder.geocode({
                    'latLng': event.latLng
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            deleteMarkers();
                            addMarkerRunTime(event.latLng);
                            SelectedLocation = results[0].formatted_address;
                            console.log( results[0].formatted_address);
                            splitLatLng(String(event.latLng));
                            $("#pac-input").val(results[0].formatted_address);
                        }
                    }
                });
            });
            function geocodeLatLng(geocoder, map, infowindow,markerCurrent) {
                var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};
                /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
                $('#latitude').val(markerCurrent.position.lat());
                $('#longitude').val(markerCurrent.position.lng());

                geocoder.geocode({'location': latlng}, function(results, status) {
                    if (status === 'OK') {
                        if (results[0]) {
                            map.setZoom(8);
                            var marker = new google.maps.Marker({
                                position: latlng,
                                map: map
                            });
                            markers.push(marker);
                            infowindow.setContent(results[0].formatted_address);
                            SelectedLocation = results[0].formatted_address;
                            $("#pac-input").val(results[0].formatted_address);

                            infowindow.open(map, marker);
                        } else {
                            window.alert('No results found');
                        }
                    } else {
                        window.alert('Geocoder failed due to: ' + status);
                    }
                });
                SelectedLatLng =(markerCurrent.position.lat(),markerCurrent.position.lng());
            }
            function addMarkerRunTime(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                markers.push(marker);
            }
            function setMapOnAll(map) {
                for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(map);
                }
            }
            function clearMarkers() {
                setMapOnAll(null);
            }
            function deleteMarkers() {
                clearMarkers();
                markers = [];
            }

            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            $("#pac-input").val("أبحث هنا ");
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });

            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];

                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(100, 100),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));


                    $('#latitude').val(place.geometry.location.lat());
                    $('#longitude').val(place.geometry.location.lng());

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
        function splitLatLng(latLng){
            var newString = latLng.substring(0, latLng.length-1);
            var newString2 = newString.substring(1);
            var trainindIdArray = newString2.split(',');
            var lat = trainindIdArray[0];
            var Lng  = trainindIdArray[1];

            $("#latitude").val(lat);
            $("#longitude").val(Lng);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKZAuxH9xTzD2DLY2nKSPKrgRi2_y0ejs&libraries=places&callback=initAutocomplete&language=ar&region=EG
         async defer"></script>
@stop





</div>
</div>
    @endsection
