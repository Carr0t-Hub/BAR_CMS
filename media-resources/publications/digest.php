<?php
require_once("../../common/config.php");

$upper_title = "Publications";
$title = "Digest";

ob_start();
?>

BAR Digest
<?php
$content = ob_get_clean();
require_once("../../common/layout.php");
?>