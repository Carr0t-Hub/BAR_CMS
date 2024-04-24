<?php
include('../../functions/functions.php');

// if (isset($_SESSION['id'])) {

if (isset($_POST['title'])) {

    $result = addPhotoRelease($mysqli);

    if ($result) {
        echo "Photo Release added successfully";
    } else {
        echo "Error adding photo releases";
    }
}
// } else {
//     echo "You are not authorized to access this page";
// }
