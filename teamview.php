<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

if (isset($_POST['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php');
}

if (isset($_SESSION['success'])) {
  unset($_SESSION['success']);
}

if(isset($_POST['viewteam'])){
    header('location: edteam.php');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/teamview.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="container">
    <form class="" action="edteam.php" method="post">
    <div class="button2" align:"center">
         <input type="submit" name="viewteam" value="View Teams">
    </div><br>
    </form><br>

    <br>
    <br>
    <form action="teamview.php" method="POST">
    <div class="button2" align="center">
         <input type="submit" name="logout" value="LOGOUT">
    </div>
    </form>
    </div>
    <script>
      alert('Form Sucessfully Submitted Please Wait Till ADMIN Approves Your Application...!');
    </script>
  </body>
</html>
<?php
 ?>
