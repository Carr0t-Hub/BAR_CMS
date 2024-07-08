<?php include("../common/modals.php"); ?>

<!-- Left Sidebar Start -->
<div class="leftside-menu">

  <!-- Logo Light -->
  <a href="../views/index.php" class="logo logo-light">
    <span class="logo-lg">
      <img src="../assets/images/logo-dark.png" alt="logo">
    </span>
    <span class="logo-sm">
      <img src="../assets/images/logo-sm.png" alt="small logo">
    </span>
  </a>

  <!-- Logo Dark -->
  <a href="index.html" class="logo logo-dark">
    <span class="logo-lg">
      <img src="../assets/images/logo-dark.png" alt="dark logo">
    </span>
    <span class="logo-sm">
      <img src="../assets/images/logo-sm.png" alt="small logo">
    </span>
  </a>

  <!-- Sidebar -->
  <div data-simplebar>
    <ul class="side-nav">
      <li class="side-nav-title">Main</li>
      <li class="side-nav-item">
        <a href="../views/index.php" class="side-nav-link">
          <i class="ri-dashboard-2-line"></i>
          <span> Dashboard </span>
        </a>
      </li>

      <li class="side-nav-title">Extra Pages</li>
      <!-- About Us -->
      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#about-us" aria-expanded="false" aria-controls="about-us" class="side-nav-link">
          <i class="ri-information-line"></i>
          <span> About Us </span>
          <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="about-us">
          <ul class="side-nav-second-level">
            <!-- <li class="side-nav-item">
                <a class="side-nav-link" href="../aboutus/mvvm.php">Mission & Vision</a>
              </li>    -->
            <li class="side-nav-item">
              <a class="side-nav-link" href="../aboutus/directory_officials.php">Directory of Officials</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../aboutus/org_chart.php">Organizational Chart</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../aboutus/contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- PUBLICATIONS -->
      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#publications" aria-expanded="false" aria-controls="publications" class="side-nav-link">
          <i class="ri-draft-line"></i>
          <span> Publications </span>
          <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="publications">
          <ul class="side-nav-second-level">
            <li class="side-nav-item">
              <a class="side-nav-link" href="../publications/news_events.php">News & Events</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../publications/photo_releases.php">Photo Releases</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../publications/articles.php">Articles</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../publications/career.php">Career</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../publications/values.php">Value Focus</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#transparency" aria-expanded="false" aria-controls="publications" class="side-nav-link">
          <i class="ri-file-list-line"></i>
          <span> Transparency </span>
          <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="transparency">
          <ul class="side-nav-second-level">
            <li class="side-nav-item">
              <a class="side-nav-link" href="../transparency/lddap.php">LDDAP-ADA</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../transparency/addProcurement.php">Procurement</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#partners" aria-expanded="false" aria-controls="publications" class="side-nav-link">
          <i class="ri-hand-heart-line"></i>
          <span> Partners </span>
          <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="partners">
          <ul class="side-nav-second-level">
            <li class="side-nav-item">
              <a class="side-nav-link" href="../partners/bfarro.php">BFAR - RO</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../partners/attached.php">DA - AA</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../partners/darfo.php">DA - RFO</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../partners/international.php">International</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#laws_issuance" aria-expanded="false" aria-controls="laws_issuance" class="side-nav-link">
          <i class="ri-file-list-3-line"></i>
          <span> Laws & Issuances </span>
          <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="laws_issuance">
          <ul class="side-nav-second-level">
            <li class="side-nav-item">
              <a class="side-nav-link" href="../laws_issuance/memo.php">Memorandum</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../laws_issuance/so.php">Special Order</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#page_layout" aria-expanded="false" aria-controls="page_layout" class="side-nav-link">
          <i class="ri-layout-line"></i>
          <span> Page Layouts </span>
          <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="page_layout">
          <ul class="side-nav-second-level">
            <!-- <li class="side-nav-item">
              <a class="side-nav-link" href="../page_layout/menu.php">Menubar</a>
            </li> -->
            <li class="side-nav-item">
              <a class="side-nav-link" href="../page_layout/slider.php">Slider</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
          <i class="ri-team-line"></i>
          <span> Users </span>
          <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarPages">
          <ul class="side-nav-second-level">
            <li class="side-nav-item">
              <a class="side-nav-link" href="../users/authors.php">Manage Authors</a>
            </li>
            <li class="side-nav-item">
              <a class="side-nav-link" href="../users/user_accounts.php">Manage Users</a>
            </li>
          </ul>
        </div>
      </li>
      </li>
    </ul>
  </div>
</div>
<!-- Left Sidebar End -->

<div class="content-page">
  <div class="content">