<?php

  include('../functions/functions.php');

if (isset($_POST['id'])) {
  $res = getBFARROById($mysqli, $_POST['id']);
?>

<form action="../process/partners/editBFARRO.php" class="BFARRO" id="saveBFARRO" method="POST">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">BFAR - Regional Offices</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-lg-4">
              <div class="form-floating">
                <select name="regionalOffice" id="regionalOffice" class="form-control" value="<?= $res['regionalOffice'] ?>">
                  <option disabled selected>-- Please Choose --</option>
                  <option value="National Capital Region" <?= $res['regionalOffice'] == "National Capital Region" ? "selected" : "" ?>>National Capital Region</option>
                  <option value="Cordillera Administrative Region" <?= $res['regionalOffice'] == "Cordillera Administrative Region" ? "selected" : "" ?>>Cordillera Administrative Region</option>
                  <option value="Regional Fisheries Office 1" <?= $res['regionalOffice'] == "Regional Fisheries Office 1" ? "selected" : "" ?>>Regional Fisheries Office 1</option>
                  <option value="Regional Fisheries Office 2" <?= $res['regionalOffice'] == "Regional Fisheries Office 2" ? "selected" : "" ?>>Regional Fisheries Office 2</option>
                  <option value="Regional Fisheries Office 3" <?= $res['regionalOffice'] == "Regional Fisheries Office 3" ? "selected" : "" ?>>Regional Fisheries Office 3</option>
                  <option value="Regional Fisheries Office 4" <?= $res['regionalOffice'] == "Regional Fisheries Office 4" ? "selected" : "" ?>>Regional Fisheries Office 4</option>
                  <option value="Regional Fisheries Office 5" <?= $res['regionalOffice'] == "Regional Fisheries Office 5" ? "selected" : "" ?>>Regional Fisheries Office 5</option>
                  <option value="Regional Fisheries Office 6" <?= $res['regionalOffice'] == "Regional Fisheries Office 6" ? "selected" : "" ?>>Regional Fisheries Office 6</option>
                  <option value="Regional Fisheries Office 7" <?= $res['regionalOffice'] == "Regional Fisheries Office 7" ? "selected" : "" ?>>Regional Fisheries Office 7</option>
                  <option value="Regional Fisheries Office 8" <?= $res['regionalOffice'] == "Regional Fisheries Office 8" ? "selected" : "" ?>>Regional Fisheries Office 8</option>
                  <option value="Regional Fisheries Office 9" <?= $res['regionalOffice'] == "Regional Fisheries Office 9" ? "selected" : "" ?>>Regional Fisheries Office 9</option>
                  <option value="Regional Fisheries Office 10" <?= $res['regionalOffice'] == "Regional Fisheries Office 10" ? "selected" : "" ?>>Regional Fisheries Office 10</option>
                  <option value="Regional Fisheries Office 11" <?= $res['regionalOffice'] == "Regional Fisheries Office 11" ? "selected" : "" ?>>Regional Fisheries Office 11</option>
                  <option value="Regional Fisheries Office 12" <?= $res['regionalOffice'] == "Regional Fisheries Office 12" ? "selected" : "" ?>>Regional Fisheries Office 12</option>
                  <option value="Regional Fisheries Office 13" <?= $res['regionalOffice'] == "Regional Fisheries Office 13" ? "selected" : "" ?>>Regional Fisheries Office 13</option>
                </select>
                <label for="regionalOffice" class="form-label">Regional Office</label>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-floating">
                <input type="text" class="form-control" name="officeAddress" id="officeAddress" placeholder="Office Address" value="<?= $res['officeAddress'] ?>">
                <label for="officeAddress" class="form-label">Office Address</label>
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name" value="<?= $res['fullName'] ?>">
                <label for="fullName" class="form-label">Full Name</label>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation" value="<?= $res['designation'] ?>">
                <label for="designation" class="form-label">Designation</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="emailAddress" id="emailAddress" placeholder="Email Address" value="<?= $res['emailAddress'] ?>">
                <label for="emailAddress" class="form-label">Email Address</label>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telephone Number" value="<?= $res['telephone'] ?>">
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