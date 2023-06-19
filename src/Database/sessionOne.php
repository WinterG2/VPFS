<?php
session_start();
  if((!isset($_SESSION['nationalID']) && (time() - $_SESSION['start_time']) > 300) || ((!isset($_SESSION['email'])) && (time() - $_SESSION['start_time']) > 300)) {
    session_destroy();
    header("Location: ../Homepage/home-page.php");
    exit;
  }

  ?>