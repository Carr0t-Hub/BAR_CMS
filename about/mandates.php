<?php
$upper_title = "What is";
$title = "BAR?";
ob_start();
?>

<div class="row">
  <div class="col-md-6">
    <div class="box-icon">
      <span class="icon bg-color"><img src="../images/svg/mission.svg" alt=""></span>
      <div class="text">
        <h3 class="style-1">Mission</h3>
        <p style="font-size: 16px">We coordinate, integrate, fund, and manage the Research for Development (R4D) system to ensure its optimum utility for the agriculture and fisheries sector.</p>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="box-icon">
      <span class="icon bg-color"><img src="../images/svg/vision.svg" alt=""></span>
      <div class="text">
        <h3 class="style-1">Vision</h3>
        <p style="font-size: 16px">The lead Research for Development (R4D) coordinating agency towards a technology-empowered agriculture and fisheries sector contributory to inclusive growth.</p>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <br>
    <div class="box-icon">
      <span class="icon bg-color"><img src="../images/svg/mandate.svg" alt=""></span>
      <div class="text">
        <h3 class="style-1">Mandate</h3>
        <p style="font-size: 16px">
          The Bureau of Agricultural Research (BAR) was created by virtue of Executive Order 116 signed in 1987 under the Freedom Constitution. Under this EO, the government addressed the lack of coordination and integration of agriculture research and development among the existing bureaus, councils, and agencies by creating BAR under the Research, Training, and Extension Group.

          BAR’s specific mandate to coordinate agricultural research was affirmed by EO 292, otherwise known as the Administrative Code of 1987. BAR’s specific mandate is to:“(1) ensure that all agricultural research is coordinated and undertaken for maximum utility to agriculture (Section 22).”

          In 1997, Republic Act 8435, a landmark law also known as the Agriculture and Fisheries Modernization Act (AFMA), was enacted. This law affirmed the leading role of BAR in agriculture and fisheries research and development (R&D).

          Executive Orders 127 (1999) and 338 (2000) further expanded the mandate of BAR to orchestrate, consolidate, and strengthen the National Research and Development System for Agriculture and Fisheries (NaRDSAF).

          “The Bureau coordinates and funds agricultural and fishery research and development activities, develops partnerships and linkages with local and international research organizations, sources funds from local and foreign donor institutions, strengthens institutional capabilities of the agriculture and fisheries sectors, manages knowledge, facilitates technology utilization, and advocates policies toward improved governance and progressive agricultural and fishery sector value chain.”
        </p>
      </div>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require_once("../common/layout.php"); ?>