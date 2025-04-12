@extends('backend.layout.app')

@section('content')
    <div class="container-fluid px-4">
        <h4 class="mt-2 mb-3">Example Management</h4>
        <div class="card my-2">
            <div class="card-header">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <div class="d-flex align-items-center"><h5 class="m-0">Skills List</h5></div>
                        @if (Helper::hasRight('skills.create'))
                            <button type="button" class="btn btn-primary btn-sm" id="create_btn" data-url="{{ route('admin.skills.create') }}">
                                <i class="fas fa-plus"></i> Add New
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered yajra-datatable" data-url="{{ route('admin.skills.list') }}">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Proficiency</th>
                            <th>Description</th>
                            <th>Order</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="crud_modal" tabindex="-1" role="dialog" aria-labelledby="crud_modalLabel"
        aria-hidden="true">

    </div>
@endsection

@section('script')
<script src="{{ asset('vendor/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatable/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script>
    window.listUrl = "{{ route('admin.skills.list') }}";
    window.csrfToken = "{{ csrf_token() }}";
    window.columns = [
        {data: 'id', name: 'id'},
        {data: 'name', name: 'name'},
        {data: 'proficiency', name: 'proficiency'},
        {data: 'description', name: 'description'},
        {data: 'order', name: 'order'},
        {data: 'action', name: 'action', orderable: false, searchable: false}
    ];
</script>
<script src="{{ asset('assets/backend/js/common-crud.js') }}"></script>
@endsection
                name: 'name'
            },
            {
                data: 'proficiency',
                name: 'proficiency'
            },
            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'order',
                name: 'order'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ];

        let table = initDatatable({columns});
    </script>
@endsection
