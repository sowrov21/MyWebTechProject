<?php 
    session_start(); 
    include('../../control/db.php');
    if(empty($_SESSION["username"])) 
    {
        header("Location: ../../login/login.php");
    }
    
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patient Portal</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="table-style.css">
    <link rel="stylesheet" href="booking.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>

<body>
	<form action="" method="post">

	<div class="wrapper"> 
    	
	 <div class="sidebar"> 
        	<ul>
            	<li><a href="patient_index.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            	<li><a href="profile.php?profile"><i class="fas fa-address-card"></i>Profile</a></li>
                <li><a href=""><i class="fas fa-tachometer-alt"></i>Book Appointment</a></li>
                <li><a href="booking_table.php"><i class="fas fa-address-card"></i>View Bookings</a></li>
                <li><a href=""><i class="fas fa-tachometer-alt"></i>Cancel Booking</a></li>
			
            	<li><a href="#"><i class="fas fa-info-circle"></i></i>Help</a></li>
            	<li><a href="../../control/logout.php?logout"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
        	</ul> 

        	<div class="social_media">
         		<a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
          		<a href="https://twitter.com/explore"><i class="fab fa-twitter"></i></a>
          		<a href="https://www.instagram.com/?hl=bn"><i class="fab fa-instagram"></i></a>
          		<a href="https://bd.linkedin.com/"><i class="fab fa-linkedin"></i></a>
      		</div>
    	</div>
 
        <div class="main">
            
            <ul>
                <li>
                    <label> Patient Username :</label>
                    <input type="text" name="p_username" value="<?php echo $_SESSION["username"]?>" readonly placeholder="username">
                
                    <label> Doctor Name :</label>
                    <input type="text" name="dr_name"  placeholder="doctor_name"><br><br>
                </li>
            
                <li><button type="submit" name="check" value="">Check</button><br><br></li>
                <li><ul><label>Doctor Department :</label></ul></li>
            </ul>
                

                <?php 
    $p_username = $_SESSION["username"];
    $category ="";
    $d_name="";
    $slot="";
    $slot1="Not Available";
    $slot2="Not Available";
    $slot3="Not Available";
    $slot4="Not Available";
    $slot5="Not Available";

    if (isset($_POST['check'])) {
        $connection = new db();
        $conobj=$connection->OpenCon();
        $category = $_POST['category'];
 
        $userQuery=$connection->Check($conobj,"doctor",$category);
        $rowcount=mysqli_num_rows($userQuery);

        if($rowcount > 0){
            while($row = mysqli_fetch_assoc($userQuery)){
                $d_username = $row["username"];

                $userQueryShow = $connection->SlotShow($conobj,"schedule",$d_username);
                
                if($userQueryShow->num_rows > 0){

                    while($row = mysqli_fetch_assoc($userQueryShow)){
                        $d_name = $row["d_name"];
                        $R_slot = $row["slot"];

                        echo "<ul><ul><ul><li>Doctor Name :<h4>" .$d_name."</h4></li><ul>";
                      
                        $r = explode(",",$R_slot);
                            //echo $r;
                        if (in_array("10AM-12PM", $r)){
                            $slot = "10AM-12PM";
                            echo "<li><label> Slot_1 :
                                <input type='radio' name='slot' value='10AM-12PM'>" .$slot."</label><li>";
                        }
                        if (in_array("12PM-2PM", $r)){
                            $slot = "12PM-2PM";
                             echo "<li><label>Slot_2 :
                            <input type='radio' name='slot' value='12PM-2PM'>".$slot."</label></li>";
                        }
                        if (in_array("4PM-6PM", $r)){
                            $slot = "4PM-6PM";
                             echo "<li><label>Slot_3 :
                            <input type='radio' name='slot' value='4PM-6PM'>".$slot."</label></li>";
                        }
                        if (in_array("6PM-8PM", $r)){
                            $slot = "6PM-8PM";
                             echo "<li><label>Slot_4 :
                            <input type='radio' name='slot' value='6PM-8PM'>".$slot."</label></li>";
                        }
                        if (in_array("8PM-10PM", $r)){
                            $slot = "8PM-10PM";
                             echo "<li><label>Slot_5 :
                            <input type='radio' name='slot' value='8PM-10PM'>".$slot."</label></li></ul><ul></ul></ul>";
                        }             
                    }            
                }      
     }
                
        }
        else{
            $slot1= "Match not found";
        }?>
        
                <ul><li><label> Booking Date :</label></li>
                <input type="date" name="date"><br><br></ul>

                <ul><button type="submit" name="booking" value="">Appoint</button></ul>

    <?php } ?>
<ul><li>
    
            <select name="category" required>

            <option>Choose One</option>
            <option value="Diabetologist" <?php if($category=="Diabetologist"){echo "selected";} ?>>Diabetologist</option>
            <option value="ENT Surgeon" <?php if($category=="ENT Surgeon"){echo "selected";} ?>>ENT Surgeon</option>
            <option value="Medicine" <?php if($category=="Medicine"){echo "selected" ;} ?>>Medicine</option>
            <option value="Neuro Medicine" <?php if($category=="Neuro Medicine"){echo "selected";} ?>>Neuro Medicine</option>
            <option value="Eye Specialist" <?php if($category=="Eye Specialist"){echo "selected";} ?>>Eye Specialist</option>
            <option value="Surgery" <?php if($category=="Surgery"){echo "selected";} ?>>surgery</option>
            <option value="Neuro Surgeon" <?php if($category=="Neuro Surgeon"){echo "selected";} ?>>Neuro Surgeon</option>
            <option value="Cardiologist" <?php if($category=="Cardiologist"){echo "selected";} ?>>Cardiologist</option>
            <option value="Dental Surgeon" <?php if($category=="Dental Surgeon"){echo "selected";} ?>>Dental Surgeon</option>
            <option value="Kidney Specialist" <?php if($category=="Kidney Specialist"){echo "selected";} ?>>Kidney Specialist</option>
            <option value="Orthopaedic" <?php if($category=="Orthopaedic"){echo "selected";} ?>>Orthopaedic</option>
            <option value="Psychiatric" <?php if($category=="Psychiatric"){echo "selected";} ?>>Psychiatric</option>
        </select><br><br></ul></ul>
      
 

    </div>

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
            </div>
    </form>
</body>
<?php
    
        

       if (isset($_POST['booking'])) {
        $category = $_POST['category'];
        $d_name =$_POST['dr_name'];
        $date =$_POST['date'];
        $slot =$_POST['slot'];


        $connection = new db();
        $conobj=$connection->OpenCon();
        $userQueryBooking=$connection->Booking($conobj,"booking",$p_username,$d_name,$category,$date,$slot);

        if ($userQueryBooking > 0) {
                echo "<script>alert('Submit Successfuly')</script>";
            }
            else
            {
                echo "<script>alert('Submit Fail')</script>";
            }




    }
?>