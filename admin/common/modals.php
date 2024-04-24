<!-- News & Events -->
<form id="newseventform" method="POST">
  <div class="modal fade" id="news_events" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="news_events" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">News & Events</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row mb-3">
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  <label for="title" name="title">Title</label>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-12">
                <label for="article_body" class="h4">Article Body</label>
                <div id="editor" class="body" name="body" style="height: 300px;"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-floating">
                  <input type="date" class="form-control" id="date_posted" name="datePosted" placeholder="Date Posted">
                  <label for="date_posted" name="date_posted">Date Posted</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-floating">
                  <select name="author" id="author" class="form-control">
                    <option selected>-- Please Choose --</option>
                    <option value="John Doe">John Doe</option>
                    <option value="Jane Smith">Jane Smith</option>
                  </select>
                  <label for="title" name="title">Author</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-floating">
                  <select name="status" id="post_type" class="form-control">
                    <option selected>-- Please Choose --</option>
                    <option value="published">Published</option>
                    <option value="unpublished">Unpublished</option>
                  </select>
                  <label for="post_type" name="post_type">Post Type</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Photo Releases -->
<div class="modal fade" id="photo_releases" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="photo_releases" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">Photo Release</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form action="POST">
            <div class="row mb-3">
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  <label for="title" name="title">Title</label>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="imagePath" name="imagePath" placeholder="Image Path">
                  <label for="imagePath" name="imagePath">Image Path</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-floating">
                  <input type="date" class="form-control" id="date_posted" name="date_posted" placeholder="Date Posted">
                  <label for="date_posted" name="date_posted">Date Posted</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-floating">
                  <select name="author" id="author" class="form-control">
                    <option selected>-- Please Choose --</option>
                    <option value="John Doe">John Doe</option>
                    <option value="Jane Smith">Jane Smith</option>
                  </select>
                  <label for="title" name="title">Author</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-floating">
                  <select name="post_type" id="post_type" class="form-control">
                    <option selected>-- Please Choose --</option>
                    <option value="published">Published</option>
                    <option value="unpublished">Unpublished</option>
                  </select>
                  <label for="post_type" name="post_type">Post Type</label>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Uncategorized Articles -->
<div class="modal fade" id="articles" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="articles" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">Uncategorized Articles</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form action="POST">
            <div class="row mb-3">
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  <label for="title" name="title">Title</label>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-12">
                <label for="article_body" class="h4">Article Body</label>
                <div id="snow-editor" name="article_body" style="height: 300px;"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-floating">
                  <input type="date" class="form-control" id="date_posted" name="date_posted" placeholder="Date Posted">
                  <label for="date_posted" name="date_posted">Date Posted</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-floating">
                  <select name="author" id="author" class="form-control">
                    <option selected>-- Please Choose --</option>
                    <option value="John Doe">John Doe</option>
                    <option value="Jane Smith">Jane Smith</option>
                  </select>
                  <label for="title" name="title">Author</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-floating">
                  <select name="post_type" id="post_type" class="form-control">
                    <option selected>-- Please Choose --</option>
                    <option value="published">Published</option>
                    <option value="unpublished">Unpublished</option>
                  </select>
                  <label for="post_type" name="post_type">Post Type</label>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Career Opportunities -->
<div class="modal fade" id="career" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="career" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">Career Opportunities</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form action="POST">
            <div class="row mb-3">
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  <label for="title" name="title">Title</label>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-12">
                <div class="form-floating">
                  <input type="file" class="form-control" id="filePath" name="filePath" accept="application/pdf" required>
                  <label for="filePath" name="filePath">Document File</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-floating">
                  <input type="date" class="form-control" id="date_posted" name="date_posted" placeholder="Date Posted">
                  <label for="date_posted" name="date_posted">Date Posted</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <select name="post_type" id="post_type" class="form-control">
                    <option selected>-- Please Choose --</option>
                    <option value="published">Published</option>
                    <option value="unpublished">Unpublished</option>
                  </select>
                  <label for="post_type" name="post_type">Post Type</label>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
      </div>
    </div>
  </div>
</div>

<!-- DA - Bureaus, Attached Agencies and Attached Corporations -->
<div class="modal fade" id="attached" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="attached" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">DA - Bureaus, Attached Agencies and Attached Corporations</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <form action="../process/partners/addAttached.php" class="Attached" id="saveAttached" method="POST">
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row mb-3">
              <div class="col-lg-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="agencyName" id="agencyName" placeholder="Name of Agency" required>
                  <label for="agencyName" class="form-label">Name of Agency</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="officeAddress" id="officeAddress" placeholder="Office Address" required>
                  <label for="officeAddress" class="form-label">Office Address</label>
                </div>
              </div>
            </div>
            <h4>Director</h4>
            <div class="row mb-3">
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fullName[]" id="fullName" placeholder="Full Name" required>
                  <label for="fullName" class="form-label">Full Name</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="designation[]" id="designation" placeholder="Designation" required>
                  <label for="designation" class="form-label">Designation</label>
                </div>
                <input type="text" class="form-control" name="position[]" id="position" value="Director" readonly hidden>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="emailAddress[]" id="emailAddress" placeholder="Email Address" required>
                  <label for="emailAddress" class="form-label">Email Address</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="telephone[]" id="telephone" placeholder="Telephone Number" required>
                  <label for="telephone" class="form-label">Telephone Number</label>
                </div>
              </div>
            </div>
            <h4>Assistant Director</h4>
            <div class="row">
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fullName[]" id="fullName" placeholder="Full Name">
                  <label for="fullName" class="form-label">Full Name</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="designation[]" id="designation" placeholder="Designation">
                  <label for="designation" class="form-label">Designation</label>
                </div>
                <input type="text" class="form-control" name="position[]" id="position" value="Assistant Director" readonly hidden>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="emailAddress[]" id="emailAddress" placeholder="Email Address">
                  <label for="emailAddress" class="form-label">Email Address</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="telephone[]" id="telephone" placeholder="Telephone Number">
                  <label for="telephone" class="form-label">Telephone Number</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- BFAR - Regional Offices -->
<div class="modal fade" id="bfarro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="bfarro" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">BFAR - Regional Offices</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <form action="../process/partners/addBFARRO.php" class="BFARRO" id="saveBFARRO" method="POST">
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-lg-4">
                <div class="form-floating">
                  <select name="regionalOffice" id="regionalOffice" class="form-control">
                    <option disabled selected>-- Please Choose --</option>
                    <option value="National Capital Region">National Capital Region</option>
                    <option value="Cordillera Administrative Region">Cordillera Administrative Region</option>
                    <option value="Regional Fisheries Office 1">Regional Fisheries Office 1</option>
                    <option value="Regional Fisheries Office 2">Regional Fisheries Office 2</option>
                    <option value="Regional Fisheries Office 3">Regional Fisheries Office 3</option>
                    <option value="Regional Fisheries Office 4A">Regional Fisheries Office 4A</option>
                    <option value="Regional Fisheries Office 4B">Regional Fisheries Office 4B</option>
                    <option value="Regional Fisheries Office 5">Regional Fisheries Office 5</option>
                    <option value="Regional Fisheries Office 6">Regional Fisheries Office 6</option>
                    <option value="Regional Fisheries Office 7">Regional Fisheries Office 7</option>
                    <option value="Regional Fisheries Office 8">Regional Fisheries Office 8</option>
                    <option value="Regional Fisheries Office 9">Regional Fisheries Office 9</option>
                    <option value="Regional Fisheries Office 10">Regional Fisheries Office 10</option>
                    <option value="Regional Fisheries Office 11">Regional Fisheries Office 11</option>
                    <option value="Regional Fisheries Office 12">Regional Fisheries Office 12</option>
                    <option value="Regional Fisheries Office 13">Regional Fisheries Office 13</option>
                  </select>
                  <label for="regionalOffice" class="form-label">Regional Office</label>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="form-floating">
                  <input type="text" class="form-control" name="officeAddress" id="officeAddress" placeholder="Office Address">
                  <label for="officeAddress" class="form-label">Office Address</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name">
                  <label for="fullName" class="form-label">Full Name</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation">
                  <label for="designation" class="form-label">Designation</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="emailAddress" id="emailAddress" placeholder="Email Address">
                  <label for="emailAddress" class="form-label">Email Address</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telephone Number">
                  <label for="telephone" class="form-label">Telephone Number</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- DA - Regional Field Offices -->
<div class="modal fade" id="darfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="darfo" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">DA - Regional Field Offices</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <form action="../process/partners/addDARFO.php" class="DARFO" id="saveDARFO" method="POST">
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-lg-4">
                <div class="form-floating">
                  <select name="regionalOffice" id="regionalOffice" class="form-control" required>
                    <option disabled selected>-- Please Choose --</option>
                    <option value="Cordillera Administrative Region">Cordillera Administrative Region</option>
                    <option value="Regional Field Office 1">Regional Field Office 1</option>
                    <option value="Regional Field Office 2">Regional Field Office 2</option>
                    <option value="Regional Field Office 3">Regional Field Office 3</option>
                    <option value="Regional Field Office 4A">Regional Field Office 4A</option>
                    <option value="Regional Field Office 4B">Regional Field Office 4B</option>
                    <option value="Regional Field Office 5">Regional Field Office 5</option>
                    <option value="Regional Field Office 6">Regional Field Office 6</option>
                    <option value="Regional Field Office 7">Regional Field Office 7</option>
                    <option value="Regional Field Office 8">Regional Field Office 8</option>
                    <option value="Regional Field Office 9">Regional Field Office 9</option>
                    <option value="Regional Field Office 10">Regional Field Office 10</option>
                    <option value="Regional Field Office 11">Regional Field Office 11</option>
                    <option value="Regional Field Office 12">Regional Field Office 12</option>
                    <option value="Regional Field Office 13">Regional Field Office 13</option>
                  </select>
                  <label for="regionalOffice" class="form-label">Regional Office</label>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="form-floating">
                  <input type="text" class="form-control" name="officeAddress" id="officeAddress" placeholder="Office Address">
                  <label for="officeAddress" class="form-label">Office Address</label>
                </div>
              </div>
            </div>
            <h4>Regional Executive Director</h4>
            <div class="row mb-2">
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fullName[]" id="fullName" placeholder="Full Name">
                  <label for="fullName" class="form-label">Full Name</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="designation[]" id="designation" placeholder="Designation">
                  <label for="designation" class="form-label">Designation</label>
                </div>
                <input type="text" class="form-control" name="position[]" id="position" value="Regional Executive Director" readonly hidden>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="emailAddress[]" id="emailAddress" placeholder="Email Address">
                  <label for="emailAddress" class="form-label">Email Address</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="telephone[]" id="telephone" placeholder="Telephone Number">
                  <label for="telephone" class="form-label">Telephone Number</label>
                </div>
              </div>
            </div>
            <h4>Regional Technical Director for Research and Regulations</h4>
            <div class="row mb-2">
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fullName[]" id="fullName" placeholder="Full Name">
                  <label for="fullName" class="form-label">Full Name</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="designation[]" id="designation" placeholder="Designation">
                  <label for="designation" class="form-label">Designation</label>
                </div>
                <input type="text" class="form-control" name="position[]" id="position" value="Regional Technical Director for Research and Regulations" readonly hidden>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="emailAddress[]" id="emailAddress" placeholder="Email Address">
                  <label for="emailAddress" class="form-label">Email Address</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="telephone[]" id="telephone" placeholder="Telephone Number">
                  <label for="telephone" class="form-label">Telephone Number</label>
                </div>
              </div>
            </div>
            <h4>Regional Technical Director for Operations</h4>
            <div class="row">
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fullName[]" id="fullName" placeholder="Full Name">
                  <label for="fullName" class="form-label">Full Name</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="designation[]]" id="designation" placeholder="Designation">
                  <label for="designation" class="form-label">Designation</label>
                </div>
                <input type="text" class="form-control" name="position[]" id="position" value="Regional Technical Director for Operations" readonly hidden>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="emailAddress[]" id="emailAddress" placeholder="Email Address">
                  <label for="emailAddress" class="form-label">Email Address</label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-floating">
                  <input type="text" class="form-control" name="telephone[]" id="telephone" placeholder="Telephone Number">
                  <label for="telephone" class="form-label">Telephone Number</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- List of Due and Demandable Accounts Payable – Advice to Debit Accounts -->
<div class="modal fade" id="lddap" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="darfo" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h3 class="modal-title">DA - Regional Field Offices</h3>
        <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ri-close-line"></i></span>
        </button>
      </div>
      <form action="../process/transparency/addLDDAP.php" class="LDDAP" id="saveLDDAP" method="POST">
        <div class="modal-body">
          <div class="container-fluid">
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
                  <input type="number" class="form-control" name="lddap_year" id="lddap_year" max-length="4" placeholder="Year">
                  <label for="lddap_year" class="form-label">Year</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="lddap_no" id="lddap_no" placeholder="LDDAP-ADA No.">
                  <label for="lddap_no" class="form-label">LDDAP-ADA No.</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input type="date" class="form-control" name="lddap_post" id="lddap_post" placeholder="Date Posted">
                  <label for="lddap_post" class="form-label">Date Posted</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript" src="../assets/js/formsubmission.js" defer>

</script>