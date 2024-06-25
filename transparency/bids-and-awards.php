<?php
require_once("../common/config.php");

$type = [
    0 => "Purchase Order",
    1 => "Invitation to BID",
    2 => "Notice of Award",
    3 => "BAC Resolution",
    4 => "Notice to Proceed",
    5 => "Work Order",
    6 => "Bidding Documents"
];

$background_image = "../images/background/4.jpg";
$upper_title = "Bid and Awards";
$title = isset($_GET['type']) ? $type[$_GET['type']] : "Bids and Awards";

ob_start();
?>

BIDS AND AWARDS
<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>