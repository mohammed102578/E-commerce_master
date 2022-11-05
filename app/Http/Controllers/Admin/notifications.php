<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;


class notifications extends Controller
{


public function notification(){

    Notification::select()->where('type','admin')->where('active',0)->get();

}

}
