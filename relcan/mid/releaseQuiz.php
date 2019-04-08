<?php 
    $request = file_get_contents('php://input');
    
    $crl = curl_init();
    curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/relcan/back/releaseQuizGrade.php");
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $request);
    curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
    
    $outputDB = curl_exec($crl);
    curl_close($crl); 
    
?>