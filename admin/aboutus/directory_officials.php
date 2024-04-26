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
  <?php if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success mt-2" role="alert">
      <i class="ri-checkbox-circle-fill"></i> <?= $_SESSION['success'] ?>
    </div>
  <?php unset($_SESSION['success']); }
    if (isset($_SESSION['error'])) {
  ?>
    <div class="alert alert-danger mt-2" role="alert">
      <i class="ri-alert-fill"></i> <?= $_SESSION['error'] ?>
    </div>
  <?php
    unset($_SESSION['error']); }
  ?>
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
            <?php foreach ($res as $key => $value) : ?>
              <tr>
                <td><img src="" alt=""></td>
                <td><?php echo strtoupper($value['firstName']); ?></td>
                <td><?php echo strtoupper($value['middleName']); ?></td>
                <td><?php echo strtoupper($value['lastName']); ?></td>
                <td><?php echo strtoupper($value['division']); ?></td>
                <td><?php echo strtoupper($value['section']); ?></td>
                <td><?php echo strtoupper($value['email']); ?></td>
                <td><?php echo strtoupper($value['telephone']); ?></td>
                <td>
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary directoryItem" type="button" name="editData" id="editData" data-id="<?= $value['id'] ?>"><i class="ri-edit-2-line"></i> Edit</button>
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

<!-- <form id="editform"> -->
<div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="lddap" aria-hidden="true">
  </div>
<!-- </form> -->

<script>
  $(document).ready(function() {
    $('.directoryItem').click(function() {
      var id = $(this).attr('data-id');

      $.ajax({
        url: 'editDirectory.php',
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