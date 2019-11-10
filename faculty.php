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
        <span class="pro">FACULTY DETAILS</span>
        <div class="main">

            <table style="width:100%">
                <tr>
                    <th>Faculty Name</th>
                    <th>Faculty Branch</th>
                    <th>Faculty Intrest</th>
                    <th>Faculty Experience</th>
                    <th>Faculty E-mail</th>
                    <th>Faculty Phone</th>
                </tr>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM faculty";
                if ($result = $conn->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        $fname = $row["fname"];
                        $branch = $row["branch"];
                        $intrest = $row["intrest"];
                        $exp = $row["exp"];
                        $email = $row["email"];
                        $phone = $row["phone"];
                        echo '<tr>
                                  <td>'.$fname.'</td>
                                  <td>'.$branch.'</td>
                                  <td>'.$intrest.'</td>
                                  <td>'.$exp.'</td>
                                  <td>'.$email.'</td>
                                  <td>'.$phone.'</td>
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
