<?php

namespace App\Http\Controllers\user;

use App\Http\Requests\user\messageRequest;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class messagesController extends Controller
{

//start store message


public function storeMessage(messageRequest $request){



    $photo=Auth::guard('user')->user()->photo;



           $messageSave= Message::create(['title'=>$request->title,'photo'=>$photo,'vendor_id'=>$request->user_id,'vendor_name'=>$request->customer_name,
            'message'=>$request->message ,'type'=>'vendor'])->save();



            if($messageSave){

      //sweet alert
      Alert::success('نجاح', 'تم الارسال بنجاح');

      //return redirect route
      return redirect()->route('mainpage.product_page');


            }

        }
}
