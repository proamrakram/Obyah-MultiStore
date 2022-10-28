<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use App\Models\Setting;
use DB;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('AdminPanel.Settings.index');
  }
  
  
  public function general()
  {
    
    return view('AdminPanel.Settings.general')->with('store_name_ar', Setting::where('key','store_name_ar')->first()->value)
                                              ->with('store_name_en', Setting::where('key','store_name_en')->first()->value)
                                              ->with('store_details_ar', Setting::where('key','store_details_ar')->first()->value)
                                              ->with('store_details_en', Setting::where('key','store_details_en')->first()->value)
                                              ->with('store_address_ar', Setting::where('key','store_address_ar')->first()->value)
                                              ->with('store_address_en', Setting::where('key','store_address_en')->first()->value)
                                              ->with('logo', asset('storage/images/setting') . '/' . Setting::where('key','logo')->first()->value);
                                            }
  

  public function  update_general(Request $request)
  {
    $this->validate($request, [
      'store_name_ar' => 'required|string|max:255',
      'store_name_en' => 'required|string|max:255',
      'store_details_ar' => 'required|string',
      'store_details_en' => 'required|string',
      'store_address_ar' => 'required|string|max:255',
      'store_address_en' => 'required|string|max:255',
      'logo' => 'nullable',
    ]);

    return $this->update($request);
  }
 



  public function update($request)
  {

    foreach($request->all() as $key => $input)
        {
          if($key == 'logo')
            {
              $i = $input->store('images/setting', 'public');
              $input = $input->hashName();
            }

            Setting::updateOrCreate([
              'key'=>$key
            ],[
                'value' => $input
            ]);
        }


    session()->flash('success', 'تم تعديل البيانات بنجاح');
    return redirect()->back();
  }


  
 
}
