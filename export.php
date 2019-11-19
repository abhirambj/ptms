<?php
    include 'config.php';
    if(isset($_GET['export'])){
        header('Content-type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=team.csv');
        $output = fopen("php://output","w");
        fputcsv($output,array('Tid','First','Second','Third','Fourth'));
        $query = "SELECT * FROM team";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
            fputcsv($output, $row);
        }
        fclose($output);
    }
?>