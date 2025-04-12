<form id="order_form" action="{{ route('admin.orders.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="user_id">User <span class="text-danger">*</span></label>
        <select class="form-control select2" id="user_id" name="user_id" required>
            <option value="">Select User</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="templates">Templates <span class="text-danger">*</span></label>
        <select class="form-control select2" id="templates" name="templates[]" multiple required>
            @foreach($templates as $template)
                <option value="{{ $template->id }}" data-price="{{ $template->price }}">{{ $template->name }} (${{ number_format($template->price, 2) }})</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="status">Status <span class="text-danger">*</span></label>
        <select class="form-control" id="status" name="status" required>
            <option value="pending">Pending</option>
            <option value="processing">Processing</option>
            <option value="completed">Completed</option>
            <option value="cancelled">Cancelled</option>
        </select>
    </div>
    <div class="form-group">
        <label for="payment_status">Payment Status <span class="text-danger">*</span></label>
        <select class="form-control" id="payment_status" name="payment_status" required>
            <option value="pending">Pending</option>
            <option value="paid">Paid</option>
            <option value="failed">Failed</option>
        </select>
    </div>
    <div class="form-group">
        <label for="payment_method">Payment Method <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="payment_method" name="payment_method" required>
    </div>
    <div class="form-group">
        <label for="total_amount">Total Amount <span class="text-danger">*</span></label>
        <input type="number" class="form-control" id="total_amount" name="total_amount" step="0.01" min="0" required readonly>
    </div>
    <div class="form-group text-right mb-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

<script>
$(document).ready(function() {
    // Calculate total amount when templates are selected/deselected
    $('#templates').on('change', function() {
        var total = 0;
        $(this).find('option:selected').each(function() {
            total += parseFloat($(this).data('price'));
        });
        $('#total_amount').val(total.toFixed(2));
    });
});
</script>