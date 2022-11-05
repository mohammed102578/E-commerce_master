<?php

namespace App\Http\Controllers\Vendor;
use App\Http\Requests\messageRequest;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Notification;
use Auth;
use Alert;
class messageController extends Controller
{



    public function showMessage(){


//Notification

$notification=Notification::select()->where('type','vendor')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','vendor')->where('active',0)->get()->count();


//message

$messageCount=Message::select()->where('type','admin')->get()->count();

 $message=Message::select()->where('type','admin')->get();



         return view('vendor.massage.index',compact('messageCount','message','notification','notificationCount'));




        }


    //start store message
    public function  storeMessage(messageRequest $request){
        $vendorName=Auth::guard('vendor')->user()->name;
        $vendorPhoto=Auth::guard('vendor')->user()->logo;

        Message::create(['title'=>$request->title,'vendor_id'=>$request->id,'photo'=>$vendorPhoto,'vendor_name'=>$vendorName,
        'message'=>$request->message ,'type'=>'vendor']);



        //notification
        Notification::create(['photo'=>$vendorPhoto,'userName'=>   $vendorName,
        'notification'=>"تم ارسال رسالة " ,'type'=>'admin']);



        //sweet alert
        Alert::success('نجاح', 'تم الارسال بنجاح');

        //send notification to admin
//return redirect route
return redirect()->route('vendor.dashboard');

    }




    //start destroy message




    public function destroy($id)
{

    try {
        $message = Message::find($id);
        if (!$message)
            return redirect()->route('vendor.show.messages')->with(['error' => 'هذا الرسالة غير موجود ']);


        $message->delete();
        return redirect()->route('vendor.show.messages');

    } catch (\Exception $ex) {
        return redirect()->route('vendor.show.messages')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    }
}

}
