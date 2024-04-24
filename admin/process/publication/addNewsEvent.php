<?php
include('../../functions/functions.php');

// if (isset($_SESSION['id'])) {

if (isset($_POST['title'])) {

    $result = addNewsEventArticle($mysqli, 'newsevent');

    if ($result) {
        echo "News event added successfully";
    } else {
        echo "Error adding news and event";
    }
}
// } else {
//     echo "You are not authorized to access this page";
// }
