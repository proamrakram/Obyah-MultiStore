@extends('partials.layout')
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            <h4>إحصائيات المنصة</h4>
            <div class="statistic-admin mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="statistic statistic-visits p-4 rounded-3 text-white mb-3">
                            <div class="top d-flex aligns-items-center justify-content-between">
                                <div class='d-flex align-items-center'>
                                    <img src="assets/images/icon/icon-group.svg" width="50" alt="">
                                    <h4 class='ps-4 h5'>إجمالي المشتركين</h4>
                                </div>
                                <div>
                                    <span class="h1">200</span>
                                </div>
                            </div>
                            <hr>
                            <div class="bottom text-center d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="d-block">المجانية</span>
                                    <span class="d-block">120</span>
                                </div>
                                <div>
                                    <span class="d-block">الأساسية</span>
                                    <span class="d-block">60</span>
                                </div>
                                <div>
                                    <span class="d-block">الاحترافية</span>
                                    <span class="d-block">20</span>
                                </div>
                                <a href="" class='btn btn-white'> تفاصيل </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Box -->

                    <div class="col-md-6">
                        <div class="statistic statistic-products p-4 rounded-3 text-white mb-3">
                            <div class="top d-flex aligns-items-center justify-content-between">
                                <div class='d-flex align-items-center'>
                                    <img src="assets/images/icon/eye-solid.svg" width="50" alt="">
                                    <h4 class='ps-4 h5'>إجمالي الزيارات</h4>
                                </div>
                                <div>
                                    <span class="h1">200</span>
                                </div>
                            </div>
                            <hr>
                            <div class="bottom text-center d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="d-block">الأن</span>
                                    <span class="d-block">120</span>
                                </div>
                                <a href="" class='btn btn-white'> تفاصيل </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Box-->

                    <div class="col-md-6">
                        <div class="statistic statistic-sales p-4 rounded-3 text-white mb-3">
                            <div class="top d-flex aligns-items-center justify-content-between">
                                <div class='d-flex align-items-center'>
                                    <img src="assets/images/icon/poll-solid.svg" width="50" alt="">
                                    <h4 class='ps-4 h5'>إجمالي المبيعات</h4>
                                </div>
                                <div>
                                    <span class="h1">43000</span>
                                </div>
                            </div>
                            <hr>
                            <div class="bottom text-center d-flex align-items-center justify-content-end">
                                <a href="" class='btn btn-white'> تفاصيل </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Box-->

                    <div class="col-md-6">
                        <div class="statistic statistic-users p-4 rounded-3 text-white mb-3">
                            <div class="top d-flex aligns-items-center justify-content-between">
                                <div class='d-flex align-items-center'>
                                    <img src="assets/images/icon/sort-amount-up-alt-solid.svg" width="50"
                                        alt="">
                                    <h4 class='ps-4 h5'>إجمالي الطلبات</h4>
                                </div>
                                <div>
                                    <span class="h1">200</span>
                                </div>
                            </div>
                            <hr>
                            <div class="bottom text-center d-flex align-items-center justify-content-end">
                                <a href="" class='btn btn-white'> تفاصيل </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Box-->


                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="border rounded-3 shadow-sm p-3 bg-white mb-3">
                            <div class="d-flex justify-content-between mb-3">
                                <h5>عدد المشتركين</h5>
                                <select name="" id="" class="form-group">
                                    <option value="">اختر نوع الباقة</option>
                                    <option value="">اختر نوع الباقة</option>
                                </select>
                            </div>
                            <canvas id="memberNumber"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border rounded-3 shadow-sm p-3 bg-white mb-3">
                            <div class="d-flex justify-content-between mb-3">
                                <h5>الزيارات</h5>

                            </div>
                            <canvas id="memberNumber2"></canvas>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="border rounded-3 shadow-sm p-3 bg-white mb-3">
                            <div class="d-flex justify-content-between mb-3">
                                <h5>المبيعات</h5>
                            </div>
                            <canvas id="memberNumber3"></canvas>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="border rounded-3 shadow-sm p-3 bg-white mb-3">
                            <div class="d-flex justify-content-between mb-3">
                                <h5>الطلبات</h5>
                            </div>
                            <canvas id="memberNumber4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end container-->
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>

    <script>
        var ctx = document.getElementById("memberNumber");

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                datasets: [{
                    label: '# of Member',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                    ],
                    borderColor: [
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endsection
