<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<?php $res = viewMVVM($mysqli); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3>Mission, Vision, Values & Mandates</h3>
        </div>
        <form action="../process/mvvm/mvvm.php" class="MVVM" id="saveMVVM" method="POST">
          <?php foreach ($res as $key) : ?>
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-6">
                  <label class="form-label" for="bar_mission">Mission</label>
                  <textarea class="form-control" name="bar_mission" id="bar_mission" cols="30" rows="5"><?php echo strtoupper($key['bar_mission']); ?></textarea>
                </div>
                <div class="col-6">
                  <label class="form-label" for="bar_vision">Vision</label>
                  <textarea class="form-control" name="bar_vision" id="bar_vision" cols="30" rows="5"><?php echo strtoupper($key['bar_vision']); ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label class="form-label" for="bar_values">Values</label>
                  <textarea class="form-control" name="bar_values" id="bar_values" cols="30" rows="10"><?php echo strtoupper($key['bar_values']); ?></textarea>
                </div>
                <div class="col-6">
                  <label class="form-label" for="bar_mandates">Mandates</label>
                  <textarea class="form-control" name="bar_mandates" id="bar_mandates" cols="30" rows="10"><?php echo strtoupper($key['bar_mandates']); ?></textarea>
                </div>
              </div>
            </div>
          <?php endforeach ?>
          <div class="card-footer">
            <div class="row">
              <div class="col-12">
                <button class="btn btn-success btn-lg" id="saveMVVM" name="saveMVVM" type="submit"><i class="ri-save-line"></i> Save</button>
                <button class="btn btn-warning btn-lg" id="saveMVVM" name="saveMVVM" type="submit"><i class="ri-draft-line"></i> Draft</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> 

<?php include("../common/footer.php"); ?>