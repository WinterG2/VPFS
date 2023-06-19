<?php

//check session
require_once("../Database/sessionOne.php");


?>


<?php

$msg = ".حسابك لا زال غير فعال! تواصل مع المدرسة لتفعيله";

// Connect to the database
require_once("../Database/connection.php");

$stu_id = $_SESSION['nationalID'];
$stu_sc = $_SESSION['school_name'];




// Execute the statement
$result = mysqli_query($conn, "SELECT status FROM `$stu_sc` WHERE nationalID = $stu_id");
$status = $result->fetch_assoc()['status'];

// Compare the status value with the value "فعال" in Arabic.
if ($status == "فعال") {

    header("Location: home-page.php");
} else {
    session_destroy();
    echo "<script>alert('$msg');</script>";
    echo "<script>window.location ='home-page.php';</script>";
    
}

// Close the connection.
$conn->close();


?>