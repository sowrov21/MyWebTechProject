<?php
include('db.php');
session_start(); 

$error="";
if (isset($_POST['submit'])) 
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$connection = new db();
	$conobj=$connection->OpenCon();

	$resetQuery1=$connection->ResetpasswordL($conobj,"login","admin",$username,$password);
	if ($resetQuery1) {
		echo "<script>alert('Update Successfuly')</script>";
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Final/login/login.php">
		<?php
	}
	else{
		 echo "<script>alert('DELETE Fail')</script>";
	}

}




?>
<?php


?>
