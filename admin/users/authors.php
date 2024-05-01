<?php
include("../common/header.php");
include("../common/sidebar.php");

  $res = viewAuthor($mysqli);

?>

<div class="container-fluid">
  <div class="row mt-2">
    <div class="col-12">
      <div class="d-flex justify-content-between">
        <div>
          <h3>Author Management</h3>
        </div>
        <div>
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addAuthor"><i class="ri-file-add-line"></i> Add New</button>
        </div>
      </div>
        <?php if (isset($_SESSION['success'])) { ?>
          <div class="alert alert-success mt-2" role="alert">
            <i class="ri-checkbox-circle-fill"></i> <?= $_SESSION['success'] ?>
          </div>
        <?php unset($_SESSION['success']); }
          if (isset($_SESSION['error'])) {
        ?>
          <div class="alert alert-danger mt-2" role="alert">
            <i class="ri-alert-fill"></i> <?= $_SESSION['error'] ?>
          </div>
        <?php unset($_SESSION['error']); } ?>
        <br>
      <table id="dataTable" class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th class="text-center">First Name</th>
            <th class="text-center">Middle Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Email Address</th>
            <th class="text-center">Telephone</th>
            <th class="text-center" style="width: 10%">Status</th>
            <th class="text-center" style="width: 10%"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($res as $key => $value) { ?>
            <tr>
              <td><?= strtoupper($value['firstName']); ?></td>
              <td><?= strtoupper($value['middleName']); ?></td>
              <td><?= strtoupper($value['lastName']); ?></td>
              <td><?= strtoupper($value['email']); ?></td>
              <td><?= strtoupper($value['telephone']); ?></td>
              <td><?= $value['isDeleted'] == 0 ? "Active" : "Inactive" ?></td>
              <td>
                <div class="d-grid gap-2">
                  <button class="btn btn-primary authorItem" type="button" data-id="<?= $value['id'] ?>"><i class="ri-edit-line"></i> Edit</button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- <form id="editform"> -->
<div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="Author" aria-hidden="true">
</div>
<!-- </form> -->

<script>
// Edit Author Account
$(document).ready(function() {
    $('.authorItem').click(function() {
    var id = $(this).attr('data-id');
        $.ajax({
            url: 'editAuthor.php',
            type: 'POST',
            data: {
            id: id
            },
            success: function(data) {
            $('#editmodal').html(data);
            $('#editmodal').modal('show');
            }
        });
    });
})
</script>

<?php include("../common/footer.php"); ?>