<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/BAR_CMS/admin';
$rootpath = '/BAR_CMS';
include($path . "/functions/functions.php");

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>DA-BAR Officials</title>
  <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?= $rootpath ?>/css/bootstrap.min.css" type="text/css" id="bootstrap">
  <link rel="stylesheet" href="<?= $rootpath ?>/css/plugins.css" type="text/css">
  <link rel="stylesheet" href="<?= $rootpath ?>/css/style.css" type="text/css">
  <link rel="stylesheet" href="<?= $rootpath ?>/css/color.css" type="text/css">

  <!-- supersized -->
  <link rel='stylesheet' href='<?= $rootpath ?>/js/supersized/css/supersized.css' type='text/css'>
  <link rel='stylesheet' href='<?= $rootpath ?>/js/supersized/theme/supersized.shutter.css' type='text/css'>

  <!-- color scheme -->
  <link rel="stylesheet" href="<?= $rootpath ?>/css/colors/brown.css" type="text/css" id="colors">
</head>
<style>
  .line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
</style>

<body class="has-menu-bar">
  <div id="wrapper">
    <header class="header-fullwidth menu-expand">
    <!-- <header class="header-fullwidth menu-expand transparent"> -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="de-flex">
              <div class="de-flex-col">
                <div id="logo">
                  <a href="#">
                    <img class="logo" src="<?= $rootpath ?>/images/logo_DABAR.png" alt="">
                  </a>
                </div>
              </div>
              <div class="de-flex-col">
                <ul id="mainmenu">
                  <li><a href="https://www.gov.ph">GOVPH</a></li>
                  <li><a href="<?= $rootpath ?>">Home</a></li>
                  <li>
                    <a href="#">About</a>
                    <ul>
                      <li><a href="<?= $rootpath ?>/directors_message.php">Director's Message</a></li>
                      <li><a href="<?= $rootpath ?>/mandates.php">Mission, Vision & Mandates</a></li>
                      <li><a href="#">Directory of Officials</a></li>
                      <li><a href="#">Organizational Chart</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Media Resources</a>
                    <ul>
                      <li><a href="<?= $rootpath ?>/news_events">News & Events</a></li>
                      <li><a href="<?= $rootpath ?>/photo_releases.php">Photo Releases</a></li>
                      <li>
                        <a href="#">Publications</a>
                        <ul>
                          <li><a href="<?= $rootpath ?>/digest.php">Digest</a></li>
                          <li><a href="<?= $rootpath ?>/chronicles.php">Chronicles</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Downloadables</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Transparency</a>
                    <ul>
                      <li>
                        <a href="#">Bids and Awards</a>
                        <ul>
                          <li><a href="#">Purchase Order</a></li>
                          <li><a href="#">Invitation to BID</a></li>
                          <li><a href="#">Notice of Award</a></li>
                          <li><a href="#">BAC Resolution</a></li>
                          <li><a href="#">Notice to Proceed</a></li>
                          <li><a href="#">Work Order</a></li>
                          <li><a href="#">Bidding Documents</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Transparency Seal</a></li>
                      <li><a href="#">LDDAP-ADA</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Programs</a></li>
                  <li><a href="#">Partners</a></li>
                  <li><a href="<?= $rootpath ?>/contact.php">Contact</a></li>
                  <li><a href="#" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i> Search</a></li>
                </ul>
                <div id="menu-btn"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div id="menu-overlay" class="slideDown">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="col-md-12">
            <div id="mo-button-close">
              <div class="line-1"></div>
              <div class="line-2"></div>
            </div>
            <div class="pt80 pb80">
              <div class="mo-nav text-center">
                <a href="#">
                  <img class="logo" src="<?= $rootpath ?>/images/logo_DABAR.png" alt="">
                </a>
                <div class="spacer-single"></div>
                <!-- mainmenu begin -->
                <ul id="mo-menu">
                  <li><a href="https://www.gov.ph">GOVPH</a></li>
                  <li><a href="<?= $rootpath ?>">Home</a></li>
                  <li>
                    <a href="#">About</a>
                    <ul>
                      <li><a href="<?= $rootpath ?>/directors_message.php">Director's Message</a></li>
                      <li><a href="<?= $rootpath ?>/mandates.php">Mission, Vision & Mandates</a></li>
                      <li><a href="#">Directory of Officials</a></li>
                      <li><a href="#">Organizational Chart</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Media Resources</a>
                    <ul>
                      <li><a href="<?= $rootpath ?>/news_events.php">News & Events</a></li>
                      <li><a href="<?= $rootpath ?>/photo_releases.php">Photo Releases</a></li>
                      <li>
                        <a href="#">Publications</a>
                        <ul>
                          <li><a href="<?= $rootpath ?>/digest.php">Digest</a></li>
                          <li><a href="<?= $rootpath ?>/chronicles.php">Chronicles</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Downloadables</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Transparency</a>
                    <ul>
                      <li>
                        <a href="#">Bids and Awards</a>
                        <ul>
                          <li><a href="#">Purchase Order</a></li>
                          <li><a href="#">Invitation to BID</a></li>
                          <li><a href="#">Notice of Award</a></li>
                          <li><a href="#">BAC Resolution</a></li>
                          <li><a href="#">Notice to Proceed</a></li>
                          <li><a href="#">Work Order</a></li>
                          <li><a href="#">Bidding Documents</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Transparency Seal</a></li>
                      <li><a href="#">LDDAP-ADA</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Programs</a></li>
                  <li><a href="#">Partners</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="#" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i> Search</a></li>
                </ul>
                <!-- mainmenu close -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- content begin -->
  <div id="content" class="no-bottom no-top">
    <div class="float-text">
      <div class="de_social-icons">
        <a href="https://www.facebook.com/DABAROfficial"><i class="fa fa-facebook fa-lg"></i></a>
        <a href="https://www.instagram.com/DABAROfficial"><i class="fa fa-instagram fa-lg"></i></a>
        <a href="https://www.youtube.com/DABAROfficial"><i class="fa fa-youtube fa-lg"></i></a>
      </div>
    </div>