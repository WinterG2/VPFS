<?php

//check session
require_once("../Database/sessionOne.php");

?>

<?php


require_once("../Database/connection.php");

$sch_name = $_SESSION['name'];

if(isset($_POST['approve']))
{
    $all_id = $_POST['checked'];
    $extract_id = implode(',' , $all_id);

    $update = "UPDATE `$sch_name` SET status = 'فعال' WHERE nationalID IN($extract_id) ";
    $conn->query($update);

    if ($conn->query($update) === TRUE) {

        echo "status updated successfully";
        header("Location: School_TB.php");
        } else {
        echo "Error: " . $update . "<br>" . $conn->error;
      }
}

if(isset($_POST['reject']))
{
    $all_id = $_POST['checked'];
    $extract_id = implode(',' , $all_id);

    $delete_stu = "DELETE FROM student WHERE nationalid IN($extract_id)";

    $conn->query($delete_stu);



    $delete = "DELETE FROM `$sch_name` WHERE nationalID IN($extract_id)";
    
    $conn->query($delete);

    if ($conn->query($delete) === TRUE) {

        echo "rows Deleted successfully";
        header("Location: School_TB.php");
        } else {
        echo "Error: " . $delete . "<br>" . $conn->error;
      }
}

?>