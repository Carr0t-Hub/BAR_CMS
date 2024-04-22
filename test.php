<?php
include('functions/functions.php');


$result = updateUserInfo($mysqli, 1);


echo json_encode($result);
