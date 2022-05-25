function get(id)
{
    return document.getElementById(id);
}
function validate()
{
    refresh();
    var hasError=false;
    var Disprice = get('Disprice');
  
    if(Disprice.value == "")
    {
        get('err_Disprice').innerHTML="*Enter price to add Discount*";
        hasError = true;
    }
	  else if(isNaN(Disprice.value))
    {
        get('err_Disprice').innerHTML="*Enter only Numeric Values*";
        
        hasError = true;
    }
  

    return !hasError;

}

  function refresh()
  {
  get('err_Disprice').innerHTML="";

  }