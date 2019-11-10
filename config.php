<?php
$edit_state = false;

$conn = mysqli_connect('localhost', 'root', '', 'team');



if (isset($_POST['btnsave'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $privileges = $_POST['privileges'];
  $query = "INSERT into login (username,email,password,privileges) values ('$username','$email','$password','$privileges')";
  if(mysqli_query($conn,$query)){
    header('location:admin.php');
  }
  else{
    echo mysqli_error($conn);
  }
}



if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
 }
?>
