function get(id)
{
    return document.getElementById(id);
}
function validate()
{
    refresh();
    var hasError=false;
    var mname = get('name');
    var maddress = get('maddress');
    var mphone = get('phone');
    var memail = get('email');
    var mjobpos = get('jpos');
    var mbasicsal = get('esalary');

    //Name Validation
    if(name.value=="")
    {
        get('err_managerName').innerHTML="*Enter Name *";
        hasError = true;
    }


    //address Validation
    if(maddress.value=="")
    {
        get('err_ManagerAddress').innerHTML="*Enter address *";
        hasError = true;
    }


    //salary Number Validation
    if(mbasicsal.value == "")
    {
        get('err_managerSalary').innerHTML="*Enter Salary Number *";

        hasError = true;
    }
    else if(isNaN(mbasicsal.value))
    {
        get('err_managerSalary').innerHTML="*Enter only Numeric Values*";

        hasError = true;
    }



    //Email Validation
    if(memail.value == '')
    {
        get('err_ManagerEmail').innerHTML="*Enter Email *";
        hasError = true;
    }
    else if(!memail.value.includes("@"))
    {
        get('err_ManagerEmail').innerHTML="*@ sign required*";
        hasError = true;
    }
    else if(memail.value.includes(" "))
    {
        get('err_ManagerEmail').innerHTML="*Username can't contain whitespaces*";
        hasError = true;
    }
    else if(!memail.value.includes(".",email.value.indexOf("@")))
    {
        get('err_ManagerEmail').innerHTML="*dot(.) required after @*";
        hasError = true;
    }
    //jobPos Validation
    if(mjobpos.value=="")
    {
        get('err_managerjobpos').innerHTML="*Select Job Position *";
        hasError = true;
    }
    //Phone Number Validation
    if(mphone.value == "")
    {
        get('err_manphoneno').innerHTML="*Enter Phone Number *";

        hasError = true;
    }
    else if(isNaN(mphone.value))
    {
        get('err_manphoneno').innerHTML="*Enter only Numeric Values*";

        hasError = true;
    }

    return !hasError;

}

function refresh()
{
get('err_managerName').innerHTML="";
get('err_ManagerAddress').innerHTML="";
get('err_managerSalary').innerHTML="";
get('err_ManagerEmail').innerHTML="";
get('err_managerjobpos').innerHTML="";
get('err_manphoneno').innerHTML="";

}
