function loadUsers() {
    $.ajax({
        url: 'read.php',
        method: 'GET',
        success: function (response) {
            const users = JSON.parse(response);
            let rows = '';
            let id = 1;
            if (users.length > 0) {
                users.forEach(user => {
                    rows += `
                        <tr>
                            <td>${id++}</td>
                            <td>${user.id}</td>
                            <td>${user.name}</td>
                            <td>${user.email}</td>
                            <td>
                                <button class="editBtn" data-id="${user.id}" data-name="${user.name}" data-email="${user.email}">Edit</button>
                                <button class="deleteBtn" data-id="${user.id}">Delete</button>
                            </td>
                        </tr>
                    `;
                });
            } else {
                rows = `
                        <tr>
                            <td colspan="5" style="text-align: center;">No users found</td>
                        </tr>
                    `;
            }
            $('#userTable tbody').html(rows);
            $('#userTable').DataTable();
        }
    });
}

$('#createForm').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        url: 'create.php',
        method: 'POST',
        data: {
            name: $('#name').val(),
            email: $('#email').val()
        },
        success: function (response) {
            const res = JSON.parse(response);
            if (res.status === "error") {
                alert(res.message);
            } else {
                $('#name').val('');
                $('#email').val('');
                alert(res.message);
                loadUsers();
            }
        }
    });
});

$(document).on('click', '.deleteBtn', function () {
    const id = $(this).data('id');
    $.ajax({
        url: 'delete.php',
        method: 'POST',
        data: { id },
        success: function (response) {
            const res = JSON.parse(response);
            if (res.status === "error") {
                alert(res.message);
            } else {
                loadUsers();
                setTimeout(() => {
                    alert("User deleted successfully!");
                }, 100);
            }
        }
    });
});

$(document).on('click', '.editBtn', function () {
    const id = $(this).data('id');
    const name = $(this).data('name');
    const email = $(this).data('email');
    $('#updateId').val(id);
    $('#updateName').val(name);
    $('#updateEmail').val(email);
    $('#updateForm').show();
    $('#createForm').hide();
});

$('#updateForm').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        url: 'update.php',
        method: 'POST',
        data: {
            id: $('#updateId').val(),
            name: $('#updateName').val(),
            email: $('#updateEmail').val()
        },
        success: function (response) {
            const res = JSON.parse(response);
            if (res.status === "error") {
                alert(res.message);
            } else {
                $('#updateForm').hide();
                $('#createForm').show();
                $('#updateId').val('');
                $('#updateName').val('');
                $('#updateEmail').val('');
                loadUsers();
                alert("User updated successfully!");
            }
        }
    });
});

loadUsers(); 