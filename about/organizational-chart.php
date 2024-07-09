<?php
$title = "Organizational Chart";
ob_start();
?>
<div class="row">
    <div class="col-lg-12 ">
        <!-- <div class="de-content-overlay rounded shadow"> -->
        <img src="../images/BAR_OrgChart.png" alt="" class="img-fluid rounded shadow">
        <!-- </div> -->
    </div>
</div>


<?php
$content = ob_get_clean();
require_once("../common/layout.php"); ?>