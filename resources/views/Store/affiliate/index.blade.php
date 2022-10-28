@extends('partials.layout')
@section('title') Affiliate Marketing @endsection

@section('content')

    <!-- Start Page Content -->


        <div class="container-fluid">
            <div class="layout-specing">

                <div class="filter-search">
                    <div class="heading d-flex justify-content-between align-items-center pe-3">
                        <h4 class="h5"> تصفية </h4>
                        <i class="uil uil-filter"></i>
                    </div>
                    <div class="content p-4 border">
                        <div class="row">

                            <div class="col-md-4 col-6">
                                <div class="row align-items-center">
                                    <div class="col-4"><label for="">تاريخ تفعيل الرابط </label></div>
                                    <div class="col-8">
                                        <input type="date" class='form-control'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <div class="row align-items-center">
                                    <div class="col-3"><label for="">دولة المسوق</label></div>
                                    <div class="col-8">
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected="">اسم دولة</option>
                                            <option value="1">اسم دولة</option>
                                            <option value="2">اسم دولة</option>
                                            <option value="3">اسم دولة</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-4 col-6">
                                <div class="row align-items-center">
                                    <div class="col-4"><label for="">مدينة المسوق </label></div>
                                    <div class="col-8">
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected="">مدينة </option>
                                            <option value="1">مدينة </option>
                                            <option value="2">مدينة </option>
                                            <option value="3">مدينة </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>  <!-- /. end Filter -->


                <div class="bg-white mt-3">
                    <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                        <h6 class="fw-bold mb-0 h4"> مسوقي العمولة  </h6>
                        <div class="btns">
                            <a href="affiliate-marketing-add.php" class="btn btn-dark"> إضافة مسوق </a>
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
                                    <th class="text-center"> اسم المسوق </th>
                                    <th class="text-center"> الحالة </th>
                                    <th class="text-center">دولة المسوق</th>
                                    <th class="text-center"> تاريخ التفعيل </th>
                                    <th class="text-center">نوع العمولة </th>
                                    <th class="text-center"> طريقة تطبيق العمولة </th>
                                    <th class="text-center"> اعدادات </th>
                                </tr>
                                </thead>
                                <tbody>

                                <!-- Start -->
                                <tr>
                                    <td class="text-center p-2" width='50'>
                                        <div class="form-check">
                                            <input class="form-check-input" data-check-all="yes" type="checkbox" value="" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1"></label>
                                        </div>
                                    </td>
                                    <td class="text-center p-2" width='50'>
                                        1
                                    </td>
                                    <td class="text-center p-2">
                                        اسم المسوق
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-success"> نشيط </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">مصر</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">12/5/2021</span>
                                    </td>
                                    <td class="text-center p-2">
                                        Silver
                                    </td>
                                    <td class="text-center p-2">
                                        Silver
                                    </td>
                                    <td class="text-end p-3">
                                        <div class="tools-options d-flex justify-content-center">
                                            <div class="form-check form-switch p-0 pt-1">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                            </div>
                                            <a href="#"> <i class="uil uil-edit"></i> </a>
                                            <a href="#"> <i class="uil uil-trash-alt"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="text-center p-2" width='50'>
                                        <div class="form-check">
                                            <input class="form-check-input" data-check-all="yes" type="checkbox" value="" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1"></label>
                                        </div>
                                    </td>
                                    <td class="text-center p-2" width='50'>
                                        1
                                    </td>
                                    <td class="text-center p-2">
                                        اسم المسوق
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-danger"> غير نشيط </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">مصر</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">12/5/2021</span>
                                    </td>
                                    <td class="text-center p-2">
                                        Silver
                                    </td>
                                    <td class="text-center p-2">
                                        Silver
                                    </td>
                                    <td class="text-end p-3">
                                        <div class="tools-options d-flex justify-content-center">
                                            <div class="form-check form-switch p-0 pt-1">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" >
                                            </div>
                                            <a href="#"> <i class="uil uil-edit"></i> </a>
                                            <a href="#"> <i class="uil uil-trash-alt"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End -->



                                </tbody>
                            </table>
                        </div>

                        <ul class="pagination mb-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous"><i class="uil uil-angle-right-b"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="uil uil-angle-left-b"></i></a></li>
                        </ul>
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
