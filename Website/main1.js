function clicked() {
	var user = document.getElementById("username");
	var pass = document.getElementById("password");
	var coruser = "admin";
	var corpass = "admin";
	var coruser1 = "example";
	var corpass1 = "example";
	if(user.value == coruser && pass.value == corpass){
		alert("Logging in as" + coruser);
		window.location.replace("home.html");
	}
		else{
			if(user.value == coruser1 && pass.value == corpass1){
				window.location.replace("home.html");
				alert("Logging in as" + coruser1);
			}
			else{
				alert("Username or password incorrect please try again.")
				}
		}
	}
