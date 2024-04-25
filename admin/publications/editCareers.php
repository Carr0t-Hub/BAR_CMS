<?php

include('../functions/functions.php');


if (isset($_POST['id'])) {


    $data = getPublicationById($mysqli, $_POST['id']);
?>
    <form method="POST" action="../process/publication/editArticles.php" enctype="multipart/form-data">
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
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?= $data['title']  ?>">
                                    <label for="title" name="title">Title</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
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

    </form>

<?php
}



?>