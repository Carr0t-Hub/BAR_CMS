<?php
require_once("../common/config.php");

$title = "INTERNATIONAL PARTNERS";

ob_start();
?>

INTERNATIONAL PARTNERS
<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>