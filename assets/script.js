$(function () {
    // Initialize DataTable
    const table = $('#peopleTable').DataTable({
        ajax: 'actions/fetch.php',
        columns: [
            { data: 'name' },
            { data: 'mobile' },
            { data: 'email' },
            { data: 'role' },
            { data: 'designation' },
            { data: 'photo', orderable: false, searchable: false },
            { data: 'status', orderable: false },
            { data: 'action', orderable: false, searchable: false }
        ]
    });

    // Open Add Modal
    $('#addBtn').on('click', () => {
        $('#personForm')[0].reset();
        $('#personId').val('');
        $('#modalTitle').text('Create New Account');
        $('#photoPreview').hide();
        $('#photo').val('');
        new bootstrap.Modal('#personModal').show();
    });

    // Submit Form (Add / Update)
    $('#personForm').submit(function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        let id = $('#personId').val();
        formData.append('id', id);
        let url = id ? 'actions/update.php' : 'actions/create.php';

        $.ajax({
            url,
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: () => {
                bootstrap.Modal.getInstance($('#personModal')).hide();
                table.ajax.reload(null, false);
            },
            error: (xhr) => {
                console.error("Error:", xhr.responseText);
                alert("Something went wrong. Check console for details.");
            }
        });
    });

    // Edit Button Click
    $('#peopleTable').on('click', '.editBtn', function () {
        let id = $(this).data('id');

        $.getJSON('actions/get.php', { id }, res => {
            $('#modalTitle').text('Update Team Details');

            $.each(res, function (k, v) {
                if (k !== 'photo') {
                    $('#' + k).val(v);
                }
            });

            $('#personId').val(id);

            if (res.photo) {
                $('#photoPreview').attr('src', 'uploads/' + res.photo).show();
            } else {
                $('#photoPreview').hide();
            }

            new bootstrap.Modal('#personModal').show();
        });
    });

    // Delete Button Click
    let deleteId = null;
    $('#peopleTable').on('click', '.deleteBtn', function () {
        deleteId = $(this).data('id');
        new bootstrap.Modal('#deleteModal').show();
    });

    // Confirm Delete
    $('#confirmDelete').click(function () {
        $.post('actions/delete.php', { id: deleteId }, () => {
            bootstrap.Modal.getInstance($('#deleteModal')).hide();
            table.ajax.reload(null, false);
        });
    });
});
