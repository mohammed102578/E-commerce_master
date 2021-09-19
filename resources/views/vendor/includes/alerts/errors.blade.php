
<style>
    @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
    .latief{
   font-size: 18px;
    font-family: 'Lateef', serif;


    }
    </style>



@if(Session::has('error'))
    <div class="row mr-2 ml-2 latief" >
            <button type="text" class="btn btn-lg btn-block  mb-2 latief"
                    id="type-error" style="color: red">{{Session::get('error')}}
            </button>
    </div>
@endif
