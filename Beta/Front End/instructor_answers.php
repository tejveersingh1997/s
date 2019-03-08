<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 60px;
}

.left {
  left: 0;
  background-color: white;
  color: black;
}

.right {
  right: 0;
  background-color: black;
}

.centered {
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

</style>
<script type = "text/javascript">
    function maketest()
    {
        window.location ="instructor_maketest.php";
    }
    function goback()
    {
        window.location ="instructor_view.php";
    }

</script>
</head>
<body>


<div class="split left">
  <div class="centered">
    <h2>Enter Answer to the question</h2>
    <input id="question" type="text" name="question" rows= "4" cols="50" placeholder="Answer">
<input type = "button" value = "Submit" onclick = "maketest();" style="display: block; margin: 0 auto;" />
<input type = "button" value = "Go Back" onclick = "goback();" style="display: block; margin: 0 auto;" />



  </div>
</div>




<div class="split right">
  <div class="centered">
    <h2>Question Bank</h2>
    <!-- Tab links -->
  <div class="tab">
    
  </div>

  <div class="container">
  <h2> List of questions</h2>
  <p> Questions </p>


</div>






     
</body>
</html> 