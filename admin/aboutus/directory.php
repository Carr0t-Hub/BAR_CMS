<?php include("../functions/functions.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>DABAR | Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
  <meta content="DABAR_IMS" name="author" />

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <!-- App favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.png">

  <!-- Theme Config Js -->
  <script src="../assets/js/config.js"></script>

  <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

  <!-- Datatables css -->
  <link href="../assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />

  <!-- App css -->
  <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
  <link href="../assets/css/magnific-popup.css" rel="stylesheet" type="text/css" id="app-style" />

  <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

  <!-- Icons css -->
  <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php $res = viewDirectory($mysqli); ?>
  <div class="row mt-3">
    <div class="col-lg-12">
      <div class="table-responsive">
        <table id="dataTable" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center text-uppercase"></th>
              <th class="text-center text-uppercase">Fullname</th>
              <th class="text-center text-uppercase">Division/Section</th>
              <th class="text-center text-uppercase">Designation</th>
              <th class="text-center text-uppercase">Email Address</th>
              <th class="text-center text-uppercase">Telephone Number</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($res as $key => $value) :
              $img = $value['fileName'] . '_' . $value['size'] . $value['attachment'] . '.' . $value['fileExtension'];
            ?>
              <tr>
                <td>
                  <img src="../storage/directories/<?= $img ?>" alt="" class="border" style="height: 128px; width: 128px;object-fit: cover">
                </td>
                <td><?php echo strtoupper($value['firstName'] . " " .$value['middleName']. " " . $value['lastName']); ?></td>
                <td>
                  <span>
                    <?php echo strtoupper($value['division']); ?>
                  </span>
                  <span style="font-size: 14px" class="d-block text-secondary">
                    <?php echo strtoupper($value['section']); ?>
                  </span>
                </td>
                <td><?php echo strtoupper($value['designation']); ?></td>
                <td><?php echo strtoupper($value['email']); ?></td>
                <td><?php echo strtoupper($value['telephone']); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>