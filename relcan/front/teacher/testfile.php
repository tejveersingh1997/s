<?php 
session_start();
//include('theader.php');

    $con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
    if(!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("vpp29", $con);
    

    $QuizName = $_POST['quizname'];
    //$fields = json_encode(array('QuizName' => $QuizName));
    
    $Quest = mysql_query("SELECT Question, QuestionNum  FROM $QuizName");
    $Quiz = mysql_query("SELECT QuizName, QuizID  FROM Quizzes");
    
    $QuizQuestions = array();
    
    while($q = mysql_fetch_assoc($Quest)) {
            $QuizQuestions[] = $q;
    }
    while($q = mysql_fetch_assoc($Quiz)) {
        $listQuiz[] = $q;
}
    
    $list = json_encode(array('Questions' => $QuizQuestions, 'Quizzes' => $listQuiz));
    //echo $list;
    


    echo $QuizName;
    echo '</br>';
    print_r ($list);
    echo '</br>';

    /*
    $crl = curl_init();
    curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/relcan/front/teacher/quiz.php");
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $list);
    curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
    $c = curl_exec($crl);
    curl_close($crl); 
    */
    
?>