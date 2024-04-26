<?php

  include('../functions/functions.php');

if (isset($_POST['id'])) {
  $res = getAttachedById($mysqli, $_POST['id']);
?>
<form method="POST" action="../process/transparency/editLDDAP.php" enctype="multipart/form-data">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">DA - Bureaus, Attached Agencies and Attached Corporations</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
        <div class="container-fluid">
          <div class="row mb-3">
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="agencyName" id="agencyName" placeholder="Name of Agency" value="<?= $res['agencyName'] ?>">
                <label for="agencyName" class="form-label">Name of Agency</label>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="officeAddress" id="officeAddress" placeholder="Office Address" value="<?= $res['officeAddress'] ?>">
                <label for="officeAddress" class="form-label">Office Address</label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="fullName[]" id="fullName" placeholder="Full Name" value="<?= $res['fullName'] ?>">
                <label for="fullName" class="form-label">Full Name</label>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="designation[]" id="designation" placeholder="Designation" value="<?= $res['designation'] ?>" disabled>
                <label for="designation" class="form-label">Designation</label>
              </div>
              <input type="text" class="form-control" name="position[]" id="position" value="Director" readonly hidden>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="emailAddress[]" id="emailAddress" placeholder="Email Address" value="<?= $res['emailAddress'] ?>">
                <label for="emailAddress" class="form-label">Email Address</label>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="telephone[]" id="telephone" placeholder="Telephone Number" value="<?= $res['telephone'] ?>">
                <label for="telephone" class="form-label">Telephone Number</label>
              </div>
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