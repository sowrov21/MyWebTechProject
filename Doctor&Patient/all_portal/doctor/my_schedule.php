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
    $d_username = $_SESSION["username"];
    if(isset($_POST['search'])){
        $searchFor =$_POST['searchText'];
        $userQuery=$connection->Search($conobj,"schedule",$searchFor);
    }
    else{
            $userQuery=$connection->My_schedule($conobj,"schedule",$d_username);
            $searchFor = "";
        }

    if($userQuery->num_rows > 0){
?>




<html>
<head>
<link rel="stylesheet" href="my_schedule.css">
</head>

<body>






            <div class="info">

                    <div class="admin-table" > <!-- My schedule -->
                        <div  class="tile1"><h2 > <?php echo "Schedule Table of ".$_SESSION["username"]?></h2> </div>
                       <div class="full-table">
                        <table class="content-table">
                            <thead>
                                <tr>
                                   
                                    <th>Chamber</th>
                                    <th>Slot</th>
                                    <th>Room NO</th>
                                    
                                </tr>
                            </thead>

                        <?php
                                while($row = mysqli_fetch_assoc($userQuery)){
                                    echo "<tr>
                                            
                                            <td>". $row["chember"]. " </td>
                                            <td>". $row["slot"]. " </td>
                                            <td>". $row["room"]. " </td>

                                          

        
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






</body>

</html>