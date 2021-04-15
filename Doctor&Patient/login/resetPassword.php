<?php
include('../control/resetpasswordcheck.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password </title>
    <link rel="stylesheet" type="text/css" href="Login.css">   
</head>
<body>
	<form  name="form"   action="" method="Post" onsubmit="return myFunction()">
    <div class="login">
      <div class="h1"><h1 >Hospital Management System</h1></div>
        
 			      <div class="box">
               <h2>Reset Password</h2>
                  <input id="username" type="text" name="username"  placeholder="Enter username" />
                  <div id="username_error" class="value_error"></div>
      
                  <input id="password" type="password" name="password" placeholder="Enter password" />
                  <div id="password_error" class="value_error"></div>

               <input id="confirmPassword" type="Password" name="confirmPassword" placeholder="Confirm password" /><br>
               <div id="confirmPassword_error" class="value_error"></div>
                <?php echo $error; ?>
  	 	 	       <button name="submit" type="submit">Submit</button><br>
  	 	      </div>
    </div>
  </form>
</body>
</html>

<script src="login.js" >


  
</script>
