@extends('partials.layout')
@section('title')
    Obaya - Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="bg-white mt-3">
                <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                    <h6 class="fw-bold mb-0 h4"> إضافة مشترك </h6>
                </div>

                <div class="p-4">
                    <form action="{{ route('admin.stores.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="col-md-3">
                            <h5>المعلومات الاساسية</h5>
                            <p class='text-muted'> (قم بإدخال المعلومات الاساسية) </p>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Name" class="col-2 col-form-label">
                                        الاسم <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" value="{{ old('store_name_ar') }}"
                                                    name="store_name_ar"
                                                    class="form-control @error('store_name_ar') is-invalid @enderror"
                                                    id="NameAr" placeholder="الاسم بالعربية">

                                                @error('store_name_ar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-6">
                                                <input type="text" value="{{ old('store_name_en') }}"
                                                    name="store_name_en"
                                                    class="form-control col-6   @error('store_name_en') is-invalid @enderror"
                                                    id="NameEn" placeholder="الاسم بالانجليزية">
                                                @error('store_name_en')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Phone" class="col-2 col-form-label">
                                        رقم الهاتف <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="text" value="{{ old('phone_number') }}" name="phone_number"
                                            class="form-control   @error('phone_number') is-invalid @enderror "
                                            id="Phone" placeholder="رقم الهاتف">
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="admin" class="col-2 col-form-label">
                                        مدير المتجر <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <select name="store_admin" id=""
                                            class="form-select form-control  @error('store_admin') is-invalid @enderror">
                                            @foreach ($admins as $admin)
                                                <option value="{{ $admin->id }}"
                                                    @if (old('store_admin') == $admin->id) selected @endif>{{ $admin->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('store_admin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Country" class="col-2 col-form-label">
                                        الدولة <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <select name="store_country" id="country-dropdown"
                                            class="form-select form-control  @error('store_country') is-invalid @enderror">
                                            <option value="">اختر الدولة</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}"
                                                    @if (old('country_id') == $country->id) selected @endif>
                                                    {{ $country->country_name_ar }} </option>
                                            @endforeach
                                        </select>
                                        @error('store_country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="City" class="col-2 col-form-label">
                                        المدينة <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <select name="store_city" id="state-dropdown"
                                            class="form-select form-control  @error('store_city') is-invalid @enderror">

                                        </select>
                                        @error('store_city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Date" class="col-2 col-form-label">
                                        اسم النطاق <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="text" value="{{ old('store_domain') }}" name="store_domain"
                                            class="form-control   @error('store_domain') is-invalid @enderror"
                                            id="Date" placeholder="اكتب اسم النطاق">
                                        @error('store_domain')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="City" class="col-2 col-form-label">
                                        نوع الاشتراك
                                        <span class="text-danger"> * </span>

                                    </label>
                                    <div class="col-10">
                                        <select name="store_type_id" id="store_type"
                                            class="form-select form-control   @error('store_type') is-invalid @enderror">
                                            @foreach ($stores_types as $store_type)
                                                <option value="{{ $store_type->id }}">{{ $store_type->store_type_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('store_type_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="City" class="col-2 col-form-label">
                                        عملة المتجر
                                        <span class="text-danger"> * </span>

                                    </label>
                                    <div class="col-10">
                                        <select name="currency_id" id="currency_id"
                                            class="form-select form-control   @error('currency_id') is-invalid @enderror">
                                            @foreach ($currencies as $currency)
                                                <option value="{{ $currency->id }}">{{ $currency->currency_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('currency_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="store_description_ar" class="col-2 col-form-label">
                                        وصف المتجر بالعربية
                                        <span class="text-danger"> * </span>

                                    </label>
                                    <div class="col-10">
                                        <textarea type="text" name="store_description_ar"
                                            class="form-control   @error('store_description_ar') is-invalid @enderror" id=""
                                            placeholder="الوصف بالعربية">{{ old('store_description_ar') }}</textarea>
                                        @error('store_description_ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">

                                    <label for="store_description_en" class="col-2 col-form-label">
                                        وصف المتجر بالانجليزية
                                        <span class="text-danger"> * </span>

                                    </label>
                                    <div class="col-10">
                                        <textarea type="text" name="store_description_en"
                                            class="form-control   @error('store_description_en') is-invalid @enderror" id=""
                                            placeholder="الوصف   بالانجليزية">{{ old('store_description_en') }}</textarea>
                                        @error('store_description_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="address_ar" class="col-2 col-form-label">
                                        العنوان بالعربية <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="text" value="{{ old('address_ar') }}" name="address_ar"
                                            class="form-control   @error('address_ar') is-invalid @enderror "
                                            id="Phone" placeholder="العنوان بالعربية">
                                        @error('address_ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="address_en" class="col-2 col-form-label">
                                        العنوان بالانجليزية <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="text" value="{{ old('address_en') }}" name="address_en"
                                            class="form-control   @error('address_en') is-invalid @enderror "
                                            id="Phone" placeholder="العنوان بالانجليزية">
                                        @error('address_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Date" class="col-2 col-form-label">
                                        رقم التسجيل الموثق <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="text" value="{{ old('registration_number_in_trusted') }}"
                                            name="registration_number_in_trusted"
                                            class="form-control   @error('registration_number_in_trusted') is-invalid @enderror"
                                            id="registration_number_in_trusted" placeholder="اكتب رقم التسجيل الموثق">
                                        @error('registration_number_in_trusted')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Date" class="col-2 col-form-label">
                                        رابط السجل التجاري<span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="text" value="{{ old('commercial_record') }}"
                                            name="commercial_record"
                                            class="form-control   @error('commercial_record') is-invalid @enderror"
                                            id="commercial_record" placeholder="أدخل رابط السجل التجاري">
                                        @error('commercial_record')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Date" class="col-2 col-form-label">
                                        رقم الهوية <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="text" value="{{ old('id_number') }}" name="id_number"
                                            class="form-control   @error('id_number') is-invalid @enderror"
                                            id="id_number" placeholder="ادخل رقم الهوية">
                                        @error('id_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-3">
                            <h5>اختار الباقة</h5>
                            <p class='text-muted'> (قم باختيار الاقة التي تناسبك) </p>
                        </div>

                        <div class="choose-package my-4 ">
                            <div class="row algin-items-center">
                                @foreach ($packages as $package)
                                    <div class="col-md-3 mb-3">
                                        <div class="box-backage">
                                            <input type="radio"
                                                value="{{ $package->id }}"name='subscription_package_id'>
                                            <label for="">
                                                <h6>{{ $package->package_name_ar }}</h6>
                                                <p>
                                                    {{ $package->package_description_ar }}
                                                </p>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>



                        <div class="col-md-3">
                            <h5>تفاصيل الدفع والاشتراك</h5>
                            <p class='text-muted'> (قم باختيار طريقة الدفع ومدة الاشتراك) </p>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="City" class="col-2 col-form-label">
                                        طريقة الدفع <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <select name="payment_type" id="payment_type"
                                            class="form-select form-control   @error('payment_type') is-invalid @enderror">
                                            @foreach ($payment_types as $payment_type)
                                                <option value="{{ $payment_type->id }}">{{ $payment_type->payment_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('payment_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row align-items-center">
                                    <label for="Name" class="col-2 col-form-label">
                                        الحالة <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-md-10">
                                        <div class="form-check form-switch p-0 pt-1">
                                            <input name="store_status"
                                                class="form-check-input   @error('store_status') is-invalid @enderror"
                                                type="checkbox" id="flexSwitchCheckChecked" checked="">
                                            @error('store_status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Phone" class="col-2 col-form-label">
                                        تاريخ بداية الاشتراك <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="date" value="{{ old('subscription_start_date') }}"
                                            name="subscription_start_date"
                                            class="form-control   @error('subscription_start_date') is-invalid @enderror"
                                            id="Phone" placeholder="تاريخ بداية الاشتراك">
                                        @error('subscription_start_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Phone" class="col-2 col-form-label">
                                        تاريخ نهاية الاشتراك <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="date" value="{{ old('subscription_end_date') }}"
                                            name="subscription_end_date"
                                            class="form-control   @error('subscription_end_date') is-invalid @enderror"
                                            id="subscription_end_date" placeholder="تاريخ نهاية الاشتراك">
                                        @error('subscription_end_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>


                        <hr class="mt-5 mb-4">
                        <button class="btn btn-dark px-4 mx-4 py-2"> حفظ البيانات </button>

                    </form>
                </div>




            </div>
            <!--end bg-white-->
        </div>
    </div>
    <!--end container-->
@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#country-dropdown').on('change', function() {
                var country_id = this.value;
                $("#state-dropdown").html('');
                $.ajax({
                    url: "{{ url('/admin/get-cities-by-country') }}",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#state-dropdown').html('<option value="">اختر المدينة</option>');
                        $.each(result.states, function(key, value) {
                            $("#state-dropdown").append('<option value="' + value.id +
                                '">' + value.city_name_ar + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
