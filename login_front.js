                                                                                         
function ajaxLoginFunction()
{
        var ajaxRequest;
        try{
            	// Opera 8.0+, Firefox, Safari
                ajaxRequest = new XMLHttpRequest();
        }
	catch (e){
                // Internet Explorer Browsers
                try{
                    	ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch (e) {
                        try{
                            	ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        catch (e){
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
                        var ajaxDisplay = document.getElementById('ajaxDisplay');
                        var ajaxHiddenDisplay = document.getElementById('ajaxHiddenDisplay');
                        var message = ajaxRequest.responseText;


                        if(message.includes("teacher")){
                                window.open("https://web.njit.edu/~ts355/instructor_view.php");
                                ajaxHiddenDisplay.innerHTML = message;
                                alert(message);
                        }
                        if(message.includes("student")){
                                window.open("https://web.njit.edu/~ts355/student_view.php");
                                ajaxHiddenDisplay.innerHTML = message;
                                alert(message);
                        }
                        else{
                             	ajaxDisplay.innerHTML = message;
                                alert(message);
                        }
                }
        }

	var name = document.getElementById('login:username').value;
        var pass = document.getElementById('login:password').value;
        if (document.getElementById('login:user1').checked){var student = document.getElementById('login:user1').value;}
        else if (document.getElementById('login:user').checked){var teacher = document.getElementById('login:user').value;}

        var user;

        if (student == "student"){
                user = student;
        }

	if (teacher == "teacher"){
                user = teacher;
        }

	var myJSONObject = {"name": name,"pass":pass, "user":user};

        ajaxRequest.open("POST", MID_PATH+"login.php", true);

        ajaxRequest.send(JSON.stringify(myJSONObject));
}


                                                                             
