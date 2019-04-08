<?php 
    $request = file_get_contents('php://input');
    $x = json_decode($request);
    
    $OE = $x->OpenEnded;
    
    /* your compiling code to take in the input */
    
    $crl = curl_init();
    //curl_setopt($crl, CURLOPT_URL, "http://web.njit.edu/~ovl2/CS490/Front/login.php");
    curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/relcan/back/grading.php");
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $Qus);
    curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
    
    $outputDB = curl_exec($crl);
    curl_close($crl);
?>