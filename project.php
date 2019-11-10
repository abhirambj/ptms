<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/97b5c19c43.js" crossorigin="anonymous"></script>
    <title>Project Details</title>
</head>
<body>
    <div class="container">
        <span class="pro">PROJECT HISTORY</span>
        <div class="main">

            <table style="width:100%">
                <tr>
                    <th>Project Name</th>
                    <th>Project Leader</th>
                    <th>Project Batch</th>
                    <th>Faculty Name</th>
                </tr>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM project";
                if ($result = $conn->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        $pname = $row["pname"];
                        $pleader = $row["pleader"];
                        $batch = $row["batch"];
                        $faculty = $row["faculty"];
                        echo '<tr>
                                  <td>'.$pname.'</td>
                                  <td>'.$pleader.'</td>
                                  <td>'.$batch.'</td>
                                  <td>'.$faculty.'</td>
                              </tr>';
                    }
                    $result->free();
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
