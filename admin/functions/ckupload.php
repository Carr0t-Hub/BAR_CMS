<?php
include('../functions/config.php');
include('../helper/Attachment.php');

//uuid

$id = uniqid();
$path = '../storage/images/';

$file  = Attachment::Upload($_FILES['upload'], STORAGE_PATH, 'images', $id);

echo json_encode([
    'url' => $path . $file,
]);
