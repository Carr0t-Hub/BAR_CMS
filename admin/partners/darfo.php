<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>BFAR - Regional Field Offices</h4>
        </div>
        <div class="card-body">
          <div class="row mb-2">
            <div class="col-lg-3">
              <div class="form-floating">
                <select name="regionalOffice" id="regionalOffice" class="form-control">
                  <option disabled selected>-- Please Choose --</option>
                  <option value="NCR">National Capital Region</option>
                  <option value="CAR">Cordillera Administrative Region</option>
                  <option value="RFO1">Regional Fisheries Office 1</option>
                  <option value="RFO2">Regional Fisheries Office 2</option>
                  <option value="RFO3">Regional Fisheries Office 3</option>
                  <option value="RFO4A">Regional Fisheries Office 4A</option>
                  <option value="RFO4B">Regional Fisheries Office 4B</option>
                  <option value="RFO5">Regional Fisheries Office 5</option>
                  <option value="RFO6">Regional Fisheries Office 6</option>
                  <option value="RFO7">Regional Fisheries Office 7</option>
                  <option value="RFO8">Regional Fisheries Office 8</option>
                  <option value="RFO9">Regional Fisheries Office 9</option>
                  <option value="RFO10">Regional Fisheries Office 10</option>
                  <option value="RFO11">Regional Fisheries Office 11</option>
                  <option value="RFO12">Regional Fisheries Office 12</option>
                  <option value="RFO13">Regional Fisheries Office 13</option>
                </select>
                <label for="regionalOffice" class="form-label">Regional Office</label>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="form-floating">
                <input type="text" class="form-control" name="officeAddress" id="officeAddress" placeholder="Office Address">
                <label for="officeAddress" class="form-label">Office Address</label>
              </div>
            </div>
          </div>
          <h4>Regional Executive Director</h4>
          <div class="row mb-2">
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
          <h4>Regional Technical Director for Research and Regulations</h4>
          <div class="row mb-2">
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
          <h4>Regional Technical Director for Operations</h4>
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