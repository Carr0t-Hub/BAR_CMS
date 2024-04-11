<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<style>
    .preview-image {
      max-width: 100%;
      height: auto;
      max-height: 250px;
      margin-top: 10px;
      width: 260px;
      border: solid black 1px;
      margin-bottom: 10px;
    }
  </style>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3>Directory of Officials</h3>
        </div>
        <div class="card-body">
          <form action="#" method="POST">
            <div class="row">
              <div class="col-3">
                <div id="imagePreview"></div>
                <input type="file" class="form-control" id="imageInput" accept="image/*" required>
              </div>
              <div class="col-9">
                <div class="row mb-3">
                  <div class="col-4">
                    <div class="form-floating">
                      <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name">
                      <label for="firstName" class="form-label">First Name</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating">
                      <input class="form-control" type="text" name="middleName" id="middleName" placeholder="Middle Name">
                      <label for="middleName" class="form-label">Middle Name</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating">
                      <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Last Name">
                      <label for="lastName" class="form-label">Last Name</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <div class="form-floating">
                      <select class="form-control" name="division" id="division">
                        <option disabled selected>-- Please Choose --</option>
                        <option value="OD">Office of the Director</option>
                        <option value="OAD">Office of the Assistant Director</option>
                        <option value="PDD">Program Development Division</option>
                        <option value="PMELD">Program Monitoring, Evaluation, and Linkaging Division</option>
                        <option value="KMISD">Knowledge Management and Information Systems Division</option>
                        <option value="AFD">Administrative & Finance Division</option>
                      </select>
                      <label class="form-label" for="division">Division</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating">
                      <select class="form-control" name="section" id="section">
                        <option disabled selected>-- Please Choose --</option>
                        <optgroup label="Office of the Director">
                          <option value="CO">Compliance Officer</option>
                          <option value="PMU">Planning & Monitoring Unit</option>
                        </optgroup>
                        <optgroup label="Program Development Division">
                          <option value="PPES">Project Packaging and Evaluation Section</option>
                          <option value="IDS">Institutional Development Section</option>
                          <option value="IEPS">Impact Evaluation and Policy Section</option>
                          <option value="TMS">Technology Management Section</option>
                        </optgroup>
                        <optgroup label="Program Monitoring, Evaluation, and Linkaging Division">
                          <option value="MES">Monitoring & Evaluation Section</option>
                          <option value="RLS">Research Linkages Section</option>
                          <option value="RMS">Results Management Section</option>
                          <option value="IRS">International R4D Relation Section</option>
                        </optgroup>
                        <optgroup label="Knowledge Management and Information Systems Division">
                          <option value="ACS">Applied Communication Section</option>
                          <option value="IMS">Information Management Section</option>
                          <option value="SLSS">Scientific Literature System Section</option>
                        </optgroup>
                        <optgroup label="Administrative & Finance Division">
                          <option value="HRMU">Human Resource Management Unit</option>
                          <option value="PU">Procurement Unit</option>
                          <option value="PSU">Property and Supply Unit</option>
                          <option value="CU">Cash Unit</option>
                          <option value="RU">Records Unit</option>
                          <option value="AU">Accounting Unit</option>
                          <option value="BU">Budget Unit</option>
                          <option value="BMSGUSU">Building Maintenance, Security and General Utility Services Unit</option>
                          <option value="TMSU">Transportation Maintenance and Services Unit</option>
                        </optgroup>
                      </select>
                      <label class="form-label" for="section">Section</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <div class="form-floating">
                      <input class="form-control" type="text" name="emailAdd" id="emailAdd" placeholder="Email Address">
                      <label for="emailAdd" class="form-label">Email Address</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating">
                      <input class="form-control" type="text" name="phoneLine" id="phoneLine" placeholder="Telephone Local">
                      <label for="phoneLine" class="form-label">Telephone Local</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-12">
              <button class="btn btn-success btn-md" id="saveDirectory" name="saveDirectory" type="submit"><i class="ri-save-line"></i> Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 

<script>
  const input = document.getElementById('imageInput');
  const preview = document.getElementById('imagePreview');

  input.addEventListener('change', function() {
    while (preview.firstChild) {
      preview.removeChild(preview.firstChild);
    }

    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.classList.add('preview-image');
        preview.appendChild(img);
      }
      reader.readAsDataURL(file);
    }
  });
</script>

<?php include("../common/footer.php"); ?>