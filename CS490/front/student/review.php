<?php
    session_start();
    include('sheader.php');
?>
    <h1>Review Quiz</h1>
    <div class="create-content" id="review" style="width:900px;">
                <table border="1" cellpadding="1" cellspacing="0"  style="table-layout: fixed; border-collapse:collapse;  word-wrap: break-word; width:100%;">
                        <?php
                        $request = file_get_contents('php://input');
                        $x = json_decode($request);
                        $name= $x -> Name;
                        $tp = $x -> TP;
                        $pr = $x -> PR;
                        $sizeQuiz = Sizeof($x->Quiz);

                        
                    ?>
                <h1><?php echo $name." Score : ".$pr."/".$tp; ?></h1>
                    <tr>
                        <th>&nbsp &nbsp</th><br />
                        <th>&nbsp Question &nbsp</th><br />
                        <th>&nbsp Answer &nbsp</th><br />
                        <th>&nbsp Your Answer &nbsp</th><br />
                        <th>&nbsp &nbsp</th><br />
                        <th>&nbsp Points Recieved &nbsp</th><br />
                        <th>&nbsp Total Points &nbsp</th><br />
                    </tr>
                        <?php for($i=0; $i<$sizeQuiz; $i++) {
                            $qn = $x->Quiz[$i]->QuestionNum;
                            $q = $x->Quiz[$i]->Question;
                            $a = $x->Quiz[$i]->Answer;
                            $ya = $x->Quiz[$i]->YourAnswer;
                            $ci = $x->Quiz[$i]->CorInc;
                            $pr = $x->Quiz[$i]->PointRec;
                            $tp = $x->Quiz[$i]->Points;
                            
                        ?>
                    <tr>
                        <td align="left" style="width: 50px;"><pre><?php echo $qn;?></pre></td>
                        <td align="left" style="width: 200px;"><pre><?php echo $q;?></pre></td>
                        <td align="left" style="width:150px;"><pre><?php echo $a;?></pre></td>
                        <td align="left" style="width:150px;"><pre><?php echo $ya;?></pre></td>
                        <td align="left" style="width:150px;"><pre><?php echo $ci;?></pre></td>
                        <td align="left" style="width:100px;"><pre><?php echo $pr;?></pre></td>
                        <td align="left" style="width:100px;"><pre><?php echo $tp;?></pre></td>
                    </tr>
                    <?php } ?>
                </table>
    </div>

