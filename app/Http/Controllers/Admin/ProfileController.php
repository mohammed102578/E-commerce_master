<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminChPassRequest ;
use App\Http\Requests\AdminDetRequest ;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
class ProfileController extends Controller
{

    public function index(){

return view('admin.Profile');
    }

    public function edit($id){


        try {

            $admin = Admin::Selection()->find($id);
            if (!$admin)
                return redirect()->route('admin.dashboard')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);

                return view('admin.admin.editProfile');

        } catch (\Exception $exception) {
            return redirect()->route('admin.vendors')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }


    }

    public function update(AdminDetRequest $request,$id){
        $admin = Admin::Selection()->find($id);
        if (!$admin)
            return redirect()->route('admin.dashboard')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);
try{

            DB::beginTransaction();
            //photo
            if ($request->has('photo') ) {


                 $filePath = uploadImage($request->photo,'admin');
                Admin::where('id', $id)
                    ->update([
                        'photo' => $filePath,
                    ]);
            }


            Admin::where('id', $id)
                ->update(
                    ['name'=>$request->name,
                    'mobile'=>$request->mobile,
                    'email'=>$request->email]
                );

            DB::commit();
            return redirect()->route('admin.dashboard')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('admin.dashboard')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function changePassword(AdminChPassRequest $request,$id){

        $admin = Admin::Selection()->find($id);
        if (!$admin)
            return redirect()->route('admin.dashboard')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);
try{

            DB::beginTransaction();

            if (Hash::check($request->current_password, $admin->password)) {

                if($request->New_password==$request->confirm_New_password){

                    $password = bcrypt($request->New_password);
                    Admin::where('id', $id)
                    ->update(
                        ['password'=>$password]);
                }else{
                    return redirect()->route('admin.dashboard')->with(['error' => 'the password not match']);
                }

               }else{
                return redirect()->route('admin.dashboard')->with(['error' => 'please enter correct password']);

            }


DB::commit();
return redirect()->route('admin.dashboard')->with(['success' => 'تم التحديث بنجاح']);
} catch (\Exception $exception) {
return $exception;
DB::rollback();
return redirect()->route('admin.dashboard')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
}
}



}
