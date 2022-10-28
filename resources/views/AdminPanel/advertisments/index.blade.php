@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')
<div class="container-fluid">
    <div class="layout-specing">
        <div class="bg-white mt-3">
            <div class="d-flex justify-content-between p-3  bg-soft-dark   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4 ps-4"> اعدادات الاعلانات والبانرات </h6>
                <div class="btns">
                    <a href="{{route('admin.advertisments.create')}}" class="btn btn-dark"> إضافة بانر </a>
                </div>
            </div>

            <div class="p-4">
                <div class="row">
                    @foreach($advertisments as $ads)
                    <div class="col-md-4">
                        <div class="box-banners d-block mb-3">
                            <img src="{{$ads->add_image}}" class='img-fluid w-100' alt="">
                            <div class="d-flex justify-content-between pt-3">
                                <div>
                                    <h5 class='h6'>@if($ads->ads_type == 'pop_up_window') نافذة منبثقة @elseif($ads->ads_type == 'side_window') نافذة جانبية @endif </h5>
                                </div>
                                <div>
                                    <div class="tools-options d-flex justify-content-center">
                                        <div class="form-check form-switch p-0 pt-1">
                                            <input class="form-check-input" type="checkbox"  onclick="window.location='{{ route("admin.advertisments.changeStatus",["id"=>$ads->id]) }}'" id="flexSwitchCheckChecked" @if($ads->status == 'active') checked="" @endif>
                                        </div>
                                        <a href="{{route('admin.advertisments.edit',['id'=>$ads->id])}}"> <i class="uil uil-edit"></i> </a>
                                        <a href="{{route('admin.advertisments.delete',['id'=>$ads->id])}}" onclick="return confirm('هل انت متأكد من حذف الاعلان?')"> <i class="uil uil-trash-alt"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--end bg-white-->
    </div>
</div>
<!--end container-->

@endsection