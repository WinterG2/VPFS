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
    <link rel="stylesheet" href="../style/SignUpWrapper.css">
    <title>تسجيل حساب</title>
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
    <div class="wrapper">
        <div class="warpper-student">
            <a class="card" href="sign-up-student.php">
                <div class="card-content">
                    <div class="warpper-icon">
                        <img class="img" style="width: 50%;" src="../image/icon-student.png" alt="Student icon">
                    </div>
                    <div class="card-header" style="background: #a3a3a3;">
                        <p class="card-text">طالب</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="warpper-school">
            <a class="card" href="sign-up-school.php">
                <div class="card-content">
                    <div class="warpper-icon">
                        <img class="img" style="width: 50%;" src="../image/icon-school.png" alt="Guardian icon">
                    </div>
                    <div class="card-header" style="background: #a3a3a3;">
                        <p class="card-text">مدرسة</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="warpper-org">
            <a class="card" href="sign-up-org.php">
                <div class="card-content">
                    <div class="warpper-icon">
                        <img class="img" style="width: 50%;" src="../image/icon-organization.png" alt="Guardian icon">
                    </div>
                    <div class="card-header" style="background: #a3a3a3;">
                        <p class="card-text">منشأة</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>

</html>