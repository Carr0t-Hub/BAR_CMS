<?php
require_once("../common/config.php");

$title = "INTERNATIONAL PARTNERS";
$partners  = getInternationalPartner($mysqli);

ob_start();
?>
<style>
    .asf {
        position: relative;
    }

    .zxvz {
        position: absolute;
        width: 100%;
        height: 100%;
        right: 0;
        bottom: 0;
        z-index: 99;
        text-align: center;
        vertical-align: end;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 100%);

    }

    .zxvz:hover {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.2) 100%);

    }
</style>

<div class="row gy-3">
    <?php
    foreach ($partners as $partner) {

        $img = $partner['fileName'] . '_' . $partner['size'] . $partner['thumbnail'] . '.' . $partner['fileExtension'];
    ?>

        <div class="col-lg-3 col-md-6">
            <div class="d-items ">
                <div class="card-image-1 de-offer  rounded border border-secondary shadow asf" style="background-color: black;">
                    <a href="<?= $partner['link'] ?>" class="zxvz d-flex align-items-end">
                        <div class="p-2 text-center w-100" style="font-size: 16px"><?= $partner['name'] ?></div>
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