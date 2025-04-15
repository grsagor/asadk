$(document).ready(function () {
    // Initialize DataTable
    let table = $('.table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: window.listUrl,
            type: 'GET',
            data: function (d) {
                // Add filter form data if exists
                if ($('#filter_form').length) {
                    let filterData = $('#filter_form').serializeArray();
                    filterData.forEach(function (item) {
                        d[item.name] = item.value;
                    });
                }
            }
        },
        columns: window.columns || [],
        order: [[0, 'desc']]
    });

    // Delete button click handler
    $(document).on('click', '.delete_btn', function () {
        let url = $(this).data('url');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        "_token": $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.success) {
                            Swal.fire(
                                'Deleted!',
                                response.message,
                                'success'
                            );
                            table.ajax.reload();
                        } else {
                            Swal.fire(
                                'Error!',
                                response.message,
                                'error'
                            );
                        }
                    },
                    error: function () {
                        Swal.fire(
                            'Error!',
                            'Error deleting item',
                            'error'
                        );
                    }
                });
            }
        });
    });
});