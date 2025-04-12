<form id="template_form" action="{{ route('admin.templates.update', ['id' => $template->id]) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $template->name }}" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $template->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="category_id">Category <span class="text-danger">*</span></label>
        <select class="form-control select2" id="category_id" name="category_id" required>
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $template->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="tags">Tags</label>
        <select class="form-control select2" id="tags" name="tags[]" multiple>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}" {{ in_array($tag->id, $template->tags->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="price">Price <span class="text-danger">*</span></label>
        <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" value="{{ $template->price }}" required>
    </div>
    <div class="form-group">
        <label for="file_path">File Path <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="file_path" name="file_path" value="{{ $template->file_path }}" required>
    </div>
    <div class="form-group">
        <label for="preview_url">Preview URL</label>
        <input type="url" class="form-control" id="preview_url" name="preview_url" value="{{ $template->preview_url }}">
    </div>
    <div class="form-group">
        <label for="order">Order</label>
        <input type="number" class="form-control" id="order" name="order" value="{{ $template->order }}">
    </div>
    <div class="form-group text-right mb-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>