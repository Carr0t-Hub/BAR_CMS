<?php
require_once("../common/config.php");

$title = "INTERNATIONAL PARTNERS";
$partners  = getInternationalPartner($mysqli);

ob_start();
?>

<div class="row gy-3">
    <?php
    foreach ($partners as $partner) {

        $img = $partner['fileName'] . '_' . $partner['size'] . $partner['thumbnail'] . '.' . $partner['fileExtension'];


    ?>
        <!-- <div class="col-lg-3 col-md-6">
            <div class="">
                <img src="" alt="" class="rounded" style="height: 320px;width: 100%;object-fit: cover">



            </div>

        </div> -->

        <div class="col-lg-3 col-md-6">
            <div class="d-items">
                <div class="card-image-1 de-offer" style="background-color: black;">
                    <a href=" <?= $partner['link'] ?>" class="d-text">
                        <div class="d-inner" style="background:rgba(0,0,0,0.6); ">
                            <div class="p-2" style="font-size: 18px"><?= $partner['name'] ?></div>

                        </div>
                    </a>
                    <img src="../admin/storage/files/partners/<?= $img ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    <?php

    }
    ?>
</div>

<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>