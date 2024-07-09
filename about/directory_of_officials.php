<?php
require_once("../common/config.php");

$directories = viewDirectory($mysqli);
$title = "Directory of Officials";
ob_start();

?>

<div class="row g-4">

    <?php
    foreach ($directories as $directory) : ?>
        <?php

        $img = $directory['fileName'] . '_' . $directory['size'] . $directory['attachment'] . '.' . $directory['fileExtension'];
        $middlename = isset($directory['middleName']) ? '' : $directory['middleName'];

        $fullName = $directory['firstName'] . ' ' . $middlename . ' ' . $directory['lastName'];

        ?>

        <div class="col-lg-3">
            <div class="de-room h-100">
                <div class="d-image">

                    <a href="room-single.html">
                        <div class="bg-white d-flex justify-content-center align-items-center w-full">
                            <img src="../admin/storage/files/directories/<?= $img ?>" class="img-fluid" alt="" style="object-fit: cover;height: 285px; width: 285px">
                        </div>
                    </a>
                </div>

                <div class="d-text ">
                    <h3>
                        <?= $fullName ?>
                    </h3>
                    <div class=""><?php echo $directory['division']; ?></div>
                    <div class="" style="font-size: 14px">
                        <i class="fa fa-envelope mr-2"></i>
                        <?php echo $directory['email']; ?>
                    </div>
                    <div class="">
                        <i class="fa fa-phone mr-2"></i>
                        <?php echo strtoupper($directory['telephone']); ?>
                    </div>
                </div>
            </div>
        </div>

    <?php

    endforeach;
    ?>
</div>

<?php
$content = ob_get_clean();
require_once("../common/layout.php"); ?>