@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')

    <div class="container-fluid">
        <div class="layout-specing">

            <div class="bg-white mt-3">
                <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                    <h6 class="fw-bold mb-0 h4"> إعدادات المتجر </h6>
                </div>
 
                
                <div class="p-4">
                    <h5 class='h6 mb-3'> إعدادات المتجر </h5>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{route('store.settings.general')}}" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <i class="uil uil-setting fs-1"></i>  
                                <p class='mb-0'>الاعدادات الأساسية</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('store.settings.currency')}}" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <i class="uil uil-usd-circle fs-1"></i>
                                <p class='mb-0'>العملات</p>
                            </a>
                        </div>
                        
                        <div class="col-md-3">
                            <a href="settings-domain.php" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <img src="{{asset('assets/images/icon/icon-globe.svg')}}" width="35" class='mb-2 mt-3'> 
                                <p class='mb-0'>اعدادات الدومين</p>
                            </a>
                        </div>
                        
                        <div class="col-md-3">
                            <a href="#" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <img src="{{asset('assets/images/icon/icon-shipping.svg')}}" width="35" class='mb-2 mt-3'> 
                                <p class='mb-0'>خيارات الشحن والتوصيل</p>
                            </a>
                        </div> 
                        
                        <div class="col-md-3">
                            <a href="settings-notifications.php" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <i class="uil uil-bell fs-1"></i>
                                <p class='mb-0'>الاشعارات </p>
                            </a>
                        </div> 

                        <div class="col-md-3">
                            <a href="settings-wallet-bills.php" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <i class="uil uil-wallet fs-1"></i>
                                <p class='mb-0'>المحفظة والفواتير </p>
                            </a>
                        </div> 
                        
                        <div class="col-md-3">
                            <a href="#" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <img src="{{asset('assets/images/icon/icon-lang.svg')}}" width="35" class='mb-2 mt-3'> 
                                <p class='mb-0'>اللغات </p>
                            </a>
                        </div>  
                        
                        <div class="col-md-3">
                            <a href="#" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <img src="{{asset('assets/images/icon/icon-toggle.svg')}}" width="35" class='mb-2 mt-3'> 
                                <p class='mb-0'>خيارات المتجر </p>
                            </a>
                        </div>                          
                        
                    </div>
                    <h5 class='h6 mb-3 mt-5'> إعدادات متقدمة </h5>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{route('store.admins.index')}}" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <img src="{{asset('assets/images/icon/icon-user-black.svg')}}" width="35" class='mb-2 mt-3'> 
                                <p class='mb-0'>موظفوا المتجر </p>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="{{route('store.settings.seo')}}" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <img src="{{asset('assets/images/icon/icon-search.svg')}}" width="35" class='mb-2 mt-3'> 
                                <p class='mb-0'>تحسين محركات البحث SEO </p>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="#" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <i class='uil uil-usd-circle fs-1'></i>
                                <p class='mb-0'> اعدادات بيانات الدفع </p>
                            </a>
                        </div>   

                        <div class="col-md-3">
                            <a href="settings-banners.php" class="text-dark d-block box-setting bg-white shadow border rounded p-4 text-center">
                                <img src="{{asset('assets/images/icon/icon-flag.svg')}}" width="30" class='mb-1 mt-3'> 
                                <p class='mb-0'> اعدادات البنرات </p>
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