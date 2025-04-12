/**
 * Template Management
 * Handles template CRUD operations, DataTable initialization, and form handling
 */

// Initialize DataTable
let templatesTable = null;

$(document).ready(function() {
    // Initialize DataTable
    templatesTable = $('#templates_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: window.templateListUrl,
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'category_name', name: 'category_name'},
            {data: 'tags', name: 'tags'},
            {data: 'price', name: 'price'},
            {data: 'order', name: 'order'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });

    // Initialize Select2 for dropdowns
    function initializeSelect2() {
        $('.select2').select2({
            theme: 'bootstrap4',
            width: '100%'
        });
    }

    // Load form into modal
    function loadForm(url) {
        $.get(url, (response) => {
            $('#form_modal_content').html(response.html);
            initializeSelect2();
            $('#form_modal').modal('show');
        });
    }

    // Create button click handler
    $(document).on('click', '#create_btn', function(e) {
        const url = $(this).data('url');
        loadForm(url);
    });

    // Edit button click handler
    $(document).on('click', '.edit_btn', function(e) {
        const url = $(this).data('url');
        loadForm(url);
    });

    // Delete button click handler
    $(document).on('click', '.delete_btn', function(e) {
        const url = $(this).data('url');
        if (confirm('Are you sure you want to delete this template?')) {
            $.ajax({
                url: url,
                type: 'DELETE',
                data: {_token: window.csrfToken},
                success: (response) => {
                    if (response.success) {
                        toastr.success(response.message);
                        templatesTable.ajax.reload();
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: () => {
                    toastr.error('Something went wrong!');
                }
            });
        }
    });

    // Form submission handler
    $(document).on('submit', '#template_form', function(e) {
        e.preventDefault();
        const form = $(this);
        const url = form.attr('action');
        const method = form.attr('method');

        $.ajax({
            url: url,
            method: method,
            data: form.serialize(),
            success: (response) => {
                if (response.success) {
                    $('#form_modal').modal('hide');
                    toastr.success(response.message);
                    templatesTable.ajax.reload();
                } else {
                    toastr.error(response.message);
                }
            },
            error: (xhr) => {
                const errors = xhr.responseJSON.errors;
                Object.values(errors).forEach(error => {
                    toastr.error(error[0]);
                });
            }
        });
    });
});