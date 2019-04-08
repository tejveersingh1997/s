<?php

$con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
    if(!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("vpp29", $con);


$FilterEMH= $_POST["FilterEMH"];
$FilterTopic = $_POST["FilterTopic"];
$FilterAll = $_POST["All"];

$Search = $_GET['keywords'];

print_r($Search);

$sqlSearch = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Question LIKE '%$Search%'");


$sqlOE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded");
$sqlEasy = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Difficulty='Easy'");
$sqlMedium = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Difficulty='Medium'");
$sqlHard = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Difficulty='Hard'");
    
$Searchquestions = array();
$OEquestions = array();
$Easyquestions = array();
$Mediumquestions = array();
$Hardquestions = array();
    
    while($e = mysql_fetch_assoc($sqlEasy)) {
            $Easyquestions[] = $e;
    }
    
    while($m = mysql_fetch_assoc($sqlMedium)) {
            $Mediumquestions[] = $m;
    }
    
    while($h = mysql_fetch_assoc($sqlHard)) {
            $Hardquestions[] = $h;
    }
    
    
    while($oe = mysql_fetch_assoc($sqlOE)) {
        $OEquestions[] = $oe;
    }

    while($se = mysql_fetch_assoc($sqlSearch)) {
        $Searchquestions[] = $se;
    }



echo "********************TEST PAGE****************************"; 
echo "<br>";
print_r ($Searchquestions);
echo "<br>";

If ($FilterEMH=="Easy")
{
    echo "********************EASY****************************";
    echo "<br>";
    echo "You have selected EASY";
    echo "<br>";
    echo build_table($Easyquestions);
    echo "<br>";
    echo "****************************************************";
    echo "<br>";
    
}
else If ($FilterEMH== "Medium")
{
    echo "********************MEDIUM****************************";
    echo "<br>";
    echo "You have selected MEDIUM";
    echo "<br>"; 

    echo build_table($Mediumquestions);
    echo "<br>";
    echo "****************************************************";
    echo "<br>";
}
else If ($FilterEMH== "Hard")
{
    echo "********************HARD****************************";
    echo "<br>";
    echo "You have selected HARD";
    echo "<br>";
    echo build_table($Hardquestions);
    echo "<br>";
    echo "****************************************************";
    echo "<br>";
}
print_r($FilterEMH);
echo "<br>";
print_r($FilterTopic);
echo "<br>";
print_r($FilterAll);


    function build_table($array){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}
echo "<br>";
echo "********************ALL QUESTIONS****************************"; 
echo "<br>";
echo build_table($Searchquestions);
 
echo "<br>";



echo "****************************************************"; 
echo "<br>";

?>