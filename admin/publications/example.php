<?php
include("../functions/functions.php");

header('Content-Type: application/json');


$input = filter_input_array(INPUT_POST);


$sql = "UPDATE publications SET title =:title WHERE id =:id";
$stmt = $mysqli->prepare($sql);
if ($input['action'] == 'edit') {
    $stmt->execute(['title' => $input['title'], 'id' => $input['id']]);
}

echo json_encode($input);
