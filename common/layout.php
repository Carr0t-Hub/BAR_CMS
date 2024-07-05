<?php
require_once 'header.php';

$background_image = isset($background_image) ? $background_image : $rootpath . "/images/background/10.jpg";

?>
<div id="background" data-bgimage="url(<?= $background_image ?>) fixed"></div>

<div id="content-absolute">
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php
                    if (isset($upper_title) && $upper_title != "") {
                    ?>
                        <h4><?= $upper_title ?></h4>
                    <?php
                    } ?>


                    <h1><?php echo $title ?></h1>
                </div>
            </div>
        </div>
    </section>
    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <?php echo $content; ?>
        </div>
    </section>
</div>
<?php
require_once 'footer.php';
?>