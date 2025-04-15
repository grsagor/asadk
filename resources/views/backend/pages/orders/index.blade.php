@extends('backend.layout.app')

@section('title', 'Orders')

@section('content')
<div class="container-fluid px-5 pt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="d-flex align-items-center"><h5 class="m-0">Orders List</h5></div>
                            @if (Helper::hasRight('templates.create'))
                                <button type="button" class="btn btn-primary btn-sm" id="create_btn" data-url="{{ route('admin.orders.create') }}">
                                    <i class="fas fa-plus"></i> Add New
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="orders_table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Total Items</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Payment Status</th>
                                <th>Payment Method</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for create/edit/view form -->
<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-labelledby="form_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="form_modal_label">Order Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="form_modal_content">
                <!-- Form content will be loaded here -->
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('vendor/datatable/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
@endsection

@section('script')
<script src="{{ asset('vendor/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatable/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#orders_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.orders.list') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'user_name', name: 'user_name'},
                {data: 'total_items', name: 'total_items'},
                {data: 'total_amount', name: 'total_amount'},
                {data: 'status', name: 'status'},
                {data: 'payment_status', name: 'payment_status'},
                {data: 'payment_method', name: 'payment_method'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

        // Create button click handler
        $('#create_btn').click(function() {
            var url = $(this).data('url');
            $.get(url, function(response) {
                $('#form_modal_content').html(response.html);
                initializeSelect2();
                $('#form_modal').modal('show');
            });
        });

        // View button click handler
        $(document).on('click', '.view_btn', function() {
            var url = $(this).data('url');
            $.get(url, function(response) {
                $('#form_modal_content').html(response.html);
                $('#form_modal').modal('show');
            });
        });

        // Edit button click handler
        $(document).on('click', '.edit_btn', function() {
            var url = $(this).data('url');
            $.get(url, function(response) {
                $('#form_modal_content').html(response.html);
                initializeSelect2();
                $('#form_modal').modal('show');
            });
        });

        // Delete button click handler
        $(document).on('click', '.delete_btn', function() {
            var url = $(this).data('url');
            if (confirm('Are you sure you want to delete this order?')) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {_token: '{{ csrf_token() }}'},
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.message);
                            table.ajax.reload();
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        toastr.error('Something went wrong!');
                    }
                });
            }
        });

        // Form submit handler
        $(document).on('submit', '#order_form', function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var method = form.attr('method');
            
            $.ajax({
                url: url,
                method: method,
                data: form.serialize(),
                success: function(response) {
                    if (response.success) {
                        $('#form_modal').modal('hide');
                        toastr.success(response.message);
                        table.ajax.reload();
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        toastr.error(value[0]);
                    });
                }
            });
        });

        // Initialize Select2 for dropdowns
        function initializeSelect2() {
            $('.select2').select2({
                theme: 'bootstrap4',
                width: '100%'
            });
        }
    });
</script>
@endsection