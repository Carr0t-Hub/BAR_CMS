<?php

function addProcurement($mysqli)
{
  try {
    $attachment = Attachment::constructStatement($mysqli, 'attachments', $_FILES['attachment'], 1);
    $attachment->execute();
    $attachment_id = $mysqli->lastInsertId();

    Attachment::Upload($_FILES['attachment'], STORAGE_PATH, 'procurement', $attachment_id);

    $sql = "INSERT INTO `procurement`
      (`title`, `attachment`, `datePosted`, `type`, `isDeleted`)
        VALUES 
      (:title, :attachment, :datePosted, :type, :isDeleted)";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':title' => $_POST['title'],
        ':attachment' => $attachment_id,
        ':datePosted' => $_POST['datePosted'],
        ':type' => $_POST['type'],
        ':isDeleted' => 0
      )
    );
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewProcurement($mysqli)
{
  $sql = "SELECT procure.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension 
        FROM procurement as procure
        LEFT JOIN attachments as att ON procure.attachment = att.id";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getProcurementIfNotDeleted($mysqli)
{
  try {
    $sql = "SELECT * FROM procurement WHERE isDeleted = 0 ORDER BY id DESC";
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

function getProcurementById($mysqli, $id)
{
  try {
    $sql = "SELECT procure.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension 
            FROM procurement as procure
            LEFT JOIN attachments as att ON procure.attachment = att.id
            WHERE procure.id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
    ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editProcurement($mysqli)
{
  try {
    if ($_FILES['attachment']['size'] > 0) {
      $attachment = Attachment::constructStatement($mysqli, 'attachments', $_FILES['attachment'], 1);
      $attachment->execute();
      $attachment_id = $mysqli->lastInsertId();
      Attachment::Upload($_FILES['attachment'], STORAGE_PATH, 'procurement', $attachment_id);
    } else {
      $attachment_id = $_POST['attachment_id'];
    }
    $sql = "UPDATE procurement SET title = :title, attachment = :attachment, datePosted = :datePosted, type = :type, isDeleted = :isDeleted WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'title' => $_POST['title'],
      'attachment' => $attachment_id,
      'datePosted' => $_POST['datePosted'],
      'type' => $_POST['type'],
      'isDeleted' => $_POST['isDeleted'],
      'id' => $_POST['id']
    ]);
    return true;
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}
