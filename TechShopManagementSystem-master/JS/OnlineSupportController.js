
function get(id)
{
    return document.getElementById(id);
}
function validate()
{
    refresh();
    var hasError=false;
    var name = get('name');
    var email = get('email')
    var topic = get('topic')
    var msg = get('message');

    //Name Validation
    if(name.value=="")
    {
        get('err_name').innerHTML="*Name Required*";
        get('err_name').style.color="red";
        hasError = true;
    }

    //Email Validation
    if(email.value == '')
    {
        get('err_email').innerHTML="*Email Required*";
        get('err_email').style.color="red";
        hasError = true;
    }
    else if(!email.value.includes("@"))
    {
        get('err_email').innerHTML="*@ sign required*";
        get('err_email').style.color="red";
        hasError = true;
    }
    else if(email.value.includes(" "))
    {
        get('err_email').innerHTML="*Username can't contain whitespaces*";
        get('err_email').style.color="red";
        hasError = true;
    }
    else if(!email.value.includes(".",email.value.indexOf("@")))
    {
        get('err_email').innerHTML="*dot(.) required after @*";
        get('err_email').style.color="red";
        hasError = true;
    }
    
    //Topic Validation
    if(topic.options.selectedIndex==0)
    {
        get('err_topic').innerHTML="*Please Select One*";
        get('err_topic').style.color="red";
        hasError = true;
    }

    //Message Validation
    if(msg.value=="")
    {
        get('err_message').innerHTML="*Message Required*";
        get('err_message').style.color="red";
        hasError = true;
    }

    return !hasError;

}

function refresh()
{
get('err_name').innerHTML="";
get('err_email').innerHTML="";
get('err_topic').innerHTML="";
get('err_message').innerHTML="";
}

function formSubmission(hasError)
{
    // if(!hasError)
    // {
    //     alert('Form Submission Complete through JS Validation');
    // }
    alert('JS Connection Enabled!');
}