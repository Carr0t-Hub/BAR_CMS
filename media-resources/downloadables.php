<?php
require_once("../common/config.php");

$title = "DOWNLOADABLES";

ob_start();
?>

BAR DOWNLOADABLES
<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>