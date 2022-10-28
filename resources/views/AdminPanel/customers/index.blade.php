@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')
    <div class="container-fluid">
        <div class="layout-specing">

            <div class="bg-white mt-3">
                <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                    <h6 class="fw-bold mb-0 h4"> اعدادات العملاء </h6>
                    <div class="btns">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addUser" class="btn btn-dark">
                            إضافة مستخدم </a>
                    </div>
                </div>


                <!-- Modal Content Start -->
                <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content rounded shadow border-0">
                            <div class="modal-header border-bottom bg-soft-dark">
                                <h5 class="modal-title" id="LoginForm-title"> اضافة مستخدم </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.customers.store') }}" enctype="multipart/form-data"
                                    method="POST">
                                    @csrf
                                    <div class="bg-white p-3 rounded box-shadow">

                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3"><label for="name" class='font-sm'>الاسم
                                                        </label></div>
                                                    <div class="col-md-9"> <input type="text" value="{{ old('name') }}"
                                                            name="name" id="name" value=""
                                                            class="form-control @error('name') is-invalid @enderror">
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3"><label for="mobile_no" class='font-sm'>رقم
                                                            الهاتف</label></div>
                                                    <div class="col-md-9"> <input type="text"
                                                            value="{{ old('mobile_no') }}" name="mobile_no" id="mobile_no"
                                                            class="form-control @error('mobile_no') is-invalid @enderror">
                                                        @error('mobile_no')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-2">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3"><label for="City"
                                                            class='font-sm'>البلد</label></div>
                                                    <div class="col-md-9"> <select name="country_id" id=""
                                                            class="form-control form-select @error('country_id') is-invalid @enderror">
                                                            @foreach ($countries as $country)
                                                                <option value="{{ $country->id }}"
                                                                    @if (old('country_id') == $country->id) selected @endif>
                                                                    {{ $country->country_name_ar }} </option>
                                                            @endforeach
                                                        </select> @error('country_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-2">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3"><label for="postCode"
                                                            class='font-sm'>الرمز</label></div>
                                                    <div class="col-md-9"> <input name="postCode"
                                                            value="{{ old('postCode') }}" type="text" id="postCode"
                                                            class="form-control @error('postCode') is-invalid @enderror">
                                                        @error('postCode')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-2">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3"><label for="email" class='font-sm'>البريد
                                                            الالكترونى</label></div>
                                                    <div class="col-md-9"> <input type="text"
                                                            value="{{ old('email') }}" name="email" id="email"
                                                            class="form-control @error('email') is-invalid @enderror">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3"><label for="userPassowrd" class='font-sm'> الرقم
                                                            السري </label></div>
                                                    <div class="col-md-9"> <input name="password" type="password"
                                                            id="userPassowrd"
                                                            class="form-control @error('password') is-invalid @enderror">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <div class="row align-items-center">
                                                    <div class="col-md-2"><label for="date" class='font-sm'>تاريخ
                                                            الميلاد</label></div>
                                                    <div class="col-md-10"> <input type="date" name="birthdate"
                                                            value="{{ old('birthdate') }}" id="date"
                                                            class="form-control @error('role') is-invalid @enderror">
                                                        @error('birthdate')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="row align-items-center">
                                                    <div class="col-md-2"><label for="type"
                                                            class='font-sm'>النوع</label></div>
                                                    <div class="col-md-10"> <select name="gender" id=""
                                                            class="form-control form-select @error('gender') is-invalid @enderror">
                                                            <option value="male"
                                                                @if (old('gender') == 'male') selected @endif> ذكر
                                                            </option>
                                                            <option value="female"
                                                                @if (old('gender') == 'female') selected @endif> أنثى
                                                            </option>
                                                        </select>
                                                        @error('gender')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="row align-items-center ">
                                                    <div class="col-md-2"><label for="userImage" class='font-sm'> اضافة
                                                            صورة مستخدم</label></div>
                                                    <div class="col-md-10"> <input name="image" type="file"
                                                            id="userImage"
                                                            class="form-control @error('image') is-invalid @enderror">
                                                        @error('image')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
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
                </div>
                <!-- Modal Content End -->

                <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="LoginForm-title"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content rounded shadow border-0">
                            <div class="modal-header border-bottom bg-soft-dark">
                                <h5 class="modal-title" id="LoginForm-title"> تعديل مستخدم </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
                                            <input id="select-all" class="form-check-input" type="checkbox"
                                                value="" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th class="text-center"> م </th>
                                    <th class="text-center"> الاسم </th>
                                    <th class="text-center"> الحالة </th>
                                    <th class="text-center">تاريخ التعيين</th>
                                    <th class="text-center"> اعدادات </th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- Start -->
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td class="text-center p-2" width='50'>
                                            <div class="form-check">
                                                <input class="form-check-input" data-check-all="yes" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center p-2" width='50'>
                                            {{ $customer->id }}
                                        </td>
                                        <td class="text-center p-2">
                                            {{ $customer->name }}
                                        </td>
                                        <td class="text-center p-2">
                                            @if ($customer->user_status == 'active')
                                                <span class="text-success"> مفعل
                                                @else
                                                    <span class="text-danger"> غير مفعل
                                            @endif
                                            </span>
                                        </td>
                                        <td class="text-center p-2">
                                            <span
                                                class="text-muted">{{ date('d/m/Y', strtotime($customer->created_at)) }}</span>
                                        </td>

                                        <td class="text-end p-3">
                                            <div class="tools-options d-flex justify-content-center">
                                                <div class="form-check form-switch p-0 pt-1">

                                                    <input class="form-check-input" type="checkbox"
                                                        onclick="window.location='{{ route('admin.customers.changeStatus', ['id' => $customer->id]) }}'"
                                                        id="flexSwitchCheckChecked"
                                                        @if ($customer->user_status == 'active') checked="" @endif>

                                                </div>
                                                <a href="#" onclick="return func({{ $customer->id }})"> <i
                                                        class="uil uil-edit"></i> </a>
                                                <a href="{{ route('admin.customers.delete', ['id' => $customer->id]) }}"
                                                    onclick="return confirm('هل انت متأكد من حذف ({{ $customer->name }})?')">
                                                    <i class="uil uil-trash-alt"></i> </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- End -->



                            </tbody>
                        </table>
                    </div>

                    {{ $customers->links() }}
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
                url: '/admin/customers/edit',
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
                url: '/admin/customers/change-status',
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
