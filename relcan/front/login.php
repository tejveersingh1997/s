<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalab$
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="format-detection" content="telephone=no">
<meta name="mobile-web-app-capable" content="yes">
						 
						 
<!–– Links with login_front.js ––>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="login_front.js" type="text/JavaScript"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  color:black;
  font-size: 18px;
//  background: url("signin.png") no-repeat center center fixed;
//  background-size: 1000px 650px;
}
form {
  position: absolute;
  background-color: rgb(100, 215, 50, 1.0);
  width: 30%;
  height: 40%;
  transform: translate(115%, 94%);
}
input[type=text], input[type=password] {
  width: 40%;
  padding: 12px 12px;
  margin: 4px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}
button {
  border-radius: 15px;
  background: #73AD21;
  padding: 20px;
  width: 200px;
  height: 150px;
}
button:hover {
  opacity: 0.8;
}
ajaxDisplay, ajaxHiddenDisplay{
font-family: Arial, Helvetica, sans-serif;
  color:red;
  font-size: 8px;
}
</style>
</head>
<!–– HTML Menu here ––>
				
<!–– HTML Login form here ––>
<center>
<body>
<form action="/action_page.php">
        <div class="container">
        <br></br>
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
        <div class="button">
                <input class="form-control" type="button" onclick="ajaxLoginFunction();" value="Sign In">
        </div>
</form>
<div id=ajaxDisplay></div>
<div id=ajaxHiddenDisplay></div>
</body>
</center>
<!–– Sends MID_PATH variable to login_front.js ––>
<script type="text/javascript">
        var MID_PATH="https://web.njit.edu/~vpp29/";
</script>
</html>
