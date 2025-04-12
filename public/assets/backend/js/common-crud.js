$(document).ready(function() {
    // Initialize DataTable
    let table = $('.table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: window.listUrl,
            type: 'GET',
            data: function(d) {
                // Add filter form data if exists
                if ($('#filter_form').length) {
                    let filterData = $('#filter_form').serializeArray();
                    filterData.forEach(function(item) {
                        d[item.name] = item.value;
                    });
                }
            }
        },
        columns: window.columns || [],
        order: [[0, 'desc']]
    });

    // Filter form submit handler
    $('#filter_form').on('submit', function(e) {
        e.preventDefault();
        table.draw();
    });

    // Create button click handler
    $(document).on('click', '#create_btn', function() {
        let url = $(this).data('url');
        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                $('#form_modal_content').html(response);
                $('#form_modal').modal('show');
                initializeFormComponents();
            },
            error: function(xhr) {
                handleAjaxError(xhr);
            }
        });
    });

    // Edit button click handler
    $(document).on('click', '.edit-btn', function() {
        let url = $(this).data('url');
        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                $('#form_modal_content').html(response);
                $('#form_modal').modal('show');
                initializeFormComponents();
            },
            error: function(xhr) {
                handleAjaxError(xhr);
            }
        });
    });

    // Delete button click handler
    $(document).on('click', '.delete-btn', function() {
        let url = $(this).data('url');
        if (confirm('Are you sure you want to delete this item?')) {
            $.ajax({
                url: url,
                type: 'DELETE',
                data: {
                    _token: window.csrfToken
                },
                success: function(response) {
                    toastr.success(response.message);
                    table.draw();
                },
                error: function(xhr) {
                    handleAjaxError(xhr);
                }
            });
        }
    });

    // Form submit handler
    $(document).on('submit', '#crud_form', function(e) {
        e.preventDefault();
        let form = $(this);
        let url = form.attr('action');
        let method = form.attr('method');
        let formData = new FormData(this);

        $.ajax({
            url: url,
            type: method,
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                toastr.success(response.message);
                $('#form_modal').modal('hide');
                table.draw();
            },
            error: function(xhr) {
                handleAjaxError(xhr);
            }
        });
    });

    // Initialize form components (Select2, etc.)
    function initializeFormComponents() {
        // Initialize Select2
        if ($.fn.select2) {
            $('.select2').select2({
                theme: 'bootstrap4'
            });
        }
    }

    // Handle Ajax errors
    function handleAjaxError(xhr) {
        if (xhr.status === 422) {
            let errors = xhr.responseJSON.errors;
            Object.keys(errors).forEach(function(key) {
                toastr.error(errors[key][0]);
            });
        } else {
            toastr.error(xhr.responseJSON.message || 'Something went wrong!');
        }
    }
});