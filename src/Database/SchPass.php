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


  <header>
    <table class="stu-table">
      <thead>
        <tr>
          <th style=text-align:center>تغيير الرمز السرّي</th>
        </tr>

      </thead>


      
  </header>

    <h1>معلومات الحساب</h1>
    <table class=stu-table>
    <form method="post" enctype="multipart/form-data">
    <tr>
    <td><label>أدخل الرمز السرّي:   </label><input type="password" class="input-field" name="old_pass"></td>
    </tr>
    <tr>
    <td><label>أدخل الرمز السرّي الجديد:   </label><input type="password" class="input-field" name="new_pass"></td>
    </tr>
    <tr>
    <td><label>أعد إدخال الرمز السرّي الجديد:   </label><input type="password" class="input-field" name="re_new_pass"></td>
    </tr>
    <tr>
    <td><li><button type=submit name=save class=but>تغيير</button></li></td>
    </tr>
    </form>

  <?php

  require_once('../Database/connection.php');

  $wrong_pass = "الرمز السرّي خاطئ!";
  $nomatch_pass = "الرمز السرّي الذي أعدت إدخاله غير متطابق!";
  $suceess = "تم تغيير الرمز السرّي بنجاح!!";

  $schname = $_SESSION['name'];


  $my_query = mysqli_query($conn, "SELECT password FROM school WHERE name=   '{$schname}' ");
  $hashed_password = $my_query->fetch_assoc()['password'];

  if(isset($_POST['save'])) {

    $old = $_POST["old_pass"];
    $new = $_POST["new_pass"];
    $re_new = $_POST["re_new_pass"];

    if (password_verify($old, $hashed_password) == true){

    if ($new == $re_new){
        
        
        $new_pass = password_hash($re_new, PASSWORD_DEFAULT);

        $update = "update school set password= '$new_pass' WHERE name='" . $schname . "'";
        $conn->query($update);

        if ($conn->query($update) === TRUE) {
            echo "password updated successfully";
            echo "<script>alert('$suceess');</script>";
            echo "<script>window.location ='SchPass.php';</script>";

            } else {
            echo "Error: " . $update . "<br>" . $conn->error;
          }

    }
    else {

        echo "<script>alert('$nomatch_pass');</script>";
        echo "<script>window.location ='SchPass.php';</script>";
    }


  }else{
    echo "<script>alert('$wrong_pass');</script>";
    echo "<script>window.location ='SchPass.php';</script>";

  }
}

 ?>

 

</tbody>

</table>

<script src="../script/script.js"></script>
  <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
</body>


</html>