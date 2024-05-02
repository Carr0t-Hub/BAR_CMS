<?php

function addSlider($mysqli)
{
  try {
    $attachment = Attachment::constructStatement($mysqli, 'attachments', $_FILES['attachment'], 1);
    $attachment->execute();
    $attachment_id = $mysqli->lastInsertId();

    Attachment::Upload($_FILES['attachment'], STORAGE_PATH, 'slider', $attachment_id);

    $sql = "INSERT INTO `sliders`
      (`attachment`, `description`)
        VALUES 
      (:attachment, :description)";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':attachment' => $attachment_id,
        ':description' => $_POST['description']
      )
    );
    return true;
  } catch (PDOException $e) {
    return false;
  }
}

function viewSlider($mysqli)
{
  $sql = "SELECT sld.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension 
        FROM sliders as sld
        JOIN attachments as att ON sld.attachment = att.id";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getSliderIfNotDeleted($mysqli)
{
  try {
    $sql = "SELECT * FROM sliders WHERE isDeleted = 0 ORDER BY id DESC";
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

function getSliderById($mysqli, $id)
{
  try {
    $sql = "SELECT sld.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension 
            FROM sliders as sld
            JOIN attachments as att ON sld.attachment = att.id
            WHERE sld.id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
    ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editSlider($mysqli)
{
  try {
    if ($_FILES['attachment']['size'] > 0) {
      $attachment = Attachment::constructStatement($mysqli, 'attachments', $_FILES['attachment'], 1);
      $attachment->execute();
      $attachment_id = $mysqli->lastInsertId();
      Attachment::Upload($_FILES['attachment'], STORAGE_PATH, 'slider', $attachment_id);
    } else {
      $attachment_id = $_POST['attachment_id'];
    }

    $sql = "UPDATE sliders SET attachment = :attachment, description = :description, isDeleted = :isDeleted WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'attachment' => $attachment_id,
      'description' => $_POST['description'],
      'isDeleted' => $_POST['isDeleted'],
      'id' => $_POST['id']
    ]);
    return true;
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function getActiveSlider($mysqli)
{


  try {

    $sql = "SELECT sliders.*, attachments.id as attachment, attachments.fileName, attachments.size, attachments.fileExtension FROM sliders
            JOIN attachments ON sliders.attachment = attachments.id
            WHERE isDeleted = 0";


    $stmt = $mysqli->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}
