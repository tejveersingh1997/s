<?php

    //$con = mysqli_connect(,,);
    $con = new mysqli("sql1.njit.edu", "vpp29", "F3Xs6Y1a", "vpp29");
    //mysql_select_db("vpp29", $con);
    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 


    //$request = file_get_contents('php://input');
    //$recieve = json_decode($request);

?>
<html>  
  
  <head>  
  </head>  
    
  <body> 

  <form action="https://web.njit.edu/~vpp29/relcan/back/filter.php"  method="post"> 
           <strong>*********************************************</strong>
           <br />
           <strong>Filter</strong>
           <br />
           <strong>*********************************************</strong>
           <br />

        <select name= "FilterAll">
           <option value="" disabled="disabled" selected="selected">Select All</option>
           <option value="All">Select All</option>
       </select>
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
           <option value="SAtring methods">String Methods</option>
           <option value="Files">Files</option>
           <option value="Dictionaries">Dictionaries</option>
           <option value="Namespaces">Namespaces</option>
           <option value="Exceptions">Exceptions</option>
           <option value="Classes">Classes</option>
       </select>
       <br/>

        <form action="https://web.njit.edu/~vpp29/relcan/back/filter.php" method="post">
            <input type="hidden" value="All Questions" name="All"> 
            <input type="submit" value="All Questions" />
        </form>



        <form style="text-align:center;" method="get" action="https://web.njit.edu/~vpp29/relcan/back/filter.php">
  <label>
    Search
    <input type="text"name="keywords" autocomplete="off">
  </label>
  <input type="submit" value="Search"><br>
</form>


       <input type="hidden" value="OE" name="Type"> 
       <input type="submit" value="Search">
     </form>


  </body>  
    
  </html>  

