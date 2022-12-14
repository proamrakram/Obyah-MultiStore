@extends('partials.layout')
@section('title') Obaya - Dashboard @endsection

@section('content')
<div class="container-fluid">

    <div class="layout-specing">

        <div class="bg-white mt-3">
            <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4"> تعديل صلاحية </h6>
            </div>

            <div class="p-4">
            <form method="post" action="{{ route('admin.roles.update',['id'=>$role->id]) }}" enctype="multipart/form-data">
                                    @csrf
                <div class="table-responsive   rounded-bottom mb-3">
                    <table class="table table-bordered table-center table-hover bg-white mb-0">
                        <thead class='bg-light'>
                            <tr>
                                <td class='p-3'> القسم </td>
                                <td class='p-3'> رؤية </td>
                                <td class='p-3'> تعديل </td>
                                <td class='p-3'> إضافة </td>
                                <td class='p-3'> حذف </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $x = 0; ?>
                            @foreach($permissions as $permission)

                            @if($x==1 && $permission->parent_id == null)
                            </tr>
                            <?php $x = 0; ?>
                            @endif
                            @if($permission->parent_id == null)
                            <?php $x = 1; ?>
                            <tr>
                                <td class='p-3'> {{$permission->name}}</td>

                                @else
                                <td class='p-3'>
                                    <div class="form-check form-check-inline form-check-fill">
                                        <div class="mb-0">
                                            <div class="form-check">
                                                <input name="permissions[]" class="form-check-input" type="checkbox" value="{{$permission->id}}" id="colorRed"
                                                @if(!is_null($role->permissions->find($permission->id))) checked @endif>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                @endif
                                @endforeach

                        </tbody>
                    </table>
                    @error('permissions')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="row mb-3 mt-4 mb-4">
                            <label for="rolesName" class="col-3 col-form-label"> إسم الصلاحية </label>
                            <div class="col-9">
                                <input type="text" value="{{$role->name}}" name="role_name" class="form-control  @error('role_name') is-invalid @enderror" id="rolesName" placeholder="إسم الصلاحية ">
                                @error('role_name')
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