<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Vendor;
use App\Models\Message;
use App\Models\Notification;
class userController extends Controller
{
    public function index(){
//message

$messageCount=Message::select()->where('type','vendor')->get()->count();

$message=Message::select()->where('type','vendor')->get();




 //Notification

 $notification=Notification::select()->where('type','admin')->where('active',0)->get();


 $notificationCount=Notification::select()->where('type','admin')->where('active',0)->get()->count();



        //return all vendor

$allVendor=Vendor::select()->get();
        $user = User::select()->paginate(PAGINATION_COUNT);

        return view('admin.user.index', compact('message','user','allVendor','messageCount','notification','notificationCount'));

    }


    public function destroy($id)
    {

        try {
            $user = User::find($id);
            if (!$user) {
                return redirect()->route('admin.user')->with(['error' => 'هذا المستخدم غير موجود']);
            }
            $user->delete();

            return redirect()->route('admin.user')->with(['success' => 'تم حذف المستخدم بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.user')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
