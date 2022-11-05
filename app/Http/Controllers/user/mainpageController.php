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
use App\Models\Order;
use App\Models\Notification;
use App\Http\Requests\user\Addcart;
use App\Http\Requests\user\searchRequest;
use Session;
use Auth;
use DB;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Stripe\Error\Card;
use Illuminate\Http\Request;
Use Alert;
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
            $session_id = Session::getId();
            $productcountaddcart=Cart::where('session_id',$session_id)->count();
            $subcategories=SubCategory::selection()->active()->get();
            $maincategories = MainCategory::where('translation_of', 0)->active()->get();
            $products=Product::where('active',1)->orderBy('id','DESC')->selection()->paginate(PAGINATION_COUNT);
            $productCount=Product::count();
            $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
        return view('user.mainPage', compact('vendors','productcountaddcart','products','maincategories','subcategories','productCount'));

        }
        public function mainpage() {
            $subcategories=SubCategory::selection()->active()->get();
            $maincategories = MainCategory::where('translation_of', 0)->active()->get();
            $products=Product::where('active',1)->orderBy('id','DESC')->selection()->paginate(PAGINATION_COUNT);

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
    $products=Product::where('discount','>=',0)->active()->selection()->paginate(PAGINATION_COUNT);



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

//==================category product
public function category_product($categoryID)
{

    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();
    $products=Product::where('category_id',$categoryID)->selection()->get();
    $productCount=Product::count();
    $Newproducts=Product::latest()->take(3)->selection()->get();
    $Trendproducts=Product::orderBy('price', 'DESC')->selection()->paginate(3);
    //$relateproducts=Product::where('vendor_id',$products->vendor->id)->where('category_id',$products->subcategory->id)->selection()->paginate(5);
    $category=SubCategory::selection()->active()->get()->find($categoryID);


    if (!$category)
        return redirect()->route('user.mainpage')->with(['error' => 'هذا القسم غير موجود ']);




     return view('user.category_product', compact('vendors','productcountaddcart','products','productCount','maincategories','Trendproducts','subcategories','productCount','Newproducts'));


}
//=================add cart to database

public function Addtocart(Addcart $request)
{


if($_SERVER['REQUEST_METHOD'] == 'POST'){

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
            return redirect()->route('mainpage.viewAddtocart')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
            DB::rollback();
        }

    }else{
        return redirect()->route('mainpage.viewAddtocart');
    }

}
//==============================delete product


public function destroy($id)
{

    try {
        $cart = Cart::find($id);
        echo $cart;
        if (!$cart)
            return redirect()->route('mainpage.viewAddtocart')->with(['error' => 'هذا المنتج غير موجود ']);


        $cart->delete();
        Alert::success('Delete Item', 'delete item done');
        return redirect()->route('mainpage.viewAddtocart')->with(['success' => 'تم حذف المنتج بنجاح']);

    } catch (\Exception $ex) {
        return redirect()->route('mainpage.viewAddtocart')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    }
}
//==============================select product

public function viewAddtocart()
{

    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    $subcategories=SubCategory::selection()->active()->get();
    $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();

    $productCount=Product::count();
    $products=Product::selection();


   $cart= Cart::where('user_id',Auth::user()->id)->Selection()->get();
return view('user.viewaddcart', compact('cart','vendors','productcountaddcart','products','maincategories','subcategories','productCount'));

}

/////=================================================payment check cart


public function checkOut($amount,$details,$sum_quantity){


    if($amount>=1){

        $user_id = Auth::user()->id;
        $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
        $subcategories=SubCategory::selection()->active()->get();
        $productcountaddcart=Cart::where('user_id',$user_id)->count();
        $maincategories = MainCategory::where('translation_of', 0)->active()->get();
        $productCount=Product::count();
        $products=Product::selection();
        $cart= Cart::where('user_id',$user_id)->selection()->get();
        return view('user.checkout',compact('amount','details','sum_quantity','cart','vendors','productcountaddcart','products','maincategories','subcategories','productCount'));
    }
    else{
        $user_id = Auth::user()->id;
        $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
        $subcategories=SubCategory::selection()->active()->get();
        $productcountaddcart=Cart::where('user_id',$user_id)->count();
        $maincategories = MainCategory::where('translation_of', 0)->active()->get();
        $productCount=Product::count();
        $products=Product::selection();
        $cart= Cart::where('user_id',$user_id)->selection()->get();
    Alert::error('payment faild', 'please select item ');
return view('user.viewaddcart',compact('amount','cart','vendors','productcountaddcart','products','maincategories','subcategories','productCount'));
    }
}
//======================================================================
public function charge(Request $request) {
// save in order table
if($_SERVER['REQUEST_METHOD'] == 'POST'){
Order::create([
'user_id'=>Auth::user()->id,
'total_price'=> $request->amount,
'quantity'=> $request->sum_quantity,
'details'=>$request->details,
'city'=>Auth::user()->city,
'number_order'=>random_int(1,200000)
]);

$userPhoto=Auth::guard()->user()->photo;
$userName=Auth::guard()->user()->name;

        //notification
        Notification::create(['photo'=>$userPhoto,'userName'=>$userName,
        'notification'=>" تم اتمام طلبية جديدة " ,'type'=>'vendor']);


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

         $cart = Cart::where('user_id',Auth::user()->id);
         $cart->delete();
         Alert::success('success Item', 'payment item done');
      return redirect()->route('mainpage.viewAddtocart');
     } else {
        Alert::error('payment faild', 'please select item ');
        return redirect()->route('mainpage.viewAddtocart');
     }
    }






    else{
        return redirect()->route('mainpage.viewAddtocart');

    }
 }


public function order(){



        $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
        $subcategories=SubCategory::selection()->active()->get();
        $productcountaddcart=Cart::where('user_id',Auth::user()->id)->count();
        $maincategories = MainCategory::where('translation_of', 0)->active()->get();

        $productCount=Product::count();
        $products=Product::selection();


       $order= Order::where('user_id',Auth::user()->id)->Selection()->get();
    return view('user.order', compact('order','vendors','productcountaddcart','products','maincategories','subcategories','productCount'));



}

public function orderDestroy($id)
{

    try {
        $order =Order::find($id);

        if (!$order)
            return redirect()->route('user.order')->with(['error' => 'هذا الطلب غير موجود ']);


        $order->delete();
        Alert::success('Delete Order', 'Order Deletd Done');
        return redirect()->route('user.order')->with(['success' => 'تم حذف الطلب بنجاح']);

    } catch (\Exception $ex) {
        return redirect()->route('user.order')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    }
}


public function search(searchRequest $request){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $search=$request->search;
    $id_category=$request->id_category;

    $products=Product::where('category_id',$id_category)->where('active','1')->where('title','like','%'.$search.'%' )->selection()->get();

    $subcategories=SubCategory::selection()->active()->get();
    $maincategories = MainCategory::where('translation_of', 0)->active()->get();


    $productCount=Product::count();
    $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
    if($products){
return view('user.search', compact('vendors','products','maincategories','subcategories','productCount'));
    }else{
        Alert::success('NOT FOUND', 'لا يوجد منتجات بهذا الاسم');
        return view('user.search', compact('vendors','products','maincategories','subcategories','productCount'));
    }

 }
 else{

  return view('user.search', compact('vendors','products','maincategories','subcategories','productCount'));
 }
}


}//end of class


