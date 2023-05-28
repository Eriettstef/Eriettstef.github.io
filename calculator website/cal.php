<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pweek = $_POST['pweek'];
    $days = $_POST['days'];
    $VAT = $_POST['VAT'];
    
    $pday = $pweek / 7;
    $pstay = $pday * $days;
    $pVAT = ($pstay * $VAT) / 100;
    $final = $pstay + $pVAT;
    
    echo "The final price for $days days is $final euros";
}
?>
