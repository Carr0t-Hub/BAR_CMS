<?php
include('../functions/functions.php');


if (isset($_SESSION['id'])) {
    session_destroy();
    header("Location: ../admin/index.php");
}
