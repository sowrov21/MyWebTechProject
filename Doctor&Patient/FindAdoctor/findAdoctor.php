<html>
<head>
<title>Find a Doctor</title>
    <link href="finddoctor.css" rel="stylesheet" type="text/css">
    <link href="findAdoctor.css_Res.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="tabledisply.css">
	
    <link href="images/HOSPITALLOGO.jfif" rel="icon" type="image">
   
	<link href="icon/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" media="">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





<link rel="stylesheet" href="disply.css"> 
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>



</head>

<body>

<div id="wrapper">
    <div id="header">
   
    <h1>
       <a href="#"><i class="fa fa-phone fa-wa"></i> 01715</a>
       <a href="#"><i class="fa fa-female fa-wa"></i> Contac Us</a>
       <a href="#"><i class="fa fa-fax fa-wa"></i> Webmail</a>
        <span id="fblogo">
       <a href="http://www.facebook.com"> <img src="images/fb.jpg" width="30" height="20" alt="youtube logo"/></a>
       <a href="#"> <img src="images/in.jpg" width="30" height="20" alt="tw logo"/></a>
       <a href="#"> <img src="images/tw.jpg" width="30" height="20" alt="instragram"/></a>
       <a href="#"> <img src="images/instagram.jpg" width="30" height="20" alt="facebook"/></a>
        
       </span>
        
        </h1>
        
   
    </div>
    
  
    <div id="logo">  
 <a href="../index.html">  <img src="images/HOSPITALLOGO.jfif" width="200" height="120" alt="hospital logo"/></a> 
   </div>
    
    <div class="menu">
       <button id="menuButton"><i style="font-size: 30px;" class="fa fa-bars"></i></button>
       </div>
    
   <div id="navbar"> 
    
    <ul>
        <li><a href="../index.html"><i style="font-size: 15px;" class="fa fa-home fa-wa"></i> HOME</a></li>
        <li><a href="#"><i style="font-size: 15px;" class="fa fa-book fa-wa"></i> ABOUT US </a>
            <ul>
                <li><a href="#">MISSION & VISION</a></li> 
            </ul>
         </li>
        <li><a href="#"><i class="fa fa-building"></i> DEPARTMENT</a>
          <ul>
            <li><a href="#">EMERGENCY</a></li>
            <li><a href="#">CARDIOLOGY</a>
              <ul>
                <li><a href="#">CARDIOLOGY1</a></li>
                  <li><a href="#">CARDIOLOGY2</a></li>
                  <li><a href="#">CARDIOLOGY3</a></li>
                  <li><a href="#">CARDIOLOGY4</a></li>
                </ul>
              
              </li>
              <li><a href="#">NEUROLOGY</a></li>
              <li><a href="#">GENERAL SURGERY</a></li>
              <li><a href="#">UROLOGY</a></li>
              <li><a href="#">ORTHOPEDICS</a></li>
            </ul>
    
        </li>
        <li><a href="#"><i style="font-size: 15px;" class="fas fa-user-injured fa-wa"></i> FOR PATIENT</a>
          <ul>
              <li><a href="#">ADMISSION GUIDE</a></li>
              <li><a href="../Room Rate/Room_Rate.html">ROOM RATE</a></li>
              <li><a href="#">BLOOD BANK</a></li>
              <li><a href="#">DAY CARE</a></li>
              <li><a href="#">DISCHARGE GUIDE</a></li>
          </ul>
        
        </li>
        <li><a href="#"><i style="font-size: 15px;" class="fa fa-user-md fa-wa"></i> FOR DOCTOR</a>
            <ul>
                <li><a href="#">LIBRARY</a></li> 
                <li><a href="#">JOURNAL</a></li> 
            </ul>
        </li>
        <li><a href="#"><i style="font-size: 15px;" class="fa fa-video-camera fa-wa"></i> MEDIA & NEWS</a>
          <ul>
                <li><a href="#">NEWS</a></li> 
                <li><a href="#">ARCHIVE</a></li> 
          </ul>
        </li> 
        
        <li><a href="#">CAREERS</a></li>
        <li><a href="#">SUPPORT</a>
           
        </li>
        <li><a href="../login/login.php"><i style="font-size: 15px;" class="fa fa-gear fa-wa fa-spin"></i> LOGIN</a></li>
        </ul> 
       </div>
	   
	   
	   
	   
	   
    
    <div id="banner">
     
       
    </div>







   <div id="bdy">     
<?php

error_reporting(0);
include("mysql.php");

if(isset($_POST['search']))
{
    $search=$_POST['search'];
    $query="SELECT * FROM doctor WHERE name LIKE '%$search%' or speciality LIKE '%$search%'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
}
    else
    {
      $query="SELECT * FROM doctor";
      $data=mysqli_query($conn,$query);
      $search='';
      $total=mysqli_num_rows($data);  
    }
 ?>
 <div id="search">
		<form  action="" method="POST" >
    
          <input type="text" name="search" class="search" placeholder="Search by name or Speciality" value="<?php echo $search; ?>">
          <button  id="button" >Search</button>
    
    
    </form> 
      </div>
    
<?php
 
if($total!=0)
{
	?>
	                                    
	<table>
	<thead>
	 <tr>
	    <th>Name</th>
	    <th>Department</th>
	    <th>Degree</th>
	    <th>Speciality</th>
	    <th>Designation</th>
	    <th>Gender</th>
         <th>EMAIL</th>
	    <th>PHONE</th>
		<th>Image</th>
	 
	 
	 </tr>
	
	</thead>
	
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
		    <td>".$result["name"]."</td>
		    <td>".$result["dept"]."</td>
		    <td>".$result["degree"]."</td>
		    <td>".$result["speciality"]."</td>
		    <td>".$result["designation"]."</td>
            <td>".$result["gender"]."</td>
            <td>".$result["email"]."</td>
		    <td>".$result["phone"]."</td>
		   <td><a href='#'></a></td>
		    
			
			
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



<footer id="footer">
        <div id="up_footer">
       <div id="location">
            <ul><li><h3>OUR LOCATION</h3></li>
                <li><i class="fas fa-globe"></i>&nbsp;&nbsp;&nbsp;408/1, Kuratoli,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Khilkhet,Dhaka 1229,<br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Bangladesh</li><br>
                <li><i class="fa fa-phone fa-wa "></i>&nbsp;  0937545</li><br>
                <li><i class="fa fa-fax fa-wa "></i>  &nbsp;info@abchospital.com</li>  
            </ul>
           
        </div>
            <hr class="hr1">
       <div id="usefulLink">
            <h3>USEFUL LINKS</h3>
            <a href="#"> Contac Us</a>
            </div><hr class="hr1">
       <div id="usefulLink2">
             <h3>USEFUL LINKS</h3>
            <a href="#"> Contac Us</a>
            </div><hr class="hr1">
       <div id="quicklink">
            <h3>QUICK LINKS</h3>
            <a href="#"> Web e-mail</a><br>
            <a href="#"> Find a doctor</a><br>
            <a href="#"> Make an Appointment</a>
            
            </div>
        </div>
        <div id="button_footer">Copyright © 2020 ABC Hospitals Ltd. Developed by AIUBian.</div>
     </footer>
       
       
       
       
    <script type="text/javascript">
      $(document).ready(function(){
         $("button#menuButton").click(function(){
           $("#navbar").toggle();
           });
             });
       
    </script>
    </div><!-- main div -->



</body>
</html>



