@extends('backend.layout.app')

@section('title', 'License Types')

@section('content')
    <div class="container-fluid px-5 pt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5 class="m-0">License Types List</h5>
                                </div>
                                @if (Helper::hasRight('templates.create'))
                                    <a href="{{ route('admin.license.types.create') }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-plus"></i> Add New
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="license_types_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')
@endsection

@section('script')
    <script>
        window.listUrl = "{{ route('admin.license.types.list') }}";
        window.csrfToken = "{{ csrf_token() }}";
        window.columns = [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ];
    </script>
@endsection