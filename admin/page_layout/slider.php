<?php
include("../common/header.php");
include("../common/sidebar.php");

$res = viewSlider($mysqli);

?>

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
  <div class="row mt-2">
    <div class="col-12">
      <div class="d-flex justify-content-between">
        <div>
          <h3>Image Slider Management</h3>
        </div>
        <div>
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addSlider"><i class="ri-file-add-line"></i> Add New</button>
        </div>
      </div>
      <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success mt-2" role="alert">
          <i class="ri-checkbox-circle-fill"></i> <?= $_SESSION['success'] ?>
        </div>
      <?php unset($_SESSION['success']);
      }
      if (isset($_SESSION['error'])) {
      ?>
        <div class="alert alert-danger mt-2" role="alert">
          <i class="ri-alert-fill"></i> <?= $_SESSION['error'] ?>
        </div>
      <?php unset($_SESSION['error']);
      } ?>
      <br>
      <table id="dataTable" class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 20%">Picture</th>
            <th class="text-center">Description</th>
            <th class="text-center" style="width: 10%">Status</th>
            <th class="text-center" style="width: 10%"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($res as $key => $value) :
            $img = $value['fileName'] . '_' . $value['size'] . $value['attachment'] . '.' . $value['fileExtension'];
          ?>
            <tr>
              <td style="text-align: center;">
                <img src="../storage/files/slider/<?= $img ?>" alt="" class="border" style="height: 128px; width: 128px;object-fit: fill;">
              </td>
              <td><?php echo strtoupper($value['description']); ?></td>
              <td><?= $value['isDeleted'] == 0 ? "Active" : "Inactive" ?></td>
              <td>
                <div class="d-grid gap-2">
                  <button class="btn btn-primary sliderItem" type="button" name="editData" id="editData" data-id="<?= $value['id'] ?>"><i class="ri-edit-2-line"></i> Edit</button>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- <form id="editform"> -->
<div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="Author" aria-hidden="true">
</div>
<!-- </form> -->

<script>
  const input = document.getElementById('sliderInput');
  const preview = document.getElementById('sliderPreview');

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

<script>
  // Edit Image Slider
  $(document).ready(function() {
    $('.sliderItem').click(function() {
      var id = $(this).attr('data-id');
      $.ajax({
        url: 'editSlider.php',
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