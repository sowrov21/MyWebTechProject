<html>
<head> 
<link rel="stylesheet" href="doctor-table-style.css"> 

</head>

<?php
error_reporting(0);
include("mysql.php");


$query="SELECT * FROM doctor";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);  
    

 
if($total!=0)
{
	?>




<body>
 <div class="admin-table" > 
       <div  class="tile1"><h2>Doctor Table  </h2> </div>
	   
	   <div class="full-table"> 
	   
	      <table class="content-table">
		  
	                     
	
	 <tr>
	    <th>UserName</th>
	    <th>Name</th>
	    <th>Department</th>
	    <th>Degree</th>
	    <th>Speciality</th>
	    <th>Designation</th>
	    <th>Reg_No</th>
	    <th>Gender</th>
         <th>EMAIL</th>
	    <th>PHONE</th>
         <th>DOB</th>
	    <th>BLOOD</th>
	    <th>ADDRESS</th>
		<th>IMAGE</th>
	    <th colspan="3">Oparation</th>
	 
	 
	 </tr>
	
	
	
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
		    <td>".$result["username"]."</td>
		    <td>".$result["name"]."</td>
		    <td>".$result["dept"]."</td>
		    <td>".$result["degree"]."</td>
		    <td>".$result["speciality"]."</td>
		    <td>".$result["designation"]."</td>
            <td>".$result["regno"]."</td>
            <td>".$result["gender"]."</td>
            <td>".$result["email"]."</td>
		    <td>".$result["phone"]."</td>
			<td>".$result["dob"]."</td>
            <td>".$result["blood"]."</td>
		    <td>".$result["address"]."</td>
			<td><a href='$result[image]'><img src='". $result["image"] ."' height='50' width='50'/></a></td>
			
			<td><a href='updateForm.php?u_name=$result[username] & nm=$result[name] & dept=$result[dept] & deg=$result[degree] & spec=$result[speciality] & des=$result[designation] & reg=$result[regno] & gn=$result[gender] & mail=$result[email] & phn=$result[phone]  & db=$result[dob] & bld=$result[blood] &  ad=$result[address] '>Edit</a></td>
			<td><a href='delete.php?u_name=$result[username]' onclick='return checkdelete()'>Delete</a></td>
			
			<td><a href='../schedule.php?u_name=$result[username] & nm=$result[name] '>Assign</a></td>
		
		</tr>";
		
	}
}

                          else
                           {
	                         echo "No  record Found";
                           }

                       ?>
                 </table>
		  
		  </div>
	   
	   
	   
	   
	   </div>


 

</body>
</html>
<script>
function checkdelete()
{
	return confirm('Are You Sure!! You Want to Delete This Data??');
	
}
</script>



