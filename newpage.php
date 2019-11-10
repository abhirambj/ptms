<?php
  include 'config.php';
 ?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/admin.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <p class="pro">MEMBERS LIST</p>
  <div class="main">
    <table>
    <tr>
        <td> <b>USN</b></td>
        <td><b>STUDENT NAME</b></td>
        <td><b>BRANCH</b></td>
        <td><b>SEM</b></td>
        <td><b>CGPA</b></td>
        <td><b>SKILLS</b></td>
        <td><b>EMAIL</b></td>
        <td><b>PHONE</b></td>
    </tr>



          <?php
          include 'config.php';
          $sql = "SELECT * FROM student order by cgpa desc";
          $res = $conn->query($sql);

          if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
              $usn = $row["usn"];
              $sname = $row["sname"];
              $branch = $row["branch"];
              $sem = $row["sem"];
              $cgpa = $row["cgpa"];
              $skills = $row["skills"];
              $email = $row["email"];
              $phone = $row["phone"];
              $arrr[$usn] = $cgpa;
              echo '<tr>
                      <td>'.$usn.'</td>
                      <td>'.$sname.'</td>
                      <td>'.$branch.'</td>
                      <td>'.$sem.'</td>
                      <td>'.$cgpa.'</td>
                      <td>'.$skills.'</td>
                      <td>'.$email.'</td>
                      <td>'.$phone.'</td>
                    </tr>';
                }
              }
          ?>
      </div>
  </div>
</div>
</body>
</html>
