<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<?php $res = viewValues($mysqli); ?>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="d-flex justify-content-between">
        <div>
          <h4>Value Focus</h4>
        </div>
        <div>
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#valueFocus"><i class="ri-file-add-line"></i> Add New</button>
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
              <th class="text-center text-uppercase">Week Number</th>
              <th class="text-center text-uppercase">Title</th>
              <th class="text-center text-uppercase">Date Posted</th>
              <th class="text-center text-uppercase">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($res as $key => $value) : ?>
              <tr>
                <td><?php echo strtoupper($value['weekNum']); ?></td>
                <td><?php echo strtoupper($value['valueTitle']); ?></td>
                <td><?php echo date_format(date_create($value['created_at']), "F d, Y"); ?></td>
                <td>
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary valuesItem" type="button" name="editData" id="editData" data-id="<?= $value['id'] ?>"><i class="ri-edit-2-line"></i> Edit</button>
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
<div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="value" aria-hidden="true">
</div>
<!-- </form> -->

<form method="POST" action="../process/publication/addValues.php" enctype="multipart/form-data">
  <div class="modal fade" id="valueFocus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="career" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">Value Focus</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row mb-2 gap-2">
              <div class="col-2">
                <div class="form-floating">
                  <input type="number" maxlength="3" class="form-control" id="weekNum" name="weekNum" placeholder="Week Number">
                  <label for="weekNum" name="weekNum">Week Number</label>
                </div>
              </div>
              <div class="col-9">
                <div class="form-floating">
                  <input type="text" class="form-control" id="valueTitle" name="valueTitle" placeholder="Title">
                  <label for="valueTitle" name="valueTitle">Title</label>
                </div>
              </div>

              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="valueDescription" name="valueDescription" placeholder="Description" style="height: 100px"></textarea>
                  <label for="valueDescription" name="valueDescription">Description</label>
                </div>
              </div>

              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="actionPlan" name="actionPlan" placeholder="Action Plan" style="height: 100px"></textarea>
                  <label for="actionPlan" name="actionPlan">Action Plan</label>
                </div>
              </div>

              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="declaration" name="declaration" placeholder="Declaration" style="height: 100px"></textarea>
                  <label for="declaration" name="actionPlan">Declaration</label>
                </div>
              </div>


              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="prayer" name="prayer" placeholder="Prayer" style="height: 100px"></textarea>
                  <label for="prayer" name="prayer">Prayer</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </div>
    </div>
  </div>
</form>


<script>
  $(document).ready(function() {
    $('.valuesItem').click(function() {
      var id = $(this).attr('data-id');

      $.ajax({
        url: 'editValues.php',
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