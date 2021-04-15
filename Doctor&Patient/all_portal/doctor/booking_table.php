<?php 
	
	include('../../control/db.php');
	
?>


<?php
    error_reporting(0);

    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery = "";

    if(isset($_POST['search'])){
        $searchFor =$_POST['searchText'];
        $userQuery=$connection->Search($conobj,"booking",$searchFor);
    }
    else{
            $userQuery=$connection->All($conobj,"booking");
            $searchFor = "";
        }

    if($userQuery->num_rows > 0){
?>











<html>

<head>
 <link rel="stylesheet" href="booking_table_style.css">
</head>


<body>



<div class="admin-table" >                            <!-- admin table CSS style for admin panel -->
                    <div  class="tile1"><h2>Booking Table  </h2> </div>

                    <div class="full-table">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>Patient Username</th>
                                    <th>Doctor Name</th>
                                    <th>Department</th>
                                    <th>Date</th>
                                    <th>Slot</th>
                                    <th>Oparation</th> 
                                </tr>
                            </thead>

                        <?php
                                while($row = mysqli_fetch_assoc($userQuery)){
                                    echo "<tr>
                                            <td>". $row["p_username"]. " </td>
                                            <td>". $row["d_name"]. " </td>
                                            <td>". $row["category"]. " </td>
                                             <td>". $row["date"]. " </td>
                                            <td>". $row["slot"]. " </td>

                                             <td>   
											 <a href='prescriptionForms.php?p_username=$row[p_username] & d_name=$row[d_name]&  
											 
											 category=$row[category] & date=$row[date]  & slot=$row[slot]'>Prescribe</a>
											 
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

