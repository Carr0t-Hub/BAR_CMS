<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<div class="container-fluid">
  <div class="row">
    <h3>List of Due and Demandable Accounts Payable – Advice to Debit Accounts</h3>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          <h5>New Entry</h5>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <div class="row mb-3">
              <div class="col-6">
                <div class="form-floating">
                  <select name="lddapMonth" id="lddapMonth" class="form-control">
                    <option disabled selected>-- Please Choose --</option>
                    <option value="Jan">January</option>
                    <option value="Feb">February</option>
                    <option value="Mar">March</option>
                    <option value="Apr">April</option>
                    <option value="May">May</option>
                    <option value="Jun">June</option>
                    <option value="Jul">July</option>
                    <option value="Aug">August</option>
                    <option value="Sep">September</option>
                    <option value="Oct">October</option>
                    <option value="Nov">November</option>
                    <option value="Dec">December</option>
                  </select>
                  <label for="lddapMonth" class="form-label">Month</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input type="number" class="form-control" name="lddapYear" id="lddapYear" max-length="4" placeholder="Year">
                  <label for="lddapYear" class="form-label">Year</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="lddapNo" id="lddapNo" placeholder="LDDAP-ADA No.">
                  <label for="lddapNo" class="form-label">LDDAP-ADA No.</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input type="date" class="form-control" name="lddapPosted" id="lddapPosted" placeholder="Date Posted">
                  <label for="lddapPosted" class="form-label">Date Posted</label>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-12">
              <button class="btn btn-success btn-md" id="saveLDDAP" name="saveLDDAP" type="submit"><i class="ri-save-line"></i> Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-8">
      <div class="card">
        <div class="card-header">
          <h5>View Details</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Month</th>
                  <th>LDDAP-ADA No.</th>
                  <th>Date Posted</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>DATA</td>
                  <td>DATA</td>
                  <td>DATA</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 

<?php include("../common/footer.php"); ?>