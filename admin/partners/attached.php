<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<?php $res = viewAttached($mysqli); ?>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="d-flex justify-content-between">
        <div>
          <h4>DA - Bureaus, Attached Agencies and Attached Corporations</h4>
        </div>
        <div>
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#attached"><i class="ri-file-add-line"></i> Add New</button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th class="text-center text-uppercase">Agency Name</th>
              <th class="text-center text-uppercase">Office Address</th>
              <th class="text-center text-uppercase">Full Name</th>
              <th class="text-center text-uppercase">Designation</th>
              <th class="text-center text-uppercase">Position</th>
              <th class="text-center text-uppercase">Email Address</th>
              <th class="text-center text-uppercase">Telephone Number</th>
              <th class="text-center text-uppercase">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($res as $key) : ?>
              <tr>
                <td><?php echo strtoupper($key['agencyName']); ?></td>
                <td><?php echo strtoupper($key['officeAddress']); ?></td>
                <td><?php echo strtoupper($key['fullName']); ?></td>
                <td><?php echo strtoupper($key['designation']); ?></td>
                <td><?php echo strtoupper($key['position']); ?></td>
                <td><?php echo strtoupper($key['emailAddress']); ?></td>
                <td><?php echo strtoupper($key['telephone']); ?></td>
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