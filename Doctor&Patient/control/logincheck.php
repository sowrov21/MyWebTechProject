<?php

	session_start();

	include('db.php');
 
	$error="";
	$profession ="";

	if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		$connection = new db();
		$conobj=$connection->OpenCon();
		$userQuery=$connection->CheckUser($conobj,"login",$username);

		if($userQuery->num_rows > 0){
			while($row = mysqli_fetch_assoc($userQuery)){
				$job = $row["profession"];
				$pass_w = $row["password"];

				if ($pass_w == $password){

					if($job == "admin"){
						$_SESSION['username']=$username;
						$_SESSION['profession']=$job;
						header("location:../all_portal/admin/admin_index.php");
					}

					else if($job == "doctor"){
						echo $job;
						$_SESSION['username']=$username;
						$_SESSION['profession']=$job;
						header("location: ../all_portal/doctor/doctor_index.php");
					}

					else if($job == "staff"){
						echo $job;
						$_SESSION['username']=$username;
						$_SESSION['profession']=$job;
						header("location: ../all_portal/staff/staff_index.php");
					}

					else if($job == "patient"){
						echo $job;
						$_SESSION['username']=$username;
						$_SESSION['profession']=$job;
						header("location: ../all_portal/patient/patient_index.php");
					}
				}

				else{ $error ="*Password is incorrect!";}
			}
		}

		else {$error = "*Username or Password is invalid";}

		$connection->CloseCon($conobj);

	}
?>
