<?php

use App\Models\language;
use App\Models\MainCategory;
use Illuminate\Support\Facades\Config;

function get_languages(){
 return language::active()->selection()->get();
}

function get_default_language(){
    return $default_lang=Config::get('app.locale');


}
function get_MainCategory(){
    MainCategory::active()->selection()->get();
}

function uploadImage($photo,$folder){
    //save photo in folder
    $file_extension = $photo -> getClientOriginalExtension();
    $file_name = "images/".$folder."/".time().'.'.$file_extension;
    $path = "assets/images/".$folder;
    $photo -> move($path,$file_name);

    return $file_name;
}


?>
