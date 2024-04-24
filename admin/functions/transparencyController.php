<?php
// LDDAP-ADA
function addLDDAP($mysqli)
{
  try {
    $sql = "INSERT INTO `lddap`
      (`lddap_month`, `lddap_year`, `lddap_no`, `lddap_post`)
        VALUES 
      (:lddap_month, :lddap_year, :lddap_no, :lddap_post)";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute(
      array(
        ':lddap_month' => $_POST['lddap_month'],
        ':lddap_year' => $_POST['lddap_year'],
        ':lddap_no' => $_POST['lddap_no'],
        ':lddap_post' => $_POST['lddap_post']
      )
    );
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


?>