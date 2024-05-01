<form action="../process/logout.php" class="logout" id="logout" method="POST" enctype="multipart/form-data">
  <div class="modal fade" id="logout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="user" aria-hidden="true">
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
          <input type="hidden" class="form-control" name="last_login" id="last_login">
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>No</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-check-line"></i> Yes</button>
        </div>
      </div>
    </div>
  </div>
</form>