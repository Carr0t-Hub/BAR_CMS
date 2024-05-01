<?php

function addAuthor($mysqli)
{
  try {
    $sql = "INSERT INTO `authors`
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

function viewAuthor($mysqli)
{
  $sql = "SELECT * FROM authors";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getAuthorIfNotDeleted($mysqli)
{
  try {
    $sql = "SELECT * FROM authors WHERE isDeleted = 0 ORDER BY id DESC";
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

function getAuthorById($mysqli, $id)
{
  try {
    $sql = "SELECT * FROM authors WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
      ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editAuthor($mysqli)
{
  try {
    $sql = "UPDATE authors SET firstName = :firstName, middleName = :middleName, lastName = :lastName, email = :email, telephone = :telephone, isDeleted = :isDeleted WHERE id = :id";
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