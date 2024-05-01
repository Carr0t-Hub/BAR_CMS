<?php
include('../../functions/functions.php');

if (isset($_POST['codeNo'])) {

    $result = addMemo($mysqli);

    // if ($result) {
    //     echo "Careers added successfully";
    // } else {
    // echo $result;
    header("Location: ".$_SERVER['HTTP_REFERER']);
    // }
}
