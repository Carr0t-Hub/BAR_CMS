<?php

header('Content-Type: application/json');
$path = $_SERVER['DOCUMENT_ROOT'] . '/BAR_CMS/admin';

include($path . "/functions/functions.php");

$page = $_GET['page'] ?? 1;

$result = getPublicationsWithPage($mysqli, $page);

echo json_encode($result);
