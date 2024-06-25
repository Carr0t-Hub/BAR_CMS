<?php
require_once("../common/config.php");

$title = "INTERNATIONAL PARTNERS";

ob_start();
?>

<div class="thumbnail-container">
    <div class="thumbnail">
        <iframe src="http://afaci.org/main" frameborder="0" onload="var that=this;setTimeout(function() { that.style.opacity = 1 }, 500)"></iframe>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>