<?php

//check session
require_once("../sessionOne.php");

?>

<?php
// Set up database connection
require_once('../connection.php');

$add = "تم إضافة حملة بنجاح!";

function calcHours($t1, $t2)
{
  $t11 = DateTime::createFromFormat('H:i', $t1)->getTimestamp();
  $t22 = DateTime::createFromFormat('H:i', $t2)->getTimestamp();
  return floor(($t22 - $t11) / 3600);
}

function calcDays($d1, $d2)
{
  $d11 = strtotime($d1);
  $d22 = strtotime($d2);
  $diff = floor(($d22 - $d11) / 86400);
  if ($diff == 0) {
    return 1;
  }
  return $diff;
}

// Get the org_name variable from the session
// $org_name = $_SESSION['name'];
$org_name = $_SESSION['name'];

// Get the POST variables

// Get the image file from the POST request.
$image_file = $_FILES["img"];

try {
  $file_name = $image_file["name"];
  $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

  $allowed_extensions = ["jpg", "jpeg", "png"];
  if (!in_array($file_extension, $allowed_extensions)) {
    echo "The file extension is not allowed.";
  }

  $target_directory = "uploaded_files";
  if (!file_exists($target_directory)) {
    mkdir($target_directory, 0777, true);
  }

  $target_location = $target_directory . "/" . $file_name;
  move_uploaded_file($image_file["tmp_name"], $target_location);
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}

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
$volunteer_hrs = calcDays($start_date, $end_date) * calcHours($start_time, $end_time);
$points = $volunteer_hrs * 2;
$instructor_name = $_POST["instructor_name"];
$instructor_phone = $_POST["instructor_phone"];
$instructor_email = $_POST["instructor_email"];

$status = "فعالة";

$conn->set_charset("utf8");

$stmt = $conn->prepare("INSERT INTO event VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

$stmt->bind_param("sssssssssssssssssss", $org_name, $title, $target_location, $city, $address, $google_map_link, $description, $number_required, $number_current, 
      $start_date, $end_date, $start_time, $end_time, $instructor_name, $instructor_phone, $instructor_email, $volunteer_hrs, $points, $status);


try {
  $result = $stmt->execute();
} catch (Exception $e) {
  echo $e;
}


// Check if the query was successful
if ($result) {

  echo 'The variables were successfully inserted into the database table.';

  $table = "CREATE TABLE `$title` (id int NOT NULL UNIQUE AUTO_INCREMENT, nationalID INT(250) PRIMARY KEY, fname VARCHAR(200), sname VARCHAR(200), lname VARCHAR(200), email VARCHAR(200), phone VARCHAR(200), gphone VARCHAR(200), school_name VARCHAR(200), school_level VARCHAR(200), status VARCHAR(200))";

  if ($conn->query($table) === TRUE) {
    echo "Table added successfully";

    $event = "INSERT INTO `$org_name` (title, city, volunteer_hrs, points, status, start_date, end_date, instructor_name) 
    VALUES ('$title', '$city', '$volunteer_hrs', '$points', '$status', '$start_date', '$end_date', '$instructor_name')";

if ($conn->query($event) === TRUE) {
  echo 'The variables were successfully inserted into the database table.';

  $conn->close();

  echo "<script>alert('$add');</script>";
  echo "<script>window.location ='../../../index.php';</script>";
  
} else {
  echo "Error: " . $event . "<br>" . $conn->error;
}
  } else {
    echo "Error: " . $table . "<br>" . $conn->error;
  }
} else {
  echo 'Error inserting variables into database table: ' . $conn->error;
}

// Close the database connection
$conn->close();

?>