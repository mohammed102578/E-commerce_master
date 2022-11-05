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
use App\Models\Vendor;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\MainCategory;
use App\Models\Cart;
use App\Http\Requests\user\Addcart;
class ProfileController extends Controller
{

    public function profile(){
        $subcategories=SubCategory::selection()->active()->get();
        $maincategories = MainCategory::where('translation_of', 0)->active()->get();
        $products=Product::orderBy('id','DESC')->selection()->paginate(PAGINATION_COUNT);
        $productCount=Product::count();
        $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
        $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();
return view('user.edituserprofile',compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));
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
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

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
                    'city'=>$request->city,
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

    } else{
        return redirect()->route('user.mainpage')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

    }
}

//change password
    public function changePassword(userChPassRequest $request,$id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

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
else{
    return redirect()->route('user.profile');

}
}//end of the function change password
}//end of class
