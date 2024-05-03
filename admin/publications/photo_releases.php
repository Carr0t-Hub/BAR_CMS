<?php include("../common/header.php");
include("../common/sidebar.php");
$data = getPhotoReleases($mysqli);

?>

<style>
  .stack-images .image {
    width: 200px !important;
    height: 200px !important;
    position: absolute;
    background: white;
  }

  .stack-images {
    position: relative;
    height: 200px;
    width: 200px;
  }

  .line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .main-container:hover .stack-images {
    transform: scale(1.05);
    transition: all 0.2s;
  }

  .main-container:hover .img1 {
    right: -45px;
    top: -45px;
    transform: rotate(5deg);
    transition: all 0.2s;

  }

  .main-container:hover .img2 {
    right: -40px;
    top: -35px;
    transform: rotate(2deg);
    transition: all 0.2s;

  }

  .main-container:hover .img3 {
    transform: rotate(-2deg);
    transition: all 0.2s;

  }

  .img1,
  .img2,
  .img3 {
    transition: all 0.2s;
  }

  .main-container {
    cursor: pointer;
  }

  .main-container:hover h4 {
    text-decoration: underline;
  }

  .stack-images {
    transition: all 0.2s;
  }
</style>

<!-- Start Content-->
<div class="container-fluid">
  <div class="row mt-2">
    <div class="col-12">
      <div class="d-flex justify-content-between mb-2">
        <div>
          <h3>Photo Releases</h3>
        </div>
        <div>
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#photo_releases"><i class="ri-file-add-line"></i> Add New</button>
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


      <div class="d-flex flex-wrap gap-2">
        <?php

        foreach ($data as $key => $value) {

          if (isset($value['images'])) {
            $image = $value['images'];

            $firstImage = $image[0]['fileName'] . '_' . $image[0]['size'] . $image[0]['id'] . '.' . $image[0]['fileExtension'];
            $secondImage = $image[1]['fileName'] . '_' . $image[1]['size'] . $image[1]['id'] . '.' . $image[1]['fileExtension'];
            $thirdImage = $image[2]['fileName'] . '_' . $image[2]['size'] . $image[2]['id'] . '.' . $image[2]['fileExtension'];
          }

        ?>
          <div class=" p-4">

            <div class="main-container">
              <div class="stack-images mb-3">
                <div class=" image shadow img1" style="rotate: 5deg; right: -25px; top: -25px;">

                  <img src="../storage/photo_releases/<?= $thirdImage ?>" loading="lazy" class="w-100 h-100" style="object-fit: cover" alt="">
                </div>
                <div class=" image shadow img2" style="rotate: 2deg; right: -15px;top: -15px">
                  <img src="../storage/photo_releases/<?= $secondImage ?>" loading="lazy" class="w-100 h-100" style="object-fit: cover" alt="">
                </div>

                <div class=" image shadow img3">
                  <img src="../storage/photo_releases/<?= $firstImage ?>" loading="lazy" class="w-100 h-100" style="object-fit: cover" alt="">
                </div>


              </div>
              <div class="" style="width: 200px">
                <h4 class="line-clamp-2 "><?= $value['title'] ?></h4>
              </div>
            </div>
          </div>
        <?php

        } ?>
      </div>

    </div>

  </div>
</div>
</div>



<div class="modal fade" id="photo_releases" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="photo_releases" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">Photo Release</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-floating mb-2">
          <input type="text" class="form-control" id="titlePR" name="title" placeholder="Title">
          <label for="title" name="title">Title</label>
        </div>
        <form action="/" class="dropzone mb-2" id="photoReleaseDropzone"></form>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-floating">
              <input type="date" class="form-control" id="datePostedPR" name="datePosted" placeholder="Date Posted">
              <label for="date_posted" name="date_posted">Date Posted</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="form-floating">
              <select name="status" id="post_typePR" class="form-control">
                <option selected disabled>-- Please Choose --</option>
                <option value="published">Published</option>
                <option value="unpublished">Unpublished</option>
              </select>
              <label for="post_typePR" name="post_typePR">Post Type</label>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
        <button type="button" id="submitbtn" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
      </div>
    </div>
  </div>
</div>


<script>
  Dropzone.options.photoReleaseDropzone = { // camelized version of the `id`
    //image only
    acceptedFiles: "image/*",
    maxFilesize: 10, // MB
    //delete the file
    addRemoveLinks: true,

  };



  $('#submitbtn').click(function() {
    var title = $('#titlePR').val();
    var datePosted = $('#datePostedPR').val();
    var postType = $('#post_typePR').val();


    var dropzoneFiles = [];

    var dropzoneInstance = Dropzone.forElement("#photoReleaseDropzone");
    dropzoneInstance.files.forEach(function(file) {
      dropzoneFiles.push(file);
    });


    var formData = new FormData();
    formData.append('title', title);
    formData.append('datePosted', datePosted);
    formData.append('status', postType);

    dropzoneFiles.forEach(function(file) {
      formData.append('images[]', file);
    });

    $.ajax({
      url: '../process/publication/addPhotoRelease.php',
      type: 'POST',
      data: formData,
      contentType: false,
      processData: false,
      enctype: 'multipart/form-data',
      success: function(response) {
        console.log(response);
        if (response == 'success') {
          window.location.reload();
        } else {
          alert('Error');
        }
      }
    });

  });
</script>

<script>
  $(document).ready(function() {
    $('#pubTable').DataTable();
  });
</script>

<?php include("../common/footer.php"); ?>