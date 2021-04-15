<?php
	session_start(); 
	if(empty($_SESSION["username"])) 
	{
		header("Location: ../login.php"); // Redirecting To Home Page
	}
?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Admin Portal</title>
	<link rel="stylesheet" href="styles.css">   <!-- 1 previous folder file exist-->
	<link rel="stylesheet" href="table-style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>

<body>

	<div class="wrapper"> 	<!--Our sidebar main division -->
    	<div class="sidebar">
    		<div class="Header">
	    		<h3><i class="fas fa-bars"></i>  Menu</h3> 
	    		
	    		<div class="notification">
	    			<a href=""><i class="fas fa-bell"></i></a>
	    		</div>

	    		<div class="message">
	    			<a href="https://www.google.com/intl/bn/gmail/about/"><i class="fas fa-envelope"></i></a>
	    		</div>

	    		<div class="user">
	    			<a href=""><i class="fas fa-user-circle"></i>
	    				<?php echo $_SESSION["username"];?></a>
	    		</div>

	    		<div class="search">
	    			<input type="text" name="search" placeholder="Search for..">
	    			<a href="?search"><i class="fas fa-search"></i></a> 
	    		</div>

    		</div>
        	
	
        	<ul>
            	<li><a href="../admin_index.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            	<li><a href="profile.php?profile"><i class="fas fa-address-card"></i>Profile</a></li>
            	<li><a href=""><i class="fas fa-user-plus"></i>Add People</a></li>
            	<li><a href="#"><i class="fas fa-cogs"></i>Operation</a>
			
				<ul>
                	<li><a href="admin_table.php"><i class="fas fa-user-shield"></i>Admin</a></li>
					<li><a href="#"><i class="fas fa-user-md"></i>Doctor</a></li>
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
            
            	<li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            	<li><a href="../control/logout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
        	</ul>

            <div class="social_media">
                <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
          		<a href="https://twitter.com/explore"><i class="fab fa-twitter"></i></a>
          		<a href="https://www.instagram.com/?hl=bn"><i class="fab fa-instagram"></i></a>
          		<a href="https://bd.linkedin.com/"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    
	    <div class="main_content">
            <div class="header"></h2></div>  
            <div class="info">
		
		
		<!-- Testing external php start-->
				<?php
					error_reporting(0);
					include("mysql.php");
					$query="SELECT * FROM doctor";
					$data=mysqli_query($conn,$query);
					$total=mysqli_num_rows($data);
					//$result=mysqli_fetch_assoc($data);

 
				if($total!=0)
					{
				?>
					<div class="admin-table" > <!-- admin table CSS style for admin panel -->
	   					<div  class="tile1"><h2>Doctor Table</h2> </div>
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
	    								<th colspan="2">Oparation</th> 
	 								</tr>
								</thead>

								<?php
									while($result=mysqli_fetch_assoc($data))
									{
										echo "<tr>
		     									<td>". $result["username"]. " </td>
		    									<td>". $result["name"]. " </td>
		    									<td>". $result["gender"]. " </td>
		    									<td>". $result["blood"]. " </td>
												<td>". $result["dob"]. " </td>
		    									<td>". $result["password"]. " </td>
		    									<td>". $result["phone"]. " </td>
		    									<td>". $result["email"]. " </td>
		    									<td>". $result["address"]. " </td>
												<td><a href='from_update_1.php?u_name=$result[username] & nm=$result[name] & gn=$result[gender] & bld=$result[blood] & db=$result[dob] & pass=$result[password] & phn=$result[phone] & mail=$result[email] & ad=$result[address] '>Edit</a></td>
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

	  					</div>	
					</div>
	
					<script>
						function checkdelete()
						{
							return confirm('Are You Sure!! You Want to Delete This Data??');
						}
	  
	  
	  				</div>   		<!-- Testing external php end-->
   


   				</div>
	
	
			</div>

			<div class="apnt-popup">  <!--Appointment popup division which situated in bottom line html or outside of our main division -->
	
	       		<div class="apnt-content">
		   			<div class="win-close">+</div>
		   
		    		<img src="user.jpg"></img>
					<h3>Registration</h3><br><br>
			
					<input type=text placeholder="Enter User Name" > </input>
					<input type=password placeholder="Enter Password" > </input>
			
					<a href="" class="button" >Submit</a>
		   
		   		</div>
			</div>

		<script src="registration.js"></script><!--appoint popup javascript-->

</body>
</html>