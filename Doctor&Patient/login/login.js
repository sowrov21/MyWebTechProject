function myFunction() 
  {
     var username = document.forms["form"]["username"];
    var password = document.forms["form"]["password"];
    var confirmPassword = document.forms["form"]["confirmPassword"];

    var username_error =document.getElementById('username_error');
    var password_error =document.getElementById('password_error');
    var confirmPassword_error =document.getElementById('confirmPassword_error');
 
    var valid=true;
  removeMessage();

    

    if ( username.value == "")
      {
        username_error.textContent ="*username is required";
        username.focus();
        return false;
      }
  
     else if ( password.value == "")
      {
        password_error.textContent ="*password is required";
        password.focus();
        return false;
      }
      
      else if ( confirmPassword.value != password.value)
      {
        confirmPassword_error.textContent ="*password & confirmPassword does not match";
        confirmPassword.focus();
        return false;
      }
  	return valid;

  } 
  function removeMessage()
  {
  	
  if(username.value.length !=0 || password.value.length !=0)
  	{
  		username_error.textContent ="";
  		password_error.textContent ="";
  		return true;
  	}
  }
  