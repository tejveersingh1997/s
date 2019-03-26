<?php
    session_start();
    include('theader.php'); 
?>

<div class="create-content">
        <h1>Release Grades</h1>
        <form class="choice" action="https://web.njit.edu/~vpp29/CS490/front/teacher/releaseQuiz.php" method="post">
        <table class="grades-table" border="1" cellpadding="1" cellspacing="0">
                    <?php
                         $request = file_get_contents('php://input');
                        $x = json_decode($request);
                        $size = Sizeof($x->grades);
                    ?>
                    <tr>
                        <th>&nbsp &nbsp</th><br />
                        <th>&nbsp Quiz &nbsp</th><br />
                        <th>&nbsp Grade Status &nbsp</th><br />
                    </tr>
                        <?php for($i=0; $i<$size; $i++) {
                            $n = $x->grades[$i]->QuizName;
                            $s = $x->grades[$i]->Released;
                            
                        ?>
                    <tr>
                        <td align="left"><pre><?php echo "<input id='choice' name='quizname' type='radio' value=$n>"; echo " ";?></pre></td>
                        <td align="center"><pre><?php echo $n;?></pre></td>
                        <td align="center"><pre><?php echo "<b>$s";?></pre></td>
                    </tr>
                    <?php } ?>
                </table>
                <br />
                <br />
                <input type="submit" value="Release Grades">
            </form>
         </div>
</div>
</div>
</div>
