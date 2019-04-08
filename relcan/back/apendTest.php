<?php
session_start();

$Name= $_POST["testName"];
print_r($Name);
echo "<br>";

$con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
if(!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("vpp29", $con);

//$insertQuiz = "INSERT INTO Quizzes (QuizName) VALUES ('$Name')";
//$exec = mysql_query($insertQuiz, $con);

//$create = mysql_query("CREATE TABLE `vpp29`.`$Name` (`Question` TEXT NOT NULL, `YourAnswer` VARCHAR(255) NOT NULL, `Answer` VARCHAR(255) NOT NULL, `Points` INT NOT NULL, `QuestionNum` INT(255) NOT NULL AUTO_INCREMENT, PRIMARY KEY (`QuestionNum`))");

header ("Location: http://web.njit.edu/~vpp29/relcan/front/question/getQuestions.php");



?>