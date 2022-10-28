@extends('partials.layout')

@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4"> مبيعات المتاجر </h6>
            </div>
            <div class="filter-search">
                <div class="heading d-flex justify-content-between align-items-center pe-3">
                    <h4 class="h5"> تصفية </h4>
                    <i class="uil uil-filter"></i>
                </div>
                <div class="content p-4 border">
                    <div class="row">


                        <div class="col-md-4 col-6">
                            <input type="date" class='form-control mb-3' placeholder='التاريخ'>
                        </div>

                        <div class="col-md-4 col-6">
                            <input type="text" class='form-control mb-3' placeholder='المتجر'>
                        </div>

                        <div class="col-md-4 col-6">
                            <input type="text" class='form-control mb-3' placeholder='الباقة'>
                        </div>

                        <div class="col-md-4 col-6">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected="">الدولة</option>
                                <option value="1">الدولة</option>
                                <option value="2">الدولة</option>
                                <option value="3">الدولة</option>
                            </select>

                        </div>

                        <div class="col-md-4 col-6">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected="">المدينة</option>
                                <option value="1">المدينة</option>
                                <option value="2">المدينة</option>
                                <option value="3">المدينة</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div> <!-- /. end Filter -->


            <div class="bg-white ">
                <div class="d-flex justify-content-center p-4  bg-white   rounded-top border-bottom  ">
                    <div class="btns">
                        <a href="platform-sales.php" class="btn btn-dark"> إجمالي المبيعات </a>
                        <a href="platform-best-sales.php" class="btn btn-outline-dark "> الأكثر مبيعا </a>
                        <a href="platform-lowest-selling.php" class="btn btn-outline-dark"> الأقل مبيعا </a>
                    </div>
                </div>


                <div class="p-4">
                    <div class="table-responsive   rounded-bottom mb-3">
                        <table class="table table-bordered table-center table-hover bg-white mb-0 table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center"> م </th>
                                    <th class="text-center"> المتجر </th>
                                    <th class="text-center"> الباقة </th>
                                    <th class="text-center">الدولة</th>
                                    <th class="text-center"> المدينة </th>
                                    <th class="text-center"> عدد المنتجات المباعه </th>
                                    <th class="text-center"> إجمالي قيمة المبيعات </th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- Start -->
                                <tr>
                                    <td class="text-center p-2" width='50'>
                                        <span class="text-muted">1 </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> إسم المتجر </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> الباقة </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> السعودية </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> الرياض</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> 423895694</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> $500.55</span>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="text-center p-2" width='50'>
                                        <span class="text-muted">1 </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> إسم المتجر </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> الباقة </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> السعودية </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> الرياض</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> 423895694</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> $500.55</span>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="text-center p-2" width='50'>
                                        <span class="text-muted">1 </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> إسم المتجر </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> الباقة </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> السعودية </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> الرياض</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> 423895694</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> $500.55</span>
                                    </td>
                                </tr>
                                <!-- End -->


                            </tbody>
                        </table>
                    </div>

                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous"><i
                                    class="uil uil-angle-right-b"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i
                                    class="uil uil-angle-left-b"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--end bg-white-->

        </div>
    </div>
    <!--end container-->
@endsection
