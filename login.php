
<!DOCTYPE html>
<html>
<head>

<!–– Links with login_front.js ––>

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="login_front.js" type="text/JavaScript"></script>


<!–– CSS style is inserted here––>

<style>

h1 {
  font-family: Arial, Helvetica, sans-serif;
  color:White;
  font-size: 40px;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  color:White;
  font-size: 8px;
  background-color: #711313;
}

form {
  position:center;
        border: 5px solid #f1f1f1;
        padding: 12px 10px;
        background-color: rgb(228, 78, 78);
        width: 60%;

}

input[type=text], input[type=password] {
  width: 40%;
  padding: 12px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: red;
  color: white;
  padding: 20px 30px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 60%;
}

button:hover {
  opacity: 0.8;
}

</style>
</head>



<!–– HTML Menu here ––>



<!–– HTML Login form here ––>
<center>
<h1 class="h1"> NJIT E-PROCTOR </h1>
	
<body>

<form action="/action_page.php">

        <div class="container">

        <tr class="prop">
                <td class="name"><label for="login:username"></label></td>
                <td class="value"><input id="login:username" type="text" name="login:username" class="form-login" size="30" placeholder="Username" required autofocus></td>
        </tr>
	<br></br>
        <tr class="prop">
                <td class="name"><label for="login:password"></label></td>
                <td class="value"><input id="login:password" type="password" name="login:password" class="form-login" size="30" placeholder="Password"></td>
        </tr>
	<br></br>
        <tr class="prop">
                <td class="value"><input id="login:user" type="radio" name="login:user" class="form-login" value="teacher"> Teacher</td>
                <td class="value"><input id="login:user1" type="radio" name="login:user" class="form-login" value="student"> Student</td>
        </tr>
	<br></br>

        <!-- -->
        <div class="button" style="margin: 1em 1em">
                <input class="form-control" type="button" onclick="ajaxLoginFunction();" value="Login">
        </div>

</form>

</body>


</center>

<!–– Sends MID_PATH variable to login_front.js ––>

<script type="text/javascript">
        var MID_PATH="https://web.njit.edu/~vpp29/";
</script>

<div id="ajaxDiv"></div>
<div id="ajaxDiv2" style="display: none;"></div>

</html>


