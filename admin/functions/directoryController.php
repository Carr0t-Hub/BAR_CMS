<?php

// Mission, Vision, Values & Mandates
function addDirectory($mysqli)
{
  try {
    $sql = "INSERT INTO `directories`
      (`firstName`, `middleName`, `lastName`, `division`, `section`, `email`, `telephone`)
        VALUES 
      (:firstName, :middleName, :lastName, :division, :section, :email, :telephone)";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':firstName' => $_POST['firstName'],
        ':middleName' => $_POST['middleName'],
        ':lastName' => $_POST['lastName'],
        ':division' => $_POST['division'],
        ':section' => $_POST['section'],
        ':email' => $_POST['email'],
        ':telephone' => $_POST['telephone']
      )
    );
  return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function updateDirectory($mysqli)
{
  try {
    $sql = "UPDATE `directories` SET 
      firstName = :firstName, 
      middleName = :middleName, 
      lastName = :lastName,
      division = :division, 
      section = :section, 
      email = :email,
      telephone = :telephone"; 
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':firstName' => $_POST['firstName'],
        ':middleName' => $_POST['middleName'],
        ':lastName' => $_POST['lastName'],
        ':division' => $_POST['division'],
        ':section' => $_POST['section'],
        ':email' => $_POST['email'],
        ':telephone' => $_POST['telephone']
      )
    );
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewDirectory($mysqli)
{
  $sql = "SELECT * FROM directories";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

?>