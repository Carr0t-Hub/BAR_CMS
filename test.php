<?php


require 'SimpleImage.php';



try {
    // Create a new SimpleImage object
    $image = new \claviska\SimpleImage();

    // Magic! ✨
    $image
        ->fromFile('dog.jpg')                     // load image.jpg
        ->autoOrient()                              // adjust orientation based on exif data
        ->resize(320, 200)                          // resize to 320x200 pixels// add a watermark image
        ->toScreen();                               // output to the screen

    // And much more! 💪
} catch (Exception $err) {
    // Handle errors
    echo $err->getMessage();
}
