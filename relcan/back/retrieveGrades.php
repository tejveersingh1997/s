<?php
    session_start;
    include('theader.php');
    $con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
    if(!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("vpp29", $con);
    $Request = file_get_contents('php://input');
    $Quiz = json_decode($Request);
    
    $x = $Quiz->QuizName;
    
    if($x == 'All') {
        $gradesR = mysql_query("SELECT QuizName, Grade, StudentID FROM Grades");
        
        $listR = array();
        while($r = mysql_fetch_assoc($gradesR)) {
            $listR[] = $r;
        }
    }
    if($x != 'All') {
        $gradesR = mysql_query("SELECT QuizName, Grade, StudentID FROM Grades  WHERE QuizName = '$x'");
        
        $listR = array();
        while($r = mysql_fetch_assoc($gradesR)) {
            $listR[] = $r;
        }    
    }
    $x = json_encode(array('grades' => $listR));
    //echo $x;
    
    
    $crl = curl_init();
    
    curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/relcan/front/teacher/displayStudentGrades.php");
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $x);
    curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
    
    $outputDB = curl_exec($crl);
    curl_close($crl); 
?>