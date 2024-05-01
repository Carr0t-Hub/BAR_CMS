<?php

  include('../functions/functions.php');

  if (isset($_POST['id'])) {
    $res = getUserInfoById($mysqli, $_POST['id']);
  ?>
<form action="../process/user/disableUser.php" class="user" id="disableUser" method="POST" enctype="multipart/form-data">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">Do you want to disable account?</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
        <input type="hidden" class="form-control" name="disabled" id="disabled" placeholder="Disable Account" value="1" >
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>No</button>
        <button type="submit" class="btn btn-lg btn-success"><i class="ri-check-line"></i> Yes</button>
      </div>
    </div>
  </div>
</form>

<?php
}
?>