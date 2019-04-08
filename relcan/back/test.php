<?php
/*
    //$con = mysqli_connect(,,);
    $con = new mysqli("sql1.njit.edu", "vpp29", "F3Xs6Y1a", "vpp29");
    //mysql_select_db("vpp29", $con);
    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

*/
    //$request = file_get_contents('php://input');
    //$recieve = json_decode($request);
    echo "********************TEST PAGE****************************"; 
    echo '<br>';

?>
<html>  
  
  <head>  
  </head>  
    
  <body> 
  
  <form action="https://web.njit.edu/~vpp29/relcan/back/sendTest.php" method="post">
        <tr>
            <th>Write your answer here</th>
        </tr>
        <br>
        <textarea name="openended" value="Opt1" style="width:600px; min-height: 300px;" placeholder="Enter your answer here..." onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}">
        </textarea>

        <input type="submit" value="Submit Quiz">
    
    </form>
  </body>  
    
  </html>  

