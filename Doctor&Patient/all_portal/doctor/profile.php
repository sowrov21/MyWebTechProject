<?php 
    session_start(); 
    include('../../control/db.php');
    if(empty($_SESSION["username"])) 
    {
        header("Location: ../../login/login.php"); // Redirecting To Home Page
    }
?>

<?php
        if(isset($_GET['profile'])){
        $u_name = $_SESSION["username"];
        
        $connection = new db();
        $conobj=$connection->OpenCon();
        $userQuery=$connection->Profile($conobj,"doctor",$u_name);
        //$result_w=mysqli_fetch_array($userQuery); 
        if($userQuery->num_rows > 0)
        {
           while($row = mysqli_fetch_assoc($userQuery)){
            $username = $row["username"];
            $name = $row["name"];
            $dept = $row["dept"];
            $degree = $row["degree"];
            $speciality =$row["speciality"];
            $designation = $row["designation"];
            $regno = $row["regno"];
            $gender =$row["gender"];
			 $email =$row["email"];
			$phone =$row["phone"];
                  
		     $dob =$row["dob"];
			   $blood =$row["blood"];
			     $ad =$row["address"];
				   $image =$row["image"];

            
            }
        }
    
    }
   
?>
<!DOCTYPE html>
<head>
		<title>User Profile</title>
		<link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="dashboard.css">
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    <form action="" method="post"  enctype="multipart/form-data">
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
        </div>	<!--Our sidebar main division -->
    	<div class="sidebar">
    
		
        	<ul>
                <li><a href="doctor_index.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            	<li><a href="profile.php?profile"><i class="fas fa-address-card"></i>Profile</a></li>

            	<li><a href="booking_table.php"><i class="fas fa-eye"></i>View Appointment</a></li>
			  
			    <li><a href="my_schedule.php"><i class="fas fa-clipboard-list"></i>My Schedule</a></li>
			     <li><a href="prescriptionForms.php"><i class="fas fa-prescription"></i>Prescription</a></li>
			
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
            <div class="info">
        
        
        <!-- Testing external php start-->
                
    </div>

        <div class="profile">
            <h2>Personal Information</h2>
            <div class="edit"><a href='../admin/doctor_crude/updateForm.php?u_name=<?php echo $_SESSION["username"];?>& nm=<?php echo $name; ?> & dept=<?php echo $dept; ?> & deg=<?php echo $degree; ?> & spec=<?php echo $speciality; ?> & des=<?php echo $designation; ?> & reg=<?php echo $regno; ?> & gn=<?php echo $gender; ?> & mail=<?php echo $email; ?> & phn=<?php echo $phone; ?> & db=<?php echo $dob; ?> & bld=<?php echo $blood; ?> & ad=<?php echo $address; ?>'><i class="fas fa-user-edit"></i> Edit Profile</a></div>
            
             <div class="info">
                <table>
                    <tr>
                        <th>Name :</th>
                        <td><?php echo strtoupper($name); ?></td>
                    </tr>

                    <tr>
                        <th>Username :</th>
                        <td><?php echo $_SESSION["username"];?></td>
                    </tr>

                    <tr>
                        <th>Department :</th>
                        <td><?php echo  $dept; ?> </td>
                    </tr>

					<tr>
                        <th>Degree :</th>
                        <td><?php echo $degree; ?> </td>
                    </tr>

                   <tr>
                    <th>Speciality :</th>
                        <td><?php echo $speciality ; ?> </td>
                    </tr>
					
					
					<tr>
                        <th>Designation :</th>
                        <td><?php echo $designation ; ?> </td>
                    </tr>

                    <tr>
                        <th>Reg no :</th>
                        <td><?php echo $regno; ?></td>
                    </tr>

                    <tr>
                        <th>Gender :</th>
                        <td><?php echo $gender ; ?> </td>
                    </tr>

                      <tr>
                        <th>Email :</th>
                        <td><?php echo $email ; ?></td>
                    </tr>
				   
				    <tr>
                        <th>Phone :</th>
                        <td><?php echo $phone  ; ?></td>
                    </tr>
				   <tr>
                        <th>Date of Birth :</th>
                        <td><?php echo $dob ; ?></td>
                    </tr>

                    
                    <tr>
                        <th>Blood Group :</th>
                        <td><?php echo $blood; ?></td>
                    </tr>

                    <tr>
                        <th>Address :</th>
                        <td><?php echo strtoupper($ad); ?></td>
                    </tr>
    
                </table>
            </div>

             
             
             
        </div>

        <?php
         $username = $_SESSION["username"];
            if (isset($_POST['upload'])) {
            
                $filename =$_FILES["uploadfile"]["name"];
                $tempname = $_FILES["uploadfile"]["tmp_name"];
                $folder = "../admin/doctor_crude/Profile_Picture/".$filename;
                move_uploaded_file($tempname, $folder);
                    

                $connection = new db();
                $conobj=$connection->OpenCon();
                $userQuery=$connection->Picture($conobj,"doctor",$folder,$username);

                if ($filename == "") {

                    $folder = '<img src=Profile_Picture/user.png>';
                }

                else{

                    if ($userQuery) {
                        echo "<script>alert('UPDATE Successfuly')</script>";
                    }
                    else{
                        echo "<script>alert('UPDATE Fail')</script>";
                    }
                }
            }
            else{
                $folder = $image;
            }

        ?>

        <div class="pic">
            
			
		
                <?php echo "<img src='$folder' width='150' height='150'/>";?>
		
            <!--<p>Upload a diffterent picture..</p>-->
            <button name="upload">Upload</button>
            <div class="file">
                <input type="file" name="uploadfile">
            </div>


        </div>

    </div>
    
</form>
</body>	