<?php

if(isset($_SESSION['school_number'])) {

// header put here
                echo "<div class=dropdown>";

                echo "<label>". $_SESSION['name'] ."</label>";

                echo "<form method=post enctype=multipart/form-data>";
                echo "<li><button type=submit name=schaccount class=btn-submit>حسابي</button></li>";
                echo "</form>";

                echo "<form method=post enctype=multipart/form-data>";
                echo "<li><button type=submit name=students class=btn-submit>سجل الطلاب</button></li>";
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