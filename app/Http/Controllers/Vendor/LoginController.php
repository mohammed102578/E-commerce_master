<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function getlogin(){
        return view('vendor.Auth.login');
    }

// check the admin admin login
public function login(loginRequest $request){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $remember_me = $request->has('remember_me') ? true : false;

    if (auth()->guard('vendor')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")],$remember_me)) {
       // notify()->success('تم الدخول بنجاح  ');

        return redirect() -> route('vendor.dashboard');
    }
   // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
    return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
}else{
    return redirect('vendor/login');
}
}

public function logout(Request $request) {
    Auth::logout();
    return redirect('vendor/login');
  }


}

