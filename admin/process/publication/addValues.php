<?php
include('../../functions/functions.php');

if (isset($_SESSION['id'])) {

    if (isset($_POST['valueTitle'])) {

        $result = addNewsEventArticle($mysqli, 'article');

        if ($result) {
            $_SESSION['success'] = "Article successfully added";
            header("Location:" . $_SERVER['HTTP_REFERER']);
        } else {
            $_SESSION['error'] = "Failed to add article";
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }
} else {
    echo "You are not authorized to access this page";
}
