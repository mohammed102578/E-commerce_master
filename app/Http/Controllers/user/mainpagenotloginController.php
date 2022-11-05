<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Cart;
use App\Models\MainCategory;
use App\Http\Requests\user\Addcart;
use Session;
use DB;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Stripe\Error\Card;







class mainpagenotloginController extends Controller
{



        public function index() {
            $session_id = Session::getId();
            $productcountaddcart=Cart::where('session_id',$session_id)->count();
            $subcategories=SubCategory::selection()->active()->get();
            $maincategories = MainCategory::where('translation_of', 0)->active()->get();
            $products=Product::orderBy('id','DESC')->selection()->paginate(PAGINATION_COUNT);
            $productCount=Product::count();
            $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
        return view('userNotlogin.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));

        }

        public function home() {
            $session_id = Session::getId();
            $productcountaddcart=Cart::where('session_id',$session_id)->count();
            $subcategories=SubCategory::selection()->active()->get();
            $maincategories = MainCategory::where('translation_of', 0)->active()->get();
            $products=Product::orderBy('id','DESC')->selection()->paginate(PAGINATION_COUNT);
            $productCount=Product::count();
            $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
        return view('userNotlogin.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));

        }







public function product_discount()
{
    $session_id = Session::getId();
    $productcountaddcart=Cart::where('session_id',$session_id)->count();
    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();
    $productCount=Product::count(); $productCount=Product::count();
    $products=Product::where('discount','>=',0)->selection()->paginate(PAGINATION_COUNT);



     return view('userNotlogin.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));
}


public function product_new()
{
    $session_id = Session::getId();
    $productcountaddcart=Cart::where('session_id',$session_id)->count();
    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();
    $productCount=Product::count();;

    $products=Product::latest()->take(10)->selection()->paginate(PAGINATION_COUNT);
     return view('userNotlogin.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));

}


public function product_low()
{
    $session_id = Session::getId();
    $productcountaddcart=Cart::where('session_id',$session_id)->count();
    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();
    $productCount=Product::count();
    $products=Product::orderBy('price', 'ASC')->selection()->paginate(PAGINATION_COUNT);
     return view('userNotlogin.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));



}


public function product_high()
{
    $session_id = Session::getId();
    $productcountaddcart=Cart::where('session_id',$session_id)->count();
    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();
    $productCount=Product::count();
    $products=Product::orderBy('price', 'DESC')->selection()->paginate(PAGINATION_COUNT);
     return view('userNotlogin.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));


}


public function product_page($product_id)
{
    $session_id = Session::getId();
    $productcountaddcart=Cart::where('session_id',$session_id)->count();
    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();
    $productCount=Product::count();
    $products=Product::selection()->find($product_id);
    $Newproducts=Product::latest()->take(3)->selection()->get();
    $Trendproducts=Product::orderBy('price', 'DESC')->selection()->paginate(3);
    $relateproducts=Product::where('vendor_id',$products->vendor->id)->where('category_id',$products->subcategory->id)->selection()->paginate(5);



    if (!$product_id)
        return redirect()->route('userNotlogin.mainPage')->with(['error' => 'هذا المنتج غير موجود ']);




     return view('userNotlogin.productpage', compact('vendors','productcountaddcart','products','maincategories','relateproducts','Trendproducts','subcategories','productCount','Newproducts'));


}



public function Addtocart(Addcart $request)
{


    $session_id = Session::getId();
    $productcountaddcart=Cart::where('session_id',$session_id)->count();
    $checkcart=Cart::where('session_id',$session_id )->where('product_id',$request['product_id'])->count();
    $checkstock=Product::where('id',$request['product_id'])->where('stock','>=',$request->quantity)->count();


    try{
if($checkcart===0){

if($checkstock==1){



    DB::beginTransaction();
         $Cart=Cart::create([
            'session_id' => $session_id ,
            'product_id' => $request['product_id'],
            'color' => $request['color'],
            'quantity' => $request['quantity']
         ]);


         DB::commit();

         return redirect()->route('mainpagenotlogin.viewAddtocart')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);




}//end of the if $check==1

else
{

    return  redirect()->back()->with(['error' => 'الكمية المتوفرة في المتجر غير كافي لطلبك']);

}


}//end of the if $check==0


else{
    return  redirect()->back()->with(['error' => 'هذا المنتج تم اضافته من قبل']);


}

        } //end of the try


        catch (\Exception $ex) {
            return $ex;
            return redirect()->route('mainpagenotlogin.Addtocart')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
            DB::rollback();
        }



}


public function viewAddtocart()
{
$session_id = Session::getId();
$vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
$subcategories=SubCategory::selection()->active()->get();
$productcountaddcart=Cart::where('session_id',$session_id)->count();
$maincategories = MainCategory::where('translation_of', 0)->active()->get();

$productCount=Product::count();
$products=Product::selection();


 $cart= Cart::where('session_id',$session_id)->selection()->get();


return view('userNotlogin.viewaddcart', compact('cart','vendors','productcountaddcart','products','maincategories','subcategories','productCount'));

}



//================================================================================================




public function destroy($id)
{

    try {
        $cart = Cart::find($id);
        echo $cart;
        if (!$cart)
            return redirect()->route('mainpagenotlogin.viewAddtocart')->with(['error' => 'هذا المنتج غير موجود ']);


        $cart->delete();
        return redirect()->route('mainpagenotlogin.viewAddtocart')->with(['success' => 'تم حذف المنتج بنجاح']);

    } catch (\Exception $ex) {
        return redirect()->route('mainpagenotlogin.viewAddtocart')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    }
}







//======================================================================
public function checkCart($amount){
    $session_id = Session::getId();
    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $productcountaddcart=Cart::where('session_id',$session_id)->count();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();
    $productCount=Product::count();
    $products=Product::selection();


     $cart= Cart::where('session_id',$session_id)->selection()->get();
    return view('user.checkout',compact('amount','cart','vendors','productcountaddcart','products','maincategories','subcategories','productCount'));
}
//======================================================================


    public function charge(Request $request) {

       //return dd($request->stripeToken);

        $charge = Stripe::charges()->create([
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'amount'   => $request->amount,
            'description' => ' Test from laravel new app'
        ]);

        $chargeId = $charge['id'];

        if ($chargeId) {
            // save order in orders table ...
            // clearn cart

            session()->forget('cart');
            return redirect()->route('mainpagenotlogin.viewAddtocart')->with('success', " Payment was done. Thanks");
        } else {
            return redirect()->back();
        }
    }





}


