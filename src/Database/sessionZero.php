<?php
session_start();
if(isset($_SESSION['nationalID']) && (time() - $_SESSION['start_time']) < 300) {
  
  header("Location: ../Homepage/home-page.php");

}  if(isset($_SESSION['organization_number']) && (time() - $_SESSION['start_time']) < 300) {

  header("Location: ../Homepage/home-page.php");

} if(isset($_SESSION['school_number']) && (time() - $_SESSION['start_time']) < 300) {

  header("Location: ../Homepage/home-page.php");

}

  ?>

  