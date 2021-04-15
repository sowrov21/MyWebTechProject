<?php
include("mysql.php");

    
$username=$_POST["username"];
$name=$_POST["name"];
$gender=$_POST["gender"];
$blood=$_POST["blood"];
$dob=$_POST["dob"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$address=$_POST["address"];



$filename=$_FILES["uploadfile"]["name"]; //image upload portion
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="Profile_Picture/".$filename;

move_uploaded_file($tempname,$folder);
      
 
    $query="UPDATE admin SET name='$name',gender='$gender',blood='$blood',dob='$dob',phone='$phone',email='$email',address='$address',image='$folder' WHERE username='$username'";
    $data=mysqli_query($conn,$query); 
      
	  
	  
	 if($data)
   {
    echo "<script>alert('UPDATE Successfuly')</script>";
	
	?>
         <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Doctor&Patient/all_portal/admin/admin_table.php">
	<?php
   }
else
   {
     
	 echo "<script>alert('UPDATE Fail')</script>";
	 ?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Doctor&Patient/all_portal/admin/admin_table.php">
     <?php
    
	
	}



?>