<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<?php $res = viewLDDAP($mysqli); ?>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="d-flex justify-content-between">
        <div>
          <h4>List of Due and Demandable Accounts Payable – Advice to Debit Accounts</h4>
        </div>
        <div>
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#lddap"><i class="ri-file-add-line"></i> Add New</button>
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
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Month</th>
              <th>Year</th>
              <th>LDDAP-ADA No.</th>
              <th>Date Posted</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($res as $key => $value) { ?>
              <tr>
                <td><?php echo strtoupper($value['lddap_month']); ?></td>
                <td><?php echo strtoupper($value['lddap_year']); ?></td>
                <td><?php echo strtoupper($value['lddap_no']); ?></td>
                <td><?php echo strtoupper($value['lddap_post']); ?></td>
                <td>
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary lddapItem" type="button" data-id="<?= $value['id'] ?>"><i class="ri-edit-line"></i> Edit</button>
                  </div>
                </td>
              </tr>

            <?php
            } ?>
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
    $('.lddapItem').click(function() {
      var id = $(this).attr('data-id');

      $.ajax({
        url: 'editLDDAP.php',
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