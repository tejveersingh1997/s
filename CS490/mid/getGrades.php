<?php
    $request = file_get_contents('php://input');
    $recieve = json_decode($request);
    $crl = curl_init();
    curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/CS490/front/student/displayGrades.php");
    //curl_setopt($crl, CURLOPT_URL, "http://web.njit.edu/~ic35/CS490/login/student/takeQuiz.php");
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $recieve);
    curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
    
    $outputDB = curl_exec($crl);
    curl_close($crl);
?>