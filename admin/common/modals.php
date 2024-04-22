<!-- News & Events -->
<div class="modal fade" id="news_events" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" role="dialog" aria-labelledby="news_events" aria-hidden="true">
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

<!-- Photo Releases -->
<div class="modal fade" id="photo_releases" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" role="dialog" aria-labelledby="photo_releases" aria-hidden="true">
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
<div class="modal fade" id="articles" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" role="dialog" aria-labelledby="articles" aria-hidden="true">
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
<div class="modal fade" id="career" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" role="dialog" aria-labelledby="career" aria-hidden="true">
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