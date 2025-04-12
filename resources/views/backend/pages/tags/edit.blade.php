<form id="tag_form" action="{{ route('admin.tags.update', ['id' => $tag->id]) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $tag->name }}" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $tag->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="order">Order</label>
        <input type="number" class="form-control" id="order" name="order" value="{{ $tag->order }}">
    </div>
    <div class="form-group text-right mb-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>