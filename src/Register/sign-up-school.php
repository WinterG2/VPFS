<?php
//check session
require_once("../Database/sessionZero.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/HomePage.css">
    <link rel="stylesheet" href="../style/sign-up.css">
    <title>تسجيل حساب للمنشأة</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="web-logo">
                <a href="../Homepage/home-page.php">
                    <img class="icon-logo" src="../image/icon-home.png" alt="Home icon">
                </a>
            </div>
        </div>
    </header>
    <div class="container">
        <header>تسجيل حساب للمدرسة</header>

        <form action="school.php" method="post" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">المدرسة</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>اسم المدرسة</label>
                            <input type="text" name="schoolname" placeholder="اسم المدرسة" required>
                        </div>

                        <div class="input-field">
                            <label>هاتف المدرسة</label>
                            <input type="number" name="schoolnumber" placeholder="رقم هاتف المدرسة" pattern="[0-1][0-9]*" minlength="7" maxlength="10" required>
                        </div>

                        <div class="input-field">
                            <label> البريد الالكتروني للمدرسة</label>
                            <input type="email" name="email" placeholder="البريد الالكتروني" required>
                        </div>

                        <div class="input-field">
                            <label>الرمز السرّي</label>
                            <input type="password" name="password" placeholder="الرمز السرّي" required>
                        </div>

                        <div class="input-field">
                            <label>المدينة</label>
                            <input type="text" name="city" placeholder="المدينة" required>
                        </div>


                        <div class="input-field">
                            <label>الحي</label>
                            <input type="text" name="neighborhood" placeholder="الحي" required>
                        </div>

                        <div class="input-field">
                            <label>اسم مدير المدرسة</label>
                            <input type="text" name="schooldeanname" placeholder="اسم مدير المدرسة" required>
                        </div>

                        <div class="input-field">
                            <label>بريد المدير الالكتروني</label>
                            <input type="email" name="schooldeanemail" placeholder="email@domain.com" required>
                        </div>

                        <div class="input-field">
                            <label>عنوان المدرسة</label>
                            <input type="text" name="address" placeholder="عنوان المدرسة" required>
                        </div>

                        <div class="input-field">
                            <label>الرمز البريدي</label>
                            <input type="number" name="zipcode" placeholder="الرمز البريدي" minlength="4" maxlength="10" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">بيانات المرشد الطلابي</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>اسم المرشد الطلابي للمدرسة</label>
                            <input type="text" name="schoolmanagername" placeholder="اسم مرشد المدرسة" required>
                        </div>

                        <div class="input-field">
                            <label>بريد المرشد الالكتروني</label>
                            <input type="email" name="schoolmanageremail" placeholder="email@domain.com" required>
                        </div>

                        <div class="input-field">
                            <label>هاتف المرشد الطلابي</label>
                            <input type="number" name="schoolmanagerphone" placeholder="هاتف المرشد الطلابي" pattern="[0-1][0-9]*" minlength="7" maxlength="10" required>
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">تسجيل</span>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="../script/sign-up.js"></script>
</body>

</html>