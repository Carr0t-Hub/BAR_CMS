<?php include("../common/header.php");
include("../common/sidebar.php");

$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;

$result = getPhotoReleases($mysqli, $pageno, 10);


$data = $result['photoreleases'];



?>
<link href="../assets/css/magnific-popup.css" rel="stylesheet" type="text/css" id="app-style" />

<style>
  .disabledd {
    opacity: 0.5;
    pointer-events: none;
    cursor: not-allowed;
  }

  .stack-images .image {
    width: 200px !important;
    height: 200px !important;
    position: absolute;
    background: white;
    border-radius: 10px !important;
  }

  .image img {
    border-radius: 10px !important;
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

  .primg {
    image-resolution: 5dpi;
    image-rendering: pixelated;
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
            $dir = '../storage/files/photo_releases/';

            $firstImage = $dir . $image[0]['fileName'] . '_' . $image[0]['size'] . $image[0]['id'] . '.' . $image[0]['fileExtension'];

            if (isset($image[1]))
              $secondImage = $dir . $image[1]['fileName'] . '_' . $image[1]['size'] . $image[1]['id'] . '.' . $image[1]['fileExtension'];

            if (isset($image[2]))
              $thirdImage = $dir . $image[2]['fileName'] . '_' . $image[2]['size'] . $image[2]['id'] . '.' . $image[2]['fileExtension'];
          }

        ?>
          <div class="p-4">

            <div class="pr-gallery">
              <?php

              foreach ($image as $key1 => $img) {
                $img = $dir . $img['fileName'] . '_' . $img['size'] . $img['id'] . '.' . $img['fileExtension'];
              ?>
                <a href="<?= $img ?>" class="galleryItem" title="<?= $value['title'] ?>" data-group="<?= $key + 1 ?>">
                </a>
              <?php
              }

              ?>
              <div class="main-container">
                <div class="stack-images mb-3">
                  <?php if (isset($image[2])) { ?>

                    <div class="image shadow img1" style="rotate: 5deg; right: -25px; top: -25px;">
                      <img src="imagecompressor.php?image=<?= urlencode($thirdImage) ?>" loading="lazy" class="w-100 h-100 primg" style="object-fit: cover" alt="">
                    </div>
                  <?php } ?>

                  <?php if (isset($image[1])) { ?>
                    <div class="image shadow img2" style="rotate: 2deg; right: -15px;top: -15px">
                      <img src="imagecompressor.php?image=<?= urlencode($secondImage) ?>" loading="lazy" class="w-100 h-100 primg" style="object-fit: cover" alt="">
                    </div>
                  <?php } ?>

                  <div class="image shadow img3">
                    <img src="imagecompressor.php?image=<?= urlencode($firstImage) ?>" loading="lazy" class="w-100 h-100 primg" style="object-fit: cover" alt="">
                  </div>


                </div>
                <div class="" style="width: 200px">
                  <h4 class="line-clamp-2 "><?= $value['title'] ?></h4>
                </div>
              </div>
            </div>
          </div>
        <?php

        } ?>
      </div>
      <div class="d-flex justify-content-end">
        <nav>
          <ul class="pagination mb-0">
            <li class="page-item <?php if ($pageno == 1) {
                                    echo "disabledd";
                                  } ?>">
              <a aria-label="Previous" href="?<?php echo http_build_query(array_merge($_GET, ['pageno' => 1])); ?>" class="page-link">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>

            <li class="page-item <?php if ($pageno == 1) {
                                    echo "disabledd";
                                  } ?>">
              <a href="<?php if ($pageno <= 1) {
                          echo '#';
                        } else {
                          echo "?" . http_build_query(array_merge($_GET, ['pageno' => $pageno - 1]));
                        } ?>" class="page-link">
                <span aria-hidden="true">&lsaquo;</span>
              </a>
            </li>
            <?php
            $total_pages = $result['total_page'];
            // Calculate the start and end page numbers
            $start = $pageno - 2;
            $end = $pageno + 2;

            // If the current page number is less than 3, always start from 1
            if ($pageno < 3) {
              $start = 1;
              $end = 5;
            }

            // If the current page number is close to the end, always end at the last page
            if ($pageno > $total_pages - 2) {
              $start = $total_pages - 4;
              $end = $total_pages;
            }

            // Ensure start and end are within the total pages
            $start = max(1, $start);
            $end = min($total_pages, $end);

            for ($i = $start; $i <= $end; $i++) {
            ?>
              <li class="page-item <?= $pageno == $i ? 'active' : '' ?>">
                <a href="?<?= http_build_query(array_merge($_GET, ['pageno' => $i])) ?>" class="page-link">
                  <?= $i ?>
                </a>
              </li>
            <?php
            }
            ?>


            <li class="page-item <?php if ($pageno == $total_pages) {
                                    echo "disabledd";
                                  } ?>">
              <a class="page-link" href="<?php if ($pageno >= $total_pages) {
                                            echo '#';
                                          } else {
                                            echo "?" . http_build_query(array_merge($_GET, ['pageno' => $pageno + 1]));
                                          } ?>">
                <span aria-hidden="true">&rsaquo;</span>
              </a>
            </li>
            <li class="page-item <?php if ($pageno == $total_pages) {
                                    echo "disabledd";
                                  } ?>">
              <a class="page-link" href="?<?php echo http_build_query(array_merge($_GET, ['pageno' => $total_pages])); ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
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
<script src="../assets/js/jquery.magnific-popup.js"></script>

<script>
  $(document).ready(function() {


    $('.pr-gallery').click(function() {
      var groups = [];
      $(this).find('.galleryItem').each(function() {
        groups.push({
          src: $(this).attr('href'),
          type: 'image',
          title: $(this).attr('title')
        });
      });

      //use magnific popup to display the images and title

      $.magnificPopup.open({
        items: groups,
        gallery: {
          enabled: true,
          titleSrc: 'title'

        },
        type: 'image',


      });


    });


  })
</script>


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