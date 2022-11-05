<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\Vendor;
use App\Models\Message;
use App\User;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{


    public function index(){

        $vendorCity=Auth::guard('vendor')->user()->city;

        //start pie chart

                 $data = DB::table('users')
                   ->select(
                    DB::raw('gender as gender'),
                    DB::raw('count(*) as number'))
                    ->where('city', $vendorCity)
                   ->groupBy('gender')
                   ->get();
                 $array[] = ['Gender', 'Number'];
                 foreach($data as $key => $value)
                 {
                  $array[++$key] = [$value->gender, $value->number];
                 }


        //end of the pie chart


        //start area chart
        $order=Order::select('id','created_at') ->where('city', $vendorCity)->get()->groupBy(
            function($order){
            return Carbon::parse($order->created_at)->format('M');
        }

        );


        $months=[];
        $monthCount=[];

                foreach($order as $month => $values){
                     $months[]=$month;
                    $monthCount[]=count($values);
                }

 $monthCount;
        //end area chart


        //start bar chart


$productOrder=Product::select('stock','title') ->where('vendor_id', Auth::guard('vendor')->user()->id)->where('stock','<',10)->get();

$min;

    foreach($productOrder as $productMin){


        $min[]=array( $productMin->stock=>$productMin->title);


}



$stock1=[];
$product1=[];
 foreach($min as $key=>$value){
foreach($value as $stock=>$product){
    $stock1[]=$stock;
    $product1[]=$product;
}
 }


        //end bar chart




        //strat latest user
        $users=User::latest()->take(8)->where('city', $vendorCity)->get();
        //end of the latest user

//start total all price

$total_price=Order::select('total_price')->where('city', $vendorCity)->get();

$total_product_price=[];
foreach($total_price as $total_prices){
    $total_product_price[]=$total_prices->total_price;

}


//end all price









//Notification

$notification=Notification::select()->where('type','vendor')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','vendor')->where('active',0)->get()->count();


//message

$messageCount=Message::select()->where('type','admin')->get()->count();

 $message=Message::select()->where('type','admin')->get();




                return view('vendor.Dashboard',['message'=>$message,'messageCount'=>$messageCount,'total_product_price'=> array_sum( $total_product_price),'users'=>$users,'gender'=>json_encode($array),'order'=>$order,'months'=>$months,'monthCount'=>$monthCount,'product'=>$product1,'stock'=>$stock1,'notification'=>$notification,'notificationCount'=>$notificationCount]);
        }
}
