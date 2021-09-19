<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\MainCategory;
use App\Models\Cart;
use App\Http\Requests\user\Addcart;
use Session;
use Auth;
use DB;
class mainpageController extends Controller
{



        public function index() {
            $subcategories=SubCategory::selection()->active()->get();
            $maincategories = MainCategory::where('translation_of', 0)->active()->get();
            $products=Product::orderBy('id','DESC')->selection()->paginate(PAGINATION_COUNT);

            $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();
            $productCount=Product::count();
            $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
        return view('user.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));

        }

        public function home() {
            $subcategories=SubCategory::selection()->active()->get();
            $maincategories = MainCategory::where('translation_of', 0)->active()->get();
            $products=Product::orderBy('id','DESC')->selection()->paginate(PAGINATION_COUNT);

            $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();
            $productCount=Product::count();
            $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
        return view('user.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));

        }







public function product_discount()
{
    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();

    $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();
    $productCount=Product::count();
    $productCount=Product::count();
    $products=Product::where('discount','>=',0)->selection()->paginate(PAGINATION_COUNT);



     return view('user.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));
}


public function product_new()
{
    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();

    $productCount=Product::count();;
    $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();

    $products=Product::latest()->take(10)->selection()->paginate(PAGINATION_COUNT);
     return view('user.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));

}


public function product_low()
{

    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();

    $productCount=Product::count();
    $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();
    $products=Product::orderBy('price', 'ASC')->selection()->paginate(PAGINATION_COUNT);
     return view('user.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));



}


public function product_high()
{
    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();

    $productCount=Product::count();
    $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();

    $products=Product::orderBy('price', 'DESC')->selection()->paginate(PAGINATION_COUNT);
     return view('user.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));


}


public function product_page($product_id)
{

    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();

    $productCount=Product::count();
    $products=Product::selection()->find($product_id);
    $Newproducts=Product::latest()->take(3)->selection()->get();
    $Trendproducts=Product::orderBy('price', 'DESC')->selection()->paginate(3);
    $relateproducts=Product::where('vendor_id',$products->vendor->id)->where('category_id',$products->subcategory->id)->selection()->paginate(5);



    if (!$product_id)
        return redirect()->route('user.mainpage')->with(['error' => 'هذا المنتج غير موجود ']);




     return view('user.productpage', compact('vendors','productcountaddcart','products','productCount','maincategories','relateproducts','Trendproducts','subcategories','productCount','Newproducts'));


}


public function Addtocart(Addcart $request)
{


    $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();
    $checkcart=Cart::where('user_id',$request->id_customization)->where('product_id',$request['product_id'])->count();
    $checkstock=Product::where('id',$request['product_id'])->where('stock','>=',$request->quantity)->count();


    try{
if($checkcart===0){

if($checkstock==1){

    $session_id = Session::getId();

    DB::beginTransaction();
         $Cart=Cart::create([
            'user_id' => $request->id_customization,
            'product_id' => $request['product_id'],
            'color' => $request['color'],
            'quantity' => $request['quantity']
         ]);


         DB::commit();

         return redirect()->route('mainpage.viewAddtocart')->with(['تم اضافة المنتج الى سلة المشتريات بنجاح']);;




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
            return redirect()->route('mainpagenotlogin.viewAddtocart')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
            DB::rollback();
        }



}



public function viewAddtocart()
{
    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();

    $productCount=Product::count();
    $products=Product::selection();


   $cart= Cart::where('user_id',Auth::user()->id);
return view('user.viewaddcart', compact('cart','vendors','productcountaddcart','products','maincategories','subcategories','productCount'));

}


}//end of class


