
<?php 
	session_start(); 
	include('../../control/db.php');
	if(empty($_SESSION["username"])) 
	{
		header("Location: ../../login/login.php"); // Redirecting To Home Page
	}

?>


<?php
    if (isset($_GET['p_username'])) {        /* */
        $p_username = $_GET['p_username'];
            $d_name =$_GET['d_name'];
       if (isset($_POST['submit'])) {
            
            $mname =$_POST['mname'];
           
           $dosages =$_POST['dosages'];
		   $dUnit =$_POST['dUnit'];
		   $instruction =$_POST['instruction'];
		   $day =$_POST['day'];
		   $date =$_POST['date'];
		  

            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->Create_Prescription($conobj,"prescription",$p_username,$d_name,$mname,$dosages,$dUnit,$instruction,$day,$date);

            if ($userQuery > 0) {
                echo "<script>alert('Submit Successfuly')</script>";
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
    error_reporting(0);         /* Populate table*/

    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery = "";

    if(isset($_POST['search'])){
        $searchFor =$_POST['searchText'];
        $userQuery=$connection->Search($conobj,"prescription",$searchFor);
    }
    else{
            $userQuery=$connection->All($conobj,"prescription");
            $searchFor = "";
        }

    if($userQuery->num_rows > 0){
?>






<html>
<head>
    
    <link href="prescriptionForms.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="prescription_table.css">
    </head>
<body>
    
    
    <form  action="" method="post">
     
	 
	 <div id="div1">   
<label>Patient Name:</label>
        <input type="text" name="pname" value="<?php echo $p_username; ?>" id="pname"><br><br>
<label>Doctor Name:</label>
        <input type="text" name="dname" value="<?php echo $d_name; ?>" id="dname"><br><br>
        
<label class="Lmname">Medicine Name:</label>
        <input type="text" name="mname" value="" id="mname"><br><br>
<label class="Ldosage">Dosages:</label>
        <select name="dosages" id="dosages" >
          <option value="">select</option>
          <option value="1+1+1">1+1+1</option>
          <option value="1+0+1">1+0+1</option>                
          <option value="0+1+0">0+1+0</option>
          
        </select><br><br>
        </div>
        <div id="div2">
<label>Dosages Unit:</label>
        <select name="dUnit" id="dUnit" >
          <option value="">select</option>
          <option value="1pc">1pc</option>
          <option value="2pc">2pc</option>                
          <option value="1teasp">1teasp</option>
          <option value="2teasp">2teasp</option>              
        </select><br><br>
        
        
<label class="Linstruction">Instruction:</label>
        <select name="instruction" id="instruction" >
          <option value="">select</option>
          <option value="Before Food">Before Food</option>
          <option value="After Food">After Food</option>       
        </select><br><br>
        
<label class="Lday">Days:</label>
        <input type="text" name="day" value="" id="day"><br><br>
        
<label class="Ldate">Date:</label>
        <input type="date" name="date" value="" id="date"><br><br>
</div>            
        <input type="submit" name="submit" id="submit" value="Add">
        </form>
    
     
    
    <div class="admin-table" >                            <!-- admin table CSS style for admin panel -->
                    <div  class="tile1"><h2>Prescription Table  </h2> </div>

                    <div class="full-table">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>Patient Username</th>
                                    
                                    <th>Medicine Name</th>
                                    <th>Dosages</th>
                                    <th>Unit</th>
									<th>Instruction</th>
									<th>Days</th>
									<th>Date</th>
                                    <th>Oparation</th> 
                                </tr>
                            </thead>

                        <?php
                                while($row = mysqli_fetch_assoc($userQuery)){
                                    echo "<tr>
                                            <td>". $row["p_name"]. " </td>
                                           
                                            <td>". $row["medicine"]. " </td>
                                             <td>". $row["dosages"]. " </td>
                                            <td>". $row["unit"]. " </td>
											<td>". $row["instruction"]. " </td>
											<td>". $row["day"]. " </td>
											<td>". $row["date"]. " </td>

                                             <td>   
											 <a href='prescriptionForms.php?p_username=$row[p_username] & d_name=$row[d_name]&  
											 
											 category=$row[category] & date=$row[date]  & slot=$row[slot]'>Edit</a>
											 
											 </td>                 											
											
        
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
    

    </body>

</html>