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
$address=$_POST["address"];


$filename=$_FILES["uploadfile"]["name"]; //image upload portion
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="Profile_Picture/".$filename;

move_uploaded_file($tempname,$folder);

 
    $query="UPDATE doctor SET name='$name',dept='$dept',degree='$deg',speciality='$spec',designation='$des',regno='$reg',gender='$gender',email='$email',phone='$phone',dob='$dob',blood='$blood',address='$address',image='$folder' WHERE username='$username'";
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