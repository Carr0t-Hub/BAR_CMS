<?php
require_once("../common/config.php");
$type = isset($_GET['type']) ? $_GET['type'] : "Purchase Order";


$background_image = "../images/background/10.jpg";
$upper_title = "Bid and Awards";
$title = isset($_GET['type']) ? $type : "Bids and Awards";



$procurements = getProcurementByType($mysqli, $type);


ob_start();
?>
<div class="row">
    <div class="col-lg-12 ">
        <div class="de-content-overlay">
            <table class="table text-white procurementtable w-100" style="font-size: 18px">
                <thead>
                    <tr>
                        <th scope="col" style="width: 60%">Particulars</th>
                        <th scope="col" style="width: 30%">Date Posted</th>
                        <th scope="col" style="width: 10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($procurements as $procure) {
                        $file = $procure['fileName'] . '_' . $procure['size'] . $procure['attachment'] . '.' . $procure['fileExtension'];

                        $procure['datePosted'] = date("F j, Y", strtotime($procure['datePosted']));

                    ?>

                        <tr>
                            <td><?= $procure['title'] ?></td>
                            <td><?= $procure['datePosted'] ?></td>
                            <td>
                                <a href="../admin/storage/files/procurement/<?= $file ?>" target="_blank" class=" btn-line">View</a>
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
<script>
    let table = new DataTable('.procurementtable', {
        responsive: true,
        "bLengthChange": false,

    });
</script>


<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>