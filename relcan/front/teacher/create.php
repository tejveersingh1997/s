<?php
    session_start();
    include('theader.php');
    include('addQuestion.php');
?>
<?php 
$msg = "";
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
}
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

<script >

            
    var counter = 1;
    var limit = 6;
    function addInput(divName){
        if (counter == limit)  {
            alert("You have reached the limit of adding " + counter + " inputs");
        }
        else {
            var newdiv = document.createElement('div');
            newdiv.innerHTML = "Test Case " + (counter + 1) + ": "+" ( <input type='text' name='myInputs["+ (counter + 1)+"][]' size='3' placeholder = 'arg1'>,<input type='text' name='myInputs["+ (counter + 1)+"][]' size='3' placeholder = 'arg2'>,<input type='text' name='myInputs["+ (counter + 1)+"][]' size='3' placeholder = 'arg3'>,<input type='text' name='myInputs["+ (counter + 1)+"][]' size='3' placeholder = 'arg4'>,<input type='text' name='myInputs["+ (counter + 1)+"][]' size='3' placeholder = 'arg5'>,<input type='text' name='myInputs["+ (counter + 1)+"][]' size='3' placeholder = 'arg6'> ) <input type='text' name='myOutputs[]' size='3' placeholder='Output'>";
            document.getElementById(divName).appendChild(newdiv);
            counter++;
        }
    }
    function removeInput(divName)
    {
        if (counter>1){
            document.getElementById(divName).removeChild(document.getElementById(divName).lastChild);
            counter--;
        }
    }
      
</script>  




  <!-- -------------------------------RIGHT SIDE---------------------------------------  -->
  <div class="column right">
    <h2>Question Bank</h2>



<script src="https://web.njit.edu/~vpp29/relcan/front/js/function.js"></script>
<div class="create-content">
        
<form action="https://web.njit.edu/~vpp29/relcan/front/question/getQuestionsC.php" name="addQuestion" method="post"> 
           <strong>*********************************************</strong>
           <br />
           <strong>Filter</strong>
           <br />
           <strong>*********************************************</strong>
           <br />

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
     
     <strong>*********************************************</strong>
     <br />
        
        
        <form class="choice" action="https://web.njit.edu/~vpp29/relcan/front/question/getQuestionsC.php" method="post">


            <form style="text-align:center;" method="post" action="https://web.njit.edu/~vpp29/relcan/front/question/getQuestionsC.php">
            <label>
            <input type="text" name="keywords" placeholder= "Search by keywords" autocomplete="off">
            </label>
             <input type="submit" value="Search"><br>
            </form>

            <strong>*********************************************</strong>
             <br />

             <form action="https://web.njit.edu/~vpp29/relcan/front/question/getQuestionsC.php" method="post">
            <input type="hidden" value="All Questions" name="All"> 
            <input type="submit" value="All Questions" />
            </form>

            <strong>*********************************************</strong>
             <br />
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
                    echo '*****************************************';
                    echo '</br>';




                ?>
                
                
                
                
                
                <div class="content-create" id="MC">
                <tr>
                    <th></th><br />
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
                    <th></th>
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
                    <th></th>
                </tr>
                    <?php
                        for($i=0; $i<$sizeOE; $i++) {
                        $n = $x->OpenEnded[$i]->QuestionNum;
                        $q = $x->OpenEnded[$i]->Question;
                    ?>
                <tr>
                    <td align=left><pre><?php echo "<id='choice' name='openended[]' value=$n>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
                </tr>
                <?php } ?>
                </div>
                 <div class="content-create" id="E">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeE; $i++) {
             $n = $x->Easy[$i]->QuestionNum;
             $q = $x->Easy[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='easy[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>
    
<div class="content-create" id="M">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeM; $i++) {
             $n = $x->Medium[$i]->QuestionNum;
             $q = $x->Medium[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>
    
<div class="content-create" id="H">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeH; $i++) {
             $n = $x->Hard[$i]->QuestionNum;
             $q = $x->Hard[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='hard[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="Li">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeLists; $i++) {
             $n = $x->Lists[$i]->QuestionNum;
             $q = $x->Lists[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="LiE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeListsE; $i++) {
             $n = $x->ListsE[$i]->QuestionNum;
             $q = $x->ListsE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="LiM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeListsM; $i++) {
             $n = $x->ListsM[$i]->QuestionNum;
             $q = $x->ListsM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="LiH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeListsH; $i++) {
             $n = $x->ListsH[$i]->QuestionNum;
             $q = $x->ListsH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="Tu">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeTurtles; $i++) {
             $n = $x->Turtles[$i]->QuestionNum;
             $q = $x->Turtles[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="TuE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeTurtlesE; $i++) {
             $n = $x->TurtlesE[$i]->QuestionNum;
             $q = $x->TurtlesE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="TuM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeTurtlesM; $i++) {
             $n = $x->TurtlesM[$i]->QuestionNum;
             $q = $x->TurtlesM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="TuH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeTurtlesH; $i++) {
             $n = $x->TurtlesH[$i]->QuestionNum;
             $q = $x->TurtlesH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="If">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeIf; $i++) {
             $n = $x->If[$i]->QuestionNum;
             $q = $x->If[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="IfE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeIfE; $i++) {
             $n = $x->IfE[$i]->QuestionNum;
             $q = $x->IfE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="IfM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeIfM; $i++) {
             $n = $x->IfM[$i]->QuestionNum;
             $q = $x->IfM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="IfH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeIfH; $i++) {
             $n = $x->IfH[$i]->QuestionNum;
             $q = $x->IfH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="For">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeFor; $i++) {
             $n = $x->For[$i]->QuestionNum;
             $q = $x->For[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="ForE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeForE; $i++) {
             $n = $x->ForE[$i]->QuestionNum;
             $q = $x->ForE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="ForM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeForM; $i++) {
             $n = $x->ForM[$i]->QuestionNum;
             $q = $x->ForM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="ForH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeForH; $i++) {
             $n = $x->ForH[$i]->QuestionNum;
             $q = $x->ForH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="Def">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeDef; $i++) {
             $n = $x->Def[$i]->QuestionNum;
             $q = $x->Def[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="DefE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeDefE; $i++) {
             $n = $x->DefE[$i]->QuestionNum;
             $q = $x->DefE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="DefM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeDefM; $i++) {
             $n = $x->DefM[$i]->QuestionNum;
             $q = $x->DefM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="DefH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeDefH; $i++) {
             $n = $x->DefH[$i]->QuestionNum;
             $q = $x->DefH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="While">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeWhile; $i++) {
             $n = $x->While[$i]->QuestionNum;
             $q = $x->While[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="WhileE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeWhileE; $i++) {
             $n = $x->WhileE[$i]->QuestionNum;
             $q = $x->WhileE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="WhileM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeWhileM; $i++) {
             $n = $x->WhileM[$i]->QuestionNum;
             $q = $x->WhileM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="WhileH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeWhileH; $i++) {
             $n = $x->WhileH[$i]->QuestionNum;
             $q = $x->WhileH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="String">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeString; $i++) {
             $n = $x->String[$i]->QuestionNum;
             $q = $x->String[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="StringE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeStringE; $i++) {
             $n = $x->StringE[$i]->QuestionNum;
             $q = $x->StringE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="StringM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeStringM; $i++) {
             $n = $x->StringM[$i]->QuestionNum;
             $q = $x->StringM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="StringH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeStringH; $i++) {
             $n = $x->StringH[$i]->QuestionNum;
             $q = $x->StringH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="Files">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeFiles; $i++) {
             $n = $x->Files[$i]->QuestionNum;
             $q = $x->Files[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="FilesE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeFilesE; $i++) {
             $n = $x->FilesE[$i]->QuestionNum;
             $q = $x->FilesE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="FilesM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeFilesM; $i++) {
             $n = $x->FilesM[$i]->QuestionNum;
             $q = $x->FilesM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="FilesH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeFilesH; $i++) {
             $n = $x->FilesH[$i]->QuestionNum;
             $q = $x->FilesH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="Dictionaries">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeDictionaries; $i++) {
             $n = $x->Dictionaries[$i]->QuestionNum;
             $q = $x->Dictionaries[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="DictionariesE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeDictionariesE; $i++) {
             $n = $x->DictionariesE[$i]->QuestionNum;
             $q = $x->DictionariesE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="DictionariesM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeDictionariesM; $i++) {
             $n = $x->DictionariesM[$i]->QuestionNum;
             $q = $x->DictionariesM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="DictionariesH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeDictionariesH; $i++) {
             $n = $x->DictionariesH[$i]->QuestionNum;
             $q = $x->DictionariesH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="Namespaces">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeNamespaces; $i++) {
             $n = $x->Namespaces[$i]->QuestionNum;
             $q = $x->Namespaces[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="NamespacesE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeNamespacesE; $i++) {
             $n = $x->NamespacesE[$i]->QuestionNum;
             $q = $x->NamespacesE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="NamespacesM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeNamespacesM; $i++) {
             $n = $x->NamespacesM[$i]->QuestionNum;
             $q = $x->NamespacesM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="NamespacesH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeNamespacesH; $i++) {
             $n = $x->NamespacesH[$i]->QuestionNum;
             $q = $x->NamespacesH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="Exceptions">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeExceptions; $i++) {
             $n = $x->Exceptions[$i]->QuestionNum;
             $q = $x->Exceptions[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="ExceptionsE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeExceptionsE; $i++) {
             $n = $x->ExceptionsE[$i]->QuestionNum;
             $q = $x->ExceptionsE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="ExceptionsM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeExceptionsM; $i++) {
             $n = $x->ExceptionsM[$i]->QuestionNum;
             $q = $x->ExceptionsM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="ExceptionsH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeExceptionsH; $i++) {
             $n = $x->ExceptionsH[$i]->QuestionNum;
             $q = $x->ExceptionsH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="Classes">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeClasses; $i++) {
             $n = $x->Classes[$i]->QuestionNum;
             $q = $x->Classes[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="ClassesE">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeClassesE; $i++) {
             $n = $x->ClassesE[$i]->QuestionNum;
             $q = $x->ClassesE[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="ClassesM">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeClassesM; $i++) {
             $n = $x->ClassesM[$i]->QuestionNum;
             $q = $x->ClassesM[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="ClassesH">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeClassesH; $i++) {
             $n = $x->ClassesH[$i]->QuestionNum;
             $q = $x->ClassesH[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>

<div class="content-create" id="Search">
    <tr>
        <th></th>
    </tr>
        <?php for($i=0; $i<$sizeSearch; $i++) {
             $n = $x->Search[$i]->QuestionNum;
             $q = $x->Search[$i]->Question;
            ?>
    <tr>
        <td align=left><pre><?php echo "<id='choice' name='medium[]' value='$q'>"; echo " (".$n.") "." "; echo $q; ?></pre></td>
    </tr>
    <?php } ?>
</div>



            <p></p>
           
            <input type="hidden" value="CQ" name="type">
         <!--   <input type="submit" value="Fetch Questions"> -->
           
        </form> 

        <td align=left><pre><?php echo "****************************TEST CENTER****************************"; ?></pre></td>



	    <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

 
</div>
</div>









  </div>
  <!-- -------------------------------LEFT SIDE---------------------------------------  -->
  <div class="column left">
    <h2>Create A Question</h2>


    <script src="https://web.njit.edu/~vpp29/relcan/front/js/function.js"></script>
    <div class="create-content">
            <p><?php echo $msg; ?></p>
    </div>
   
    <div class="content-create" id="OE">
            
    <form action="https://web.njit.edu/~vpp29/relcan/front/question/addQuestion.php" name="addQuestion" method="post"> 
       
        <strong>Please type your new question here</strong>
        <br />
    		<textarea id="OEQ" name="Question" style="width:400px;height:95px;"></textarea>
        <br />
	      <br />

        <!--
        Case #1 <input type="text" name='Opt1' placeholder="Input"> <input type="text" name='Out1' placeholder="Output"> <br />
        Case #2 <input type="text" name='Opt2' placeholder="Input"> <input type="text" name='Out2' placeholder="Output">
        -->

        <div id="dynamicInput">
        Test Case 1: ( <input type="text" name="myInputs[1][]" size="3" placeholder = 'arg1'>,<input type="text" name="myInputs[1][]" size="3" placeholder = 'arg2'>,<input type="text" name="myInputs[1][]" size="3" placeholder = 'arg3'>,<input type="text" name="myInputs[1][]" size="3" placeholder = 'arg4'>,<input type="text" name="myInputs[1][]" size="3"placeholder = 'arg5'>,<input type="text" name="myInputs[1][]" size="3" placeholder = 'arg6'> ) <input type="text" name="myOutputs[]" size="3" placeholder="Output">
        </div>
        <input type="button" value="Add" onClick="addInput('dynamicInput');">
        <input type="button" value="Remove" onClick="removeInput('dynamicInput');">



        <br />
          <strong>*********************************************</strong>
          <br />
	      <strong>Please select the difficulty of the question</strong>
        <br />
        <label style="cursor:pointer;">
          <input type="radio" name="Diff" value="Easy">&nbsp;Easy&nbsp;
		    </label>
		    <label style="cursor:pointer;">
          <input type="radio" name="Diff" value="Medium">&nbsp;Medium&nbsp;
		    </label>
		    <label style="cursor:pointer;">
          <input type="radio" name="Diff" value="Hard">&nbsp;Hard &nbsp;
		    </label>
		    <br />
            <strong>*********************************************</strong>
          <br />
	      <strong>Please select the constraint of the question</strong>
        <br />
        <label style="cursor:pointer;">
          <input type="radio" name="Cons" value="For">&nbsp;FOR LOOP&nbsp;
		    </label>
		    <label style="cursor:pointer;">
          <input type="radio" name="Cons" value="While">&nbsp;WHILE LOOP&nbsp;
		    </label>
		    <label style="cursor:pointer;">
          <input type="radio" name="Cons" value="Return">&nbsp;RETURN/PRINT&nbsp;
		    </label>
		    <br />
            
            <strong>*********************************************</strong>
            <br />
            <strong>Please select the topic of the question</strong>
            <br />
        <select name= "Topic">
            <option value="" disabled="disabled" selected="selected">Please select a topic</option>
            <option value="Lists">Lists</option>
            <option value="Turtles">Turtles</option>
            <option value="If">If</option>
            <option value="For">For Loops</option>
            <option value="Def">Def</option>
            <option value="While">While Loops</option>
            <option value="String Methods">String Methods</option>
            <option value="Files">Files</option>
            <option value="Dictionaries">Dictionaries</option>
            <option value="Namespaces">Namespaces</option>
            <option value="Exceptions">Exceptions</option>
            <option value="Classes">Classes</option>
        </select>

        <input type="hidden" value="OE" name="Type">
        <br /> 
        <strong>*********************************************</strong>
        <br /> 
        <input type="submit" value="Add To Question Bank">
      </form>
	    <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    </div>
  </div>
</div>
