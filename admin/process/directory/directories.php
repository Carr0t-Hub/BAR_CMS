<?php
include('../../functions/functions.php');

if (isset($_POST['firstName'])) {

    $result = addDirectory($mysqli);

    // if ($result) {
    //     echo "Careers added successfully";
    // } else {
    // echo $result;
    header("Location: ".$_SERVER['HTTP_REFERER']);
    // }
}
