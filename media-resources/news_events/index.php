<?php

require_once("../../common/config.php");
if (!isset($_GET['id'])) {
    include('main.php');
} else {
    include('individual.php');
}
