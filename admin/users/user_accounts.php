<?php
include("../common/header.php");
include("../common/sidebar.php");


$result = getAllUsers($mysqli);

?>

<!-- Start Content-->
<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <div>
                    <h3>Users</h3>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addUser"><i class="ri-file-add-line"></i> Add New</button>
                </div>
            </div>

            <?php

            if (isset($_SESSION['success'])) {
            ?>

                <div class="alert alert-success mt-2" role="alert">
                    <i class="ri-checkbox-circle-fill"></i> <?= $_SESSION['success'] ?>
                </div>
            <?php
                unset($_SESSION['success']);
            }

            if (isset($_SESSION['error'])) {
            ?>
                <div class="alert alert-danger mt-2" role="alert">
                    <i class="ri-alert-fill"></i> <?= $_SESSION['error'] ?>
                </div>
            <?php
                unset($_SESSION['error']);
            }

            ?>
            <br>
            <table id="pubTable" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Firstname</th>
                        <th class="text-center">lastname</th>
                        <th class="text-center">Username</th>
                        <th class="text-center" style="width: 10%">Status</th>
                        <th class="text-center" style="width: 20%">Last Login</th>
                        <th class="text-center" style="width: 10%"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($result as $key => $row) {
                    ?>
                        <tr>
                            <td class="text-center align-middle"><?= $row['firstName'] ?></td>
                            <td class="text-center align-middle"><?= $row['lastName'] ?></td>
                            <td class="text-center align-middle"><?= $row['username'] ?></td>
                            <td class="text-center align-middle"><?= $row['disabled'] ? "Disabled" : "Active" ?></td>
                            <td class="text-center align-middle"><?= $row['last_login'] ?></td>
                            <td>
                                <div class="dropdown w-100">
                                    <a class="btn w-100 btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#updateUser">Update User</a>
                                        <a class="dropdown-item" href="#">Reset Password</a>
                                        <a class="dropdown-item" href="#">Disable</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php

                    } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

<?php
include('usersModal.php');
?>

<?php include("../common/footer.php"); ?>