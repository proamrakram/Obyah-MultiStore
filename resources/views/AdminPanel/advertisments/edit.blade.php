@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')
<div class="container-fluid">
    <div class="layout-specing">
        <div class="bg-white mt-3">
            <div class="d-flex justify-content-between p-3  bg-soft-dark   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4 ps-4"> اعدادات الاعلانات والبانرات </h6>
                <div class="btns">
                    <a href="javascript:void(0)" class="btn btn-dark"> تعديل بانر </a>
                </div>
            </div>
            <form method="post" action="{{ route('admin.advertisments.update',['id'=>$advertisment->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="p-4">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="banner-pupup" role="tabpanel" aria-labelledby="banner-pupup">
                            <form action="" method="">
                                <div class="row mt-3 mt-md-5">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <select name="ads_type" id="" class='form-control form-select   @error(' ads_type') is-invalid @enderror'>
                                                        <option value="pop_up_window" @if($advertisment->ads_type == 'pop_up_window') selected @endif> نافذة منبثقه </option>
                                                        <option value="side_window"  @if($advertisment->ads_type == 'side_window') selected @endif> نافذة جانبية</option>
                                                    </select>
                                                    @error('ads_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div> <!-- / End Choose Location Banners -->

                                                <div class="row mb-3">
                                                    <div class="file-uploade">
                                                        <label for="formFile" class="form-label">اختر الصورة للمحتوي التسويقي</label>
                                                        <input uploade='file' name="add_image" class="form-control   @error('add_image') is-invalid @enderror" type="file" id="formFile" dir='ltr'>
                                                    </div>
                                                    @error('add_image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div> <!-- / End storeName -->
                                                <div class="mb-3">
                                                    <select name="ads_place" id="" class='form-control form-select   @error(' ads_place') is-invalid @enderror'>
                                                        <option value="left"  @if($advertisment->ads_place == 'left') selected @endif> يسار </option>
                                                        <option value="right" @if($advertisment->ads_place == 'right') selected @endif> يمين </option>
                                                        <option value="left_bottom" @if($advertisment->ads_place == 'left_bottom') selected @endif> أسفل اليسار </option>
                                                        <option value="right_bottom" @if($advertisment->ads_place == 'right_bottom') selected @endif> أسفل اليمين </option>
                                                        <option value="left_top" @if($advertisment->ads_place == 'left_top') selected @endif> اعلى اليسار </option>
                                                        <option value="right_top" @if($advertisment->ads_place == 'right_top') selected @endif> اعلى اليسار </option>
                                                        <option value="left_center" @if($advertisment->ads_place == 'left_center') selected @endif> وسط اليسار </option>
                                                        <option value="right_center" @if($advertisment->ads_place == 'right_center') selected @endif> وسط اليسار </option>
                                                        <option value="center_bottom" @if($advertisment->ads_place == 'center_bottom') selected @endif> وسط الأسفل </option>
                                                        <option value="center_top"  @if($advertisment->ads_place == 'center_top') selected @endif> وسط الأعلى </option>
                                                    </select>
                                                    @error('ads_place')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div> <!-- / End Choose Location Banners -->


                                                <div class="mb-3">
                                                    <input type="text" name="link" value="{{$advertisment->link}}" class="form-control   @error('link') is-invalid @enderror" id="storeAddress" placeholder="  رابط الصورة ">
                                                    @error('link')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div> <!-- / End Image URL -->


                                            </div>
                                            <div class="col-md-4">
                                                <div class="uploade-img">
                                                    <img id="uplodeImage" src="{{$advertisment->add_image}}">
                                                </div>
                                            </div>


                                            <div class="col-md-12 my-3">
                                                <hr>
                                            </div>
                                            <div class="col-md-4 mt-4">

                                                <button type="submit" class="btn btn-dark px-4 mx-4 py-2"> حفظ البيانات </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end teb pane-->


                    </div>
                    <!--end tab content-->

                </div>
            </form>
        </div>
        <!--end bg-white-->
    </div>
</div>
<!--end container-->
@endsection