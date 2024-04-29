<?php
include('../../functions/functions.php');

if (isset($_SESSION['id'])) {

    if (isset($_POST['title'])) {

        $result = editNewsEventArticle($mysqli);

        if ($result) {
            $_SESSION['success'] = "Article successfully updated";
            header("Location:" . $_SERVER['HTTP_REFERER']);
        } else {
            $_SESSION['error'] = "Failed to update article";
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }
} else {
    echo "You are not authorized to access this page";
}
