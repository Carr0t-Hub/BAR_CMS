<?php

  include('../functions/functions.php');

  if (isset($_POST['id'])) {
    $res = getAuthorById($mysqli, $_POST['id']);
  ?>
<form action="../process/user/editAuthor.php" class="Author" id="editAuthor" method="POST" enctype="multipart/form-data">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">Update Authors</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">
      <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
        <div class="row mb-2">
          <div class="col-4">
            <div class="form-floating">
              <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" value="<?= $res['firstName'] ?>">
              <label for="firstName" class="form-control-label">First Name</label>
            </div>
          </div>
          <div class="col-4">
            <div class="form-floating">
              <input type="text" class="form-control" name="middleName" id="middleName" placeholder="Middle Name" value="<?= $res['middleName'] ?>">
              <label for="lastName" class="form-control-label">Middle Name</label>
            </div>
          </div>
          <div class="col-4">
            <div class="form-floating">
              <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" value="<?= $res['lastName'] ?>">
              <label for="lastName" class="form-control-label">Last Name</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-floating">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" value="<?= $res['email'] ?>">
              <label for="email" class="form-control-label">Email Address</label>
            </div>
          </div>
          <div class="col-4">
            <div class="form-floating">
              <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telephone" value="<?= $res['telephone'] ?>">
              <label for="telephone" class="form-control-label">Telephone</label>
            </div>
          </div>
          <div class="col-4">
            <div class="form-floating">
              <select name="isDeleted" id="isDeleted" class="form-control" value="<?= $res['isDeleted'] ?>">
                <option disabled selected>-- Please Choose --</option>
                <option value="0" <?= $res['isDeleted'] == "0" ? "selected" : "" ?>>Active</option>
                <option value="1" <?= $res['isDeleted'] == "1" ? "selected" : "" ?>>Inactive</option>
              </select>
              <label for="isDeleted" class="form-label">Status</label>
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