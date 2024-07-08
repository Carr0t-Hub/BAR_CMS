<?php

function addValues($mysqli)
{
  try {
    $sql = "INSERT INTO `value_focus`
      (`weekNum`, `valueTitle`, `valueDescription`, `actionPlan`, `declaration`,  `prayer`)
        VALUES 
      (:weekNum, :valueTitle, :valueDescription, :actionPlan, :declaration, :prayer)";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':weekNum' => $_POST['weekNum'],
        ':valueTitle' => $_POST['valueTitle'],
        ':valueDescription' => $_POST['valueDescription'],
        ':actionPlan' => $_POST['actionPlan'],
        ':declaration' => $_POST['declaration'],
        ':prayer' => $_POST['prayer']
      )
    );
    return true;
  } catch (PDOException $e) {
    return false;
  }
}

function updateValues($mysqli)
{
  try {
    $sql = "UPDATE `value_focus` SET 
      weekNum = :weekNum, 
      valueTitle = :valueTitle, 
      valueDescription = :valueDescription,
      actionPlan = :actionPlan, 
      prayer = :prayer";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':weekNum' => $_POST['weekNum'],
        ':valueTitle' => $_POST['valueTitle'],
        ':valueDescription' => $_POST['valueDescription'],
        ':actionPlan' => $_POST['actionPlan'],
        ':prayer' => $_POST['prayer']
      )
    );
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewValues($mysqli)
{
  $sql = "SELECT * FROM value_focus";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getValues($mysqli, $prayer)
{
  try {
    $sql = "SELECT * FROM value_focus WHERE prayer = :prayer AND isDeleted = 0 ORDER BY id DESC";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'prayer' => $prayer
    ]);
    return $stmt->fetchAll();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function getValuesById($mysqli, $id)
{
  try {
    $sql = "SELECT * FROM value_focus WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
    ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editValues($mysqli)
{
  try {
    $sql = "UPDATE `value_focus` SET 
      weekNum = :weekNum, 
      valueTitle = :valueTitle, 
      valueDescription = :valueDescription,
      actionPlan = :actionPlan, 
      prayer = :prayer";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':weekNum' => $_POST['weekNum'],
        ':valueTitle' => $_POST['valueTitle'],
        ':valueDescription' => $_POST['valueDescription'],
        ':actionPlan' => $_POST['actionPlan'],
        ':prayer' => $_POST['prayer']
      )
    );
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}
