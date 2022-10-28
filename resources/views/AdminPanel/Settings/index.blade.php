@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')

    <div class="container-fluid">
        <div class="layout-specing">

            <div class="bg-white mt-3">
                <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                    <h6 class="fw-bold mb-0 h4"> إعدادات المنصة </h6>
                </div>
 
                
                <div class="p-4">
                    <h5 class='h6 mb-3'> إعدادات المنصة </h5>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <i class="uil uil-setting fs-1"></i>  
                                <p class='mb-0'>الاعدادات الأساسية</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('admin.currencies.index')}}" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <i class="uil uil-usd-circle fs-1"></i>
                                <p class='mb-0'>العملات</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('admin.countries.index')}}" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <i class="uil uil-usd-circle fs-1"></i>
                                <p class='mb-0'>الدول</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('admin.cities.index')}}" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <i class="uil uil-usd-circle fs-1"></i>
                                <p class='mb-0'>المدن</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('admin.admins.index')}}" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <img src="{{asset('assets/images/icon/icon-user-black.svg')}}" width="35" class='mb-2 mt-3'> 
                                <p class='mb-0'>موظفوا المنصة </p>
                            </a>
                        </div>
                       
                        
                        <div class="col-md-3">
                            <a href="{{route('admin.advertisments.index')}}" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <img src="{{asset('assets/images/icon/icon-flag.svg')}}" width="30" class='mb-1 mt-3'> 
                                <p class='mb-0'> اعدادات البنرات </p>
                            </a>
                        </div>                        
                        
                        <div class="col-md-3">
                            <a href="{{route('admin.payment-types.index')}}" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                            <i class="uil uil-usd-circle fs-1"></i>
                            <p class='mb-0'> طرق الدفع </p>
                            </a>
                        </div>  
                        
                    </div>
                    

                </div>
            </div> <!--end bg-white-->

        </div>         
    </div><!--end container-->
</main>
<!--End page-content" -->


@endsection
