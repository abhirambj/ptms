<?php
    include 'config.php';
        if(!empty($_POST['submit'])){
        if($_POST['pass'] === $_POST['pass2']){
        $sql = "INSERT INTO login(username, email, password) VALUES ('$_POST[name]','$_POST[email]','$_POST[pass]')";
        $conn->query($sql);
        header("location: login.php");
        }
        else{
            echo "<script>alert('failed');</script>";
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
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <div class="signup-box">
            <div class="title">
                CREATE ACCOUNT
            </div>
            <form action="register.php" method="post">
                <div class="row">
                    <br>
                    <br>
                    <div class="col">
                     <div class="textboxtop">
                         <input type="text" name="name" placeholder="Username" value="<?php echo $username; ?>" required/>
                        </div>
                 </div>
                </div>
                <div class="textbox">
                  <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" required/>
             </div>
             <div class="textbox">
                  <input type="password" placeholder="Password" name="pass" value="<?php echo $pass; ?>" required/>
                </div>
             <div class="textbox">
                  <input type="password" name="pass2" placeholder="Re-type Password" value="<?php echo $pass2; ?>" required/>
             </div>
             <div class="button" align="center">
                  <input type="submit" name="submit" value="SIGN UP">
                  <p>Already have an account? <a href="login.php">Login Here</a>.</p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>