<?php
include("../common/header.php");
if (!isset($_GET['id'])) {
    include('main.php');
} else {
    include('individual.php');
}

include("../common/footer.php");
