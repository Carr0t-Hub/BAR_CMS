<?php

  include('../functions/functions.php');

  if (isset($_POST['id'])) {
    $res = getUserInfoById($mysqli, $_POST['id']);
  ?>
<form action="../process/user/resetUserPass.php" class="user" id="editUser" method="POST" enctype="multipart/form-data">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">Reset Password</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">
      <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
        <div class="row mb-2">
          <div class="col-12">
            <div class="form-floating">
              <input type="password" class="form-control" placeholder="Password" value="<?= $res['password'] ?>" disabled>
              <label for="password" class="form-control-label">Old Password</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-floating">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= $res['password'] ?>">
              <label for="password" class="form-control-label">New Password</label>
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