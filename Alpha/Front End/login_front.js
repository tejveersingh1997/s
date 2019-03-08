function ajaxLoginFunction()
{
	var ajaxRequest;  
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				alert("Browser does not support!");
				return false;
			}
		}
	}
        // Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function()
  {
		if(ajaxRequest.readyState == 4)
    {
			var ajaxDisplay = document.getElementById('ajaxDiv');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			//alert(ajaxRequest.responseText);
		}
	}
	var name = document.getElementById('login:username').value;
	var pass = document.getElementById('login:password').value;
	var myJSONObject = {"name": name,"pass":pass};
    
	ajaxRequest.open("POST", MID_PATH+"login.php", true);
	
	//ajaxRequest.send(null); 
	ajaxRequest.send(JSON.stringify(myJSONObject));
}