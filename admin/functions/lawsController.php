<?php
// Memorandum
function addMemo($mysqli)
{
  try {

    $attachment = Attachment::constructStatement($mysqli, 'attachments', $_FILES['attachment'], 1);
    $attachment->execute();
    $attachment_id = $mysqli->lastInsertId();

    Attachment::Upload($_FILES['attachment'], STORAGE_PATH, 'laws', $attachment_id);

    $sql = "INSERT INTO `laws_issuances`
      (`codeNo`, `title`, `attachment`, `description`, `datePosted`, `type`, `updatedBy`)
        VALUES 
      (:codeNo, :title, :attachment, :description, :datePosted, :type, :updatedBy)";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':codeNo' => $_POST['codeNo'],
        ':title' => $_POST['title'],
        ':attachment' => $attachment_id,
        ':description' => $_POST['description'],
        ':datePosted' => $_POST['datePosted'],
        ':type' => "Memorandum",
        ':updatedBy' => $_SESSION['name']
      )
    );
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewMemo($mysqli)
{
  $sql = "SELECT laws.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension 
        FROM laws_issuances as laws
        JOIN attachments as att ON laws.attachment = att.id
        WHERE type = 'Memorandum'";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getMemo($mysqli, $type)
{
  try {
    $sql = "SELECT laws.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension FROM laws_issuances as laws
        JOIN attachments as att ON laws.attachment = att.id
        WHERE type = :type ORDER BY id DESC";
    // $sql = "SELECT * FROM laws_issuances WHERE type = :type AND isDeleted = 0 ORDER BY id DESC";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'type' => $type
    ]);
    return $stmt->fetchAll();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function getMemoById($mysqli, $id)
{
  try {
    $sql = "SELECT laws.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension 
            FROM laws_issuances as laws
            JOIN attachments as att ON laws.attachment = att.id
            WHERE laws.id = :id";
    // $sql = "SELECT * FROM laws_issuances WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
      ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editMemo($mysqli)
{
  try {
    if ($_FILES['attachment']['size'] > 0) {
      $attachment = Attachment::constructStatement($mysqli, 'attachments', $_FILES['attachment'], 1);
      $attachment->execute();
      $attachment_id = $mysqli->lastInsertId();
      Attachment::Upload($_FILES['attachment'], STORAGE_PATH, 'laws', $attachment_id);
    } else {
      $attachment_id = $_POST['attachment_id'];
    }

    $sql = "UPDATE laws_issuances SET codeNo = :codeNo, title = :title,
    attachment = :attachment, description = :description, datePosted = :datePosted WHERE id = :id";
    // $sql = "UPDATE laws_issuances SET codeNo = :codeNo, title = :title, description = :description, datePosted = :datePosted WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'codeNo' => $_POST['codeNo'],
      'title' => $_POST['title'],
      'attachment' => $attachment_id,
      'description' => $_POST['description'],
      'datePosted' => $_POST['datePosted'],
      'id' => $_POST['id']
    ]);
    return true;
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

// Special Order
function addSo($mysqli)
{
  try {
    $attachment = Attachment::constructStatement($mysqli, 'attachments', $_FILES['attachment'], 1);
    $attachment->execute();
    $attachment_id = $mysqli->lastInsertId();

    Attachment::Upload($_FILES['attachment'], STORAGE_PATH, 'laws', $attachment_id);


    $sql = "INSERT INTO `laws_issuances`
      (`codeNo`, `title`, `attachment`, `description`, `datePosted`, `type`, `updatedBy`)
        VALUES 
      (:codeNo, :title, :attachment, :description, :datePosted, :type, :updatedBy)";
    $stmt = $mysqli->prepare($sql);
      $stmt->execute(
        array(
          ':codeNo' => $_POST['codeNo'],
          ':title' => $_POST['title'],
          ':attachment' => $attachment_id,
          ':description' => $_POST['description'],
          ':datePosted' => $_POST['datePosted'],
          ':type' => "SO",
          ':updatedBy' => $_SESSION['name']
        )
      );
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewSo($mysqli)
{
  $sql = "SELECT laws.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension FROM laws_issuances as laws
        JOIN attachments as att ON laws.attachment = att.id
        WHERE type = 'SO'";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getSo($mysqli, $type)
{
  try {
    $sql = "SELECT laws.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension FROM laws_issuances as laws
        JOIN attachments as att ON laws.attachment = att.id
        WHERE type = :type AND laws.isDeleted = 0 ORDER BY id DESC";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'type' => $type
    ]);
    return $stmt->fetchAll();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function getSoById($mysqli, $id)
{
  try {
    $sql = "SELECT laws.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension FROM laws_issuances as laws
            JOIN attachments as att ON laws.attachment = att.id
            WHERE laws.id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
      ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editSo($mysqli)
{
  try {
    if ($_FILES['attachment']['size'] > 0) {
      $attachment = Attachment::constructStatement($mysqli, 'attachments', $_FILES['attachment'], 1);
      $attachment->execute();
      $attachment_id = $mysqli->lastInsertId();
      Attachment::Upload($_FILES['attachment'], STORAGE_PATH, 'laws', $attachment_id);
    } else {
      $attachment_id = $_POST['attachment_id'];
    }

    $sql = "UPDATE laws_issuances SET codeNo = :codeNo, title = :title,
    attachment = :attachment, description = :description, datePosted = :datePosted WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'codeNo' => $_POST['codeNo'],
      'title' => $_POST['title'],
      'attachment' => $attachment_id,
      'description' => $_POST['description'],
      'datePosted' => $_POST['datePosted'],
      'id' => $_POST['id']
    ]);
    return true;
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}
?>