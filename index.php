<?php include("common/header.php"); ?>

<div class="container">    
  <div id="prevthumb"></div>
  <div id="nextthumb"></div>
      
  <!--Arrow Navigation-->
  <a id="prevslide" class="load-item"></a>
  <a id="nextslide" class="load-item"></a>
      
  <!--Time Bar-->
  <div id="progress-back" class="load-item">
    <div id="progress-bar"></div>
  </div>

  <!--Control Bar-->
  <div id="controls-wrapper" class="load-item">
    <div id="controls">
      <a id="play-button"><span id="pauseplay" class="play"></span></a>
      <!--Slide counter-->
      <div id="slidecounter">
        <span class="slidenumber"></span> / <span class="totalslides"></span>
      </div>
      <!--Navigation-->
      <ul id="slide-list"></ul>
    </div>
  </div>
</div>
</div>

    <!-- Modals -->
    <div class="modal fade" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="mb-3">
              <label for="message-text" class="col-form-label text-dark"><h4>Keyword</h4></label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
          </div>
        </div>
      </div>
    </div>
  </body>

  <!-- Javascript Files -->
  <script src="js/plugins.js"></script>
  <script src="js/designesia.js"></script>

  <!-- Supersized -->
  <script src='js/supersized/js/supersized.3.2.7.js'></script>
  <script src='js/supersized/theme/supersized.shutter.min.js'></script>

  <script>
    jQuery(function($){
      var slides=[];
      slides.push({image : 'images/slider/1.jpg', title : "<div class='slider-text'><h2 class='wow fadeInUp'>Relax</h2><a class='btn-line wow fadeInUp' data-wow-delay='.3s' href='about.html'><span>Our Facilities</span></a></div>", thumb : '', url : ''});  

      slides.push({image : 'images/slider/2.jpg', title : "<div class='slider-text'><h2 class='wow fadeInUp'>Comfort</h2><a class='btn-line wow fadeInUp' data-wow-delay='.3s' href='room-2-cols.html'><span>Choose Room</span></a></div>", thumb : '', url : ''});
      
      slides.push({image : 'images/slider/3.jpg', title : "<div class='slider-text'><h2 class='wow fadeInUp'>Happy</h2><a class='btn-line wow fadeInUp' data-wow-delay='.3s' href='about.html'><span>Our Facilities</span></a></div>", thumb : '', url : ''}); 

    $.supersized({
      // Functionality
      slide_interval      :   5000, // Length between transitions
      transition          :   1, // 0-None, 1-Fad e, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
      transition_speed    :   500, // Speed of tr ansition
      slide_links         :   'blank',    // Indi vidual links for each slide (Options: false, 'num', 'name', 'blank')
      slides              :   slides, 
      autoplay            :   1,                   
      fit_always          :   0, 
      performance         :   0,
      image_protect       :   1        // Disables image dragging and right click with Javascript
    });

    jQuery("#pauseplay").toggle(
    function () {
      jQuery(this).addClass("pause");
    },
    function () {
      jQuery(this).removeClass("pause").addClass("play");
    });

    jQuery("#pauseplay").stop().fadeTo(150, .5);
    jQuery("#pauseplay").hover(
      function () {
        jQuery(this).stop().fadeTo(150, 1);
      },
      function () {
        jQuery(this).stop().fadeTo(150, .5);
      });
    });
  </script>
</html>