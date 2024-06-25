<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php");

$res = getInternationalPartner($mysqli);


?>

<!-- Start Content-->
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between">
                <div>
                    <h4>International Partners</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#international"><i class="ri-file-add-line"></i> Add New</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase">Thumbnail</th>
                            <th class="text-center text-uppercase">Name</th>
                            <th class="text-center text-uppercase">Link</th>
                            <th class="text-center text-uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($res as $key => $value) :

                            $img = $value['fileName'] . '_' . $value['size'] . $value['thumbnail'] . '.' . $value['fileExtension'];

                        ?>
                            <tr>
                                <td>
                                    <img src="../storage/files/partners/<?= $img ?>" alt="" class="border" style="height: 96px;width: 100%;object-fit: cover">



                                </td>
                                <td><?php echo strtoupper($value['name']); ?></td>
                                <td><?php echo strtoupper($value['link']); ?></td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary intlItem" type="button" name="editData" id="editData" data-id="<?= $value['id'] ?>"><i class="ri-edit-2-line"></i> Edit</button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="lddap" aria-hidden="true">
</div>

<form method="POST" action="../process/partners/addInternationalPartner.php" enctype="multipart/form-data">
    <div class="modal fade" id="international" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="international" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                    <h3 class="modal-title">Add International Partners</h3>
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ri-close-line"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row gap-2">

                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name of Partner">
                                <label for="name" class="form-label">Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="thumbnail" class="form-label">Thumbnail</label>

                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" required>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="link" id="link" placeholder="Website Link">
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
    </div>
</form>

<script>
    $(document).ready(function() {
        $('.intlItem').click(function() {
            var id = $(this).attr('data-id');

            $.ajax({
                url: 'editInternational.php',
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