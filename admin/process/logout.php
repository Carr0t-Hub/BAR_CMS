<?php
include('../functions/functions.php');


if (isset($_SESSION['id'])) {
    $result = userLastLogin($mysqli);
    // echo $result;
    if ($result) {
        session_destroy();
        header("Location: ../index.php");
    }
}


