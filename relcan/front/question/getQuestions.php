<?php
        
    $con = mysql_connect("sql.njit.edu","vpp29","F3Xs6Y1a");
    if(!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("vpp29", $con);
    
    $FilterEMH= $_POST["FilterEMH"];
    $FilterTopic = $_POST["FilterTopic"];
    $FilterAll = $_POST["All"];
    $Search = $_POST['keywords'];


    $Quiz = mysql_query("SELECT QuizName, QuizID  FROM Quizzes");


    //Search by Keyword
    $sqlSearch = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Question LIKE '%$Search%'");

    //ALL
    $sqlOE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded");
    
    //Difficulty
    $sqlOE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded");
    $sqlEasy = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Difficulty='Easy'");
    $sqlMedium = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Difficulty='Medium'");
    $sqlHard = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Difficulty='Hard'");

    //Topic
    $sqlLists = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Lists'");
    $sqlTurtles = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Turtles'");
    $sqlIf = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='If'");
    $sqlFor = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='For'");
    $sqlDef = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Def'");
    $sqlWhile = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='While'");
    $sqlString = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='String Methods'");
    $sqlFiles = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Files'");
    $sqlDictionaries = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Dictionaries'");
    $sqlNamespaces = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Namespaces'");
    $sqlExceptions = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Exceptions'");
    $sqlClasses = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Classes'");

    //Topic + EASY
    $sqlListsE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Lists' AND Difficulty='Easy'");
    $sqlTurtlesE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Turtles' AND Difficulty='Easy'");
    $sqlIfE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='If' AND Difficulty='Easy'");
    $sqlForE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='For' AND Difficulty='Easy'");
    $sqlDefE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Def' AND Difficulty='Easy'");
    $sqlWhileE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='While' AND Difficulty='Easy'");
    $sqlStringE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='String Methods' AND Difficulty='Easy'");
    $sqlFilesE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Files' AND Difficulty='Easy'");
    $sqlDictionariesE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Dictionaries' AND Difficulty='Easy'");
    $sqlNamespacesE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Namespaces' AND Difficulty='Easy'");
    $sqlExceptionsE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Exceptions' AND Difficulty='Easy'");
    $sqlClassesE = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Classes' AND Difficulty='Easy'");

    //Topic + MEDIUM
    $sqlListsM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Lists' AND Difficulty='Medium'");
    $sqlTurtlesM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Turtles' AND Difficulty='Medium'");
    $sqlIfM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='If' AND Difficulty='Medium'");
    $sqlForM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='For' AND Difficulty='Medium'");
    $sqlDefM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Def' AND Difficulty='Medium'");
    $sqlWhileM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='While' AND Difficulty='Medium'");
    $sqlStringM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='String Methods' AND Difficulty='Medium'");
    $sqlFilesM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Files' AND Difficulty='Medium'");
    $sqlDictionariesM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Dictionaries' AND Difficulty='Medium'");
    $sqlNamespacesM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Namespaces' AND Difficulty='Medium'");
    $sqlExceptionsM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Exceptions' AND Difficulty='Medium'");
    $sqlClassesM = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Classes' AND Difficulty='Medium'");
    
    //Topic + HARD
    $sqlListsH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Lists' AND Difficulty='Hard'");
    $sqlTurtlesH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Turtles' AND Difficulty='Hard'");
    $sqlIfH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='If' AND Difficulty='Hard'");
    $sqlForH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='For' AND Difficulty='Hard'");
    $sqlDefH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Def' AND Difficulty='Hard'");
    $sqlWhileH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='While' AND Difficulty='Hard'");
    $sqlStringH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='String Methods' AND Difficulty='Hard'");
    $sqlFilesH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Files' AND Difficulty='Hard'");
    $sqlDictionariesH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Dictionaries' AND Difficulty='Hard'");
    $sqlNamespacesH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Namespaces' AND Difficulty='Hard'");
    $sqlExceptionsH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Exceptions' AND Difficulty='Hard'");
    $sqlClassesH = mysql_query("SELECT Question, QuestionNum FROM OpenEnded WHERE Topic='Classes' AND Difficulty='Hard'");

    $Searchquestions = array();
    $OEquestions = array();
    $listQuiz = array();

    while($q = mysql_fetch_assoc($Quiz)) {
        $listQuiz[] = $q;
}

    // Keyword
    while($sear = mysql_fetch_assoc($sqlSearch)) {
        $Searchquestions[] = $sear;
    }

    //All
    while($oe = mysql_fetch_assoc($sqlOE)) {
            $OEquestions[] = $oe;
    }
    //Difficulty
    $Easyquestions = array();
    $Mediumquestions = array();
    $Hardquestions = array();
    //Topic
    $Listsquestions = array();
    $Turtlesquestions = array();
    $Ifquestions = array();
    $Forquestions = array();
    $Defquestions = array();
    $Whilequestions = array();
    $Stringquestions = array();
    $Filesquestions = array();
    $Dictionariesquestions = array();
    $Namespacesquestions = array();
    $Exceptionsquestions = array();
    $Classesquestions = array();
    // Topic + Easy
    $ListsquestionsE = array();
    $TurtlesquestionsE = array();
    $IfquestionsE = array();
    $ForquestionsE = array();
    $DefquestionsE = array();
    $WhilequestionsE = array();
    $StringquestionsE = array();
    $FilesquestionsE = array();
    $DictionariesquestionsE = array();
    $NamespacesquestionsE = array();
    $ExceptionsquestionsE = array();
    $ClassesquestionsE = array();
    
    // Topic + Medium
    $ListsquestionsM = array();
    $TurtlesquestionsM = array();
    $IfquestionsM = array();
    $ForquestionsM = array();
    $DefquestionsM = array();
    $WhilequestionsM = array();
    $StringquestionsM = array();
    $FilesquestionsM = array();
    $DictionariesquestionsM = array();
    $NamespacesquestionsM = array();
    $ExceptionsquestionsM = array();
    $ClassesquestionsM = array();
    // Topic + Hard
    $ListsquestionsH = array();
    $TurtlesquestionsH = array();
    $IfquestionsH = array();
    $ForquestionsH = array();
    $DefquestionsH = array();
    $WhilequestionsH = array();
    $StringquestionsH = array();
    $FilesquestionsH = array();
    $DictionariesquestionsH = array();
    $NamespacesquestionsH = array();
    $ExceptionsquestionsH = array();
    $ClassesquestionsH = array();
    


    //Difficulty
    while($e = mysql_fetch_assoc($sqlEasy)) {
            $Easyquestions[] = $e;
    }
    
    while($m = mysql_fetch_assoc($sqlMedium)) {
            $Mediumquestions[] = $m;
    }
    
    while($h = mysql_fetch_assoc($sqlHard)) {
            $Hardquestions[] = $h;
    }
    
    //Topic
    while($li = mysql_fetch_assoc($sqlLists)) {
        $Listsquestions[] = $li;
    }
    while($tu = mysql_fetch_assoc($sqlTurtles)) {
        $Turtlesquestions[] = $tu;
    }
    while($i = mysql_fetch_assoc($sqlIf)) {
        $Ifquestions[] = $i;
    }
    while($fo = mysql_fetch_assoc($sqlFor)) {
        $Forquestions[] = $fo;
    }
    while($de = mysql_fetch_assoc($sqlDef)) {
        $Defquestions[] = $de;
    }
    while($wh = mysql_fetch_assoc($sqlWhile)) {
        $Whilequestions[] = $wh;
    }
    while($st = mysql_fetch_assoc($sqlString)) {
        $Stringquestions[] = $st;
    }
    while($fi = mysql_fetch_assoc($sqlFiles)) {
        $Filesquestions[] = $fi;
    }
    while($di = mysql_fetch_assoc($sqlDictionaries)) {
        $Dictionariesquestions[] = $di;
    }
    while($na = mysql_fetch_assoc($sqlNamespaces)) {
        $Namespacesquestions[] = $na;
    }
    while($ex = mysql_fetch_assoc($sqlExceptions)) {
        $Exceptionsquestions[] = $ex;
    } 
    while($cl = mysql_fetch_assoc($sqlClasses)) {
        $Classesquestions[] = $cl;
    } 


    //Topic + Easy
    while($liE = mysql_fetch_assoc($sqlListsE)) {
        $ListsquestionsE[] = $liE;
    } 
    while($tuE = mysql_fetch_assoc($sqlTurtlesE)) {
        $TurtlesquestionsE[] = $tuE;
    }
    while($iE = mysql_fetch_assoc($sqlIfE)) {
        $IfquestionsE[] = $iE;
    }
    while($foE = mysql_fetch_assoc($sqlForE)) {
        $ForquestionsE[] = $foE;
    }
    while($deE = mysql_fetch_assoc($sqlDefE)) {
        $DefquestionsE[] = $deE;
    }
    while($whE = mysql_fetch_assoc($sqlWhileE)) {
        $WhilequestionsE[] = $whE;
    }
    while($stE = mysql_fetch_assoc($sqlStringE)) {
        $StringquestionsE[] = $stE;
    }
    while($fiE = mysql_fetch_assoc($sqlFilesE)) {
        $FilesquestionsE[] = $fiE;
    }
    while($diE = mysql_fetch_assoc($sqlDictionariesE)) {
        $DictionariesquestionsE[] = $diE;
    }
    while($naE = mysql_fetch_assoc($sqlNamespacesE)) {
        $NamespacesquestionsE[] = $naE;
    }
    while($exE = mysql_fetch_assoc($sqlExceptionsE)) {
        $ExceptionsquestionsE[] = $exE;
    } 
    while($clE = mysql_fetch_assoc($sqlClassesE)) {
        $ClassesquestionsE[] = $clE;
    } 
    
    //Topic + Medium
    while($liM = mysql_fetch_assoc($sqlListsM)) {
        $ListsquestionsM[] = $liM;
    } 
    while($tuM = mysql_fetch_assoc($sqlTurtlesM)) {
        $TurtlesquestionsM[] = $tuM;
    }
    while($iM = mysql_fetch_assoc($sqlIfM)) {
        $IfquestionsM[] = $iM;
    }
    while($foM = mysql_fetch_assoc($sqlForM)) {
        $ForquestionsM[] = $foM;
    }
    while($deM = mysql_fetch_assoc($sqlDefM)) {
        $DefquestionsM[] = $deM;
    }
    while($whM = mysql_fetch_assoc($sqlWhileM)) {
        $WhilequestionsM[] = $whM;
    }
    while($stM = mysql_fetch_assoc($sqlStringM)) {
        $StringquestionsM[] = $stM;
    }
    while($fiM = mysql_fetch_assoc($sqlFilesM)) {
        $FilesquestionsM[] = $fiM;
    }
    while($diM = mysql_fetch_assoc($sqlDictionariesM)) {
        $DictionariesquestionsM[] = $diM;
    }
    while($naM = mysql_fetch_assoc($sqlNamespacesM)) {
        $NamespacesquestionsM[] = $naM;
    }
    while($exM = mysql_fetch_assoc($sqlExceptionsM)) {
        $ExceptionsquestionsM[] = $exM;
    } 
    while($clM = mysql_fetch_assoc($sqlClassesM)) {
        $ClassesquestionsM[] = $clM;
    } 

    //Topic + Hard
    while($liH = mysql_fetch_assoc($sqlListsH)) {
        $ListsquestionsH[] = $liH;
    } 
    while($tuH = mysql_fetch_assoc($sqlTurtlesH)) {
        $TurtlesquestionsH[] = $tuH;
    }
    while($iH = mysql_fetch_assoc($sqlIfH)) {
        $IfquestionsH[] = $iH;
    }
    while($foH = mysql_fetch_assoc($sqlForH)) {
        $ForquestionsH[] = $foH;
    }
    while($deH = mysql_fetch_assoc($sqlDefH)) {
        $DefquestionsH[] = $deH;
    }
    while($whH = mysql_fetch_assoc($sqlWhileH)) {
        $WhilequestionsH[] = $whH;
    }
    while($stH = mysql_fetch_assoc($sqlStringH)) {
        $StringquestionsH[] = $stH;
    }
    while($fiH = mysql_fetch_assoc($sqlFilesH)) {
        $FilesquestionsH[] = $fiH;
    }
    while($diH = mysql_fetch_assoc($sqlDictionariesH)) {
        $DictionariesquestionsH[] = $diH;
    }
    while($naH = mysql_fetch_assoc($sqlNamespacesH)) {
        $NamespacesquestionsH[] = $naH;
    }
    while($exH = mysql_fetch_assoc($sqlExceptionsH)) {
        $ExceptionsquestionsH[] = $exH;
    } 
    while($clH = mysql_fetch_assoc($sqlClassesH)) {
        $ClassesquestionsH[] = $clH;
    } 

    
    //echo json_encode($MCquestions);
    //echo json_encode($TFquestions);
    if($Search != '')
    {
        $Qus = json_encode(array('Search' => $Searchquestions,'Quizzes' => $listQuiz));
        goto a;
    }

    if($FilterAll == "All Questions")
    {
        $Qus = json_encode(array('OpenEnded' => $OEquestions, 'Quizzes' => $listQuiz));
        goto a;
    }

    if($FilterEMH=="Easy")
    {
        $Qus = json_encode(array('Easy' => $Easyquestions, 'Quizzes' => $listQuiz));
    }
    else If ($FilterEMH== "Medium")
    {
        $Qus = json_encode(array('Medium' => $Mediumquestions, 'Quizzes' => $listQuiz));
    }
    else If ($FilterEMH== "Hard")
    {
        $Qus = json_encode(array('Hard' => $Hardquestions, 'Quizzes' => $listQuiz));
    }
    else
    {
        //$Qus = json_encode(array('OpenEnded' => $OEquestions, 'Easy' => $Easyquestions, 'Medium' => $Mediumquestions, 'Hard' => $Hardquestions));
    }

    if($FilterTopic=="Lists")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('ListsE' => $ListsquestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('ListsM' => $ListsquestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('ListsH' => $ListsquestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
            $Qus = json_encode(array('Lists' => $Listsquestions, 'Quizzes' => $listQuiz));
        }
    }
    else if($FilterTopic=="Turtles")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('TurtlesE' => $TurtlesquestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('TurtlesM' => $TurtlesquestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('TurtlesH' => $TurtlesquestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
            $Qus = json_encode(array('Turtles' => $Turtlesquestions, 'Quizzes' => $listQuiz));
        }
        
    }
    else if($FilterTopic=="If")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('IfE' => $IfquestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('IfM' => $IfquestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('IfH' => $IfquestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
        $Qus = json_encode(array('If' => $Ifquestions, 'Quizzes' => $listQuiz));        
        }
    }
    else if($FilterTopic=="For")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('ForE' => $ForquestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('ForM' => $ForquestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('ForH' => $ForquestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
            $Qus = json_encode(array('For' => $Forquestions, 'Quizzes' => $listQuiz));        
        }
        
    }
    else if($FilterTopic=="Def")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('DefE' => $DefquestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('DefM' => $DefquestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('DefH' => $DefquestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
            $Qus = json_encode(array('Def' => $Defquestions, 'Quizzes' => $listQuiz));       
        }
        
    }
    else if($FilterTopic=="While")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('WhileE' => $WhilequestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('WhileM' => $WhilequestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('WhileH' => $WhilequestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
            $Qus = json_encode(array('While' => $Whilequestions, 'Quizzes' => $listQuiz));      
        }
        
    }
    else if($FilterTopic=="String")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('StringE' => $StringquestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('StringM' => $StringquestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('StringH' => $StringquestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
            $Qus = json_encode(array('String' => $Stringquestions, 'Quizzes' => $listQuiz));      
        }
        
    }
    else if($FilterTopic=="Files")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('FilesE' => $FilesquestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('FilesM' => $FilesquestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('FilesH' => $FilesquestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
            $Qus = json_encode(array('Files' => $Filesquestions, 'Quizzes' => $listQuiz));      
        }
        
    }
    else if($FilterTopic=="Dictionaries")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('DictionariesE' => $DictionariesquestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('DictionariesM' => $DictionariesquestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('DictionariesH' => $DictionariesquestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
            $Qus = json_encode(array('Dictionaries' => $Dictionariesquestions, 'Quizzes' => $listQuiz));      
        }
        
    }
    else if($FilterTopic=="Namespaces")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('NamespacesE' => $NamespacesquestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('NamespacesM' => $NamespacesquestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('NamespacesH' => $NamespacesquestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
            $Qus = json_encode(array('Namespaces' => $Namespacesquestions, 'Quizzes' => $listQuiz));      
        }
        
    }
    else if($FilterTopic=="Exceptions")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('ExceptionsE' => $ExceptionsquestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('ExceptionsM' => $ExceptionsquestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('ExceptionsH' => $ExceptionsquestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
            $Qus = json_encode(array('Exceptions' => $Exceptionsquestions, 'Quizzes' => $listQuiz));      
        }
        
    }
    else if($FilterTopic=="Classes")
    {
        if($FilterEMH=="Easy")
        {
            $Qus = json_encode(array('ClassesE' => $ClassesquestionsE, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Medium")
        {
            $Qus = json_encode(array('ClassesM' => $ClassesquestionsM, 'Quizzes' => $listQuiz));
            goto a;
        }
        else if($FilterEMH=="Hard")
        {
            $Qus = json_encode(array('ClassesH' => $ClassesquestionsH, 'Quizzes' => $listQuiz));
            goto a;
        }
        else
        {
            $Qus = json_encode(array('Classes' => $Classesquestions, 'Quizzes' => $listQuiz));     
        }
        
    }


    a:
    
    //echo $Qus;
    
    $crl = curl_init();
    curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~vpp29/relcan/front/teacher/quiz.php");
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $Qus);
    curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
    
    $outputDB = curl_exec($crl);
    curl_close($crl); 
?>