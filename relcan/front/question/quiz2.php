<?php
                            $request = file_get_contents('php://input');
                            $quiz = json_decode($request);
                            $Name = $quiz->QuizName;
                            
                            $sizeMC = Sizeof($quiz->MultipleChoice);
                            $sizeTF = Sizeof($quiz->TrueFalse);
                            $sizeOE = Sizeof($quiz->OpenEnded);
                    
                            for($i=0; $i<$sizeMC; $i++) {
                            $q = $quiz->MultipleChoice[$i]->Question;
                            $a = $quiz->MultipleChoice[$i]->Opt1;
                            $b = $quiz->MultipleChoice[$i]->Opt2;
                            $c = $quiz->MultipleChoice[$i]->Opt3;
                            $d = $quiz->MultipleChoice[$i]->Opt4;
                            $n = $quiz->MultipleChoice[$i]->QuestionNum;
                            
                            echo $n ;
                            echo $q ;
                            echo $a ;
                            echo $b ;
                            echo $c ;
                            echo $d ;
                            }
?>