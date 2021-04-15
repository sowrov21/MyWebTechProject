<html>
<style>

 table{
         width: 100%;
      }
 table,th,td{
           border: 3px solid;
           border-collapse: collapse;
           text-align: center;
           background-color: antiquewhite;
           font-size: 30px;
            
        }
 a{
	 text-decoration: none;
 }

</style>

<body>
   
<?php
error_reporting(0);
include("mysql.php");


$query="SELECT * FROM staff";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);  
    

 
if($total!=0)
{
	?>
	
	<table>
	
	 <tr>
	    <th>UserName</th>
	    <th>Name</th>
	    <th>Gender</th>
         <th>DOB</th>
	    <th>BLOOD</th>
	    <th>EMAIL</th>
	    <th>PHONE</th>
	    <th>ADDRESS</th>
		<th>IMAGE</th>
	    <th colspan="2">Oparation</th>
	 
	 
	 </tr>
	
	
	
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
		    <td>".$result["username"]." </td>
		    <td>".$result["name"]." </td>
		    <td>".$result["gender"]."</td>
			<td>".$result["dob"]." </td>
            <td>".$result["blood"]."</td>
            <td>".$result["email"]."</td>
		    <td>".$result["phone"]."</td>
		    <td>".$result["address"]."</td>
			<td><a href='$result[image]'><img src='". $result["image"] ."' height='50' width='50'/></a></td>
			<td><a href='updateForm.php?u_name=$result[username] & nm=$result[name] & gn=$result[gender]  & db=$result[dob] & bld=$result[blood] & mail=$result[email] & phn=$result[phone]  & ad=$result[address] '>Edit</a></td>
			<td><a href='delete.php?u_name=$result[username]' onclick='return checkdelete()'>Delete</a></td>
		
		</tr>";
		
	}
}

else
{
	echo "No  record Found";
}

?>
</table>
</body>
</html>
<script>
function checkdelete()
{
	return confirm('Are You Sure!! You Want to Delete This Data??');
	
}
</script>



