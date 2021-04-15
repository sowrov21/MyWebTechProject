<?php
include("mysql.php");
error_reporting(0);
$a=$_GET["u_name"];
$b= $_GET["nm"];
$c= $_GET["dept"];
$d= $_GET["deg"];
$e= $_GET["spec"];
$f= $_GET["des"];
$g= $_GET["reg"];
$h= $_GET["gn"];
$i= $_GET["mail"];
$j= $_GET["phn"];
$k= $_GET["db"];
$l= $_GET["bld"];
$m= $_GET["ad"];


?>


<html>
<link href="UpdateForm.css" rel="stylesheet" type="text/css">
<body>
    <h1> Doctor Update Form</h1>
<div id="register">
<form  name="myform"  method="POST" onsubmit="return form_update_validation()" action="update_query.php" enctype="multipart/form-data" >

<label >UserName:</label><br>
      <input type="text" name="username" id="username" value="<?php echo $a; ?>" readonly><br><br>
<label >Name:</label><br>
       <input type="text" name="name" id="name" value="<?php echo $b; ?>" onblur="name_checking()"><br><span id="name_msg"></span><br>
    
<label >Department:</label><br>
        <select name="department" id="department" onblur="department_checking()">
          <option value="">select</option>
          <option value="Cardiology" <?php if($c=="Cardiology "){echo "selected";} ?>>Cardiology</option>
          <option value="A" <?php if($c=="A "){echo "selected";} ?>>A</option>                
          <option value="B" <?php if($c=="B "){echo "selected";} ?>>B</option>
        </select>&nbsp;&nbsp;<br><span id="department_msg"></span><br>
    
<label >Degree:</label><br>
      <input type="text" name="degree" value="<?php echo $d; ?>" id="degree" onblur="degree_checking()"><br><span id="degree_msg"></span><br>
    
<label >Speciality:</label><br>
        <select name="speciality" id="speciality" onblur="speciality_checking()">
          <option value="">select</option>
          <option value="Surgery" <?php if($e=="Surgery "){echo "selected";} ?>>Surgery</option>
          <option value="X" <?php if($e=="X "){echo "selected";} ?>>X</option>                
          <option value="Y" <?php if($e=="Y "){echo "selected";} ?>>Y</option>
        </select>&nbsp;&nbsp;<br><span id="speciality_msg"></span><br>
    
<label >Designation:</label><br>
        <select name="designation" id="designation" onblur="designation_checking()">
          <option value="">select</option>
          <option value="Professor" <?php if($f=="Professor "){echo "selected";} ?>>Professor</option>
          <option value="M" <?php if($f=="M "){echo "selected";} ?>>M</option>                
          <option value="N" <?php if($f=="N "){echo "selected";} ?>>N</option>
        </select>&nbsp;&nbsp;<br><span id="designation_msg"></span><br>
    
<label >Registration N0.:</label><br>
      <input type="text" name="registration_no" value="<?php echo $g; ?>" id="registration_no" onblur="registration_no_checking()"><br><span id="registration_no_msg"></span><br>
    
    
<label >Gender:</label><br><br>
      <input type="radio" name="gender" id="gender" value="Male"
        <?php if($h=="Male "){echo "checked";} ?> onblur="gender_checking()"><span id="radio">Male</span> 
     <input type="radio" name="gender" id="gender" value="Female"
        <?php if($h=="Female "){echo "checked";} ?> onblur="gender_checking()"><span id="radio">Female</span>
     <input type="radio" name="gender" id="gender" value="Other"
        <?php if($h=="Other "){echo "checked";} ?> onblur="gender_checking()"><span id="radio">Other</span><br><br>
    
<label >Email:</label><br>
   <input type="email" name="email" id="email" value="<?php echo $i; ?>" onblur="email_checking()"><br><span id="email_msg"></span><br> 

<label >Phone Number:</label><br>
  <input type="text" name="phone" id="phone" value="<?php echo $j; ?>" onblur="phone_checking()"><br><span id="phone_msg"></span><br>    
    
    
<label >DOB:</label><br>
      <input type="text" name="dob" id="dob" value="<?php echo $k; ?>" onblur="dob_checking()"><br><span id="dob_msg"></span><br>
    
<label >Blood Group:</label><br>
     
     <select name="blood" id="blood" onblur="blood_checking()">
          <option value="">select</option>
          <option value="A+" <?php if($l=="A  "){echo "selected";} ?>>A+</option>
          <option value="A-" <?php if($l=="A- "){echo "selected";} ?>>A-</option> 
        <option value="AB+" <?php if($l=="AB  "){echo "selected";} ?>>AB+</option>
         <option value="AB+" <?php if($l=="AB- "){echo "selected";} ?>>AB-</option>       
          <option value="O+" <?php if($l=="O  "){echo "selected";} ?>>O+</option>
        <option value="O-" <?php if($l=="O- "){echo "selected";} ?>>O-</option>
        </select>&nbsp;&nbsp;<br><span id="blood_msg"></span><br>


<label >Address:</label><br>
       <textarea name="address" id="address" rows="5" cols="10" value="" onblur="address_checking()"><?php echo $m; ?></textarea><br><span id="address_msg"></span><br>
 
 
 <input type="file" name="uploadfile" value="" required><br><br>
<input type="submit" name="submit" id="submit">

</form>
    </div>
<script type="text/javascript" src="UpdateFormValid.js"></script>
    
</body>
</html>
