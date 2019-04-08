<?php
    session_start();
    include('theader.php'); 
?>
<style>
.column.left 
{
  background-color: #F08080;
  overflow: scroll;
  width: 50%;
  text-align:center
}

.column.right {
  overflow: scroll;
  background-color: gray;
  width: 50%;
}
.in-content{
  text-align: center;
  font-size: 14px;
}
.create-content{
  width:700px;
  margin-left:auto;
  margin-right:auto;
  margin: auto;
  text-align:center;
}
input[type=submit] {
  background-color: #DC143C;
  border: none;
  color: white;
  padding: 10px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}



</style>

  <!-- -------------------------------RIGHT SIDE---------------------------------------  -->
<div class="column right">

<h2>Question Bank</h2>

<script src="https://web.njit.edu/~vpp29/relcan/front/js/function.js"></script>
<div class="create-content">
        
    <form action="https://web.njit.edu/~vpp29/relcan/front/question/getQuestions.php" name="addQuestion" method="post"> 
        <strong>*********************************************</strong><br />
        <strong>Filter</strong><br />
        <strong>*********************************************</strong><br />

       <select name= "FilterEMH">
           <option value="" disabled="disabled" selected="selected">Please a difficulty</option>
           <option value="Easy">Easy</option>
           <option value="Medium">Medium</option>
           <option value="Hard">Hard</option>
       </select>

       <select name= "FilterTopic">
           <option value="" disabled="disabled" selected="selected">Please select a topic</option>
           <option value="Lists">Lists</option>
           <option value="Turtles">Turtles</option>
           <option value="If">If</option>
           <option value="For">For Loops</option>
           <option value="Def">Def</option>
           <option value="While">While Loops</option>
           <option value="String">String Methods</option>
           <option value="Files">Files</option>
           <option value="Dictionaries">Dictionaries</option>
           <option value="Namespaces">Namespaces</option>
           <option value="Exceptions">Exceptions</option>
           <option value="Classes">Classes</option>
       </select>


       <input type="hidden" value="OE" name="Type"> 
       <input type="submit" value="Search">
    </form>
     
    <strong>*********************************************</strong><br />
      
    <form class="choice" action="https://web.njit.edu/~vpp29/relcan/front/question/getQuestions.php" method="post">
        <form style="text-align:center;" method="post" action="https://web.njit.edu/~vpp29/relcan/front/question/getQuestions.php">
            <label>
            <input type="text" name="keywords" placeholder= "Search by keywords" autocomplete="off">
            </label>
             <input type="submit" value="Search"><br>
    </form>

        <strong>*********************************************</strong><br />

        <form action="https://web.njit.edu/~vpp29/relcan/front/question/getQuestions.php" method="post">
            <input type="hidden" value="All Questions" name="All"> 
            <input type="submit" value="All Questions" />
        </form>

        <strong>*********************************************</strong><br />
        <?php
            $request = file_get_contents('php://input');
            $x = json_decode($request);
            
            //Keyword
            $sizeSearch = Sizeof($x->Search);
            //All
            $sizeOE = Sizeof($x->OpenEnded);
            //Difficulty
            $sizeE = Sizeof($x->Easy);
            $sizeM = Sizeof($x->Medium);
            $sizeH = Sizeof($x->Hard);
            //Topics
            $sizeLists = Sizeof($x->Lists);
            $sizeTurtles = Sizeof($x->Turtles);
            $sizeIf = Sizeof($x->If);
            $sizeFor = Sizeof($x->For);
            $sizeDef = Sizeof($x->Def);
            $sizeWhile = Sizeof($x->While);
            $sizeString = Sizeof($x->String);
            $sizeFiles = Sizeof($x->Files);
            $sizeDictionaries = Sizeof($x->Dictionaries);
            $sizeNamespaces = Sizeof($x->Namespaces);
            $sizeExceptions = Sizeof($x->Exceptions);
            $sizeClasses = Sizeof($x->Classes);
            //Easy Topics
            $sizeListsE = Sizeof($x->ListsE);
            $sizeTurtlesE = Sizeof($x->TurtlesE);
            $sizeIfE = Sizeof($x->IfE);
            $sizeForE = Sizeof($x->ForE);
            $sizeDefE = Sizeof($x->DefE);
            $sizeWhileE = Sizeof($x->WhileE);
            $sizeStringE = Sizeof($x->StringE);
            $sizeFilesE = Sizeof($x->FilesE);
            $sizeDictionariesE = Sizeof($x->DictionariesE);
            $sizeNamespacesE = Sizeof($x->NamespacesE);
            $sizeExceptionsE = Sizeof($x->ExceptionsE);
            $sizeClassesE = Sizeof($x->ClassesE);
            //Medium Topics
            $sizeListsM = Sizeof($x->ListsM);
            $sizeTurtlesM = Sizeof($x->TurtlesM);
            $sizeIfM = Sizeof($x->IfM);
            $sizeForM = Sizeof($x->ForM);
            $sizeDefM = Sizeof($x->DefM);
            $sizeWhileM = Sizeof($x->WhileM);
            $sizeStringM = Sizeof($x->StringM);
            $sizeFilesM = Sizeof($x->FilesM);
            $sizeDictionariesM = Sizeof($x->DictionariesM);
            $sizeNamespacesM = Sizeof($x->NamespacesM);
            $sizeExceptionsM = Sizeof($x->ExceptionsM);
            $sizeClassesM = Sizeof($x->ClassesM);
            //Hard Topics
            $sizeListsH = Sizeof($x->ListsH);
            $sizeTurtlesH = Sizeof($x->TurtlesH);
            $sizeIfH = Sizeof($x->IfH);
            $sizeForH = Sizeof($x->ForH);
            $sizeDefH = Sizeof($x->DefH);
            $sizeWhileH = Sizeof($x->WhileH);
            $sizeStringH = Sizeof($x->StringH);
            $sizeFilesH = Sizeof($x->FilesH);
            $sizeDictionariesH = Sizeof($x->DictionariesH);
            $sizeNamespacesH = Sizeof($x->NamespacesH);
            $sizeExceptionsH = Sizeof($x->ExceptionsH);
            $sizeClassesH = Sizeof($x->ClassesH);

            echo '*****************************************';
            echo '</br>';
            print_r($x);
            echo '</br>';
            echo '*****************************************';
            echo '</br>';
        ?>

<form action="https://web.njit.edu/~vpp29/relcan/front/teacher/testfile.php" method="post">
        <table align="center" class="grades-table" border="1" cellpadding="1" cellspacing="0">
            <?php
                $request = file_get_contents('php://input');
                $x = json_decode($request);
                $sizeQuiz = Sizeof($x->Quizzes);
                //echo $sizeQuiz;
            ?>
            <tr>
                <th>Please select the Exam you wish to append questions to:</th><br />
            </tr>
            <?php for($i=0; $i<$sizeQuiz; $i++) {
                    $n = $x->Quizzes[$i]->QuizName;
            ?>
            <tr>
                <td align="left"><pre><?php echo "<input id='choice' name='quizname' type='radio' value=$n>"; echo " ".$n." ";?></pre></td>
            </tr>
            <?php } ?>
        </table>

                
        <div class="content-create" id="OE">
            <?php
                for($i=0; $i<$sizeOE; $i++) {
                $n = $x->OpenEnded[$i]->QuestionNum;
                $q = $x->OpenEnded[$i]->Question;
            ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='openended[]' type='checkbox' value=$n>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="E">
            <?php for($i=0; $i<$sizeE; $i++) {
                $n = $x->Easy[$i]->QuestionNum;
                $q = $x->Easy[$i]->Question;
            ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='easy[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>
    
        <div class="content-create" id="M">
            <?php for($i=0; $i<$sizeM; $i++) {
                $n = $x->Medium[$i]->QuestionNum;
                $q = $x->Medium[$i]->Question;
            ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='medium[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>
    
        <div class="content-create" id="H">
            <?php for($i=0; $i<$sizeH; $i++) {
                $n = $x->Hard[$i]->QuestionNum;
                $q = $x->Hard[$i]->Question;
            ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='hard[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="Li">
            <?php for($i=0; $i<$sizeLists; $i++) {
                $n = $x->Lists[$i]->QuestionNum;
                $q = $x->Lists[$i]->Question;
            ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='Lists[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="LiE">
            <?php for($i=0; $i<$sizeListsE; $i++) {
                $n = $x->ListsE[$i]->QuestionNum;
                $q = $x->ListsE[$i]->Question;
            ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ListsE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="LiM">
            <?php for($i=0; $i<$sizeListsM; $i++) {
                $n = $x->ListsM[$i]->QuestionNum;
                $q = $x->ListsM[$i]->Question;
            ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ListsM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="LiH">
                <?php for($i=0; $i<$sizeListsH; $i++) {
                    $n = $x->ListsH[$i]->QuestionNum;
                    $q = $x->ListsH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ListsH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="Tu">
                <?php for($i=0; $i<$sizeTurtles; $i++) {
                    $n = $x->Turtles[$i]->QuestionNum;
                    $q = $x->Turtles[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='Turtles[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="TuE">
                <?php for($i=0; $i<$sizeTurtlesE; $i++) {
                    $n = $x->TurtlesE[$i]->QuestionNum;
                    $q = $x->TurtlesE[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='TurtlesE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="TuM">
                <?php for($i=0; $i<$sizeTurtlesM; $i++) {
                    $n = $x->TurtlesM[$i]->QuestionNum;
                    $q = $x->TurtlesM[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='TurtlesM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="TuH">
                <?php for($i=0; $i<$sizeTurtlesH; $i++) {
                    $n = $x->TurtlesH[$i]->QuestionNum;
                    $q = $x->TurtlesH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='TurtlesH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="If">
                <?php for($i=0; $i<$sizeIf; $i++) {
                    $n = $x->If[$i]->QuestionNum;
                    $q = $x->If[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='If[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="IfE">
                <?php for($i=0; $i<$sizeIfE; $i++) {
                    $n = $x->IfE[$i]->QuestionNum;
                    $q = $x->IfE[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='IfE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="IfM">
                <?php for($i=0; $i<$sizeIfM; $i++) {
                    $n = $x->IfM[$i]->QuestionNum;
                    $q = $x->IfM[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='IfM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="IfH">
                <?php for($i=0; $i<$sizeIfH; $i++) {
                    $n = $x->IfH[$i]->QuestionNum;
                    $q = $x->IfH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='IfH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="For">
                <?php for($i=0; $i<$sizeFor; $i++) {
                    $n = $x->For[$i]->QuestionNum;
                    $q = $x->For[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='For[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="ForE">
                <?php for($i=0; $i<$sizeForE; $i++) {
                    $n = $x->ForE[$i]->QuestionNum;
                    $q = $x->ForE[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ForE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="ForM">
                <?php for($i=0; $i<$sizeForM; $i++) {
                    $n = $x->ForM[$i]->QuestionNum;
                    $q = $x->ForM[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ForM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="ForH">
                <?php for($i=0; $i<$sizeForH; $i++) {
                    $n = $x->ForH[$i]->QuestionNum;
                    $q = $x->ForH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ForH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="Def">
                <?php for($i=0; $i<$sizeDef; $i++) {
                    $n = $x->Def[$i]->QuestionNum;
                    $q = $x->Def[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='Def[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="DefE">
                <?php for($i=0; $i<$sizeDefE; $i++) {
                    $n = $x->DefE[$i]->QuestionNum;
                    $q = $x->DefE[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='DefE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="DefM">
                <?php for($i=0; $i<$sizeDefM; $i++) {
                    $n = $x->DefM[$i]->QuestionNum;
                    $q = $x->DefM[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='DefM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="DefH">
                <?php for($i=0; $i<$sizeDefH; $i++) {
                    $n = $x->DefH[$i]->QuestionNum;
                    $q = $x->DefH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='DefH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="While">
                <?php for($i=0; $i<$sizeWhile; $i++) {
                    $n = $x->While[$i]->QuestionNum;
                    $q = $x->While[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='While[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="WhileE">
                <?php for($i=0; $i<$sizeWhileE; $i++) {
                    $n = $x->WhileE[$i]->QuestionNum;
                    $q = $x->WhileE[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='WhileE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="WhileM">
                <?php for($i=0; $i<$sizeWhileM; $i++) {
                    $n = $x->WhileM[$i]->QuestionNum;
                    $q = $x->WhileM[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='WhileM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="WhileH">
                <?php for($i=0; $i<$sizeWhileH; $i++) {
                    $n = $x->WhileH[$i]->QuestionNum;
                    $q = $x->WhileH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='WhileH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="String">
                <?php for($i=0; $i<$sizeString; $i++) {
                    $n = $x->String[$i]->QuestionNum;
                    $q = $x->String[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='String[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="StringE">
                <?php for($i=0; $i<$sizeStringE; $i++) {
                    $n = $x->StringE[$i]->QuestionNum;
                    $q = $x->StringE[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='StringE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="StringM">
                <?php for($i=0; $i<$sizeStringM; $i++) {
                    $n = $x->StringM[$i]->QuestionNum;
                    $q = $x->StringM[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='StringM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="StringH">
                <?php for($i=0; $i<$sizeStringH; $i++) {
                    $n = $x->StringH[$i]->QuestionNum;
                    $q = $x->StringH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='StringH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="Files">
                <?php for($i=0; $i<$sizeFiles; $i++) {
                    $n = $x->Files[$i]->QuestionNum;
                    $q = $x->Files[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='Files[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="FilesE">
                <?php for($i=0; $i<$sizeFilesE; $i++) {
                    $n = $x->FilesE[$i]->QuestionNum;
                    $q = $x->FilesE[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='FilesE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="FilesM">
                <?php for($i=0; $i<$sizeFilesM; $i++) {
                    $n = $x->FilesM[$i]->QuestionNum;
                    $q = $x->FilesM[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='FilesM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="FilesH">
                <?php for($i=0; $i<$sizeFilesH; $i++) {
                    $n = $x->FilesH[$i]->QuestionNum;
                    $q = $x->FilesH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='FilesH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="Dictionaries">
                <?php for($i=0; $i<$sizeDictionaries; $i++) {
                    $n = $x->Dictionaries[$i]->QuestionNum;
                    $q = $x->Dictionaries[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='Dictionaries[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="DictionariesE">
                <?php for($i=0; $i<$sizeDictionariesE; $i++) {
                    $n = $x->DictionariesE[$i]->QuestionNum;
                    $q = $x->DictionariesE[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='DictionariesE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="DictionariesM">
                <?php for($i=0; $i<$sizeDictionariesM; $i++) {
                    $n = $x->DictionariesM[$i]->QuestionNum;
                    $q = $x->DictionariesM[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='DictionariesM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="DictionariesH">
                <?php for($i=0; $i<$sizeDictionariesH; $i++) {
                    $n = $x->DictionariesH[$i]->QuestionNum;
                    $q = $x->DictionariesH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='DictionariesH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="Namespaces">
                <?php for($i=0; $i<$sizeNamespaces; $i++) {
                    $n = $x->Namespaces[$i]->QuestionNum;
                    $q = $x->Namespaces[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='Namespaces[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="NamespacesE">
                <?php for($i=0; $i<$sizeNamespacesE; $i++) {
                    $n = $x->NamespacesE[$i]->QuestionNum;
                    $q = $x->NamespacesE[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='NamespacesE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="NamespacesM">
                <?php for($i=0; $i<$sizeNamespacesM; $i++) {
                    $n = $x->NamespacesM[$i]->QuestionNum;
                    $q = $x->NamespacesM[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='NamespacesM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="NamespacesH">
                <?php for($i=0; $i<$sizeNamespacesH; $i++) {
                    $n = $x->NamespacesH[$i]->QuestionNum;
                    $q = $x->NamespacesH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='NamespacesH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="Exceptions">
                <?php for($i=0; $i<$sizeExceptions; $i++) {
                    $n = $x->Exceptions[$i]->QuestionNum;
                    $q = $x->Exceptions[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='Exceptions[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="ExceptionsE">
                <?php for($i=0; $i<$sizeExceptionsE; $i++) {
                    $n = $x->ExceptionsE[$i]->QuestionNum;
                    $q = $x->ExceptionsE[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ExceptionsE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="ExceptionsM">
                <?php for($i=0; $i<$sizeExceptionsM; $i++) {
                    $n = $x->ExceptionsM[$i]->QuestionNum;
                    $q = $x->ExceptionsM[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ExceptionsM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="ExceptionsH">
                <?php for($i=0; $i<$sizeExceptionsH; $i++) {
                    $n = $x->ExceptionsH[$i]->QuestionNum;
                    $q = $x->ExceptionsH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ExceptionsH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="Classes">
                <?php for($i=0; $i<$sizeClasses; $i++) {
                    $n = $x->Classes[$i]->QuestionNum;
                    $q = $x->Classes[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='Classes[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="ClassesE">
                <?php for($i=0; $i<$sizeClassesE; $i++) {
                    $n = $x->ClassesE[$i]->QuestionNum;
                    $q = $x->ClassesE[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ClassesE[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="ClassesM">
                <?php for($i=0; $i<$sizeClassesM; $i++) {
                    $n = $x->ClassesM[$i]->QuestionNum;
                    $q = $x->ClassesM[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ClassesM[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="ClassesH">
                <?php for($i=0; $i<$sizeClassesH; $i++) {
                    $n = $x->ClassesH[$i]->QuestionNum;
                    $q = $x->ClassesH[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='ClassesH[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <div class="content-create" id="Search">
                <?php for($i=0; $i<$sizeSearch; $i++) {
                    $n = $x->Search[$i]->QuestionNum;
                    $q = $x->Search[$i]->Question;
                    ?>
            <tr>
                <td align=left><pre><?php echo "<input id='choice' name='Search[]' type='checkbox' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
            </tr>
            <?php } ?>
        </div>

        <p></p>
           
        <input type="hidden" value="CQ" name="type">
        <input type="submit" value="Append to Exam"> 
           
    </form> 

    <td align=left><pre><?php echo "****************************TEST CENTER****************************"; ?></pre></td>
</div>
</div>

  <!-- -------------------------------LEFT SIDE---------------------------------------  -->
<div class="column left">

    <h2 align="left">Create Test</h2>
    <form action="https://web.njit.edu/~vpp29/relcan/back/newTest.php" method="post">
            <div id="testName">
            If you wish to create a new test, please enter the  name of the new test: <input type="text" name="testName">
            <input type="submit" value="Send">
                </div>
    </form> 

    <form action="https://web.njit.edu/~vpp29/relcan/back/displayQuestions.php" method="post">
        <table align="center" class="grades-table" border="1" cellpadding="1" cellspacing="0">
            <?php
                $request = file_get_contents('php://input');
                $x = json_decode($request);
                $sizeQuiz = Sizeof($x->Quizzes);
                //echo $sizeQuiz;
            ?>
            <tr>
                <th>Please select the Exam you wish to add points to:</th><br />
            </tr>
            <?php for($i=0; $i<$sizeQuiz; $i++) {
                    $n = $x->Quizzes[$i]->QuizName;
            ?>
            <tr>
                <td align="left"><pre><?php echo "<input id='choice' name='quizname' type='radio' value=$n>"; echo " ".$n." ";?></pre></td>
            </tr>
            <?php } ?>
        </table>
        <input type="submit" value="View Exam">
    </form>

    <form action="" method="post">
        <table border="1" cellpadding="1" cellspacing="0" style="table-layout: fixed; border-collapse:collapse;  word-wrap: break-word; width:100%;">
            <?php
                $request = file_get_contents('php://input');
                $x = json_decode($request);
                $size = Sizeof($x->Questions);

                print_r($x);
                echo '<br>';
                echo 'hello';
            ?>
            <tr>
                <th>&nbsp Question # &nbsp</th><br />
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
                <td align="center"><pre><?php echo "<input id='points' name='points[]' type='number' size='1' value='0'>"; ?></pre></td>
            </tr>
            <?php } ?>
        </table>
        <input type="submit" value="Submit Test">
    </form>
 </div>