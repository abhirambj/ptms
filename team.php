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
  echo $_SESSION['success'];
  unset($_SESSION['success']);
}
 /* if(isset($_GET['team'])){  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/team.css">
  <title></title>
</head>
<body>
    <div class="container">
      <div class="main">
        <?php
        ini_set('display_errors','Off');
        ini_set('error_reporting', E_ALL );
        define('WP_DEBUG', false);
        define('WP_DEBUG_DISPLAY', false);
        $sql = "SELECT * FROM student order by cgpa desc";
        $res = $conn->query($sql);
        $arrr = array();
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $username = $row["usn"];
                $cgpa = $row["cgpa"];
                $arrr[$username] = $cgpa;
            }
        }
        $teams = array(
            array(),
            array(),
            array(),
            array()
        );

        function ascend($a, $b) {
        if($a == $b) return 0;
          return ($a < $b) ? -1 : 1;
        }

        sort($arrr, ascend);
        $arr = array_values($arrr);
        $len = sizeof($arr);
        $set_size = ($len - $len % 4) / 4;

        // Divide into teams
        for($i = 0; $i < 4; $i++) {
          for($j = 0; $j < $set_size; $j++) {
            if($i & 1) {
              array_push($teams[$i], $arr[$i * $set_size + $set_size - $j - 1]);
            } else {
              array_push($teams[$i], $arr[$i * $set_size + $j]);
            }
          }
        }
        ?>

        <table>
                <tr>
                    <th>Team Number</th>
                    <th>First</th>
                    <th>Second</th>
                    <th>Third</th>
                    <th>Fourth</th>
                    <th>Team Lead</th>
                </tr>
                <?php
                /* include 'config.php'; */
                
                $ind = 1;
                for ($i=0; $i <$set_size ; $i++) {
                  $tid=$ind++;
                  $a1=array_search($teams[0][$i], $arrr);
                  $a2=array_search($teams[1][$i], $arrr);
                  $a3=array_search($teams[2][$i], $arrr);
                  $a4=array_search($teams[3][$i], $arrr);
                  $tlead = array_search($teams[4][$i], $arrr);
                /*   echo '<tr>
                  <td>'.$tid.'</td>
                  <td>'.$a1.'</td>
                  <td>'.$a2.'</td>
                  <td>'.$a3.'</td>
                  <td>'.$a4.'</td>
                  <td><a href="editteam.php?edited=1&id='.$tid.'">Edit</a></td></tr>'; */
                  $ti="INSERT INTO team(tid,first,second,third,fourth,tlead) VALUES('$tid','$a1','$a2','$a3','$a4','$tlead')";
                  if (mysqli_query($conn,$ti)) {
                    echo "<script>alert('Updating...!')</script>";
                    
                  }
                }
                $qi = "select * from team";
                    if ($result = $conn->query($qi)) {
                      while ($row = $result->fetch_assoc()) {

                    echo '<tr>
                  <td>'.$row['tid'].'</td>
                  <td>'.$row['first'].'</td>
                  <td>'.$row['second'].'</td>
                  <td>'.$row['third'].'</td>
                  <td>'.$row['fourth'].'</td>
                  <td>'.$row['tlead'].'</td>;
                  <td><a href="editteam.php?edited=1&id='.$row['tid'].'">Edit</a></td></tr>';
                  }
                }
        ?>
        </table>
        <form action="export.php" method="get">
          <input type="submit" name="export" value="CSV Export">
        </form>
        <form action="admin.php" method="POST" align="center">
                <input type="submit" name="back" value="Back">
        </form>
      </div>
    </div>
</body>
</html>