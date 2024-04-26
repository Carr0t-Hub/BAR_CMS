<?php

  include('../functions/functions.php');

if (isset($_POST['id'])) {
  $res = getDirectoryById($mysqli, $_POST['id']);
?>
<form method="POST" action="../process/directory/editDirectory.php" enctype="multipart/form-data">
<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">Directory of Officials</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
        <div class="container-fluid">
          <div class="row">
            <div class="col-3">
              <div id="imagePreview"></div>
              <input type="file" class="form-control" id="imageInput" accept="image/*">
            </div>
            <div class="col-9">
              <div class="row mb-3">
                <div class="col-4">
                  <div class="form-floating">
                    <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name"  value="<?= $res['firstName'] ?>">
                    <label for="firstName" class="form-label">First Name</label>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-floating">
                    <input class="form-control" type="text" name="middleName" id="middleName" placeholder="Middle Name"  value="<?= $res['middleName'] ?>">
                    <label for="middleName" class="form-label">Middle Name</label>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-floating">
                    <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Last Name"  value="<?= $res['lastName'] ?>">
                    <label for="lastName" class="form-label">Last Name</label>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-6">
                  <div class="form-floating">
                    <select class="form-control" name="division" id="division" value="<?= $res['division'] ?>">
                      <option disabled selected>-- Please Choose --</option>
                      <option value="Office of the Director" <?= $res['division'] == "Office of the Director" ? "selected" : "" ?>>Office of the Director</option>
                      <option value="Office of the Assistant Director" <?= $res['division'] == "Office of the Assistant Director" ? "selected" : "" ?>>Office of the Assistant Director</option>
                      <option value="Program Development Division" <?= $res['division'] == "Program Development Division" ? "selected" : "" ?>>Program Development Division</option>
                      <option value="Program Monitoring, Evaluation, and Linkaging Division" <?= $res['division'] == "Program Monitoring, Evaluation, and Linkaging Division" ? "selected" : "" ?>>Program Monitoring, Evaluation, and Linkaging Division</option>
                      <option value="Knowledge Management and Information Systems Division" <?= $res['division'] == "Knowledge Management and Information Systems Division" ? "selected" : "" ?>>Knowledge Management and Information Systems Division</option>
                      <option value="Administrative & Finance Division" <?= $res['division'] == "Administrative & Finance Division" ? "selected" : "" ?>>Administrative & Finance Division</option>
                    </select>
                    <label class="form-label" for="division">Division</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-floating">
                    <select class="form-control" name="section" id="section" value="<?= $res['section'] ?>">
                      <option disabled selected>-- Please Choose --</option>
                      <optgroup label="Office of the Director">
                        <option value="Compliance Officer" <?= $res['section'] == "Compliance Officer" ? "selected" : "" ?>>Compliance Officer</option>
                        <option value="Planning & Monitoring Unit" <?= $res['section'] == "Planning & Monitoring Unit" ? "selected" : "" ?>>Planning & Monitoring Unit</option>
                      </optgroup>
                      <optgroup label="Program Development Division">
                        <option value="Project Packaging and Evaluation Section" <?= $res['section'] == "Project Packaging and Evaluation Section" ? "selected" : "" ?>>Project Packaging and Evaluation Section</option>
                        <option value="Institutional Development Section" <?= $res['section'] == "Institutional Development Section" ? "selected" : "" ?>>Institutional Development Section</option>
                        <option value="Impact Evaluation and Policy Section" <?= $res['section'] == "Impact Evaluation and Policy Section" ? "selected" : "" ?>>Impact Evaluation and Policy Section</option>
                        <option value="Technology Management Section" <?= $res['section'] == "Technology Management Section" ? "selected" : "" ?>>Technology Management Section</option>
                      </optgroup>
                      <optgroup label="Program Monitoring, Evaluation, and Linkaging Division">
                        <option value="Monitoring & Evaluation Section" <?= $res['section'] == "Monitoring & Evaluation Section" ? "selected" : "" ?>>Monitoring & Evaluation Section</option>
                        <option value="Research Linkages Section" <?= $res['section'] == "Research Linkages Section" ? "selected" : "" ?>>Research Linkages Section</option>
                        <option value="Results Management Section" <?= $res['section'] == "Results Management Section" ? "selected" : "" ?>>Results Management Section</option>
                        <option value="International R4D Relation Section" <?= $res['section'] == "International R4D Relation Section" ? "selected" : "" ?>>International R4D Relation Section</option>
                      </optgroup>
                      <optgroup label="Knowledge Management and Information Systems Division">
                        <option value="Applied Communication Section" <?= $res['section'] == "Applied Communication Section" ? "selected" : "" ?>>Applied Communication Section</option>
                        <option value="Information Management Section" <?= $res['section'] == "Information Management Section" ? "selected" : "" ?>>Information Management Section</option>
                        <option value="Scientific Literature Section" <?= $res['section'] == "Scientific Literature Section" ? "selected" : "" ?>>Scientific Literature Section</option>
                      </optgroup>
                      <optgroup label="Administrative & Finance Division">
                        <option value="Human Resource Management Unit" <?= $res['section'] == "Human Resource Management Unit" ? "selected" : "" ?>>Human Resource Management Unit</option>
                        <option value="Procurement Unit" <?= $res['section'] == "Procurement Unit" ? "selected" : "" ?>>Procurement Unit</option>
                        <option value="Property and Supply Unit" <?= $res['section'] == "Property and Supply Unit" ? "selected" : "" ?>>Property and Supply Unit</option>
                        <option value="Cash Unit" <?= $res['section'] == "Cash Unit" ? "selected" : "" ?>>Cash Unit</option>
                        <option value="Records Unit" <?= $res['section'] == "Records Unit" ? "selected" : "" ?>>Records Unit</option>
                        <option value="Accounting Unit" <?= $res['section'] == "Accounting Unit" ? "selected" : "" ?>>Accounting Unit</option>
                        <option value="Budget Unit" <?= $res['section'] == "Budget Unit" ? "selected" : "" ?>>Budget Unit</option>
                        <option value="Building Maintenance, Security and General Utility Services Unit" <?= $res['section'] == "Building Maintenance, Security and General Utility Services Unit" ? "selected" : "" ?>>Building Maintenance, Security and General Utility Services Unit</option>
                        <option value="Transportation Maintenance and Services Unit" <?= $res['section'] == "Transportation Maintenance and Services Unit" ? "selected" : "" ?>>Transportation Maintenance and Services Unit</option>
                      </optgroup>
                    </select>
                    <label class="form-label" for="section">Section</label>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-6">
                  <div class="form-floating">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" value="<?= $res['email'] ?>">
                    <label for="email" class="form-label">Email Address</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-floating">
                    <input class="form-control" type="text" name="telephone" id="telephone" placeholder="Telephone Local" value="<?= $res['telephone'] ?>">
                    <label for="telephone" class="form-label">Telephone Local</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
        <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
      </div>
    </div>
  </div>
</form>
<?php
}
?>