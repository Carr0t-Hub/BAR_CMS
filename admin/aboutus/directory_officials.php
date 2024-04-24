<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<?php $res = viewDirectory($mysqli); ?>

<style>
  .preview-image {
    max-width: 100%;
    height: auto;
    max-height: 250px;
    margin-top: 10px;
    width: 260px;
    border: solid black 1px;
    margin-bottom: 10px;
  }
</style>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="d-flex justify-content-between">
        <div>
          <h4>Directory of Officials</h4>
        </div>
        <div>
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#directory"><i class="ri-file-add-line"></i> Add New</button>
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
              <th class="text-center text-uppercase">Picture</th>
              <th class="text-center text-uppercase">First Name</th>
              <th class="text-center text-uppercase">Middle Name</th>
              <th class="text-center text-uppercase">Last Name</th>
              <th class="text-center text-uppercase">Division</th>
              <th class="text-center text-uppercase">Section</th>
              <th class="text-center text-uppercase">Email Address</th>
              <th class="text-center text-uppercase">Telephone Number</th>
              <th class="text-center text-uppercase">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($res as $key) : ?>
              <tr>
                <td><img src="" alt=""></td>
                <td><?php echo strtoupper($key['firstName']); ?></td>
                <td><?php echo strtoupper($key['middleName']); ?></td>
                <td><?php echo strtoupper($key['lastName']); ?></td>
                <td><?php echo strtoupper($key['division']); ?></td>
                <td><?php echo strtoupper($key['section']); ?></td>
                <td><?php echo strtoupper($key['email']); ?></td>
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

<script>
  const input = document.getElementById('imageInput');
  const preview = document.getElementById('imagePreview');

  input.addEventListener('change', function() {
    while (preview.firstChild) {
      preview.removeChild(preview.firstChild);
    }

    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.classList.add('preview-image');
        preview.appendChild(img);
      }
      reader.readAsDataURL(file);
    }
  });
</script>

<?php include("../common/footer.php"); ?>