<?php include("common/header.php");

$result = getPublications($mysqli, 'article');

?>
<div id="background" data-bgimage="url(images/background/9.jpg) fixed"></div>
<div id="content-absolute">
  <section id="subheader" class="no-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4>Latest</h4>
          <h1>News & Events</h1>
        </div>
      </div>
    </div>
  </section>

  <section id="section-main" class="no-bg no-top" aria-label="section-menu">
    <div class="container">
      <div class="row g-4">

        <?php

        foreach ($result as $key => $value) {
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="d-items">
              <div class="card-image-1 mod-b" style="height: 380px">
                <a href="02-blog-single.html" class="d-text">
                  <div class="d-inner">
                    <span class="atr-date"><?= date('M d, Y', strtotime($value['datePosted'])); ?></span>
                    <h3><?= $value['title'] ?></h3>
                    <p class="line-clamp-3">
                      <?= htmlspecialchars(strip_tags($value['body'])) ?>
                    </p>
                    <h5 class="d-tag">
                      <?= $value['type'] ?>
                    </h5>
                  </div>
                </a>
                <!-- <img src="images/blog/1.jpg" class="img-fluid" alt=""> -->

                <?php

                //extract image from bbody img src=

                $output = preg_match_all('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $value['body'], $matches);
                $firstImage = $matches['src'][0] ?? "";

                echo "<img src='$firstImage' alt='' style='display: block; margin: auto; object-fit: contain'>";

                ?>
              </div>
            </div>
          </div>
        <?php

        }
        ?>

        <div class="clearfix"></div>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </section>

  <?php include("common/footer.php"); ?>