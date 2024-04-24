<?php

// Mission, Vision, Values & Mandates
function addMVVM($mysqli)
{
  try {
    $sql = "INSERT INTO `mvvm`
      (`bar_mission`, `bar_vision`, `bar_values`, `bar_mandates`)
        VALUES 
      (:bar_mission, :bar_vision, :bar_values, :bar_mandates)";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':bar_mission' => $_POST['bar_mission'],
        ':bar_vision' => $_POST['bar_vision'],
        ':bar_values' => $_POST['bar_values'],
        ':bar_mandates' => $_POST['bar_mandates']
      )
    );
  return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function updateMVVM($mysqli)
{
  try {
    $sql = "UPDATE `mvvm` SET 
      bar_mission = :bar_mission, 
      bar_vision = :bar_vision, 
      bar_values = :bar_values,
      bar_mandates = :bar_mandates"; 
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':bar_mission' => $_POST['bar_mission'],
        ':bar_vision' => $_POST['bar_vision'],
        ':bar_values' => $_POST['bar_values'],
        ':bar_mandates' => $_POST['bar_mandates']
      )
    );
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewMVVM($mysqli)
{
  $sql = "SELECT * FROM mvvm";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

?>