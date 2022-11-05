<?php
namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\vendor\ProductRequest;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\MainCategory;
use App\Models\Order;
use App\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use DB;
use App\Models\Message;
use Auth;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index(){



//message

$messageCount=Message::select()->where('type','admin')->get()->count();

 $message=Message::select()->where('type','admin')->get();





//Notification

$notification=Notification::select()->where('type','vendor')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','vendor')->where('active',0)->get()->count();





        $subcategories=SubCategory::selection()->get();

        $products=Product::selection()->where('vendor_id',Auth::guard('vendor')->user()-> id)->get();



        return view('vendor.product.index',compact('message','messageCount','products','subcategories' ,'notificationCount','notificationCount'));

    }

public function create(){



//message

$messageCount=Message::select()->where('type','admin')->get()->count();

 $message=Message::select()->where('type','admin')->get();





//Notification

$notification=Notification::select()->where('type','vendor')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','vendor')->where('active',0)->get()->count();






    $subcategories=SubCategory::selection()->get();
    return view("vendor.product.create",compact('message','messageCount','subcategories' ,'notification','notificationCount'));
}



public function store(ProductRequest $request)
{

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

    try {
        if($request->hasfile('photo'))
        {

            foreach($request->file('photo') as $image)
            {

                $name=$image->getClientOriginalName();
                $file_name ="images/Product/".time().$name;
                $path = "assets/images/".'Product';
                $image-> move($path,$file_name);
                $name_photo[]= $file_name;
 }

 $photo=implode(',',$name_photo);

        }


 $Product = Product::create([
    'title' => $request->title,
    'active' => $request->active,
    'photo' => $photo,
    'description' => $request->description,
    'price' => $request->price,
    'stock' => $request->stock,
    'discount' => $request->discount,
    'category_id' => $request->category_id,
    'vendor_id' => $request->vendor_id,

]);


        if (!$request->has('active'))
            $request->request->add(['active' => 0]);
        else
            $request->request->add(['active' => 1]);
//notification
Notification::create(['photo'=>$vendorPhoto,'userName'=>   $vendorName,
'notification'=>"تم اضافة منتج جديد  " ,'type'=>'admin']);



        return redirect()->route('vendor.Product')->with(['success' => 'تم الحفظ بنجاح']);

    } catch (\Exception $ex) {
        return $ex;
        return redirect()->route('vendor.Product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

    }
}else{
    return redirect()->route('vendor.Product');
}
}

public function edit($id)
{




//message

$messageCount=Message::select()->where('type','admin')->get()->count();

 $message=Message::select()->where('type','admin')->get();





//Notification

$notification=Notification::select()->where('type','vendor')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','vendor')->where('active',0)->get()->count();




        $subcategories=SubCategory::selection()->active()->get();

        $product = Product::selection()->find($id);
        if (!$product)
            return redirect()->route('vendor.Product')->with(['error' => 'هذا  المنتج غير موجود او ربما يكون محذوفا ']);



        return view('vendor.product.edit', compact('message','messageCount','product', 'subcategories' ,'notificationCount','notification'));


        return redirect()->route('vendor.Product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

}


public function update($id,ProductRequest $request)
    {





        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        try {

return $request->id;


            $Product = Product::selection()->find($id);
            if (!$Product)
            return redirect()->route('vendor.Product')->with(['error' => 'هذا  المنتج غير موجود او ربما يكون محذوفا ']);


            DB::beginTransaction();
            //photo


            if($request->hasfile('photo'))
            {

                foreach($request->file('photo') as $image)
                {

                    $name=$image->getClientOriginalName();
                    $file_name ="images/Product/".time().$name;
                    $path = "assets/images/".'Product';
                    $image-> move($path,$file_name);
                    $name_photo[]= $file_name;

     }

     $photo=implode(',',$name_photo);
     Product::where('id', $id)
     ->update([
     'photo' => $photo
     ]);
            }



            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

             $data = $request->except('_token', 'id', 'photo');



            Product::where('id', $id)
                ->update([

            'title' => $request->title,
            'active' => $request->active,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'discount' => $request->discount,
            'category_id' => $request->category_id,

                ]
                );

            DB::commit();
            return redirect()->route('vendor.Product')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('vendor.Product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }else{
        return redirect()->route('vendor.Product');
    }
    }


public function changeStatus($id){
    $Product = Product::selection()->find($id);
            if (!$Product)
            return redirect()->route('vendor.Product')->with(['error' => 'هذا  المنتج غير موجود او ربما يكون محذوفا ']);



                $active = $Product->active;
   if ($active==1){
    $Product->update([
        'active' => "0",
    ]);
    }else{
        $Product->update([
                        'active' => "1",
                    ]);
    }
    return redirect()->route('vendor.Product');

}


public function destroy($id){

    $Product = Product::selection()->find($id);
            if (!$Product)
            return redirect()->route('vendor.Product')->with(['error' => 'هذا  المنتج غير موجود او ربما يكون محذوفا ']);


            $Product->delete($id);
//notification
Notification::create(['photo'=>$vendorPhoto,'userName'=>   $vendorName,
'notification'=>"تم حذف منتج  " ,'type'=>'admin']);


        return redirect()->route('vendor.Product')->with(['success' => 'تم الحذف بنجاح']);


}



public function order(){


//message

$messageCount=Message::select()->where('type','admin')->get()->count();

 $message=Message::select()->where('type','admin')->get();





//Notification

$notification=Notification::select()->where('type','vendor')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','vendor')->where('active',0)->get()->count();




  $order= Order::where('city',Auth::guard('vendor')->user()->city)->Selection()->get();


return view('vendor.product.order',compact('message','messageCount','order','notificationCount','notification'));


}











public function changeRecieve($id){





  $Order_ID=Order::selection()->find($id);
  $recieve=$Order_ID->recieve;
if ($recieve==1){
    $Order_ID->update([
        'recieve' => "0",
    ]);
    }else{
        $Order_ID->update([
                        'recieve' => "1",
                    ]);
    }

//message

$messageCount=Message::select()->where('type','admin')->get()->count();

 $message=Message::select()->where('type','admin')->get();





//Notification

$notification=Notification::select()->where('type','vendor')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','vendor')->where('active',0)->get()->count();




    $order= Order::where('city',Auth::guard('vendor')->user()->city)->Selection()->get();
    return view('vendor.product.order',compact('message','messageCount','order','notificationCount','notification'));

  }





}
?>
