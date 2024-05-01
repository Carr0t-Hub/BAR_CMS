<?php

  include('../functions/functions.php');

  if (isset($_POST['id'])) {
    $res = getProcurementById($mysqli, $_POST['id']);

    $pdf= $res['fileName'] . '_' . $res['size'] . $res['attachment'] . '.' . $res['fileExtension'];
  ?>
<form action="../process/transparency/editProcurement.php" class="Procurement" id="editProcurement" method="POST" enctype="multipart/form-data">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">Update Procurement</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
        <div class="row mb-2">
          <div class="col-3">
            <label for="procurementInput" class="form-label"><?= ($pdf); ?></label>
            <input type="file" name="attachment" class="form-control" id="procurementInput" accept="application/pdf">
            <input type="hidden" name="attachment_id" value="<?= $res['attachment'] ?>">
          </div>
          <div class="col-9">
            <div class="form-floating">
              <input type="text" class="form-control" name="title" id="title" placeholder="Particulars" value="<?= $res['title'] ?>">
              <label for="title" class="form-label">Particulars</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-floating">
              <input type="date" class="form-control" name="datePosted" id="datePosted" placeholder="Date Posted"  value="<?= $res['datePosted'] ?>">
              <label for="datePosted" class="form-label">Date Posted</label>
            </div>
          </div>
          <div class="col-4">
            <div class="form-floating">
              <select name="type" id="type" class="form-control" value="<?= $res['type'] ?>">
                <option disabled selected>-- Please Choose --</option>
                <option value="Annual Procurement Plan" <?= $res['type'] == "Annual Procurement Plan" ? "selected" : "" ?>>Annual Procurement Plan</option>
                <option value="Bid Bulletin" <?= $res['type'] == "Bid Bulletin" ? "selected" : "" ?>>Bid Bulletin</option>
                <option value="Request for Quotation" <?= $res['type'] == "Request for Quotation" ? "selected" : "" ?>>Request for Quotation</option>
                <option value="Invitation to BID" <?= $res['type'] == "Invitation to BID" ? "selected" : "" ?>>Invitation to BID</option>
                <option value="Bidding Documents" <?= $res['type'] == "Bidding Documents" ? "selected" : "" ?>>Bidding Documents</option>
                <option value="Notice of Awards" <?= $res['type'] == "Notice of Awards" ? "selected" : "" ?>>Notice of Awards</option>
                <option value="Notice to Proceed" <?= $res['type'] == "Notice to Proceed" ? "selected" : "" ?>>Notice to Proceed</option>
                <option value="Purchase Order" <?= $res['type'] == "Purchase Order" ? "selected" : "" ?>>Purchase Order</option>
                <option value="BAC Resolution" <?= $res['type'] == "BAC Resolution" ? "selected" : "" ?>>BAC Resolution</option>
                <option value="Work Order" <?= $res['type'] == "Work Order" ? "selected" : "" ?>>Work Order</option>
                <option value="Notice of Postponement" <?= $res['type'] == "Notice of Postponement" ? "selected" : "" ?>>Notice of Postponement</option>
              </select>
              <label for="type" class="form-label">Type</label>
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