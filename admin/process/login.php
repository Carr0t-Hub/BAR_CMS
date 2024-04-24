<?php
include('../functions/functions.php');

if (isset($_POST['username'])) {

    $result = userLogin($mysqli);

    if ($result == "success") {
        header("Location: ../views/index.php");
    } else {
        $_SESSION['error'] = $result;
        header("Location: ../index.php");
    }
}
