<?php
include('../../functions/functions.php');

if (isset($_POST['regionalOffice'])) {

    $result = addDARFO($mysqli);

    if ($result) {
        $_SESSION['success'] = "Successfully added";
    } else {
        $_SESSION['error'] = "Failed to add";
    }
    header("Location: " . $_SERVER['HTTP_REFERER']);
}