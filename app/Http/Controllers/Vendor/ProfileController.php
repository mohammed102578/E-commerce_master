<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\vendor\VendorChPassRequest ;
use App\Http\Requests\vendor\VendorDetRequest  ;
use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
class ProfileController extends Controller
{

    public function index(){

return view('vendor.vendor.Profile');
    }

    public function edit($id){


        try {

            $vendor = Vendor::Selection()->find($id);
            if (!$vendor)
                return redirect()->route('vendor.dashboard')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);

                return view('vendor.admin.editProfile');

       } catch (\Exception $exception) {
           return redirect()->route('vendor.dashboard')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
       }


    }

    public function update(VendorDetRequest  $request,$id){
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
                    'mobile'=>$request->mobile,
                    'email'=>$request->email,
                    'address'=>$request->address]
                );

            DB::commit();
            return redirect()->route('vendor.dashboard')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('vendor.dashboard')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function changePassword(vendorChPassRequest $request,$id){

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
}



}
