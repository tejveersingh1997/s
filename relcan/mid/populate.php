<?php
$con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
mysql_select_db("vpp29", $con);
$request = file_get_contents('php://input');
$x = json_decode($request);
#$feedback = $x->FeedBack;
$OE = $x->OpenEnded;
$Name = $x->QuizName;
$parameter = mysql_query("select Opt1 from $Name where Opt2 = '' AND Opt3 = '' AND Opt4 = ''");
$info = mysql_fetch_assoc($parameter);
$para = $info[('Opt1')];
$output = $OE;
    $method_pattern = '/[a-z]+\(/';
    preg_match($method_pattern, $output, $method);
    $method = trim($method[0], '()');
$file = "MyClass.java"; #this is the name of the predetermined java file, already populated with a class name.
$file2 = "ending.txt";
$error_output = "";
$java_output = "";
//.$method.$para.
$newadd = $output.' public static void main (String[] args) { '.$method.$para.';}}';
file_put_contents($file, $newadd, FILE_APPEND); #appends the input passed from the front end to the premade java file
//new from 5/13/14
#file_put_contents($file2, $method, FILE_APPEND);
#file_put_contents($file2, $para, FILE_APPEND);
#file_put_contents($file2, '();}', FILE_APPEND);
//new from 5/13/14
#$addition = file_get_contents($file2); #retrieves new code to perform "test"
#file_put_contents($file, $addition, FILE_APPEND); #appends code to file to perform "test"
#file_put_contents($file, "}", FILE_APPEND); #adds the extra closing brace that pairs up with the class name declaration
exec("javac MyClass.java"); #compiles the java code
$filetest = "MyClass.class";
if(file_exists($filetest) == true)
{
$java_output = shell_exec("java MyClass"); #save the output of the java code. DON"T FORGET EXEC ONLY CAPTURES THE LAST LINE OF OUTPUT. I BELIEVE PASSTHRU CAPTURES IT ALL.
}
#if solution == expected, java_output = "Correct. Good job."; #######GOING TO USE IN FINAL PRODUCT
if(file_exists($filetest) != true) {
    $error_output = "Compilation error. 0 points were awarded.";
    $java_output = $error_output;
} #makes sure the class file was created aka checks compilation.
exec("cp -rf ./restore/MyClass.java ."); #copies the backup java file, containing only the class declaration, back into the main folder, in preparation for another student to take the exam
#exec("cp -rf ./restore/ending.txt ."); #restores ending.txt
exec("rm MyClass.class"); #removes the class file created from a previous student taking the exam.
#echo $java_output;
        $x->FeedBack = $java_output;
	$y = json_encode($x);
    $crl = curl_init();
    //curl_setopt($crl, CURLOPT_URL, "http://web.njit.edu/~ovl2/CS490/Front/login.php");
    curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/relcan/back/grading.php");
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $y);
    curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
    $outputDB = curl_exec($crl);
    curl_close($crl);
?>