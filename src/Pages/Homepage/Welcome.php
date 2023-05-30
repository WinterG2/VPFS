<?php
  session_start();
  if(!isset($_SESSION['email']) || (time() - $_SESSION['start_time']) > 10) {
    session_destroy();
    header("Location: home-page.html");
    exit;
  }
?>
<html>
  <head>
    <title>مرحبًا بك يا  <?php echo $_SESSION['name'];?>!</title>
  </head>
  <body>
    <h1>مرحبًا بك يا <?php  echo $_SESSION['name'];?>!</h1>
    
    <form method="post">
      <input type="submit" name="logout" value="تسجيل الخروج">
    </form>
    <?php
      if(isset($_POST['logout'])) {
        session_destroy();
        header("Location: home-page.html");
        exit;
      }
    ?>
  </body>
</html>