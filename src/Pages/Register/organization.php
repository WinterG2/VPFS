<?php

// Set up database connection
require_once('../Database/connection.php');

// Get form data
$name = $_POST["orgname"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$orgnumber = $_POST["orgnumber"];
$city = $_POST["city"];
$neighborhood = $_POST["neighborhood"];
$orgtype = $_POST["orgtype"];

$orgmanager = $_POST["orgmanager"];
$orgmanagerphone = $_POST["orgmanagerphone"];

$orgeventmanager = $_POST["orgeventmanager"];
$orgeventmanageremail = $_POST["orgeventmanageremail"];
$orgeventmanagerphone = $_POST["orgeventmanagerphone"];

$address = $_POST["address"];
$zipcode = $_POST["zipcode"];




// Check if email already exists
$sql = "SELECT * FROM organization WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Email already exists
  echo "Email already exists in organization table! Choose another email!";
} else {
  // Email does not exist
  // Check if email already exists in school table
  $sql = "SELECT * FROM school WHERE email = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Email already exists
    echo "Email already exists in school table! Choose another email!";
  } else {
    // Email does not exist
    // Check if email already exists in student table
    $sql = "SELECT * FROM student WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Email already exists
      echo "Email already exists in student table! Choose another email!";
    } else {
      // Email does not exist
      // Add data to database
      $sql = "INSERT INTO organization (name, email, password, organization_number, city, neighborhood, organization_type,
      manager_name, manager_phone, event_manager_name, event_manager_email, event_manager_phone, address, zipcode)
      VALUES ('$name', '$email', '$password', '$orgnumber', '$city', '$neighborhood', '$orgtype', '$orgmanager',
      '$orgmanagerphone', '$orgeventmanager', '$orgeventmanageremail', '$orgeventmanagerphone', '$address', '$zipcode')";


     if ($conn->query($sql) === TRUE) {

        echo "User added successfully";

        $table = "CREATE TABLE `$name` (title  VARCHAR(200) PRIMARY KEY, city VARCHAR(200), volunteer_hrs INT(200), start_date DATE, end_date DATE, instructor_name VARCHAR(200), status VARCHAR(200))";

        if ($conn->query($table) === TRUE) {
          echo "Table added successfully";
        } else {
          echo "Error: " . $table . "<br>" . $conn->error;
        }

      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }
}

// Close database connection
$conn->close();
?>