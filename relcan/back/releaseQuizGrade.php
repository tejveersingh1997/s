<?php
    session_start;
    include('theader.php');
    $con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
    if(!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("vpp29", $con);
    
    $request = file_get_contents('php://input');
    $recieve = json_decode($request);
    
    $name = $recieve->QuizName;
    
    $release = mysql_query("UPDATE Grades set Released = 'Released' WHERE QuizName= '$name'");
    echo $name." Grades have been released.";
?>