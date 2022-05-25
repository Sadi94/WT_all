function validateForm() {
    var aid = document.getElementById("aid").value;
    var name = document.getElementById("name").value;
    var pass = document.getElementById("pass").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    if (aid == "") {
        document.getElementById("eaid").innerHTML="please insert id";
         return false;
    }
    if (pass == "") {
        document.getElementById("epass").innerHTML="please insert pass";
         return false;
    }
    if (name == "") {
        document.getElementById("ename").innerHTML="please insert name";
         return false;
    }
    
    if (email == "") {
        document.getElementById("eemail").innerHTML="please insert email";
         return false;
    }
    if (phone == ""){
        document.getElementById("ephone").innerHTML="please insert phone";
        return false;
    }   
}
