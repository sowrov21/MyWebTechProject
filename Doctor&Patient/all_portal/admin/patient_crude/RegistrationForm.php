<?php
/* 

*/
error_reporting(0);
?>

<html>
<head>

    <link href="RegistrationForm.css" rel="stylesheet" type="text/css">


</head>
<body>
    <h1>Patient Registration Form</h1>
<div id="register">
    <h1></h1>
<form  name="myform" id="myfrom" method="POST" onsubmit="return form_validation()"  action="insert_query.php" enctype="multipart/form-data">
<label >UserName:</label><br> 
     <input type="text" name="username" value="" id="username" onblur="username_checking()"><br><span id="username_msg"></span><br>
 <label >Name:</label><br>
      <input type="text" name="name" value="" id="name" onblur="name_checking()"><br><span id="name_msg"></span><br>
<label >Gender:</label><br><br>
     
      <input type="radio" name="gender"  value="Male" id="gender" donblur="gender_checking()"><span id="gender">Male</span> &nbsp;&nbsp;
     <input type="radio" name="gender" value="Female" id="gender" onblur="gender_checking()"><span id="gender">Female</span>&nbsp;&nbsp;
     <input type="radio" name="gender" value="Other" id="gender" onblur="gender_checking()"><span id="gender">Other</span> 
    &nbsp;&nbsp;<br><span id="gender_msg"></span><br>
<label >DOB:</label><br>
   <input type="date" name="dob" id="dob"  value="" placeholder="dd-mm-yyyy" onblur="dob_checking()">&nbsp;&nbsp;<br><span id="dob_msg"></span><br>
<label >Blood Group:</label><br>
        <select name="blood" id="blood" onblur="blood_checking()">
          <option value="">select</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>                
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>                 
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>&nbsp;&nbsp;<br><span id="blood_msg"></span><br>
<label >Email:</label><br>
     <input type="email" name="email" value="" id="email" onblur="email_checking()">&nbsp;&nbsp;<br><span id="email_msg" ></span><br>
<label >Phone Number:</label><br>
    <input type="text" name="phone" value="" id="phone" onblur="phone_checking()">&nbsp;&nbsp;<br><span id="phone_msg" ></span><br>

<label >Password:</label><br>
       <input style="color:blue; font-size:20px;" type="password" name="password" id="password" value="" onblur="password_checking()">&nbsp;&nbsp;<br><span id="password_msg"></span><br>
<label >Confirm-Password:</label><br>
       <input style="color:blue; font-size:20px;" type="password" name="confirm_password" id="confirm_password" value="" onblur="confirm_password_checking()">&nbsp;&nbsp;<br><span id="confirm_password_msg"></span><br>


<label >Address:</label><br>
     <textarea name="address" value="" rows="5" cols="10" placeholder="thana,District" id="address" onblur="address_checking()"></textarea>&nbsp;&nbsp;<br><span id="address_msg"></span><br>

    
     <input type="file" name="uploadfile" value="" required><br><br>
	<input type="submit" name="submit" id="submit">
     <input type="reset" name="reset" id="reset">


</form>
</div>
<script type="text/javascript" src="RegistrationFormValidation.js"></script>
</body>
</html>





