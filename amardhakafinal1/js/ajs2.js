  function passv()

  {
    var pass = document.getElementById("pass").value;
    if ( pass == "" || pass.length < 4) {
        document.getElementById("epass").innerHTML="pass must be bigger than 3 letter";
         return false;
    }
    else{
        document.getElementById("epass").innerHTML="";
    }
  }
  function phonev()

  {
    var phone = document.getElementById("phone").value;
    if ( phone == "" || phone.length!= 10||!( /^\d+$/.test(phone))) {
        document.getElementById("ephone").innerHTML="Invalid number";
         return false;
    }
    
    else{
        document.getElementById("ephone").innerHTML="";
    }
  }
  function emailv()

  {
    var email = document.getElementById("email").value;
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
    {
      document.getElementById("eemail").innerHTML="";
    }
    else{
      document.getElementById("eemail").innerHTML="Invalid email";
      return false;
        }
  }
  function namev()
  {
           var regexname = /^[a-zA-Z\s]*$/;
    var name = document.getElementById("name").value;
    if (name == "" || name.length < 4 ) {
        document.getElementById("ename").innerHTML="too short to be a name";
        return false;
       }

    else if(!regexname.test(name)){
        document.getElementById("ename").innerHTML="Name can't contain Number";
        return false;
    }

   else
   {
        document.getElementById("ename").innerHTML="";


       }
  }