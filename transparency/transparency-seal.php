<?php
require_once("../common/config.php");



$title = "TRANSPARENCY SEAL";

ob_start();
?>

<div class="row">
    <div class="col-lg-12">
        <div class="de-content-overlay">



        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>