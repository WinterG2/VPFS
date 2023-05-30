<?php
// Set up database connection
require_once('../Database/connection.php');

// Get the org_name variable from the session
// $org_name = $_SESSION['name'];
$org_name = "Test1";

// Get the POST variables
// $target_location = "uploaded_files/" . $_FILES['image']['name']; 
// move_uploaded_file($_FILES['image']['name'], $target_location);


$title = $_POST["title"];
$city = $_POST["city"];
$address = $_POST["address"];
$google_map_link = $_POST["google_map_link"];
$description = $_POST["description"];
$number_required = $_POST["number_required"];
$number_current = 0;
$start_date = $_POST["start_date"];
$end_date = $_POST["end_date"];
$start_time = $_POST["start_time"];
$end_time = $_POST["end_time"];
$instructor_name = $_POST["instructor_name"];
$instructor_phone = $_POST["instructor_phone"];
$instructor_email = $_POST["instructor_email"];

$conn -> set_charset("utf8");

// Insert the variables into the database table
$sql = "INSERT INTO event (image, title, city, address, org_name, google_map_link, description, number_required,
number_current, start_date, end_date, start_time, end_time, instructor_name, instructor_phone, instructor_email) 
VALUES ('uploaded_files\icon-organization.png', '$title', '$city', '$address', '$org_name', '$google_map_link', '$description', 
'$number_required', '$number_current', '$start_date', '$end_date', '$start_time', '$end_time', '$instructor_name', 
'$instructor_phone', '$instructor_email')";
echo $sql;

$result = $conn->query($sql);


// Check if the query was successful
if ($result) {
  echo 'The variables were successfully inserted into the database table.';
  $table = "CREATE TABLE `$title`  (nationalID  INT(250) PRIMARY KEY, fname VARCHAR(200), sname VARCHAR(200), lname VARCHAR(200), email VARCHAR(200), phone VARCHAR(200), gphone VARCHAR(200), school_name VARCHAR(200), school_level VARCHAR(200))";
  if ($conn->query($table) === TRUE) {
    echo "Table added successfully";
  } else {
    echo "Error: " . $table . "<br>" . $conn->close();
  }
} else {
  echo 'Error inserting variables into database table: ' . $conn->close();
}

// Close the database connection
header("Location: ../homepage/home-page.html");
$conn->close();

?>