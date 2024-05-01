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
                    <h3>User Management</h3>
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
            <table id="dataTable" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Email Address</th>
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
                            <td class="text-center align-middle"><?= $row['email'] ?></td>
                            <td class="text-center align-middle"><?= $row['username'] ?></td>
                            <td class="text-center align-middle"><?= $row['disabled'] ? "Disabled" : "Active" ?></td>
                            <td class="text-center align-middle"><?= $row['last_login'] ?></td>
                            <td>
                                <div class="dropdown w-100">
                                    <a class="btn w-100 btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item userItem" data-bs-toggle="modal" data-bs-target="#updateUser" data-id="<?= $row['id'] ?>"><i class="ri-user-settings-line"></i> Update User</a>
                                        <a class="dropdown-item resetItem" data-bs-toggle="modal" data-bs-target="#resetUser" data-id="<?= $row['id'] ?>"><i class="ri-refresh-line"></i> Reset Password</a>
                                        <?php if ($row['disabled'] == 1) { ?>
                                            <a class="dropdown-item enableItem" data-bs-toggle="modal" data-bs-target="#enableUser" data-id="<?= $row['id'] ?>"><i class="ri-rotate-lock-line"></i> Enable</a>
                                        <?php } else { ?>
                                            <a class="dropdown-item disableItem" data-bs-toggle="modal" data-bs-target="#disableUser" data-id="<?= $row['id'] ?>"><i class="ri-rotate-lock-line"></i> Disable</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- <form id="editform"> -->
<div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="user" aria-hidden="true">
</div>
<!-- </form> -->

<script>
    // Edit User Account
    $(document).ready(function() {
        $('.userItem').click(function() {
            var id = $(this).attr('data-id');
            $.ajax({
                url: 'editUser.php',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#editmodal').html(data);
                    $('#editmodal').modal('show');
                }
            });
        });
    })

    // Reset Password
    $(document).ready(function() {
        $('.resetItem').click(function() {
            var id = $(this).attr('data-id');
            $.ajax({
                url: 'resetUserPass.php',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#editmodal').html(data);
                    $('#editmodal').modal('show');
                }
            });
        });
    })

    // Disable Account
    $(document).ready(function() {
        $('.disableItem').click(function() {
            var id = $(this).attr('data-id');
            $.ajax({
                url: 'disableUser.php',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#editmodal').html(data);
                    $('#editmodal').modal('show');
                }
            });
        });
    })

    // Enable Account
    $(document).ready(function() {
        $('.enableItem').click(function() {
            var id = $(this).attr('data-id');
            $.ajax({
                url: 'enableUser.php',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#editmodal').html(data);
                    $('#editmodal').modal('show');
                }
            });
        });
    })
</script>

<?php include("../common/footer.php"); ?>