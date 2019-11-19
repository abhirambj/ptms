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
if (isset($_GET['edited'])) {
    $ed = "SELECT * from faculty where fid = '{$_GET['id']}'";
    $resulted = mysqli_query($conn, $ed);
    $row = $resulted->fetch_assoc();
    $fid = $row['fid'];
    $fname = $row["fname"];
    $branch = $row["branch"];
    $intrest = $row["intrest"];
    $exp = $row["exp"];
    $email = $row["email"];
    $phone = $row["phone"];
  }

  if (isset($_POST['update'])) {
    $fid = $_POST['fid'];
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $intrest = mysqli_real_escape_string($conn, $_POST['intrest']);
    $exp = mysqli_real_escape_string($conn, $_POST['exp']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $up = "UPDATE faculty SET fname='$fname',branch='$branch',intrest='$intrest', exp ='$exp', email='$email', phone='$phone' WHERE fid='$fid'";
    if(mysqli_query($conn, $up)){
      header('location: faculty.php');
    }
    else {
      echo "could not exexcute $up.".mysqli_error($conn);
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/faculty.css">
    <script src="https://kit.fontawesome.com/97b5c19c43.js" crossorigin="anonymous"></script>
    <title>Edit Here</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <table style="width:100%">
                <tr>
                    <th>fid</th>
                    <th>fname</th>
                    <th>branch</th>
                    <th>intrest</th>
                    <th>exp</th>
                    <th>email</th>
                    <th>phone</th>
                </tr>
                <tr>
                    <form action="editfac.php" method="POST">
                    <td><input type="hidden" name="fid" value="<?php echo $fid; ?>"><?php echo $fid; ?></td>
                    <td><input type="text" name="fname" value="<?php echo $fname; ?>"></td>
                    <td><input type="text" name="branch" value="<?php echo $branch; ?>"></td>
                    <td><input type="text" name="intrest" value="<?php echo $intrest; ?>"></td>
                    <td><input type="text" name="exp" value="<?php echo $exp; ?>"></td>
                    <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
                    <td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
                    <td><input type="submit" class="update" value="Update" name="update"></td>
                    </form>
                  </tr>
                </table>


        </div>
    </div>
</body>
</html>
