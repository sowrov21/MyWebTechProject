<?php 
	session_start(); 
	include('../../control/db.php');
	if(empty($_SESSION["username"])) 
	{
		header("Location: ../../login/login.php"); // Redirecting To Home Page
	}

?>





<?php
    error_reporting(0);         /* Populate table*/

    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery = "";
	$p_name=$_SESSION["username"];

    if(isset($_POST['search'])){
        $searchFor =$_POST['searchText'];
        $userQuery=$connection->Search($conobj,"prescription",$searchFor);
    }
    else{
            $userQuery=$connection->All($conobj,"prescription",$p_name);
            $searchFor = "";
        }

    if($userQuery->num_rows > 0){
?>






<html>
<head> 
<link rel="stylesheet" href="my_prexcription.css">

</head>



<body>

  
    <div class="admin-table" >                            <!-- Prescription Table -->
                    <div  class="tile1"><h2> <?php echo "Prescription Table Of ".$_SESSION["username"]?></h2> </div>

                    <div class="full-table">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    
                                   
                                    <th>Medicine Name</th>
                                    <th>Dosages</th>
                                    <th>Unit</th>
									<th>Instruction</th>
									<th>Days</th>
									<th>Date</th>
                                   
                                </tr>
                            </thead>

                        <?php
                                while($row = mysqli_fetch_assoc($userQuery)){
                                    echo "<tr>
                                            
                                           
                                            <td>". $row["medicine"]. " </td>
                                             <td>". $row["dosages"]. " </td>
                                            <td>". $row["unit"]. " </td>
											<td>". $row["instruction"]. " </td>
											<td>". $row["day"]. " </td>
											<td>". $row["date"]. " </td>


											
        
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