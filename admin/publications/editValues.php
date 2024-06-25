<?php

include('../functions/functions.php');

if (isset($_POST['id'])) {
  $data = getValuesById($mysqli, $_POST['id']);
?>
  <form method="POST" action="../process/publication/editValues.php" enctype="multipart/form-data">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">Value Focus</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
          <div class="container-fluid">
            <div class="row mb-2 gap-2">
              <div class="col-2">
                <div class="form-floating">
                  <input type="number" maxlength="3" class="form-control" id="weekNum" name="weekNum" placeholder="Week Number" value="<?= $data['weekNum'] ?>" readonly>
                  <label for="weekNum" name="weekNum">Week Number</label>
                </div>
              </div>
              <div class="col-9">
                <div class="form-floating">
                  <input type="text" class="form-control" id="valueTitle" name="valueTitle" placeholder="Title" value="<?= $data['valueTitle'] ?>">
                  <label for="valueTitle" name="valueTitle">Title</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="valueDescription" name="valueDescription" placeholder="Description" style="height: 100px"><?= $data['valueDescription'] ?></textarea>
                  <label for="valueDescription" name="valueDescription">Description</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="actionPlan" name="actionPlan" placeholder="Action Plan" style="height: 100px"><?= $data['actionPlan'] ?></textarea>
                  <label for="actionPlan" name="actionPlan">Action Plan</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="declaration" name="declaration" placeholder="Action Plan" style="height: 100px"><?= $data['declaration'] ?></textarea>
                  <label for="declaration">Declaration</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="prayer" name="prayer" placeholder="Prayer" style="height: 100px"><?= $data['prayer'] ?></textarea>
                  <label for="prayer" name="prayer">Prayer</label>
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