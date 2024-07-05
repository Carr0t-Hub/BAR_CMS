<?php
require_once("admin/functions/functions.php");

include("common/header.php");

$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
$result = getPublicationsWithPage($mysqli, $pageno);
$photos = getLatestPhotoRelease($mysqli);
$slider = getActiveSlider($mysqli);

?>

<style>
  .slider {
    margin: 0 auto;
    max-width: 1280px;
  }

  .slide_viewer {
    height: 480px;
    overflow: hidden;
    position: relative;
  }

  .slide_group {
    height: 100%;
    position: relative;
    width: 100%;
  }

  .slide {
    display: none;
    height: 100%;
    position: absolute;
    width: 100%;
  }

  .slide:first-child {
    display: block;
  }

  .slide:nth-of-type(1) {
    background: #D7A151;
  }

  .slide:nth-of-type(2) {
    background: #F4E4CD;
  }

  .slide:nth-of-type(3) {
    background: #C75534;
  }

  .slide:nth-of-type(4) {
    background: #D1D1D4;
  }

  .slide_buttons {
    left: 0;
    position: absolute;
    right: 0;
    text-align: center;
  }

  a.slide_btn {
    color: #474544;
    font-size: 42px;
    margin: 0 0.175em;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
  }

  .slide_btn.active,
  .slide_btn:hover {
    color: #428CC6;
    cursor: pointer;
  }

  @media only screen and (max-width: 767px) {
    .previous_btn {
      left: 50px;
    }

    .next_btn {
      right: 50px;
    }
  }
</style>

<!-- Video Slider -->
<section class="no-top no-bottom jarallax vertical-center" data-video-src="mp4:video/BAR_AVP.mp4"></section>

<!-- Image Slider -->
<section class="jarallax">
  <img src="images/background/4.jpg" class="jarallax-img" alt="">
  <div class="container">
    <div class="row gx-4">
      <div class="slider">
        <div class="slide_viewer">
          <div class="slide_group">
            <?php

            foreach ($slider as $key => $value) {
              $dir = 'admin/storage/files/slider/';
              $img = $dir . $value['fileName'] . '_' . $value['size'] . $value['attachment'] . '.' . $value['fileExtension'];

            ?>
              <div class="slide">
                <img src="<?= $img ?>" class="img-fluid h-100 w-100" alt="">

              </div>
            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Feature Links -->
<div class="no-top no-bottom bg-color text-light">
  <div class="container-fluid">
    <div class="row g-0">
      <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .2)">
        <div class="info-box padding20">
          <i class="icon_clock_alt"></i>
          <div class="info-box_text">
            <div class="info-box_title">Opening Times</div>
            <div class="info-box_subtite">Monday - Friday: 09:00 - 18:00</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .4)">
        <div class="info-box padding20">
          <i class="icon_house_alt"></i>
          <div class="info-box_text">
            <div class="info-box_title">Our Location</div>
            <div class="info-box_subtite">100 S Main St, Los Angeles, CA</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .6)">
        <div class="info-box padding20">
          <i class="icon_headphones"></i>
          <div class="info-box_text">
            <div class="info-box_title">Customer Support</div>
            <div class="info-box_subtite">+208 333 9296</div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>
    </div>
  </div>
</div>

<!-- News & Events -->
<section class="jarallax">
  <img src="images/background/10.jpg" class="jarallax-img" alt="">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-12 text-center">
        <h2 class="title center">News & Events
          <span class="small-border"></span>
        </h2>
      </div>

      <?php
      foreach ($result['publications'] as $key => $value) {
      ?>
        <div class="col-lg-4">
          <div class="d-items">
            <div class="card-image-1 mod-b" style="height: 380px">
              <a href="news_events/?id=<?= $value['id'] ?>" class="d-text">
                <div class="d-inner">
                  <span class="atr-date"><?= date('M d, Y', strtotime($value['datePosted'])); ?></span>
                  <h3 class="line-clamp-3"><?= $value['title'] ?></h3>
                  <p class="line-clamp-3">
                    <?= htmlspecialchars(strip_tags($value['body'])) ?>
                  </p>
                </div>
              </a>
              <?php
              $dir = '';
              $output = preg_match_all('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $value['body'], $matches);
              $firstImage = $matches['src'][0] ?? "";
              ?>
              <div style='display: flex; justify-content: center; align-items: center;height:100%'>
                <img src='../admin/functions/<?= $firstImage ?>' alt='' style='height:100%' loading="lazy">
              </div>
              <?php ?>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>

<!-- Photo Releases -->
<section id="section-intro" class="pt60" data-bgcolor="#79552A">

  <div class="container">
    <div class="row gx-4">
      <div class="col-lg-12 text-center">
        <h2 class="title center">Photo Releases
          <span class="small-border"></span>
        </h2>
      </div>
    </div>
    <div class="row align-items-center">

      <div class="row g-4">
        <?php
        foreach ($photos as $key => $value) {
          $image = $value['images'][0];

          $dir = 'admin/storage/files/photo_releases/';

          $img = $dir . $image['fileName'] . '_' . $image['size'] . $image['id'] . '.' . $image['fileExtension'];

          $datePosted = date('M d, Y', strtotime($value['datePosted']));

        ?>

          <div class="col-lg-4 col-md-6">
            <div class="d-items">
              <div class="card-image-1">
                <a href="blog-single.html" class="d-text">
                  <div class="d-flex flex-column justify-content-center">
                    <span class="atr-date"><?= $datePosted ?></span>
                    <h3>
                      <?= $value['title'] ?>
                    </h3>
                  </div>
                </a>
                <img src="<?= $img ?>" class="img-fluid" alt="" style="height: 380px; width: 400px; object-fit:cover">
              </div>
            </div>
          </div>
        <?php
        }
        ?>


      </div>
    </div>
  </div>
</section>

<!-- Search Modal -->
<div class="modal fade" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="mb-3">
          <label for="message-text" class="col-form-label text-dark">
            <h4>Keyword</h4>
          </label>
          <textarea class="form-control" id="message-text"></textarea>
        </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  $('.slider').each(function() {
    var $this = $(this);
    var $group = $this.find('.slide_group');
    var $slides = $this.find('.slide');
    var bulletArray = [];
    var currentIndex = 0;
    var timeout;

    function move(newIndex) {
      var animateLeft, slideLeft;

      advance();

      if ($group.is(':animated') || currentIndex === newIndex) {
        return;
      }

      bulletArray[currentIndex].removeClass('active');
      bulletArray[newIndex].addClass('active');

      if (newIndex > currentIndex) {
        slideLeft = '100%';
        animateLeft = '-100%';
      } else {
        slideLeft = '-100%';
        animateLeft = '100%';
      }

      $slides.eq(newIndex).css({
        display: 'block',
        left: slideLeft
      });
      $group.animate({
        left: animateLeft
      }, function() {
        $slides.eq(currentIndex).css({
          display: 'none'
        });
        $slides.eq(newIndex).css({
          left: 0
        });
        $group.css({
          left: 0
        });
        currentIndex = newIndex;
      });
    }

    function advance() {
      clearTimeout(timeout);
      timeout = setTimeout(function() {
        if (currentIndex < ($slides.length - 1)) {
          move(currentIndex + 1);
        } else {
          move(0);
        }
      }, 4000);
    }

    $('.next_btn').on('click', function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    });

    $('.previous_btn').on('click', function() {
      if (currentIndex !== 0) {
        move(currentIndex - 1);
      } else {
        move(3);
      }
    });

    $.each($slides, function(index) {
      var $button = $('<a class="slide_btn">&bull;</a>');

      if (index === currentIndex) {
        $button.addClass('active');
      }
      $button.on('click', function() {
        move(index);
      }).appendTo('.slide_buttons');
      bulletArray.push($button);
    });

    advance();
  });
</script>

<?php include("common/footer.php"); ?>