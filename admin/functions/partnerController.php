<?php
// ATTACHED AGENCY
function addAttached($mysqli)
{
  try {
    $sql = "INSERT INTO `local_partners`
      (`agencyName`, `officeAddress`, `fullName`, `designation`, `position`, `emailAddress`, `telephone`, `type`)
        VALUES 
      (:agencyName, :officeAddress, :fullName, :designation, :position, :emailAddress, :telephone, :type)";
    $stmt = $mysqli->prepare($sql);
      foreach($_POST['fullName'] as  $key => $value){
        $stmt->execute(
          array(
            ':agencyName' => $_POST['agencyName'],
            ':officeAddress' => $_POST['officeAddress'],
            ':fullName' => $_POST['fullName'][$key],
            ':designation' => $_POST['designation'][$key],
            ':position' => $_POST['position'][$key],
            ':emailAddress' => $_POST['emailAddress'][$key],
            ':telephone' => $_POST['telephone'][$key],
            ':type' => "Attached_Agency"
          )
        );
      }
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewAttached($mysqli)
{
  $sql = "SELECT * FROM local_partners WHERE type='Attached_Agency'";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getAttached($mysqli, $type)
{
  try {
    $sql = "SELECT * FROM local_partners WHERE type = :type AND isDeleted = 0 ORDER BY id DESC";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'type' => $type
    ]);
    return $stmt->fetchAll();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function getAttachedById($mysqli, $id)
{
  try {
    $sql = "SELECT * FROM local_partners WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
      ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editAttached($mysqli)
{
  try {
    $sql = "UPDATE local_partners SET agencyName = :agencyName, officeAddress = :officeAddress, fullName = :fullName, designation = :designation, position = :position, emailAddress = :emailAddress, telephone = :telephone WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'agencyName' => $_POST['agencyName'],
      'officeAddress' => $_POST['officeAddress'],
      'fullName' => $_POST['fullName'],
      'designation' => $_POST['designation'],
      'position' => $_POST['position'],
      'emailAddress' => $_POST['emailAddress'],
      'telephone' => $_POST['telephone'],
      'id' => $_POST['id']
    ]);
    return true;
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

// BFAR - REGIONAL OFFICES
function addBFARRO($mysqli)
{
  try {
    $sql = "INSERT INTO `local_partners`
      (`regionalOffice`, `officeAddress`, `fullName`, `designation`, `position`, `emailAddress`, `telephone`, `type`)
        VALUES 
      (:regionalOffice, :officeAddress, :fullName, :designation, :position, :emailAddress, :telephone, :type)";
    $stmt = $mysqli->prepare($sql);
      $stmt->execute(
        array(
          ':regionalOffice' => $_POST['regionalOffice'],
          ':officeAddress' => $_POST['officeAddress'],
          ':fullName' => $_POST['fullName'],
          ':designation' => $_POST['designation'],
          ':position' => $_POST['position'],
          ':emailAddress' => $_POST['emailAddress'],
          ':telephone' => $_POST['telephone'],
          ':type' => "BFAR_RO"
        )
      );
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewBFARRO($mysqli)
{
  $sql = "SELECT * FROM local_partners WHERE type='BFAR_RO'";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getBFARRO($mysqli, $type)
{
  try {
    $sql = "SELECT * FROM local_partners WHERE type = :type AND isDeleted = 0 ORDER BY id DESC";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'type' => $type
    ]);
    return $stmt->fetchAll();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function getBFARROById($mysqli, $id)
{
  try {
    $sql = "SELECT * FROM local_partners WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
      ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editBFARRO($mysqli)
{
  try {
    $sql = "UPDATE local_partners SET regionalOffice = :regionalOffice, officeAddress = :officeAddress, fullName = :fullName, designation = :designation, position = :position, emailAddress = :emailAddress, telephone = :telephone WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'regionalOffice' => $_POST['regionalOffice'],
      'officeAddress' => $_POST['officeAddress'],
      'fullName' => $_POST['fullName'],
      'designation' => $_POST['designation'],
      'position' => $_POST['position'],
      'emailAddress' => $_POST['emailAddress'],
      'telephone' => $_POST['telephone'],
      'id' => $_POST['id']
    ]);
    return true;
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

// DA - REGIONAL FIELD OFFICES
function addDARFO($mysqli)
{
  try {
    $sql = "INSERT INTO `local_partners`
      (`regionalOffice`, `officeAddress`, `fullName`, `designation`, `position`, `emailAddress`, `telephone`, `type`)
        VALUES 
      (:regionalOffice, :officeAddress, :fullName, :designation, :position, :emailAddress, :telephone, :type)";
    $stmt = $mysqli->prepare($sql);
    foreach($_POST['fullName'] as  $key => $value){
      $stmt->execute(
        array(
          ':regionalOffice' => $_POST['regionalOffice'],
          ':officeAddress' => $_POST['officeAddress'],
          ':fullName' => $_POST['fullName'][$key],
          ':designation' => $_POST['designation'][$key],
          ':position' => $_POST['position'][$key],
          ':emailAddress' => $_POST['emailAddress'][$key],
          ':telephone' => $_POST['telephone'][$key],
          ':type' => "DA_RFO"
        )
      );
    }
    return "success";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewDARFO($mysqli)
{
  $sql = "SELECT * FROM local_partners WHERE type='DA_RFO'";
  $temp = array();
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getDARFO($mysqli, $type)
{
  try {
    $sql = "SELECT * FROM local_partners WHERE type = :type AND isDeleted = 0 ORDER BY id DESC";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'type' => $type
    ]);
    return $stmt->fetchAll();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function getDARFOById($mysqli, $id)
{
  try {
    $sql = "SELECT * FROM local_partners WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'id' => $id
      ]);
    return $stmt->fetch();
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function editDARFO($mysqli)
{
  try {
    $sql = "UPDATE local_partners SET regionalOffice = :regionalOffice, officeAddress = :officeAddress, fullName = :fullName, designation = :designation, position = :position, emailAddress = :emailAddress, telephone = :telephone WHERE id = :id";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute([
      'regionalOffice' => $_POST['regionalOffice'],
      'officeAddress' => $_POST['officeAddress'],
      'fullName' => $_POST['fullName'],
      'designation' => $_POST['designation'],
      'position' => $_POST['position'],
      'emailAddress' => $_POST['emailAddress'],
      'telephone' => $_POST['telephone'],
      'id' => $_POST['id']
    ]);
    return true;
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

?>