<?php
    session_start();
    include('theader.php');
?>
    <h1>Point Total</h1>
    <div class="create-content">
        <form class="choice" action="https://web.njit.edu/~vpp29/relcan/front/teacher/points.php" method="post">
                <table border="1" cellpadding="1" cellspacing="0" style="table-layout: fixed; border-collapse:collapse;  word-wrap: break-word; width:100%;">
                    <?php
                        $request = file_get_contents('php://input');
                        $x = json_decode($request);
                        $size = Sizeof($x->Questions);
                        $name = $x->QuizName;
                        
                    ?>
                    <?php echo "<input id='name' name='name' size='25' value='$name' readonly>"; ?>

                    <tr>
                        <th>&nbsp &nbsp</th><br />
                        <th>&nbsp Question &nbsp</th><br />
                        <th>&nbsp Points &nbsp</th><br />
                    </tr>
                        <?php for($i=0; $i<$size; $i++) {
                            $n = $x->Questions[$i]->QuestionNum;
                            $tc = $x->Questions[$i]->Question;
                        ?>
                    <tr>
                        <td align="left"><pre><?php echo $n;?></pre></td>
                        <td align="center"><pre><?php echo $tc;?></pre></td>
                        <td align="center"><pre><?php echo "<input id='points' name='points[]' type='number' size='3' value='0'>"; ?></pre></td>
                    </tr>
                    <?php } ?>
                </table>
                <input type="submit" value="Submit Points">
        </form>
    </div>