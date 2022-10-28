@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')
<div class="container-fluid">
    <div class="layout-specing">

        <div class="bg-white mt-3">
            <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4"> الصلاحيات </h6>
                <div class="btns">
                    <a href="{{route('admin.roles.create')}}"  class="btn btn-dark"> إضافة صلاحية </a>
                </div>
            </div>



            <div class="p-4">
                <div class="btns-optons-table mb-3">
                    <button class="btn btn-dark">Print</button>
                    <button class="btn btn-dark">pdf</button>
                    <button class="btn btn-dark">Excel</button>
                    <button class="btn btn-dark">csv</button>
                    <button class="btn btn-dark">copy</button>
                </div>
                <div class="table-responsive   rounded-bottom mb-3">
                    <table class="table table-bordered table-center table-hover bg-white mb-0">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    <div class="form-check">
                                        <input id="select-all" class="form-check-input" type="checkbox" value="" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th class="text-center"> م </th>
                                <th class="text-center"> الاسم </th>
                                <th class="text-center"> اعدادات </th>
                            </tr>
                        </thead>
                        <tbody>
@foreach($roles as $role)
                            <!-- Start -->
                            <tr>
                                <td class="text-center p-2" width='50'>
                                    <div class="form-check">
                                        <input class="form-check-input" data-check-all="yes" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1"></label>
                                    </div>
                                </td>
                                <td class="text-center p-2" width='50'>
{{$role->id}}
                                </td>
                                <td class="text-center p-2">
                                   {{$role->name}}
                                </td>

                                <td class="text-end p-3">
                                    <div class="tools-options d-flex justify-content-center">
                                        <a href="{{route('admin.roles.edit',['id'=>$role->id])}}"> <i class="uil uil-edit"></i> </a>
                                        <a href="{{route('admin.roles.delete',['id'=>$role->id])}}"  onclick="return confirm('هل انت متأكد من حذف ({{$role->name}})?')" > <i class="uil uil-trash-alt"></i> </a>
                                    </div>
                                </td>
                            </tr>
                            <!-- End -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $roles->links() }}
            </div>
        </div>
        <!--end bg-white-->

    </div>
</div>
<!--end container-->

<!--End page-content" -->

@endsection