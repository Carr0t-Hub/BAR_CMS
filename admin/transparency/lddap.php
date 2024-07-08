<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<?php $res = viewLDDAP($mysqli); ?>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="d-flex justify-content-between">
        <div>
          <h3>List of Due and Demandable Accounts Payable – Advice to Debit Accounts</h3>
        </div>
        <div>
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#lddap"><i class="ri-file-add-line"></i> Add New</button>
        </div>
      </div>
    </div>
  </div>
  <?php if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success mt-2" role="alert">
      <i class="ri-checkbox-circle-fill"></i> <?= $_SESSION['success'] ?>
    </div>
  <?php unset($_SESSION['success']);
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
  <div class="row">
    <div class="col-12">
      <div class="table-responsive">
        <table id="dataTable" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Month</th>
              <th>Year</th>
              <th>LDDAP-ADA No.</th>
              <th>Date Posted</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($res as $key => $value) { ?>
              <tr>
                <td><?php echo strtoupper($value['lddap_month']); ?></td>
                <td><?php echo strtoupper($value['lddap_year']); ?></td>
                <td><?php echo strtoupper($value['lddap_no']); ?></td>
                <td><?php echo strtoupper($value['lddap_post']); ?></td>
                <td>
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary lddapItem" type="button" data-id="<?= $value['id'] ?>"><i class="ri-edit-line"></i> Edit</button>
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
</div>

<!-- <form id="editform"> -->
<div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="lddap" aria-hidden="true">
</div>
<!-- </form> -->

<!-- List of Due and Demandable Accounts Payable – Advice to Debit Accounts -->
<form method="POST" action="../process/transparency/addLDDAP.php" enctype="multipart/form-data">
  <div class="modal fade" id="lddap" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="lddap" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">List of Due and Demandable Accounts Payable – Advice to Debit Accounts</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <input type="hidden" id="increment">

            <div class="row mb-2">
              <div class="col-6">
                <div class="form-floating">
                  <select name="lddap_month" id="lddap_month" class="form-control">
                    <option disabled selected>-- Please Choose --</option>
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
                  <label for="lddap_month" class="form-label">Month</label>
                </div>
              </div>
              <div class="col-6">

                <div class="form-floating">
                  <select name="lddap_year" id="lddap_year" class="form-control">
                    <option selected disabled>-- Please Choose Year --</option>

                    <?php

                    $year = date('Y');

                    for ($i = 0; $i < 10; $i++) {
                      echo '<option value="' . $year . '">' . $year . '</option>';
                      $year--;
                    }

                    ?>
                  </select>
                  <label for="lddap_year">Year</label>
                </div>

              </div>
            </div>
          </div>
          <hr>
          <div class="container-fluid bg-light shadow p-2 multilddap" style="max-height: 520px; overflow: auto">
            <div class="lddap_container">
              <div class="row mb-2 multiplelddap">
                <div class="col-5">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="lddap_no[]" id="lddap_no" placeholder="LDDAP-ADA No.">
                    <label for="lddap_no" class="form-label">LDDAP-ADA No.</label>
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-floating">
                    <input type="date" class="form-control" name="lddap_post[]" id="lddap_post" placeholder="Date Posted">
                    <label for="lddap_post" class="form-label">Date Posted</label>
                  </div>
                </div>
                <div class="col-2">

                </div>
              </div>
            </div>
            <button type="button" class="btn btn-sm btn-primary" id="additem">
              <i class="ri-add-line"></i> Add Item
            </button>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </div>
    </div>
  </div>
</form>


<script>
  $('.multilddap').hide();

  $('#lddap_month').change(function() {
    var month = $('#lddap_month').val();
    var year = $('#lddap_year').val();

    if (month != null && year != null) {
      $('.multilddap').show();
      //get month number
      var monthNumber = new Date(month + ' 1, ' + year).getMonth() + 1;
      //with leading zero
      if (monthNumber < 10) {
        monthNumber = '0' + monthNumber;
      }
      $('#lddap_no').val('101101-' + monthNumber + '-' + '001' + '-' + year);
    } else {
      $('.multilddap').hide();
    }
  });

  $('#lddap_year').change(function() {
    var month = $('#lddap_month').val();
    var year = $('#lddap_year').val();

    if (month != null && year != null) {
      $('.multilddap').show();
      //get month number
      var monthNumber = new Date(month + ' 1, ' + year).getMonth() + 1;
      //with leading zero
      if (monthNumber < 10) {
        monthNumber = '0' + monthNumber;
      }
      $('#lddap_no').val('101101-' + monthNumber + '-' + '001' + '-' + year);
      $('#increment').val(1);

    } else {
      $('.multilddap').hide();
    }
  });


  $('#additem').click(function() {

    //get previous increment

    var increment = parseInt($('#increment').val()) + 1;

    $('#increment').val(increment);

    var year = $('#lddap_year').val();
    var month = $('#lddap_month').val();

    var monthNumber = new Date(month + ' 1, ' + year).getMonth() + 1;
    //with leading zero
    if (monthNumber < 10) {
      monthNumber = '0' + monthNumber;
    }


    var inc_value = "";

    if (increment < 10) {
      inc_value = '00' + increment;
    } else if (increment < 100) {
      inc_value = '0' + increment;
    } else {
      inc_value = increment;
    }



    var prevLddapNo = '101101-' + monthNumber + '-' + inc_value + '-' + year;



    var lddap = `
                <div class="row mb-2 multiplelddap">
                  <div class="col-5">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="lddap_no[]" id="lddap_no" placeholder="LDDAP-ADA No."
                        value="${prevLddapNo}"
                      >
                      <label for="lddap_no" class="form-label">LDDAP-ADA No.</label>
                    </div>
                  </div>
                  <div class="col-5">
                    <div class="form-floating">
                      <input type="date" class="form-control" name="lddap_post[]" id="lddap_post" placeholder="Date Posted">
                      <label for="lddap_post" class="form-label">Date Posted</label>
                    </div>
                  </div>
                  <div class="col-2">
                    <button type="button" class="btn btn-danger btn-sm w-full removelddap" id="">
                      <i class="ri-delete-bin-line"></i>
                    </button>
                  </div>
                </div>`;

    $('.lddap_container').append(lddap);
  });


  $(document).on('click', '.removelddap', function() {
    $(this).closest('.multiplelddap').remove();
  });
</script>

<script>
  $(document).ready(function() {
    $('.lddapItem').click(function() {
      var id = $(this).attr('data-id');

      $.ajax({
        url: 'editLDDAP.php',
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