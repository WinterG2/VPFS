<?php


$uname = $_GET["u_name_tb"];
$upass = $_GET["u_pass_tb"];
$fname = $_GET["u_fname_tb"];
$lname = $_GET["u_lname_tb"];
$hidden_uname = $_GET["u_name_tb_copy"];




$my_query = "update school set uname='$uname', upass='$upass', fname='$fname', lname='$lname' where uname='" . $hidden_uname . "'";



$result = $con->query($my_query);



?>