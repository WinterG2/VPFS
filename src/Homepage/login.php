<?php

  require_once("../Database/sessionZero.php");

  require_once("../Database/connection.php");

  $counter=0;
  $not_exist = "لا يوجد لدينا حساب مسجل بالمعلومات التي أدخلتها! قم بتسجيل حساب جديد أو تواصل مع فريق الدعم الفني!";
  $wrong_pass = "اسم المستخدم أو كلمة المرور خاطئة!";

  if(isset($_POST['submit'])) {
    $username = $_POST['email_ID'];
    $password = $_POST['password'];
    
    
     $searchStu1 = mysqli_query($conn, "SELECT fname, sname, lname, email, nationalID, sex_type, date, phone, city, school_name, school_level, volunteer_hrs, points, gfname, relationship, gphone FROM student WHERE nationalID = '$username'");

     $searchStu2 = mysqli_query($conn, "SELECT fname, sname, lname, email, nationalID, sex_type, date, phone, city, school_name, school_level, volunteer_hrs, points, gfname, relationship, gphone FROM student WHERE email = '$username'");

     $Search_School = mysqli_query($conn, "SELECT name, school_number, email, city, neighborhood, address, zipcode, dean_name, dean_email, manager_name, manager_email, manager_phone FROM school WHERE email = '$username'");

     $Search_Organization = mysqli_query($conn, "SELECT name, organization_number, email, city, neighborhood, organization_type, manager_name, manager_phone, event_manager_name, event_manager_email, event_manager_phone, address, zipcode FROM organization WHERE email = '$username'");


     if (mysqli_num_rows($searchStu1) > 0) {
     $counter++;
     $stmt = $conn->prepare("SELECT password FROM student WHERE nationalID = ?");

     $username = filter_var($username, FILTER_SANITIZE_EMAIL);
     
     // Bind the username to the query
     $stmt->bind_param('s', $username);

    // Execute the query
     $stmt->execute();
     $result = $stmt->get_result();
     $hashed_password = $result->fetch_assoc()['password'];
    

     if (password_verify($password, $hashed_password) == true){

      
      
     
     $result = $searchStu1;
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();


      session_start();
      $_SESSION['nationalID'] = $row['nationalID'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['sname'] = $row['sname'];
      $_SESSION['lname'] = $row['lname'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['sex_type'] = $row['sex_type'];
      $_SESSION['date'] = $row['date'];
      $_SESSION['city'] = $row['city'];
      $_SESSION['school_name'] = $row['school_name'];
      $_SESSION['volunteer_hrs'] = $row['volunteer_hrs'];
      $_SESSION['points'] = $row['points'];
      $_SESSION['school_level']= $row['school_level'];
      $_SESSION['gfname']= $row['gfname'];
      $_SESSION['relationship']= $row['relationship'];
      $_SESSION['phone']= $row['phone'];
      $_SESSION['gphone']= $row['gphone'];
      

      $_SESSION['start_time'] = time();
      header("Location: authenticate.php");
      exit;
    } 
  }
}
 
  
  else if (mysqli_num_rows($searchStu2) > 0) {
     $counter++;
     $stmt = $conn->prepare("SELECT password FROM student WHERE email = ?");

     $username = filter_var($username, FILTER_SANITIZE_EMAIL);
     
     // Bind the username to the query
     $stmt->bind_param('s', $username);

    // Execute the query
     $stmt->execute();
     $result = $stmt->get_result();
     $hashed_password = $result->fetch_assoc()['password'];


     if (password_verify($password, $hashed_password) == true){

      
      
     
     $result = $searchStu2;
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      
      session_start();
      $_SESSION['nationalID'] = $row['nationalID'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['sname'] = $row['sname'];
      $_SESSION['lname'] = $row['lname'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['sex_type'] = $row['sex_type'];
      $_SESSION['date'] = $row['date'];
      $_SESSION['city'] = $row['city'];
      $_SESSION['school_name'] = $row['school_name'];
      $_SESSION['volunteer_hrs'] = $row['volunteer_hrs'];
      $_SESSION['points'] = $row['points'];
      $_SESSION['school_level']= $row['school_level'];
      $_SESSION['gfname']= $row['gfname'];
      $_SESSION['relationship']= $row['relationship'];
      $_SESSION['phone']= $row['phone'];
      $_SESSION['gphone']= $row['gphone'];
      

      $_SESSION['start_time'] = time();
      header("Location: authenticate.php");
      exit;
    } 
  }
  
}

     
     else if (mysqli_num_rows($Search_School) > 0) {
     $counter++;
     $stmt = $conn->prepare("SELECT password FROM school WHERE email = ?");

     $username = filter_var($username, FILTER_SANITIZE_EMAIL);
     
     // Bind the username to the query
     $stmt->bind_param('s', $username);

    // Execute the query
    $stmt->execute();
     $result = $stmt->get_result();
     $hashed_password = $result->fetch_assoc()['password'];


     if (password_verify($password, $hashed_password) == true){

     $result = $Search_School;
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
  


      session_start();
      $_SESSION['email'] = $row['email'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['school_number'] = $row['school_number'];
      $_SESSION['city'] = $row['city'];
      $_SESSION['neighborhood'] = $row['neighborhood'];
      $_SESSION['address'] = $row['address'];
      $_SESSION['zipcode'] = $row['zipcode'];
      $_SESSION['dean_name'] = $row['dean_name'];
      $_SESSION['dean_email'] = $row['dean_email'];
      $_SESSION['manager_name'] = $row['manager_name'];
      $_SESSION['manager_email'] = $row['manager_email'];
      $_SESSION['manager_phone'] = $row['manager_phone'];



      $_SESSION['start_time'] = time();
      header("Location: home-page.php");
      exit;
    
    }
  }
}


  
  else if (mysqli_num_rows($Search_Organization) > 0) {
    $counter++;

     $stmt = $conn->prepare("SELECT password FROM organization WHERE email = ?");

     $username = filter_var($username, FILTER_SANITIZE_EMAIL);
     
     // Bind the username to the query
     $stmt->bind_param('s', $username);

    // Execute the query
    $stmt->execute();
     $result = $stmt->get_result();
     $hashed_password = $result->fetch_assoc()['password'];


     if (password_verify($password, $hashed_password) == true){

     $result = $Search_Organization;
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
  

      session_start();
      $_SESSION['email'] = $row['email'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['organization_number'] = $row['organization_number'];
      $_SESSION['city'] = $row['city'];
      $_SESSION['neighborhood'] = $row['neighborhood'];
      $_SESSION['organization_type'] = $row['organization_type'];
      $_SESSION['manager_name'] = $row['manager_name'];
      $_SESSION['manager_phone'] = $row['manager_phone'];
      $_SESSION['event_manager_name'] = $row['event_manager_name'];
      $_SESSION['event_manager_email'] = $row['event_manager_email'];
      $_SESSION['event_manager_phone'] = $row['event_manager_phone'];
      $_SESSION['address'] = $row['address'];
      $_SESSION['zipcode'] = $row['zipcode'];

      $_SESSION['start_time'] = time();
      header("Location: home-page.php");
      exit;
    
    }
    
  }

} else {
  
 if ($counter == 0){

   echo "<script>alert('$not_exist');</script>";
  //  echo $counter;
   echo "<script>window.location ='../../index.php';</script>";

 }

}

if ($counter == 1){

  echo "<script>alert('$wrong_pass');</script>";
  // echo $counter;
  echo "<script>window.location ='../../index.php';</script>";

}

 
 
    

    $conn->close();
} else {
  echo "Broken -- We are working to fix it";
}
?>



