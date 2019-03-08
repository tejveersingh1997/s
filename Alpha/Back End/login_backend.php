<?php

$str_json = file_get_contents('php://input');
$response = json_decode($str_json, true);

$name="none";$pass="none";
if(isset($response['name'])) $name = $response['name'];
if(isset($response['pass'])) $pass = $response['pass'];

include "db.php";

$sql = 'SELECT * FROM basiclogin';
$result = mysqli_query($dbconnect, $sql);

if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){

if (($row["USERNAME"]) == $name){
if (($row["PASSWORD"]) == $pass) echo "Project Accept". "<br>";
else echo "Project Reject: Incorrect Credentials". "<br>";
}
else echo "Project Reject: Incorrect Credentials". "<br>";
}
}
else echo "Error: No Records in Database.". "<br>";

?>

























^G Get Help                   ^O WriteOut                   ^R Read File                  ^Y Prev Page                  ^K Cut Text                   ^C Cur Pos
^X Exit                       ^J Justify                    ^W Where Is                   ^V Next Page                  ^U UnCut Text                 ^T To Spell
