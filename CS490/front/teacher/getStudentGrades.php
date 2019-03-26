<?php
    session_start();
    include('theader.php'); 
?>

<div class="create-content">
    <h1>View Grades</h1>
    <form class="choice" action="https://web.njit.edu/~vpp29/CS490/back/retrieveResultsT.php" method="post">
        <table class="grades-table" border="1" cellpadding="1" cellspacing="0">
                    <?php
                         $request = file_get_contents('php://input');
                        $x = json_decode($request);
                        $size = Sizeof($x->grades);
                    ?>
                    <tr>
                        <th>&nbsp &nbsp</th><br />
                        <th>&nbsp Quiz &nbsp</th><br />
                    </tr>
                        <?php for($i=0; $i<$size; $i++) {
                            $n = $x->grades[$i]->QuizName;
                        ?>
                    <tr>
                        <td align="left"><pre><?php echo "<input id='choice' name='quizname' type='radio' value=$n>"; echo " ";?></pre></td>
                        <td align="center"><pre><?php echo $n;?></pre></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td align="left"><pre><?php echo "<input id='choice' name='quizname' type='radio' value='All'>"; echo " ";?></pre></td>
                        <td align="center"><pre><?php echo 'All';?></pre></td>
                    </tr>
        </table>
        <br />
        <p>
                <input type="submit" value="Get Grades">
    </form>
</div>
</div>
</div>
</div>