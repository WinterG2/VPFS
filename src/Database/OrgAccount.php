<!-- here is the organization account information with button to modify it -->

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
  <link rel=stylesheet href=../Database/test1.css>
</head>


<body>
  <header>
    <table class="stu-table">
      <thead>
        <tr>
          <th style=text-align:center>معلومات الحساب</th>
        </tr>

      </thead>


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
  </header>
  <!-- جدول سجل الشركة -->




  <?php

  require_once('../Database/connection.php');


  $orgname = $_SESSION['name'];


  $my_query = "SELECT * FROM organization WHERE name = '" . $orgname . "'";


  $result = $conn->query($my_query);


  while ($record = mysqli_fetch_array($result)) {


    echo " <h1>معلومات الحساب</h1>";
    echo "<table class=stu-table>";


    echo "<tr>";
    echo "<td style=text-align:center ><label>اسم المنشآة:  </label>" . $record['name'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>الايميل:  </label>" . $record['email'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>رقم المنشآة:  </label>" . $record['organization_number'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>المدينة:  </label>" . $record['city'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>الحي:  </label>" . $record['neighborhood'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>قطاع المنشآة:  </label>" . $record['organization_type'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>اسم المدير:  </label>" . $record['manager_name'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>هاتف المدير:  </label>" . $record['manager_phone'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>اسم مشرف الحملات التطوعية:  </label>" . $record['event_manager_name'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>ايميل مشرف الحملات التطوعية:  </label>" . $record['event_manager_email'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>هاتف مشرف الحملات التطوعية:  </label>" . $record['event_manager_phone'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>عنوان المنشآة:  </label>" . $record['address'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td style=text-align:center ><label>الرمز البريدي:  </label>" . $record['zipcode'] . "</td>";
    echo "</tr>";


  }

  



  echo "<tr>";
  echo "<td style=text-align:left > <form method=get action=OrgPass.php>";
  echo "<input type=submit class=but value='تغيير الرمز السرّي'></td>";
  echo "</form>";
  echo "</tr>";

  echo "</table>";
  echo "</body>";



  ?>


  </tbody>

  </table>


  <script src="../Database/test2.js"></script>
  <!-- <script src="../Tables/com_table1.js"></script> -->
  <script src="../script/script.js"></script>
  <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
</body>


</html>