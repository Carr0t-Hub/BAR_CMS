<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3>Career Opportunity</h3>
        </div>
        <div class="card-body">
          <form action="POST">
            <div class="row mb-3">
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  <label for="title" name="title">Title</label>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-12">
                <div class="form-floating">
                  <input type="file" class="form-control" id="filePath" name="filePath" accept="application/pdf" required>
                  <label for="filePath" name="filePath">Document File</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-floating">
                  <input type="date" class="form-control" id="date_posted" name="date_posted" placeholder="Date Posted">
                  <label for="date_posted" name="date_posted">Date Posted</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <select name="post_type" id="post_type" class="form-control">
                    <option selected>-- Please Choose --</option>
                    <option value="published">Published</option>
                    <option value="unpublished">Unpublished</option>
                  </select>
                  <label for="post_type" name="post_type">Post Type</label>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-12">
              <button class="btn btn-success btn-md" id="saveNews" name="saveNews" type="submit"><i class="ri-save-line"></i> Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 

<?php include("../common/footer.php"); ?>