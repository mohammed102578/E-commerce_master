<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Http\Requests\user\RegisterRequest;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\MainCategory;
use App\Models\Cart;
use App\Http\Requests\user\Addcart;
use Session;
use Auth;
use DB;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function getregister(){
        $subcategories=SubCategory::selection()->active()->get();
        $maincategories = MainCategory::where('translation_of', 0)->active()->get();
        $products=Product::orderBy('id','DESC')->selection()->paginate(PAGINATION_COUNT);
        $productCount=Product::count();
        $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
        $session_id = Session::getId();
        $productcountaddcart=Cart::where('user_id',$session_id)->count();
        return view('user.register',compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));
    }



    protected function store(RegisterRequest $request)
    {
try{



    DB::beginTransaction();
         $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password)
         ]);


         DB::commit();
         Auth::login($user);
     return redirect()->route('user.mainpage');

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('user.register')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
            DB::rollback();
        }


    }




    public function checkEmail(RegisterRequest $request)

    {
        $data=$request->all();
        $checkEmail = User::where('email',$data['email'])->count();


        if($checkEmail >0){
            return false;
        }else{
            return true;
 }


        }




    public function checkMobile(RegisterRequest $request)

    {
        $data=$request->all();
        $checkMobile = User::where('mobile',$data['mobile'])->count();


        if($checkMobile >0){
            return false;
        }else{
            return true;
 }


        }

    }




