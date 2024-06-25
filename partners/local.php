<?php
require_once("../common/config.php");

$title = "LOCAL PARTNERS";
$background_image = "../images/background/4.jpg";


$attached = getAttached($mysqli, "Attached_Agency");
$bfar_ro = getAttached($mysqli, "BFAR_RO");
$da_rfo = getAttached($mysqli, "DA_RFO");

ob_start();
?>
<style>
    .btn-accord {
        color: white;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 0px;
        border: 1px solid #fff;
    }

    .btn-accord:hover {
        background-color: #fff;
        color: #000;
    }
</style>
<div class="row">
    <div class="col-lg-12 ">
        <div class="de-content-overlay mb-2">

            <div class="d-room-details ">
                <h3>DA - Regional Field Offices</h3>

                <table class="table text-white partnertable w-100" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10%">Regional Field Office</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col" style="width: 30%">Designation</th>
                            <th scope="col" style="width: 30%">Email Address</th>
                            <!-- <th scope="col">Telephone No.</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($da_rfo as $rfo) {

                            //get only the first letter of every word in the regional office eg. "National Capital Region" to "NCR"
                            $regional_office = "";
                            $words = explode(" ", $rfo['regionalOffice']);
                            foreach ($words as $word) {
                                $regional_office .= $word[0];
                            }




                        ?>

                            <tr>
                                <td><?= $regional_office ?></td>
                                <td><?= $rfo['fullName'] ?></td>
                                <td><?= $rfo['position'] ?></td>
                                <td><?= $rfo['designation'] ?></td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>
                                            <?= $rfo['emailAddress'] ?>
                                        </span>
                                        <span>
                                            <?= $rfo['telephone'] ?>
                                        </span>
                                    </div>
                                </td>
                            </tr>

                        <?php
                        }

                        ?>

                    </tbody>
                </table>

            </div>
        </div>

        <div class="de-content-overlay mb-2">
            <div class="d-room-details ">
                <h3>DA - Bureaus, Attached Agencies and Attached Corporations</h3>

                <table class="table text-white partnertable w-100" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 20%">Agency</th>
                            <th scope="col" style="width: 30%">Head</th>
                            <th scope="col">Position/Designation</th>
                            <th scope="col" style="width: 30%">Email Address / Telephone No.</th>
                            <th scope="col" style="width: 20%">Address/th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($attached as $agency) {





                        ?>

                            <tr>
                                <td><?= $agency['agencyName'] ?></td>
                                <td><?= $rfo['fullName'] ?></td>
                                <td>
                                    <?= $agency['position'] ?>
                                    <?= isset($agency['position']) && isset($agency['designation']) ? "/" : "" ?>
                                    <?= $agency['designation'] ?>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>
                                            <?= $rfo['emailAddress'] ?>
                                        </span>
                                        <span>
                                            <?= $rfo['telephone'] ?>
                                        </span>
                                    </div>
                                </td>
                                <td><?= $rfo['officeAddress'] ?></td>

                            </tr>

                        <?php
                        }

                        ?>

                    </tbody>
                </table>

            </div>

        </div>
        <div class="de-content-overlay">
            <div class="d-room-details ">
                <h3>BFAR - Regional Offices</h3>

                <table class="table text-white partnertable w-100" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 20%">Regional Field Office</th>
                            <th scope="col" style="width: 30%">Name</th>
                            <th scope="col">Position/Designation</th>
                            <th scope="col" style="width: 30%">Email Address / Telephone No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($bfar_ro as $agency) {
                            $regional_office = "";
                            $words = explode(" ", $agency['regionalOffice']);
                            foreach ($words as $word) {
                                $regional_office .= $word[0];
                            }





                        ?>

                            <tr>
                                <td><?= $regional_office ?></td>
                                <td><?= $agency['fullName'] ?></td>
                                <td>
                                    <?= $agency['position'] ?>
                                    <?= isset($agency['position']) && isset($agency['designation']) ? "/" : "" ?>
                                    <?= $agency['designation'] ?>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>
                                            <?= $rfo['emailAddress'] ?>
                                        </span>
                                        <span>
                                            <?= $rfo['telephone'] ?>
                                        </span>
                                    </div>
                                </td>

                            </tr>

                        <?php
                        }

                        ?>

                    </tbody>
                </table>

            </div>


        </div>
    </div>
</div>

<script>
    let table = new DataTable('.partnertable', {
        responsive: true,
        "bLengthChange": false,
    });
</script>

<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>