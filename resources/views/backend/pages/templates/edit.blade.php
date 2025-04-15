@extends('backend.layout.app')

@section('title', 'Edit Template')

@section('content')
<div class="container-fluid px-5 pt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Template</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.templates.index') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-list"></i> Templates List
                        </a>
                    </div>
                </div>
                <form action="{{ route('admin.templates.update', $template->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $template->title) }}" required>
                                    @error('title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id', $template->category_id) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="regular_price">Regular Price</label>
                                    <input type="number" step="0.01" class="form-control @error('regular_price') is-invalid @enderror" id="regular_price" name="regular_price" value="{{ old('regular_price', $template->regular_price) }}" required>
                                    @error('regular_price')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="framework">Framework</label>
                                    <input type="text" class="form-control @error('framework') is-invalid @enderror" id="framework" name="framework" value="{{ old('framework', $template->framework) }}" required>
                                    @error('framework')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="browser_compatibility">Browser Compatibility</label>
                                    <input type="text" class="form-control @error('browser_compatibility') is-invalid @enderror" id="browser_compatibility" name="browser_compatibility" value="{{ old('browser_compatibility', $template->browser_compatibility) }}" required>
                                    @error('browser_compatibility')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="documentation_status">Documentation Status</label>
                                    <input type="text" class="form-control @error('documentation_status') is-invalid @enderror" id="documentation_status" name="documentation_status" value="{{ old('documentation_status', $template->documentation_status) }}" required>
                                    @error('documentation_status')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="support_period">Support Period</label>
                                    <input type="text" class="form-control @error('support_period') is-invalid @enderror" id="support_period" name="support_period" value="{{ old('support_period', $template->support_period) }}" required>
                                    @error('support_period')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="demo_url">Demo URL</label>
                                    <input type="url" class="form-control @error('demo_url') is-invalid @enderror" id="demo_url" name="demo_url" value="{{ old('demo_url', $template->demo_url) }}">
                                    @error('demo_url')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="3" required>{{ old('short_description', $template->short_description) }}</textarea>
                                    @error('short_description')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description', $template->description) }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Features</label>
                                    <div id="features-container">
                                        @foreach($template->features as $feature)
                                            <div class="input-group mb-2">
                                                <input type="text" class="form-control" name="features[]" value="{{ $feature->feature_name }}" required>
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-danger remove-feature">Remove</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" id="add-feature">Add Feature</button>
                                    @error('features')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>License Types</label>
                                    @foreach($licenseTypes as $license)
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="license_{{ $license->id }}" name="licenses[]" value="{{ $license->id }}" 
                                                {{ in_array($license->id, old('licenses', $template->licenses->pluck('id')->toArray())) ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="license_{{ $license->id }}">{{ $license->name }}</label>
                                        </div>
                                    @endforeach
                                    @error('licenses')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Current Images</label>
                                    <div class="row">
                                        @foreach($template->images as $image)
                                            <div class="col-md-3 mb-3">
                                                <div class="position-relative">
                                                    <img src="{{ asset($image->image_url) }}" class="img-thumbnail" alt="Template Image">
                                                    <button type="button" class="btn btn-danger btn-sm position-absolute delete-image" style="top: 5px; right: 20px;" data-id="{{ $image->id }}">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                                @if($image->is_thumbnail)
                                                    <span class="badge badge-success">Thumbnail</span>
                                                @endif
                                                @if($image->is_main)
                                                    <span class="badge badge-primary">Main</span>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Add New Images</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="new_images" name="new_images[]" multiple accept="image/*">
                                        <label class="custom-file-label" for="new_images">Choose files</label>
                                    </div>
                                    @error('new_images')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Template File</label>
                                    @if($template->template_file)
                                        <div class="mb-2">
                                            <span class="text-success">Current file:</span> {{ basename($template->template_file) }}
                                            <a href="{{ route('admin.templates.download', $template->id) }}" class="btn btn-info btn-sm ml-2">
                                                <i class="fas fa-download"></i> Download
                                            </a>
                                        </div>
                                    @endif
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="template_file" name="template_file" accept=".zip,.rar">
                                        <label class="custom-file-label" for="template_file">Choose new template file</label>
                                    </div>
                                    <small class="form-text text-muted">Upload new ZIP or RAR file to replace current template file (max: 50MB)</small>
                                    @error('template_file')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Template</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(function() {

        $('#add-feature').click(function() {
            let featureHtml = `
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="features[]" required>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-danger remove-feature">Remove</button>
                    </div>
                </div>
            `;
            $('#features-container').append(featureHtml);
        });

        $(document).on('click', '.remove-feature', function() {
            $(this).closest('.input-group').remove();
        });

        $('.delete-image').click(function() {
            let imageId = $(this).data('id');
            let imageContainer = $(this).closest('.col-md-3');
            
            if(confirm('Are you sure you want to delete this image?')) {
                $.ajax({
                    url: "{{ route('admin.templates.image.delete', '') }}/" + imageId,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if(response.success) {
                            imageContainer.remove();
                            toastr.success(response.message);
                        }
                    },
                    error: function(xhr) {
                        toastr.error('Something went wrong!');
                    }
                });
            }
        });
    });
</script>
@endpush