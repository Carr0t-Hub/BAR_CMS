<?php
$title = "Organizational Chart";
ob_start();
?>

HELLO WORLD


<?php
$content = ob_get_clean();
require_once("../common/layout.php"); ?>