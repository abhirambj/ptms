<?php
  include 'config.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/members.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
<div class="container">
    <p class="pro">MEMBERS LIST</p>
  <div class="main">
    <div class="search-box">
      <form action="members.php" method="post" align="center">
        <input class="search-txt" type="text" name="usntosearch" placeholder="Enter USN to Search">
        <input type="submit" name="search" value="Search">
      </form>
    </div> 
    <table><br><br><br><br>
    <tr>
        <td><b>TEAM NUMBER</b></td>
        <td><b>USN</b></td>
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
          if(isset($_POST['search'])) {
            $usntosearch = $_POST['usntosearch'];
            $query = "call student_sort('$usntosearch')";
            if($search_result = mysqli_query($conn,$query)){
              while($row = $search_result->fetch_assoc()){
                      $tno = $row['tno'];
                      $usn = $row["usn"];
                      $sname = $row["sname"];
                      $branch = $row["branch"];
                      $sem = $row["sem"];
                      $cgpa = $row["cgpa"];
                      $skills = $row["skills"];
                      $email = $row["email"];
                      $phone = $row["phone"];
                echo '<tr>
                       <td>'.$tno.'</td>
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
          } 
          else{
          $sql = "SELECT * FROM student order by cgpa desc";
          $res = $conn->query($sql);
          if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
              $tno = $row['tno'];
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
                      <td>'.$tno.'</td>
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
            } 
          ?>
          </table>
          <form action="index.html" method="POST" align="center">
            <input type="submit" name="home" value="Home">
          </form>
      </div>
  </div>
</div>
</body>
</html>
