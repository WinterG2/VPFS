<?php
//check session
require_once("../Database/sessionZero.php");
?>

<!-- TODO FETCH SCHOOL NAME -->

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
        <header>تسجيل حساب للطالب</header>

        <form action="./student.php" method="post" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">الطالب</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>اسم الاول</label>
                            <input type="text" name="fname" placeholder="اسم الاول" required>
                        </div>

                        <div class="input-field">
                            <label>اسم الاب</label>
                            <input type="text" name="sname" placeholder="اسم الاب" required>
                        </div>


                        <div class="input-field">
                            <label>اسم العائلة</label>
                            <input type="text" name="lname" placeholder="اسم العائلة" required>
                        </div>

                        <div class="input-field">
                            <label>البريد الاكتروني</label>
                            <input type="text" name="email" placeholder="البريد الاكتروني" required>
                        </div>

                        <div class="input-field">
                            <label>الرمز السرّي</label>
                            <input type="password" name="password" placeholder="الرمز السرّي" required>
                        </div>

                        <div class="input-field">
                            <label>الهوية الوطنية</label>
                            <input type="number" name="nationalID" placeholder="رقم الهوية الوطنية" pattern="[1-2][0-9]*" minlength="10" maxlength="10" required>
                        </div>

                        <div class="input-field">
                            <label>اختار الجنس</label>
                            <select name="sextype" required>
                                <option disabled selected>الجنس</option>
                                <option>ذكر</option>
                                <option>أنثى</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>تاريخ الميلاد</label>
                            <input type="date" name="date" required>
                        </div>

                        <div class="input-field">
                            <label>المدينة</label>
                            <input type="text" name="city" placeholder="المدينة" required>
                        </div>

                        <div class="input-field">
                            <label>رقم الجوال</label>
                            <input type="number" name="phone" placeholder="رقم الجوال" pattern="[05][0-9]*" required>
                        </div>

                        <div class="input-field">
                            <label>اسم المدرسة</label>
                            <select id="schoolname" name="schoolname" required>
                                <option disabled selected>اسم المدرسة</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>السنة الدراسية</label>
                            <select name="schoollevel" required>
                                <option disabled selected>السنة الدراسية</option>
                                <option>أول ثانوي</option>
                                <option>ثاني ثانوي</option>
                                <option>ثالث ثانوي</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>رقم الطالب</label>
                            <input type="number" name="idschool" placeholder="رقم الطالب" required>
                        </div>
                    </div>

                    <div class="details ID">
                        <span class="title">بيانات ولي أمر</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>اسم ولي </label>
                                <input type="text" name="gfname" placeholder="اسم ولي الامر كامل" required>
                            </div>

                            <div class="input-field">
                                <label>العلاقة بين الطالب وولي الامر</label>
                                <input type="text" name="relationship" placeholder="نوع العلاقة" required>
                            </div>

                            <div class="input-field">
                                <label>رقم الجوال لولي الامر</label>
                                <input type="number" name="gphone" placeholder="رقم الجوال" pattern="[05][0-9]*" required>
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