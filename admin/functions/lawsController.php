<?php
// Memorandum
function addMemo($mysqli)
{
  try {
    $sql = "INSERT INTO `laws_issuances`
      (`codeNo`, `title`, `description`, `datePosted`, `type`, `updatedBy`)
        VALUES 
      (:codeNo, :title, :description, :datePosted, :type, :updatedBy)";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':codeNo' => $_POST['codeNo'],
        ':title' => $_POST['title'],
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
  $sql = "SELECT * FROM laws_issuances WHERE type='Memorandum'";
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
    $sql = "SELECT * FROM laws_issuances WHERE type = :type AND isDeleted = 0 ORDER BY id DESC";
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
    $sql = "SELECT * FROM laws_issuances WHERE id = :id";
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
    $sql = "UPDATE laws_issuances SET codeNo = :codeNo, title = :title, description = :description, datePosted = :datePosted WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'codeNo' => $_POST['codeNo'],
      'title' => $_POST['title'],
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
    $sql = "INSERT INTO `laws_issuances`
      (`codeNo`, `title`, `description`, `datePosted`, `type`, `updatedBy`)
        VALUES 
      (:codeNo, :title, :description, :datePosted, :type, :updatedBy)";
    $stmt = $mysqli->prepare($sql);
      $stmt->execute(
        array(
          ':codeNo' => $_POST['codeNo'],
          ':title' => $_POST['title'],
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
  $sql = "SELECT * FROM laws_issuances WHERE type='SO'";
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
    $sql = "SELECT * FROM laws_issuances WHERE type = :type AND isDeleted = 0 ORDER BY id DESC";
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
    $sql = "SELECT * FROM laws_issuances WHERE id = :id";
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
    $sql = "UPDATE laws_issuances SET codeNo = :codeNo, title = :title, description = :description, datePosted = :datePosted WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'codeNo' => $_POST['codeNo'],
      'title' => $_POST['title'],
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