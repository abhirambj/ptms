<?php
  include'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <script src="https://kit.fontawesome.com/97b5c19c43.js" crossorigin="anonymous"></script>
    <title>WELCOME ADMIN</title>
</head>
<body>
<div class="container">
      <div class="main">
            <table>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Privileges</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM login where privileges=4";
                if ($result = $conn->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        $username = $row["username"];
                        $email = $row["email"];
                        $password = $row["password"];
                        $privileges = $row["privileges"];
                        echo '<tr>
                                  <td>'.$username.'</td>
                                  <td>'.$email.'</td>
                                  <td>'.$password.'</td>
                                  <td>'.$privileges.'</td>
                                  <td><a href="edit.php?edited=1&id='.$username.'">Edit</a></td>
                                  <td><a href="admin.php?deleted=1&id='.$username.'">Delete</a></td>';
                    }
                    $result->free();
                }
                if(isset($_GET['deleted'])){
                    $del = "delete from login where username = '{$_GET['id']}'";
                    if(mysqli_query($conn, $del)){
                        echo "<script>alert('deleted successfully');</script>";
                        // header('location:admin.php');
                        echo'<script type="text/javascript">
                        window.location.href = "admin.php";
                        </script>';
                    }
                    else{
                        echo "could not execute $del.".mysqli_error($conn);
                    }
                }
                ?>
            </table>
              </div>
        </div>
</body>
</html>
