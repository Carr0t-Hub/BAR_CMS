<?php
include_once('config.php');

date_default_timezone_set('Asia/Manila');
ini_set('display_errors', 1);
session_start();

include_once HELPER_PATH . '/Attachment.php';

include('db.config.php');
include('userController.php');
include('directoryController.php');
include('publicationController.php');
include('partnerController.php');
include('transparencyController.php');
include('mvvmController.php');
include('menuController.php');
include('valuesController.php');
include('lawsController.php');