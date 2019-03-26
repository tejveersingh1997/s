<?php
    session_start;
    //include('sheader.php');
?>

<?php
    $con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
    if(!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("vpp29", $con);
    
    $grd = mysql_query("SELECT QuizName, TotalCorrect, TotalPoints, Grade, Comments FROM Grades WHERE Released = 'Released'");
    $info = mysql_fetch_assoc($grd);
    $id = $info['Grade'];
    
    $quizGrades = array();
    while($qg = mysql_fetch_assoc($grd)) {
            $quizGrades[] = $qg;
    }
    
    $fields = json_encode(array('Quizzes' => $quizGrades));
    //echo $fields;
    
    $crl = curl_init();
    //curl_setopt($crl, CURLOPT_URL, "http://web.njit.edu/~rab25/CS490/Middle/student/getGrades.php");
    //curl_setopt($crl, CURLOPT_URL, "http://web.njit.edu/~ic35/CS490/login/student/displayGrades.php");
    curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/CS490/front/student/displayGrades.php");
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
    
    $outputDB = curl_exec($crl);
    curl_close($crl); 
?>