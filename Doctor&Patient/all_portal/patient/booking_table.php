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
    $p_username = $_SESSION["username"];

    $userQuery=$connection->Booking_Info($conobj,"booking",$p_username);


    if($userQuery->num_rows > 0){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Portal</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="table-style.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>

<body>
    <form action="" method="post">

    <div class="wrapper">   <!--Our sidebar main division -->
        
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
                        <li><a href="patient_index.php"><i class="fas fa-house-user"></i> Dashboard</a></li>
                        <li><a href="profile.php?profile"><i class="fas fa-user"></i> Profile</a></li>
                        <li><a href=""><i class="fas fa-redo"></i> Reset Password</a></li>
                        <li ><a href="../../control/logout.php?logout" class="logout"><i class="fas fa-power-off"></i>  Logout</a></li>
                    </ul>
                </li>
            </ul>       
        </div>
            </div>
        <div class="sidebar"> 
            <ul>
                <li><a href="patient_index.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                <li><a href="profile.php?profile"><i class="fas fa-address-card"></i>Profile</a></li>
                <li><a href="appointment.php"><i class="fas fa-tachometer-alt"></i>Book Appointment</a></li>
                <li><a href=""><i class="fas fa-address-card"></i>View Bookings</a></li>
                <li><a href=""><i class="fas fa-tachometer-alt"></i>Cancel Booking</a></li>
            
                <li><a href="#"><i class="fas fa-address-book"></i>Help</a></li>
                <li><a href="../../control/logout.php?logout"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
            </ul> 

            <div class="social_media">
                <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/explore"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/?hl=bn"><i class="fab fa-instagram"></i></a>
                <a href="https://bd.linkedin.com/"><i class="fab fa-linkedin"></i></a>
            </div>

<div class="main_content">
            <div class="info">
<div class="admin-table" >                       
                    <div  class="tile1"><h2> Booking Table  </h2> </div>

                    <div class="full-table">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    
                                    <th>Doctor Name</th>
                                    <th>Department</th>
                                    <th>Date</th>
                                    <th>Slot</th>
                                </tr>
                            </thead>

                        <?php
                                while($row = mysqli_fetch_assoc($userQuery)){
                                    echo "<tr>
                                            
                                            <td>". $row["d_name"]. " </td>
                                            <td>". $row["category"]. " </td>
                                             <td>". $row["date"]. " </td>
                                            <td>". $row["slot"]. " </td>
        
                                        </tr>";
                                }
                            }
                            else{
                                echo "No  record Found";
                            }

                            ?>
                        </table>
                    </div>  
                </div>
                </div>
        
</form>




</body>


</html>

