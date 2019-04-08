<?php
    session_start();
    //include('../teacher/theader.php');
        $quizName = $_POST['quizName'];
		    $startDate = $_POST['startDate'];
		    $endDate = $_POST['endDate'];
		    $MC = $_POST['multiplechoice'];
		    $TF = $_POST['truefalse'];
		    $OE = $_POST['openended'];
		    $E = $_POST['easy'];
		    $M = $_POST['medium'];
		    $H = $_POST['hard'];
		    $fields = json_encode(array('QuizName' => $quizName, 'StartDate' => $startDate, 'EndDate' => $endDate, 'MultipleChoice' => $MC, 'TrueFalse' => $TF, 'OpenEnded' => $OE, 'Easy' => $E, 'Medium' => $M, 'Hard' => $H));
	
	$crl = curl_init();
	curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/relcan/mid/addQuiz.php");
	curl_setopt($crl, CURLOPT_POST, 1);
	curl_setopt($crl, CURLOPT_POSTFIELDS, $fields);
	curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
	$c = curl_exec($crl);
	curl_close($crl);
?>