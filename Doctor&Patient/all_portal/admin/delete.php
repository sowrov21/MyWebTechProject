<?php
include("mysql.php");
error_reporting(0);
$a=$_GET["u_name"];
//-------------Admin Table-------------
$query="DELETE FROM admin WHERE username='$a'";
$data=mysqli_query($conn,$query);

//---------------Login Table------------
$query1="DELETE FROM login WHERE username='$a'";
$data1=mysqli_query($conn,$query1);

if($data)
   {
    echo "<script>alert('DELETE Successfuly')</script>";
	
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Doctor&Patient/all_portal/admin/admin_table.php">
	<?php
   }
else
   {
     
	 echo "<script>alert('DELETE Fail')</script>";
	 ?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Doctor&Patient/all_portal/admin/reg_form.php">
     <?php
    }



?>