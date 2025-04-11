@extends('backend.layout.app')

@section('content')
    <div class="container-fluid px-4">
        <h4 class="mt-2 mb-3">Example Management</h4>
        <div class="card my-2">
            <div class="card-header">
                <div class="row ">
                    <div class="col-12 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5 class="m-0">Skills List</h5>
                        </div>
                        <button type="button" class="btn btn-primary create_btn"
                            data-url="{{ route('admin.skills.create') }}"><i class="fa-solid fa-plus"></i>
                            Add New</button>
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
    <script>
        const columns = [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
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
