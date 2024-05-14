<?php

  include('../functions/functions.php');

if (isset($_POST['id'])) {
  $res = getMemoById($mysqli, $_POST['id']);
?>
<form action="../process/laws_issuance/editMemo.php" class="memo" id="saveMemo" method="POST" enctype="multipart/form-data">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">Memorandum</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-3">
              <div class="form-floating">
                <input class="form-control" maxlength="5" type="number" name="codeNo" id="codeNo" placeholder="Code Number" value="<?= $res['codeNo'] ?>" readonly>
                <label for="codeNo" class="form-label">Code Number</label>
              </div>
            </div>
            <div class="col-9">
              <div class="form-floating">
                <input class="form-control" type="text" name="title" id="title" placeholder="Title" value="<?= $res['title'] ?>">
                <label for="title" class="form-label">Title</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-9">
              <div class="form-floating">
                <input class="form-control" type="text" name="description" id="description" placeholder="Description" value="<?= $res['description'] ?>">
                <label for="description" class="form-label">Description</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating">
                <input class="form-control" type="date" name="datePosted" id="datePosted" placeholder="Date Posted" value="<?= $res['datePosted'] ?>">
                <label for="datePosted" class="form-label">Date Posted</label>
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