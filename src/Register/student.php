<?php

//check session
require_once("../Database/sessionZero.php");

// Set up database connection
require_once('../Database/connection.php');

//message
$signup = "تم التسجيل بنجاح!";
$duplicate_email = "هذا البريد الإلكتروني موجود مسبقًا! الرجاء استخدام بريد إلكتروني آخر!";
$duplicate_ID = "رقم الهوية هذا موجود مسبقًا! الرجاء استخدام رقم هوية آخر!";

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
$relationship = $_POST["relationship"];
$gphone = $_POST["gphone"];



// Check if email already exists
$sql = "SELECT * FROM student WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Email already exists
  echo "<script>alert('$duplicate_email');</script>";
  echo "<script>window.location ='sign-up-student.php';</script>";
} else {
  // Email does not exist
  // Check if email already exists in school table
  $sql = "SELECT * FROM school WHERE email = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Email already exists
    echo "<script>alert('$duplicate_email');</script>";
    echo "<script>window.location ='sign-up-student.php';</script>";
  } else {
    // Email does not exist
    // Check if email already exists in organization table
    $sql = "SELECT * FROM organization WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Email already exists
      echo "<script>alert('$duplicate_email');</script>";
      echo "<script>window.location ='sign-up-student.php';</script>";
    } else {
      // Email does not exist
    // Check if nationalid already exists in student table
    $sql = "SELECT * FROM student WHERE nationalID = '$nationalID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // nationalID already exists
      echo "<script>alert('$duplicate_ID');</script>";
      echo "<script>window.location ='sign-up-student.php';</script>";
    } else {
      // Email and nationalID does not exist
      // Add data to database


      $sql = "INSERT INTO student (fname, sname, lname, email, nationalID, password, 
      sex_type, date, phone, city, school_name, school_level, gfname, relationship, gphone) 
      VALUES ('$fname', '$sname', '$lname', '$email', '$nationalID', '$password', 
      '$sextype', '$date', '$phone', '$city', '$schoolname', '$schoollevel', 
      '$gfname', '$relationship', '$gphone')";

      
      if ($conn->query($sql) === TRUE ) {
        echo "User added successfully in student table";

        $school_table = "INSERT INTO `$schoolname` (nationalID, fname, sname, lname, email, phone, school_level, status) 
        VALUES ('$nationalID', '$fname', '$sname', '$lname', '$email', '$phone', '$schoollevel', 'قيد الانتظار')";

        
        if ($conn->query($school_table) === TRUE){
          echo "User added successfully in".$schoolname. "table";

          $table = "CREATE TABLE `$nationalID` (id int NOT NULL UNIQUE AUTO_INCREMENT, 
          title  VARCHAR(200) PRIMARY KEY, organization_name VARCHAR(200), volunteer_hrs INT(200), 
          status VARCHAR(200), city VARCHAR(200), address VARCHAR(200), points INT(200), 
          google_map_link VARCHAR(200), start_date DATE, end_date DATE, start_time TIME, 
          end_time TIME, instructor_name VARCHAR(200), instructor_phone VARCHAR(200), 
          instructor_email VARCHAR(200))";

          if ($conn->query($table) === TRUE){

            echo "Table added successfully";
            
            echo "<script>alert('$signup');</script>";
            echo "<script>window.location ='../../index.php';</script>";

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
}

// Close database connection
$conn->close();
