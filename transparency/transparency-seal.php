<?php
require_once("../common/config.php");



$title = "TRANSPARENCY SEAL";

ob_start();
?>

TRANSPARENCY SEAL
<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>