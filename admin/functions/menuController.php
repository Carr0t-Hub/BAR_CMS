<?php

function addMenu($mysqli)
{
  try {
    $sql = "INSERT INTO `menus`
      (`firstName`, `middleName`, `lastName`, `email`, `telephone`)
        VALUES 
      (:firstName, :middleName, :lastName, :email, :telephone)";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':firstName' => $_POST['firstName'],
        ':middleName' => $_POST['middleName'],
        ':lastName' => $_POST['lastName'],
        ':email' => $_POST['email'],
        ':telephone' => $_POST['telephone']
      )
    );
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewMenu($mysqli)
{
  $sql = "SELECT * FROM menus";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getMenuIfNotDeleted($mysqli)
{
  try {
    $sql = "SELECT * FROM menus WHERE isDeleted = 0 ORDER BY id DESC";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute();
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
    return $stmt->fetchAll();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function getMenuById($mysqli, $id)
{
  try {
    $sql = "SELECT * FROM menus WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
      ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editMenu($mysqli)
{
  try {
    $sql = "UPDATE menus SET firstName = :firstName, middleName = :middleName, lastName = :lastName, email = :email, telephone = :telephone, isDeleted = :isDeleted WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'firstName' => $_POST['firstName'],
      'middleName' => $_POST['middleName'],
      'lastName' => $_POST['lastName'],
      'email' => $_POST['email'],
      'telephone' => $_POST['telephone'],
      'isDeleted' => $_POST['isDeleted'],
      'id' => $_POST['id']
    ]);
    return true;
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

?>