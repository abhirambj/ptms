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
  /* echo $_SESSION['success'];  */
  unset($_SESSION['success']);
}

if(isset($_SESSION['prv']) == '2'){
if (isset($_POST['update'])) {

  $tid = mysqli_real_escape_string($conn, $_POST['tid']);
  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $second = mysqli_real_escape_string($conn, $_POST['second']);
  $third = mysqli_real_escape_string($conn, $_POST['third']);
  $fourth = mysqli_real_escape_string($conn, $_POST['fourth']);
  $tlead = mysqli_real_escape_string($conn, $_POST['tlead']);
  $up = "UPDATE team SET first='$first',second = '$second',third = '$third',fourth = '$fourth',tlead = '$tlead' WHERE tid=$tid";
  if(mysqli_query($conn, $up)){
    header('location: team.php');
  }
  else {
    echo "could not exexcute $up.".mysqli_error($conn);
  }
}
if (isset($_GET['edited'])) {

  $ed = "SELECT * from team where tid = '{$_GET['id']}'";
  $resulted = mysqli_query($conn, $ed);
  $row = $resulted->fetch_assoc();
  $tid = $row['tid'];
  $first = $row['first'];
  $second = $row['second'];
  $third = $row['third'];
  $fourth = $row['fourth'];
  $tlead = $row['tlead'];
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/editteam.css">
    <script src="https://kit.fontawesome.com/97b5c19c43.js" crossorigin="anonymous"></script>
    <title>Edit Here</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <table style="width:100%">
                <tr>
                    <th>Team Number</th>
                    <th>First</th>
                    <th>Second</th>
                    <th>Third</th>
                    <th>Fourth</th>
                    <th>Team Leader</th>
                </tr>
                <tr>
                    <form  action="editteam.php" method="POST">
                    <td><input type="hidden" name="tid" value="<?php echo $tid; ?>"><?php echo $tid; ?></td>

                    <td><input type="text" name="first" value="<?php echo $first; ?>"></td>
                    <td><input type="text" name="second" value="<?php echo $second; ?>"></td>
                    <td><input type="text" name="third" value="<?php echo $third; ?>"></td>
                    <td><input type="text" name="fourth" value="<?php echo $fourth; ?>"></td>
                    <td><input type="text" name="tlead" value="<?php echo $tlead; ?>"></td>
                    <td><input type="submit" value="Update" name="update"></td>
                    </form>
                  </tr>
                </table>
                <form action="login.php" align="center">
                  <input class="log" type="submit" value="Logout" name="logout">
                </form>
                <form action="team.php" align="center">
                  <input class="log" type="submit" value="Back" name="back">
                </form>
        </div>
    </div>
</body>
</html>
