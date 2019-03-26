<?php
	session_start();
	
	if(isset($_POST['Question'])){
		if(!isset($_POST['Type']) || $_POST['Type'] == ""){
			echo "Sorry, there was an error parsing the form. Please press back in your browser and try again";
			exit();
		}
	
	$Question = $_POST['Question'];
	$Opt1 = $_POST['Opt1'];
	$Opt2 = $_POST['Opt2'];
	$Opt3 = $_POST['Opt3'];
	$Opt4 = $_POST['Opt4'];
	$Answer = $_POST['Answer'];
	$Type = $_POST['Type'];
	$Difficulty = $_POST['Diff'];
        
	$fields = array('Question' => $Question, 'Opt1' => $Opt1, 'Opt2' => $Opt2, 'Opt3' => $Opt3, 'Opt4' => $Opt4, 'Answer' => $Answer, 'Type' => $Type, 'Difficulty' => $Difficulty);
	$send = json_encode($fields);
	if($Type == 'TF'){
		if((!$Question) || (!$Opt1) || (!$Opt2) || (!$Answer) || (!$Difficulty)){
			echo "Sorry, All fields must be filled in to add a new question to the quiz. Please press back in your browser and try again.";
			exit();
			}else{
				header('Location:https://web.njit.edu/~vpp29/CS490/front/teacher/create.php');
				
			}
		}
	if($Type == 'MC'){
		if((!$Question) || (!$Opt1) || (!$Opt2) || (!$Opt3) || (!$Opt4) || (!$Answer) || (!$Difficulty)){
			if(($Opt1==0)||($Opt2==0)||($Opt3==0)||($Opt4==0)){
				header('Location:https://web.njit.edu/~vpp29/CS490/front/teacher/create.php');
			}else{
			echo "Sorry, All fields must be filled in to add a new question to the quiz. Please press back in your browser and try again.";
			exit();
			}
		}else{
			header('Location:https://web.njit.edu/~vpp29/CS490/front/teacher/create.php');
		}
		
	}
	if($Type == 'OE'){
		/*if((!$Question)){
			echo "Sorry, All fields must be filled in to add a new question to the quiz. Please press back in your browser and try again.";
			exit();
		}else{*/
			header('Location:https://web.njit.edu/~vpp29/CS490/front/teacher/create.php');
			
		//}
	}
	
	$crl = curl_init();
	curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/CS490/mid/sendQuestions.php");
	//curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/CS490/back/test2.php");
	curl_setopt($crl, CURLOPT_POST, 1);
	curl_setopt($crl, CURLOPT_POSTFIELDS, $send);
	curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
	
	$c = curl_exec($crl);
	curl_close($crl);
	}
	
	
?>