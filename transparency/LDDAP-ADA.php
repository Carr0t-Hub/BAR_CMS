<?php
require_once("../common/config.php");

$lddap = viewLDDAP($mysqli);

$title = "LDDAP-ADA";
$background_image = "../images/background/10.jpg";

ob_start();
?>


<div class="row">
    <div class="col-lg-12">


        <div class="de-content-overlay">
            <form name="contactForm" id='contact_form' method="post">

                <div id="step-1" class="row p-2">
                    <div class="col-lg-5">
                        <select name="month" id="month" class="form-control">
                            <option disabled selected>-- Select Month --</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                    <div class="col-lg-5">
                        <select name="year" id="year" class="form-control">
                            <option selected disabled>-- Select Year --</option>

                            <?php

                            $year = date('Y');

                            for ($i = 0; $i < 10; $i++) {
                                echo '<option value="' . $year . '">' . $year . '</option>';
                                $year--;
                            }

                            ?>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <input type='submit' id='send_message' value='Filter' class="btn btn-line ">
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12">

                    <table class="table text-white lddaptable w-100">
                        <thead>
                            <tr>
                                <th scope="col">Month</th>
                                <th scope="col">
                                    LDDAP-ADA NO.
                                </th>
                                <th scope="col">DATE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($lddap as $key => $value) {
                            ?>
                                <tr>
                                    <td scope="row"><?= $value['lddap_month'] ?></td>
                                    <td><?= $value['lddap_no'] ?></td>
                                    <td><?= $value['lddap_post'] ?></td>
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
</div>

<script>
    let table = new DataTable('.lddaptable', {
        // searching: false,
        'dom': 'lrtip',
        "bLengthChange": false,

    });

    $('#contact_form').submit(function(e) {
        e.preventDefault();


        //filter datatable based on month
        let month = $(this).find('#month').val();


        table.search(month).draw();
    });
</script>

<?php
$content = ob_get_clean();
require_once("../common/layout.php");
?>