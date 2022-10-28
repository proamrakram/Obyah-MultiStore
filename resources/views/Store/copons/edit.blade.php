<form action="{{ route('store.copons.update',['id'=>$copon->id]) }}" method="POST">
    @csrf
    <div class="bg-white p-3 rounded box-shadow">
                                    <input type="text" id="catName" name="copon_code"   value="{{$copon->copon_code}}"  class="form-control mb-2 @error('copon_code') is-invalid @enderror" placeholder=' كود الكوبون بالحروف '> 
                                    @error('copon_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <input type="text" name="copon_amount" id="catName"  value="{{$copon->copon_amount}}" class="form-control mb-2 @error('copon_amount') is-invalid @enderror" placeholder=' قيمة الخصم '> 
                                                    @error('copon_amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <select name="copon_type" id="" class="form-control form-select  mb-2 @error('copon_type') is-invalid @enderror">
                                                    <option value="">  نوع الخصم للعميل </option>
                                        <option value="fixed" @if($copon->copon_type=='fixed' )selected @endif>  ثابت </option>
                                        <option value="percentage" @if($copon->copon_type=='percentage' )selected @endif> نسبة % </option>
                                    </select>@error('copon_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror

                                    <select name="is_free_shipping" id="" class="form-control form-select  mb-2 @error('is_free_shipping') is-invalid @enderror">
                                        <option value="" >  مع شحن مجانى ؟ </option>
                                        <option value="1" @if($copon->is_free_shipping=="1" )selected @endif>  نعم</option>
                                        <option value="0" @if($copon->is_free_shipping=="0" )selected @endif> لا </option>
                                    </select>@error('is_free_shipping')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                    <select name="exclode_offers" id="" class="form-control form-select  mb-2 @error('exclode_offers') is-invalid @enderror">
                                        <option value="" >  استثناء المنتجات المخفضة ؟ </option>
                                        <option value="1" @if($copon->exclode_offers=="1" )selected @endif>  نعم </option>
                                        <option value="0" @if($copon->exclode_offers=="0" )selected @endif>  لا</option>
                                    </select>   @error('exclode_offers')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror                                                                          

                                    <input type="text"  name="copon_limit" id="catName"  value="{{ $copon->copon_limit }}" class="form-control mb-2 @error('copon_limit') is-invalid @enderror" placeholder=' الحد الأدنى للمشتروات '> 
                                    @error('copon_limit')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <input type="text"  name="use_count_all" id="catName"  value="{{ $copon->use_count_all }}" class="form-control mb-2 @error('use_count_all') is-invalid @enderror" placeholder=' عدد مرات الاستخدامات للجميع '> 
                                                    @error('use_count_all')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <input type="text" name="user_use_count" id="catName"  value="{{ $copon->user_use_count }}" class="form-control mb-2 @error('user_use_count') is-invalid @enderror" placeholder=' عدد مرات الاستخدام للعميل الواحد '> 
                                                    @error('user_use_count')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <input type="date" name="expire_date" id="catName"  value="{{ $copon->expire_date }}" class="form-control mb-2 @error('expire_date') is-invalid @enderror" placeholder=' عدد مرات الاستخدام للعميل الواحد '> 
                                                    @error('expire_date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                              
                                                                               
                                </div>

    <div class="modal-footer justify-content-center">
        <button type="submit" class="btn btn-dark px-5">تعديل</button>
    </div>

</form>