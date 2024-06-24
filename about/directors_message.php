<?php
$upper_title = "Director's";
$title = "Message";
ob_start();

?>


<div class="row align-items-center">

  <div class="col-lg-3 col-3">
    <img src="../images/misc/4.jpg" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
  </div>
  <div class="col-lg-9 wow fadeIn">
    <div class="padding20">

      <p>
        Warm greetings from the Department of Agriculture-Bureau of Agricultural Research (DA-BAR)!
        <br>
        As part of our commitment to be transparent with its processes and provide information on the latest innovations of all our agri-fisheries Research for Development and Extension (R4DE) initiatives, it is with great pleasure that I present to you our enhanced website.
        <br>
        We have provided through this website the bureau’s history, mandate, and aspirations; our operating procedures, functions, and services; and, a list of opportunities to work at the bureau.
        <br>
        Moreover, this page chronicles the bureau&#39;s accomplishments, on-going programs and activities, and links to our partner research institutions . You can access these in the form of news, feature stories, photo releases, infographics, videos, newsletters, magazines, and reports.
        <br>
        We, at DA-BAR, recognize the importance of providing easily accessible and factual information. As we establish our enhanced website, the bureau also vows to uphold credibility in providing resources vital to our agri-fishery sector– an extra mile we take directed towards our efforts in improving the lives of our farmers and fisherfolks.
      </p>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
<div class="spacer-double"></div>

<?php
$content = ob_get_clean();
require_once("../common/layout.php"); ?>