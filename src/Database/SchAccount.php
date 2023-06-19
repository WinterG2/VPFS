<!-- here is the school account information with button to modify it -->


<?php

//check session
require_once("../Database/sessionOne.php");

?>

<?php

// organization header
require_once("../Database/SchHeader.php");

  ?>
<?php
      if(isset($_POST['logout'])) {
        session_destroy();
        header("Location: ../../index.php");
        exit;
      }
      if(isset($_POST['students'])) {
        header("Location: ../Tables/School_TB.php");
        exit;
      }
      if(isset($_POST['schaccount'])) {
        header("Location: ../Database/SchAccount.php");
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


$schname = $_SESSION['name'];


$my_query = "SELECT * FROM school WHERE name = '" . $schname . "'";


$result = $conn->query($my_query);


while($record = mysqli_fetch_array($result)) {
  

  echo " <h1>معلومات الحساب</h1>";
             echo "<table class=stu-table>";
            //  echo "<form action=Campaign_TB.php method=post>";
             echo "<tr>";
             echo "<td style=text-align:center ><label>اسم المدرسة:  </label>".$record['name']."</td>";
             echo "</tr>";
            //  echo "<tr><input type=submit class=but role=button value="."'$title'"." name=event_history>"."</tr>";
             echo "<tr>";
             echo "<td style=text-align:center ><label>الايميل:  </label>".$record['email']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>رقم المدرسة:  </label>".$record['school_number']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>المدينة:  </label>".$record['city']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>الحي:  </label>".$record['neighborhood']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>عنوان المدرسة:  </label>".$record['address']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>الرمز البريدي:  </label>".$record['zipcode']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>اسم المدير:  </label>".$record['dean_name']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>ايميل المدير:  </label>".$record['dean_email']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>اسم المرشد الأكاديمي:  </label>".$record['manager_name']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>ايميل المرشد الأكاديمي:  </label>".$record['manager_email']."</td>";
             echo "</tr>";

             echo "<tr>";
             echo "<td style=text-align:center ><label>رقم المرشد الأكاديمي:  </label>".$record['manager_phone']."</td>";
             echo "</tr>";
             
            
             
     }

    //  echo "</form>";
    echo "<tr>";
    echo "<td style=text-align:left > <form method=get action=SchPass.php>";
    echo "<input type=submit class=but value='تغيير الرمز السرّي'></td>";
    echo "</form>";
    echo "</tr>";

    echo "</table>";
    echo "</body>";
                    ?>

            
            </tbody>

          </table>

      
</body>

            
</html>