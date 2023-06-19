<?php

//check session
require_once("../Database/sessionOne.php");

?>

<?php

// student header
require_once("../Database/StuHeader.php");

?>
<?php
if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: ../../index.php");
  exit;
}

if (isset($_POST['stuevent'])) {
  header("Location: ../Tables/Student_TB.php");
  exit;
}
if (isset($_POST['stuaccount'])) {
  header("Location: ../Database/StuAccount.php");
  exit;
}
?>

<!DOCTYPE html>

<html dir="rtl" lang="ar">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student History</title>
  <link rel="stylesheet" href="../Tables/com_table1.css">
  <link rel="stylesheet" href="../Tables/navStyle.css">
  <link rel="stylesheet" href="stu_table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


</head>

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

<body>

  <!-- جدول سجل الطالب -->


  <h2>
    اسم الطالب:
    <?php echo "$_SESSION[fname]" . "  " . "$_SESSION[sname]" . "  " . "$_SESSION[lname]"; ?>


  </h2>

  <h2>
    رقم الهوية:
    <?php echo "$_SESSION[nationalID]"; ?>
  </h2>

  <h2>
    اسم المدرسة:
    <?php echo "$_SESSION[school_name]"; ?>
  </h2>

  <h2>
    إجمالي الساعات التطوعية:
    <?php echo "$_SESSION[volunteer_hrs]"; ?>
  </h2>


  <!-- ................................................ -->


  <h1>سجل الطالب</h1>


  <!-- ................................................ -->


  <table class="stu-table">
    <thead>
      <tr>
        <th style=text-align:center>الرقم</th>
        <th style=text-align:center>الحملة</th>
        <th style=text-align:center>المنشأة</th>
        <th style=text-align:center>الساعات</th>
        <th style=text-align:center>النقاط</th>
        <th style=text-align:center>تاريخ البداية</th>
        <th style=text-align:center>تاريخ النهاية</th>
        <th style=text-align:center>وقت البدء</th>
        <th style=text-align:center>وقت الانتهاء</th>
        <th style=text-align:center>اسم المشرف</th>
        <th style=text-align:center>رقم المشرف</th>
        <th style=text-align:center>ايميل المشرف</th>
        <th style=text-align:center>المدينة</th>
        <th style=text-align:center>العنوان</th>
        <th style=text-align:center>الموقع الجغرافي</th>
        <th style=text-align:center>الحالة</th>

      </tr>

    </thead>

    <tbody>

      <script src="../Tables/com_table1.js"></script>
      <script src="../script/script.js"></script>

      <?php

      require_once('../Database/connection.php');

    $stu_id= $_SESSION['nationalID'];

      $my_query = "SELECT * FROM `$stu_id` ";

      $result = $conn->query($my_query);

      while ($record = mysqli_fetch_array($result)) {


        echo "<tr>";

        echo "<td style=text-align:center >" . $record['id'] . "</td>";
        echo "<td style=text-align:center >" . $record['title'] . "</td>";
        echo "<td style=text-align:center >" . $record['organization_name'] . "</td>";
        echo "<td style=text-align:center >" . $record['volunteer_hrs'] . "</td>";
        echo "<td style=text-align:center >" . $record['points'] . "</td>";
        
        echo "<td style=text-align:center >" . $record['start_date'] . "</td>";
        echo "<td style=text-align:center >" . $record['end_date'] . "</td>";
        echo "<td style=text-align:center >" . $record['start_time'] . "</td>";
        echo "<td style=text-align:center >" . $record['end_time'] . "</td>";

        echo "<td style=text-align:center >" . $record['instructor_name'] . "</td>";
        echo "<td style=text-align:center >" . $record['instructor_phone'] . "</td>";
        echo "<td style=text-align:center >" . $record['instructor_email'] . "</td>";

        echo "<td style=text-align:center >" . $record['city'] . "</td>";
        echo "<td style=text-align:center >" . $record['address'] . "</td>";

        echo "<td style=text-align:center >"."<a href=".$record['google_map_link']."><img src=../Database/Event/uploaded_files/icon-google-map.png width=25 height=35 ></a>"."</td>";
        echo "<td style=text-align:center >" . $record['status'] . "</td>";


        echo "</tr>";
      }

      ?>
    </tbody>

  </table>


</body>

</html>