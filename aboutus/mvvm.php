<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<!-- Start Content-->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3>Mission, Vision, Values & Mandates</h3>
        </div>
        <div class="card-body">
          <form action="#" method="POST">
            <div class="row mb-3">
              <div class="col-6">
                <label class="form-label" for="mission">Mission</label>
                <textarea class="form-control" name="mission" id="mission" cols="30" rows="5"></textarea>
              </div>
              <div class="col-6">
                <label class="form-label" for="vision">Vision</label>
                <textarea class="form-control" name="vision" id="vision" cols="30" rows="5"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <label class="form-label" for="values">Values</label>
                <textarea class="form-control" name="values" id="values" cols="30" rows="10"></textarea>
              </div>
              <div class="col-6">
                <label class="form-label" for="mandates">Mandates</label>
                <textarea class="form-control" name="mandates" id="mandates" cols="30" rows="10"></textarea>
              </div>
            </div>
          </form>
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
</div> 

<?php include("../common/footer.php"); ?>