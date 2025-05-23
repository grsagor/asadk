@extends('backend.layout.app')

@section('title', 'Tags')

@section('content')
<div class="container-fluid px-5 pt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="d-flex align-items-center"><h5 class="m-0">Tags List</h5></div>
                            @if (Helper::hasRight('templates.create'))
                                <button type="button" class="btn btn-primary btn-sm" id="create_btn" data-url="{{ route('admin.tags.create') }}">
                                    <i class="fas fa-plus"></i> Add New
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="tags_table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for create/edit form -->
<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-labelledby="form_modal_label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="form_modal_label">Tag Form</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
    window.listUrl = "{{ route('admin.tags.list') }}";
    window.csrfToken = "{{ csrf_token() }}";
    window.columns = [
        {data: 'id', name: 'id'},
        {data: 'name', name: 'name'},
        {data: 'description', name: 'description'},
        {data: 'order', name: 'order'},
        {data: 'status', name: 'status'},
        {data: 'action', name: 'action', orderable: false, searchable: false}
    ];
</script>
<script src="{{ asset('assets/backend/js/common-crud.js') }}"></script>
@endsection