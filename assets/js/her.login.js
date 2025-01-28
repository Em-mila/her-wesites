//Following function gets values of the username and password fields and checks to see if they match a hard coded username and password 
function authenticate(){
    var authorised;
    
    //get input values
    var uname = document.getElementById("uname").value;
    var psw = document.getElementById("psw").value;
    
    //check to see if the password and username match
    if(uname == "TxF" && psw == "wadidadu"){
      authorised = true;
    }else{ // username or password do not match
      authorised = false;
      //alert user
      alert("Sorry, password is incorrect.");
    }
    //return result
    return authorised;
  }