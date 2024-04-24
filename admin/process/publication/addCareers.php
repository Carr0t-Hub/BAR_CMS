<?php
include('../../functions/functions.php');

if (isset($_SESSION['id'])) {

    if (isset($_POST['title'])) {

        $result = addCareers($mysqli);

        if ($result) {
            echo "Careers added successfully";
        } else {
            echo "Error adding careers";
        }
    }
} else {
    echo "You are not authorized to access this page";
}
