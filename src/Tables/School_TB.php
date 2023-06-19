<?php

//check session
require_once("../Database/sessionOne.php");

// school header
require_once("../Database/SchHeader.php");

  ?>
<?php
      if(isset($_POST['logout'])) {
        session_destroy();
        header("Location: ../../index.php");
        exit;
      }

      if(isset($_POST['event'])) {
        header("Location: ../Tables/School_TB.php");
        exit;
      }
      
      if(isset($_POST['schaccount'])) {
        header("Location: ../Database/SchAccount.php");
        exit;
      }
    ?>

<!DOCTYPE html>

<html dir="rtl" lang="ar">

<head>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>School table</title>
      <link rel="stylesheet" href="com_table1.css">
      <link rel="stylesheet" href="navStyle.css">
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

  <!-- جدول سجل طلبة المدرسة -->


      <h1>سجل الطلبة</h1>

      <!-- ................................................ -->
      

      <table class="stu-table">
            <thead>
              <tr>
              <th style=text-align:center> </th>
              <th style=text-align:center>الرقم</th>
                <th style=text-align:center>اسم الطالب</th>
                <th style=text-align:center>رقم الهوية</th>
                <th style=text-align:center>المرحلة الدراسية</th>
                <th style=text-align:center>حالة الطالب</th>
                <th style=text-align:center>الساعات التطوعية</th>
              </tr>

            </thead>

            <tbody>
          
            <script src="../script/script.js"></script>
            <?php

require_once('../Database/connection.php');

$sch_name = $_SESSION['name'];

$my_query = "SELECT * FROM `$sch_name` ";

// echo "<br> The query is: ".$my_query;

$result = $conn->query($my_query);


while($record = mysqli_fetch_array($result)) {
  

        echo "<form action=School_accept&reject.php method=post><tr>";
        echo "<td><input type=checkbox name='checked[]' value=".$record['nationalID']."></td>";
        echo "<td style=text-align:center >".$record['id']."</td>";
        echo "<td style=text-align:center >".$record['fname']. "  " .$record['sname']. "  " .$record['lname']."</td>";
        echo "<td style=text-align:center >".$record['nationalID']."</td>";
        echo "<td style=text-align:center >".$record['school_level']."</td>";
        echo "<td style=text-align:center >".$record['status']."</td>";
        echo "<td style=text-align:center >".$record['volunteer_hrs']."</td>";
        

        echo "</tr>";
        

}


$check_status = mysqli_query($conn, "SELECT status FROM `$sch_name`");

    $found_active_status = false;

    while ($row = mysqli_fetch_assoc($check_status)) {
        if ($row['status'] == 'قيد الانتظار') {
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

}
echo "</table>";
echo "</body>";
echo "</form>";
         
         

      
