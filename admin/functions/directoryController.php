<?php

function addDirectory($mysqli)
{
  try {



    $attachment = Attachment::constructStatement($mysqli, 'attachments', $_FILES['attachment'], 1);
    $attachment->execute();
    $attachment_id = $mysqli->lastInsertId();

    Attachment::Upload($_FILES['attachment'], STORAGE_PATH, 'directories', $attachment_id);




    $sql = "INSERT INTO `directories`
      (`firstName`, `middleName`, `lastName`, `division`, `section`, `email`, `telephone`, `attachment`)
        VALUES 
      (:firstName, :middleName, :lastName, :division, :section, :email, :telephone, :attachment)";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':firstName' => $_POST['firstName'],
        ':middleName' => $_POST['middleName'],
        ':lastName' => $_POST['lastName'],
        ':division' => $_POST['division'],
        ':section' => $_POST['section'],
        ':email' => $_POST['email'],
        ':telephone' => $_POST['telephone'],
        ':attachment' => $attachment_id
      )
    );
    return true;
  } catch (PDOException $e) {
    return false;
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
  $sql = "SELECT dir.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension FROM directories as dir
        LEFT JOIN attachments as att ON dir.attachment = att.id
        WHERE dir.isDeleted = 0";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getDirectory($mysqli, $email)
{
  try {
    $sql = "SELECT * FROM directories WHERE email = :email AND isDeleted = 0 ORDER BY id DESC";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'email' => $email
    ]);
    return $stmt->fetchAll();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function getDirectoryById($mysqli, $id)
{
  try {
    $sql = "SELECT dir.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension 
            FROM directories as dir
            LEFT JOIN attachments as att ON dir.attachment = att.id
            WHERE dir.id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
    ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editDirectory($mysqli)
{
  try {

    if ($_FILES['attachment']['size'] > 0) {
      $attachment = Attachment::constructStatement($mysqli, 'attachments', $_FILES['attachment'], 1);
      $attachment->execute();
      $attachment_id = $mysqli->lastInsertId();
      Attachment::Upload($_FILES['attachment'], STORAGE_PATH, 'directories', $attachment_id);
    } else {
      $attachment_id = $_POST['attachment_id'];
    }




    $sql = "UPDATE directories SET firstName = :firstName, middleName = :middleName, 
            lastName = :lastName, division = :division, section = :section, email = :email, telephone = :telephone,
            attachment = :attachment WHERE id = :id";

    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'firstName' => $_POST['firstName'],
      'middleName' => $_POST['middleName'],
      'lastName' => $_POST['lastName'],
      'division' => $_POST['division'],
      'section' => $_POST['section'],
      'email' => $_POST['email'],
      'telephone' => $_POST['telephone'],
      'attachment' => $attachment_id,
      'id' => $_POST['id']
    ]);
    return true;
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}
