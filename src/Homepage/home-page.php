<?php
  session_start();

// student header
require_once("../Database/StuHeader.php");
// school header
require_once("../Database/SchHeader.php");
// organization header
if(isset($_SESSION['organization_number'])) {

    // header put here
    echo "<div class=dropdown>";

    echo "<label>". $_SESSION['name'] ."</label>";

    echo "<form method=post enctype=multipart/form-data>";
    echo "<li><button type=submit name=orgaccount class=btn-submit>حسابي</button></li>";
    echo "</form>";

    echo "<form method=post enctype=multipart/form-data>";
    echo "<li><button type=submit name=event class=btn-submit>سجل الحملات</button></li>";
    echo "</form>";

    echo "<li><button class=btn-submit onclick=pop_up()>اضافة حدث</button></li>";

    echo "<form method=post>";
    echo "<li><button type=submit name=logout class=btn-submit>تسجيل الخروج</button></li>";
    echo "</form>";
    
    echo "</div>";

    if ((time() - $_SESSION['start_time']) > 600) {
        session_start();
        session_destroy();
        header("Location: home-page.php");
        
      }

  }

?>

<?php
      if(isset($_POST['logout'])) {
        session_destroy();
        header("Location: home-page.php");
        exit;
      }
      if(isset($_POST['stuevent'])) {
        header("Location: ../Tables/Student_TB.php");
        exit;
      }
      if(isset($_POST['event'])) {
        header("Location: ../Tables/Organization_TB.php");
        exit;
      }

      if(isset($_POST['students'])) {
        header("Location: ../Tables/School_TB.php");
        exit;
      }
      if(isset($_POST['orgaccount'])) {
        header("Location: ../Database/OrgAccount.php");
        exit;
      }
      if(isset($_POST['schaccount'])) {
        header("Location: ../Database/SchAccount.php");
        exit;
      }
      if(isset($_POST['stuaccount'])) {
        header("Location: ../Database/StuAccount.php");
        exit;
      }
     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/addEvent.css">
    <link rel="stylesheet" href="../style/HomePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNB:\Uni\499\github\VPFS\src\home-page\image\background.jpgQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>منصة التطوعية للطلاب</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="navbar">
                <div class="web-logo">
                    <a href="home-page.php">
                        <img class="icon-logo" src="../image/icon-home.png" alt="Home icon">
                    </a>
                </div>
                <div class="searchbar">
                    <input type="text" name="search" id="search" class="search"><!-- TODO onkey function -->
                    <i onclick="searchEvent()" class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="btn">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <div class="dropdown">

                <form action="login.php" method="post" enctype="multipart/form-data">
                    <label class="dropdown-label">البريد الاكتروني أو الهوية الوطنية</label>
                    <li><input type="username" name="email_ID" class="input-field" required></li>

                    <label class="dropdown-label">&nbsp; الرمز السري</label>
                    <li><input type="password" name="password" class="input-field" required></li>

                    <li><button type="submit" name="submit" class="btn-submit">تسجيل دخول</button></li>
                    <li><a href="../Register/sign-up.php" class="btn-submit">تسجيل </a></li>
                </form>

            </div>
        </header>

        <div class="home-banner">
            <img src="../image/Banner.png" alt="Home Banner">
        </div>


        <div class="event-lists" id="events-list">
            <div class="background"></div>
            <div class="event-list" id="events-cards"></div>
            <!-- Footer -->
            <div class="tabs">
                <button class="tab-button" id="prevBtn" onclick="changeTab('prevBtn')" disabled>السابق</button>
                <button class="tab-button" id="firstBtn" onclick="changeTab('firstBtn')">1</button>
                <button class="tab-button" id="secondBtn" onclick="changeTab('secondBtn')">2</button>
                <button class="tab-button" id="thirdBtn" onclick="changeTab('thirdBtn')">3</button>
                <button class="tab-button" id="fourthBtn" onclick="changeTab('fourthBtn')">4</button>
                <button class="tab-button" id="fifthBtn" onclick="changeTab('fifthBtn')">5</button>
                <button class="tab-button" id="nextBtn" onclick="changeTab('nextBtn')">التالي</button>
            </div>
        </div>
        <div class="sub-container" id="sub-container">
        </div>

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
                                    <input type="date" name="start_date" id="restrictDate" onchange="restreictDate2()"
                                        required>
                                </div>

                                <div class="input-field">
                                    <label>تاريخ نهاية الحملة</label>
                                    <input type="date" name="end_date" id="restrictDate2" required>
                                </div>

                                <div class="input-field">
                                    <label>رابط قوقل ماب لمكان التجمع</label>
                                    <input type="text" name="google_map_link"
                                        placeholder="رابط مكان التجمع عن طريق قوقل ماب" required>
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
                                    <input type="number" name="number_required" min="1" max="999" placeholder="999 - 0"
                                        required>
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
                                    <input type="number" name="instructor_phone" placeholder="********05"
                                        pattern="[05][0-9]*" required>
                                </div>

                                <div class="input-field">
                                    <label>بريد المشرف الاكتروني</label>
                                    <input type="email" name="instructor_email" placeholder="email@domain.com" required>
                                </div>

                                <div class="input-field-img">
                                    <label>صورة العرض للحملة</label>
                                    <input type="file" name="img" id="input-img" accept=".jpg, .jpeg, .png"
                                        oninput="inputImg()" required>
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
            <script src="../script/pop-up.js"></script>
        </div>
    </div>
    </div>
    <footer>
        <p>Developed By WG2 Group</p>
        <p>FCIT Senior Project 2023</p>
    </footer>
    <script src="../script/event.js"></script>
    <script src="../script/script.js"></script>
</body>

</html>