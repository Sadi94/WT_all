function get(id)
{
    return document.getElementById(id);
}
function validate()
{
    refresh();
    var hasError=false;
    var pass = get('password')
    var conpass = get('conpassword');


    //Password Validation
    if(pass.value == "")
    {
        get('err_password').innerHTML="*Enter Password *";
       
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
        get('err_password').innerHTML="*Password can't contain Whitespaces*";
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

    
    return !hasError;

}

function refresh()
{

get('err_password').innerHTML="";
get('err_conpassword').innerHTML="";

}