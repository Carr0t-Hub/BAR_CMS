<?php

include('../functions/functions.php');

if (isset($_POST['id'])) {
  $res = getSliderById($mysqli, $_POST['id']);

  $img = $res['fileName'] . '_' . $res['size'] . $res['attachment'] . '.' . $res['fileExtension'];
?>
  <form action="../process/page_layout/editSlider.php" class="slider" id="saveSlider" method="POST" enctype="multipart/form-data">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">Image Slider</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-3">
                <div id="sliderPreview">
                  <img src="../storage/files/slider/<?= $img ?>" class="preview-image" alt="Profile Picture">
                </div>
                <input type="file" name="attachment" class="form-control" id="sliderInput" accept="image/jpeg, image/png">
                <input type="hidden" name="attachment_id" value="<?= $res['attachment'] ?>">
              </div>
              <div class="col-7">
                <div class="form-floating">
                  <textarea class="form-control" name="description" id="description" style="height: 300px;"><?= $res['description'] ?></textarea>
                  <label for="middleName" class="form-control-label">Description</label>
                </div>
              </div>
              <div class="col-2">
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