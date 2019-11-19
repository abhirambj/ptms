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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/faculty.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/97b5c19c43.js" crossorigin="anonymous"></script>
    <title>Project Details</title>
</head>
<body>
    <div class="container">
        <span class="pro">FACULTY DETAILS</span>
        <div class="main">

            <table style="width:100%">
                <tr>
                    <th>Faculty ID</th>
                    <th>Faculty Name</th>
                    <th>Faculty Branch</th>
                    <th>Faculty Intrest</th>
                    <th>Faculty Experience</th>
                    <th>Faculty E-mail</th>
                    <th>Faculty Phone</th>
                </tr>
                <?php
                $sql = "SELECT * FROM faculty";
                if ($result = $conn->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        $fid = $row["fid"];
                        $fname = $row["fname"];
                        $branch = $row["branch"];
                        $intrest = $row["intrest"];
                        $exp = $row["exp"];
                        $email = $row["email"];
                        $phone = $row["phone"];
                        echo '<tr>
                                  <td>'.$fid.'</td>
                                  <td>'.$fname.'</td>
                                  <td>'.$branch.'</td>
                                  <td>'.$intrest.'</td>
                                  <td>'.$exp.'</td>
                                  <td>'.$email.'</td>
                                  <td>'.$phone.'</td>
                                  <td><a href="editfac.php?edited=1&id='.$fid.'">Edit</a></td>
                                  <td><a href="faculty.php?deleted=1&id='.$fid.'">Delete</a></td>
                              </tr>';
                    }
                    $result->free();
                }
                if(isset($_GET['deleted'])){
                    $del = "delete from faculty where fid = '{$_GET['id']}'";
                    if(mysqli_query($conn, $del)){
                        echo "<script>alert('deleted successfully');</script>";
                        echo'<script type="text/javascript">
                        window.location.href = "faculty.php";
                        </script>';
                    }
                    else{
                        echo "could not execute $del.".mysqli_error($conn);
                    }
                }
                ?>
            </table>
            <form action="login.php" method="POST" align="center">
                <input type="submit" name="logout" value="Logout" >
            </form>
            <form action="edteam.php" method="POST" align="center">
                <input type="submit" name="team" value="Teams">
            </form> 
        </div>
    </div>
</body>
</html>
