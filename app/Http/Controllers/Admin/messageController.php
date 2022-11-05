<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\messageRequest;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Events\NewNotification;
use Auth;
use Alert;
use App\Models\Vendor;
use App\Models\Notification;
class messageController extends Controller
{

public function showMessage(){

//return all vendor

$allVendor=Vendor::select()->get();


//message

$messageCount=Message::select()->where('type','vendor')->get()->count();


 $message=Message::select()->where('type','vendor')->get();




 //Notification

 $notification=Notification::select()->where('type','admin')->where('active',0)->get();


 $notificationCount=Notification::select()->where('type','admin')->where('active',0)->get()->count();


 return view('admin.massage.index',compact('allVendor','messageCount','message','notification','notificationCount'));




}




//start store message


    public function storeMessage(messageRequest $request){
$photo=Auth::guard('admin')->user()->photo;


       $messageSave= Message::create(['title'=>$request->title,'photo'=>$photo,'vendor_id'=>$request->vendor_id,'vendor_name'=>'admin',
        'message'=>$request->message ,'type'=>'admin'])->save();


        if($messageSave){



//notification
Notification::create(['photo'=>$photo,'userName'=>'admin',
'notification'=>" تم ارسال رسالة جديدة " ,'type'=>'vendor']);



  //sweet alert
  Alert::success('نجاح', 'تم الارسال بنجاح');

  //return redirect route
  return redirect()->route('admin.dashboard');


        }

    }

    //start destory

    public function destroy($id)
{

    try {
        $message = Message::find($id);
        if (!$message)
            return redirect()->route('admin.show.messages')->with(['error' => 'هذا الرسالة غير موجود ']);


        $message->delete();
        return redirect()->route('admin.show.messages');

    } catch (\Exception $ex) {
        return redirect()->route('admin.show.messages')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    }
}

}
