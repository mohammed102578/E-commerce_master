<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\userChPassRequest ;
use App\Http\Requests\user\userDetRequest  ;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use Auth;
class ProfileController extends Controller
{

    public function profile(){

return view('user.edituserprofile');
    }

    public function edit($id){


        try {

            $user = Auth::user()->Select()->find($id);
            if (!$user)
                return redirect()->route('user.mainpage')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);

                return view('user.edituserprofile');

       } catch (\Exception $exception) {
           return redirect()->route('user.mainpage')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
       }


    }

    public function update(userDetRequest  $request,$id){
        $user = Auth::user()->Select()->find($id);
        if (!$user)
        return redirect()->route('user.mainpage')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);

try{

            DB::beginTransaction();
            //logo
            if ($request->has('photo') ) {


                 $filePath = uploadImage($request->photo,'user');
                User::where('id', $id)
                    ->update([
                        'photo' => $filePath,
                    ]);
            }


            User::where('id', $id)
                ->update(
                    ['name'=>$request->name,
                    'mobile'=>$request->mobile,
                    'email'=>$request->email,
                   'gender'=>$request->gender]
                );

            DB::commit();
            return redirect()->route('user.profile')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('user.mainpage')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function changePassword(userChPassRequest $request,$id){

        $user = Auth::user()->Select()->find($id);


        if (!$user)
            return redirect()->route('user.profile')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);
try{


            DB::beginTransaction();

            if (Hash::check($request->password, $user->password)) {


          if($request->New_password==$request->confirmpassword){

                    $password = bcrypt($request->New_password);
                    User::where('id', $id)
                    ->update(
                        ['password'=>$password]);
                }else{
                    return redirect()->route('user.profile')->with(['error' => 'the password not match']);
                }

               }else{
                return redirect()->route('user.profile')->with(['error' => 'please enter correct password']);

            }


DB::commit();
return redirect()->route('user.profile')->with(['success' => 'تم التحديث بنجاح']);
} catch (\Exception $exception) {
return $exception;
DB::rollback();
return redirect()->route('user.profile')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
}
}



}
