<?php

// Set up database connection
require_once('../Database/connection.php');

// Get form data
$name = $_POST["schoolname"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$schoolnumber = $_POST["schoolnumber"];

$city = $_POST["city"];
$neighborhood = $_POST["neighborhood"];
$address = $_POST["address"];
$zipcode = $_POST["zipcode"];

$schoolmanagername = $_POST["schoolmanagername"];
$schoolmanageremail = $_POST["schoolmanageremail"];
$schoolmanagerphone = $_POST["schoolmanagerphone"];

$schooldeanname = $_POST["schooldeanname"];
$schooldeanemail = $_POST["schooldeanemail"];



// Check if email already exists
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
    // Check if email already exists in organization table
    $sql = "SELECT * FROM organization WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Email already exists
      echo "Email already exists in organization table! Choose another email!";
    } else {
      // Email does not exist
      // Add data to database
      $sql = "INSERT INTO school (name, email, password, school_number, city, neighborhood, address, zipcode, 
      dean_name, dean_email, manager_name, manager_email, manager_phone)
      VALUES ('$name', '$email', '$password', '$schoolnumber', '$city', '$neighborhood', '$address', '$zipcode', 
      '$schooldeanname', '$schooldeanemail', '$schoolmanagername', '$schoolmanageremail', '$schoolmanagerphone')";

      if ($conn->query($sql) === TRUE) {

        echo "User added successfully";

        $table = "CREATE TABLE `$name` (nationalID  INT(250) PRIMARY KEY, fname VARCHAR(200), sname VARCHAR(200), lname VARCHAR(200), email VARCHAR(200), phone VARCHAR(200), school_level VARCHAR(200), volunteer_hrs INT(200), points INT(200), status VARCHAR(200))";

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