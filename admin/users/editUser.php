<?php

  include('../functions/functions.php');

  if (isset($_POST['id'])) {
    $res = getUserInfoById($mysqli, $_POST['id']);
  ?>
<form action="../process/user/editUser.php" class="user" id="editUser" method="POST" enctype="multipart/form-data">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">Update User</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">
      <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
        <div class="row mb-2">
          <div class="col-6">
            <div class="form-floating">
              <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" value="<?= $res['firstName'] ?>">
              <label for="firstName" class="form-control-label">First Name</label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-floating">
              <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" value="<?= $res['lastName'] ?>">
              <label for="lastName" class="form-control-label">Last Name</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-floating">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" value="<?= $res['email'] ?>">
              <label for="email" class="form-control-label">Email Address</label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-floating">
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= $res['username'] ?>">
              <label for="username" class="form-control-label">Username</label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
        <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
      </div>
    </div>
  </div>
</form>

<?php
}
?>