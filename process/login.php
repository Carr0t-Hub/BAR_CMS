<?php
include('../functions/functions.php');

if (isset($_POST['username'])) {

    $result = userLogin($mysqli);

    if ($result == "success") {
        header("Location: ../admin/views/index.php");
    } else {
        $_SESSION['error'] = $result;
        header("Location: ../admin/index.php");
    }
}
