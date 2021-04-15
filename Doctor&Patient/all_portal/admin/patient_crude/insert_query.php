<?php
include("mysql.php");

    
$username=$_POST["username"];
$name=$_POST["name"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$blood=$_POST["blood"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$address=$_POST["address"];

  $filename=$_FILES["uploadfile"]["name"]; //image upload portion
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="Profile_Picture/".$filename;

 move_uploaded_file($tempname,$folder);   


    $query="INSERT INTO patient VALUES('$username','$name','$gender','$dob','$blood','$email','$phone','$password','$address','$folder','active')";

$data=mysqli_query($conn,$query); 
      
	  
$query1="INSERT INTO login VALUES('$username','$password','patient')";
$data1=mysqli_query($conn,$query1); 
      
  
    

if($data)
   {
    echo "<script>alert('INSERT Successfuly')</script>";
	
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0;  URL=http://localhost/Doctor&Patient/all_portal/admin/doctor_crude/disply.php">
	<?php
   }
else
   {
     
	 echo "<script>alert('INSERT Fail')</script>";
	 ?>
	
     <?php
    }



?>