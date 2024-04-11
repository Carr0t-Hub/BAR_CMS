<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="mt-5 p-sm-3 p-0 profile-user">
        <div class="row g-2">
          <div class="col-lg-3  d-none d-lg-block">
            <div class="profile-user-img p-2 text-start">
              <img src="../assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail avatar-lg rounded">
            </div>
            <div class="text-start p-1 pt-2">
              <h4 class=" fs-17 ellipsis">Adams A. Franklin</h4>
              <p class="font-13"> Division / Section / Unit</p>
            </div>
            <div class="pt-3 ps-2">
              <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">Adams A. Franklin</span></p>
              <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">(123) 123 1234</span></p>
              <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">user@email.domain</span></p>
              <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">USA</span></p>
            </div>

            <div class="text-start mt-4">
              <h4 class="">Follow On:</h4>
              <div class="d-flex gap-2 mt-3">
                <a href="javascript: void(0);" class="btn px-2 py-1 btn-soft-primary"><i class="mdi mdi-facebook"></i></a>
                <a href="javascript: void(0);" class="btn px-2 py-1 btn-soft-danger"><i class="mdi mdi-google-plus"></i></a>
                <a href="javascript: void(0);" class="btn px-2 py-1 btn-soft-info"><i class="mdi mdi-twitter"></i></a>
                <a href="javascript: void(0);" class="btn px-2 py-1 btn-soft-dark"><i class="mdi mdi-github"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-9 bg-light-subtle">
            <div class="profile-content">
              <div class="nav nav-pills nav-justified gap-0 p-3 text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li class="nav-item mt-2">
                  <a class="nav-link fs-5 p-2" data-bs-toggle="tab" data-bs-target="#edit-profile" type="button" role="tab" aria-controls="home" aria-selected="true" href="#edit-profile">Settings</a>
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link fs-5 p-2" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="home" aria-selected="true" href="#projects">Projects</a>
                </li>
              </div>
              <div class="tab-content m-0 p-2 p-sm-4 " id="v-pills-tabContent">
                <div class="tab-pane active" role="tabpanel" id="edit-profile" aria-labelledby="home-tab" tabindex="0">
                  <div class="user-profile-content">
                    <form>
                      <div class="row row-cols-sm-2 row-cols-1">
                        <div class="mb-2">
                          <label class="form-label" for="FullName">Full Name</label>
                          <input type="text" value="John Doe" id="FullName" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="Email">Email</label>
                          <input type="email" value="first.last@example.com" id="Email" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="web-url">Website</label>
                          <input type="text" value="Enter website url" id="web-url" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="Username">Username</label>
                          <input type="text" value="john" id="Username" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="Password">Password</label>
                          <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="RePassword">Re-Password</label>
                          <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit"><i class="mdi mdi-content-save-outline me-1 fs-16 lh-1"></i> Save</button>
                    </form>
                  </div>
                </div>
                <div id="projects" class="tab-pane">
                  <div class="row m-t-10">
                    <div class="col-md-12">
                      <div class="table-responsive ">
                        <table class="table table-bordered mb-0 table-striped table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Project Name</th>
                              <th>Start Date</th>
                              <th>Due Date</th>
                              <th>Status</th>
                              <th>Assign</th>
                            </tr>
                          </thead>
                          <tbody class="table-group-divider">
                            <tr>
                              <td>1</td>
                              <td>Techmin Admin</td>
                              <td>01/01/2015</td>
                              <td>07/05/2015</td>
                              <td><span class="badge bg-info">Work in Progress</span></td>
                              <td>Techzaa</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Techmin Frontend</td>
                              <td>01/01/2015</td>
                              <td>07/05/2015</td>
                              <td><span class="badge bg-success">Pending</span></td>
                              <td>Techzaa</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Techmin Admin</td>
                              <td>01/01/2015</td>
                              <td>07/05/2015</td>
                              <td><span class="badge bg-pink">Done</span></td>
                              <td>Techzaa</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Techmin Frontend</td>
                              <td>01/01/2015</td>
                              <td>07/05/2015</td>
                              <td><span class="badge bg-purple">Work in Progress</span></td>
                              <td>Techzaa</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Techmin Admin</td>
                              <td>01/01/2015</td>
                              <td>07/05/2015</td>
                              <td><span class="badge bg-warning">Coming soon</span></td>
                              <td>Techzaa</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("../common/footer.php"); ?>