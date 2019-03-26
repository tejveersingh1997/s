<?php
    session_start();
    include('sheader.php');
?>
    <script type="text/javascript">
        window.onload=function date(){
        var now=new Date();
        var x = document.getElementById("date");
        x.innerHTML=now.toUTCString();
        }
    </script>
    
    
    <div class="take-quiz">
            <?php
                $Request = file_get_contents('php://input');
                $Quiz = json_decode($Request);
                
                $Name = $Quiz->QuizName;
                $Question = $Quiz->MultipleChoice[0]->QuestionNum;
            ?>
        <h1><?php echo $Name; ?> </h1>

        <p></p>
        <p></p>
                <form class="quizSheet" action="https://web.njit.edu/~vpp29/CS490/front/student/submitQuiz.php" method="post">
        <!--    <form class="quizSheet" action="https://web.njit.edu/~vpp29/CS490/front/student/submitQuiz.php" method="post"> -->
                
                  <table id="$N" class="create-quiz" border="1" cellpadding="1" cellspacing="1">
                    <?php
                            $sizeMC = Sizeof($Quiz->MultipleChoice);
                            $sizeTF = Sizeof($Quiz->TrueFalse);
                            $sizeOE = Sizeof($Quiz->OpenEnded);
                    ?>
                    
                    <table id="quizname" border="1" cellpadding="1" cellspacing="1">
                        <?php echo "<input id='name' name='quizname' type='text' value=$Name size='5' readonly>"; ?>
                    </table>
                    <tr>
                        <th><b>Multiple Choice</b></th><br />
                    </tr>
                        <?php for($i=0; $i<$sizeMC; $i++) {
                            $n = $Quiz->MultipleChoice[$i]->QuestionNum;
                            $q = $Quiz->MultipleChoice[$i]->Question;
                            $a = $Quiz->MultipleChoice[$i]->Opt1;
                            $b = $Quiz->MultipleChoice[$i]->Opt2;
                            $c = $Quiz->MultipleChoice[$i]->Opt3;
                            $d = $Quiz->MultipleChoice[$i]->Opt4;
                        ?>
                    <tr>
                        <td align=left><pre><?php /*echo"<input id='choice' name='multiplechoice[]' type='checkbox' value=$n>"; */ echo $n.". ";?><?php echo $q ?></pre></td>
                        <td align=left><pre><?php echo"<input id='choice' name='multiplechoice[]' type='checkbox' value='$a'>"; echo " A. ".$a." "." ";?></pre></td>
                        <td align=left><pre><?php echo"<input id='choice' name='multiplechoice[]' type='checkbox' value='$b'>"; echo " B. ".$b." "." ";?></pre></td>
                        <td align=left><pre><?php echo"<input id='choice' name='multiplechoice[]' type='checkbox' value='$c'>"; echo " C. ".$c." "." ";?></pre></td>
                        <td align=left><pre><?php echo"<input id='choice' name='multiplechoice[]' type='checkbox' value='$d'>"; echo " D. ".$d." "." ";?></pre></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <th><b>True/False</b></th>
                    </tr>
                        <?php for($i=0; $i<$sizeTF; $i++) {
                             $q = $Quiz->TrueFalse[$i]->Question;
                             $n = $Quiz->TrueFalse[$i]->QuestionNum;
                             $a = $Quiz->TrueFalse[$i]->Opt1;
                             $b = $Quiz->TrueFalse[$i]->Opt2;
                        ?>
                    <tr>
                        <td align=left><pre><?php /* echo "<input id='choice' name='truefalse[]' type='checkbox' value=$n>"; */  echo $n." ";?><?php echo $q ?></pre></td>
                        <td align=left><pre><?php echo "<input id='choice' name='truefalse[]' type='checkbox' value='True'>";  echo " ".$a." "." ";?></pre></td>
                        <td align=left><pre><?php echo "<input id='choice' name='truefalse[]' type='checkbox' value='False'>";  echo " ".$b." "." ";?></pre></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <th><b>Open-End</b></th>
                    </tr>
                        <?php for($i=0; $i<$sizeOE; $i++) {
                            $q = $Quiz->OpenEnded[$i]->Question;
                            $n= $Quiz->OpenEnded[$i]->QuestionNum;
                        ?>
                    <tr>
                        <td align=left><pre><?php echo $n ?> <?php echo $q ?></pre></td>
                        <textarea name="openended" value="Opt1" style="width:600px; min-height: 300px;" placeholder="Enter your answer here..."></textarea>
                    </tr>
                    <?php } ?>
                </table>
                <p></p>
                <P></P>
                <input type="hidden" value="CQ" name="type">
                <input type="submit" value="Submit Quiz">
            </form>
            <br />
    </div>
    </div>
    </div>
    </div>