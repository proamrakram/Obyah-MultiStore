@extends('partials.layout')
@section('title')
    Obaya - Product
@endsection

@section('content')
    @livewireStyles


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />

    <div class="container-fluid">
        <div class="layout-specing">

            @livewire('products.index')

        </div>
    </div>

    @livewireScripts
@endsection




















{{-- @section('script') --}}
{{-- <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script> --}}

{{-- <script>
        var table;
        $(document).ready(function() {
            get_products();
            // handleSearchDatatable();
            handleSearchDatatable();



        });

        function func(id) {
            $.ajax({
                url: '/admin/admins/edit',
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

        function func_change_status(id) {
            $.ajax({
                url: '/admin/admins/change-status',
                dataType: 'html',
                method: 'GET',
                data: {
                    id: id
                },
                success: function(data) {

                }
            });
        }

        function addCategory() {
            var formData = new FormData($("#add_category")[0]);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('product/products/add_category') }}",
                dataType: 'json',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(resp) {
                    //alert(resp.status);
                    $('#addCategory').modal('hide');

                    if (resp.status === false) {
                        $.each(resp.message, function(i, error) {
                            display_error_messages("error", error[0]);

                        });

                    } else {
                        display_error_messages("success", resp.message);
                        //DisplayToastrMessage_General("success",resp.message, 3000);
                        // location.reload()
                        // table.ajax.reload();
                        $('#addCategory').modal('hide');
                        //  RefreshTable($("#posts") , "{{ url('cms/admin/get') }}");


                    }

                },
                'complete': function() {

                }
            });
        }

        function confirmDelete(id) {

            Swal.fire({
                text: "Are you sure you want to delete this event?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            // 'X-CSRF-TOKEN': csrf_token()
                        },
                        url: "{{ url('product/products/delete_product') }}",
                        type: "POST",
                        data: {
                            id: id
                        },
                        dataType: "html",
                        success: function() {
                            table.row($(parent)).remove().draw();
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            swal("Error deleting!", "Please try again", "error");
                        }
                    });
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: "Event was not deleted!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });


        }

        function active_deactive_product(id) {

            Swal.fire({
                text: "Are you sure you want to change user status?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, change it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ url('product/products/active_deactive_product') }}",
                        type: "POST",
                        data: {
                            id: id
                        },
                        dataType: "html",
                        success: function() {
                            display_error_messages("success", "Updated Successfully");
                            //swal("Success Updating!", "Updated Successfully", "success");
                            table.ajax.reload();
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            swal("Error Updating!", "Please try again", "error");
                        }
                    });
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: "Event was not completed!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });



        }
        $("#table_id").submit(function(e) {
            e.preventDefault();
            get_products();
        });


        function get_products() {
            table = $('#table_id').DataTable({

                "processing": true,
                "serverSide": true,
                buttons: [

                ],
                searchDelay: 500,
                // "searching": false,
                // dom: 'lrt',
                bFilter: false,
                bInfo: false,

                dom: 'Bfrtip',


                "language": {
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    },
                    "emptyTable": "No Blogs  ",
                    "infoEmpty": "No Blogs",
                    "infoFiltered": "(filtered1 from MAX total records)",
                    "lengthMenu": " MENU",


                    "paginate": {
                        "previous": "previous",
                        "next": "next",
                        "last": "last",
                        "first": "first"
                    }
                },
                "ajax": {
                    "url": "{{ url('product/products/get_product') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": {
                        _token: "{{ csrf_token() }}"
                    }
                },
                columns: [{
                        'data': 'chekbox'

                    },
                    {
                        'data': 'colum'

                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'category'
                    },
                    {
                        data: 'price'
                    },
                    {
                        data: 'tax'
                    },
                    {
                        data: 'stock',
                    },
                    {
                        data: 'product_image',
                    },
                    {
                        data: 'options'
                    },
                ]
            });
            $('#categories').click(function() {
                table.search(this.value).draw();
            });
            $('#name').on('keyup', function() {
                table.search($(this).val()).draw();
            });
        }
        // var handleSearchDatatable = function() {
        //     const filterSearch = document.querySelector('#name');
        //     filterSearch.addEventListener('keyup', function(e) {
        //         dt.search(e.target.value).draw();
        //     });
        // }
        // var handleSearchDatatable = function() {
        //     const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
        //     filterSearch.addEventListener('keyup', function(e) {
        //         dt.search(e.target.value).draw();
        //     });
        // }
    </script> --}}
