<?php 
	session_start(); 
	include('../../control/db.php');
	if(empty($_SESSION["username"])) 
	{
		header("Location: ../../login/login.php"); // Redirecting To Home Page
	}
?>

<?php
        $connection = new db();
        $conobj=$connection->OpenCon();
        $userQueryA=$connection->Count($conobj,"admin");
        $resultA=mysqli_fetch_array($userQueryA);
        $countA = $resultA['COUNT(username)'];

        $userQueryD=$connection->Count($conobj,"doctor");
        $resultD=mysqli_fetch_array($userQueryD);
        $countD = $resultD['COUNT(username)'];

        $userQueryS=$connection->Count($conobj,"staff");
        $resultS=mysqli_fetch_array($userQueryS);
        $countS = $resultS['COUNT(username)'];

        $userQueryP=$connection->Count($conobj,"patient");
        $resultP=mysqli_fetch_array($userQueryP);
        $countP = $resultP['COUNT(username)'];

        $userQueryAct=$connection->CountAct($conobj,"patient");
        $resultAct=mysqli_fetch_array($userQueryAct);
        $countAct = $resultAct['COUNT(username)'];

        $userQueryInact=$connection->CountInact($conobj,"patient");
        $resultInact=mysqli_fetch_array($userQueryInact);
        $countInact = $resultInact['COUNT(username)'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Portal</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="table-style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>

<body>
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
                            <li><a href="admin_index.php"><i class="fas fa-house-user"></i> Dashboard</a></li>
                            <li><a href="profile.php?profile"><i class="fas fa-user"></i> Profile</a></li>
                            <li><a href=""><i class="fas fa-redo"></i> Reset Password</a></li>
                            <li ><a href="../../control/logout.php" class="logout"><i class="fas fa-power-off"></i>  Logout</a></li>
                        </ul>
                    </li>
                </ul>       
            </div>
        </div>
		
		<div class="sidebar"> 
        	<ul>
            	<li><a href="admin_index.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            	<li><a href="profile.php?profile"><i class="fas fa-address-card"></i>Profile</a></li>

            	<li><a href=""><i class="fas fa-user-plus"></i>Add People</a>
                    <ul>
                        <li><a href="reg_form.php"><i class="fas fa-user-shield"></i>Admin</a></li>  
                        <li><a href="doctor_crude/RegistrationForm.php"><i class="fas fa-user-md"></i>Doctor</a></li>
                        <li><a href="staff_crude/RegistrationForm.php"><i class="fas fa-id-badge"></i>Staff</a></li>
					    <li><a href="patient_crude/RegistrationForm.php"><i class="fas fa-id-badge"></i>Patient</a></li>
                    </ul>
                </li>

            	<li><a href="#"><i class="fas fa-cogs"></i>Operation</a>
			
			    <ul>
                 	<li><a href="admin_table.php"><i class="fas fa-user-shield"></i>Admin</a></li>	
                 	<li><a href="doctor_crude/disply.php"><i class="fas fa-user-md"></i>Doctor</a></li>
                 	<li><a href="staff_crude/disply.php"><i class="fas fa-id-badge"></i>Staff</a></li>
					<li><a href="patient_crude/disply.php"><i class="fas fa-id-badge"></i>Patient</a></li>
                           
                </ul>
			
				</li>
						    			
				<li><a href="#"><i class="fas fa-calendar-times"></i>Assigning</a>
			              
				<ul>
					<li><a href="schedule.php" id="btn"><i class="fas fa-stethoscope"></i>Doctor</a></li>
                    <li><a href="#" id="btn1"><i class="fas fa-people-carry"></i>Staff</a></li>
						                             
                </ul>
			
				</li>
			
            	<li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            	<li><a href="../../control/logout.php?logout"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
        	</ul> 

        	<div class="social_media">
         		<a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
          		<a href="https://twitter.com/explore"><i class="fab fa-twitter"></i></a>
          		<a href="https://www.instagram.com/?hl=bn"><i class="fab fa-instagram"></i></a>
          		<a href="https://bd.linkedin.com/"><i class="fab fa-linkedin"></i></a>
      		</div>





    	</div>
        <div class="main_content"> 
            <div class="info">
        
        
        <!-- Testing external php start-->
                <?php

                    if(isset($_POST['search'])){
                         Header("Location: admin_table.php");
                    }
 
               ?>
    </div>
	
	
	    <div class="dashboard">

        <ul>
            <li>
                <div class="admin">
                <p>Admin</p>
                <div class="logo"> 
                  <i class="fas fa-user-shield fa-3x"></i>
                </div>
                
                <div class="val"> 
                     <h3><?php echo $countA?></h3>
                
                </div>
                <div class="footer">
                    <a href="admin_table.php">More Info <i class="fas fa-angle-double-right"></i></a>
                </div>
                </div>
            </li>
            <li>
                <div class="doctor">
                <p>doctor</p>
                <div class="logo"> 
                  <i class="fas fa-user-md fa-3x"></i>
                </div>
                
                <div class="val"> 
                     <h3><?php echo $countD?></h3>
                
                </div>
                <div class="footer">
                    
                    <a href="doctor_crude/disply.php">More Info <i class="fas fa-angle-double-right"></i></a>
                </div>
            </li>
            <li>
                <div class="stuff">
                <p>Staff</p>
                <div class="logo"> 
                  <i class="fas fa-hospital-user fa-3x"></i>
                </div>
                
                <div class="val"> 
                     <h3><?php echo $countS?></h3>
                
                </div>  
                <div class="footer">
                    <a href="staff_crude/disply.php">More Info <i class="fas fa-angle-double-right"></i></a>
                </div>
            </li>
            <li>
                 <div class="patient">
                <p>patient</p>
                <div class="logo"> 
                  <i class="fas fa-users fa-3x"></i>
                </div>
                
                <div class="val"> 
                     <h3><?php echo $countP?></h3>
                
                </div>
                <div class="footer">
                    <a href="patient_crude/disply.php">More Info <i class="fas fa-angle-double-right"></i></a>
                </div>
            </li>
            <li>
                <div class="active">
                <p>active</p>
                <div class="logo"> 
                  <i class="fas fa-user-check fa-3x"></i>
                </div>
                
                <div class="val"> 
                     <h3><?php echo $countAct?></h3>
                
                </div>  
                <div class="footer">
                    <a href="">More Info <i class="fas fa-angle-double-right"></i></a>
                </div>
            </li>
            <li>
                <div class="inactive" >
                <p>inactive</p>
                <div class="logo"> 
                  <i class="fas fa-user-slash fa-3x"></i>
                </div>
                
                <div class="val"> 
                     <h3><?php echo $countInact?></h3>
                
                </div>
                <div class="footer">
                    <a href="">More Info <i class="fas fa-angle-double-right"></i></a>
                </div>
            </li>

        </ul>

        
    </div>
        

  		
		

        
</form>
</body>
</html>