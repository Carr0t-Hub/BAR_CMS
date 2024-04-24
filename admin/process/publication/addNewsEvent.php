<?php
include('../../functions/functions.php');

// if (isset($_SESSION['id'])) {

if (isset($_POST['title'])) {

    $result = addNewsEventArticle($mysqli, 'newsevent');

    echo $result;

    // if ($result) {
    //     header("Location: ../../publications/news_events.php");
    // } else {
    //     header("Location: ../../publications/news_events.php");
    // }
}
// } else {
//     echo "You are not authorized to access this page";
// }
