<?php

//check session
require_once("../Database/sessionOne.php");

// organization header
require_once("../Database/OrgHeader.php");

?>
<?php
if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: ../../index.php");
  exit;
}

if (isset($_POST['event'])) {
  header("Location: ../Tables/Organization_TB.php");
  exit;
}

if (isset($_POST['orgaccount'])) {
  header("Location: ../Database/OrgAccount.php");
  exit;
}
?>
<!-- <!DOCTYPE html> -->

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

  <!-- جدول سجل الشركة -->


  <!-- <button id="filter-button" class="but">تصفية</button> -->

  <div id="filter-container" class="filters">

    <ul class="filters__list">
      <li>
        <input id="f1" type="checkbox" />
        <label for="f1">مكتملة</label>
      </li>
      <li>
        <input id="f2" type="checkbox" />
        <label for="f2">فعالة</label>
      </li>
      <li>

    </ul>
  </div>

  <script src="com_table1.js"></script>
  <script src="../script/script.js"></script>


  <!-- ................................................ -->

  <h1>سجل المنشأة</h1>

  <!-- ................................................ -->


  <table class="stu-table">
    <thead>
      <tr>
        <th style=text-align:center>الرقم</th>
        <th style=text-align:center>الحملة</th>
        <th style=text-align:center>المدينة</th>
        <th style=text-align:center>الساعات</th>
        <th style=text-align:center>البداية</th>
        <th style=text-align:center>النهاية</th>
        <th style=text-align:center>المشرف</th>
        <th style=text-align:center>الحالة</th>
      </tr>

    </thead>

    <tbody>

      <?php

      require_once('../Database/connection.php');

      $Org = $_SESSION['name'];

      $my_query = "SELECT * FROM `$Org`";


      $result = $conn->query($my_query);


      while ($record = mysqli_fetch_array($result)) {

        $title = $record['title'];
        echo "<form action=Campaign_TB.php method=post><tr>";
        echo "<td style=text-align:center >" . $record['id'] . "</td>";
        echo "<td><input type=submit class=but role=button value=" . "'$title'" . " name=event_history>" . "</td>";
        echo "<td style=text-align:center >" . $record['city'] . "</td>";
        echo "<td style=text-align:center >" . $record['volunteer_hrs'] . "</td>";
        echo "<td style=text-align:center >" . $record['start_date'] . "</td>";
        echo "<td style=text-align:center >" . $record['end_date'] . "</td>";
        echo "<td style=text-align:center >" . $record['instructor_name'] . "</td>";
        echo "<td style=text-align:center >" . $record['status'] . "</td>";



        echo "</tr>";
      }
      echo "</table>";
      echo "</body>";
      echo "</form>";

      ?>


    </tbody>

  </table>

  <div class="popup-container">
    <div class="container" id="pop-up" hidden="hidden">
      <div class="close-btn">
        <button onclick="close_pop_up()">X</button>
      </div>
      <header>اضافة حملة تطوعية</header>
      <form action="../Database/Event/insertEvent.php" method="post" enctype="multipart/form-data">
        <div class="form first">
          <div class="details personal">
            <span class="title">حملة تطوعية</span>

            <div class="fields">
              <div class="input-field">
                <label>عنوان الحملة</label>
                <input type="text" name="title" placeholder="عنوان الحملة" required>
              </div>

              <div class="input-field">
                <label>المدينة</label>
                <input type="text" name="city" placeholder="المدينة" required>
              </div>

              <div class="input-field">
                <label>العنوان</label>
                <input type="text" name="address" placeholder="العنوان" required>
              </div>

              <div class="input-field">
                <label>تاريخ بداية الحملة</label>
                <input type="date" name="start_date" id="restrictDate" onchange="restreictDate2()" required>
              </div>

              <div class="input-field">
                <label>تاريخ نهاية الحملة</label>
                <input type="date" name="end_date" id="restrictDate2" required>
              </div>

              <div class="input-field">
                <label>رابط قوقل ماب لمكان التجمع</label>
                <input type="text" name="google_map_link" placeholder="رابط مكان التجمع عن طريق قوقل ماب" required>
              </div>

              <div class="input-field">
                <label>وقت بداية الحملة</label>
                <input type="time" name="start_time" required>
              </div>

              <div class="input-field">
                <label>وقت نهاية الحملة</label>
                <input type="time" name="end_time" required>
              </div>

              <div class="input-field">
                <label>عدد المتطوعين المطلوب</label>
                <input type="number" name="number_required" min="1" max="999" placeholder="999 - 0" required>
              </div>

              <div class="input-field-description">
                <label>وصف الحملة (مع ذكر نبذة عن الحملة والمتطلبات)</label>
                <textarea name="description" placeholder="وصف الحملة" required></textarea>
              </div>
            </div>
          </div>

          <div class="details ID">
            <span class="title">بيانات المشرف</span>

            <div class="fields">
              <div class="input-field">
                <label>اسم المشرف الثلاثي</label>
                <input type="text" name="instructor_name" placeholder="اسم المشرف الثلاثي" required>
              </div>

              <div class="input-field">
                <label>رقم المشرف للتواصل</label>
                <input type="number" name="instructor_phone" placeholder="********05" pattern="[05][0-9]*" required>
              </div>

              <div class="input-field">
                <label>بريد المشرف الاكتروني</label>
                <input type="email" name="instructor_email" placeholder="email@domain.com" required>
              </div>

              <div class="input-field-img">
                <label>صورة العرض للحملة</label>
                <input type="file" name="img" id="input-img" accept=".jpg, .jpeg, .png" oninput="inputImg()" required>
                <p id="file-Status"></p>
              </div>
            </div>

            <button class="nextBtn" type="submit">
              <span class="btnText">تسجيل</span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="../script/pop-up.js"></script>

</body>


</html>