function get(id){
    return document.getElementById(id);
}
function validate(){
    refresh();
    var hasError=false;
    if(get("category_name").value == ""){
        get("err_category_name").innerHTML = "You can't insert an empty category.";
        hasError = true;
    }
    return !hasError;
}
function refresh(){
    get("err_category_name").innerHTML = "";
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
    xhttp.open("GET","SearchCategory.php?key="+key,true);
    xhttp.send();
}