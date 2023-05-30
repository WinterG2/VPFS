
<?php
  session_start();
  if(!isset($_SESSION['nationalID']) || (time() - $_SESSION['start_time']) > 3) {
    session_destroy();
    header("Location: home-page.html");
    exit;
  }
?>  

<?php

// Connect to the database
require_once("../Database/connection.php");

$stu_id = $_SESSION['nationalID'];
$stu_sc = $_SESSION['school_name'];

// Prepare a statement






// Execute the statement
$result = mysqli_query($conn, "SELECT status FROM `$stu_sc` WHERE nationalID = $stu_id");
$status = $result->fetch_assoc()['status'];

// Compare the status value with the value "فعال" in Arabic.
if ($status == "فعال") {

    header("Location: StuWelcome.php");
} else {
    echo ".حسابك لا زال غير فعال! تواصل مع المدرسة لتفعيله";
}

// Close the connection.
$conn->close();



?>