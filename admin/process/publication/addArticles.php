<?php
include('../../functions/functions.php');

// if (isset($_SESSION['id'])) {

if (isset($_POST['title'])) {

    $result = addNewsEventArticle($mysqli, 'article');

    if ($result) {
        echo "Articles added successfully";
    } else {
        echo "Error adding articles";
    }
}
// } else {
//     echo "You are not authorized to access this page";
// }
