<?php

// Set up database connection
require_once('../Database/connection.php');

// Get form data
$fname = $_POST["fname"];
$sname = $_POST["sname"];
$lname = $_POST["lname"];

$email = $_POST["email"];
$nationalID = $_POST["nationalID"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$sextype = $_POST["sextype"];
$date = $_POST["date"];
$phone = $_POST["phone"];
$city = $_POST["city"];

$schoolname = $_POST["schoolname"];
$schoollevel = $_POST["schoollevel"];

$gfname = $_POST["gfname"];
$glname = $_POST["glname"];
$relationship = $_POST["relationship"];
$gphone = $_POST["gphone"];



// Check if email already exists
$sql = "SELECT * FROM student WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Email already exists
  echo "Email already exists in student table! Choose another email!";
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
    // Check if email already exists in organization table
    $sql = "SELECT * FROM organization WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Email already exists
      echo "Email already exists in organization table! Choose another email!";
    } else {
      // Email does not exist
      // Add data to database


      $sql = "INSERT INTO student (fname, sname, lname, email, nationalID, password, 
      sex_type, date, phone, city, school_name, school_level, gfname, glname, relationship, guardian_phone) 
      VALUES ('$fname', '$sname', '$lname', '$email', '$nationalID', '$password', 
      '$sextype', '$date', '$phone', '$city', '$schoolname', '$schoollevel', 
      '$gfname', '$glname', '$relationship', '$gphone')";

      
      if ($conn->query($sql) === TRUE ) {
        echo "User added successfully in student table";

        $school_table = "INSERT INTO `$schoolname` (nationalID, fname, sname, lname, email, phone, school_level, status) 
        VALUES ('$nationalID', '$fname', '$sname', '$lname', '$email', '$phone', '$schoollevel', 'قيد الانتظار')";

        
        if ($conn->query($school_table) === TRUE){
          echo "User added successfully in".$schoolname. "table";

          $table = "CREATE TABLE `$nationalID` (title  VARCHAR(200) PRIMARY KEY, organization_name VARCHAR(200), volunteer_hrs INT(200), status VARCHAR(200))";

          if ($conn->query($table) === TRUE){

            echo "Table added successfully";

          } else {

            echo "Error: " . $table . "<br>" . $conn->error;

          }
        }else{

          echo "Error: " . $school_table . "<br>" . $conn->error;

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