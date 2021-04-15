<?php
include("mysql.php");
error_reporting(0);
$a=$_GET["u_name"];
//-------------doctor Table-------------
$query="DELETE FROM doctor WHERE username='$a'";
$data=mysqli_query($conn,$query);

//---------------Login Table------------
$query1="DELETE FROM login WHERE username='$a'";
$data1=mysqli_query($conn,$query1);

if($data)
   {
    echo "<script>alert('DELETE Successfuly')</script>";
	
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Doctor&Patient/all_portal/admin/doctor_crude/disply.php">
	<?php
   }
else
   {
     
	 echo "<script>alert('DELETE Fail')</script>";
	 ?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/disply.php">
     <?php
    }



?>