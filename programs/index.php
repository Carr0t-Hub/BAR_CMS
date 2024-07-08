<?php
require_once("../common/config.php");

$title = "PROGRAMS";

ob_start();
?>

PROGRAMS
<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>