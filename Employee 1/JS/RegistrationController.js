function get(id)
{
    return document.getElementById(id);
}
function validate()
{
    refresh();
    var hasError=false;
    var name = get('name');
    var uname = get('username');
    var pass = get('password')
    var conpass = get('conpassword');
    var email = get('email')
    var phone = get('phoneno');

    //Name Validation
    if(name.value=="")
    {
        get('err_name').innerHTML="*Enter Name *";
        hasError = true;
    }

    //Username Validation
    if(uname.value=="")
    {
      
        get('err_username').innerHTML="*Enter Username *";
        hasError = true;
    }
    else if(uname.value.length<6)
    {
        get('err_username').innerHTML="*Username must be 6 chars long*";
        hasError = true;
    }
    else if(uname.value.includes(" "))
    {
        get('err_username').innerHTML="*Username can't contain whitespaces*";
        hasError = true;
    }

    //Password Validation
    if(pass.value == "")
    {
        get('err_password').innerHTML="*Enter Password*";
        hasError = true;
    }
    else if(pass.value.length<8)
    {
        get('err_password').innerHTML="*Password must be atleast 8 chars*";
        hasError = true;
    }
    else if(pass.value.search(/[0-9]/)==-1)
    {   
        get('err_password').innerHTML="*Password must contain atleast one number*";
        hasError = true;
    }
    else if(pass.value.search(/[a-z]/)==-1)
    {   
        get('err_password').innerHTML="*Password must contain atleast one lowercase*";
        hasError = true;
    }
    else if(pass.value.search(/[A-Z]/)==-1)
    {   
        get('err_password').innerHTML="*Password must contain atleast one uppercase*";
        hasError = true;
    }
    else if(pass.value.search(/[@\#]/)==-1)
    {   
        get('err_password').innerHTML="*Password must contain atleast one specialchars*";
        hasError = true;
    }
    else if(pass.value.includes(" "))
    {
        get('err_password').innerHTML="*Username can't contain Whitespaces*";
        hasError = true;
    }

    //Confirm Password Validation
    if(conpass.value == "")
    {
        get('err_conpassword').innerHTML="*Re-enter Password*";
        hasError = true;
    }
    else if(pass.value != conpass.value)
    {
        get('err_conpassword').innerHTML="*Password does not Match*";
        hasError = true;
    }

    //Email Validation
    if(email.value == '')
    {
        get('err_email').innerHTML="*Enter Email *";
        hasError = true;
    }
    else if(!email.value.includes("@"))
    {
        get('err_email').innerHTML="*@ sign required*";
        hasError = true;
    }
    else if(email.value.includes(" "))
    {
        get('err_email').innerHTML="*Username can't contain whitespaces*";
        hasError = true;
    }
    else if(!email.value.includes(".",email.value.indexOf("@")))
    {
        get('err_email').innerHTML="*dot(.) required after @*";
        hasError = true;
    }

    //Phone Number Validation
    if(phone.value == "")
    {
        get('err_phoneno').innerHTML="*Enter Phone Number *";
        
        hasError = true;
    }
    else if(isNaN(phone.value))
    {
        get('err_phoneno').innerHTML="*Enter only Numeric Values*";
        
        hasError = true;
    }

    return !hasError;

}

