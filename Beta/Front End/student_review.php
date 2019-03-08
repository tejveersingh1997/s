
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="student_view.js" type="text/JavaScript"></script>
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

input[type=text], input[type=password] {
  width: 40%;
  padding: 12px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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

}


}
</style>

<script type = "text/javascript">

    function goback()
    {
        window.location ="student_view.php";
    }
</script>
</head>

<body>

<h2>NJIT Student View </h2>

<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="NJIT.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <p>This is where your review would be: </p>
	<!-- -->

	
  </div>

  <input type = "button" value = "Go Back" onclick = "goback();" style="display: block; margin: 0 auto;"/>

</form>

</body>


<div id="ajaxDiv"></div>
</html>