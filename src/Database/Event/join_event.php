<?php

//check session
require_once("../sessionOne.php");

?>

<?php



//set connection
require_once("../connection.php");


// Get the data that was passed from JavaScript
$data = json_decode(file_get_contents("php://input"));

//student national id
$TB_name = $_SESSION['nationalID'];

//event information
$title = $data->title;
$organization_name = $data->organization_name;
$volunteer_hrs = $data->volunteer_hrs;
$status = $data->status;
$city = $data->city;
$address = $data->address;
$point = $data->point;
$google_map = $data->google_map;
$start_date = $data->start_date;
$end_date = $data->end_date;
$start_time = $data->start_time;
$end_time = $data->end_time;
$instructor_name = $data->instructor_name;
$instructor_phone = $data->instructor_phone;
$instructor_email = $data->instructor_email;
$number_curr = $data->number_curr;
$number_curr++;

//query where event info inserted in student table

$stmt = "INSERT INTO `$TB_name` (title, organization_name, volunteer_hrs, status, city, 
address, points, google_map_link, start_date, end_date, start_time, end_time, instructor_name, 
instructor_phone, instructor_email) VALUES (
  
  '$title',
  '$organization_name',
  '$volunteer_hrs',
  '$status',
  '$city',
  '$address',
  '$point',
  '$google_map',
  '$start_date',
  '$end_date',
  '$start_time',
  '$end_time',
  '$instructor_name',
  '$instructor_phone',
  '$instructor_email'
)";


if ($conn->query($stmt) === TRUE) {
  echo "Success: Student inserted to event successfully";

  $stm = $conn->prepare("UPDATE `event` SET number_current = ? WHERE title = ?");

  $stm->bind_param('ss', $number_curr, $title);

  $stm->execute();
  if ($stm->affected_rows == 1) {
    echo "Success update";
  } else {
    echo "Error: " . $stm . "<br>" . $conn->error;
  }
} else {
  echo "Error: " . $stmt . "<br>" . $conn->error;
}

//sudent information
$STU_fname = $_SESSION['fname'];
$STU_sname = $_SESSION['sname'];
$STU_lname = $_SESSION['lname'];
$STU_id = $_SESSION['nationalID'];
$STU_level = $_SESSION['school_level'];
$STU_school = $_SESSION['school_name'];
$STU_phone = $_SESSION['phone'];
$STU_gphone = $_SESSION['gphone'];

//query where student info inserted in event table
$table = "INSERT INTO `$title` (fname, sname, lname, nationalID, school_level, school_name, phone, gphone, status)
  VALUES ('$STU_fname', '$STU_sname', '$STU_lname', '$STU_id', '$STU_level', '$STU_school', '$STU_phone', '$STU_gphone', 'فعالة')";

if ($conn->query($table) === TRUE) {
  echo "Table added successfully";
} else {
  echo "Error: " . $table . "<br>" . $conn->error;
}

?>