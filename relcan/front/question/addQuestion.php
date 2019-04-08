<?php
	session_start();
	
	if(isset($_POST['Question'])){
		if(!isset($_POST['Type']) || $_POST['Type'] == ""){
			echo "Sorry, there was an error parsing the form. Please press back in your browser and try again";
			exit();
		}
	
	$Inputs = $_POST["myInputs"];
	$Outputs = $_POST["myOutputs"];
	$Topic = $_POST['Topic'];
	$Cons = $_POST['Cons'];
	$Out1 = $Outputs[0];
	$Out2 = $Outputs[1];
	$Out3 = $Outputs[2];
	$Out4 = $Outputs[3];
	$Out5 = $Outputs[4];
	$Out6 = $Outputs[5];
	//Args for TEST CASE 1
	$In1 = $Inputs[1][0];
	$In2 = $Inputs[1][1];
	$In3 = $Inputs[1][2];
	$In4 = $Inputs[1][3];
	$In5 = $Inputs[1][4];
	$In6 = $Inputs[1][5];
	//Args for TEST CASE 2
	$In7 = $Inputs[2][0];
	$In8 = $Inputs[2][1];
	$In9 = $Inputs[2][2];
	$In10 = $Inputs[2][3];
	$In11= $Inputs[2][4];
	$In12 = $Inputs[2][5];
	//Args for TEST CASE 3
	$In13 = $Inputs[3][0];
	$In14 = $Inputs[3][1];
	$In15 = $Inputs[3][2];
	$In16 = $Inputs[3][3];
	$In17 = $Inputs[3][4];
	$In18 = $Inputs[3][5];
	//Args for TEST CASE 4
	$In19 = $Inputs[4][0];
	$In20 = $Inputs[4][1];
	$In21 = $Inputs[4][2];
	$In22 = $Inputs[4][3];
	$In23 = $Inputs[4][4];
	$In24 = $Inputs[4][5];
	//Args for TEST CASE 5
	$In25 = $Inputs[5][0];
	$In26 = $Inputs[5][1];
	$In27 = $Inputs[5][2];
	$In28 = $Inputs[5][3];
	$In29 = $Inputs[5][4];
	$In30 = $Inputs[5][5];
	//Args for TEST CASE 6
	$In31 = $Inputs[6][0];
	$In32 = $Inputs[6][1];
	$In33 = $Inputs[6][2];
	$In34 = $Inputs[6][3];
	$In35 = $Inputs[6][4];
	$In36 = $Inputs[6][5];

	$Args1 = $In1.','.$In2.','.$In3.','.$In4.','.$In5.','.$In6;
	$Args2 = $In7.','.$In8.','.$In9.','.$In10.','.$In11.','.$In12;
	$Args3 = $In13.','.$In14.','.$In15.','.$In16.','.$In17.','.$In18;
	$Args4 = $In19.','.$In20.','.$In21.','.$In22.','.$In23.','.$In24;
	$Args5 = $In25.','.$In26.','.$In27.','.$In28.','.$In29.','.$In30;
	$Args6 = $In31.','.$In32.','.$In33.','.$In34.','.$In35.','.$In36;
	$Question = $_POST['Question'];
	//$Answer = $_POST['Answer'];
	$Type = $_POST['Type'];
	$Difficulty = $_POST['Diff'];
        
	$fields = array('Question' => $Question, 'In1' => $In1, 'In2' => $In2, 'In3' => $In3, 'In4' => $In4, 'In5' => $In5, 'In6' => $In6,
	'Out1' => $Out1, 'Out2' => $Out2, 'Out3' => $Out3, 'Out4' => $Out4, 'Out5' => $Out5, 'Out6' => $Out6, 
	'Type' => $Type, 'Difficulty' => $Difficulty, 'Topic' => $Topic, 'Cons' => $Cons, 'Args1' => $Args1, 'Args2' => $Args2, 'Args3' => $Args3, 'Args4' => $Args4, 'Args5' => $Args5, 'Args6' => $Args6);
	$send = json_encode($fields);
	if($Type == 'OE'){
		/*if((!$Question)){
			echo "Sorry, All fields must be filled in to add a new question to the quiz. Please press back in your browser and try again.";
			exit();
		}else{*/
			header('Location:https://web.njit.edu/~vpp29/relcan/front/question/getQuestionsC.php');
			
		//}
	}
	
	$crl = curl_init();
	curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/relcan/mid/sendQuestions.php");
	//curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/CS490/back/test2.php");
	curl_setopt($crl, CURLOPT_POST, 1);
	curl_setopt($crl, CURLOPT_POSTFIELDS, $send);
	curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
	
	$c = curl_exec($crl);
	curl_close($crl);
	}
	
	
?>