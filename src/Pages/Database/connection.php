<?php
try {
      //Get Heroku ClearDB connection information
      $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
      $cleardb_server = $cleardb_url["host"];
      $cleardb_username = $cleardb_url["user"];
      $cleardb_password = $cleardb_url["pass"];
      $cleardb_db = substr($cleardb_url["path"],1);
      $active_group = 'default';
      $query_builder = TRUE;
    $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

    // $servername = "localhost";
    // $dbusername = "";
    // $dbpassword = "";
    // $dbname = "WG02";

    // // Create a new MySQLi object.
    // $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    
} catch (Exception $e) {
    echo $e;
    echo "Failed to connect to database!";
    die("Connection failed: ");
}
