<?php
session_start();
include("mysql.php");

    
$username=$_POST["username"];
$name=$_POST["name"];
$gender=$_POST["gender"];
$blood=$_POST["blood"];
$dob=$_POST["dob"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$address=$_POST["address"];


$filename=$_FILES["uploadfile"]["name"]; //image upload portion
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="Profile_Picture/".$filename;

move_uploaded_file($tempname,$folder);


    $query="INSERT INTO admin VALUES('$username','$name','$gender','$blood','$dob','$password','$phone','$email','$address','$folder')";
    $data=mysqli_query($conn,$query); 
      
	  
	  $query1="INSERT INTO login VALUES('$username','$password','admin')";
    $data1=mysqli_query($conn,$query1); 
      
  
    

if($data)
   {
    echo "<script>alert('INSERT Successfuly')</script>";
	
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Doctor&Patient/all_portal/admin/admin_table.php">
	<?php
   }
else
   {
     
	 echo "<script>alert('INSERT Fail')</script>";
	 ?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Doctor&Patient/all_portal/admin/reg_form.php">
     <?php
    }



?>