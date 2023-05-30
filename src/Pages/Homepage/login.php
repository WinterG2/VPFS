<?php

session_start();


if (isset($_SESSION['email'])) {
  header("Location: welcome.php");

  exit;
}

if (isset($_SESSION['nationalID'])) {
  header("Location: welcome.php");

  exit;
}

require_once("../Database/connection.php");

$msg = "";

if (isset($_POST['submit'])) {
  $username = $_POST['email_ID'];
  $password = $_POST['password'];

  $searchStu1 = ("SELECT fname, school_name, nationalID FROM student WHERE nationalID = '$username'");

  $stmt = $conn->prepare("SELECT password FROM student WHERE nationalID = ?");

  $username = filter_var($username, FILTER_SANITIZE_EMAIL);

  // Bind the username to the query
  $stmt->bind_param('s', $username);

  // Execute the query
  $stmt->execute();
  $result = $stmt->get_result();
  echo $result;
  $hashed_password = $result->fetch_assoc()['password'];
  echo $hashed_password;


  if (password_verify($password, $hashed_password) == true) {




    $result = $conn->query($searchStu1);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

      $_SESSION['nationalID'] = $row['nationalID'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['sname'] = $row['sname'];
      $_SESSION['lname'] = $row['lname'];
      $_SESSION['school_name'] = $row['school_name'];


      $_SESSION['start_time'] = time();
      header("Location: authenticate.php");
      exit;
    }
  }

  $searchStu2 = ("SELECT fname, school_name, nationalID FROM student WHERE email = '$username'");

  $stmt = $conn->prepare("SELECT password FROM student WHERE email = ?");

  $username = filter_var($username, FILTER_SANITIZE_EMAIL);

  // Bind the username to the query
  $stmt->bind_param('s', $username);

  // Execute the query
  $stmt->execute();
  $result = $stmt->get_result();
  $hashed_password = $result->fetch_assoc()['password'];
  echo $hashed_password;


  if (password_verify($password, $hashed_password) == true) {




    $result = $conn->query($searchStu2);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

      $_SESSION['nationalID'] = $row['nationalID'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['sname'] = $row['sname'];
      $_SESSION['lname'] = $row['lname'];
      $_SESSION['school_name'] = $row['school_name'];


      $_SESSION['start_time'] = time();
      header("Location: authenticate.php");
      exit;
    }
  }

  $Search_School = ("SELECT name, email FROM school WHERE email = '$username'");

  $stmt = $conn->prepare("SELECT password FROM school WHERE email = ?");

  $username = filter_var($username, FILTER_SANITIZE_EMAIL);

  // Bind the username to the query
  $stmt->bind_param('s', $username);

  // Execute the query
  $stmt->execute();
  $result = $stmt->get_result();
  $hashed_password = $result->fetch_assoc()['password'];
  echo $hashed_password;


  if (password_verify($password, $hashed_password) == true) {

    $result = $conn->query($Search_School);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

      $_SESSION['email'] = $row['email'];
      $_SESSION['name'] = $row['name'];

      $_SESSION['start_time'] = time();
      header("Location: Welcome.php");
      exit;
    }
  }

  $Search_Organization = ("SELECT name, email FROM organization WHERE email = '$username'");



  $stmt = $conn->prepare("SELECT password FROM organization WHERE email = ?");

  $username = filter_var($username, FILTER_SANITIZE_EMAIL);

  // Bind the username to the query
  $stmt->bind_param('s', $username);

  // Execute the query
  $stmt->execute();
  $result = $stmt->get_result();
  $hashed_password = $result->fetch_assoc()['password'];
  echo $hashed_password;


  if (password_verify($password, $hashed_password) == true) {

    $result = $conn->query($Search_Organization);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

      $_SESSION['email'] = $row['email'];
      $_SESSION['name'] = $row['name'];

      $_SESSION['start_time'] = time();
      header("Location: Welcome.php");
      exit;
    }
  } else {
    $msg = "Invalid username or password.";
  }

  $conn->close();
} else {
  echo "Broken -- We are working to fix it";
}
