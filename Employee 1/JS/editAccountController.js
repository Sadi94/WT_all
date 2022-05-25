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
    var email = get('email')
    var phone = get('phoneno');

    //Name Validation
    if(name.value=="")
    {
        get('err_name').innerHTML="*Enter Name*";
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


    //Email Validation
    if(email.value == '')
    {
        get('err_email').innerHTML="* Enter Email *";
        hasError = true;
    }
    else if(!email.value.includes("@"))
    {
        get('err_email').innerHTML="*@ sign required*";
        hasError = true;
    }
    else if(email.value.includes(" "))
    {
        get('err_email').innerHTML="*Email can't contain whitespaces*";   
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

function refresh()
{
get('err_name').innerHTML="";
get('err_username').innerHTML="";
get('err_email').innerHTML="";
get('err_phoneno').innerHTML="";
}