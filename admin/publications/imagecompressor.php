<?php
include("../functions/functions.php");

$imagePath = $_GET['image'];

$image = new \claviska\SimpleImage();
$image->fromFile($imagePath);

header('Content-Type: image/jpeg');
$image->toScreen('image/jpeg', 70);
