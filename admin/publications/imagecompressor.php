<?php
include("../functions/functions.php");

$imagePath = $_GET['image'];

$image = new \claviska\SimpleImage();
// $image->fromFile($imagePath)->resize(800, 600);

//change the width only and  maintain the aspect ratio
$image->fromFile($imagePath)->bestFit(300, 200);

header('Content-Type: image/jpeg');
$image->toScreen();
