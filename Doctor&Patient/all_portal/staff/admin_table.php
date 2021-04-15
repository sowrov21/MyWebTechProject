<?php 
	session_start(); 
	include('../../control/db.php');
	if(empty($_SESSION["username"])) 
	{
		header("Location: ../../login/login.php"); // Redirecting To Home Page
	}
?>
<?php
					error_reporting(0);
					$connection = new db();
        			$conobj=$connection->OpenCon();
        			$userQuery = "";

					if(isset($_POST['search'])){
						$searchFor =$_POST['searchText'];
					
        				$userQuery=$connection->Search($conobj,"admin",$searchFor);}
        				

					else{
        			$userQuery=$connection->All($conobj,"admin");
        				$searchFor = "";
        			}
        			
					//$total=mysqli_num_rows($data);
					//$result=mysqli_fetch_assoc($data);

 
				if($userQuery->num_rows > 0)
					{
				?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Admin Portal</title>
	<link rel="stylesheet" href="styles.css"> 
	<link rel="stylesheet" href="dashboard.css">  <!-- 1 previous folder file exist-->
	<link rel="stylesheet" href="table-style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>

<body>
	<form action="" method="post">

	<div class="wrapper"> 
	<div class="Header">
    			<h3><i class="fas fa-bars"></i> Menu</h3>

                <div class="search">
                    <input type="text" name="searchText" placeholder="Search for..">
                    <button type="Submit" name="search" value=""><i class="fas fa-search"></i></button>
                </div>
                <div class="header">
            <ul>
                <li><a href=""><i class="fas fa-bell"></i></a></li>
                <li><a href="https://www.google.com/intl/bn/gmail/about/"><i class="fas fa-envelope"></i></a></li>
                <li>
                    <a href=""><i class="fas fa-user-circle"></i><?php echo $_SESSION["username"];?></a>

                    <ul>
                        <li><a href=""><i class="fas fa-house-user"></i> Dashboard</a></li>
                        <li><a href=""><i class="fas fa-user"></i> Profile</a></li>
                        <li><a href=""><i class="fas fa-redo"></i> Reset Password</a></li>
                        <li ><a href="" class="logout"><i class="fas fa-power-off"></i>  Logout</a></li>
                    </ul>
                </li>
            </ul>       
        </div>
    		</div>	<!--Our sidebar main division -->
    	<div class="sidebar"> 

        	<ul>
            	<li><a href="admin_index.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            	<li><a href="profile.php?profile"><i class="fas fa-address-card"></i>Profile</a></li>

            	<li><a href=""><i class="fas fa-user-plus"></i>Add People</a>
                    <ul>
                        <li><a href="reg_form.php"><i class="fas fa-user-shield"></i>Admin</a></li>  
                        <li><a href="doctor_table.php"><i class="fas fa-user-md"></i>Doctor</a></li>
                        <li><a href="#"><i class="fas fa-id-badge"></i>Staff</a></li>
                    </ul>
                </li>
                
            	<li><a href="#"><i class="fas fa-cogs"></i>Operation</a>
			
				<ul>
                	<li><a href=""><i class="fas fa-user-shield"></i>Admin</a></li>
					<li><a href="doctor_table.php"><i class="fas fa-user-md"></i>Doctor</a></li>
                    <li><a href="#"><i class="fas fa-id-badge"></i>Staff</a></li>
					<li><a href="#"><i class="fas fa-id-badge"></i>Patient</a></li>
                           
                </ul>
			
				</li>
						    			
				<li><a href="#"><i class="fas fa-calendar-check"></i>Appoint New</a>
			              
				<ul>
					<li><a href="#" id="btn"><i class="fas fa-stethoscope"></i>Doctor</a></li>
                    <li><a href="#" id="btn1"><i class="fas fa-people-carry"></i>Staff</a></li>
						                             
                </ul>
			
				</li>   
            
            	<li><a href="#"><i class="fas fa-address-book"></i> Contact</a></li>
            	<li><a href="../../control/logout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
        	</ul>
        	<div class="add"><a href="reg_form.php"><i class="fas fa-user-plus"></i> Add People</a></div>
        	
    

            <div class="social_media">
                <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
          		<a href="https://twitter.com/explore"><i class="fab fa-twitter"></i></a>
          		<a href="https://www.instagram.com/?hl=bn"><i class="fab fa-instagram"></i></a>
          		<a href="https://bd.linkedin.com/"><i class="fab fa-linkedin"></i></a>
            </div>
        
        
</div>

	    <div class="main_content">
            <div class="info">
    			


					<div class="admin-table" > <!-- admin table CSS style for admin panel -->
	   					<div  class="tile1"><h2>Admin Table  </h2> </div>
						<div class="full-table">

							<table class="content-table">
								<thead>
	 								<tr>
	    								<th>UserName</th>
	    								<th>Name</th>
	    								<th>Gender</th>
	    								<th>BLOOD</th>
	    								<th>DOB</th>
	    								<th>PASSWORD</th>
	    								<th>PHONE</th>
	    								<th>EMAIL</th>
	    								<th>ADDRESS</th>
	    								<th>IMAGES</th>
	    								<th colspan="2">Oparation</th> 
	 								</tr>
								</thead>

								<?php
									while($row = mysqli_fetch_assoc($userQuery))
									{
										echo "<tr>
		     									<td>". $row["username"]. " </td>
		    									<td>". $row["name"]. " </td>
		    									<td>". $row["gender"]. " </td>
		    									<td>". $row["blood"]. " </td>
												<td>". $row["dob"]. " </td>
		    									<td>". $row["password"]. " </td>
		    									<td>". $row["phone"]. " </td>
		    									<td>". $row["email"]. " </td>
		    									<td>". $row["address"]. " </td>

		    									<td><a href='$row[image]'><img src='". $row["image"] ."' height='100' width='100'/></a></td>

												<td><a href='updateForm.php?u_name=$row[username] & nm=$row[name] & gn=$row[gender] & bld=$row[blood] & db=$row[dob] & pass=$row[password] & phn=$row[phone] & mail=$row[email] & ad=$row[address] & img=$row[image]'>Edit</a></td>
												<td><a href='delete.php?u_name=$row[username]' onclick='return checkdelete()'>Delete</a></td>
		
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


					<script>
						function checkdelete()
						{
							return confirm('Are You Sure!! You Want to Delete This Data??');
						}
					</script>
	  
	  				</div>

   				</div>
	
			</div>

		<script src="registration.js"></script>
</div>
</div>
</div>
</form>
</body>
</html>