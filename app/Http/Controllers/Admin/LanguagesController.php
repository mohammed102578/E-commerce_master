<?php

namespace App\Http\Controllers\Admin;
use App\Models\Message;
use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\language;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Notification;
class LanguagesController extends Controller
{
    public function index(){

//return all vendor

$allVendor=Vendor::select()->get();

        $languages = language::select()->paginate(PAGINATION_COUNT);


//message
$messageCount=Message::select()->where('type','vendor')->get()->count();

 $message=Message::select()->where('type','vendor')->get();




        //Notification

$notification=Notification::select()->where('type','admin')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','admin')->where('active',0)->get()->count();
        return view('admin.languages.index', compact('languages','allVendor', 'message','messageCount','notification','notificationCount'));

    }


    public function create()
    {



//message
$messageCount=Message::select()->where('type','vendor')->get()->count();

 $message=Message::select()->where('type','vendor')->get();




        //Notification

$notification=Notification::select()->where('type','admin')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','admin')->where('active',0)->get()->count();
//return all vendor

$allVendor=Vendor::select()->get();

        return view('admin.languages.create',compact('allVendor', 'message','messageCount','notification','notificationCount'));
    }

    public function store(LanguageRequest $request)
    {
        try {


            Language::create($request->except(['_token']));
            return redirect()->route('admin.languages')->with(['success' => 'تم حفظ اللغة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.languages')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function edit($id)
    {




//message
$messageCount=Message::select()->where('type','vendor')->get()->count();

 $message=Message::select()->where('type','vendor')->get();




        //Notification

$notification=Notification::select()->where('type','admin')->where('active',0)->get();


$notificationCount=Notification::select()->where('type','admin')->where('active',0)->get()->count();
//return all vendor

$allVendor=Vendor::select()->get();

        $language = Language::select()->find($id);
        if (!$language) {
            return redirect()->route('admin.languages')->with(['error' => 'هذه اللغة غير موجوده']);
        }

        return view('admin.languages.edit', compact('language','allVendor','notificationCount', 'message','messageCount','notification'));
    }

    public function update($id, LanguageRequest $request)
    {

        try {
            $language = Language::find($id);
            if (!$language) {
                return redirect()->route('admin.languages.edit', $id)->with(['error' => 'هذه اللغة غير موجوده']);
            }


            if (!$request->has('active'))
                $request->request->add(['active' => 0]);

            $language->update($request->except('_token'));

            return redirect()->route('admin.languages')->with(['success' => 'تم تحديث اللغة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.languages')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $language = Language::find($id);
            if (!$language) {
                return redirect()->route('admin.languages', $id)->with(['error' => 'هذه اللغة غير موجوده']);
            }
            $language->delete();

            return redirect()->route('admin.languages')->with(['success' => 'تم حذف اللغة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.languages')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
