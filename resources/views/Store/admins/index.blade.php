@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')
<div class="container-fluid">
    <div class="layout-specing">

        <div class="bg-white mt-3">
            <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4"> اعدادات الموظفين </h6>
                <div class="btns">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addUser" class="btn btn-dark"> إضافة مستخدم </a>
                </div>
            </div>


            <!-- Modal Content Start -->
            <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content rounded shadow border-0">
                        <div class="modal-header border-bottom bg-soft-dark">
                            <h5 class="modal-title" id="LoginForm-title"> اضافة مستخدم </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('store.admins.store') }}" method="POST">
                                @csrf
                                <div class="bg-white p-3 rounded box-shadow">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-md-4"><label for="userName" class='font-sm'>الاسم <span class="text-danger">*</span> </label></div>
                                                <div class="col-md-8">
                                                    <input type="text" name="name" id="userName" value="{{ old('name') }}" class="form-control mb-2 @error('name') is-invalid @enderror" placeholder='الاسم بالعربية'>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-md-4"><label for="userPhoneNumber" class='font-sm'>رقم الهاتف <span class="text-danger">*</span></label></div>
                                                <div class="col-md-8"> <input name="mobile_no" value="{{ old('mobile_no') }}" type="text" id="userPhoneNumber" class="form-control @error('mobile_no') is-invalid @enderror" placeholder='برجاء ادخال11 رقم'>

                                                    @error('mobile_no')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-md-4"><label for="userName" class='font-sm'>البريد الالكتروني <span class="text-danger">*</span> </label></div>
                                                <div class="col-md-8">
                                                    <input type="email" name="email" value="{{ old('email') }}" id="userName" class="form-control mb-2 @error('email') is-invalid @enderror" placeholder='البريد الالكتروني'>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-md-4"><label for="userPhoneNumber" class='font-sm'> الجنس </label></div>
                                                <div class="col-md-8">
                                                    <select name="gender" id="" class="form-control form-select @error('gender') is-invalid @enderror">
                                                        <option value="male" @if(old('gender')=='male' )selected @endif> ذكر </option>
                                                        <option value="female" @if(old('gender')=='female' )selected @endif> أنثى </option>
                                                    </select>
                                                    @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-md-4"><label for="userPhoneNumber" class='font-sm'> العنوان <span class="text-muted" style='font-size: 10px'> إختياري </span></label></div>
                                                <div class="col-md-8"> <input name="address" value="{{ old('address') }}" type="text" id="userPhoneNumber" class="form-control @error('address') is-invalid @enderror" placeholder='العنوان'>
                                                    @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-md-4"><label for="userPhoneNumber" class='font-sm'> الوظيفة </label></div>
                                                <div class="col-md-8">
                                                    <select name="role" id="" class="form-control form-select @error('role') is-invalid @enderror">
                                                        @foreach($roles as $role)
                                                        <option value="{{$role->name}}"> {{$role->name}} </option>
                                                        @endforeach
                                                    </select>
                                                    @error('role')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-md-4"><label for="userPassowrd" class='font-sm'> الرقم السري <span class="text-danger">*</span></label></div>
                                                <div class="col-md-8"> <input name="password" type="password" id="userPassowrd" class="form-control @error('password') is-invalid @enderror">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-dark px-5">حفظ</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Content End -->

            <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content rounded shadow border-0">
                        <div class="modal-header border-bottom bg-soft-dark">
                            <h5 class="modal-title" id="LoginForm-title"> تعديل مستخدم </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div id="modal-body">
</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-4">
                <div class="btns-optons-table mb-3">
                    <button class="btn btn-dark">Print</button>
                    <button class="btn btn-dark">pdf</button>
                    <button class="btn btn-dark">Excel</button>
                    <button class="btn btn-dark">csv</button>
                    <button class="btn btn-dark">copy</button>
                </div>
                <div class="table-responsive   rounded-bottom mb-3">
                    <table class="table table-bordered table-center table-hover bg-white mb-0">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    <div class="form-check">
                                        <input id="select-all" class="form-check-input" type="checkbox" value="" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th class="text-center"> م </th>
                                <th class="text-center"> الاسم </th>
                                <th class="text-center"> الحالة </th>
                                <th class="text-center">الوظيفة</th>
                                <th class="text-center">تاريخ التعيين</th>
                                <th class="text-center"> اعدادات </th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- Start -->
                            @foreach($admins as $admin)
                            <tr>
                                <td class="text-center p-2" width='50'>
                                    <div class="form-check">
                                        <input class="form-check-input" data-check-all="yes" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1"></label>
                                    </div>
                                </td>
                                <td class="text-center p-2" width='50'>
                                    {{$admin->id}}
                                </td>
                                <td class="text-center p-2">
                                    {{$admin->name}}
                                </td>
                                <td class="text-center p-2">
                                    <span class="text-success">@if($admin->active ==1) مفعل @else غير مفعل @endif</span>
                                </td>
                                <td class="text-center p-2">
                                    <span class="text-muted">{{$admin->roles->pluck('name')[0]}}</span>
                                </td>
                                <td class="text-center p-2">
                                    <span class="text-muted">{{date('d/m/Y',strtotime($admin->created_at))}}</span>
                                </td>

                                <td class="text-end p-3">
                                    <div class="tools-options d-flex justify-content-center">
                                        <div class="form-check form-switch p-0 pt-1">
                                            
                                            <input class="form-check-input" type="checkbox" onclick="window.location='{{ route("store.admins.changeStatus",["id"=>$admin->id]) }}'" id="flexSwitchCheckChecked" @if($admin->active == 1) checked="" @endif>
                                            
                                        </div>
                                        <a href="#" onclick="return func({{$admin->id}})"> <i class="uil uil-edit"></i> </a>
                                        <a href="{{route('store.admins.delete',['id'=>$admin->id])}}" onclick="return confirm('هل انت متأكد من حذف ({{$admin->name}})?')"> <i class="uil uil-trash-alt"></i> </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <!-- End -->



                        </tbody>
                    </table>
                </div>

                {{$admins->links()}}
            </div>
        </div>
        <!--end bg-white-->

    </div>
</div>
<!--end container-->

<!--End page-content" -->

@endsection
@section('script')
<script>
    function func(id) {
        $.ajax({
            url: '/store/admins/edit',
            dataType: 'html',
            method: 'GET',
            data: {
                id: id
            },
            success: function(data) {
                $('#editUser').modal('show');
                $('#modal-body').html(data);

            }
        });
    }

    function func_change_status(id) {
        $.ajax({
            url: '/store/admins/change-status',
            dataType: 'html',
            method: 'GET',
            data: {
                id: id
            },
            success: function(data) {

            }
        });
    }
</script>