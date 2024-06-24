<?php

$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;

$result = getPublicationsWithPage($mysqli);
$upper_title = "Latest";
$title = "News & Events";
$background_image = "../../images/background/10.jpg";

ob_start();

?>

<style>
    .disabledd {
        opacity: 0.5;
        pointer-events: none;
        cursor: not-allowed;
    }
</style>

<div class="row g-4">

    <?php
    foreach ($result['publications'] as $key => $value) {
    ?>
        <div class="col-lg-4 col-md-6">
            <div class="d-items">
                <div class="card-image-1 mod-b" style="height: 380px">
                    <a href="?id=<?= $value['id'] ?>" class="d-text">
                        <div class="d-inner">
                            <span class="atr-date"><?= date('M d, Y', strtotime($value['datePosted'])); ?></span>
                            <h3 class="line-clamp-3"><?= $value['title'] ?></h3>
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

                    $dir = '';

                    $output = preg_match_all('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $value['body'], $matches);
                    $firstImage = $matches['src'][0] ?? "";

                    ?>
                    <div style='display: flex; justify-content: center; align-items: center;height:100%'>
                        <img src='<?= $path ?>/functions/<?= $firstImage ?>' alt='' style='height:100%' loading="lazy">
                    </div>
                    <?php

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


</div>


<?php
$content = ob_get_clean();
require_once("../../common/layout.php");
?>