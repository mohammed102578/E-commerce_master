<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\vendor\VendorChPassRequest ;
use App\Http\Requests\vendor\VendorDetRequest  ;
use App\Models\Vendor;
use App\Models\Notification;
use App\Models\Message;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
class ProfilesController extends Controller
{

    public function index(){


//message

$messageCount=Message::select()->where('type','admin')->get()->count();

 $message=Message::select()->where('type','admin')->get();




//Notification

$notification=Notification::select()->where('type','vendor')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','vendor')->where('active',0)->get()->count();



return view('vendor.vendor.Profile',compact('message','messageCount','notificationCount','notificationCount'));
    }

    public function edit($id){


        try {




//message

$messageCount=Message::select()->where('type','admin')->get()->count();

 $message=Message::select()->where('type','admin')->get();




//Notification

$notification=Notification::select()->where('type','vendor')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','vendor')->where('active',0)->get()->count();


            $vendor = Vendor::Selection()->find($id);
            if (!$vendor)
                return redirect()->route('vendor.dashboard')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);

                return view('vendor.admin.editProfile',compact('message','messageCount','notification','notificationCount'));

       } catch (\Exception $exception) {
           return redirect()->route('vendor.dashboard')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
       }


    }

    public function update(VendorDetRequest  $request,$id){



        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $vendor = Vendor::Selection()->find($id);
        if (!$vendor)
        return redirect()->route('vendor.dashboard')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);

try{

            DB::beginTransaction();
            //logo
            if ($request->has('logo') ) {


                 $filePath = uploadImage($request->logo,'vendor');
                Vendor::where('id', $id)
                    ->update([
                        'logo' => $filePath,
                    ]);
            }


            Vendor::where('id', $id)
                ->update(
                    ['name'=>$request->name,
                    'city'=>$request->city,
                    'mobile'=>$request->mobile,
                    'email'=>$request->email,
                    'address'=>$request->address]
                );
//notification
Notification::create(['photo'=>$vendorPhoto,'userName'=>   $vendorName,
'notification'=>"قام بتغيير صفحته الشخصية   " ,'type'=>'admin']);


            DB::commit();
            return redirect()->route('vendor.dashboard')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('vendor.dashboard')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }else{
        return redirect()->route('vendor.dashboard');
    }
    }

    public function changePassword(vendorChPassRequest $request,$id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $vendor = Vendor::Selection()->find($id);

        if (!$vendor)
            return redirect()->route('vendor.dashboard')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);
try{


            DB::beginTransaction();

            if (Hash::check($request->current_password, $vendor->password)) {


          if($request->New_password==$request->confirm_New_password){

                    $password = bcrypt($request->New_password);
                    Vendor::where('id', $id)
                    ->update(
                        ['password'=>$password]);
                }else{
                    return redirect()->route('vendor.dashboard')->with(['error' => 'the password not match']);
                }

               }else{
                return redirect()->route('vendor.dashboard')->with(['error' => 'please enter correct password']);

            }


DB::commit();
return redirect()->route('vendor.dashboard')->with(['success' => 'تم التحديث بنجاح']);
} catch (\Exception $exception) {
return $exception;
DB::rollback();
return redirect()->route('vendor.dashboard')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
}
}else{
    return redirect()->route('vendor.dashboard');
}
    }



}
