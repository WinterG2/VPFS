<?php

//check session
require_once("../Database/sessionOne.php");

?>

<?php


require_once("../Database/connection.php");

$Org = $_SESSION['name'];

$title = $_POST['title'];

if(isset($_POST['approve']))
{
    $all_id = $_POST['checked'];
    $extract_id = implode(',' , $all_id);

    $eventhrs = mysqli_query($conn, "SELECT volunteer_hrs FROM `$Org` WHERE title= '{$title}' ");
    $event_hrs = $eventhrs->fetch_assoc()['volunteer_hrs'];
    
    $eventpts = mysqli_query($conn, "SELECT points FROM `$Org` WHERE title= '{$title}' ");
    $event_points = $eventpts->fetch_assoc()['points'];


    $studenthrs = mysqli_query($conn,"SELECT volunteer_hrs FROM student WHERE nationalID=  '{$extract_id}' ");
    $stu_hrs = $studenthrs->fetch_assoc()['volunteer_hrs'];

    $studentpts = mysqli_query($conn,"SELECT points FROM student WHERE nationalID=  '{$extract_id}' ");
    $stu_points = $studentpts->fetch_assoc()['points'];

    $sch = mysqli_query($conn,"SELECT school_name FROM student WHERE nationalID=  '{$extract_id}' ");
    $sch_name = $sch->fetch_assoc()['school_name'];



    $result = mysqli_query($conn, "SELECT status FROM `$extract_id` WHERE title=  '{$title}' ");
    $status = $result->fetch_assoc()['status'];


    if ($status == "فعالة") {

// add here 2 values the first is event volunteer_hrs from event and the second is volunteer_hrs from student
// add here 2 values the first is points from event and the second is points from student
// calculate the sum for all of them total_volunteer_hrs and total_points
// then isert these values into 3 tables(student table:hrs-and-points, school table: hrs-and-points, 
// student nationalID table: status::complete or ongoing) 


$total_hrs = ($event_hrs + $stu_hrs);
$total_points = ($event_points + $stu_points);


    $update_status_inStu = "update `$extract_id` set status='مكتملة' WHERE title='" . $title . "'";

    $update_status_inEvent = "update `$title` set status='مكتملة' WHERE nationalID='" . $extract_id . "'";

    $insert_student = "update student set volunteer_hrs='$total_hrs', points='$total_points' where nationalID='" . $extract_id . "'";

    $insert_school = "update `$sch_name` set volunteer_hrs='$total_hrs', points='$total_points' where nationalID='" . $extract_id . "'";


    $conn->query($update_status_inStu);

    $conn->query($update_status_inEvent);

    $conn->query($insert_student);

    $conn->query($insert_school);

    if ($conn->query($update_status_inStu) === TRUE) {

        echo "status updated successfully";
        } else {
        echo "Error: " . $update_status_inStu . "<br>" . $conn->error;
      }
      if ($conn->query($update_status_inEvent) === TRUE) {

        echo "status updated successfully";
        } else {
        echo "Error: " . $update_status_inEvent . "<br>" . $conn->error;
      }

      if ($conn->query($insert_student) === TRUE) {

        echo "data updated successfully";

        } else {
        echo "Error: " . $insert_student . "<br>" . $conn->error;
      }

      if ($conn->query($insert_school) === TRUE) {

        echo "data updated successfully";

        } else {
        echo "Error: " . $insert_school . "<br>" . $conn->error;
      }

      //check if all campaign students status are complete. if true then change event status to complete
      $check_status = mysqli_query($conn, "SELECT status FROM `$title`");

      $found_active_status = false;

    while ($row = mysqli_fetch_assoc($check_status)) {
        if ($row['status'] == 'فعالة') {
            $found_active_status = true;
            break;
        }
    }

    if (!$found_active_status) {
      $update_event_status = "update `$Org` set status='مكتملة' WHERE title='" . $title . "'";

      $conn->query($update_event_status);
    
      if ($conn->query($update_event_status) === TRUE) {
        echo "status updated successfully";
        header("Location: Campaign_TB.php");
        } else {
        echo "Error: " . $update_event_status . "<br>" . $conn->error;
      }
    }


    }

}

$all_id = $_POST['checked'];
$extract_id = implode(',' , $all_id);

$result = mysqli_query($conn, "SELECT status FROM `$extract_id` WHERE title=  '{$title}' ");
$status = $result->fetch_assoc()['status'];

if ($status == "فعالة") {

if(isset($_POST['reject']))
{
    $all_id = $_POST['checked'];
    $extract_id = implode(',' , $all_id);

    $delete_stu = "DELETE FROM `$title` WHERE nationalid = $extract_id";

    $conn->query($delete_stu);

    if ($conn->query($delete_stu) === TRUE) {

      echo "rows Deleted successfully";
      } else {
      echo "Error: " . $delete_stu . "<br>" . $conn->error;
    }

    $delete = "DELETE FROM `$extract_id` WHERE title= '$title' ";
    
    $conn->query($delete);

    if ($conn->query($delete) === TRUE) {

        echo "rows Deleted successfully";
        header("Location: Campaign_TB.php");
        } else {
        echo "Error: " . $delete . "<br>" . $conn->error;
      }
}
}

header("Location: Organization_TB.php");


?>