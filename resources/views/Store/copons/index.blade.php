@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')
<div class="container-fluid">
        <div class="layout-specing">

 

            <div class="bg-white mt-3">
                <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                    <h6 class="fw-bold mb-0 h4"> كوبونات التخفيض  </h6>
                    <div class="btns">
                        <a href="javascript:void(0)" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addCoupons"> إضافة كوبون </a>
                    </div>
                </div>

                <!-- Modal Content Start -->
                <div class="modal fade" id="addCoupons" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                   
                        <div class="modal-content rounded shadow border-0">
                            <form action="{{ route('store.copons.store') }}" method="POST">
                                @csrf <div class="modal-header border-bottom bg-soft-dark">
                                <h5 class="modal-title" id="LoginForm-title"> انشاء كوبون تخفيض </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="bg-white p-3 rounded box-shadow">
                                    <input type="text" id="catName" name="copon_code"   value="{{ old('copon_code') }}"  class="form-control mb-2 @error('copon_code') is-invalid @enderror" placeholder=' كود الكوبون بالحروف '> 
                                    @error('copon_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <input type="text" name="copon_amount" id="catName"  value="{{ old('copon_amount') }}" class="form-control mb-2 @error('copon_amount') is-invalid @enderror" placeholder=' قيمة الخصم '> 
                                                    @error('copon_amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <select name="copon_type" id="" class="form-control form-select  mb-2 @error('copon_type') is-invalid @enderror">
                                                    <option value="">  نوع الخصم للعميل </option>
                                        <option value="fixed" @if(old('copon_type')=='fixed' )selected @endif>  ثابت </option>
                                        <option value="percentage" @if(old('copon_type')=='percentage' )selected @endif> نسبة % </option>
                                    </select>@error('copon_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror

                                    <select name="is_free_shipping" id="" class="form-control form-select  mb-2 @error('is_free_shipping') is-invalid @enderror">
                                        <option value="" >  مع شحن مجانى ؟ </option>
                                        <option value="1" @if(old('is_free_shipping')=="1" )selected @endif>  نعم</option>
                                        <option value="0" @if(old('is_free_shipping')=="0" )selected @endif> لا </option>
                                    </select>@error('is_free_shipping')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                    <select name="exclode_offers" id="" class="form-control form-select  mb-2 @error('exclode_offers') is-invalid @enderror">
                                        <option value="" >  استثناء المنتجات المخفضة ؟ </option>
                                        <option value="1" @if(old('exclode_offers')=="1" )selected @endif>  نعم </option>
                                        <option value="0" @if(old('exclode_offers')=="0" )selected @endif>  لا</option>
                                    </select>   @error('exclode_offers')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror                                                                          

                                    <input type="text"  name="copon_limit" id="catName"  value="{{ old('copon_limit') }}" class="form-control mb-2 @error('copon_limit') is-invalid @enderror" placeholder=' الحد الأدنى للمشتروات '> 
                                    @error('copon_limit')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <input type="text"  name="use_count_all" id="catName"  value="{{ old('use_count_all') }}" class="form-control mb-2 @error('use_count_all') is-invalid @enderror" placeholder=' عدد مرات الاستخدامات للجميع '> 
                                                    @error('use_count_all')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <input type="text" name="user_use_count" id="catName"  value="{{ old('user_use_count') }}" class="form-control mb-2 @error('user_use_count') is-invalid @enderror" placeholder=' عدد مرات الاستخدام للعميل الواحد '> 
                                                    @error('user_use_count')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <input type="date" name="expire_date" id="catName"  value="{{ old('expire_date') }}" class="form-control mb-2 @error('expire_date') is-invalid @enderror" placeholder=' عدد مرات الاستخدام للعميل الواحد '> 
                                                    @error('expire_date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                              
                                                                               
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-dark px-5">حفظ</button>
                            </div>
                        </form></div>

                    </div>
                </div>
                <!-- Modal Content End -->
                
            <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content rounded shadow border-0">
                        <div class="modal-header border-bottom bg-soft-dark">
                            <h5 class="modal-title" id="LoginForm-title"> تعديل مستخدم </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div id="modal-body">
</div>
                        </div>
                    </div>
                </div>
            </div>

                
                <div class="p-4 ">
                    <div class="heading-coupons">
                        <div class="d-flex align-items-center">
                            <div class='font-sm me-2'>
                                <span class="squre me-1 bg-yellow"></span>
                                <span>مفعل</span>
                            </div>
                            <div class='font-sm  me-2'>
                                <span class="squre me-1 bg-gray"></span>
                                <span>منتهي</span>
                            </div>  
                            <div class='font-sm  me-2'>
                                <span class="squre me-1 bg-dark"></span>
                                <span>غير مفعل</span>
                            </div>                                                        
                        </div>
                    </div>   

                    <div class="body-coupons mt-5">
                        @foreach($copons as $copon)
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <span class="squre me-1 @if( $copon->expire_date < date('Y-m-d')) bg-gray @elseif($copon->status == 'inactive' ) bg-dark @else bg-yellow @endif "></span>
                                <span> {{$copon->copon_code}} </span>
                            </div>
                            <div class="tools-options d-flex justify-content-center">
                                <div class="form-check form-switch p-0 pt-1">
                                <input class="form-check-input" type="checkbox" onclick="window.location='{{ route("store.copons.changeStatus",["id"=>$copon->id]) }}'" id="flexSwitchCheckChecked" @if($copon->status == 'active') checked="" @endif>
                                </div>
                                <a href="#" onclick="return func({{$copon->id}})"> <i class="uil uil-edit"></i> </a>
                                        <a href="{{route('store.copons.delete',['id'=>$copon->id])}}" onclick="return confirm('هل انت متأكد من حذف ({{$copon->copon_code}})?')"> <i class="uil uil-trash-alt"></i> </a>
                                    
                            </div>
                        </div>

                        @endforeach
                    </div>   
                    
                {{$copons->links()}}
                </div>
            </div> <!--end bg-white-->

        </div>         
    </div><!--end container-->


@endsection
@section('script')
<script>
    function func(id) {
        $.ajax({
            url: '/store/copons/edit',
            dataType: 'html',
            method: 'GET',
            data: {
                id: id
            },
            success: function(data) {
                $('#editUser').modal('show');
                $('#modal-body').html(data);

            }
        });
    }

</script>
@endsection