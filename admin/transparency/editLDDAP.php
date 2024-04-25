<?php

  include('../functions/functions.php');

if (isset($_POST['id'])) {
  $res = getLDDAPById($mysqli, $_POST['id']);
?>
  <form method="POST" action="../process/transparency/editLDDAP.php" enctype="multipart/form-data">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">List of Due and Demandable Accounts Payable – Advice to Debit Accounts</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-6">
                <div class="form-floating">
                  <select name="lddap_month" id="lddap_month" class="form-control" value="<?= $res['lddap_month'] ?>">
                    <option disabled selected>-- Please Choose --</option>
                    <option value="January" <?= $res['lddap_month'] == "January" ? "selected" : "" ?>>January</option>
                    <option value="February" <?= $res['lddap_month'] == "February" ? "selected" : "" ?>>February</option>
                    <option value="March" <?= $res['lddap_month'] == "March" ? "selected" : "" ?>>March</option>
                    <option value="April" <?= $res['lddap_month'] == "April" ? "selected" : "" ?>>April</option>
                    <option value="May" <?= $res['lddap_month'] == "May" ? "selected" : "" ?>>May</option>
                    <option value="June" <?= $res['lddap_month'] == "June" ? "selected" : "" ?>>June</option>
                    <option value="July" <?= $res['lddap_month'] == "July" ? "selected" : "" ?>>July</option>
                    <option value="August" <?= $res['lddap_month'] == "August" ? "selected" : "" ?>>August</option>
                    <option value="September" <?= $res['lddap_month'] == "September" ? "selected" : "" ?>>September</option>
                    <option value="October" <?= $res['lddap_month'] == "October" ? "selected" : "" ?>>October</option>
                    <option value="November" <?= $res['lddap_month'] == "November" ? "selected" : "" ?>>November</option>
                    <option value="December" <?= $res['lddap_month'] == "December" ? "selected" : "" ?>>December</option>
                  </select>
                  <label for="lddap_month" class="form-label">Month</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input type="number" class="form-control" name="lddap_year" id="lddap_year" max-length="4" placeholder="Year" value="<?= $res['lddap_year'] ?>">
                  <label for="lddap_year" class="form-label">Year</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="lddap_no" id="lddap_no" placeholder="LDDAP-ADA No." value="<?= $res['lddap_no'] ?>">
                  <label for="lddap_no" class="form-label">LDDAP-ADA No.</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input type="date" class="form-control" name="lddap_post" id="lddap_post" placeholder="Date Posted" value="<?= $res['lddap_post'] ?>">
                  <label for="lddap_post" class="form-label">Date Posted</label>
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