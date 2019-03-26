<?php
    session_start;
    //include('sheader.php');
    $con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
    if(!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("vpp29", $con);
    
    $Request = file_get_contents('php://input');
    $Quiz = json_decode($Request);
    
    $Name = $Quiz->QuizName;
    //$User = 'User';
    
    //$QuizName = $Name.$User;
    $result = mysql_query("SELECT Question, Opt1, Opt2, Opt3, Opt4, Answer, YourAnswer, CorInc, PointRec, Points, QuestionNum FROM studentQuiz");
    
    

    $list = array();
    
    while($q = mysql_fetch_assoc($result)) {
            $list[] = $q;
    }
    
    $result = mysql_query("SELECT SUM(PointRec), SUM(Points) FROM studentQuiz"); 
    $row = mysql_fetch_assoc($result); 
    $pr = $row['SUM(PointRec)'];
    $tp = $row['SUM(Points)'];
    
    $x = json_encode(array('Quiz' => $list, 'PR' => $pr, 'TP' => $tp, 'Name' => $Name));
    $crl = curl_init();
    curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/CS490/front/teacher/modify.php");
    //curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/CS490/front/student/review.php");
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $x);
    curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
    
    $outputDB = curl_exec($crl);
    curl_close($crl);
?>