<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Team Dashboard</title>

    <!-- Bootstrap & DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<!-- Header -->
<header class="app-header text-white bg-primary p-3 mb-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <h4 class="mb-0">Team</h4>
            <small>Dashboard / All Team</small>
        </div>
        <div>
            <button id="addBtn" class="btn btn-light btn-sm"><i class="bi bi-plus-circle"></i> Add</button>
            <button class="btn btn-outline-light btn-sm">Filter</button>
        </div>
    </div>
</header>

<!-- Table Card -->
<div class="container">
    <div class="card p-3">
        <table id="peopleTable" class="table table-bordered table-striped w-100">
            <thead class="table-primary">
                <tr>
                    <th>Name</th><th>Mobile</th><th>Email</th>
                    <th>Role</th><th>Designation</th><th>Photo</th>
                    <th>Status</th><th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!-- Add/Edit Modal -->
<div class="modal fade" id="personModal">
  <div class="modal-dialog modal-lg">
    <form id="personForm" enctype="multipart/form-data" class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTitle">Create New Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body row g-3">
        <input type="hidden" id="personId" name="id">

        <div class="col-md-6">
            <label class="form-label">Full Name*</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Mobile No*</label>
            <input type="text" name="mobile" id="mobile" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Email Id*</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Address*</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label class="form-label">Role*</label>
            <select name="role" id="role" class="form-select" required>
                <option value="">Select Role</option>
                <option>ADMIN</option><option>DESIGNER</option><option>DEVELOPER</option>
            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label">Designation*</label>
            <input type="text" name="designation" id="designation" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label class="form-label">Gender*</label>
            <select name="gender" id="gender" class="form-select" required>
                <option>Male</option><option>Female</option><option>Other</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Upload Photo</label>
            <input type="file" name="photo" id="photo" class="form-control">
            <img id="photoPreview" src="" class="mt-2" width="100" style="display:none;">
        </div>

        <div class="col-md-6">
            <label class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option>Active</option><option>Inactive</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" id="saveBtn" class="btn btn-success">Save</button>
      </div>
    </form>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-danger text-white">
            <h6 class="modal-title">Confirm Delete</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-footer">
            <button type="button" id="confirmDelete" class="btn btn-danger">Delete</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/script.js"></script>

</body>
</html>
