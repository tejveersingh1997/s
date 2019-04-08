<?php
    $con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
    if(!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("vpp29", $con);
    
    $request = file_get_contents('php://input');
    $recieve = json_decode($request);
    
    $Question = $recieve->Question;

    $Args1 = $recieve->Args1;
    $Args2 = $recieve->Args2;
    $Args3 = $recieve->Args3;
    $Args4 = $recieve->Args4;
    $Args5 = $recieve->Args5;
    $Args6 = $recieve->Args6;
    $Out1 = $recieve->Out1;
    $Out2 = $recieve->Out2;
    $Out3 = $recieve->Out3;
    $Out4 = $recieve->Out4;
    $Out5 = $recieve->Out5;
    $Out6 = $recieve->Out6;
    $Topic = $recieve->Topic;
    $Cons = $recieve->Cons;
    $Type = $recieve->Type;
    $Diff = $recieve->Difficulty;
    


    
    if ($Type == 'OE') {
        //echo 'OE';
        //$createOE = "INSERT INTO OpenEnded (Question, Answer, Difficulty) VALUES ('$Question', '$Answer', '$Diff')";
        $createOE = "INSERT INTO OpenEnded (Question, Out1, Out2, Out3, Out4, Out5, Out6, Difficulty, Topic, Const, Args1, Args2, Args3, Args4, Args5, Args6) 
        VALUES ('$Question', '$Out1', '$Out2','$Out3','$Out4','$Out5','$Out6', '$Diff', '$Topic', '$Cons', '$Args1', '$Args2', '$Args3', '$Args4', '$Args5', '$Args6')";
        $exec2 = mysql_query($createOE, $con);
        echo "Question Added.";
        //header ("Location: http://web.njit.edu/~vpp29/CS490/Front/createQuestions.html");
    } 
?>