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
    $Opt5 = $recieve->Opt5;
    $Opt6 = $recieve->Opt6;
    $Topic = $recieve->Topic;
    $Answer = $recieve->Answer;
    $Type = $recieve->Type;
    $Diff = $recieve->Difficulty;
    


    
    if ($Type == 'OE') {
        //echo 'OE';
        //$createOE = "INSERT INTO OpenEnded (Question, Answer, Difficulty) VALUES ('$Question', '$Answer', '$Diff')";
        $createOE = "INSERT INTO OpenEnded (Question, Opt1, Opt2, Opt3, Opt4, Opt5, Opt6, Answer, Difficulty, Topic) VALUES ('$Question', '$Opt1', '$Opt2','$Opt3','$Opt4','$Opt5','$Opt6','$Answer', '$Diff', '$Topic')";
        $exec2 = mysql_query($createOE, $con);
        echo "Question Added.";
        //header ("Location: http://web.njit.edu/~vpp29/CS490/Front/createQuestions.html");
    } 
?>