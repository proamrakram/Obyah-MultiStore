@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')
<div class="container-fluid">

    <div class="layout-specing">

        <div class="bg-white mt-3">
            <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4"> تعديل الدولة </h6>
            </div>

            <div class="p-4">
                <form method="post" action="{{ route('admin.countries.update',['id'=>$country->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> إسم الدولة (EN)</label>
                                <div class="col-9">
                                    <input type="text" name="country_name_en" value="{{$country->country_name_en}}"  class="form-control  @error('country_name_en') is-invalid @enderror" id="rolesName" placeholder="إسم الدولة  (EN) ">
                                    @error('country_name_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> <!-- / End  Roles Name -->
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> إسم الدولة (AR)</label>
                                <div class="col-9">
                                    <input type="text" name="country_name_ar"  value="{{$country->country_name_ar}}" class="form-control  @error('country_name_ar') is-invalid @enderror" id="rolesName" placeholder="إسم الدولة  (AR) ">
                                    @error('country_name_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> <!-- / End  Roles Name -->
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> علم الدولة </label>
                                <div class="col-9">
                                <input name="country_flag" type="file" id="flag" class="form-control   @error('country_flag') is-invalid @enderror">
                                       
                                   @error('country_flag')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> <!-- / End  Roles Name -->
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> اختصار الدولة </label>
                                <div class="col-9">
                                    <input type="text" name="country_code" value="{{$country->country_code}}" class="form-control  @error('country_code') is-invalid @enderror" id="rolesName" placeholder="اختصار الدولة ">
                                    @error('country_code')
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