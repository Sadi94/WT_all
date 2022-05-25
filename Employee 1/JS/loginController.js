     function get(id){
		return document.getElementById(id);
	}

    function validate(){
		refresh();
		var hasError=false;
		if(get("uname").value == ""){
            get("err_uname").innerHTML = "Enter your username to login.";
			hasError = true;
		}
        if(get("pass").value == ""){
            get("err_pass").innerHTML = "Enter your password to login.";
			hasError = true;
		}
        return !hasError;		
	}

    function refresh(){
		get("uname").innerHTML = "";
		get("pass").innerHTML = "";
	}