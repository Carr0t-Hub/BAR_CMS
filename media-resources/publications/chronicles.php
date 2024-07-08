<?php
require_once("../../common/config.php");

$upper_title = "Publications";
$title = "Chronicles";

ob_start();
?>

BAR Chronicles
<?php
$content = ob_get_clean();
require_once("../../common/layout.php");
?>