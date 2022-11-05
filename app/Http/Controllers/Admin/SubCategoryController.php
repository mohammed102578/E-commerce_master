<?php
namespace App\Http\Controllers\Admin;

;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use DB;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Vendor;
use Illuminate\Support\Str;
class SubCategoryController extends Controller
{
    public function index(){


//message
$messageCount=Message::select()->where('type','vendor')->get()->count();

 $message=Message::select()->where('type','vendor')->get();



 //Notification

 $notification=Notification::select()->where('type','admin')->where('active',0)->get();


 $notificationCount=Notification::select()->where('type','admin')->where('active',0)->get()->count();

    //return all vendor

    $allVendor=Vendor::select()->get();
        $categories=SubCategory::selection()->get();
        return view('admin.SubCategory.index',compact('categories','allVendor','message','messageCount','notification','notificationCount'));
    }

public function create(){


//message
$messageCount=Message::select()->where('type','vendor')->get()->count();

 $message=Message::select()->where('type','vendor')->get();



 //Notification

 $notification=Notification::select()->where('type','admin')->where('active',0)->get();


 $notificationCount=Notification::select()->where('type','admin')->where('active',0)->get()->count();

        //return all vendor

$allVendor=Vendor::select()->get();
    $categories = MainCategory::where('translation_of', 0)->active()->get();
    return view("admin.SubCategory.create",compact('categories','allVendor','message','messageCount','notification','notificationCount'));
}



public function store(SubCategoryRequest $request)
{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try {

        if (!$request->has('active'))
            $request->request->add(['active' => 0]);
        else
            $request->request->add(['active' => 1]);

        $filePath = "";

        if ($request->has('photo')) {
            $filePath = uploadImage($request->photo,'subcategory');
        }






        $subCategory = SubCategory::create([
            'name' => $request->name,
            'active' => $request->active,
            'photo' => $filePath,
            'main_category_id' => $request->category_id,

        ]);


        return redirect()->route('admin.SubCategory')->with(['success' => 'تم الحفظ بنجاح']);

    } catch (\Exception $ex) {
        return $ex;
        return redirect()->route('admin.SubCategory')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

    }
}else{
    return redirect()->route('admin.SubCategory');
}
}

public function edit($id)
{
    try {

//message
$messageCount=Message::select()->where('type','vendor')->get()->count();

 $message=Message::select()->where('type','vendor')->get();



 //Notification

 $notification=Notification::select()->where('type','admin')->where('active',0)->get();


 $notificationCount=Notification::select()->where('type','admin')->where('active',0)->get()->count();



            //return all vendor

$allVendor=Vendor::select()->get();
        $maincategories =MainCategory::where('translation_of', 0)->active()->get();

        $subcategory = SubCategory::selection()->find($id);
        if (!$subcategory)
            return redirect()->route('admin.vendors')->with(['error' => 'هذا  القسم غير موجود او ربما يكون محذوفا ']);



        return view('admin.SubCategory.edit', compact('subcategory', 'maincategories','allVendor','message','messageCount','notification','notificationCount'));

    } catch (\Exception $exception) {
        return redirect()->route('admin.SubCategory')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    }
}


public function update($id,SubCategoryRequest $request)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {

            $subcategory = SubCategory::selection()->find($id);
            if (!$subcategory)
            return redirect()->route('admin.SubCategory')->with(['error' => 'هذا  القسم غير موجود او ربما يكون محذوفا ']);


            DB::beginTransaction();
            //photo
           if ($request->has('photo') ) {


                $filePath = uploadImage($request->photo,'subcategory');
                SubCategory::where('id', $id)
                    ->update([
                      'photo' => $filePath,

                    ]);
           }


            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

             $data = $request->except('_token', 'id', 'photo');




            SubCategory::where('id', $id)
                ->update([
                    'active' => $request->active,
                    'name' => $request->name,
                    'main_category_id' => $request->category_id
                ]
                );

            DB::commit();
            return redirect()->route('admin.SubCategory')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('admin.SubCategory')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }else{
        return redirect()->route('admin.SubCategory');
    }
    }


public function changeStatus($id){
    $subcategory = SubCategory::selection()->find($id);
            if (!$subcategory)
            return redirect()->route('admin.SubCategory')->with(['error' => 'هذا  القسم غير موجود او ربما يكون محذوفا ']);



                $active = $subcategory->active;
   if ($active==1){
    $subcategory->update([
        'active' => "0",
    ]);
    }else{
        $subcategory->update([
                        'active' => "1",
                    ]);
    }
    return redirect()->route('admin.SubCategory');

}


public function destroy($id){

    $subcategory = SubCategory::selection()->find($id);
            if (!$subcategory)
            return redirect()->route('admin.SubCategory')->with(['error' => 'هذا  القسم غير موجود او ربما يكون محذوفا ']);


            $subcategory->delete($id);

        return redirect()->route('admin.SubCategory')->with(['success' => 'تم الحذف بنجاح']);


}


}
?>
