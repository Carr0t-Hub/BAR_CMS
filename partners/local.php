<?php
require_once("../common/config.php");

$title = "LOCAL PARTNERS";

ob_start();
?>

LOCAL PARTNERS
<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>