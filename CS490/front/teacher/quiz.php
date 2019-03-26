<?php
    session_start();
    include('theader.php');
                        
    
?>


<style>

.column.left 
{
  background-color: lightblue;
  overflow: scroll;
  width: 50%;
}

.column.right {
  overflow: scroll;
  background-color: lightgreen;
  width: 50%;
}



</style>

<div class="row">
  <!-- -------------------------------RIGHT SIDE---------------------------------------  -->
  <div class="column right">
    <h2>Question Bank</h2>
    <p>Filters: Right side </p>
    
  </div>
  <!-- -------------------------------LEFT SIDE---------------------------------------  -->
  <div class="column left">

    <script src="https://web.njit.edu/~vpp29/CS490/front/js/function.js"></script>
    <div class="create-content">
        <h1>Question Bank</h1>
            <form class="choice" action="https://web.njit.edu/~vpp29/CS490/front/question/addQuiz.php" method="post">
               Quiz &nbspName: <input type="text" name="quizName" autocomplete="on" required/><br />
                <table class="create-quiz" border="auto" cellpadding="auto" cellspacing="auto">
                <div class="create-content">
                        <button type="button" onClick="choicetype('TF', 'MC', 'OE', 'E', 'M', 'H')" return false>True/False</button>&nbsp;&nbsp;
                        <button type="button" onClick="choicetype('MC', 'TF', 'OE', 'E', 'M', 'H')" return false>Multiple Choice</button>&nbsp;&nbsp;
                        <button type="button" onclick="choicetype('OE', 'MC', 'TF', 'E', 'M', 'H')" return false>Open Ended</button>&nbsp;&nbsp;
                        <button type="button" onclick="choicetype('E', 'MC', 'TF', 'OE', 'M', 'H')" return false>Easy</button>&nbsp;&nbsp;
                        <button type="button" onclick="choicetype('M', 'MC', 'TF', 'OE', 'E', 'H')" return false>Medium</button>&nbsp;&nbsp;
                        <button type="button" onclick="choicetype('H', 'MC', 'TF', 'OE', 'E', 'M')" return false>Hard</button>&nbsp;&nbsp;
                       
                </div>
                </table>
                    <?php
                        $request = file_get_contents('php://input');
                        $x = json_decode($request);
                        $sizeMC = Sizeof($x->MultipleChoice);
                        $sizeTF = Sizeof($x->TrueFalse);
                        $sizeOE = Sizeof($x->OpenEnded);
                        $sizeE = Sizeof($x->Easy);
                        $sizeM = Sizeof($x->Medium);
                        $sizeH = Sizeof($x->Hard);
                    ?>
                    <div class="content-create" id="MC">
                    <tr>
                        <th>Multiple Choice</th><br />
                    </tr>
                        <?php
                            for($i=0; $i<$sizeMC; $i++) {
                            $n = $x->MultipleChoice[$i]->QuestionNum;
                            $q = $x->MultipleChoice[$i]->Question;
                        ?>
                    <tr>
                        <td align=left><pre><?php echo "<input id='choice' name='multiplechoice[]' type='checkbox' value=$n>"; echo " ".$n." "." ";  echo $q; ?></pre></td>
                    </tr>
                    <?php } ?>
                    </div>
                    <div class="content-create" id="TF">
                    <tr>
                        <th>True/False</th>
                    </tr>
                        <?php
                            for($i=0; $i<$sizeTF; $i++) {
                            $n = $x->TrueFalse[$i]->QuestionNum;
                            $q = $x->TrueFalse[$i]->Question;
                            ?>
                    <tr>
                        <td align=left><pre><?php echo "<input id='choice' name='truefalse[]' type='checkbox' value=$n>"; echo " ".$n." "." "; echo $q; ?></pre></td>
                    </tr>
                    <?php } ?>
                    </div>
                    <div class="content-create" id="OE">
                    <tr>
                        <th>Open Ended</th>
                    </tr>
                        <?php
                            for($i=0; $i<$sizeOE; $i++) {
                            $n = $x->OpenEnded[$i]->QuestionNum;
                            $q = $x->OpenEnded[$i]->Question;
                        ?>
                    <tr>
                        <td align=left><pre><?php echo "<input id='choice' name='openended[]' type='checkbox' value=$n>"; echo " ".$n." "." "; echo $q; ?></pre></td>
                    </tr>
                    <?php } ?>
                    </div>
                     <div class="content-create" id="E">
        <tr>
            <th>Easy</th>
        </tr>
            <?php for($i=0; $i<$sizeE; $i++) {
                 $n = $x->Easy[$i]->QuestionNum;
                 $q = $x->Easy[$i]->Question;
                ?>
        <tr>
            <td align=left><pre><?php echo "<input id='choice' name='easy[]' type='checkbox' value='$q'>"; echo " "." "; echo $q; ?></pre></td>
        </tr>
        <?php } ?>
    </div>
        
    <div class="content-create" id="M">
        <tr>
            <th>Medium</th>
        </tr>
            <?php for($i=0; $i<$sizeM; $i++) {
                 $n = $x->Medium[$i]->QuestionNum;
                 $q = $x->Medium[$i]->Question;
                ?>
        <tr>
            <td align=left><pre><?php echo "<input id='choice' name='medium[]' type='checkbox' value='$q'>"; echo " "." "; echo $q; ?></pre></td>
        </tr>
        <?php } ?>
    </div>
        
    <div class="content-create" id="H">
        <tr>
            <th>Hard</th>
        </tr>
            <?php for($i=0; $i<$sizeH; $i++) {
                 $n = $x->Hard[$i]->QuestionNum;
                 $q = $x->Hard[$i]->Question;
                ?>
        <tr>
            <td align=left><pre><?php echo "<input id='choice' name='hard[]' type='checkbox' value='$q'>"; echo " "." "; echo $q; ?></pre></td>
        </tr>
        <?php } ?>
    </div>

                <p></p>
               
                <input type="hidden" value="CQ" name="type">
                <input type="submit" value="Create a Quiz">
               
            </form>
    </div>
    </div>
</div>