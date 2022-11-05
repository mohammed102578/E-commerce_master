<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

use App\User;

use Mail;

use Hash;

use Illuminate\Support\Str;

use Session;
use App\Models\Cart;
use Redirect;
use App\Models\SubCategory;
use App\Models\MainCategory;
use App\Models\Vendor;
use App\Models\Product;

class ForgotPasswordController extends Controller

{

      /**

       * Write code on Method

       *

       * @return response()

       */





      public function showForgetPasswordForm()

      {
        $session_id = Session::getId();
        $productcountaddcart=Cart::where('user_id',$session_id)->count();
        $subcategories=SubCategory::selection()->get();
        $maincategories = MainCategory::where('translation_of', 0)->active()->get();
        $products=Product::selection()->paginate(PAGINATION_COUNT);
        $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
         return view('user.auth.forgetPassword',compact('vendors','productcountaddcart','products','subcategories','maincategories'));

      }



      /**

       * Write code on Method

       *

       * @return response()

       */

      public function submitForgetPasswordForm(Request $request)

      {

          $request->validate([

              'email' => 'required|email|exists:users',

          ]);



          $token = Str::random(64);



          DB::table('password_resets')->insert([

              'email' => $request->email,

              'token' => $token,

              'created_at' => Carbon::now()

            ]);



          Mail::send('user.email.forgetPassword', ['token' => $token], function($message) use($request){

              $message->to($request->email);

              $message->subject('Reset Password');

          });



          return back()->with('message', 'تم ارسال رابط اعادة كلمة السر الي بريدك الالكتروني');

      }

      /**

       * Write code on Method

       *

       * @return response()

       */

      public function showResetPasswordForm($token) {
        $session_id = Session::getId();
        $productcountaddcart=Cart::where('user_id',$session_id)->count();
        $subcategories=SubCategory::selection()->get();
        $maincategories = MainCategory::where('translation_of', 0)->active()->get();
        $products=Product::selection()->paginate(PAGINATION_COUNT);
        $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
         return view('user.auth.forgetPasswordLink', ['token' => $token],compact('vendors','productcountaddcart','products','subcategories','maincategories'));

      }



      /**

       * Write code on Method

       *

       * @return response()

       */

      public function submitResetPasswordForm(Request $request)

      {

          $request->validate([

              'email' => 'required|email|exists:users',

              'password' => 'required|string|min:6|confirmed',

              'password_confirmation' => 'required'

          ]);



          $updatePassword = DB::table('password_resets')

                              ->where([

                                'email' => $request->email,

                                'token' => $request->token

                              ])

                              ->first();



          if(!$updatePassword){

              return back()->withInput()->with('error', 'Invalid token!');

          }



          $user = User::where('email', $request->email)

                      ->update(['password' => Hash::make($request->password)]);



          DB::table('password_resets')->where(['email'=> $request->email])->delete();



          return redirect('/login')->with('message', 'Your password has been changed!');

      }

}
