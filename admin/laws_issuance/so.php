<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<?php $res = viewSo($mysqli); ?>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="d-flex justify-content-between">
        <div>
          <h4>Special Order</h4>
        </div>
        <div>
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#so"><i class="ri-file-add-line"></i> Add New</button>
        </div>
      </div>
    </div>
  </div>
  <?php if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success alert-dismissible text-bg-success border-0 fade show" role="alert">
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      <i class="ri-checkbox-circle-fill"></i> <?= $_SESSION['success'] ?>
    </div>
  <?php unset($_SESSION['success']);
  }
  if (isset($_SESSION['error'])) {
  ?>
    <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show" role="alert">
      <i class="ri-alert-fill"></i> <?= $_SESSION['error'] ?>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
    unset($_SESSION['error']);
  }
  ?>
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">
        <table id="dataTable" class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th class="text-center text-uppercase">Code No.</th>
              <th class="text-center text-uppercase">Title</th>
              <th class="text-center text-uppercase">Attachment</th>
              <th class="text-center text-uppercase">Description</th>
              <th class="text-center text-uppercase">Date</th>
              <th class="text-center text-uppercase">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($res as $key => $value) :
              $img = $value['fileName'] . '_' . $value['size'] . $value['attachment'] . '.' . $value['fileExtension'];
            ?>
              <tr>
                <td><?php echo strtoupper($value['codeNo']); ?></td>
                <td><?php echo strtoupper($value['title']); ?></td>
                <td><a href="../storage/files/laws/<?= $img ?>"><?= $value['fileName'] ?></a></td>
                <td><?php echo strtoupper($value['description']); ?></td>
                <td><?php echo date_format(date_create($value['datePosted']), "F d, Y"); ?></td>
                <td>
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary soItem" type="button" name="editData" id="editData" data-id="<?= $value['id'] ?>"><i class="ri-edit-2-line"></i> Edit</button>
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
<div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="so" aria-hidden="true">
</div>
<!-- </form> -->

<script>
  $(document).ready(function() {
    $('.soItem').click(function() {
      var id = $(this).attr('data-id');

      $.ajax({
        url: 'editSO.php',
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