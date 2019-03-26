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
  background-color: lightblue;
  overflow: scroll;
  width: 50%;
}

.column.right {
  overflow: scroll;
  background-color: lightgreen;
  width: 50%;
}



</style>


<div class="row">
  <!-- -------------------------------RIGHT SIDE---------------------------------------  -->
  <div class="column right">
    <h2>Question Bank</h2>
    <p>Filters: Right side </p>
    
  </div>
  <!-- -------------------------------LEFT SIDE---------------------------------------  -->
  <div class="column left">
    <h2>Create A Question</h2>


    <script src="https://web.njit.edu/~vpp29/CS490/front/js/function.js"></script>
    <div class="create-content">
            <p><?php echo $msg; ?></p>
            <h2>Please Create A Question</h2>
    </div>
   
    <div class="content-create" id="OE">
            
    	<form action="https://web.njit.edu/~vpp29/CS490/front/question/addQuestion.php" name="addQuestion" method="post">
        <strong>Please type your new question here</strong>
        <br />
    		<textarea id="OEQ" name="Question" style="width:400px;height:95px;"></textarea>
        <br />
	      <br />

        <b>Test Case:</b>
	      <textarea type="text" id="Opt1" name="Opt1" style="width:320px; min-height: 15px; max-height: none;"></textarea>
	      <br />
	     
	      <strong>Please type the answer here</strong>
	      <br />
		    <textarea id="OEA" name="Answer" style="width:400px; min-height: 100px; max-height: none;"></textarea>
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
        <input type="hidden" value="OE" name="Type">
        <input type="submit" value="Add To Question Bank">
      </form>
	    <br />
    </div>
  </div>
</div>
