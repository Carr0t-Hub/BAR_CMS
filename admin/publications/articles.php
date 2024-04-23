<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<!-- Start Content-->
<div class="container-fluid">
  <div class="row mt-2">
    <div class="col-12">
      <div class="d-flex justify-content-between">
        <div>
          <h3>Uncategorized Articles</h3>
        </div>
        <div>
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#articles"><i class="ri-file-add-line"></i> Add New</button>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <td class="text-center">Title</td>
                  <td class="text-center">Date Posted</td>
                  <td class="text-center">Author</td>
                  <td class="text-center">Post Type</td>
                  <td class="text-center">Action</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>DATA</td>
                  <td>DATA</td>
                  <td>DATA</td>
                  <td>DATA</td>
                  <td>
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary" type="button" name="editData" id="editData"><i class="ri-edit-line"></i> Edit</button>
                    </div>
                  </td>
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