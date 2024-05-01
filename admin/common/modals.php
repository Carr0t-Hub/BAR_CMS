<!-- News & Events -->
<form action="../process/publication/addNewsEvent.php" method="POST" enctype="multipart/form-data">
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
            <div class="row mb-2">
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  <label for="title" name="title">Title</label>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <label for="article_body" class="h4">Article Body</label>
                <textarea id="newseventeditor" class="body editor" name="body" style="height: 300px;"></textarea>
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
<form method="POST" action="../process/publication/addPhotoRelease.php" enctype="multipart/form-data">

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
            <div class="row mb-2">
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  <label for="title" name="title">Title</label>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="imagePath" name="imagepath" placeholder="Image Path">
                  <label for="imagePath" name="imagePath">Image Path</label>
                </div>
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
                    <option selected disabled>-- Please Choose --</option>
                    <option value="John Doe">John Doe</option>
                    <option value="Jane Smith">Jane Smith</option>
                  </select>
                  <label for="title" name="title">Author</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-floating">
                  <select name="status" id="post_type" class="form-control">
                    <option selected disabled>-- Please Choose --</option>
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
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Uncategorized Articles -->
<form method="POST" action="../process/publication/addArticles.php" enctype="multipart/form-data">

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
            <div class="row mb-2">
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  <label for="title" name="title">Title</label>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <label for="article_body" class="h4">Article Body</label>
                <textarea id="articleeditor" class="body editor" name="body" style="height: 300px;"></textarea>
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
                    <option selected disabled>-- Please Choose --</option>
                    <option value="John Doe">John Doe</option>
                    <option value="Jane Smith">Jane Smith</option>
                  </select>
                  <label for="title" name="title">Author</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-floating">
                  <select name="status" id="post_type" class="form-control">
                    <option selected disabled>-- Please Choose --</option>
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
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Career Opportunities -->
<form method="POST" action="../process/publication/addCareers.php" enctype="multipart/form-data">

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
            <div class="row mb-2">
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  <label for="title" name="title">Title</label>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <div class="form-floating">
                  <input type="file" class="form-control" id="filePath" name="attachment" accept="application/pdf" required>
                  <label for="filePath" name="filePath">Document File</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-floating">
                  <input type="date" class="form-control" id="date_posted" name="datePosted" placeholder="Date Posted">
                  <label for="date_posted" name="date_posted">Date Posted</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <select name="status" id="post_type" class="form-control">
                    <option selected disabled>-- Please Choose --</option>
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
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Value Focus -->
<form method="POST" action="../process/publication/addValues.php" enctype="multipart/form-data">
  <div class="modal fade" id="valueFocus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="career" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">Value Focus</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-2">
                <div class="form-floating">
                  <input type="number" maxlength="3" class="form-control" id="weekNum" name="weekNum" placeholder="Week Number">
                  <label for="weekNum" name="weekNum">Week Number</label>
                </div>
              </div>
              <div class="col-10">
                <div class="form-floating">
                  <input type="text" class="form-control" id="valueTitle" name="valueTitle" placeholder="Title">
                  <label for="valueTitle" name="valueTitle">Title</label>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="valueDescription" name="valueDescription" placeholder="Description" style="height: 100px"></textarea>
                  <label for="valueDescription" name="valueDescription">Description</label>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="actionPlan" name="actionPlan" placeholder="Action Plan" style="height: 100px"></textarea>
                  <label for="actionPlan" name="actionPlan">Action Plan</label>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="prayer" name="prayer" placeholder="Prayer" style="height: 100px"></textarea>
                  <label for="prayer" name="prayer">Prayer</label>
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
  </div>
</form>

<!-- DA - Bureaus, Attached Agencies and Attached Corporations -->
<form action="../process/partners/addAttached.php" class="Attached" id="saveAttached" method="POST" enctype="multipart/form-data"s>
  <div class="modal fade" id="attached" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="attached" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">DA - Bureaus, Attached Agencies and Attached Corporations</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row mb-2">
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
            <div class="row mb-1">
              <div class="col-lg-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fullName[]" id="fullName" placeholder="Full Name" required>
                  <label for="fullName" class="form-label">Full Name</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="designation[]" id="designation" placeholder="Designation" required>
                  <label for="designation" class="form-label">Designation</label>
                </div>
                <input type="text" class="form-control" name="position[]" id="position" value="Director" readonly hidden>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-lg-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="emailAddress[]" id="emailAddress" placeholder="Email Address" required>
                  <label for="emailAddress" class="form-label">Email Address</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="telephone[]" id="telephone" placeholder="Telephone Number" required>
                  <label for="telephone" class="form-label">Telephone Number</label>
                </div>
              </div>
            </div>
            <h4>Assistant Director</h4>
            <div class="row mb-1">
              <div class="col-lg-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fullName[]" id="fullName" placeholder="Full Name">
                  <label for="fullName" class="form-label">Full Name</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="designation[]" id="designation" placeholder="Designation">
                  <label for="designation" class="form-label">Designation</label>
                </div>
                <input type="text" class="form-control" name="position[]" id="position" value="Assistant Director" readonly hidden>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="emailAddress[]" id="emailAddress" placeholder="Email Address">
                  <label for="emailAddress" class="form-label">Email Address</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="telephone[]" id="telephone" placeholder="Telephone Number">
                  <label for="telephone" class="form-label">Telephone Number</label>
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
  </div>
</form>

<!-- BFAR - Regional Offices -->
<form action="../process/partners/addBFARRO.php" class="BFARRO" id="saveBFARRO" method="POST" enctype="multipart/form-data"s>
  <div class="modal fade" id="bfarro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="bfarro" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">BFAR - Regional Offices</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
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
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </div>
    </div>
  </div>
</form>
  
<!-- DA - Regional Field Offices -->
<form action="../process/partners/addDARFO.php" class="DARFO" id="saveDARFO" method="POST" enctype="multipart/form-data">
  <div class="modal fade" id="darfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="darfo" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">DA - Regional Field Offices</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
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
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </div>
    </div>
  </div>
</form>
  
<!-- List of Due and Demandable Accounts Payable – Advice to Debit Accounts -->
<form action="../process/transparency/addLDDAP.php" class="LDDAP" id="saveLDDAP" method="POST" enctype="multipart/form-data">
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
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>Close</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-save-line"></i> Save</button>
        </div>
      </div>
    </div>
  </div>
</form>
  
<!-- Directory of Officials -->
<form action="../process/directory/directories.php" class="Directory" id="saveDirectory" method="POST" enctype="multipart/form-data">
  <div class="modal fade" id="directory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="directory" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">Directory of Officials</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-3">
                <div id="imagePreview"></div>
                <input type="file" name="attachment" class="form-control" id="imageInput" accept="image/*" required>
              </div>
              <div class="col-9">
                <div class="row mb-2">
                  <div class="col-4">
                    <div class="form-floating">
                      <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name" required>
                      <label for="firstName" class="form-label">First Name</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating">
                      <input class="form-control" type="text" name="middleName" id="middleName" placeholder="Middle Name" required>
                      <label for="middleName" class="form-label">Middle Name</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating">
                      <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Last Name" required>
                      <label for="lastName" class="form-label">Last Name</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-6">
                    <div class="form-floating">
                      <select class="form-control" name="division" id="division" required>
                        <option disabled selected>-- Please Choose --</option>
                        <option value="Office of the Director">Office of the Director</option>
                        <option value="Office of the Assistant Director">Office of the Assistant Director</option>
                        <option value="Program Development Division">Program Development Division</option>
                        <option value="Program Monitoring, Evaluation, and Linkaging Division">Program Monitoring, Evaluation, and Linkaging Division</option>
                        <option value="Knowledge Management and Information Systems Division">Knowledge Management and Information Systems Division</option>
                        <option value="Administrative & Finance Division">Administrative & Finance Division</option>
                      </select>
                      <label class="form-label" for="division">Division</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating">
                      <select class="form-control" name="section" id="section" required>
                        <option disabled selected>-- Please Choose --</option>
                        <optgroup label="Office of the Director">
                          <option value="Compliance Officer">Compliance Officer</option>
                          <option value="Planning & Monitoring Unit">Planning & Monitoring Unit</option>
                        </optgroup>
                        <optgroup label="Program Development Division">
                          <option value="Project Packaging and Evaluation Section">Project Packaging and Evaluation Section</option>
                          <option value="Institutional Development Section">Institutional Development Section</option>
                          <option value="Impact Evaluation and Policy Section">Impact Evaluation and Policy Section</option>
                          <option value="Technology Management Section">Technology Management Section</option>
                        </optgroup>
                        <optgroup label="Program Monitoring, Evaluation, and Linkaging Division">
                          <option value="Monitoring & Evaluation Section">Monitoring & Evaluation Section</option>
                          <option value="Research Linkages Section">Research Linkages Section</option>
                          <option value="Results Management Section">Results Management Section</option>
                          <option value="International R4D Relation Section">International R4D Relation Section</option>
                        </optgroup>
                        <optgroup label="Knowledge Management and Information Systems Division">
                          <option value="Applied Communication Section">Applied Communication Section</option>
                          <option value="Information Management Section">Information Management Section</option>
                          <option value="Scientific Literature Section">Scientific Literature Section</option>
                        </optgroup>
                        <optgroup label="Administrative & Finance Division">
                          <option value="Human Resource Management Unit">Human Resource Management Unit</option>
                          <option value="Procurement Unit">Procurement Unit</option>
                          <option value="Property and Supply Unit">Property and Supply Unit</option>
                          <option value="Cash Unit">Cash Unit</option>
                          <option value="Records Unit">Records Unit</option>
                          <option value="Accounting Unit">Accounting Unit</option>
                          <option value="Budget Unit">Budget Unit</option>
                          <option value="Building Maintenance, Security and General Utility Services Unit">Building Maintenance, Security and General Utility Services Unit</option>
                          <option value="Transportation Maintenance and Services Unit">Transportation Maintenance and Services Unit</option>
                        </optgroup>
                      </select>
                      <label class="form-label" for="section">Section</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-6">
                    <div class="form-floating">
                      <input class="form-control" type="text" name="position" id="position" placeholder="Position">
                      <label for="position" class="form-label">Position</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating">
                      <input class="form-control" type="text" name="designation" id="designation" placeholder="Designation">
                      <label for="designation" class="form-label">Designation</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-6">
                    <div class="form-floating">
                      <input class="form-control" type="email" name="email" id="email" placeholder="Email Address">
                      <label for="email" class="form-label">Email Address</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating">
                      <input class="form-control" type="text" name="telephone" id="telephone" value="8461-2900 Local " placeholder="Telephone Local">
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
  </div>
</form>

<!-- Memorandum -->
<form action="../process/laws_issuance/addMemo.php" class="memo" id="saveMemo" method="POST" enctype="multipart/form-data">
  <div class="modal fade" id="memo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="memo" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">Memorandum</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-3">
                <div class="form-floating">
                  <input class="form-control" maxlength="5" type="number" name="codeNo" id="codeNo" placeholder="Code Number" required>
                  <label for="codeNo" class="form-label">Code Number</label>
                </div>
              </div>
              <div class="col-9">
                <div class="form-floating">
                  <input class="form-control" type="text" name="title" id="title" placeholder="Title" required>
                  <label for="title" class="form-label">Title</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-9">
                <div class="form-floating">
                  <input class="form-control" type="text" name="description" id="description" placeholder="Description" required>
                  <label for="description" class="form-label">Description</label>
                </div>
              </div>
              <div class="col-3">
                <div class="form-floating">
                  <input class="form-control" type="date" name="datePosted" id="datePosted" placeholder="Date Posted" required>
                  <label for="datePosted" class="form-label">Date Posted</label>
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
  </div>
</form>

<!-- Special Order -->
<form action="../process/laws_issuance/addSo.php" class="so" id="saveSo" method="POST" enctype="multipart/form-data">
  <div class="modal fade" id="so" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="so" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">Special Order</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-3">
                <div class="form-floating">
                  <input class="form-control" maxlength="5" type="number" name="codeNo" id="codeNo" placeholder="Code Number" required>
                  <label for="codeNo" class="form-label">Code Number</label>
                </div>
              </div>
              <div class="col-9">
                <div class="form-floating">
                  <input class="form-control" type="text" name="title" id="title" placeholder="Title" required>
                  <label for="title" class="form-label">Title</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-9">
                <div class="form-floating">
                  <input class="form-control" type="text" name="description" id="description" placeholder="Description" required>
                  <label for="description" class="form-label">Description</label>
                </div>
              </div>
              <div class="col-3">
                <div class="form-floating">
                  <input class="form-control" type="date" name="datePosted" id="datePosted" placeholder="Date Posted" required>
                  <label for="datePosted" class="form-label">Date Posted</label>
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
  </div>
</form>
  
<!-- User Accounts -->
<form action="../process/user/addUser.php" class="user" id="saveUser" method="POST" enctype="multipart/form-data">
  <div class="modal fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="user" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">New User</h3>
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ri-close-line"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row mb-2">
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required>
                <label for="firstName" class="form-control-label">First Name</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required>
                <label for="lastName" class="form-control-label">Last Name</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                <label for="email" class="form-control-label">Email Address</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                <label for="username" class="form-control-label">Username</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                <label for="password" class="form-control-label">Password</label>
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
  </div>
</form>

<script type="text/javascript" src="../assets/js/formsubmission.js" defer>

</script>