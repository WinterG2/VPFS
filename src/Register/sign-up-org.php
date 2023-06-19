<!-- Update DATABASE NAME VARIABLE -->
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
        <header>تسجيل حساب للمنشأة</header>

        <form action="organization.php" method="post" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">المنشأة</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>اسم المنشأة</label>
                            <input type="text" name="name" placeholder="اسم المنشأة" required>
                        </div>

                        <div class="input-field">
                            <label>هاتف المنشأة</label>
                            <input type="number" name="orgnumber" placeholder="رقم هاتف المنشأة" pattern="[0-1][0-9]*" minlength="7" maxlength="10" required>
                        </div>

                        <div class="input-field">
                            <label>البريد الالكتروني</label>
                            <input type="email" name="email" placeholder="البريد الالكتروني" required>
                        </div>

                        <div class="input-field">
                            <label>الرمز السرّي</label>
                            <input type="password" name="password" placeholder="الرمز السرّي" required>
                        </div>

                        <div class="input-field">
                            <label>اختار قطاع الشركة</label>
                            <select name="orgtype" required>
                                <option disabled selected>القطاع</option>
                                <option>حكومي</option>
                                <option>خاص</option>
                            </select>
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
                            <label>اسم مدير المنشأة</label>
                            <input type="text" name="orgmanager" placeholder="اسم مدير المنشأة" required>
                        </div>

                        <div class="input-field">
                            <label>رقم مدير المنشأة</label>
                            <input type="number" name="orgmanagerphone" placeholder="رقم مدير المنشأة" pattern="[0-5][0-9]*" minlength="10" maxlength="10" required>
                        </div>
                    </div>
                </div>

                <div class="details personal">
                    <span class="title">بيانات المسؤول عن الحملات التطوعية</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>اسم المسؤول عن الحملات</label>
                            <input type="text" name="orgeventmanager" placeholder="اسم المسؤول" required>
                        </div>

                        <div class="input-field">
                            <label>البريد الالكتروني</label>
                            <input type="text" name="orgeventmanageremail" placeholder="البريد الالكتروني" required>
                        </div>

                        <div class="input-field">
                            <label>اسم المسؤول عن الحملات</label>
                            <input type="number" name="orgeventmanagerphone" placeholder=" رقم المسؤول" pattern="[0-5][0-9]*" minlength="10" maxlength="10" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title"> عنوان المنشأة</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>عنوان المنشأة</label>
                            <input type="text" name="address" placeholder="عنوان المنشأة" required>
                        </div>

                        <div class="input-field">
                            <label>الرمز البريدي</label>
                            <input type="number" name="zipcode" placeholder="الرمز البريدي" minlength="4" maxlength="10" required>
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