<?php
include('../../functions/functions.php');

if (isset($_POST['title'])) {

    $result = addCareers($mysqli);

    // if ($result) {
    //     echo "Careers added successfully";
    // } else {
    echo $result;
    // }
}
