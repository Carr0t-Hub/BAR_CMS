<?php
include("../common/header.php");
include("../common/sidebar.php");

$data = getPublications($mysqli, 'careers');

?>

<div class="container-fluid">
  <div class="row mt-2">
    <div class="col-12">
      <div class="d-flex justify-content-between">
        <div>
          <h3>Career Opportunities</h3>
        </div>
        <div>
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#career"><i class="ri-file-add-line"></i> Add New</button>
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
      <br>
      <table id="pubTable" class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <td class="text-center">Title</td>
            <td class="text-center">Attachment</td>
            <td class="text-center">Date Posted</td>
            <td class="text-center">Post Type</td>
            <td class="text-center">Action</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $key => $value) :
            $file = $value['fileName'] . '_' . $value['size'] . $value['attachment'] . '.' . $value['fileExtension'];
          ?>
            <tr>
              <td><?= $value['title'] ?></td>
              <td><a href="../storage/files/careers/<?= $file ?>"><?= $value['fileName'] ?></a></td>
              <td>
                <?= date('M d, Y', strtotime($value['datePosted'])) ?>
              </td>
              <td><?= $value['status'] ?></td>
              <td>
                <div class="d-grid gap-2">
                  <button class="btn btn-primary publicationItem" type="button" data-id="<?= $value['id'] ?>"><i class="ri-edit-line"></i> Edit</button>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
<div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="articles" aria-hidden="true">
</div>

<script>
  $(document).ready(function() {

    $('.publicationItem').click(function() {
      var id = $(this).attr('data-id');

      $.ajax({
        url: 'editCareers.php',
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

    $('#pubTable').DataTable();
  });
</script>
<?php include("../common/footer.php"); ?>