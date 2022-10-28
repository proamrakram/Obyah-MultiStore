<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $admins = User::where('is_delete',0)->where('user_type','store_employee')->whereNotIn('id',[1,auth()->user()->id])->orderBy('created_at', 'desc')->paginate(10);
    $roles = Role::where('type','store')->get();
    return view('Store.admins.index')->with('admins', $admins)->with('roles', $roles);
  }
  
  
  /*  public function search(Request $request)
    {
        
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $data = User::where('id', '!=', 1)->where(function ($s) use ($query) {
                            $s->where('email', 'like', '%'.$query.'%');
                        })->orWhere(function ($s) use ($query) {
                            $s->where('name', 'like', '%'.$query.'%');
                        })
                        ->orderBy('created_at','desc')
                        ->paginate(10);
                        return view('users.search', compact('data'))->render();
        
    }
    }
*/

  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|string|max:255',
      'mobile_no' => 'required|string|max:14|unique:users',
      'email' => 'required|email|unique:users',
      'password' => 'required|string|min:6|max:20',
      'gender' => 'required|string|max:12',
      'address' => 'nullable|string|max:255',
      'role' => 'required|string|max:255|exists:roles,name',
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->mobile_no = $request->mobile_no;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->address_1 = $request->address;
    $user->gender = $request->gender;
    $user->user_type = 'store_employee';
    $user->assignRole($request->role);
    $user->save();
    


    session()->flash('success', 'تم اضافة موظف جديد بنجاح');
    return redirect()->route('store.admins.index');
  }

  public function edit(Request $request)
  {
    $admin = User::find($request->id);
    if (is_null($admin) || $admin->is_delete == 1  ||  $admin->user_type != 'store_employee') {
      session()->flash('error', 'الموظف غير موجود');
      return redirect()->back();
    }
  
    $roles = Role::where('type','store')->get();
    return view('Store.admins.edit')->with('admin', $admin)->with('roles', $roles);
  }

  public function update(Request $request, $id)
  {
  $user = User::find($id);

  if (is_null($user)  || $user->is_delete == 1  ||  $user->user_type != 'store_employee') {
    session()->flash('error', 'الموظف غير موجود');
    return redirect()->back();
  }

  $this->validate($request, [
    'name' => 'required|string|max:255',
    'mobile_no' => 'required|string|max:14|unique:users,mobile_no,'.$user->id,
    'email' => 'required|email|unique:users,email,'.$user->id,
    'password' => 'nullable|string|min:6|max:20',
    'gender' => 'required|string|max:12',
    'address' => 'nullable|string|max:255',
    'role' => 'required|string|max:255|exists:roles,name',
  ]);

  
  $user->name = $request->name;
  $user->mobile_no = $request->mobile_no;
  $user->email = $request->email;
  if(!is_null($request->password)){
    $user->password = Hash::make($request->password);
  }
  $user->address_1 = $request->address;
  $user->gender = $request->gender;
  $user->assignRole($request->role);
  $user->save();
  


  session()->flash('success', 'تم تعديل بيانات الموظف بنجاح');
  return redirect()->route('store.admins.index');
  }

  public function destroy($id)
  {
    $user = User::find($id);
    if (is_null($user)  || $user->is_delete == 1  ||  $user->user_type != 'store_employee') {
      session()->flash('error', 'الموظف غير موجود');
      return redirect()->back();
    }

    $user->is_delete =1;
    $user->save();
    session()->flash('success', 'تم حذف الموظف بنجاح');
    return redirect()->back();
  }

  public function change_status($id)
  {
    $user = User::find($id);
    if (is_null($user)  || $user->is_delete == 1 ||  $user->user_type != 'store_employee') {
      session()->flash('error', 'الموظف غير موجود');
      return redirect()->back();
    }
    if($user->active == 0){
      $user->active =1;
    }else{
      $user->active =0;
    }
    $user->save();
    session()->flash('success', 'تم تغيير حالة الموظف بنجاح');
    return redirect()->back();
  }
}
