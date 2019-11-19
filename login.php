<?php
    include 'config.php';
    session_start();
    if(!empty($_POST['submit'])){
        $sql = "SELECT * from login where username='$_POST[name]' and password='$_POST[pass]'";
        $username = $_POST['name'];
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $priv = $row["privileges"];
            if($priv == 1) {
                $_SESSION['username'] = $_POST['name'];
                $_SESSION['prv'] = $priv;
                $_SESSION['success'] = "you have logged in";
                header('location: admin.php');
            }
            else if ($priv == 2) {
                $_SESSION['username'] = $_POST['name'];
                $_SESSION['prv'] = $priv;
                $_SESSION['success'] = "you have logged in";
                header('location: faculty.php');
            }
            else if ($priv == 3) {
                $_SESSION['username'] = $_POST['name'];
                $_SESSION['prv'] = $priv;
                $_SESSION['success'] = "YOU have logged in";
                header('location: welcome.php');
            }
            else if ($priv == 4){
                $_SESSION['username'] = $_POST['name'];
                $_SESSION['prv'] = $priv;
                $_SESSION['success'] = "you have logged in";
                echo "<script>alert('Wait Till The Admin AUTHENTICATES YOU...!!!')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="signup-box">
            <div class="title">
                LOGIN
            </div>
            <form action="" method="post">
              <div class="row">
                  <br>
                  <br>
                  <div class="col">
                      <div class="textboxtop">
                         <input type="text" placeholder="Username" name="name" required/>
                      </div>
                  </div>
              </div>
              <div class="textbox">
                 <input type="password" name="pass" placeholder="Password" required/>
             </div>
              <div class="button" align="center">
                 <input type="submit" name="submit" value="LOGIN">
                 <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
              </div>
            </form>
          </div>
     </div>
  </body>
</html>
