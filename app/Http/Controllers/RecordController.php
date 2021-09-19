<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function store()
    {

        $record=record::create([
            'name' => $_REQUEST['name'],
             'age' =>$_REQUEST['age'],
             'title' => $_REQUEST['title'],
             'phone' => $_REQUEST['phone'],
             ]);


        //


     }

}
