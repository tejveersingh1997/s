<?php
    $con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
    if(!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("vpp29", $con);
    
    $request = file_get_contents('php://input');
    $recieve = json_decode($request);
    
    $Question = $recieve->Question;
    $Opt1 = $recieve->Opt1;
    $Opt2 = $recieve->Opt2;
    $Opt3 = $recieve->Opt3;
    $Opt4 = $recieve->Opt4;
    $Answer = $recieve->Answer;
    $Type = $recieve->Type;
    $Diff = $recieve->Difficulty;
    


    if ($Type == 'MC') {
       //echo 'MC';
       if ($Answer == 'A') {
            $a = $Opt1;
       }
       if ($Answer == 'B') {
            $a = $Opt2;
       }
       if ($Answer == 'C') {
            $a = $Opt3;
       }
        if ($Answer == 'D') {
            $a = $Opt4;
       }
       $createMC = "INSERT INTO MultipleChoice (Question, Opt1, Opt2, Opt3, Opt4, Answer, Difficulty) VALUES ('$Question', '$Opt1', '$Opt2', '$Opt3', '$Opt4', '$a', '$Diff')";
       $exec = mysql_query($createMC, $con);
       echo "Question Added.";
       //header ("Location: http://web.njit.edu/~ic35/CS490/login/teacher/create.php");
    }
    
    if ($Type == 'TF') {
        //echo 'TF';
        $createTF = "INSERT INTO TrueFalse (Question, Opt1, Opt2, Answer, Difficulty) VALUES ('$Question', '$Opt1', '$Opt2', '$Answer', '$Diff')";
        $exec1 = mysql_query($createTF, $con);
        echo "Question Added.";
        //header ("Location: http://web.njit.edu/~ovl2/CS490/Front/createQuestions.html");
    }
    
    if ($Type == 'OE') {
        //echo 'OE';
        //$createOE = "INSERT INTO OpenEnded (Question, Answer, Difficulty) VALUES ('$Question', '$Answer', '$Diff')";
        $createOE = "INSERT INTO OpenEnded (Question, Opt1, Answer, Difficulty) VALUES ('$Question', '$Opt1', '$Answer', '$Diff')";
        $exec2 = mysql_query($createOE, $con);
        echo "Question Added.";
        //header ("Location: http://web.njit.edu/~ovl2/CS490/Front/createQuestions.html");
    } 
?>