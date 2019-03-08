
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="login_front.js" type="text/JavaScript"></script>
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
</style>
</head>
<body>

<h2>NJIT Login (Alpha)</h2>

<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="NJIT.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">

  <tr class="prop">
		<td class="name"><label for="login:username">NJIT UCID:</label></td>
		<td class="value"><input id="login:username" type="text" name="login:username" class="form-login" size="30" placeholder="Username" required autofocus></td>
	</tr>
	<br></br> 
	<tr class="prop">
		<td class="name"><label for="login:password">Password:</label></td>
		<td class="value"><input id="login:password" type="password" name="login:password" class="form-login" size="30" placeholder="Password"></td>
	</tr>
	<br></br> 
	<!-- -->
	<div class="button" style="margin: 1em 1em">
					<input class="form-control" type="button" onclick="ajaxLoginFunction();" value="Login">
	
	
  </div>

</form>

</body>
<script type="text/javascript">  
	var MID_PATH="https://web.njit.edu/~ap923/";
</script>

<div id="ajaxDiv"></div>
</html>