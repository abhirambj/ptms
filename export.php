<?php
    include 'config.php';
    // require 'libs/fpdf.php'; 

    // $pdf = new FPDF('P','mm','A4');
    // $pdf->AliasNbPages();
    // $pdf->AddPage();
    // $pdf->SetFont("Arial",'B',16);
    // $pdf->Cell(0,20,"Teams",0,0,'C');
    // $pdf->Output();
    
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