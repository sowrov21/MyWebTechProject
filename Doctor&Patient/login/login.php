<?php

    include('../control/logincheck.php');

?>


<!DOCTYPE html>
<html>
  <head>
	   <meta charset="utf-8">
        <title>Login </title>
        <link rel="stylesheet" type="text/css" href="Login.css">
	       <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  </head>

  <body>
	   <form action="" method="post" name="form"   onsubmit="return myFunction()" >
		    <div class="login">
            <div class="h1">
				      <h1>Hospital Management System</h1>
			      </div>

			   <div class="box">
				    <h2 >Sign in</h2>

            <input id="username" type="text" name="username"  placeholder="Enter username" />
            <div id="username_error" class="value_error"></div>
      
            <input id="password" type="password" name="password" placeholder="Enter password" />
            <div id="password_error" class="value_error"></div>

  	 	 		  <button name="submit" type="submit"  >Login</button><br><br>
  	 	 		  <div class="value_error"><?php echo $error; ?></div>

  	 	 		  <p>No Account?
  	 	 			<a href="registration.php"  style="color:deepskyblue">Create One!</a><br>
  	 	 			<a href="resetPassword.php" style="color:deepskyblue" > Forget Password</a> </p><br>
            <a href="../index.html" style="color:deepskyblue" ><i class="fas fa-home"></i> Home</a> </p>
  	 	   </div>
        </div>
        
      </form>
  </body>
</html>
<script src="login.js" >


  
</script>