<?php

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

    echo "<form method=post enctype=multipart/form-data>";
    echo "<li><button type=submit name=logout class=btn-submit>تسجيل الخروج</button></li>";
    echo "</form>";
    
    echo "</div>";


    if ((time() - $_SESSION['start_time']) > 600) {
      session_start();
      session_destroy();
      header("Location: ../../index.php");
      
    }
  }



?>

