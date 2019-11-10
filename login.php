<?php
    include 'config.php';
    if(!empty($_POST['submit'])){
        $sql = "SELECT * from login where username='$_POST[name]' and password='$_POST[pass]'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $priv = $row["privileges"];
            if($priv == 2 || $priv == 1) {
                header('Location: admin.php');
            }
        elseif ($priv == 4){
            header('location: wait.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css" type="text/css">
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
