<?php
    session_start();
?>

<?php
    $con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
    if(!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("vpp29", $con);
    
    $Quiz = mysql_query("SELECT QuizName, QuizID  FROM Quizzes");
    
    $listQuiz = array();
    
    while($q = mysql_fetch_assoc($Quiz)) {
            $listQuiz[] = $q;
    }
    
    $list = json_encode(array('Quizzes' => $listQuiz));
    //echo $list;
    
    $crl = curl_init();
    
    curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/CS490/front/student/quizList.php");
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $list);
    curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
    
    $outputDB = curl_exec($crl);
    curl_close($crl);
?>