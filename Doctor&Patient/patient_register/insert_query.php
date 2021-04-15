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

     


    $query="INSERT INTO atient VALUES('$username','$name','$gender','$dob','$blood','$email','$phone','$password','$address')";

$data=mysqli_query($conn,$query); 
      
	  
$query1="INSERT INTO login VALUES('$username','$password','patient')";
$data1=mysqli_query($conn,$query1); 
      
  
    

if($data)
   {
    echo "<script>alert('INSERT Successfuly')</script>";
	
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../index.html">
	<?php
   }
else
   {
     
	 echo "<script>alert('INSERT Fail')</script>";
	 ?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=RegistrationForm.php">
     <?php
    }



?>