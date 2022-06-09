<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<?php

include_once("users/php/DBConnect.php");

$db = new DBConnect();
$mysqli = $db->mysqli();
$result = mysqli_query($mysqli, "SELECT * FROM donors ORDER BY id DESC");
?>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-20">
            <?php if(isset($donors)): $i++;?>
            <table class="table table-condensed">
                <thead style="font-size:small ; font-weight:bold">
                <th>Name</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Birthdate</th>
                <th>Address</th>
                <th>City</th>
                <th>Mobile</th>
                <th>Phone</th>
                <th>Donation Date</th>
                <th>Statistics</th>
                <th>Temperature</th>
                <th>Pulse</th>
                <th>Blood Pressure</th>
                <th>Weight</th>
                <th>Hemoglobin</th>
                <th>HBsAg</th>
                <th>Aids</th>
                <th>Malaria Smear</th>
                <th>Hematocrit</th>
                </thead>
                <?php 
                while($res = mysqli_fetch_array($result)) { 
                $i++;
                ?>
                    <tr class="<?php if($i%2==0){echo "bg-success";}else{echo 'bg-danger';} ?>" style="color:white ; font-size:x-small">
                    <?php 
                        echo "<td>".$res['fname']." ".$res['mname']." ".$res['lname']."</td>";
                        echo "<td>".$res['sex']."</td>";
                        echo "<td>".$res['b_type']."</td>";	
                        echo "<td>".$res['bday']."</td>";	
                        echo "<td>".wordwrap($res['h_address'], 26, '<br>')."</td>";	
                        echo "<td>".$res['city']."</td>";	
                        echo "<td>".$res['mobile']."</td>";	
                        echo "<td>".$res['phone']."</td>";	
                        echo "<td>".$res['don_date']."</td>";
                        echo "<td>".$res['stats']."</td>";
                        echo "<td>".$res['temp']."</td>";	
                        echo "<td>".$res['pulse']."</td>";
                        echo "<td>".$res['bp']."</td>";
                        echo "<td>".$res['weight']."</td>";
                        echo "<td>".$res['hemoglobin']."</td>";
                        echo "<td>".$res['hbsag']."</td>";
                        echo "<td>".$res['aids']."</td>";		
                        echo "<td>".$res['malaria_smear']."</td>";
                        echo "<td>".$res['hematocrit']."</td>";								
                        echo "<td><a href=\"editdonor.php?id=$res[id]\"><i class=\"fa-solid fa fa-pen\" aria-hidden=\"true\" style=\"color:white ;\"></i></a></td>";
                        echo "<td><a href=\"deletedonor.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class=\"fa fa-trash\" aria-hidden=\"true\" style=\"color:white ;\"></i></a></td>";
			        echo "</tr>";
		        }
		
		        //Step 5: Freeing Resources and Closing Connection using mysqli
		        mysqli_close($mysqli);
	            ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>