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
            <?php foreach ($res as $key) : ?>
              <tr>
                <td><?php echo strtoupper($key['lddap_month']); ?></td>
                <td><?php echo strtoupper($key['lddap_year']); ?></td>
                <td><?php echo strtoupper($key['lddap_no']); ?></td>
                <td><?php echo strtoupper($key['lddap_post']); ?></td>
                <td>
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" name="editData" id="editData"><i class="ri-edit-2-line"></i> Edit</button>
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

<?php include("../common/footer.php"); ?>