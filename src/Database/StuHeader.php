<?php

if(isset($_SESSION['nationalID'])) {
    
    // header put here
                   echo "<div class=dropdown>";

                   echo "<label>". $_SESSION['fname'] ."  ". $_SESSION['lname']."</label>";

                   echo "<label>"."  الساعات التطوعية:    ".$_SESSION['volunteer_hrs']." ساعة</label>";

                   echo "<label>"."  النقاط:     ".$_SESSION['points']." نقطة</label>";

                  echo "<form method=post enctype=multipart/form-data>";
                  echo "<li><button type=submit name=stuaccount class=btn-submit>حسابي</button></li>";
                  echo "</form>";

                  echo "<form method=post enctype=multipart/form-data>";
                  echo "<li><button type=submit name=stuevent class=btn-submit>حملاتي</button></li>";
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