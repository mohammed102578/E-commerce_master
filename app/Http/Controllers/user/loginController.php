<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\user\LoginRequest;
use App\User;
use Session;
use App\Models\Cart;
use Redirect;
use App\Models\SubCategory;
use App\Models\MainCategory;
use App\Models\Vendor;
use App\Models\Product;
class loginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
###############################get login
        public function getlogin(){
            $session_id = Session::getId();
            $productcountaddcart=Cart::where('user_id',$session_id)->count();
            $subcategories=SubCategory::selection()->get();
            $maincategories = MainCategory::where('translation_of', 0)->active()->get();
            $products=Product::selection()->paginate(PAGINATION_COUNT);
            $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
            return view('user.login',compact('vendors','productcountaddcart','products','subcategories','maincategories'));
        }

        public function index() {
            $session_id = Session::getId();
            $productcountaddcart=Cart::where('user_id',$session_id)->count();
            $subcategories=SubCategory::selection()->get();
            $maincategories = MainCategory::where('translation_of', 0)->active()->get();
            $products=Product::selection()->paginate(PAGINATION_COUNT);
            $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
            return view('front.home', compact('vendors','productcountaddcart','products','subcategories','maincategories'));
        }
// check the user login
public function login(LoginRequest $request){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $remember_me = $request->has('remember_me') ? true : false;

    if (auth()->guard('web')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")],$remember_me)) {
       // notify()->success('تم الدخول بنجاح  ');
        return redirect() -> route('user.mainpage');
    }else{
        $message="البريد الالكتروني وكلمة السر غير متطابقين" ;
        Session::flash('erorr_message', $message);
        return redirect()->back();
    }
    }else{
        return redirect()->back();

    }
}//login end


public function logoutuser(Request $request) {
    Auth::logout();
    return redirect()->route('user.home');
  }



}


