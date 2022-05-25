function get(id){
    return document.getElementById(id);
}
function validate(){
    refresh();
    var hasError=false;

    if(get("name").value == ""){
        get("err_name").innerHTML = "Name Required";
        hasError = true;
    }
    
    if(get("uname").value == ""){
        get("err_uname").innerHTML = "Username Required";
        hasError = true;
    }else if(get("uname").length<6){
        get("err_uname").innerHTML = "Username must be at least 6 charachters long";
        hasError = true;
    }else if(get("uname").indexOf(" ") > -1){
        get("err_uname").innerHTML = "Username shouldn't have any whitespaces";
    }

    if(get("email").value == ""){
        get("err_email").innerHTML = "E-mail Required";
        hasError = true;
    }

    if(get("phone").value == ""){
        get("err_phone").innerHTML = "Phone Required";
        hasError = true;
    }

    if(get("pass").value == ""){
        get("err_pass").innerHTML = "Password Required";
        hasError = true;
    }else if(get("pass").length < 8){
        get("err_pass").innerHTML = "Password must be atleast 8 character long.";
        hasError = true;
    }else if(get("pass").indexOf(" ") > -1){
        get("err_pass").innerHTML = "Password shouldn't have any whitespaces";
    }
    
    if(get("confirm_pass").value != get("pass").value){
        get("err_confirm_pass").innerHTML = "Password doesn't matched!";
    }
    
    return !hasError;
    
}

function refresh(){
    get("err_name").innerHTML = "";
    get("err_uname").innerHTML = "";
    get("err_email").innerHTML = "";
    get("err_phone").innerHTML = "";
    get("err_pass").innerHTML = "";
    get("err_confirm_pass").innerHTML = "";
}

function checkUsername(uname){
    var name = uname.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var rs = this.responseText;
            if(rs == "true"){
                get('err_username').innerHTML = "";
            }else{
                get('err_username').innerHTML = "[username already exists]";
                get('err_username').style.color="blue";
            }
        }
    }
    xhttp.open("GET","checkUser.php?uname="+name,true);
    xhttp.send();
}

function suggest(control){
    var key = control.value;
    if(key == ""){
        document.getElementById("suggestion").innerHTML = "";
        return;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("suggestion").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET","SearchEmployee.php?key="+key,true);
    xhttp.send();
}