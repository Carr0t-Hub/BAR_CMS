<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>

<style>
  #map {
    height: 400px;
    width: 100%;
  }
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5>Contact Us</h5>
        </div>
        <div id="gmaps-markers" class="gmaps"></div>

        <div class="card-body">
          <div class="row mb-3">
            <div class="col-12">
              <div id="map"></div>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter location" aria-label="Enter location" aria-describedby="basic-addon2">
                <button class="btn btn-success" onclick="searchLocation()"><i class="ri-search-line"></i> Search</button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-floating">
                <input class="form-control" type="text" name="office" id="office" placeholder="Office">
                <label for="office" class="form-label">Office</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-floating">
                <input class="form-control" type="text" name="directLine" id="directLine" placeholder="Direct Line">
                <label for="directLine" class="form-label">Direct Line</label>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-12">
              <button class="btn btn-success btn-md" id="saveContact" name="saveContact" type="submit"><i class="ri-save-line"></i> Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  let map;

  function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
      center: {
        lat: 14.654768034467967,
        lng: 121.04763773662236
      },
    });
  }

  function searchLocation() {
    const location = document.getElementById("locationInput").value;
    const geocoder = new google.maps.Geocoder();
    geocoder.geocode({
      address: location
    }, function(results, status) {
      if (status === "OK") {
        map.setCenter(results[0].geometry.location);
        const marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          title: results[0].formatted_address,
        });
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
</script>

<?php include("../common/footer.php"); ?>