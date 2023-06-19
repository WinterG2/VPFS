<?php

//check session
require_once("../Database/sessionOne.php");

// organization header
require_once("../Database/OrgHeader.php");

  ?>
<?php
      if(isset($_POST['logout'])) {
        session_destroy();
        header("Location: ../../index.php");
        exit;
      }

      if(isset($_POST['event'])) {
        header("Location: ../Tables/Organization_TB.php");
        exit;
      }
      
      if (isset($_POST['orgaccount'])) {
        header("Location: ../Database/OrgAccount.php");
        exit;
      }
    ?>

<!DOCTYPE html>

<html dir="rtl" lang="ar">

<head>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Company History</title>
      <link rel="stylesheet" href="com_table1.css">
      <link rel="stylesheet" href="navStyle.css">
      <link rel="stylesheet" href="../style/addEvent.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



      <div class="navbar">
                <div class="web-logo">
                    <a href="../../index.php">
                        <img class="icon-logo" src="../image/icon-home.png" alt="Home icon">
                    </a>
                </div>
                <div class="btn">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>

</head>


<body>

<script src="../script/script.js"></script>

  <!-- جدول سجل الحملة -->


      <h1>سجل الحملة</h1>

      <!-- ................................................ -->
      

      <table class="stu-table">
            <thead>
              <tr>
              <th style=text-align:center> </th>
              <th style=text-align:center>الرقم</th>
                <th style=text-align:center>اسم الطالب</th>
                <th style=text-align:center>رقم الهوية</th>
                <th style=text-align:center>المرحلة الدراسية</th>
                <th style=text-align:center>المدرسة</th>
                <th style=text-align:center>الجوال</th>
                <th style=text-align:center>جوال ولي الأمر</th>
                <th style=text-align:center>حالة الحملة</th>
              </tr>

            </thead>

            <tbody>



            <?php

require_once('../Database/connection.php');


if(isset($_POST['event_history']))
{

  
$event_title = $_POST['event_history'];

$Org = $_SESSION['name'];




$my_query = "SELECT * FROM `$event_title`";



      $result = $conn->query($my_query);
        

        if ($result) {
          while($record = mysqli_fetch_array($result)) {
          
               echo "<form action=Campaign_accept&reject.php method=post><tr>";

               echo "<td><input type=checkbox name='checked[]' value=".$record['nationalID']."></td>";
               echo "<td style=text-align:center >".$record['id']."</td>";
               echo "<td style=text-align:center >".$record['fname']. "  " .$record['sname']. "  " .$record['lname']."</td>";
               echo "<td style=text-align:center >".$record['nationalID']."</td>";
               echo "<td style=text-align:center >".$record['school_level']."</td>";
               echo "<td style=text-align:center >".$record['school_name']."</td>";
               echo "<td style=text-align:center >".$record['phone']."</td>";
               echo "<td style=text-align:center >".$record['gphone']."</td>";
               echo "<td style=text-align:center >".$record['status']."</td>";
               echo "<input type=hidden class=but value='".$event_title."' name=title>";
               

          echo "</tr>";
        

     }
     
    //  $check_status = mysqli_query($conn,"SELECT COUNT(*) AS total FROM `$event_title` WHERE status = 'فعالة'");
    //  $column = mysqli_fetch_assoc($check_status);

    $check_status = mysqli_query($conn, "SELECT status FROM `$event_title`");

    $found_active_status = false;

    while ($row = mysqli_fetch_assoc($check_status)) {
        if ($row['status'] == 'فعالة') {
            $found_active_status = true;
            break;
        }
    }

if ($found_active_status) {
  echo "<td style= background-color:#ffffff><input type=submit class=but value=إتمام name=approve>"."</td>";
  echo "<td style= background-color:#ffffff><input type=submit class=but value=رفض name=reject>"."</td>";
  echo "<td style= background-color:#ffffff></td>";
  echo "<td style= background-color:#ffffff></td>";
  echo "<td style= background-color:#ffffff></td>";
  echo "<td style= background-color:#ffffff></td>";
  echo "<td style= background-color:#ffffff></td>";
  echo "<td style= background-color:#ffffff></td>";
  echo "<td style= background-color:#ffffff></td>";
} 


     echo "</table>";
     echo "</body>";
     echo "</form>";

    }
  
    }