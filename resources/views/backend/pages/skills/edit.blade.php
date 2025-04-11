<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="crud_modalLabel">Add Skill</h5>
            <button type="button" class="close btn" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
            </button>
        </div>
        <div class="modal-body">
            <div class="server_side_error"></div>
            <form id="crud_form" action="{{ route('admin.skills.update', $skill->id) }}" method="PUT">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $skill->name }}" required>
                </div>
                <div class="form-group">
                    <label for="proficiency">Proficiency (%)</label>
                    <input type="number" class="form-control" id="proficiency" name="proficiency" min="0" max="100" value="{{ $skill->proficiency }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $skill->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="order">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ $skill->order }}">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="crud_form_submit_btn" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>