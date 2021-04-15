<?php
	class db{
		function OpenCon(){
			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$db = "mydb";
			$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
			 
			return $conn;
	 	}

function All($conn,$table){
	 		$result = $conn->query("SELECT * FROM ". $table." ");
		 	return $result;
	 	}
	 	function CheckUser($conn,$table,$username){
	 		$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."'");
		 	return $result;
	 	}

	 	function Profile($conn,$table,$username){
			$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."'");
	 		return $result;
	 	}
	 	function Search($conn,$table,$searchFor){
			$result = $conn->query("SELECT * FROM ". $table." WHERE username LIKE '%" .$searchFor. "%'");
	 		return $result;
	 	}

		function InsertA($conn,$table,$username,$name,$gender,$blood,$dob,$password,$phone,$email,$address,$folder){
			$result = $conn->query("INSERT INTO ". $table." VALUES('".$username."','".$name."','".$gender."','".$blood."','".$dob."','".$password."','".$phone."','".$email."','".$address."','".$folder."'");
	 		return $result;
	 	}

	 	function Picture($conn,$table,$folder,$username){
			$result = $conn->query("UPDATE ".$table." SET image ='".$folder."' WHERE username = '".$username."'");
	 		return $result;
	 	}
	 	function ResetPasswordL($conn,$tableL,$tableA,$username,$password){
			$resultL= $conn->query("UPDATE ".$tableL." SET password ='".$password."' WHERE username = '".$username."';");
			$resultA = $conn->query("UPDATE ".$tableA." SET password ='".$password."' WHERE username = '".$username."';");
	 		return $resultL;
	 	}
	 	function ResetPasswordA($conn,$table,$username,$password){
			$result = $conn->query("UPDATE ".$table." SET password ='".$password."' WHERE username = '".$username."';");
	 		return $result;
	 	}
	 	function Count($conn,$table){
			$result = $conn->query("SELECT COUNT(username) FROM ".$table.";");
	 		return $result;
	 	}
	 	function CountAct($conn,$table){
			$result = $conn->query("SELECT COUNT(username) FROM ".$table." WHERE status='active';");
	 		return $result;
	 	}
	 	function CountInact($conn,$table){
			$result = $conn->query("SELECT COUNT(username) FROM ".$table." WHERE status='inactive';");
	 		return $result;
	 	}
	 	function Schedule_Reg($conn,$table,$d_username,$d_name,$chember,$slot,$room){
			$result = $conn->query("INSERT INTO ".$table." (d_username,d_name,chember,slot,room) VALUES('".$d_username."','".$d_name."','".$chember."','".$slot."',".$room.");");
	 		return $result;
	 	}
	 	function Check($conn,$table,$category){
			$result = $conn->query("SELECT * FROM ". $table." WHERE dept = '".$category."'");
	 		return $result;
	 	}
	
		
		
		function Create_Prescription($conn,$table,$p_username,$d_name,$mname,$dosages,$dUnit,$instruction,$day,$date)
		{
			$result = $conn->query("INSERT INTO ".$table." (p_name,d_name,medicine,dosages,unit,instruction,day,date) VALUES('".$p_username."','".$d_name."','".$mname."','".$dosages."','".$dUnit."','".$instruction."','".$day."','".$date."');");
	 		return $result;
		}
        
		function My_schedule($conn,$table,$d_username)
		{
			$result = $conn->query("SELECT * FROM ". $table." WHERE d_username='". $d_username."'");
		 	return $result;
		}
		
		function My_prescrition($conobj,$table,$p_name)
		{
				$result = $conn->query("SELECT * FROM ". $table." WHERE p_name='". $p_name."'");
		 	return $result;
		}
		
		function SlotShow($conn,$table,$username)
	 	{
	 		$result = $conn->query("SELECT * FROM ". $table." WHERE d_username='".$username."';");
 			return $result;
	 	}
		
		function Booking($conn,$table,$p_username,$d_name,$category,$date,$slot){
			$result = $conn->query("INSERT INTO ".$table." (p_username,d_name,category,date,slot) VALUES('".$p_username."','".$d_name."','".$category."','".$date."','".$slot."');");
	 		return $result;
	 	}
		
		
		function Booking_Info($conn,$table,$p_username){
	 		$result = $conn->query("SELECT * FROM ". $table." WHERE p_username='". $p_username."'");
		 	return $result;
	 	}
		
		function CloseCon($conn){
	 		$conn -> close();
	 	}
		
		
	}
?>