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
    function answers()
    {
        window.location ="instructor_answers.php";
    }

</script>
</head>
<body>


<div class="split left">
  <div class="centered">
    <h2>Enter Question in Test Bank</h2>
    <input id="question" type="text" name="question" rows= "4" cols="50" placeholder="Question">
    <p>Difficulty: </p>
    <form action="">
  <input type="radio" name="answer" value="easy"> Easy
  <input type="radio" name="answer" value="medium"> Medium
  <input type="radio" name="answer" value="hard"> Hard
  <input type = "button" value = "Submit" onclick = "answers();" style="display: block; margin: 0 auto;" />
</form>



  </div>
</div>


<<script type="text/javascript">  
	function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<div class="split right">
  <div class="centered">
    <h2>Question Bank</h2>
    <!-- Tab links -->
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Difficulty')">DIFFICULTY</button>
    <button class="tablinks" onclick="openCity(event, 'Keyword')">KEYWORD</button>
    <button class="tablinks" onclick="openCity(event, 'Topic')">TOPIC</button>
  </div>

  <div class="container">
  <h2> List of questions</h2>
  <p> Questions </p>


  </div>

  <!-- Tab content -->
  <div id="Difficulty" class="tabcontent">
    <h3></h3>
    <p>Action that filters difficulty</p>
  </div>

<div id="Keyword" class="tabcontent">
  <h3></h3>
  <p>Action that filters keyword</p> 
</div>

<div id="Topic" class="tabcontent">
  <h3></h3>
  <p>Action that filters topic</p>
</div>
  </div>
</div>






     
</body>
</html> 