
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: gray;
}
form {
  position:center;
	border: 3px solid #f1f1f1;
	background-color: rgb(228, 78, 78);
	width: 80%;

}



button {
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

/*button:hover {
  opacity: 0.8;
}*/

.imgcontainer {
  text-align: center;
  margin: 6px 0 6px 0;
}

img.avatar {
  width: 20%;
  border-radius: 10%;
}

.container {
  color: black;
  text-align: center;
  padding: 10px;
}


</style>
<script type = "text/javascript">
    function taketest()
    {
        window.location ="student_test.php";
    }
    function review()
    {
        window.location ="student_review.php";
    }
</script>
</head>

<body>

<h2>NJIT Student View </h2>

<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="NJIT.png" alt="Avatar" class="avatar">
  </div>
</form>
      
      <form>
         <input type = "button" value = "Take Test" onclick = "taketest();" style="display: block; margin: 0 auto;" />
         <input type = "button" value = "Review Test" onclick = "review();" style="display: block; margin: 0 auto;" />
      </form>

</body>


<div id="ajaxDiv"></div>
</html>