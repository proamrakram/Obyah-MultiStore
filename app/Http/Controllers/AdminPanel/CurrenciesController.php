<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use App\Models\Currency;
use DB;
use App\Http\Controllers\Controller;

class CurrenciesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $currencies = Currency::where('is_delete',0)->paginate(10);
    return view('AdminPanel.currencies.index')->with('currencies', $currencies);
  }

  
  public function create()
  {
    return view('AdminPanel.currencies.create');
  }


  public function store(Request $request)
  {
    $this->validate($request,[
        'currency_name_en' => 'required|string|max:255',
        'currency_name_ar' => 'required|string|max:255',
        'currency_symbol' => 'required|string|max:255',
        'currency_code' => 'required|string|max:255',
    ]);

    $currency = Currency::create([
      'currency_name_en'=>$request->currency_name_en,
      'currency_name_ar'=>$request->currency_name_ar,
      'currency_symbol'=>$request->currency_symbol,
      'currency_code'=>$request->currency_code,
    ]);
    

    session()->flash('success', 'تم اضافة العملة  بنجاح');
    return redirect()->route('admin.currencies.index');
  }

  public function edit($id)
  {
    $currency = Currency::find($id);
    if(is_null($currency)) {
      session()->flash('error', 'العملة غير موجودة');
      return redirect()->back();
    }
    
    return view('AdminPanel.currencies.edit')->with('currency', $currency);
  }

  public function update(Request $request, $id)
  {
    
    $currency = Currency::find($id);
    if (is_null($currency)) {
      session()->flash('error', 'العملة غير موجودة');
      return redirect()->back();
    }
      
    $this->validate($request,[
      'currency_name_en' => 'required|string|max:255',
      'currency_name_ar' => 'required|string|max:255',
      'currency_symbol' => 'required|string|max:255',
      'currency_code' => 'required|string|max:255',
  ]);

    //dd($request->permissions);


    $currency->update([
      'currency_name_en'=>$request->currency_name_en,
      'currency_name_ar'=>$request->currency_name_ar,
      'currency_symbol'=>$request->currency_symbol,
      'currency_code'=>$request->currency_code,
    ]);

    session()->flash('success', 'تم تعديل بيانات العملة  بنجاح');
    return redirect()->route('admin.currencies.index');
  }

  public function destroy($id)
  {

      
    $currency = Currency::find($id);
    if (is_null($currency)) {
      session()->flash('error', 'العملة غير موجودة');
      return redirect()->back();
    }

    $currency->is_delete = 1;
    $currency->save();
    session()->flash('success', 'تم حذف العملة بنجاح');
    return redirect()->back();
  }
}
