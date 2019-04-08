
<? php
    $request = file_get_contents('php://input');
    $recieve = json_decode($request);
    


    echo $recieve;
    echo '<br>';
    echo $first;

?>