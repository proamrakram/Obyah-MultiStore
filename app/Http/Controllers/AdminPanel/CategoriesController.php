<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use App\Models\ProductCategory;
use DB;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $categories = ProductCategory::where('is_delete',0)->paginate(10);
    return view('AdminPanel.categories.index')->with('categories', $categories);
  }

  
  public function create()
  {
    $categories = ProductCategory::where('status', 'active')->where('parent_id',0)->where('is_delete',0)->get();
    return view('AdminPanel.categories.create')->with('categories', $categories);
  }


  public function store(Request $request)
  {
    $this->validate($request,[
        'category_name_en' => 'required|string|max:255',
        'category_name_ar' => 'required|string|max:255',
        'type' => 'required|in:category,subcategory',
        'parent_id' => 'required_if:type,subcategory|numeric|exists:product_categories,id',
    ]);

    if($request->type == 'category'){

      $parent_id = 0;
    }else{
  $parent_id = $request->parent_id;
    }

    $category = ProductCategory::create([
      'category_name_en'=>$request->category_name_en,
      'category_name_ar'=>$request->category_name_ar,
      'status'=>'active',
      'parent_id'=>$parent_id,
    ]);
    

    session()->flash('success', 'تم اضافة التصنيفات  بنجاح');
    return redirect()->route('admin.categories.index');
  }

  public function edit($id)
  {
    $category = ProductCategory::find($id);
    if(is_null($category) || $category->is_delete == 1) {
      session()->flash('error', 'التصنيف غير موجودة');
      return redirect()->back();
    }
    $categories = ProductCategory::where('status', 'active')->where('parent_id',0)->where('is_delete',0)->get();
    
    return view('AdminPanel.categories.edit')->with('category', $category)->with('categories', $categories);
  }

  public function update(Request $request, $id)
  {
    
    $category = ProductCategory::find($id);
    if (is_null($category)  || $category->is_delete == 1) {
      session()->flash('error', 'التصنيف غير موجودة');
      return redirect()->back();
    }
      
    $this->validate($request,[
      'category_name_en' => 'required|string|max:255',
      'category_name_ar' => 'required|string|max:255',
      'type' => 'required|in:category,subcategory',
      'parent_id' => 'nullable|numeric|exists:product_categories,id',
  ]);

  if($request->type == 'category'){

    $parent_id = 0;
  }else{
    
  $this->validate($request,[
    'parent_id' => 'required',
]);
$parent_id = $request->parent_id;
  }
    //dd($request->permissions);


    $category->update([
      'category_name_en'=>$request->category_name_en,
      'category_name_ar'=>$request->category_name_ar,
      'parent_id'=>$parent_id,
    ]);

    session()->flash('success', 'تم تعديل بيانات التصنيف  بنجاح');
    return redirect()->route('admin.categories.index');
  }

  public function destroy($id)
  {

      
    $category = ProductCategory::find($id);
    if (is_null($category)  || $category->is_delete == 1) {
      session()->flash('error', 'التصنيف غير موجودة');
      return redirect()->back();
    }

    $category->is_delete = 1;
    $category->save();
    session()->flash('success', 'تم حذف التصنيف بنجاح');
    return redirect()->back();
  }

  
  public function change_status($id)
  {
    $category = ProductCategory::find($id);
    if (is_null($category)  || $category->is_delete == 1) {
      session()->flash('error', 'التصنيف غير موجود');
      return redirect()->back();
    }
    if($category->status == 'active'){
      $category->status ='inactive';
    }else{
      $category->status ='active';
    }
    $category->save();
    session()->flash('success', 'تم تغيير حالة التصنيف بنجاح');
    return redirect()->back();
  }
}
