<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<style>
  .preview-container {
      display: flex;
      justify-content: center;
    }
  .preview-image {
    max-width: 100%;
    height: auto;
    max-height: auto;
    margin-top: 10px;
    width: auto;
    border: solid black 1px;
  }
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3>Organizational Chart</h3>
        </div>
        <div class="card-body">
          <div id="imagePreview"></div>
          <div class="mt-3 mb-3">
            <input type="file" accept="image/*" class="form-control" id="imageInput">
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-12">
              <button class="btn btn-success btn-md" id="saveOrgChart" name="saveOrgChart" type="submit"><i class="ri-save-line"></i> Save</button>
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