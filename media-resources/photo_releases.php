<?php
require_once("../common/config.php");

$upper_title = "Latest";
$title = "Photo Releases";

$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
$result = getPhotoReleases($mysqli, $pageno, 10);
ob_start();
?>


<style>
  .disabledd {
    opacity: 0.5;
    pointer-events: none;
    cursor: not-allowed;
  }
</style>



<div id="gallery" class="row g-4">


  <?php
  foreach ($result['photoreleases'] as $key => $value) {
    $image = $value['images'];
    $dir = '../admin/storage/files/photo_releases/';

  ?>

    <div class="col-md-4 item">
      <div class="de-image-hover popup-gallery">
        <?php
        foreach ($image as $key => $value1) {
          $img = $dir . $value1['fileName'] . '_' . $value1['size'] . $value1['id'] . '.' . $value1['fileExtension'];
          if ($key == 0) {
        ?>
            <a href="<?= $img ?>" class="" title="<?= $value['title'] ?>">
              <span class="dih-title-wrap">
                <span class="dih-title"><?= $value['title'] ?></span>
              </span>
              <span class="dih-overlay"></span>
              <img src="<?= $img ?>" class="lazy img-fluid" alt="">
            </a>
          <?php
          } else {
          ?>
            <a href="<?= $img ?>" title="<?= $value['title'] ?>"></a>
        <?php
          }
        }
        ?>


      </div>
    </div>
  <?php
  }

  ?>


</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <!-- <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li> -->
    <li class="page-item  <?php if ($pageno == 1) {
                            echo "disabledd";
                          } ?>">
      <a href="?<?php echo http_build_query(array_merge($_GET, ['pageno' => 1])); ?>" class="page-link">
        <i class="fa fa-angle-double-left"></i>
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
        <i class="fa fa-angle-left"></i>
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
      <a href="<?php if ($pageno >= $total_pages) {
                  echo '#';
                } else {
                  echo "?" . http_build_query(array_merge($_GET, ['pageno' => $pageno + 1]));
                } ?>" class="page-link ">
        <i class="fa fa-angle-right"></i>
      </a>
    </li>

    <li class="page-item <?php if ($pageno == $total_pages) {
                            echo "disabledd";
                          } ?>">
      <a href="?<?php echo http_build_query(array_merge($_GET, ['pageno' => $total_pages])); ?>" class="page-link  ">
        <i class="fa fa-angle-double-right"></i>
      </a>
    </li>

  </ul>
</nav>

<script>
  $(document).ready(function() {
    $('.popup-gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title');
        }
      }
    });
  });
</script>

<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>