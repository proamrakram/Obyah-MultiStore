<form action="{{ route('admin.customers.update',['id'=>$customer->id]) }}"  enctype="multipart/form-data"  method="POST">
    @csrf
    <div class="bg-white p-3 rounded box-shadow">

       <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-md-3"><label for="name" class='font-sm'>الاسم </label></div>
                                                <div class="col-md-9"> <input type="text" value="{{$customer->name}}" name="name" id="name" value="" class="form-control @error('name') is-invalid @enderror">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-md-3"><label for="mobile_no" class='font-sm'>رقم الهاتف</label></div>
                                                <div class="col-md-9"> <input type="text" value="{{$customer->mobile_no}}" name="mobile_no" id="mobile_no" class="form-control @error('mobile_no') is-invalid @enderror">
                                                    @error('mobile_no')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-md-3"><label for="City" class='font-sm'>البلد</label></div>
                                                <div class="col-md-9"> <select name="country_id" id="" class="form-control form-select @error('country_id') is-invalid @enderror">
                                                        @foreach($countries as $country)
                                                        <option value="{{$country->id}}" @if($customer->country_id==$country->id )selected @endif>{{$country->country_name_ar}} </option>
                                                        @endforeach
                                                    </select> @error('country_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-md-3"><label for="postCode" class='font-sm'>الرمز</label></div>
                                                <div class="col-md-9"> <input name="postCode" value="{{$customer->postCode}}" type="text" id="postCode" class="form-control @error('postCode') is-invalid @enderror">
                                                    @error('postCode')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-md-3"><label for="email" class='font-sm'>البريد الالكترونى</label></div>
                                                <div class="col-md-9"> <input type="text" value="{{$customer->email}}" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-md-3"><label for="userPassowrd" class='font-sm'> الرقم السري </label></div>
                                                <div class="col-md-9"> <input name="password" type="password" id="userPassowrd" class="form-control @error('password') is-invalid @enderror">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-md-2"><label for="date" class='font-sm'>تاريخ الميلاد</label></div>
                                                <div class="col-md-10"> <input type="date" name="birthdate" value="{{$customer->birthdate}}" id="date" class="form-control @error('role') is-invalid @enderror">
                                                    @error('birthdate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="row align-items-center">
                                                <div class="col-md-2"><label for="type" class='font-sm'>النوع</label></div>
                                                <div class="col-md-10"> <select name="gender" id="" class="form-control form-select @error('gender') is-invalid @enderror">
                                                        <option value="male" @if($customer->gender=='male' )selected @endif> ذكر </option>
                                                        <option value="female" @if($customer->gender=='female' )selected @endif> أنثى </option>
                                                    </select>
                                                    @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="row align-items-center ">
                                                <div class="col-md-2"><label for="userImage" class='font-sm'> اضافة صورة مستخدم</label></div>
                                                <div class="col-md-10"> <input name="image" type="file" id="userImage" class="form-control @error('image') is-invalid @enderror">
                                                    @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    </div>

    <div class="modal-footer justify-content-center">
        <button type="submit" class="btn btn-dark px-5">تعديل</button>
    </div>

</form>