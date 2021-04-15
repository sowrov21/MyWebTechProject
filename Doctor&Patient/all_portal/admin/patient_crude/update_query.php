<?php
include("mysql.php");

    
$username=$_POST["username"];
$name=$_POST["name"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$blood=$_POST["blood"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];



$filename=$_FILES["uploadfile"]["name"]; //image upload portion
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="Profile_Picture/".$filename;
move_uploaded_file($tempname,$folder);

 
    $query="UPDATE patient SET name='$name',gender='$gender',dob='$dob',blood='$blood',email='$email',phone='$phone',address='$address',image='$folder' WHERE username='$username'";
    $data=mysqli_query($conn,$query); 
      
	  
	  
	 if($data)
   {
    echo "<script>alert('UPDATE Successfuly')</script>";
	
	?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Doctor&Patient/all_portal/admin/doctor_crude/disply.php">
	
	<?php
   }
else
   {
     
	 echo "<script>alert('UPDATE Fail')</script>";
	 ?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/disply.php">
     <?php
    }



?>