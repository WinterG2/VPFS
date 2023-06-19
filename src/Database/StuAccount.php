<!-- here is the student account information with button to modify it -->

<?php

//check session
require_once("../Database/sessionOne.php");

?>

<?php

// student header
require_once("../Database/StuHeader.php");

  ?>
<?php
      if(isset($_POST['logout'])) {
        session_destroy();
        header("Location: ../../index.php");
        exit;
      }
      if (isset($_POST['stuevent'])) {
        header("Location: ../Tables/Student_TB.php");
        exit;
      }
      if(isset($_POST['stuaccount'])) {
        header("Location: ../Database/StuAccount.php");
        exit;
      }

    ?>

<html dir="rtl" lang="ar">

<head>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Company History</title>
      <link rel="stylesheet" href="../Tables/com_table1.css">
      <link rel="stylesheet" href="../Tables/navStyle.css">
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

<table class="stu-table">
            <thead>
              <tr>
              <th style=text-align:center>معلومات الحساب</th>
              </tr>

            </thead>
<body>

  <!-- جدول سجل الشركة -->


  <script src="../Tables/com_table1.js"></script>
  <script src="../script/script.js"></script>


<?php

require_once('../Database/connection.php');


$stuID = $_SESSION['nationalID'];


$my_query = "SELECT * FROM student WHERE nationalID = '" . $stuID . "'";


$result = $conn->query($my_query);


while($record = mysqli_fetch_array($result)) {
  

            echo " <h1>معلومات الحساب</h1>";

             echo "<table class=stu-table>";
            //  echo "<form action=Campaign_TB.php method=post>";
             echo "<tr>";
             echo "<td style=text-align:center ><label>الاسم:  </label>".$record['fname']."  ".$record['sname']."  ".$record['lname']."</td>";
             echo "</tr>";
            //  echo "<tr><input type=submit class=but role=button value="."'$title'"." name=event_history>"."</tr>";
             echo "<tr>";
             echo "<td style=text-align:center ><label>الايميل:  </label>".$record['email']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>رقم الهويّة:  </label>".$record['nationalID']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>الجنس:  </label>".$record['sex_type']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>تاريخ الميلاد:  </label>".$record['date']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>رقم الجوال:  </label>".$record['phone']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>المدينة:  </label>".$record['city']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>اسم المدرسة:  </label>".$record['school_name']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>المرحلة الدراسية:  </label>".$record['school_level']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>الساعات التطوعية:  </label>".$record['volunteer_hrs']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>النقاط:  </label>".$record['points']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>اسم ولي الأمر:  </label>".$record['gfname']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>العلاقة:  </label>".$record['relationship']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>رقم ولي الأمر:  </label>".$record['gphone']."</td>";
             echo "</tr>";
             
            
             
     }

     echo "<tr>";
     echo "<td style=text-align:left > <form method=get action=StuPass.php>";
     echo "<input type=submit class=but value='تغيير الرمز السرّي'></td>";
     echo "</form>";
     echo "</tr>";

     echo "</table>";
     echo "</body>";
    //  echo "</form>";

                    ?>

            
            </tbody>

          </table>

      
</body>

            
</html>