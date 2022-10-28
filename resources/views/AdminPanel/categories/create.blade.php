@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')
<div class="container-fluid">

    <div class="layout-specing">

        <div class="bg-white mt-3">
            <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4"> اضافة تصنيف </h6>
            </div>

            <div class="p-4">
                <form method="post" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> إسم التصنيف (EN)</label>
                                <div class="col-9">
                                    <input type="text" name="category_name_en" class="form-control  @error('category_name_en') is-invalid @enderror" id="rolesName" placeholder="إسم التصنيف  (EN) ">
                                    @error('category_name_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> <!-- / End  Roles Name -->
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> إسم التصنيف (AR)</label>
                                <div class="col-9">
                                    <input type="text" name="category_name_ar" class="form-control  @error('category_name_ar') is-invalid @enderror" id="rolesName" placeholder="إسم التصنيف  (AR) ">
                                    @error('category_name_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> <!-- / End  Roles Name -->
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> نوع التصنيف </label>
                                <div class="col-9">
                                    <select name="type" id="" class="form-control form-select @error('type') is-invalid @enderror">
                                        <option value="category"> تصنيف رئيسي </option>
                                        <option value="subcategory"> تصنيف فرعي </option>
                                    </select>@error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> <!-- / End  Roles Name -->
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-3 mt-4 mb-4">
                                <label for="rolesName" class="col-3 col-form-label"> التصنيف الرئيسي </label>
                                <div class="col-9">
                                    <select name="parent_id" id="" class="form-control form-select @error('parent_id') is-invalid @enderror">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name_ar}} </option>
                                        @endforeach
                                    </select> @error('parent_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> <!-- / End  Roles Name -->
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark px-4 mx-4 py-2"> حفظ البيانات </button>
                </form>
            </div>
        </div>
        <!--end bg-white-->

    </div>
</div>
<!--end container-->



@endsection