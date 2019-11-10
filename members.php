<?php
include 'config.php';
$sql = "SELECT * FROM student order by cgpa desc";
$res = $conn->query($sql);
$arrr = array();
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

// Print teams
for($i = 0; $i < $set_size; $i++) {
  for($j = 0; $j < 4; $j++) {
    echo array_search($teams[$j][$i], $arrr).' ---> '.$teams[$j][$i].'   ';
  }
  echo '<br>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>
    <div class="container">
      
    </div>
</body>
</html>