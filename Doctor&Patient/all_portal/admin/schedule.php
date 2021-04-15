<?php 
    session_start(); 
    include('../../control/db.php');

    if(empty($_SESSION["username"])){
        header("Location: ../../login/login.php");
    }
?>

<?php
    error_reporting(0);

    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery = "";

    if(isset($_POST['search'])){
        $searchFor =$_POST['searchText'];
        $userQuery=$connection->Search($conobj,"schedule",$searchFor);
    }
    else{
            $userQuery=$connection->All($conobj,"schedule");
            $searchFor = "";
        }

    if($userQuery->num_rows > 0){
?>
<?php
$d_username = $_GET["u_name"];
            $d_name =$_GET["nm"];

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="styles.css">   <!-- 1 previous folder file exist-->
    <link rel="stylesheet" href="table-style.css">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>

<body>
    <form action="" method="post" action="scheduleControl.php">
    <div class="wrapper"> 

        <div class="sidebar">
            <ul>
                <li><a href="admin_index.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                <li><a href="profile.php?profile"><i class="fas fa-address-card"></i>Profile</a></li>
                <li><a href=""><i class="fas fa-user-plus"></i>Add People</a>
                    <ul>
                        <li><a href="reg_form.php"><i class="fas fa-user-shield"></i>Admin</a></li>  
                        <li><a href=""><i class="fas fa-user-md"></i>Doctor</a></li>
                        <li><a href="#"><i class="fas fa-id-badge"></i>Staff</a></li>
						<li><a href="patient_crude/RegistrationForm.php"><i class="fas fa-id-badge"></i>Patient</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-cogs"></i>Operation</a>
            
                    <ul>
                        <li><a href="admin_table.php"><i class="fas fa-user-shield"></i>Admin</a></li>
                        <li><a href="doctor_table.php"><i class="fas fa-user-md"></i>Doctor</a></li>
                        <li><a href="staff_crude/disply.php"><i class="fas fa-id-badge"></i>Staff</a></li>
                        <li><a href="patient_crude/disply.php"><i class="fas fa-id-badge"></i>Patient</a></li>    
                    </ul>
                </li>
                                        
                <li><a href="#"><i class="fas fa-calendar-check"></i>Assigning</a>     
                    <ul>
                        <li><a href="schedule.php" id="btn"><i class="fas fa-stethoscope"></i>Doctor</a></li>
                        <li><a href="#" id="btn1"><i class="fas fa-people-carry"></i>Staff</a></li>
                    </ul>
                </li>   
            
                <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
                <li><a href="../../control/logout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
            </ul>

            <div class="social_media">
                <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/explore"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/?hl=bn"><i class="fab fa-instagram"></i></a>
                <a href="https://bd.linkedin.com/"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
       
        <div class="main_content">
		
		
		<div id="schedule">
		<form name="myform" method="POST" onsubmit="return form_validation()" action="" >
           <input type="text" name="d_username" id="d_username" value="<?php echo $d_username; ?>" placeholder="d_username"><br><span id="username_msg"></span>
            <input type="text" name="d_name" id="d_name" value="<?php echo $d_name; ?>" placeholder="d_name"><span id="name_msg"></span><br>
            <input type="text" name="chember" id="chember" placeholder="chember"><br><span id="chember_msg"></span>
            <input type="number" name="room" id="room" placeholder="Room no"><br><span id="room_msg"></span><br
    

            <h1><?php //echo $slot1; ?></h1>

<h3>Slot:</h3><br>
          <i id="slt"> <input type="checkbox"  name="slot[]" id="slot" value="10AM-12PM">10AM-12PM</i>
            <i id="slt"><input type="checkbox"  name="slot[]" id="slot" value="12PM-2PM">12PM-2PM<br><br></i>
            <i id="slt"><input type="checkbox"  name="slot[]" id="slot" value="4PM-6PM">4PM-6PM</i>
            <i id="slt"><input type="checkbox"  name="slot[]" id="slot" value="6PM-8PM">6PM-8PM<br><br></i>
            <i id="slt"><input type="checkbox"  name="slot[]" id="slot" value="8PM-10PM">8PM-10PM<br><br></i><br><span id="chember_msg"></span>

            <input type="submit" name="submit" id="submit" value="Submit" >
              </form>
        </div>
		
		
		
            <div class="info">

                    <div class="admin-table" > <!-- admin table CSS style for admin panel -->
                        <div  class="tile1"><h2 >Schedule Table  </h2> </div>
                       <div class="full-table">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>Doctor Username</th>
                                    <th>Doctor Name</th>
                                    <th>Chamber</th>
                                    <th>Slot</th>
                                    <th>Room NO</th>
                                    <th colspan="3">Oparation</th> 
                                </tr>
                            </thead>

                        <?php
                                while($row = mysqli_fetch_assoc($userQuery)){
                                    echo "<tr>
                                            <td>". $row["d_username"]. " </td>
                                            <td>". $row["d_name"]. " </td>
                                            <td>". $row["chember"]. " </td>
                                            <td>". $row["slot"]. " </td>
                                            <td>". $row["room"]. " </td>

                                            <td><a href='?d_username=$row[d_username] & d_name=$row[d_name] '>Edit</a></td>

                                            <td><a href='?d_name=$row[d_username]' onclick='return checkdelete()'>Delete</a></td>

        
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


                    <script>
                        function checkdelete()
                        {
                            return confirm('Are You Sure!! You Want to Delete This Data??');
                        }
                    </script>
      
                    </div>

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
                            <li><a href="admin_index.php"><i class="fas fa-house-user"></i> Dashboard</a></li>
                            <li><a href="profile.php?profile"><i class="fas fa-user"></i> Profile</a></li>
                            <li><a href=""><i class="fas fa-redo"></i> Reset Password</a></li>
                            <li ><a href="../../control/logout.php" class="logout"><i class="fas fa-power-off"></i>  Logout</a></li>
                        </ul>
                    </li>
                </ul>       
            </div>
        </div>
                
                
    <br clear="all">
            </div>

        
		<script type="text/javascript" src="sch_reg_valid.js"></script>

</body>
</html>
<?php
 if (isset($_GET['u_name'])) {
        $d_username = $_GET['u_name'];
            $d_name =$_GET['nm'];
        if (isset($_POST['submit'])) {
        
            
            $slot = implode(',', $_POST['slot'] );
            $chember =$_POST['chember'];
            $room =$_POST['room'];

            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->Schedule_Reg($conobj,"schedule",$d_username,$d_name,$chember,$slot,$room);

            if ($userQuery > 0) {
                echo "<script>alert('Submit Successfuly')</script>";
				
				?>

	               <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Final/all_portal/admin/schedule.php">
	          <?php
				
            }
            else
            {
                echo "<script>alert('Submit Fail')</script>";
				
            }
        }
    }


    /*else if (isset($_GET['assign'])) {
        $d_username = $_POST['d_username'];
        $d_name =$_POST['d_name'];
        
    }*/

    
?>
<?php
    if (isset($_GET['d_name'])) {
        $d_username = $_GET['d_username'];

        $connection = new db();
        $conobj=$connection->OpenCon();
        $userQueryDelete=$connection->Schedule_del($conobj,"schedule",$d_username);

        if($userQueryDelete > 0 ){
            echo "<script>alert('DELETE Successfuly')</script>";
        }
    
        else{
            echo "<script>alert('DELETE Fail')</script>";}

    }
?>

