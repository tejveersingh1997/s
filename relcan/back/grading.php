<?php
    session_start();
    include('sheader.php');
?>

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
        //echo "Table is deleted successfully";
    }

    $request = file_get_contents('php://input');
    $recieve = json_decode($request);
    //echo "hello:=";

    $Name = $recieve->QuizName;
    $OEcheck = $recieve->FeedBack;
    $OEpoints = $recieve->OpenEnded;
    $sizeMC = Sizeof($recieve->MultipleChoice);
    $mult = $recieve->MultipleChoice;
    $studentAnswer=$recieve->MultipleChoice[0];
    $sizeTF = Sizeof($recieve->TrueFalse);
    $sizeOE = Sizeof($recieve->OpenEnded);
    $student = 'User12';
    /*
    echo $Name;
    echo "FEED".$OEcheck;
    echo "\nPOINTS".$OEpoints;
    echo "\nMC".$mult;
    echo "\nMC".$sizeMC;
    echo "\nTF".$sizeTF;
    echo "\nOE".$sizeOE;
    */
    $xMC=0;
    $xTF=0;
    $xOE=0;

    $sql = "CREATE TABLE studentQuiz (`Question` text,`Opt1` varchar(255) DEFAULT NULL,`Opt2` varchar(255) DEFAULT NULL,`Opt3` varchar(255) DEFAULT NULL,`Opt4` varchar(255) DEFAULT NULL,`Answer` varchar(255) DEFAULT NULL, `Points` INT NOT NULL, `QuestionNum` int(255) NOT NULL AUTO_INCREMENT,`QuizID` int(255) DEFAULT NULL ,PRIMARY KEY (`QuestionNum`))";

    if ($con->query($sql) === TRUE)
        //echo "Table created successfully";
  

    // Make studentQuiz and add fields
    $copy ="INSERT INTO studentQuiz SELECT * FROM $Name";
    $con->query($copy);

    $addYA = "ALTER TABLE studentQuiz ADD YourAnswer TEXT NOT NULL AFTER Answer";
    $con->query($addYA);
    $addCI = "ALTER TABLE studentQuiz ADD CorInc TEXT NOT NULL AFTER YourAnswer";
    $con->query($addCI);
    $addPR = "ALTER TABLE studentQuiz ADD PointRec INT NOT NULL AFTER CorInc";
    $con->query($addPR);

    $res = mysqli_query($con, "SELECT COUNT(*) FROM studentQuiz");
    $rows= mysqli_fetch_row($res);
    $quest= $rows[0]; // number of questions:
    //echo $rows[0];

    //grade
    for ($i=0; $i<$quest; $i++ ) //4 questions -> 0,1,2,3
    {   
        $qus = $i + 1;
        //OE
        $oe = "SELECT `Opt2` FROM `studentQuiz` WHERE `QuestionNum`='$qus'";
        $oeque = mysqli_query($con,$oe);
        $oefetch = mysqli_fetch_assoc($oeque);
        $oecheck =$oefetch['Opt2'];
        //OE



        if ($oecheck=="")//perform grading fro OE (STILL NEEDS FIXING)
        {
            
            //echo "<br></br>Question# ".$qus." is A OE!!!!!!!!!!!!!";
            $studAnswerOE = $recieve->OpenEnded['openeded'];

            echo "<br></br>STUDENT ANS ---->".$studAnswerOE;
            $addAnsMC = mysqli_query($con,"UPDATE studentQuiz set YourAnswer = '$studAnswerOE' WHERE QuestionNum= '$qus'");
            $selAns = "SELECT `Answer` FROM `studentQuiz` WHERE `QuestionNum`='$qus'";
            $fetchAns = mysqli_query($con,$selAns);
            $actAns = mysqli_fetch_assoc($fetchAns);
            $ans =$actAns['Answer'];
            //echo "<br></br>ACTUAL ANS ---->".$ans;

            //Fetches points
                
           $selPts = "SELECT `Points` FROM `studentQuiz` WHERE `QuestionNum`='$qus'";
              $fetchPts = mysqli_query($con,$selPts);
              $actPts = mysqli_fetch_assoc($fetchPts);
               $pts =$actPts['Points'];
             //echo "POINTS: ".$pts;

             if ($studAnswerOE==$ans)
             {
             $corr ="UPDATE studentQuiz SET CorInc='Correct', PointRec ='$pts' WHERE QuestionNum='$qus'";
             $con->query($corr);
             //echo "correct";
             }
         else
             {
             $inc ="UPDATE studentQuiz SET CorInc='Incorrect', PointRec ='0' WHERE `QuestionNum`='$qus'";
             $con->query($inc);
             // "incorrect";
             }

        }

        else if ($oecheck=="False")//perform grading fro TF
        {
            
            //echo "<br></br>Question# ".$qus." is A tF!!!!!!!!!!!!!";
            $studAnswerTF = $recieve->TrueFalse[$xTF];
            $xTF++;
            //echo "<br></br>STUDENT ANS ---->".$studAnswerTF;
            $addAnsMC = mysqli_query($con,"UPDATE studentQuiz set YourAnswer = '$studAnswerTF' WHERE QuestionNum= '$qus'");

            $selAns = "SELECT `Answer` FROM `studentQuiz` WHERE `QuestionNum`='$qus'";
            $fetchAns = mysqli_query($con,$selAns);
            $actAns = mysqli_fetch_assoc($fetchAns);
            $ans =$actAns['Answer'];
            //echo "<br></br>ACTUAL ANS ---->".$ans;

        //Fetches points
                
           $selPts = "SELECT `Points` FROM `studentQuiz` WHERE `QuestionNum`='$qus'";
           $fetchPts = mysqli_query($con,$selPts);
           $actPts = mysqli_fetch_assoc($fetchPts);
            $pts =$actPts['Points'];
          //echo "POINTS: ".$pts;
          if ($studAnswerTF==$ans)
          {
          $corr ="UPDATE studentQuiz SET CorInc='Correct', PointRec =$pts WHERE QuestionNum='$qus'";
          $con->query($corr);
          //echo "correct";
          }
      else
          {
          $inc ="UPDATE studentQuiz SET CorInc='Incorrect', PointRec =0 WHERE `QuestionNum`='$qus'";
          $con->query($inc);
          //echo "incorrect";
          }


        }
        else //perform grading for MC
        {
            //echo "<br></br>Question# ".$qus." is A MC!!!!!!!!!!!!!";
                    //Fetches actual answer
            $studAnswerMC = $recieve->MultipleChoice[$xMC];
            $xMC++;
            //echo "<br></br>STUDENT ANS ---->".$studAnswerMC;
            $addAnsMC = mysqli_query($con,"UPDATE studentQuiz set YourAnswer = '$studAnswerMC' WHERE QuestionNum= '$qus'");

            $selAns = "SELECT `Answer` FROM `studentQuiz` WHERE `QuestionNum`='$qus'";
            $fetchAns = mysqli_query($con,$selAns);
            $actAns = mysqli_fetch_assoc($fetchAns);
            $ans =$actAns['Answer'];
            //echo "<br></br>ACTUAL ANS ---->".$ans;

                       //Fetches points
                
           $selPts = "SELECT `Points` FROM `studentQuiz` WHERE `QuestionNum`='$qus'";
           $fetchPts = mysqli_query($con,$selPts);
           $actPts = mysqli_fetch_assoc($fetchPts);
            $pts =$actPts['Points'];
          //echo "POINTS: ".$pts;



            if ($studAnswerMC==$ans)
            {
            $corr ="UPDATE studentQuiz SET CorInc='Correct', PointRec =$pts WHERE QuestionNum='$qus'";
            $con->query($corr);
            //echo "correct";
            }
        else
            {
            $inc ="UPDATE studentQuiz SET CorInc='Incorrect', PointRec =0 WHERE `QuestionNum`='$qus'";
            $con->query($inc);
            //echo "incorrect";
            }
        }

    }

    $result = mysqli_query($con,"SELECT SUM(PointRec), SUM(Points) FROM studentQuiz"); 
    $row = mysqli_fetch_assoc($result); 
    $pr = $row['SUM(PointRec)'];
    $tp = $row['SUM(Points)'];
    
    
    //echo "<br></br>TP ---->".$tp."<br></br> PR ----->".$pr;

    $g = (($pr / $tp)*100);
    $Grade = round($g,2);

    //echo "<br></br>GRADE ---->".$Grade;
    if($Grade >= 90) {
        $comments = 'Awesome Job!';
        //echo $comments;
        $msg= $comments;
    }
    if($Grade >= 80 && $Grade < 90) {
        $comments = 'Good Job!';
        //echo $comments;
        $msg= $comments;
    }
    if($Grade >= 70 && $Grade < 80) {
        $comments = 'Ok!';
        //echo $comments;
        $msg= $comments;
    }
    if($Grade >= 65 && $Grade < 70) {
        $comments = 'Terrible!';
        //echo $comments;
        $msg= $comments;
    }
    if($Grade < 65) {
        $comments = 'Failing! Please See Me!';
        $msg= $comments;
    }
    //echo "sds";
    //echo $msg;



    $insGrade = "INSERT INTO Grades (QuizName, TotalCorrect, TotalPoints, Grade, Comments, Released) VALUES ('$Name', '$pr', '$tp', '$Grade', '$msg', 'Unreleased')";
    $exec1 = mysqli_query($con,$insGrade);

    echo "Your quiz has been submitted for Grading."; 

?>





