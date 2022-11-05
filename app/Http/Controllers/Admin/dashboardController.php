<?php

namespace App\Http\Controllers\Admin;
use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Order;
use Carbon\Carbon;
use App\Models\Vendor;
use App\User;
use App\Models\Notification;

class dashboardController extends Controller
{
    public function index(){
//start pie chart
         $data = DB::table('users')
           ->select(
            DB::raw('gender as gender'),
            DB::raw('count(*) as number'))
           ->groupBy('gender')
           ->get();
         $array[] = ['Gender', 'Number'];
         foreach($data as $key => $value)
         {
          $array[++$key] = [$value->gender, $value->number];
         }


//end of the pie chart


//start area chart
$order=Order::select('id','created_at')->get()->groupBy(
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


//end area chart
//start bar chart
$Orders=Order::select('city')->get()->groupBy('city');


 $city=[];
 $orderCount=[];

 foreach($Orders as $cities=>$values)
 {
 $city[]=$cities;
 $orderCount[]=count($values);

 }

//end bar chart

//strat latest user
$users=User::latest()->take(8)->get();

//end of the latest user


//return all vendor

$allVendor=Vendor::select()->get();

//Notification

$notification=Notification::select()->where('type','admin')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','admin')->where('active',0)->get()->count();


//message

$messageCount=Message::select()->where('type','vendor')->get()->count();

 $message=Message::select()->where('type','vendor')->get();


        return view('admin.Dashboard',['messageCount'=>$messageCount,'message'=>$message,'notificationCount'=>$notificationCount,'notification'=>$notification,'users'=>$users,'gender'=>json_encode($array),'order'=>$order,'months'=>$months,'monthCount'=>$monthCount,'city'=>$city,'orderCount'=>$orderCount,'allVendor'=>$allVendor]);
    }






public function active(){

    Notification::update(['active'=>1]);

    return view('admin.Dashboard');

}

























}
