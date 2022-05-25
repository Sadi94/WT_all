function validateForm() {
    var eid = document.getElementById("eid").value;
    var deg = document.getElementById("deg").value;
    var password = document.getElementById("password").value;
    var phone = document.getElementById("phone").value;
    var nid = document.getElementById("nid").value;
    // var patt =  /^[0-9]+$/;
    // var res = patt.test(nid);

    if (eid == "" || eid.length < 3) {
        document.getElementById("erroreid").innerHTML="Please fill out the userid";
         return false;
    }
    if (deg == "") {
        document.getElementById("errordeg").innerHTML="Please fill out the designation";
         return false;
    }
    if (password == "") {
        document.getElementById("errorpassword").innerHTML="Please fill out the password";
         return false;
    }
    if ( phone == "" || phone.length==10){
        document.getElementById("errorphone").innerHTML="Please fill out the number";
        return false;
    }   
}
function eidval()

  {
    var eid = document.getElementById("eid").value;
    if (eid == "" || eid.length < 3 ) {
        document.getElementById("erroreid").innerHTML="Please insert a valid userid";
       }
       else
       {
        document.getElementById("erroreid").innerHTML="Userid is valid ";

       }
  }
  function passval()

  {
    var password = document.getElementById("password").value;
    if ( password == "" || password.length < 6) {
        document.getElementById("errorpassword").innerHTML="Password must be in 6 charecter";
         return false;
    }
       else
       {
        document.getElementById("errorpassword").innerHTML="Strong Password";

       }
  }
  function numval()

  {
    var phone = document.getElementById("phone").value;
    if ( phone == "" || phone.length==10) {
        document.getElementById("errorphone").innerHTML="Invalid number format";
         return false;
    }
       else
       {
        document.getElementById("errorphone").innerHTML="Mobile number is accepted";

       }
  }
  function degval()
  {
    var deg = document.getElementById("deg").value;
        document.getElementById("errordeg").innerHTML = "Your designation: " + deg;   
  }
  function nidval()

  {
    var nid = document.getElementById("nid").value;
    if ( nid == "" || nid.length < 9) {
        document.getElementById("errornid").innerHTML="Nid must be in 10 character";
         return false;
    }
       else
       {
        document.getElementById("errornid").innerHTML="Nid is accepted";

       }
    }