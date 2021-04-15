<?php
include("mysql.php");
error_reporting(0);
$a=$_GET["u_name"];
$b= $_GET["nm"];
$c= $_GET["gn"];
$d= $_GET["db"];
$e= $_GET["bld"];
$f= $_GET["mail"];
$g= $_GET["phn"];
$h= $_GET["ad"];

?>


<html>
<link href="Staff updateForm.css" rel="stylesheet" type="text/css">
<body>
    <h1>Update Form</h1>
<div id="register">
<form  name="myform"  method="POST" onsubmit="return form_update_validation()" action="update_query.php" enctype="multipart/form-data">

<label >UserName:</label><br>
     <input type="text" name="username" id="username" value="<?php echo $a; ?>" readonly><br><br>
<label >Name:</label><br>
     <input type="text" name="name" id="name" value="<?php echo $b; ?>" onblur="name_checking()"><br><span id="name_msg"></span><br>  
<label >Gender:</label><br><br>
     <input type="radio" name="gender" id="gender" value="Male"
        <?php if($c=="Male  "){echo "checked";} ?> onblur="gender_checking()"><span id="radio">Male</span> 
    <input type="radio" name="gender" id="gender" value="Female"
        <?php if($c=="Female  "){echo "checked";} ?> onblur="gender_checking()"><span id="radio">Female</span>
    <input type="radio" name="gender" id="gender" value="Other"
        <?php if($c=="Other  "){echo "checked";} ?> onblur="gender_checking()"><span id="radio">Other</span><br><br>
<label >DOB:</label><br>
    <input type="textd" name="dob" id="dob" value="<?php echo $d; ?>" onblur="dob_checking()"><br><span id="dob_msg"></span><br>
    
<label >Blood Group:</label><br>
     
    <select name="blood" id="blood" onblur="blood_checking()">
          <option value="">select</option>
          <option value="A+" <?php if($e=="A  "){echo "selected";} ?>>A+</option>
          <option value="A-" <?php if($e=="A- "){echo "selected";} ?>>A-</option> 
        <option value="AB+" <?php if($e=="AB  "){echo "selected";} ?>>AB+</option>
         <option value="AB+" <?php if($e=="AB- "){echo "selected";} ?>>AB-</option>       
          <option value="O+" <?php if($e=="O  "){echo "selected";} ?>>O+</option>
        <option value="O-" <?php if($e=="O- "){echo "selected";} ?>>O-</option>
        </select>&nbsp;&nbsp;<br><span id="blood_msg"></span><br>
<label >Email:</label><br>
   <input type="email" name="email" id="email" value="<?php echo $f; ?>" onblur="email_checking()"><br><span id="email_msg"></span><br> 

<label >Phone Number:</label><br>
  <input type="text" name="phone" id="phone" value="<?php echo $g; ?>" onblur="phone_checking()"><br><span id="phone_msg"></span><br>

<label >Address:</label><br>
       <textarea name="address" id="address" rows="5" cols="10" value="" onblur="address_checking()"><?php echo $h; ?></textarea><br><span id="address_msg"></span><br>


<input type="file" name="uploadfile" value="" required><br><br>
<input type="submit" name="submit" id="submit">

</form>
    </div>
<script type="text/javascript" src="UpdateFormValidation.js"></script>
    
</body>
</html>
