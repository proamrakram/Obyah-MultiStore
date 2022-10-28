@extends('partials.layout')
@section('title') Add Affiliate  @endsection

@section('content')
    <!-- Start Page Content -->

        <div class="container-fluid">
            <div class="layout-specing">
                <div class="bg-white mt-3">
                    <div class="d-flex justify-content-between p-3  bg-soft-dark   rounded-top border-bottom heading-with-shape">
                        <h6 class="fw-bold mb-0 h5 ps-4"> إعداد رابط تسويق جديد  </h6>
                    </div>

                    <div class="p-4">

                        <!-- Start Form -->
                        <form action=""  method="">
                            <h5> بيانات المسوق </h5>
                            <div class="bg-soft-dark p-3 rounded my-3">
                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="row mb-3">
                                            <label for="Marketer'sName" class="col-3 col-form-label"> اسم المسوق <span class="text-danger"> * </span> </label>
                                            <div class="col-9">
                                                <div class="row">
                                                    <div class="col"><input type="text" class="form-control" id="Marketer'sName" placeholder="اسم المسوق هنا بالعربية"></div>
                                                    <div class="col"><input type="text" class="form-control" id="Marketer'sName" placeholder="اسم المسوق هنا  بالانجليزية"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- / End Marketer'sName -->

                                    <div class="col-md-5">
                                        <div class="row mb-3">
                                            <label for="phoneNumber" class="col-3 col-form-label"> رقم الهاتف <span class="text-danger"> * </span> </label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="phoneNumber" placeholder="0123456789 ">
                                            </div>
                                        </div>
                                    </div> <!-- / End phone Number -->

                                    <div class="col-md-5">
                                        <div class="row mb-3">
                                            <label for="country" class="col-3 col-form-label"> الدولة <span class='text-danger'> * </span> </label>
                                            <div class="col-9">
                                                <select name="" id="country" class='form-control form-select'>
                                                    <option value=""> الدولة </option>
                                                    <option value=""> الدولة  </option>
                                                    <option value=""> الدولة </option>
                                                    <option value=""> الدولة </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- / End country -->

                                    <div class="col-md-5">
                                        <div class="row mb-3">
                                            <label for="city" class="col-3 col-form-label"> المدينة <span class='text-danger'> * </span> </label>
                                            <div class="col-9">
                                                <select name="" id="city" class='form-control form-select'>
                                                    <option value=""> المدينة </option>
                                                    <option value=""> المدينة  </option>
                                                    <option value=""> المدينة </option>
                                                    <option value=""> المدينة </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- / End country -->

                                    <div class="col-md-5">
                                        <div class="row mb-3">
                                            <label for="Email" class="col-3 col-form-label"> البريد الالكتروني <span class='text-danger'> * </span> </label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="Email" placeholder="mail@mail.com ">
                                            </div>
                                        </div>
                                    </div> <!-- / End Email -->

                                </div>
                            </div>

                            <h5> إعدادات الرابط </h5>
                            <div class="bg-soft-dark p-3 rounded my-3">
                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="row mb-3">
                                            <label for="typeURL" class="col-3 col-form-label"> نوع الرابط <span class='text-danger'> * </span> </label>
                                            <div class="col-9">
                                                <select name="" id="typeURL" class='form-control form-select'>
                                                    <option value=""> رابط منتج </option>
                                                    <option value=""> رابط منتج  </option>
                                                    <option value=""> رابط منتج </option>
                                                    <option value=""> رابط منتج </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- / End typeURL -->

                                    <div class="col-md-5">
                                        <div class="row mb-3">
                                            <label for="ActiveDate" class="col-3 col-form-label"> تاريخ التفعيل <span class="text-danger"> * </span> </label>
                                            <div class="col-9">
                                                <input type="date" class="form-control" id="ActiveDate" placeholder="0123456789 ">
                                            </div>
                                        </div>
                                    </div> <!-- / End ActiveDate -->

                                    <div class="col-md-10">
                                        <div class="row mb-3">
                                            <label for="CopyURL" class="col-2 col-form-label"> نسخ الرابط    </label>
                                            <div class="col-9">
                                                <input type="text" name="" id="CopyURL" class="form-control" value="url">
                                            </div>
                                            <div class="col-1 align-self-center">
                                                <a class="" onclick="copyToClipboard();"> <img src="assets/images/icon/icon-copy.svg"  width="20"> </a>
                                            </div>
                                        </div>
                                    </div> <!-- / End CopyURL -->

                                </div>
                            </div>

                            <h5> إعدادات العمولة </h5>
                            <div class="bg-soft-dark p-3 rounded my-3">
                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="row mb-3">
                                            <label for="Commissiontype" class="col-3 col-form-label"> نوع العمولة <span class='text-danger'> * </span> </label>
                                            <div class="col-9">
                                                <select name="" id="Commissiontype" class='form-control form-select'>
                                                    <option value="fixed"> مبلغ ثابت </option>
                                                    <option value="ratio">  نسبة  </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- / End Commission type -->

                                    <div class="col-md-5">
                                        <div class="row mb-3">
                                            <label for="CommissionAmount" class="col-3 col-form-label"> قيمة العمولة <span class="text-danger"> * </span> </label>
                                            <div class="col-9">
                                                <div class="form-text">
                                                    <input type="text" class="form-control" id="CommissionAmount" placeholder="400">
                                                    <span class='text'> * </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- / End CommissionAmount -->

                                    <div class="col-md-5">
                                        <div class="row mb-3">
                                            <label for="CommissionApplication" class="col-3 col-form-label"> تطبيق العمولة <span class='text-danger'> * </span> </label>
                                            <div class="col-9">
                                                <select name="" id="CommissionApplication" class='form-control form-select'>
                                                    <option value=""> علي اول منتج يباع </option>
                                                    <option value="">  علي اول منتج يباع  </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- / End Commission type -->

                                </div>
                            </div>

                            <hr class='mt-3'>
                            <div class="col-md-4">
                                <button class='btn btn-dark px-4 mx-4 py-2'> إضافة المنتج </button>
                            </div>

                        </form>
                        <!-- End Form -->


                    </div>

                </div> <!--end bg-white-->

            </div>
        </div><!--end container-->

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
