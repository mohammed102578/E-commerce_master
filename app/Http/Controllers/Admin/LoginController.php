<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\Models\Admins;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function getlogin(){
        return view('admin.Auth.login');
    }

// check the admin admin login
public function login(loginRequest $request){

    $remember_me = $request->has('remember_me') ? true : false;

    if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")],$remember_me)) {
       // notify()->success('تم الدخول بنجاح  ');
        return redirect() -> route('admin.dashboard');
    }
   // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
    return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
}


public function logout(Request $request) {
    Auth::logout();
    return redirect('admin/login');
  }


}

