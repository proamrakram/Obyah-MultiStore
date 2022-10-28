@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')
<div class="container-fluid">

    <div class="layout-specing">

        <div class="bg-white mt-3">
            <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4"> تعديل العملة </h6>
            </div>

            <div class="p-4">
                <form method="post" action="{{ route('admin.currencies.update',['id'=>$currency->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> إسم العملة (EN)</label>
                                <div class="col-9">
                                    <input type="text" name="currency_name_en" value="{{$currency->currency_name_en}}"  class="form-control  @error('currency_name_en') is-invalid @enderror" id="rolesName" placeholder="إسم العملة  (EN) ">
                                    @error('currency_name_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> <!-- / End  Roles Name -->
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> إسم العملة (AR)</label>
                                <div class="col-9">
                                    <input type="text" name="currency_name_ar"  value="{{$currency->currency_name_ar}}" class="form-control  @error('currency_name_ar') is-invalid @enderror" id="rolesName" placeholder="إسم العملة  (AR) ">
                                    @error('currency_name_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> <!-- / End  Roles Name -->
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> رمز العملة </label>
                                <div class="col-9">
                                    <input type="text" name="currency_symbol"  value="{{$currency->currency_symbol}}" class="form-control  @error('currency_symbol') is-invalid @enderror" id="rolesName" placeholder="رمز العملة ">
                                    @error('currency_symbol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> <!-- / End  Roles Name -->
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> اختصار العملة </label>
                                <div class="col-9">
                                    <input type="text" name="currency_code" value="{{$currency->currency_code}}" class="form-control  @error('currency_code') is-invalid @enderror" id="rolesName" placeholder="اختصار العملة ">
                                    @error('currency_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> <!-- / End  Roles Name -->
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark px-4 mx-4 py-2"> تعديل البيانات </button>
                </form>
            </div>
        </div>
        <!--end bg-white-->

    </div>
</div>
<!--end container-->



@endsection