<?php
// LDDAP-ADA
function addLDDAP($mysqli)
{
  try {
    $sql = "INSERT INTO `lddap`
      (`lddap_month`, `lddap_year`, `lddap_no`, `lddap_post`)
        VALUES 
      (:lddap_month, :lddap_year, :lddap_no, :lddap_post)";


    $year = $_POST['lddap_year'];
    $month = $_POST['lddap_month'];

    foreach ($_POST['lddap_no'] as $key => $value) {
      $lddap_no = $_POST['lddap_no'][$key];
      $lddap_post = $_POST['lddap_post'][$key];


      $stmt = $mysqli->prepare($sql);
      $stmt->execute(
        array(
          ':lddap_month' => $month,
          ':lddap_year' => $year,
          ':lddap_no' => $lddap_no,
          ':lddap_post' => $lddap_post
        )
      );
    }
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewLDDAP($mysqli)
{
  $sql = "SELECT * FROM lddap";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getLDDAP($mysqli, $lddap_no)
{
  try {
    $sql = "SELECT * FROM LDDAP WHERE lddap_no = :lddap_no AND isDeleted = 0 ORDER BY id DESC";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'lddap_no' => $lddap_no
    ]);
    return $stmt->fetchAll();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function getLDDAPById($mysqli, $id)
{
  try {
    $sql = "SELECT * FROM lddap WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
    ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editLDDAP($mysqli)
{
  try {
    $sql = "UPDATE lddap SET lddap_month = :lddap_month, lddap_year = :lddap_year, lddap_no = :lddap_no WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'lddap_month' => $_POST['lddap_month'],
      'lddap_year' => $_POST['lddap_year'],
      'lddap_no' => $_POST['lddap_no'],
      'id' => $_POST['id']
    ]);
    return true;
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}
