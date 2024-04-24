<?php
include('../../functions/functions.php');

if (isset($_POST['bar_mission'])) {

    $result = updateMVVM($mysqli);

    // if ($result) {
    //     echo "Careers added successfully";
    // } else {
    // echo $result;
    header("Location: ".$_SERVER['HTTP_REFERER']);
    // }
}
