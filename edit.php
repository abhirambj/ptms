<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php');
}

if (isset($_SESSION['success'])) {
  unset($_SESSION['success']);
}

if (isset($_POST['update'])) {

  $username = mysqli_real_escape_string($conn, $_POST['usrname']);
  $privileges = mysqli_real_escape_string($conn, $_POST['priveleges']);
  $up = "UPDATE login SET privileges='$privileges' WHERE username='$username'";
  if(mysqli_query($conn, $up)){
    header('location: admin.php');
  }
  else {
    echo "could not exexcute $up.".mysqli_error($conn);
  }
}

if (isset($_GET['edited'])) {
  $ed = "SELECT username,email,password,privileges from login where username = '{$_GET['id']}'";
  $resulted = mysqli_query($conn, $ed);
  $row = $resulted->fetch_assoc();
  $username = $row['username'];
  $email = $row['email'];
  $password = $row['password'];
  $privileges = $row['privileges'];
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <script src="https://kit.fontawesome.com/97b5c19c43.js" crossorigin="anonymous"></script>
    <title>Edit Here</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <table style="width:100%">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Privileges</th>
                </tr>
                <tr>
                    <form  action="edit.php" method="POST">
                    <td><input type="hidden" name="usrname" value="<?php echo $username; ?>"><?php echo $username; ?></td>

                    <td><?php echo $email; ?></td>

                    <td><?php echo $password; ?></td>

                    <td><input type="text" name="priveleges" value="<?php echo $privileges; ?>"></td>
                    <td><input type="submit" value="Update" name="update"></td>
                    </form>
                  </tr>
                </table>


        </div>
    </div>
</body>
</html>
