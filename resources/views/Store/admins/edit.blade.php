<form action="{{ route('store.admins.update',['id'=>$admin->id]) }}" method="POST">
    @csrf
    <div class="bg-white p-3 rounded box-shadow">
        <div class="row">
            <div class="col-md-6">
                <div class="row align-items-center mb-3">
                    <div class="col-md-4"><label for="userName" class='font-sm'>الاسم <span class="text-danger">*</span> </label></div>
                    <div class="col-md-8">
                        <input type="text" name="name" id="userName" value="{{$admin->name}}" class="form-control mb-2 @error('name') is-invalid @enderror" placeholder='الاسم بالعربية'>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center mb-3">
                    <div class="col-md-4"><label for="userPhoneNumber" class='font-sm'>رقم الهاتف <span class="text-danger">*</span></label></div>
                    <div class="col-md-8"> <input name="mobile_no" value="{{$admin->mobile_no}}" type="text" id="userPhoneNumber" class="form-control @error('mobile_no') is-invalid @enderror" placeholder='برجاء ادخال11 رقم'>

                        @error('mobile_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row align-items-center mb-3">
                    <div class="col-md-4"><label for="userName" class='font-sm'>البريد الالكتروني <span class="text-danger">*</span> </label></div>
                    <div class="col-md-8">
                        <input type="email" name="email" value="{{$admin->email}}" id="userName" class="form-control mb-2 @error('email') is-invalid @enderror" placeholder='البريد الالكتروني'>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center mb-3">
                    <div class="col-md-4"><label for="userPhoneNumber" class='font-sm'> الجنس </label></div>
                    <div class="col-md-8">
                        <select name="gender" id="" class="form-control form-select @error('gender') is-invalid @enderror">
                            <option value="male" @if($admin->gender == 'male') selected @endif> ذكر </option>
                            <option value="female" @if($admin->gender =='female') selected @endif> أنثى </option>
                        </select>
                        @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row align-items-center mb-3">
                    <div class="col-md-4"><label for="userPhoneNumber" class='font-sm'> العنوان <span class="text-muted" style='font-size: 10px'> إختياري </span></label></div>
                    <div class="col-md-8"> <input name="address" value="{{$admin->address_1}}" type="text" id="userPhoneNumber" class="form-control @error('address') is-invalid @enderror" placeholder='العنوان'>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row align-items-center mb-3">
                    <div class="col-md-4"><label for="userPhoneNumber" class='font-sm'> الوظيفة </label></div>
                    <div class="col-md-8">
                        <select name="role" id="" class="form-control form-select @error('role') is-invalid @enderror">
                            @foreach($roles as $role)
                            <option value="{{$role->name}}" @if($admin->hasRole($role)) selected @endif> {{$role->name}} </option>
                            @endforeach
                        </select>
                        @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row align-items-center mb-3">
                    <div class="col-md-4"><label for="userPassowrd" class='font-sm'> الرقم السري <span class="text-danger">*</span></label></div>
                    <div class="col-md-8"> <input name="password" type="password" id="userPassowrd" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
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