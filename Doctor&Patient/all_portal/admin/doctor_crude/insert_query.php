<?php
include("mysql.php");
    
$username=$_POST["username"];
$name=$_POST["name"];
$dept=$_POST["department"];
$deg=$_POST["degree"];
$spec=$_POST["speciality"];
$des=$_POST["designation"];
$reg=$_POST["registration_no"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$dob=$_POST["dob"];
$blood=$_POST["blood"];
$password=$_POST["password"];
$address=$_POST["address"];


$filename=$_FILES["uploadfile"]["name"]; //image upload portion
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="Profile_Picture/".$filename;
move_uploaded_file($tempname,$folder);



    $query="INSERT INTO doctor VALUES('$username','$name','$dept','$deg','$spec','$des','$reg','$gender','$email','$phone','$dob','$blood','$password','$address','$folder')";

$data=mysqli_query($conn,$query); 
      
	  
$query1="INSERT INTO login VALUES('$username','$password','doctor')";
$data1=mysqli_query($conn,$query1); 
      
  
    

if($data)
   {
    echo "<script>alert('INSERT Successfuly')</script>";
	
	?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Doctor&Patient/all_portal/admin/doctor_crude/disply.php">
	<?php
   }
else
   {
     
	 echo "<script>alert('INSERT Fail')</script>";
	 ?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RegistrationForm.php">
     <?php
    }



?>