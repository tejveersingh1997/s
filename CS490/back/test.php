<?php
    //$con = mysqli_connect(,,);
    $con = new mysqli("sql1.njit.edu", "vpp29", "F3Xs6Y1a", "vpp29");
    //mysql_select_db("vpp29", $con);
    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $newQuiz = "DROP TABLE studentQuiz";
    if (mysqli_query($con,$newQuiz))
    {
        echo "Table is deleted successfully";
    }

    $request = file_get_contents('php://input');
    $recieve = json_decode($request);
    echo "hello:=; 






?>