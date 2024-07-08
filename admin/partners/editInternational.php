<?php

include('../functions/functions.php');

if (isset($_POST['id'])) {
    $res = getInternationalById($mysqli, $_POST['id']);
    $img = $res['fileName'] . '_' . $res['size'] . $res['thumbnail'] . '.' . $res['fileExtension'];


?>
    <form method="POST" action="../process/directory/editInternational.php" enctype="multipart/form-data">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                    <h3 class="modal-title">Directory of Officials</h3>
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ri-close-line"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row gap-2">

                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name of Partner" value="<?= $res['name'] ?>">

                                <label for="name" class="form-label">Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <div class="">


                                <img src="../storage/files/partners/<?= $img ?>" alt="" class="border" style="height: 128px;width: 100%;object-fit: cover">

                            </div>

                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" required>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="link" id="link" placeholder="Website Link" value="<?= $res['link'] ?>">
                                <label for="link" class="form-label">Website Link</label>
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