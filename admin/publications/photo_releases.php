<?php include("../common/header.php");
include("../common/sidebar.php");
$data = getPublications($mysqli, 'photorelease');

?>

<!-- Start Content-->
<div class="container-fluid">
  <div class="row mt-2">
    <div class="col-12">
      <div class="d-flex justify-content-between">
        <div>
          <h3>Photo Releases</h3>
        </div>
        <div>
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#photo_releases"><i class="ri-file-add-line"></i> Add New</button>
        </div>
      </div>

      <?php

      if (isset($_SESSION['success'])) {
      ?>

        <div class="alert alert-success mt-2" role="alert">
          <i class="ri-checkbox-circle-fill"></i> <?= $_SESSION['success'] ?>
        </div>
      <?php
        unset($_SESSION['success']);
      }

      if (isset($_SESSION['error'])) {
      ?>
        <div class="alert alert-danger mt-2" role="alert">
          <i class="ri-alert-fill"></i> <?= $_SESSION['error'] ?>
        </div>
      <?php
        unset($_SESSION['error']);
      }

      ?>
      <br>

      <table id="pubTable" class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <td class="text-center">Title</td>
            <td class="text-center">Date Posted</td>
            <td class="text-center">Author</td>
            <td class="text-center">Post Type</td>
            <td class="text-center">Action</td>
          </tr>
        </thead>
        <tbody>
          <?php

          foreach ($data as $key => $value) {

          ?>
            <tr>
              <td><?= $value['title'] ?></td>
              <td><?= $value['datePosted'] ?></td>
              <td><?= $value['author'] ?></td>
              <td><?= $value['status'] ?></td>
              <td>
                <div class="d-grid gap-2">
                  <button class="btn btn-primary" type="button" name="editData" id="editData"><i class="ri-edit-line"></i> Edit</button>
                </div>
              </td>
            </tr>
          <?php

          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#pubTable').DataTable();
  });
</script>

<?php include("../common/footer.php"); ?>