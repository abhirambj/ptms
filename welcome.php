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
      if(isset($_POST['submit'])){
        $sql = "INSERT INTO student (usn, sname, branch, sem, cgpa, skills, email, phone) VALUES ('$_POST[usn]','$_POST[sname]','$_POST[branch]','$_POST[sem]','$_POST[cgpa]','$_POST[skills]','$_POST[email]','$_POST[phone]')";
        if ($conn->query($sql) === TRUE)
        {
          header('Location: teamview.php');
        }
      }
      $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>WELCOME</title>
</head>
<body>
    <div class="container">
        <div class="signup-box">
            <div class="title">
                REGISTER YOUR ENTRY HERE
            </div>
            <form action="welcome.php" method="post">
                <div class="row">
                    <br>
                    <br>
                    <div class="col">
                     <div class="textboxtop">
                         <input type="text" name="usn" placeholder="USN" required/>
                        </div>
                     </div>
                </div>
            <div class="textbox">
                  <input type="text" placeholder="Student Name" name="sname" required/>
             </div>
             <div class="textbox">
                  <input type="text" placeholder="Branch" name="branch" required/>
                </div>
             <div class="textbox">
                  <input type="text" name="sem" placeholder="Semester" required/>
             </div>
             <div class="textbox">
                  <input type="text" placeholder="Student CGPA" name="cgpa" required/>
             </div>
             <div class="textbox">
                  <input type="text" placeholder="Student Skills" name="skills" required/>
             </div>
             <div class="textbox">
                  <input type="email" placeholder="Student E-mail" name="email" required/>
             </div>
             <div class="textbox">
                  <input type="text" placeholder="Phone Number" name="phone" required/>
             </div>
             <div class="button" align="center">
                  <input type="submit" name="submit" value="REGISTER">
            </div>
          </form>
          <form class="" action="" method="post">
            <div class="button" align="center">
                  <input type="submit" name="logout" value="LOGOUT">
            </div>
          </form>
          <form class="" action="edteam.php" method="post">
            <div class="button" align="center">
              <input type="submit" name="viewteam" value="VIEW TEAMS">
            </div>
          </form>
        </div>
    </div>
</body>
</html>
