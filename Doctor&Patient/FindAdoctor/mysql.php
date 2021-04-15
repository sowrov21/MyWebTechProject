<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{echo "";}

else
{

echo die("connection faild because".mysqli_connect_error());


}
   


?>