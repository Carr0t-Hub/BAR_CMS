<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<?php $res = viewProcurement($mysqli); ?>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="d-flex justify-content-between">
        <div>
          <h3>Procurement - Bids & Awards</h3>
        </div>
        <div>
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addProcurement"><i class="ri-file-add-line"></i> Add New</button>
        </div>
      </div>
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
  <?php
    unset($_SESSION['error']); }
  ?>
  <div class="row">
    <div class="col-12">
      <div class="table-responsive">
        <table id="dataTable" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Particulars</th>
              <th>Attachment</th>
              <th>Date Posted</th>
              <th>Type</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($res as $key => $value) :
              $pdf = $value['fileName'] . '_' . $value['size'] . $value['attachment'] . '.' . $value['fileExtension'];
            ?>
              <tr>
                <td><?= strtoupper($value['title']); ?></td>
                <td><?= strtoupper($pdf); ?></td>
                <td><?= strtoupper($value['datePosted']); ?></td>
                <td><?= strtoupper($value['type']); ?></td>
                <td><?= $value['isDeleted'] == 0 ? "Active" : "Inactive" ?></td>
                <td>
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary procureItem" type="button" name="editData" id="editData" data-id="<?= $value['id'] ?>"><i class="ri-edit-2-line"></i> Edit</button>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div> 

<!-- <form id="editform"> -->
  <div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="lddap" aria-hidden="true">
  </div>
<!-- </form> -->

<script>
  $(document).ready(function() {
    $('.procureItem').click(function() {
      var id = $(this).attr('data-id');

      $.ajax({
        url: 'editProcurement.php',
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