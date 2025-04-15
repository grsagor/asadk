@extends('backend.layout.app')

@section('title', 'Templates')

@section('content')
    <div class="container-fluid px-5 pt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5 class="m-0">Templates List</h5>
                                    </div>
                                    @if (Helper::hasRight('templates.create'))
                                        <a href="{{ route('admin.templates.create') }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> Add New Template
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="templatesTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Thumbnail</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('styles')
    @endpush

    @section('script')
        <script>
            window.listUrl = "{{ route('admin.templates.list') }}";
            window.csrfToken = "{{ csrf_token() }}";
            window.columns = [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'thumbnail',
                    name: 'thumbnail'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'category_name',
                    name: 'category_name'
                },
                {
                    data: 'regular_price',
                    name: 'regular_price'
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
