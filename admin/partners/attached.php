<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>DA - Bureaus, Attached Agencies and Attached Corporations</h4>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="agencyName" id="agencyName" placeholder="Name of Agency">
                <label for="agencyName" class="form-label">Name of Agency</label>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="officeAddress" id="officeAddress" placeholder="Office Address">
                <label for="officeAddress" class="form-label">Office Address</label>
              </div>
            </div>
          </div>
          <h4>Director</h4>
          <div class="row mb-3">
            <div class="col-lg-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name">
                <label for="fullName" class="form-label">Full Name</label>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation">
                <label for="designation" class="form-label">Designation</label>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="emailAddress" id="emailAddress" placeholder="Email Address">
                <label for="emailAddress" class="form-label">Email Address</label>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="telNumber" id="telNumber" placeholder="Telephone Number">
                <label for="telNumber" class="form-label">Telephone Number</label>
              </div>
            </div>
          </div>
          <h4>Assistant Director</h4>
          <div class="row">
            <div class="col-lg-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name">
                <label for="fullName" class="form-label">Full Name</label>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation">
                <label for="designation" class="form-label">Designation</label>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="emailAddress" id="emailAddress" placeholder="Email Address">
                <label for="emailAddress" class="form-label">Email Address</label>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="telNumber" id="telNumber" placeholder="Telephone Number">
                <label for="telNumber" class="form-label">Telephone Number</label>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-12">
              <button class="btn btn-success btn-md" id="saveMVVM" name="saveMVVM" type="submit"><i class="ri-save-line"></i> Save</button>
            </div>
          </div>
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
              <th class="text-center">Regional Office</th>
              <th class="text-center">Office Address</th>
              <th class="text-center">Full Name</th>
              <th class="text-center">Designation</th>
              <th class="text-center">Email Address</th>
              <th class="text-center">Telephone Number</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>DATA</td>
              <td>DATA</td>
              <td>DATA</td>
              <td>DATA</td>
              <td>DATA</td>
              <td>DATA</td>
              <td>
                <div class="d-grid gap-2">
                  <button class="btn btn-primary" type="button" name="editData" id="editData"><i class="ri-edit-2-line"></i> Edit</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div> 

<?php include("../common/footer.php"); ?>